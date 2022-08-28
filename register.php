<?php include 'header.php'; ?>
<!-- banner -->
<div class="inside-banner">
  <div class="container">
    <span class="pull-right"><a href="#">Home</a> / Register</span>
    <h2>Register</h2>
  </div>
</div>
<!-- banner -->
<?php
include 'db_con.php';
if (isset($_POST['Submit'])) {
  $username = mysqli_real_escape_string($con, $_POST['fname']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
  $mobile = mysqli_real_escape_string($con, $_POST['mobile']);

  // encryption password //
  $pass = password_hash($password, PASSWORD_BCRYPT);
  $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

  //email query for existing email //
  $emailquery = "select * from registration where email = '$email'";
  $query = mysqli_query($con, $emailquery);

  // counting email //
  $emailcount = mysqli_num_rows($query);

  if ($emailcount > 0) {
?>
    <script>

    </script>
    <?php
  } else {
    if ($password === $cpassword) {
      $insertquery = "insert into registration(fname, email, password, cpassword, mobile) values('$username','$email','$pass','$cpass','$mobile')";
      $iquery = mysqli_query($con, $insertquery);

      if ($iquery) {
    ?>
        <script>
          alert("Inserted Successful");
        </script>
      <?php
      } else {
      ?>
        <script>
          alert("Not Inserted");
        </script>
<?php
      }
    } else {
      echo "password are not matching";
    }
  }
}
?>

<div class="container">
  <div class="spacer">
    <div class="row register">
      <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">

        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
          <input type="text" class="form-control" placeholder="Full Name" name="fname" required>
          <input type="text" class="form-control" placeholder="Enter Email" name="email" required>
          <input type="password" class="form-control" placeholder="Password" name="password" required>
          <input type="password" class="form-control" placeholder="Confirm Password" name="cpassword" required>
          <input type="tel" class="form-control" name="mobile" placeholder="Enter your phone number (980-000-0000)" required>
          <button type="submit" class="btn btn-success" name="Submit">Register</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>