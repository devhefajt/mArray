<?php

$properties = [
    'type' => ['Apartment', 'House'],
    'locations' => ['New York', 'California'],
    'features' => [
        'bedrooms' => [1, 2, 3],
        'parking' => ['Garage', 'Street'],
    ],
];

// Recursive function to generate all combinations
function generateCombinations($attributes, $prefix = [])
{
    $result = [];
    $currentKey = array_key_first($attributes);

    // Base case: If no more attributes to process, return the current prefix
    if (!$currentKey) {
        return [$prefix];
    }

    $remainingAttributes = $attributes;
    unset($remainingAttributes[$currentKey]);

    foreach ($attributes[$currentKey] as $value) {
        $newPrefix = $prefix;
        $newPrefix[] = $value;

        $result = array_merge(
            $result,
            generateCombinations($remainingAttributes, $newPrefix)
        );
    }

    return $result;
}

$attributes = [
    'type' => $properties['type'],
    'locations' => $properties['locations'],
    'bedrooms' => $properties['features']['bedrooms'],
    'parking' => $properties['features']['parking'],
];


$combinations = generateCombinations($attributes);


foreach ($combinations as $combination) {
    // Handle singular/plural for "Bedroom(s)"
    $bedrooms = $combination[2] . ' Bedroom' . ($combination[2] > 1 ? 's' : '');
    echo implode('-', [$combination[0], $combination[1], $bedrooms, $combination[3]]) . "<br>";
}
