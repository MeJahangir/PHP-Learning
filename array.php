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

// foreach ($student as $studentData) {
//     echo strtoupper("Name : " . $studentData['name'] . '<br>' 
//     . "Age : " . $studentData['age'] . '<br>' 
//     . "Gender " . $studentData['gender'] . '<br>'
//     . "Roll " . $studentData['roll']);
//     echo '<hr>';
// };

// Loop through each student and display their data
for ($i = 0; $i < count($student); $i++) {
     echo "Student " . ($i + 1) . '<br>'
    . "Name: " . strtolower($student[$i]["name"]) . '<br>'
    . "Age: " . $student[$i]["age"] . '<br>'
    . "Gender: " . $student[$i]["gender"] . '<br>'
    . "Roll: " . $student[$i]["roll"] . '<br>'
    .  "Grade: " . $student[$i]["grade"] . '<br>'
    . '<hr>';
}