<?php

$orders = [
    'order_id' => 'ORD12345',
    'items' => [
        [
            'name' => 'Laptop',
            'options' => [
                'RAM' => '16GB',
                'Color' => 'Silver'
            ]
        ],
        [
            'name' => 'Mouse',
            'options' => [
                'Type' => 'Wireless',
                'Color' => 'Black'
            ]
        ],
    ],
];

function orderList($orders)
{

    $output = [];
    $orderId = $orders['order_id'];

    foreach ($orders['items'] as $item) {
        $itemName = $item['name'];
        $option = $item['options'];

        // print_r($option);
        $optionDetails = implode('-', $option);
        // print_r($optionDetails);
        echo $output[] = "{$orderId}-{$optionDetails} <br>";
    }
}

orderList($orders);
