<?php
include 'db_con.php';
include 'header.php';
if(isset($_GET['book']))
{
  if($_GET['book']=="success")
  {
    echo "<script>alert('booking success');</script>";
  }
}
$roomsql = "SELECT *  FROM room_table";
$room_result = $con->query($roomsql);   
 ?>

<div class="">


  <div id="slider" class="sl-slider-wrapper">

    <div class="sl-slider">

      <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
        <div class="sl-slide-inner">
          <div class="bg-img bg-img-1"></div>
          <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
          <blockquote>
            <p class="location"><span class="glyphicon glyphicon-map-marker"></span> Kalanki, Nepal</p>
            <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
            <cite>Rs 2,00,000</cite>
          </blockquote>
        </div>
      </div>

      <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
        <div class="sl-slide-inner">
          <div class="bg-img bg-img-2"></div>
          <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
          <blockquote>
            <p class="location"><span class="glyphicon glyphicon-map-marker"></span> Baneshwor, Nepal</p>
            <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
            <cite>Rs 3,00,000</cite>
          </blockquote>
        </div>
      </div>

      <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
        <div class="sl-slide-inner">
          <div class="bg-img bg-img-3"></div>
          <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
          <blockquote>
            <p class="location"><span class="glyphicon glyphicon-map-marker"></span> Baluwatar, Nepal</p>
            <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
            <cite>Rs 3,00,000</cite>
          </blockquote>
        </div>
      </div>

      <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
        <div class="sl-slide-inner">
          <div class="bg-img bg-img-4"></div>
          <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
          <blockquote>
            <p class="location"><span class="glyphicon glyphicon-map-marker"></span> Sanepa, Nepal</p>
            <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
            <cite>Rs 4,00,000</cite>
          </blockquote>
        </div>
      </div>

      <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
        <div class="sl-slide-inner">
          <div class="bg-img bg-img-5"></div>
          <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
          <blockquote>
            <p class="location"><span class="glyphicon glyphicon-map-marker"></span> Bajalu, Nepal</p>
            <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
            <cite>Rs 50,00,000</cite>
          </blockquote>
        </div>
      </div>
    </div><!-- /sl-slider -->



    <nav id="nav-dots" class="nav-dots">
      <span class="nav-dot-current"></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </nav>

  </div><!-- /slider-wrapper -->
</div>



<div class="banner-search">
  <div class="container">
    <!-- banner -->
    <h3>Buy, Sale & Rent</h3>
    <div class="searchbar">
      <div class="row">
        <div class="col-lg-6 col-sm-6">
          <input type="text" class="form-control" placeholder="Search of Properties">
          <div class="row">
            <div class="col-lg-3 col-sm-3 ">
              <select class="form-control">
                <option>Buy</option>
                <option>Rent</option>
                <option>Sale</option>
              </select>
            </div>
            <div class="col-lg-3 col-sm-4">
              <select class="form-control">
                <option>Price</option>
                <option>Rs5,000 - Rs10,000</option>
                <option>Rs10,000 - Rs15,000</option>
                <option>Rs15,000 - Rs20,000</option>
                <option>Rs20,000 - Rs30,000</option>
                <option>Rs30,000 - Rs40,000</option>
                <option>Rs40,000 - above</option>
              </select>
            </div>
            <div class="col-lg-3 col-sm-4">
              <select class="form-control">
                <option>Property</option>
                <option>Apartment</option>
                <option>Building</option>
                <option>Office Space</option>
              </select>
            </div>
            <div class="col-lg-3 col-sm-4">
              <button class="btn btn-success" onclick="window.location.href='buysalerent.php'">Find Now</button>
            </div>
          </div>


        </div>
        <div class="col-lg-5 col-lg-offset-1 col-sm-6 ">
          <p>Join now and get updated with all the properties deals.</p>
          <button class="btn btn-info" data-toggle="modal" data-target="#loginpop">Login</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- banner -->
<div class="container">
  <div class="properties-listing spacer"> <a href="buysalerent.php" class="pull-right viewall">View All Listing</a>
    <h2>Featured Properties</h2>
    <div id="owl-example" class="owl-carousel">

<?php

    while($row = mysqli_fetch_assoc($room_result)) {
      ?>
      <div class="properties">
        <div class="image-holder"><img src="room_image/<?php echo $row['room_image']; ?>" class="img-responsive" alt="properties" style="width:100%;height:250px;" />
          <div class="status sold">Sold</div>
        </div>
        <h4><a href="property-detail.php"><?php echo $row['room_name']; ?></a></h4>
        <p class="price">Price: Rs <?php echo $row['room_price']; ?></p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
      <form action="property-detail.php" method="post">
        <input type="hidden" name="room_id" value="<?php echo $row['room_id']; ?>">
        <input type="submit" class="btn btn-primary" value="View Details">
      </form>
            </div>
     
<?php
    }
?>









    </div>
  </div>



  <div class="spacer">
    <div class="row">
      <div class="col-lg-6 col-sm-9 recent-view">
        <h3>About Us</h3>
        <p>Khali-Kotha is not only a App, This is the way to find a home for a needy one.
          Khali-Kotha is Totally free Web Application. Many people face a problem finding a room, However onw no
          people will face a problem in find rooms in and area, places they want.
          <br><a href="about.php">Learn More</a>
        </p>

      </div>
      <div class="col-lg-5 col-lg-offset-1 col-sm-3 recommended">
        <h3>Recommended Properties</h3>
        <div id="myCarousel" class="carousel slide">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="3" class="active"></li>
          </ol>
          <!-- Carousel items -->
          <div class="carousel-inner">
            <div class="item active">
              <div class="row">
                <div class="col-lg-4"><img src="images/properties/1.jpg" class="img-responsive" alt="properties" /></div>
                <div class="col-lg-8">
                  <h5><a href="property-detail.php">Lavish Home</a></h5>
                  <p class="price">Rs 300,000</p>
                  <a href="property-detail.php" class="more">More Detail</a>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="row">
                <div class="col-lg-4"><img src="images/properties/2.jpg" class="img-responsive" alt="properties" /></div>
                <div class="col-lg-8">
                  <h5><a href="property-detail.php">Lavish Home</a></h5>
                  <p class="price">Rs 300,000</p>
                  <a href="property-detail.php" class="more">More Detail</a>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="row">
                <div class="col-lg-4"><img src="images/properties/3.jpg" class="img-responsive" alt="properties" /></div>
                <div class="col-lg-8">
                  <h5><a href="property-detail.php">Lavish Home</a></h5>
                  <p class="price">Rs 300,000</p>
                  <a href="property-detail.php" class="more">More Detail</a>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="row">
                <div class="col-lg-4"><img src="images/properties/4.jpg" class="img-responsive" alt="properties" /></div>
                <div class="col-lg-8">
                  <h5><a href="property-detail.php">Lavish Home</a></h5>
                  <p class="price">Rs 300,000</p>
                  <a href="property-detail.php" class="more">More Detail</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>