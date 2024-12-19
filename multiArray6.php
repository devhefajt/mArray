<?php

$students = [
    'name' => 'x',
    'course' => [
        'Science' => ['Biology', 'Physics'],
        'Arts' => ['History', 'Music'],
    ],
];

function student($students){

    $output = [];

    $studentName = $students['name'];
    // print_r($studentName);

    foreach($students['course'] as $category => $subjects){

    

        foreach($subjects as $subject){

          echo  $output[] = "$studentName-$category-$subject <br>";
        }

    }

}

student($students);