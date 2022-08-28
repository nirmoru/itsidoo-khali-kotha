
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Khali-Kotha </title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="icon" href="images/logo.png">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="assets/style.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.js"></script>
  <script src="assets/script.js"></script>



  <!-- Owl stylesheet -->
  <link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">
  <link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">
  <script src="assets/owl-carousel/owl.carousel.js"></script>
  <!-- Owl stylesheet -->


  <!-- slitslider -->
  <link rel="stylesheet" type="text/css" href="assets/slitslider/css/style.css" />
  <link rel="stylesheet" type="text/css" href="assets/slitslider/css/custom.css" />
  <script type="text/javascript" src="assets/slitslider/js/modernizr.custom.79639.js"></script>
  <script type="text/javascript" src="assets/slitslider/js/jquery.ba-cond.min.js"></script>
  <script type="text/javascript" src="assets/slitslider/js/jquery.slitslider.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- slitslider -->

</head>

<body>


  <!-- Header Starts -->
  <div class="navbar-wrapper">

    <div class="navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">


          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

        </div>


        <!-- Nav Starts -->
        <div class="navbar-collapse  collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="agents.php">Agents</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
        <!-- #Nav Ends -->

      </div>
    </div>

  </div>
  <!-- #Header Starts -->





  <div class="container">

    <!-- Header Starts -->
    <div class="header">
      <a href="index.php"><img src="images/logo.png" alt="Realestate" width=250 height="100"></a>

      <ul class="pull-right">
        <li><a href="buysalerent.php">Buy</a></li>
        <li><a href="buysalerent.php">Sale</a></li>
        <li><a href="buysalerent.php">Rent</a></li>
        <?php
        if (isset($_SESSION['username'])) {
        ?>
          <li><i class=" fa fa-user"> <?php echo $_SESSION['username']; ?></i></li>
          <li><a href="logout.php"><i class="fa fa-sign-out"> Logout</i></a></li>

        <?php
        }
        ?>
      </ul>
    </div>
    <!-- #Header Starts -->
  </div>