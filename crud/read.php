<?php

include('db.php');

// read the records
$sql = "SELECT * FROM Users";

$results = $conn->query($sql);

?>
<html>
    <head>
        <title>show records from database</title>
    </head>
    <body>
        <h4
         style = 'text-align: center'
        >
            READ DATA
        </h4>

        <table
            style="margin: auto; margin-top: 10px;width: 500px; text-align: left;">
        >
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
        <?php
            if ($results -> num_rows > 0 ) {
                while ($row = $results->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>". $row['ID'] ."</td>";
                    echo "<td>". $row['First_Name'] ."</td>";
                    echo "<td>". $row['Last_Name'] ."</td>";
                    echo "<td>". $row['Phone'] ."</td>";
                    echo "</tr>";
                }
            }
        ?>
        </tbody>
        </table>
    </body>
</html>

