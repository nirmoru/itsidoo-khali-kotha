<?php
include '../db_con.php';

if (isset($_POST['add_room'])) {
    $time = date("Y-m-d_H-i-s");
    $roomname = $_POST['room_name'];
    $roomprice = $_POST['room_price'];
    $roomdescription = $_POST['room_description'];
    $init_filename = $_FILES['room_image']['name'];
    echo $init_filename;
    $file_tmp =$_FILES['room_image']['tmp_name'];
    $explode= explode('.',$init_filename);
    $filename = $time."-".$init_filename ;
    $destination = "../room_image/".$filename;
    $extension = pathinfo($init_filename, PATHINFO_EXTENSION);

    
    if (!in_array($extension, ['jpg', 'png', 'gif'])) {
        echo "You file extension must be .jpg, .png or .gif";
    } elseif ($_FILES['room_image']['size'] > 10000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
     if(move_uploaded_file($_FILES['room_image']['tmp_name'],$destination)){
        $add_sql = "INSERT INTO room_table (room_name,room_price,room_description,room_image) VALUES ('$roomname','$roomprice','$roomdescription','$filename')";
        if (mysqli_query($con, $add_sql)) {
            header('location:rooms.php');
        }
     }
       
    }
            
          
       
    }
  
          
