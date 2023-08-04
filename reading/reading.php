<?php 
if(!($f=fopen("welcome.txt", "r")))
exit("unable to open file.");
while(!feof($f)){
    $x=fgets($f);
    echo $x;
}
 
fclose($f);

?>