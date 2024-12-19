<?php

$employees = [
    'departments' => [
        [
            'name' => 'Engineering',
            'teams' => [
                'Backend' => ['Alice', 'Bob'],
                'Fronted' => ['Charlie', 'Dave'], 
                // key => value
            ],
        ],
        [
            'name' => 'HR',
            'teams' => [
                'Recruitment' => ['Eve', 'Frank'],
            ],
        ],
    ],
];


function office($employees)
{

    $output = [];

    foreach ($employees['departments'] as $department) {
        $departmentName = $department['name'];

        foreach ($department['teams'] as $teamName => $teamMembers) {

            foreach($teamMembers as $member){

               $output[] = "{$departmentName}-{$teamName}-{$member} <br>";

            }

        }
    }

    foreach ($output as $entry) {
        echo $entry . PHP_EOL;
    }
}

office($employees);

// Output:
// Engineering-Backend-Alice
// Engineering-Backend-Bob
// Engineering-Fronted-Charlie
// Engineering-Fronted-Dave
// HR-Recruitment-Eve
// HR-Recruitment-Frank
