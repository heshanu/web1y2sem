<?php

$user = 'root';
$password = 'ICT$100';
$database = '';
$port = null;
$mysql = new mysqli('localhost', $user, $password, $database, $port);

if ($mysql-> connect_error) {
    die ('Connect error ('.$mysql-> connect_errno.')' . $mysql-> connect_error);
}

echo '<p> connection ok ' . $mysql->host_info . '</p>';
echo '<p> server ' . $mysql->server_info . '</p>';

$mysql->close();

?>