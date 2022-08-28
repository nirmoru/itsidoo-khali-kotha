<?php
session_start();
$server = "localhost";
$user = "root";
$password = "";
$db = "khali-kotha";

$con = mysqli_connect($server, $user, $password, $db);

if (!$con) {
    echo "connection not success";
}
