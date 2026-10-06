<?php
/**
 * Client SMTP minimale (nessuna libreria esterna necessaria).
 * Supporta SMTPS implicito (porta 465) e STARTTLS (porta 587), con AUTH LOGIN.
 */

function hevea_send_smtp_mail(array $smtp, string $fromEmail, string $fromName, string $toEmail, string $subject, string $body, string $replyTo = ''): array
{
    $host = $smtp['host'];
    $port = (int) $smtp['port'];
    $useImplicitTls = $port === 465;
    $transport = $useImplicitTls ? 'ssl://' . $host : $host;

    $errno = 0;
    $errstr = '';
    $socket = @stream_socket_client($transport . ':' . $port, $errno, $errstr, 15, STREAM_CLIENT_CONNECT);
    if (!$socket) {
        return [false, "Connessione SMTP fallita: $errstr"];
    }
    stream_set_timeout($socket, 15);

    $read = function () use ($socket) {
        $data = '';
        while ($line = fgets($socket, 515)) {
            $data .= $line;
            if (isset($line[3]) && $line[3] === ' ') break;
        }
        return $data;
    };
    $write = function ($cmd) use ($socket) {
        fwrite($socket, $cmd . "\r\n");
    };
    $expect = function ($data, $code) {
        return strpos($data, (string) $code) === 0 || preg_match('/^' . preg_quote((string) $code, '/') . '/m', $data);
    };

    $banner = $read();
    if (!$expect($banner, 220)) { fclose($socket); return [false, 'Banner SMTP inatteso']; }

    $ehloName = 'localhost';
    $write("EHLO $ehloName");
    $ehloResp = $read();
    if (!$expect($ehloResp, 250)) { fclose($socket); return [false, 'EHLO rifiutato']; }

    if (!$useImplicitTls) {
        $write('STARTTLS');
        $resp = $read();
        if (!$expect($resp, 220)) { fclose($socket); return [false, 'STARTTLS rifiutato']; }
        if (!stream_socket_enable_crypto($socket, true, STREAM_CRYPTO_METHOD_TLS_CLIENT)) {
            fclose($socket); return [false, 'Handshake TLS fallito'];
        }
        $write("EHLO $ehloName");
        $ehloResp = $read();
        if (!$expect($ehloResp, 250)) { fclose($socket); return [false, 'EHLO post-TLS rifiutato']; }
    }

    $write('AUTH LOGIN');
    $resp = $read();
    if (!$expect($resp, 334)) { fclose($socket); return [false, 'AUTH LOGIN rifiutato']; }

    $write(base64_encode($smtp['user']));
    $resp = $read();
    if (!$expect($resp, 334)) { fclose($socket); return [false, 'Username rifiutato']; }

    $write(base64_encode($smtp['pass']));
    $resp = $read();
    if (!$expect($resp, 235)) { fclose($socket); return [false, 'Autenticazione SMTP fallita']; }

    $write("MAIL FROM:<$fromEmail>");
    $resp = $read();
    if (!$expect($resp, 250)) { fclose($socket); return [false, 'MAIL FROM rifiutato']; }

    $write("RCPT TO:<$toEmail>");
    $resp = $read();
    if (!$expect($resp, 250)) { fclose($socket); return [false, 'RCPT TO rifiutato']; }

    $write('DATA');
    $resp = $read();
    if (!$expect($resp, 354)) { fclose($socket); return [false, 'DATA rifiutato']; }

    $encodedSubject = '=?UTF-8?B?' . base64_encode($subject) . '?=';
    $encodedFromName = '=?UTF-8?B?' . base64_encode($fromName) . '?=';
    $headers = [];
    $headers[] = "From: $encodedFromName <$fromEmail>";
    $headers[] = "To: <$toEmail>";
    if ($replyTo !== '') $headers[] = "Reply-To: <$replyTo>";
    $headers[] = "Subject: $encodedSubject";
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-Type: text/plain; charset=UTF-8';
    $headers[] = 'Content-Transfer-Encoding: 8bit';
    $headers[] = 'Date: ' . date('r');

    $normalizedBody = preg_replace('/\r\n|\r|\n/', "\r\n", $body);
    $escapedBody = preg_replace('/^\./m', '..', $normalizedBody);
    $message = implode("\r\n", $headers) . "\r\n\r\n" . $escapedBody . "\r\n.";

    $write($message);
    $resp = $read();
    if (!$expect($resp, 250)) { fclose($socket); return [false, 'Invio rifiutato dal server']; }

    $write('QUIT');
    fclose($socket);

    return [true, 'OK'];
}
