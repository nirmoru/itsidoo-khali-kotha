<?php
include '../db_con.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin-dashboard</title>
</head>
<style>
    form {
        text-align: center;
        width: 25%;
        margin-left: 35%;
        padding: 10px;
        margin-top: 10%;
        background-color: #004d4d;
        box-shadow: -11px 13px 13px -2px rgba(0, 0, 0, 0.75);
        -webkit-box-shadow: -11px 13px 13px -2px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: -11px 13px 13px -2px rgba(0, 0, 0, 0.75);
    }

    h1 {
        color: #fff;
    }

    label {
        font-size: 20px;
        color: #fff;
    }

    input [type=text] {
        padding: 10px;
        background-color: #fff;
    }
</style>

<body>
    <?php
    $adminsql = "select * from admin";
    $query = mysqli_query($con, $adminsql);

    $admincount = mysqli_num_rows($query);
    if ($admincount > 0) {
    ?>
        <form action="adminvalidation.php" class="" role="form" method="POST">
            <h1>Khali-Kotha</h1>
            <hr style="background-color: white;">
            <h1>Admin Login</h1>
            <div class="form-group">
                <label class="sr-only" for="exampleInputEmail2">Email address :</label>
                <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Enter email" name="email" required>
            </div> <br>
            <div class="form-group">
                <label class="sr-only" for="exampleInputPassword2">Password :</label>
                <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" name="password" required>
            </div> <br>
            <button type="submit" class="btn btn-success" name="admin_log">Sign in</button>
        </form>
    <?php
    } else {
    ?>
        <form action="adminvalidation.php" class="" role="form" method="POST">
           <h1>Khali-Kotha</h1>
            <hr style="background-color: white;">
            <h1>Admin Registration</h1>
            <div class="form-group">
                <label class="sr-only" for="exampleInputEmail2">Email address :</label>
                <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Enter email" name="email" required>
            </div> <br>
            <div class="form-group">
                <label class="sr-only" for="exampleInputPassword2">Password :</label>
                <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" name="password" required>
            </div> <br>
            <button type="submit" class="btn btn-success" name="admin_reg">Sign in</button>
        </form>
    <?php
    }
    ?>

</body>

</html>