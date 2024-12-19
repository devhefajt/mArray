<?php
$manufacturing = [
    'products' => [
        'Table' => [
            'materials' => ['Wood', 'Metal'],
            'dimensions' => ['Small', 'Large'],
        ],
        'Chair' => [
            'colors' => ['Black', 'White'],
            'styles' => ['Modern', 'Traditional'],
        ],
    ],
];

function factory($manufacturing)
{
    $output = [];
    foreach ($manufacturing['products'] as $category => $details) {
        if ($category === 'Table') {
            foreach ($details['materials'] as $material) {
                foreach ($details['dimensions'] as $dimension) {
                    $output[] = "$category-$material-$dimension";
                }
            }
        }elseif($category === 'Chair'){
            foreach($details['colors'] as $color){
                foreach($details['styles'] as $style){
                    $output[] = "$category-$color-$style";
                }
            }
        }
    }

    return $output;

}

$factory = factory($manufacturing);

foreach ($factory as $entry) {
    echo $entry . "<br>";
}
