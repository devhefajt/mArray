<?php

$productData = [
    'product' => [
        'id' => 1,
        'name' => 'sneakers',
        'attributes' => [
            'categories' => ['men', 'women'],
            'sizes' => [7, 8, 9],
            'colors' => ['black', 'white'],
            'materials' => [
                'upper' => ['leather', 'canvas'],
                'sole' => ['rubber'],
            ],
        ],
    ],
];


function ecom($attributes, $prefix = [])
{

    //     Declares a function named ecom that takes:
    // $attributes: An array of attributes to process (e.g., categories, sizes, colors).
    // $prefix: An optional array (default: empty) to store the current combination as it is being built.

    $result = [];
    // Initializes an empty array $result to store all generated combinations.

    $currentKey = array_key_first($attributes);
    // Retrieves the first key from the $attributes array (e.g., 'categories').

    if (!$currentKey) {
        return [$prefix];
    }

    // If there are no more attributes left to process (i.e., $attributes is empty), the function returns an array containing the current $prefix as the final combination.

    $remainingAttributes = $attributes;
    unset($remainingAttributes[$currentKey]);

    // Makes a copy of the $attributes array and removes the current key ($currentKey) to focus on the remaining attributes in the next recursive call.

    foreach ($attributes[$currentKey] as $value) {
        // Iterates over the array of values corresponding to the current key (e.g., 'Men', 'Women' for 'categories').
        $newPrefix = $prefix;
        $newPrefix[] = $value;
        // Creates a new prefix by copying the current $prefix and appending the current value.
        $result = array_merge(
            $result,
            ecom($remainingAttributes, $newPrefix)
            // Calls generateCombinations recursively with the remaining attributes and the updated prefix.
            // Combines the result of this recursive call with the current $result using array_merge.
        );
    }

    return $result;
    // Returns the array of all generated combinations for the given attributes.
}


$attributes = [
    'categories' => $productData['product']['attributes']['categories'],
    'sizes' => $productData['product']['attributes']['sizes'],
    'colors' => $productData['product']['attributes']['colors'],
    'upper' => $productData['product']['attributes']['materials']['upper'],
    'sole' => $productData['product']['attributes']['materials']['sole'],

];

// Extracts attributes from $productData into a flat $attributes array.
// This includes categories, sizes, colors, and nested materials (upper and sole).

$combinations = ecom($attributes);

// Calls ecom with the extracted attributes to generate all possible combinations.

$productName = $productData['product']['name'];
// Retrieves the product name (e.g., 'Sneakers') from $productData.

foreach ($combinations as $combination) {
    echo $productName . "-" . implode('-', $combination) . "<br>";
}
// The implode() function returns a string from the elements of an array.
// Loops through each combination generated by generateCombinations.
// Formats the output by concatenating the product name with the combination using implode.
// Outputs each combination, separated by a newline (PHP_EOL).






// For categories = ['Men', 'Women'] and sizes = ['7', '8'], the function will:

// Start with prefix = [].
// Process the first key categories:
// Append 'Men' → Recursive call with prefix = ['Men'].
// Append 'Women' → Recursive call with prefix = ['Women'].
// Process the next key sizes:
// For 'Men', append '7' → Recursive call with prefix = ['Men', '7'].
// For 'Men', append '8' → Recursive call with prefix = ['Men', '8'].
// Repeat for 'Women'.
// This process continues until all keys are processed, resulting in combinations like:

// Copy code
// Sneakers-Men-7
// Sneakers-Men-8
// Sneakers-Women-7
// Sneakers-Women-8