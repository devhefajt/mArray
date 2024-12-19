<?php

$schedule = [
    'events' => [
        [
            'name' => 'Conference',
            'sessions' => [
                'Day 1' => ['Keynote', 'Panel Discussion'],
                'Day 2' => ['Workshops', 'Closing Speech'],
            ],
        ],
        [
            'name' => 'Webinar',
            'sessions' => ['Introduction', 'Q&A'],
        ],
    ],
];


function ScheduleList($schedule)
{
    $output = [];
    foreach ($schedule['events'] as $event) {
        $eventName = $event['name'];

        // Check if sessions are associative (days) or flat (list)
        if (is_array(current($event['sessions']))) {
            // Handle sessions with days (associative array)
            foreach ($event['sessions'] as $day => $sessions) {
                foreach ($sessions as $session) {
                    $output[] = "$eventName-$day-$session";
                }
            }
        } else {
            // Handle flat list of sessions
            foreach ($event['sessions'] as $session) {
                $output[] = "$eventName-$session";
            }
        }
    }

    return $output;
}

// Generate the schedule list
$scheduleList = ScheduleList($schedule);

// Output the results
foreach ($scheduleList as $entry) {
    echo $entry . "<br>";
}
