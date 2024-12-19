<?php

$menu = [
    'categories' => [
        [
            'name' => 'Beverages',
            'items' => [
                'Coffee' => ['Hot', 'Cold'],
                'Tea' => ['Black', 'Green'],
            ],
        ],
        [
            'name' => 'Main Course',
            'items' => ['Steak', 'Pasta', 'Burger'],
        ],
    ],
];

function menu($menu)
{

    $output = [];


    foreach ($menu['categories'] as $category) {

        $categoryName = $category['name'];
        // print_r($categoryName);
        foreach ($category['items'] as $key => $value) {

            // print_r($value);
            if (is_array($value)) {
                foreach ($value as $variant) {
                    $output[] = "$categoryName-$key-$variant";
                }
            } else {
                // Handle simple items
                $output[] = "$categoryName-$value";
            }
        }
    }
    return $output;
}



 $menu = menu($menu);

 foreach($menu as $entry){
    echo $entry."<br>";
 }
