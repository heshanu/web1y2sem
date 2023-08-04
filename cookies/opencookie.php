<?php
    // echo $_COOKIE['cookiename'];
    // echo $_COOKIE['myuser'];

    if(isset($_COOKIE['myuser']))
    echo "Welcome ".$_COOKIE["myuser"]."!<br/>";
    else
    echo "Welcome guest!<br/>";

?>