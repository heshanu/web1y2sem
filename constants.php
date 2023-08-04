<?php

// valid constant names
define("FOO", "something");
define("FOO2", "something else");
define("FOO_BAR", "something more");

// invalid constant names
define("2FOO", "something");

// This is valid, but should be avoided:
// PHP may one day provide a magical constant
// that will break your script
define("__FOO__", "something");

echo FOO;
echo "<br>";
echo FOO2;
echo "<br>";
echo FOO_BAR;
echo "<br>";
echo __FOO__;
echo "<br>";
//echo 2FOO;
