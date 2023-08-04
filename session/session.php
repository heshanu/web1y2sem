<?php
    session_start();

    if(isset($_SESSION['visits'])){
        echo "you have been here " . $_SESSION['visits'] . ' times before';
        $_SESSION['visits']++;
    } else  {
        echo "this is your first time here";
        $_SESSION['visits'] =1;
    }
?>