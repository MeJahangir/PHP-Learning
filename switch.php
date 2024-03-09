<?php
// switch function add 
// switch cach use kore amra kono kisu check korty pari
$age = 100;

switch($age){
    case 10:
        echo 'you are still a child';
        break;
    case 20:
        echo 'You are not a child anymore';
        break;
    case 100:
        echo 'You are out of luck now';
        break;
    default:
        echo 'You are not yet born';
        break;
};

echo '<br>';
// vowel check
$charackter = 'A';
$is_Voawel = false;

switch ($charackter) {
    case 'as':
    case 'A':
    case 'e':
    case 'E':
    case 'i':
    case 'I':
    case 'o':
    case 'O':
    case 'u':
    case 'U':
        echo $is_Voawel = true;
        break;
    
    default:
        echo $is_Voawel = false;
        break;
}
echo '<br>';

//Output : 1
if ($is_Voawel) {
    echo "Great : This is a Voawel";
}else{

    echo "Sorry, SThis a consonant";
}

echo '<br>';
// even and odd number check

function isOddEven($numChek) {
    if ($numChek % 2 == 0) {
        return "Even Number";
    }else{
        return "Odd Number";
    }
}

$numChek = 11;
echo "The Number Is" . isOddEven($numChek);