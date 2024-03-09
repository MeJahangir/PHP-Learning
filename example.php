<?php

echo pi();
// Output : 3.1415926535898
echo '<br>';
$maximumNumber = [12.10,20,40,44,60,100,103];
echo max($maximumNumber);
echo '<br>';
// Output : 103
$maximumNumber = [12,10,20,40,44,60,100,103];
echo min($maximumNumber);
echo '<br>';

?>


<?php
// Data to be added to the CSV file
$newData = ["John", "Doe", "john.doe@example.com"];

// Path to the CSV file
$csvFile = "file/test.cs";

// Open the CSV file in append mode ('a')
$file = fopen($csvFile, 'a');

// Check if file is successfully opened
if ($file) {
    // Write data to the CSV file
    fputcsv($file, $newData);

    // Close the file
    fclose($file);

    echo "Data added to CSV file successfully.";
} else {
    echo "Failed to open CSV file.";
}
?>