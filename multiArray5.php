<?php

$vehicles = [
    'categories' => [
        'Cars' => [
            'brands' => ['Toyota', 'Honda'],
            'models' => ['Corolla', 'Civic'],
            'variants' => ['Hybrid', 'Gasoline'],
        ],
        'Motorcycles' => [
            'brands' => ['Yamaha', 'Kawaski'],
            'types' => ['Sport', 'Cruiser'],
        ],
    ],
];

function vehicle($vehicles)
{

    $output = [];
    foreach ($vehicles['categories'] as $category => $details) {
        if ($category === 'Cars') {
            foreach ($details['brands'] as $brand) {
                foreach ($details['models'] as $model) {
                    foreach ($details['variants'] as $variant) {
                        $output[] = "$category-$brand-$model-$variant";
                    }
                }
            }
        } elseif ($category === 'Motorcycles') {
            foreach ($details['brands'] as $brand) {
                foreach ($details['types'] as $type) {
                    $output[] = "$category-$brand-$type";
                }
            }
        }
    }

    return $output;
}

     $veh = vehicle($vehicles);


     foreach ($veh as $detail) {
        echo $detail . "<br>";
    }