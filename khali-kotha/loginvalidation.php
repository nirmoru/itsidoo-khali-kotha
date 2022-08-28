<?php
session_start();
include 'db_con.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    //checking email exist in database or not //
    $email_search = " select * from registration where email ='$email' ";
    $query = mysqli_query($con, $email_search);

    $email_count = mysqli_num_rows($query);

    if ($email_count) {
        //matching password //
        $email_pass = mysqli_fetch_assoc($query);

        $db_pass = $email_pass['password'];

        $pass_decode = password_verify($password, $db_pass);

        if ($pass_decode) {
            $_SESSION['username'] = $email;
            header("location:index.php");
        } else {
?>
            <script>
                alert("Email or Password are incorrect");
            </script>
<?php
        }
    }
}
?>