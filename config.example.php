<?php
/**
 * Credenziali SMTP della casella email usata dal form di contatto.
 * Copiare questo file in config.php e inserire i valori reali.
 * config.php è escluso dal repository (.gitignore) e bloccato via URL dal .htaccess.
 */

return [
    'smtp' => [
        'host' => 'smtps.example.com',   // server SMTP in uscita del provider
        'port' => 465,                   // 465 = SSL implicito, 587 = STARTTLS
        'user' => 'form@example.com',
        'pass' => 'PASSWORD_SMTP',
    ],
    'to_email' => 'destinatario@example.com',
    'from_name' => 'Sito web',
];
