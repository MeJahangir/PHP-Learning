
<?php
  // $variable1 = 10;
  // $variable2 = 20;
  // $variable3 = 30;
  
  // echo "{$variable1}, {$variable2}, {$variable3}\n";
  // echo "{$variable1}, {$variable2}, {$variable3}\n";
  

  // $variable1 = "fast";
  // $variable2 = "medele";
  // $variable3 = "last";

  // $sum = $variable1 . " " . $variable2 . $variable3;
  // echo "The sum is: " . $sum;

  // $a = 4;
  // while ($a <= 10) {
  //   echo "hello bangladesh $a<br>";
  //   $a++;
  // }
  // $counter = 1;

  // while ($counter <= 5) {
  //     echo "Count: $counter<br>";
  //     $counter++;
  // }
  // for ($i=0; $i <= 100; $i++) { 
  //   echo $i;
  // }

  // $test = array('jahangir', 'alam', 'joy', 'rakib');
  // echo $test[1];
  
  // $score = 95;
  // if ($score <= 90) {
  //     echo "Excellent!";
  // } elseif ($score <= 70) {
  //     echo "Good job!";
  // } elseif ($score <= 50) {
  //     echo "You passed.";
  // } else {
  //     echo "Sorry, you didn't pass.";
  // } 
  // $name = "jahanir alam joy";
  // $age = 45;
  // var_dump($name, $age);


//   $url = 'https://www.example.com/somefile.txt';
//   $content = file_get_contents($url);
  
//   if ($content !== false) {
//       // Do something with the contents of the file
//       echo $content;
//   } else {
//       // Handle error
//echo "Failed to retrieve file contents.";
//   }


// readfile('text')

// Global scope 
$x = 5;
function myTest(){
  echo "<p>variable x inside function is:</p>";
}
myTest();
echo "<p>variable x outside function is: $x</p>";

// local scope
function myText() {
  $x = 5;
  echo "Hello Bangladesh $x";
}
myText();
echo "Hello bangladesh is: $x";

// printf diye onek gulo variable print system
$fName = 'jahangir';
$lName = 'alam';
printf("my %s is %s %s","name" ,$fName, $lName);
// result : my name is jahangir alam;

// length check
$lengthCheck = "Hello World";
echo strlen($lengthCheck);
echo '<br>';
echo str_word_count($lengthCheck);
