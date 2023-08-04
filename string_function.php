<?php
// strlen() function
$text = "University";
echo strlen($text);
echo "<br> <br>";

// str_replace() function
$text = "Hello! How are you today?";
echo str_replace("Hello", "Hi", $text);
echo "<br> <br>";

// strtoupper() & strtolower() function
$text1 = "hello";
$text2 = "HELLO";
echo strtoupper($text1);
echo "<br>";
echo strtolower($text2);
echo "<br> <br>";

// ucfirst() function
$text = "hello world!";
echo ucfirst($text);
echo "<br> <br>";

// trim() function
$text = " hello  world! ";
echo trim($text);