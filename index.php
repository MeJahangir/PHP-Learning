
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

// variable ar kisu word cut korty
$x = "Hello World";
echo substr($x, 2, 6);

// php constant declear
const testing = "jahangir alam joy";
echo testing;

define("cars", [
  "alfa romeo",
  "BMW",
  "Toyota"
]);
echo cars[2];

echo '<br>';
// php conditon add 
$jahangir = 100;
if ($jahangir > 110) {
  echo "Have a good day";
}else{
  echo "Hello Bangladesh";
}

echo '<br>';
if ($jahangir == 100) {
  echo "Hello World";
}

echo '<br>';
$a = 13;
if ($a > 10) {
  echo "Above 10";
  if ($a > 20) {
    echo " and also above 20";
  } else {
    echo " but not above 20";
  }
}

echo '<br>';
$favcolor = "green";
switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}

echo '<br>';
$d = 4;
switch ($d) {
  case 6:
    echo "Today is Saturday";
    break;
  case 0:
    echo "Today is Sunday";
    break;
  default:
    echo "Looking forward to the Weekend";
}

echo '<br>';
// php loops
// while loops 
$i = 6;
while ($i < 10) {
  echo $i;
  $i++;
}

// do while loop
$i = 1;

do {
  echo $i;
  $i++;
} while ($i < 6);

// for loops
for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}

// foreach area
$nemes = array("jahangir","monirul","joy","nur");

foreach($nemes as $x):
echo "$x<br>";
endforeach;

// braak area add
$x = 0;
 
while($x < 10) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
  $x++;
}

// continue area add
$x = 0;
 
while($x < 10) {
  $x++;
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x <br>";
} 

$color = array("red", "green", "blue", "yellow");

foreach ($color as $x) {
  if ($x == "green") continue;
    echo "$x <br>";
  
}

function FunctionName() {
  echo "Jahangir alam joy";
}

FunctionName();

function familyName($fName) {
  echo "$fName islam.<br>";
}
familyName("jani");
familyName("jahangir");
familyName("nur");
familyName("hamid");
familyName("joy");

echo "<br>";

$n = 12;
$o = 020;
printf("The number is %d and %d", $n, $o);
echo "<br>";
printf("Octal number %o = %d", 0200000, 0200000);

echo "<br>";
// absulet function
echo (abs(7.9));
