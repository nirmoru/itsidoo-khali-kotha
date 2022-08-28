<?php include 'header.php';
include 'db_con.php';

$roomid = $_POST['room_id'];
$roomsql = "SELECT *  FROM room_table where room_id = '$roomid'";
$room_result = $con->query($roomsql);    ?>
<!-- banner -->
<div class="inside-banner">
  <div class="container">
    <span class="pull-right"><a href="#">Home</a> / Buy</span>
    <h2>Buy</h2>
  </div>
</div>
<!-- banner -->
<?php

    while($row = mysqli_fetch_assoc($room_result)) {
      ?>

<div class="container">
  <div class="properties-listing spacer">

    <div class="row">
      <div class="col-lg-3 col-sm-4 hidden-xs">

        <div class="hot-properties hidden-xs">
          <h4>Hot Properties</h4>
          <div class="row">
            <div class="col-lg-4 col-sm-5"><img src="images/properties/4.jpg" class="img-responsive img-circle" alt="properties" /></div>
            <div class="col-lg-8 col-sm-7">
              <h5><a href="property-detail.php">Lavish Home</a></h5>
              <p class="price">Rs 3,00,000</p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 col-sm-5"><img src="images/properties/1.jpg" class="img-responsive img-circle" alt="properties" /></div>
            <div class="col-lg-8 col-sm-7">
              <h5><a href="property-detail.php">Lavish Home</a></h5>
              <p class="price">Rs 3,00,000</p>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4 col-sm-5"><img src="images/properties/3.jpg" class="img-responsive img-circle" alt="properties" /></div>
            <div class="col-lg-8 col-sm-7">
              <h5><a href="property-detail.php">Lavish Home</a></h5>
              <p class="price">Rs 3,00,000</p>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4 col-sm-5"><img src="images/properties/2.jpg" class="img-responsive img-circle" alt="properties" /></div>
            <div class="col-lg-8 col-sm-7">
              <h5><a href="property-detail.php">Lavish Home</a></h5>
              <p class="price">Rs 3,00,000</p>
            </div>
          </div>

        </div>



        <div class="advertisement">
          <h4>Advertisements</h4>
          <img src="images/advertisements.jpg" class="img-responsive" alt="advertisement">

        </div>

      </div>

      <div class="col-lg-9 col-sm-8 ">
        <div>
          <img src="room_image/<?php echo $row['room_image']; ?>" style="width:80%;" alt="">
        </div>
        <h2><?php echo $row['room_name']; ?></h2>



            <div class="spacer">
              <h4><span class="glyphicon glyphicon-th-list"></span> Properties Detail</h4>
             <p><?php echo $row['room_description']; ?></p>
            </div>
            <div>
              <h4><span class="glyphicon glyphicon-map-marker"></span> Location</h4>
              <div class="well"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113032.48873942555!2d85.2560911783583!3d27.709094709784452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb198a307baabf%3A0xb5137c1bf18db1ea!2sKathmandu%2044600!5e0!3m2!1sen!2snp!4v1607053124925!5m2!1sen!2snp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
            </div>

          </div>
          <div class="col-lg-4">
            <div class="col-lg-12  col-sm-6">
              <div class="property-info">
                <p class="price">Rs <?php echo $row['room_price']; ?></p>
                <p class="area"><span class="glyphicon glyphicon-map-marker"></span> 44660-Kathmandu, Nepal</p>

                <div class="profile">
                  <span class="glyphicon glyphicon-user"></span> Agent Details
                  <p>Sujan Dhakal<br>9800222222</p>
                </div>
              </div>

              <h6><span class="glyphicon glyphicon-home"></span> Availabilty</h6>
              <div class="listing-detail">
                <span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">1</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span>
              </div>

            </div>
            <div class="col-lg-12 col-sm-6 ">
              <div class="enquiry">
                <h6><span class="glyphicon glyphicon-envelope"></span> Post Enquiry</h6>
                <form role="form" action="manage.php" method="post">
                  <input type="text" class="form-control" placeholder="Full Name" name="fname" />
                  <input type="text" class="form-control" placeholder="you@yourdomain.com" name="email" />
                  <input type="phone" class="form-control" placeholder="your number" name="contact" />
                  <textarea rows="6" class="form-control" placeholder="Whats on your mind?" name="decription"></textarea>
                  <input type="hidden" name="room_id" value="<?php echo $roomid ?>">
                  <button type="submit" class="btn btn-primary" name="book_the_house">Send Message</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
}
?>

<?php include 'footer.php'; ?>