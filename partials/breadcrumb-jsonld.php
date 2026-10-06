<?php
/**
 * Richiede $breadcrumbs impostato PRIMA dell'include: array di ['name' => ..., 'url' => ...]
 * dal primo (Home) all'ultimo (pagina corrente).
 */
$items = [];
foreach ($breadcrumbs as $i => $b) {
    $items[] = [
        '@type' => 'ListItem',
        'position' => $i + 1,
        'name' => $b['name'],
        'item' => $b['url'],
    ];
}
$breadcrumbJson = [
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => $items,
];
?>
<script type="application/ld+json"><?php echo json_encode($breadcrumbJson, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>
