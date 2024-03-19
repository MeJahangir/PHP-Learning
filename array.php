<?php

//array test in php forlooping

$student = [
    [
    "name" => "MD JAHANGIR ALAM",
    "age" => 24,
    "gender" => "Male",
    "roll" => 20,
    "grade" => "A"
    ],
    [
    "name" => "MD HAMID PK",
    "age" => 24,
    "gender" => "Male",
    "roll" => 20,
    "grade" => "A"
    ],
    [
    "name" => "MD MASUD RANA",
    "age" => 24,
    "gender" => "Male",
    "roll" => 20,
    "grade" => "A"
    ],
    [
    "name" => "MD SHOFIQUL ISLAM",
    "age" => 24,
    "gender" => "Male",
    "roll" => 20,
    "grade" => "A"
    ],
    [
    "name" => "MD RAJU AHMED",
    "age" => 24,
    "gender" => "Male",
    "roll" => 20,
    "grade" => "A"
    ],
    [
    "name" => "MD SUJON SARKAR",
    "age" => 24,
    "gender" => "Male",
    "roll" => 20,
    "grade" => "A"
    ],
    [
    "name" => "MD MONIRUL ISLAM",
    "age" => 24,
    "gender" => "Male",
    "roll" => 20,
    "grade" => "A"
    ],
    [
    "name" => "MD MANIK RANA",
    "age" => 24,
    "gender" => "Male",
    "roll" => 20,
    "grade" => "A"
    ]
];

foreach ($student as $studentData) {
    echo strtoupper("Name : " . $studentData['name'] . '<br>' 
    . "Age : " . $studentData['age'] . '<br>' 
    . "Gender " . $studentData['gender'] . '<br>'
    . "Roll " . $studentData['roll']);
    echo '<hr>';
};