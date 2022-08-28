<?php
include '../db_con.php';
$roomsql = "SELECT *  FROM contact_table";
$room_result = $con->query($roomsql);   
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    * {
        margin: 0;
        padding: 0;

    }

    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #004d4d;
    }

    li {
        float: left;
    }

    li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    li a:hover:not(.active) {
        background-color: #003333;
    }
</style>
</head>

<body>
    <div>
        <h1 style="color: #003333; text-align: center;">Khali-Kotha DashBoard</h1>
    </div>
    <ul>
        <li><a href="rooms.php"><i class="fa fa-home"> Rooms</i></a></li>
        <li><a href="bookings.php"><i class="fa fa-book"> Booking</i></a></li>
        <li><a href="#" onclick="return alert('This feature is unavailable');"><i class="fa fa-bell"> Notification</i></a></li>
        <li><a href="logout.php"><i class="fa fa-sign-out"> logout</i></a></li>
    </ul>
    <table border="1" style="width:100%;">
        <tr>
            <th>Room reg Date</th>
            <th>Room Name</th>
            <th>Room Price</th>
            <th>Room description</th>
            <th>Image</th>
        </tr>
<?php
while($row = mysqli_fetch_assoc($room_result)) {
    ?>
<tr>
<td><?php echo $row['regDate']; ?></td>
<td><?php echo $row['contact_name']; ?></td>
<td><?php echo $row['contact_email']; ?></td>
<td><?php echo $row['contact_number']; ?></td>
<td><?php echo $row['description']; ?></td>

<td><img src="#" alt=""></td>

</tr>

<?php

}
?>
        
    </table>
</body>

</html>