<?php
// csv file data add 
if (isset($_POST['submit'])) {
    $fName = $_POST['FName'];
    $lName = $_POST['LName'];
}

// click if data folder add 
if (!file_exists('data')) {
    mkdir('data', 0777, true);
}

//click if file add
if (!file_exists('data/data.csv')) {
    $file = fopen('data/data.csv', 'w');//write
    $inputName = str_replace(' ', '+', $lName); // Replace spaces in last name
    fputcsv($file, [$fName, $lName]);
} else {
    $file = fopen('data/data.csv', 'a');//append
    $inputName = str_replace(' ', '+', $lName); // Replace spaces in last name
    fputcsv($file, [$fName, $lName]);
}

fclose($file); // Close the file handle after writing


//data read 
$file = fopen('data/data.csv', 'r');
$testData = [];

while (($line = fgetcsv($file)) !== FALSE) {
    $testData[] = $line;
}

foreach ($testData as $valueCheck) {
    
}





?>

<div style="width: 200px; height : 200px; border: 1px solid gray; text-align:center; padding-top: 20px; margin:auto;">
    <input style="margin-top: 10px;" type="text" name="FName" placeholder="First- Name">
    <input style="margin-top: 10px;" type="text" name="LName" placeholder="Last-Name">
    <input style="margin-top: 10px;" type="submit" name="submit">
</div>

