<?php
// get form data to variables
$name = $_GET['name'];
$filename = $_GET['filename'];
$message = $_GET['message'];
$date = date("Y-m-d");
$time = date(" H:i:s");


// modify the form data
$data = "Date: ". $date . "\n" . "Message: ". $message . "\n" ."Name: " . $name . "\n". "Time :". $time . "\n";

// create new file for with msg data
$file = fopen($filename, "w");

fwrite($file, $data);

echo "Date: ". $date . "<br>" . "Message: ". $message . "<br>" ."Name: " . $name . "<br>". "Time :". $time . "<br>";


