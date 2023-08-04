<?php
    session_start();
    session_unset($_SESSION['visits']);
    echo "unset your session";
?>