<?php
$baseSKU = 'kf1097';
$varOptions = [
    [
        'name' => 'size',
        'options' => [40, 41, 42, 43],
    ],

    [
        'name' => 'color',
        'options' => [
            'black',
            'brown',
            'chocolate',
        ],
    ],

    [
        'name' => 'price',
        'options' => [10, 15, 24, 40],
    ]
];


function prepareCodes($varOptions, $baseSKU)
{

    $sizes = $varOptions[0]['options'];
    $colors = $varOptions[1]['options'];
    $prices = $varOptions[2]['options'];

    $output = [];
    foreach ($sizes as $size) {
        foreach ($colors as $color) {
            foreach ($prices as $price) {
                echo $output[] = "$baseSKU-$color-$size-$price <br>";
            }
        }
    }

    // for($i = 0; $i<count($sizes); $i++){
    //     for($j = 0; $j < count($colors); $j++){
    //         for($k = 0; $k < count($prices) ; $k++){
    //             echo "$baseSKU-$colors[$j]-$sizes[$i]-$prices[$k] <br>";
    //         }
    //     }
    // }

    // write your code here.
}
prepareCodes($varOptions, $baseSKU);


// Output

// kf1097-black-40-10
// kf1097-black-40-15
// kf1097-black-40-24
// kf1097-black-40-40
// kf1097-brown-40-10
// kf1097-brown-40-15
// kf1097-brown-40-24
// kf1097-brown-40-40
// kf1097-chocolate-40-10
// kf1097-chocolate-40-15
// kf1097-chocolate-40-24
// kf1097-chocolate-40-40
// kf1097-black-41-10
// kf1097-black-41-15
// kf1097-black-41-24
// kf1097-black-41-40
// kf1097-brown-41-10
// kf1097-brown-41-15
// kf1097-brown-41-24
// kf1097-brown-41-40
// kf1097-chocolate-41-10
// kf1097-chocolate-41-15
// kf1097-chocolate-41-24
// kf1097-chocolate-41-40
// kf1097-black-42-10
// kf1097-black-42-15
// kf1097-black-42-24
// kf1097-black-42-40
// kf1097-brown-42-10
// kf1097-brown-42-15
// kf1097-brown-42-24
// kf1097-brown-42-40
// kf1097-chocolate-42-10
// kf1097-chocolate-42-15
// kf1097-chocolate-42-24
// kf1097-chocolate-42-40
// kf1097-black-43-10
// kf1097-black-43-15
// kf1097-black-43-24
// kf1097-black-43-40
// kf1097-brown-43-10
// kf1097-brown-43-15
// kf1097-brown-43-24
// kf1097-brown-43-40
// kf1097-chocolate-43-10
// kf1097-chocolate-43-15
// kf1097-chocolate-43-24
// kf1097-chocolate-43-40














