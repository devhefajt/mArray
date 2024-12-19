<?php
$baseSKU = 'prd-2024';

$varOptions = [
    [
        'name' => 'category',
        'options' => ['men', 'women', 'kids'],
    ],
    [
        'name' => 'subcategory',
        'options' => ['shoes', 'jackets', 'accessories'],
    ],
    [
        'name' => 'size',
        'options' => [
            'XS', 'S', 'M', 'L', 'XL', 'XXL',
        ],
    ],
    [
        'name' => 'color',
        'options' => [
            'black', 'blue', 'red', 'green', 'white',
        ],
    ],
    [
        'name' => 'price',
        'options' => [10, 20, 50, 75, 100, 150],
    ],
    [
        'name' => 'stock',
        'options' => ['in-stock', 'out-of-stock'],
    ],
];

function ecom($varOptions, $baseSKU)
{
    $categories = $varOptions[0]['options'];
    $subcategories = $varOptions[1]['options'];
    $sizes = $varOptions[2]['options'];
    $colors = $varOptions[3]['options'];
    $prices = $varOptions[4]['options'];
    $stocks = $varOptions[5]['options'];

    $output = [];
    foreach ($categories as $category) {
        foreach ($subcategories as $subcategory) {
            foreach ($sizes as $size) {
                foreach ($colors as $color) {
                    foreach ($prices as $price) {
                        foreach ($stocks as $stock) {
                           echo $output[] = "$baseSKU-$category-$subcategory-$size-$color-$price-$stock <br>";
                        }
                    }
                }
            }
        }
    }

    // Display the results
    // foreach ($output as $code) {
    //     echo $code . "<br>";
    // }

    // return $output;
}

// Call the function
ecom($varOptions, $baseSKU);

