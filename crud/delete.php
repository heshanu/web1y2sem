<?php

include('db.php');

//delete records from database
$id = 5;

$sql = "DELETE FROM Users WHERE ID = $id";

if ($conn->query($sql) === true ){
    echo "Record deleted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}