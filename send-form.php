<?php
declare(strict_types=1);

header('Content-Type: application/json; charset=UTF-8');

require __DIR__ . '/mailer/smtp-mailer.php';

function hevea_json_exit(bool $ok, string $message = ''): void
{
    echo json_encode(['ok' => $ok, 'message' => $message], JSON_UNESCAPED_UNICODE);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    hevea_json_exit(false, 'Metodo non consentito');
}

// Honeypot: se compilato, è quasi certamente un bot. Rispondiamo "ok" senza inviare nulla.
if (!empty($_POST['sito_web'])) {
    hevea_json_exit(true);
}

$nome = trim((string) ($_POST['nome'] ?? ''));
$telefono = trim((string) ($_POST['telefono'] ?? ''));
$showroom = trim((string) ($_POST['showroom'] ?? ''));
$contatto = trim((string) ($_POST['contatto'] ?? ''));

$showroomValide = ['Showroom Bari', 'Showroom Foggia', 'Showroom Andria'];
$contattoValidi = ['Telefono', 'WhatsApp'];

$cifre = preg_replace('/\D/', '', $telefono);

if ($nome === '' || mb_strlen($nome) > 80) {
    http_response_code(422);
    hevea_json_exit(false, 'Nome non valido');
}
if (strlen($cifre) < 8 || strlen($cifre) > 11) {
    http_response_code(422);
    hevea_json_exit(false, 'Numero di telefono non valido');
}
if (!in_array($showroom, $showroomValide, true)) {
    http_response_code(422);
    hevea_json_exit(false, 'Showroom non valido');
}
if (!in_array($contatto, $contattoValidi, true)) {
    http_response_code(422);
    hevea_json_exit(false, 'Preferenza di contatto non valida');
}

$config = require __DIR__ . '/config.php';

$corpo = "Nuova richiesta di consulenza dal sito Hevea\n\n";
$corpo .= "Nome: $nome\n";
$corpo .= "Telefono: $telefono\n";
$corpo .= "Showroom preferito: $showroom\n";
$corpo .= "Contattare via: $contatto\n";

if ($contatto === 'WhatsApp') {
    $numeroWa = (strlen($cifre) <= 10) ? ('39' . $cifre) : $cifre; // aggiunge prefisso IT se assente
    $messaggioWa = rawurlencode("Ciao $nome, la contattiamo da Hevea Materassi per la consulenza richiesta.");
    $corpo .= "\nApri la chat WhatsApp: https://wa.me/$numeroWa?text=$messaggioWa\n";
}

$corpo .= "\nRicevuto il " . date('d/m/Y H:i');

[$inviata, $errore] = hevea_send_smtp_mail(
    $config['smtp'],
    $config['smtp']['user'],
    $config['from_name'],
    $config['to_email'],
    'Nuova richiesta consulenza - ' . $nome,
    $corpo,
    '' // nessun reply-to: il form non raccoglie l'email del cliente
);

if (!$inviata) {
    error_log('Hevea send-form: invio SMTP fallito - ' . $errore);
    http_response_code(502);
    hevea_json_exit(false, 'Invio non riuscito');
}

hevea_json_exit(true);
