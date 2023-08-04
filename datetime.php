<?php
// date
echo date("d/m/Y"). "<br/>";
echo date("d-m-Y"). "<br/>";
echo date("d.m.Y");
echo "<br/> <br/>";

// time
echo time();
echo "<br/>";
echo date("H:i:s", time()). "<br/>";
echo "<br/> <br/> ";

echo "Today is ".date("F d, Y"). "<br/>";
echo "Today is ".date("l"). "<br/>";
echo "Today is ".date("m-d-Y"). "<br/>";
echo "<br/> <br/> ";

$today = date("W");
$year = date("Y");
print "It's week ".$today . " of " .$year;
echo "<br/> <br/> ";


$time = date('h:i:s a');
print $time;
echo "<br/>";

$time = date('G:i T');
print $time;