// output:
// prd-2024-men-shoes-XS-black-10-in-stock
// prd-2024-men-shoes-XS-black-10-out-of-stock
// prd-2024-men-shoes-XS-black-20-in-stock
// prd-2024-men-shoes-XS-black-20-out-of-stock
// prd-2024-men-shoes-XS-black-50-in-stock
// prd-2024-men-shoes-XS-black-50-out-of-stock
// prd-2024-men-shoes-XS-black-75-in-stock
// prd-2024-men-shoes-XS-black-75-out-of-stock
// prd-2024-men-shoes-XS-black-100-in-stock
// prd-2024-men-shoes-XS-black-100-out-of-stock
// prd-2024-men-shoes-XS-black-150-in-stock
// prd-2024-men-shoes-XS-black-150-out-of-stock
// prd-2024-men-shoes-XS-blue-10-in-stock
// prd-2024-men-shoes-XS-blue-10-out-of-stock
// prd-2024-men-shoes-XS-blue-20-in-stock
// prd-2024-men-shoes-XS-blue-20-out-of-stock
// prd-2024-men-shoes-XS-blue-50-in-stock
// prd-2024-men-shoes-XS-blue-50-out-of-stock
// prd-2024-men-shoes-XS-blue-75-in-stock
// prd-2024-men-shoes-XS-blue-75-out-of-stock
// prd-2024-men-shoes-XS-blue-100-in-stock
// prd-2024-men-shoes-XS-blue-100-out-of-stock
// prd-2024-men-shoes-XS-blue-150-in-stock
// prd-2024-men-shoes-XS-blue-150-out-of-stock
// prd-2024-men-shoes-XS-red-10-in-stock
// prd-2024-men-shoes-XS-red-10-out-of-stock
// prd-2024-men-shoes-XS-red-20-in-stock
// prd-2024-men-shoes-XS-red-20-out-of-stock
// prd-2024-men-shoes-XS-red-50-in-stock
// prd-2024-men-shoes-XS-red-50-out-of-stock
// prd-2024-men-shoes-XS-red-75-in-stock
// prd-2024-men-shoes-XS-red-75-out-of-stock
// prd-2024-men-shoes-XS-red-100-in-stock
// prd-2024-men-shoes-XS-red-100-out-of-stock
// prd-2024-men-shoes-XS-red-150-in-stock
// prd-2024-men-shoes-XS-red-150-out-of-stock
// prd-2024-men-shoes-XS-green-10-in-stock
// prd-2024-men-shoes-XS-green-10-out-of-stock
// prd-2024-men-shoes-XS-green-20-in-stock
// prd-2024-men-shoes-XS-green-20-out-of-stock
// prd-2024-men-shoes-XS-green-50-in-stock
// prd-2024-men-shoes-XS-green-50-out-of-stock
// prd-2024-men-shoes-XS-green-75-in-stock
// prd-2024-men-shoes-XS-green-75-out-of-stock
// prd-2024-men-shoes-XS-green-100-in-stock
// prd-2024-men-shoes-XS-green-100-out-of-stock
// prd-2024-men-shoes-XS-green-150-in-stock
// prd-2024-men-shoes-XS-green-150-out-of-stock
// prd-2024-men-shoes-XS-white-10-in-stock
// prd-2024-men-shoes-XS-white-10-out-of-stock
// prd-2024-men-shoes-XS-white-20-in-stock
// prd-2024-men-shoes-XS-white-20-out-of-stock
// prd-2024-men-shoes-XS-white-50-in-stock
// prd-2024-men-shoes-XS-white-50-out-of-stock
// prd-2024-men-shoes-XS-white-75-in-stock
// prd-2024-men-shoes-XS-white-75-out-of-stock
// prd-2024-men-shoes-XS-white-100-in-stock
// prd-2024-men-shoes-XS-white-100-out-of-stock
// prd-2024-men-shoes-XS-white-150-in-stock
// prd-2024-men-shoes-XS-white-150-out-of-stock
// prd-2024-men-shoes-S-black-10-in-stock
// prd-2024-men-shoes-S-black-10-out-of-stock
// prd-2024-men-shoes-S-black-20-in-stock
// prd-2024-men-shoes-S-black-20-out-of-stock
// prd-2024-men-shoes-S-black-50-in-stock
// prd-2024-men-shoes-S-black-50-out-of-stock
// prd-2024-men-shoes-S-black-75-in-stock
// prd-2024-men-shoes-S-black-75-out-of-stock
// prd-2024-men-shoes-S-black-100-in-stock
// prd-2024-men-shoes-S-black-100-out-of-stock
// prd-2024-men-shoes-S-black-150-in-stock
// prd-2024-men-shoes-S-black-150-out-of-stock
// prd-2024-men-shoes-S-blue-10-in-stock
// prd-2024-men-shoes-S-blue-10-out-of-stock
// prd-2024-men-shoes-S-blue-20-in-stock
// prd-2024-men-shoes-S-blue-20-out-of-stock
// prd-2024-men-shoes-S-blue-50-in-stock
// prd-2024-men-shoes-S-blue-50-out-of-stock
// prd-2024-men-shoes-S-blue-75-in-stock
// prd-2024-men-shoes-S-blue-75-out-of-stock
// prd-2024-men-shoes-S-blue-100-in-stock
// prd-2024-men-shoes-S-blue-100-out-of-stock
// prd-2024-men-shoes-S-blue-150-in-stock
// prd-2024-men-shoes-S-blue-150-out-of-stock
// prd-2024-men-shoes-S-red-10-in-stock
// prd-2024-men-shoes-S-red-10-out-of-stock
// prd-2024-men-shoes-S-red-20-in-stock
// prd-2024-men-shoes-S-red-20-out-of-stock
// prd-2024-men-shoes-S-red-50-in-stock
// prd-2024-men-shoes-S-red-50-out-of-stock
// prd-2024-men-shoes-S-red-75-in-stock
// prd-2024-men-shoes-S-red-75-out-of-stock
// prd-2024-men-shoes-S-red-100-in-stock
// prd-2024-men-shoes-S-red-100-out-of-stock
// prd-2024-men-shoes-S-red-150-in-stock
// prd-2024-men-shoes-S-red-150-out-of-stock
// prd-2024-men-shoes-S-green-10-in-stock
// prd-2024-men-shoes-S-green-10-out-of-stock
// prd-2024-men-shoes-S-green-20-in-stock
// prd-2024-men-shoes-S-green-20-out-of-stock
// prd-2024-men-shoes-S-green-50-in-stock
// prd-2024-men-shoes-S-green-50-out-of-stock
// prd-2024-men-shoes-S-green-75-in-stock
// prd-2024-men-shoes-S-green-75-out-of-stock
// prd-2024-men-shoes-S-green-100-in-stock
// prd-2024-men-shoes-S-green-100-out-of-stock
// prd-2024-men-shoes-S-green-150-in-stock
// prd-2024-men-shoes-S-green-150-out-of-stock
// prd-2024-men-shoes-S-white-10-in-stock
// prd-2024-men-shoes-S-white-10-out-of-stock
// prd-2024-men-shoes-S-white-20-in-stock
// prd-2024-men-shoes-S-white-20-out-of-stock
// prd-2024-men-shoes-S-white-50-in-stock
// prd-2024-men-shoes-S-white-50-out-of-stock
// prd-2024-men-shoes-S-white-75-in-stock
// prd-2024-men-shoes-S-white-75-out-of-stock
// prd-2024-men-shoes-S-white-100-in-stock
// prd-2024-men-shoes-S-white-100-out-of-stock
// prd-2024-men-shoes-S-white-150-in-stock
// prd-2024-men-shoes-S-white-150-out-of-stock
// prd-2024-men-shoes-M-black-10-in-stock
// prd-2024-men-shoes-M-black-10-out-of-stock
// prd-2024-men-shoes-M-black-20-in-stock
// prd-2024-men-shoes-M-black-20-out-of-stock
// prd-2024-men-shoes-M-black-50-in-stock
// prd-2024-men-shoes-M-black-50-out-of-stock
// prd-2024-men-shoes-M-black-75-in-stock
// prd-2024-men-shoes-M-black-75-out-of-stock
// prd-2024-men-shoes-M-black-100-in-stock
// prd-2024-men-shoes-M-black-100-out-of-stock
// prd-2024-men-shoes-M-black-150-in-stock
// prd-2024-men-shoes-M-black-150-out-of-stock
// prd-2024-men-shoes-M-blue-10-in-stock
// prd-2024-men-shoes-M-blue-10-out-of-stock
// prd-2024-men-shoes-M-blue-20-in-stock
// prd-2024-men-shoes-M-blue-20-out-of-stock
// prd-2024-men-shoes-M-blue-50-in-stock
// prd-2024-men-shoes-M-blue-50-out-of-stock
// prd-2024-men-shoes-M-blue-75-in-stock
// prd-2024-men-shoes-M-blue-75-out-of-stock
// prd-2024-men-shoes-M-blue-100-in-stock
// prd-2024-men-shoes-M-blue-100-out-of-stock
// prd-2024-men-shoes-M-blue-150-in-stock
// prd-2024-men-shoes-M-blue-150-out-of-stock
// prd-2024-men-shoes-M-red-10-in-stock
// prd-2024-men-shoes-M-red-10-out-of-stock
// prd-2024-men-shoes-M-red-20-in-stock
// prd-2024-men-shoes-M-red-20-out-of-stock
// prd-2024-men-shoes-M-red-50-in-stock
// prd-2024-men-shoes-M-red-50-out-of-stock
// prd-2024-men-shoes-M-red-75-in-stock
// prd-2024-men-shoes-M-red-75-out-of-stock
// prd-2024-men-shoes-M-red-100-in-stock
// prd-2024-men-shoes-M-red-100-out-of-stock
// prd-2024-men-shoes-M-red-150-in-stock
// prd-2024-men-shoes-M-red-150-out-of-stock
// prd-2024-men-shoes-M-green-10-in-stock
// prd-2024-men-shoes-M-green-10-out-of-stock
// prd-2024-men-shoes-M-green-20-in-stock
// prd-2024-men-shoes-M-green-20-out-of-stock
// prd-2024-men-shoes-M-green-50-in-stock
// prd-2024-men-shoes-M-green-50-out-of-stock
// prd-2024-men-shoes-M-green-75-in-stock
// prd-2024-men-shoes-M-green-75-out-of-stock
// prd-2024-men-shoes-M-green-100-in-stock
// prd-2024-men-shoes-M-green-100-out-of-stock
// prd-2024-men-shoes-M-green-150-in-stock
// prd-2024-men-shoes-M-green-150-out-of-stock
// prd-2024-men-shoes-M-white-10-in-stock
// prd-2024-men-shoes-M-white-10-out-of-stock
// prd-2024-men-shoes-M-white-20-in-stock
// prd-2024-men-shoes-M-white-20-out-of-stock
// prd-2024-men-shoes-M-white-50-in-stock
// prd-2024-men-shoes-M-white-50-out-of-stock
// prd-2024-men-shoes-M-white-75-in-stock
// prd-2024-men-shoes-M-white-75-out-of-stock
// prd-2024-men-shoes-M-white-100-in-stock
// prd-2024-men-shoes-M-white-100-out-of-stock
// prd-2024-men-shoes-M-white-150-in-stock
// prd-2024-men-shoes-M-white-150-out-of-stock
// prd-2024-men-shoes-L-black-10-in-stock
// prd-2024-men-shoes-L-black-10-out-of-stock
// prd-2024-men-shoes-L-black-20-in-stock
// prd-2024-men-shoes-L-black-20-out-of-stock
// prd-2024-men-shoes-L-black-50-in-stock
// prd-2024-men-shoes-L-black-50-out-of-stock
// prd-2024-men-shoes-L-black-75-in-stock
// prd-2024-men-shoes-L-black-75-out-of-stock
// prd-2024-men-shoes-L-black-100-in-stock
// prd-2024-men-shoes-L-black-100-out-of-stock
// prd-2024-men-shoes-L-black-150-in-stock
// prd-2024-men-shoes-L-black-150-out-of-stock
// prd-2024-men-shoes-L-blue-10-in-stock
// prd-2024-men-shoes-L-blue-10-out-of-stock
// prd-2024-men-shoes-L-blue-20-in-stock
// prd-2024-men-shoes-L-blue-20-out-of-stock
// prd-2024-men-shoes-L-blue-50-in-stock
// prd-2024-men-shoes-L-blue-50-out-of-stock
// prd-2024-men-shoes-L-blue-75-in-stock
// prd-2024-men-shoes-L-blue-75-out-of-stock
// prd-2024-men-shoes-L-blue-100-in-stock
// prd-2024-men-shoes-L-blue-100-out-of-stock
// prd-2024-men-shoes-L-blue-150-in-stock
// prd-2024-men-shoes-L-blue-150-out-of-stock
// prd-2024-men-shoes-L-red-10-in-stock
// prd-2024-men-shoes-L-red-10-out-of-stock
// prd-2024-men-shoes-L-red-20-in-stock
// prd-2024-men-shoes-L-red-20-out-of-stock
// prd-2024-men-shoes-L-red-50-in-stock
// prd-2024-men-shoes-L-red-50-out-of-stock
// prd-2024-men-shoes-L-red-75-in-stock
// prd-2024-men-shoes-L-red-75-out-of-stock
// prd-2024-men-shoes-L-red-100-in-stock
// prd-2024-men-shoes-L-red-100-out-of-stock
// prd-2024-men-shoes-L-red-150-in-stock
// prd-2024-men-shoes-L-red-150-out-of-stock
// prd-2024-men-shoes-L-green-10-in-stock
// prd-2024-men-shoes-L-green-10-out-of-stock
// prd-2024-men-shoes-L-green-20-in-stock
// prd-2024-men-shoes-L-green-20-out-of-stock
// prd-2024-men-shoes-L-green-50-in-stock
