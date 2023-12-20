<?php

// $age = [
//     '1' => ['25', '26'],
//     '2',
//     '3',
//     '7',
//     '5',
// ];
$person_1 = [
    'name'    => 'Mr. Abdul Karim',
    'phone'   => '017896523',
    'age'     => 30,
    'address' => [
        'home' => 5,
        'road' => 10,
        'line' => [
            'line_1' => 'Road side',
            'line_2' => 'Road outside',
        ],
    ],
];
echo '<pre>';
print_r($person['address']['line']['line_2']);
echo '</pre>';