<?php 
 $fh = fopen("myfile.txt", "r");
 $data = fread($fh, 1000);
 echo $data;
 fclose($fh);

