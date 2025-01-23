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

// or 

// Loop through each student and display their data

        // for ($i = 0; $i < count($student); $i++) {
        //     echo "Student " . ($i + 1) . '<br>'
        // . "Name: " . strtolower($student[$i]["name"]) . '<br>'
        // . "Age: " . $student[$i]["age"] . '<br>'
        // . "Gender: " . $student[$i]["gender"] . '<br>'
        // . "Roll: " . $student[$i]["roll"] . '<br>'
        // .  "Grade: " . $student[$i]["grade"] . '<br>'
        // . '<hr>';
        // }
?>

    <div style="margin: auto;
    width: 300px;">
        <?php for ($i = 0; $i < count($student); $i++) { ?>
            <div style="margin-left: 20px;">
                <h3 style="text-align: center; border: 1px solid red;"> <?php echo "Student " . ($i + 1) ?></h3>
                <div style="border: 1px solid green; padding: 10px">
                    <p> <?php echo "Name: " . strtoupper($student[$i]["name"]) ?> </p>
                    <p> <?php echo "Age: " . strtoupper($student[$i]["age"]) ?> </p>
                    <p> <?php echo "Gender: " . strtoupper($student[$i]["gender"]) ?> </p>
                    <p> <?php echo "Roll: " . strtoupper($student[$i]["roll"]) ?> </p>
                    <p> <?php echo "Grade: " . strtoupper($student[$i]["grade"]) ?> </p>
                </div>
            </div>
        <?php } ?>
    </div> 

<?php
function myMessage() {
    echo "Hello world!";
  }

$name  = array('jahangir' => 'my name', 'age'=> 25, 'phone' => 04034);

