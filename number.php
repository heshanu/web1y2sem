<?php 
    $str1 ="Geetha is 45 years old, her father is 90 years old";
    $val =  preg_match('|\d+|',$str1, $result);
    echo("Age of Geetha. : " . $result[0][0] . " years old. <br/>");
    print("Age og Geetha father : " . $result[0][1]);
?>