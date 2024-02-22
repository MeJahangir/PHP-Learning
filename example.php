<?php
include_once "function.php";

$x = 13;
if (isEven($x)) {
  echo "{$x} in an even numver";
}else{
  echo "{$x} is an odd number";
}

$i = 5;
echo "factorial of {$i} is " .factorial($i);


?>
