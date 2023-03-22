<?php

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
  header("Location: login.php");
}


if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  $cpassword = md5($_POST['cpassword']);

  if ($password == $cpassword) {
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if (!$result->num_rows > 0) {
      $sql = "INSERT INTO users (username, email, password)
    
            VALUES ('$username', '$email', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
             echo "<script>alert('Wow! User Registration Successfully Completed.')</script>";  
             $username = "";
             $email = "";
             $_POST['password'] = "";
             $_POST['cpassword'] = "";
      } else {
        echo "<script>alert('Woops! Something Went Wrong.')</script>"; 
         
      }
    } else {
            
      echo "<script>alert('Woops! Email Already Exists.')</script>";
    }


    

  } else {
    echo "<script>alert('Password not Matched.')</script>";
  }
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscribe</title>
    
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
      

    <!-- sign up -->

      
    <div class="container-login">
        
        
      <form action="" method="POST" class="login-email">
          <p class="login-text">Sign Up with Email</p>
          <div class="input-group">
            
              <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
          </div>
          <div class="input-group">
              <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
          </div>
          <div class="input-group">
              <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
          </div>
          <div class="input-group">
              <input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
          </div>
          

<br>
          <div class="input-group">
              <button name="submit" class="btn">Subscribe</button>
          </div>
          <p class="login-register-text">Already Subscribe? <a href="login.php">Login Here</a></p>
      </form>
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