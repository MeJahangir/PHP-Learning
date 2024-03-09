<?php

//Data to be added to the csv file
$newData = ['jahangir', 'alam', 'jahangir@gmail.com'];

//path to the csv file
$csvFile = 'data.csv';

//Open the csv file in append mode ('a')
$file = fopen($csvFile, 'a');

// click if file is successfully opened
if ($file) {
    fputcsv($file, $newData);
    fclose($file);
    echo 'Data added to csv file successfully';
}else{
    echo 'Failed to open csv file';
}