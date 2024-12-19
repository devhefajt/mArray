<?php

$ecommerce = [
    'product' => [
        'id' => 1001,
        'variations' => [
            'Colors' => ['Red', 'Blue'],
            'Sizes' => ['S', 'M', 'L'],
            'Extras' => ['Gift Wrap', 'Priority Shipping'],
        ],
    ],
];

// Recursive function to generate all combinations of product variations
function generateVariations($variations, $prefix = [])
{
    $result = [];
    $currentKey = array_key_first($variations);

    // Base case: If no more variations, return the current prefix
    if (!$currentKey) {
        return [$prefix];
    }

    $remainingVariations = $variations;
    unset($remainingVariations[$currentKey]);

    foreach ($variations[$currentKey] as $value) {
        $newPrefix = $prefix;
        $newPrefix[] = $value;

        $result = array_merge(
            $result,
            generateVariations($remainingVariations, $newPrefix)
        );
    }

    return $result;
}

// Extract product ID and variations
$productID = $ecommerce['product']['id'];
$variations = $ecommerce['product']['variations'];

// Generate all combinations of variations
$combinations = generateVariations($variations);

// Format and output the combinations
foreach ($combinations as $combination) {
    echo $productID . '-' . implode('-', $combination) . "<br>";
}
