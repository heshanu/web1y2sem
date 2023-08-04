<?php 

include('db.php');

// update records
$id = 4;
$fname = "Damsuni";
$lname = "Thathsara";
$phone = "0751234567";


$sql = "UPDATE Users SET First_Name='$fname', Last_Name='$lname', Phone='$phone' WHERE ID = $id ";

    if ($conn->query($sql) === true ){
        echo "Record updated successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }