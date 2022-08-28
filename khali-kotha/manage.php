<?php
include 'db_con.php';

if (isset($_POST['book_the_house'])) {

    $contact_name = $_POST['fname'];
    $contact_email = $_POST['email'];
    $contact_number = $_POST['contact'];
    $description = $_POST['decription'];
    $room_id = $_POST['room_id'];




 
        $add_sql = "INSERT INTO contact_table (contact_name,contact_email,contact_number,description,room_id) VALUES ('$contact_name','$contact_email','$contact_number','$description','$room_id')";
        if (mysqli_query($con, $add_sql)) {
            header('location:index.php');
        }
        else{
            echo "sorry";
        }
  



}

            
          
