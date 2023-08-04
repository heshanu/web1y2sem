<?php
    $name = $_GET['name'];
    $area = isset($_GET['area']) ? $_GET['area'] : array();
    $sex = $_GET['sex'];
    // $sex = isset($_GET['sex']) ? $_GET['sex'] : array();
    $email = $_GET['email'];
    $field = $_GET['field'];

    echo "username: " . $name. "<br/>";
    echo "email: " . $email . "<br/>";
    echo "sex: " . $sex . "<br/>";
    echo "field: " . $field ."<br/>";

    echo "Subject Areas: ";
    foreach ($area as $value) {
        echo $value . " ";
    }
?>
