<?php

$server = 'localhost';
$username = 'root';
$password = '';
$db_name = 'siswa';

$connections = new mysqli($server, $username, $password, $db_name);

if($connections->connect_error) {
    die("Connection Failed" . $connections->connect_error);
}


