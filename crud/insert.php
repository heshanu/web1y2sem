<?php

include('db.php');

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO Users (First_Name, Last_Name, Phone) VALUES ('$fname', '$lname', '$phone')";

    if ($conn->query($sql) === true) {
        echo "New record inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

} 




?>

<html>

<head>
    <title>Insert data to form</title>

    <style>
        * {
            box-sizing: border-box;
        }

        h3 {
            text-align: center;
        }

        label {
            display: block;
            width: 100px;
            float: left;
            margin-left: 10px;
        }

        input[type="text"] {
            width: 300px;
            height: 30px;
            margin-bottom: 10px;
        }



        button[type="submit"] {
            width: 150px;
            height: 30px;
            margin-left: 110px;
        }
    </style>
</head>

<body>
    <h4 style='text-align: center'>
        INSERT DATA
    </h4>
    <div style="margin: auto; width: 500px;">
        <form action="insert.php" method="post">
            <label>First Name</label>
            <input type="text" name="fname">
            <br>
            <label>Last Name</label>
            <input type="text" name="lname">
            <br>
            <label>Phone</label>
            <input type="text" name="phone"></input>
            <br>
            <lable>
                &nbsp;
            </lable>
            <button type="submit" name="submit">
                Create Message
            </button>
        </form>
    </div>

</body>

</html>