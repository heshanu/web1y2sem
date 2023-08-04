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
    $text1= "hello!";
    $text2="WORLD";
    echo strtoupper($text1);
    echo '<br />';
    echo strtolower($text1);

    echo '<br /><br />';
    $text = 'hello world';
    echo ucfirst($text);

    echo '<br /><br />';
    $text3 = '  hello  world';
    echo trim($text3);
?>
</body>
</html>