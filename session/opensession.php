<?php
    session_start();

    if(isset($_SESSION['visits'])){
        echo "you have been here " . $_SESSION['visits'] . ' times before';
    } else  {
        echo "you have no session";
    }
?>