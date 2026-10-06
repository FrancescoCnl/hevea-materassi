<?php
/**
 * Richiede, impostate PRIMA dell'include:
 * $productName, $productDescription, $productUrl
 * $productImage (opzionale, null se non esiste una foto reale)
 * $productPriceEuro (opzionale, null se il prezzo non è ancora stato comunicato dal cliente)
 */
$product = [
    '@context' => 'https://schema.org',
    '@type' => 'Product',
    'name' => $productName,
    'description' => $productDescription,
    'brand' => ['@type' => 'Brand', 'name' => 'Hevea'],
    'url' => $productUrl,
];
if (!empty($productImage)) {
    $product['image'] = $productImage;
}
if (!empty($productPriceEuro)) {
    $product['offers'] = [
        '@type' => 'Offer',
        'url' => $productUrl,
        'priceCurrency' => 'EUR',
        'price' => $productPriceEuro,
        'availability' => 'https://schema.org/InStock',
        'seller' => ['@type' => 'Organization', 'name' => 'Hevea Materassi'],
    ];
}
// AggregateRating volutamente assente: da decidere se usare un rating unico o uno per sede
?>
<script type="application/ld+json"><?php echo json_encode($product, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>
