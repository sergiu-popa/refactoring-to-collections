<?php

include('vendor/autoload.php');

$productJson = json_decode(file_get_contents('products.json'), true);

$products = collect($productJson['products']);

$totalCost = $products->filter(function ($product) {
    return collect(['Lamp', 'Wallet'])->contains($product['product_type']);
})->flatMap(function ($product) {
    return $product['variants'];
})->sum('price');

dd($totalCost);

/*
foreach ($products as $product) {
    $productType = $product['product_type'];
    if ($productType == 'Lamp' || $productType == 'Wallet') {
        foreach ($product['variants'] as $productVariant) {
            $totalCost += $productVariant['price'];
        }
    }
}
*/