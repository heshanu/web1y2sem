<?php
$fh = fopen("myfile.txt", "w");

$data = "PHP Hypertext Preprocessor or PHP as it is usually called , is a geneeral-purpose scripting language";

fwrite($fh, $data);
fclose($fh);