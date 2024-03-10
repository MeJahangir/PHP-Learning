<?php
// csv file data add 
if (isset($_POST['submit'])) {
    $fName = $_POST['FName'];
    $lName = $_POST['LName'];
    $email = $_POST['Email'];

    //click if data folder add 
    if (!file_exists('data')) {
        mkdir('data', 0777, true);
    }

    // Check if photo folder exists
    if (!file_exists('photo')) {
        mkdir('photo', 0777, true);
    }
    // photo area add 
    $image = $_FILES['Photo'];
    
    $photos = 'photo/' . str_replace(' ', '+', $imagename);
    //The path you wish to upload the image to
    $imagePath = "images/";

    if(is_uploaded_file($imagetemp)) {
        if(move_uploaded_file($imagetemp, $photos)) {
            // echo "Sussecfully uploaded your image.";
        }
        else {
            echo "Failed to move your image.";
        }
    }
    else {
        echo "Failed to upload your image.";
    }

    //click if file add
    if (!file_exists('data/data.csv')) {
        $file = fopen('data/data.csv', 'w');//write
        $inputName = str_replace(' ', '+', $fName); // Replace spaces in first name
        fputcsv($file, [$fName, $lName, $email]);
    } else {
        $file = fopen('data/data.csv', 'a');//append
        $inputName = str_replace(' ', '+', $fName); // Replace spaces in first name
        fputcsv($file, [$fName, $lName, $email]);
    }

    fclose($file); // Close the file handle after writing
}

//data read 
$file = fopen('data/data.csv', 'r');
$testData = [];

while (($line = fgetcsv($file)) !== FALSE) {
    $testData[] = $line;
}

fclose($file); // Close the file handle after reading

?>

<form method="post" enctype="multipart/form-data">
    <div style="width: 200px; height: 200px; border: 1px solid gray; text-align: center; padding-top: 20px; margin: auto;">
        <input style="margin-top: 10px;" type="text" name="FName" placeholder="First Name">
        <input style="margin-top: 10px;" type="text" name="LName" placeholder="Last Name">
        <input style="margin-top: 10px;" type="email" name="Email" placeholder="johndoe@example.com">
        <input style="margin-top: 10px; margin-left: 11px; font-size: 10px; " type="file" name="Photo" placeholder="">
        <input style="margin-top: 10px;" type="submit" name="submit">
    </div>
</form>
