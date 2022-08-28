<div class="footer">

  <div class="container">



    <div class="row">
      <div class="col-lg-3 col-sm-3">
        <h4>Information</h4>
        <ul class="row">
          <li class="col-lg-12 col-sm-12 col-xs-3"><a href="about.php">About</a></li>
          <li class="col-lg-12 col-sm-12 col-xs-3"><a href="agents.php">Agents</a></li>
          <li class="col-lg-12 col-sm-12 col-xs-3"><a href="blog.php">Blog</a></li>
          <li class="col-lg-12 col-sm-12 col-xs-3"><a href="contact.php">Contact</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-sm-3">
        <h4>Newsletter</h4>
        <p>Get notified about the latest properties in our marketplace.</p>
        <form class="form-inline" role="form">
          <input type="text" placeholder="Enter Your email address" class="form-control">
          <button class="btn btn-success" type="button">Notify Me!</button>
        </form>
      </div>

      <div class="col-lg-3 col-sm-3">
        <h4>Follow us</h4>
        <a href="#"><img src="images/facebook.png" alt="facebook"></a>
        <a href="#"><img src="images/twitter.png" alt="twitter"></a>
        <a href="#"><img src="images/linkedin.png" alt="linkedin"></a>
        <a href="#"><img src="images/instagram.png" alt="instagram"></a>
      </div>

      <div class="col-lg-3 col-sm-3">
        <h4>Contact us</h4>
        <p><b>Khali-Kotha</b><br>
          <span class="glyphicon glyphicon-map-marker"></span> Nagarjun-04, Kathmandu, Nepal.<br>
          <span class="glyphicon glyphicon-envelope"></span> Khali-Kotha@gmail.com<br>
          <span class="glyphicon glyphicon-earphone"></span> (+977) 980000000
        </p>
      </div>
    </div>
  </div>
</div>




<!-- Modal -->

<div id="loginpop" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="row">
        <div class="col-sm-6 login">
          <h4>Login</h4>
          <form action="loginvalidation.php" class="" role="form" method="POST">
            <div class="form-group">
              <label class="sr-only" for="exampleInputEmail2">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email" name="email" required>
            </div>
            <div class="form-group">
              <label class="sr-only" for="exampleInputPassword2">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" name="password" required>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox"> Remember me
              </label>
            </div>
            <button type="submit" class="btn btn-success" name="submit">Sign in</button>
          </form>
        </div>
        <div class="col-sm-6">
          <h4>New User Sign Up</h4>
          <p>Join today and get updated with all the properties deal happening around.</p>
          <button type="submit" class="btn btn-info" onclick="window.location.href='register.php'">Join Now</button>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- /.modal -->



</body>

</html>