<?php
include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
  header("Location: welcome.php");
}

if (isset($_POST['submit']))  {
  $email = $_POST['email'];
  $password = md5($_POST['password']);

  $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  $result = mysqli_query($conn, $sql);

  if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $row['username'];
    header("Location: welcome.php");
  }  else {
    echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
  }
}

?>















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
  <!-- bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- font awesome -->

  <link rel="stylesheet" href="css/all.min.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style.css">

</head>
<body>
    

    
    <header>
        <!-- banner -->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
              aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
              aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
              aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/slider1.png" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <p><a href="login.php">Get Started</a></p>
                <h5>The best Magazine is here for you</h5>
      
      
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/slider2.png" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <p><a href="login.php">Get Started</a></p>
                <h5>The best Magazine is here for you</h5>
      
      
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/slider3.png" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <p><a href="login.php">Get Started</a></p>
                <h5>The best Magazine is here for you</h5>
      
      
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      
      
      
        <!-- navbar -->
        <nav class="navbar">
          <div class="logo"><a href="index.html"><img src="img/voice_logo.png" alt=""></div></a>
          <button class="toggle"><i class="fa-solid fa-burger fa-3x"></i></button>
          <ul class="navbar-menu">
            <li><a href="index.html">Home</a></li>
      
            <li class="dropdown">
              <a href="#">Categories</a>
              <ul class="dropdown-menu">
                <li><a href="health.html">Health</a></li>
                <li><a href="sport.html">Sport</a></li>
                <li><a href="beauty.html">Beauty</a></li>
                <li><a href="technology.html">Technology</a></li>
                <li><a href="others.html">Others</a></li>
              </ul>
            </li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact Us</a></li>
            <li><a href="login.php">login</a></li>
            <li><a href="signup.php">Subscribe</a></li>
      
          </ul>
      
        </nav>
      
      </header>
      

<div class="container">
  <div class="container-login">
        
        
    <form action="" method="POST" class="login-email">
        <p class="login-text">Log In</p>
        <div class="input-group">
            <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
        </div>
        <div class="input-group">
            <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
        </div>
        <div class="input-group">
            <button name="submit" class="btn">Login</button>
        </div>
        <p class="login-register-text">Don't have an account? <a href="signup.php">Subscribe</a></p>
    </form>
</div>

</div>






  <!-- footer -->

  <footer class="footer-distributed">

    <div class="footer-left">


      <div class="footer-icons">

        <a href="#"><i class="fa-brands fa-facebook"></i></a>
        <a href="#"><i class="fa-brands fa-instagram"></i></a>
        <a href="#"><i class="fa-brands fa-twitter"></i></a>


      </div>

      <p class="footer-company-name">All Rights Served &copy; 2022. All created by Sithu Yan Naing</p>
    </div>

    <div class="footer-center">



      <h5>The best Magazine is here for you</h5>



      <div>
        <center>
          <img src="img/voice_logo.png" alt="">
        </center>
      </div>

      <div>
        <center>
          <p><a href="signup.php">Subscribe Now</a></p>
        </center>
      </div>

    </div>

    <div class="footer-right">

      <p class="footer-company-about">
        <span>Newsletter</span>
        <input class="form-control me-2" type="search" placeholder="Enter Your Email">

      </p>
      <p class="p-f"><a href="signup.php">Submit</a></p>


    </div>

  </footer>

</body>
</html>