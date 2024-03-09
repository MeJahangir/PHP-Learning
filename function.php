<?php

// function decleared

function isEven($m) 
{
    if ($m % 2 == 0) {
      return true;
    }
     return false;
  }


// factorial function
function factorial($n) {
    $result = 1;
    for($i = $n; $i > 1; $i--) {
        $result *= $i;
    }
    return $result;
}


?>