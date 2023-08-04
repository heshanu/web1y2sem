<?php
$arr = array("foo" => "bar", 12=>true);
echo $arr['foo'] . "<br/>";
echo $arr[12]."<br/><br/>"; 

$colors = array("red", "green", "blue", "yellow");

foreach($colors as $color) {
    echo $color. "<br/>";
}

echo $color[2]. "<br/>";

?>