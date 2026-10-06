<?php
/**
 * Rispecchia parola per parola le 7 FAQ visibili in home (sezione #faq).
 */
$homeFaq = [
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => [
        [
            '@type' => 'Question',
            'name' => 'La consulenza è gratis?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Sì, completamente gratis e senza impegno. Ci racconti come dormi, capiamo di cosa hai bisogno, e finiamo il lavoro insieme a un esperto, in showroom.',
            ],
        ],
        [
            '@type' => 'Question',
            'name' => 'Devo per forza venire in negozio?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Il materasso giusto si prova: in showroom lo finiamo su misura con te. Se non puoi venire subito, parli prima con un esperto al telefono o su WhatsApp.',
            ],
        ],
        [
            '@type' => 'Question',
            'name' => 'È davvero personalizzato o è solo marketing?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Davvero. Alcuni materassi li componiamo strato per strato e ne tariamo densità e portanza fisicamente, in base al tuo corpo e a come dormi.',
            ],
        ],
        [
            '@type' => 'Question',
            'name' => 'Quanto ci vuole per abituarsi a un materasso nuovo?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => "Qualche settimana: il corpo deve adattarsi, ed è normale. Il punto è distinguere l'assestamento da un materasso sbagliato, e da solo è difficile. Per questo restiamo in contatto: se passate le prime settimane qualcosa non va, per un anno lo modelliamo finché non è giusto.",
            ],
        ],
        [
            '@type' => 'Question',
            'name' => "C'è una prova o una garanzia?",
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => "Il metodo Hevea serve esattamente a non arrivarci: a non avere problemi dopo l'acquisto, e a dare a ognuno il materasso giusto per il suo corpo e per la sua situazione. Per questo analizziamo prima come dormi, quanto pesi, che problemi fisici hai: così la scelta è giusta fin da subito. Capita molto di rado di doverci tornare.\n\nMa può succedere. E se succede, per il primo anno dalla data di consegna lo sistemiamo gratis: cambiamo strati, topper o portanza, tutte le volte che serve, finché non dormi bene. Non è un cambio di modello: è la messa a punto di quello che hai scelto.\n\nDal secondo anno si può ancora modificare, se serve evolverlo o aggiornarlo per cambi di peso o problemi fisici, ma a pagamento.",
            ],
        ],
        [
            '@type' => 'Question',
            'name' => 'Quanto costa? Avete soluzioni per ogni budget?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Sì. Il giusto per te non è il più caro: è quello che risponde a come dormi. Lavoriamo su ogni budget, e in più i nostri materassi sono dispositivi medici detraibili.',
            ],
        ],
        [
            '@type' => 'Question',
            'name' => 'Devo per forza comprare dopo la consulenza?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'No. La consulenza serve a capire qual è il materasso giusto per te. Poi decidi tu, coi tuoi tempi. Niente telefonate insistenti, niente pressioni: esci anche solo con le idee più chiare.',
            ],
        ],
    ],
];
?>
<script type="application/ld+json"><?php echo json_encode($homeFaq, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>
