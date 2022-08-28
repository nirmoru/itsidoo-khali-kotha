<?php
include '../db_con.php';
if (isset($_POST['admin_reg'])) {
    $username = $_POST['email'];
    $password = $_POST['password'];
    $encryptpass = password_hash($password, PASSWORD_BCRYPT);
    $adminsql = "INSERT INTO admin (a_name,a_pass) VALUES ('$username','$encryptpass')";
    if (mysqli_query($con, $adminsql)) {
        header('location:index.php');
    }
}
if (isset($_POST['admin_log'])) {
    $username = $_POST['email'];
    $password = $_POST['password'];
    $encryptpass = password_hash($password, PASSWORD_BCRYPT);
    $adminsql = "SELECT * FROM admin WHERE a_name='$username'";
    $result = mysqli_query($con, $adminsql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $db_pass = $row['a_pass'];
            $pass_decode = password_verify($password, $db_pass);
            if ($pass_decode) {
                header('location:dashboard.php');
            }
        }
    }
}
