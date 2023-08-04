<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $str1 = "Hello, I'm ishara, how are you?";
    $str2 = "Gamini";
    $str3 = str_replace('ishara', $str2, $str1);

    echo $str3;

    echo "<br>";

    echo "length of the str3"." : ". strlen($str3);
?>
</body>
</html>