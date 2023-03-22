<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>

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
      <li><a href="logout.php">Log Out</a></li>

    </ul>

  </nav>

</header>


  <!-- health -->
  <h1 class="title">Health</h1>
  <div class="container">
    <div class="row">
      <div class="card">

        <img src="img/back pain.jpg" alt="">
        <h4>5 Ways to relieve low back pain at Home</h4>
        <p>
          1.Keep Moving. You might not feel like it when you're in pain....</p>
        <p> 2.Stretch and Strengthen. Strong muscles, especially in your abdominal core, help support your back....</p>
        <p> 3.Keep Good Posture....</p>
        <a href="health.html" class="btn">Read More</a>
      </div>
      <div class="card">
        <img src="img/headache.jpg" alt="">
        <h4>5 Ways to reduce headache at Home</h4>
        <p>
          1.Try a Cold Pack... </p>
        <p>2.Use a Heating Pad or Hot Compress... </p>
        <p>3.Ease Pressure on Your Scalp or Head...</p>
        <a href="health.html" class="btn">Read More</a>
      </div>
      <div class="card">
        <img class="ab" src="img/ab pain.png" alt="">
        <h4>5 Ways to relieve abdominal Pain at Home</h4>
        <p>
          1.Place a hot water bottle or heated wheat bag on your abdomenial...</p>
        <p>2.Soak in a warm bath...</p>
        <p> 3.Drink plenty of clear fluids such as water...</p>
        <a href="health.html" class="btn">Read More</a>
      </div>
    </div>
  </div>
  <br>
  <br>
  <br>
  <hr>


  <!-- sport -->
  <img class="sport" src="img/sportcover.png" alt="">

  <div class="container-sp">
    <div class="row">
      <div class="card">

        <img class="sn-1" src="img/sportnews1.jpg" alt="">
        <h4>Barcelona chief appears to make sudden Frenkie de Jong to Man Utd transfer U-turn</h4>
        <p>
          The Catalan giants have spoken frequently about their financial problems and their need to sell before buying
          this summer but their fresh update will come as a blow to Manchester United...</p>
        <a href="sport.html" class="btn">Read More</a>
      </div>
      <div class="card">
        <img src="img/sportnews2.jpg" alt="">
        <h4>Serena Williams will play Wimbledon after being given a singles wildcard</h4>
        <p>
          The 40-year-old American, who is a 23-time Grand Slam singles champion, has not played since injuring herself
          in the first round at... </p>
        <a href="sport.html" class="btn">Read More</a>
      </div>
      <div class="card">
        <img src="img/sportnews3.jpg" alt="">
        <h4>Rory McIlroy questions validity of LIV Golf again as he prepares for US Open</h4>
        <p>
          Rory McIlroy has again questioned the sporting validity of the rebel LIV Golf Series, two days after taking a
          swipe at Greg Norman in the immediate aftermath of ...</p>
        <a href="sport.html" class="btn">Read More</a>
      </div>
    </div>
  </div>
  <br>
  <br>
  <br>
  <hr>



  <!-- beauty -->



  <h1 class="title-b">Beauty</h1>
  <div class="container">
    <div class="row">
      <div class="card">

        <img src="img/beauty1.jpg" alt="">
        <h4>How to get fair skin naturally</h4>
        <p>
          1.Get enough sleep. Advertisement...
        </p>
        <p>2.Drink enough water...
        </p>
        <p>3.Wear sunscreen even when indoors...
        </p>
        <p>4.Moisturize your skin...
        </p>
        <p>5.Massage your face with olive oil and honey...
        </p>
        <a href="beauty.html" class="btn">Read More</a>
      </div>
      <div class="card">
        <img class="b2" src="img/beauty2.jpg" alt="">
        <h4>5 Ways to get rid of old scars at home</h4>
        <p>
          1.Aloe Vera...
        </p>
        <p>2.Vitamin E...
        </p>
        <p>3.Apple Cider Vinegar...
        </p>
        <p>4.Honey...
        </p>
        <p>5.Coconut Oil...
        </p>
        <a href="beauty.html" class="btn">Read More</a>
      </div>

    </div>
  </div>
  <br>
  <br>
  <br>

  <hr>


  <!-- Hot News -->

  <h1 class="title-h">Hot News</h1>
  <div class="container">
    <div class="row">
      <div class="card">

        <img src="img/jb paralyse.jpeg" alt="">
        <h4>Justin Bieber says right side of his face is paralysed after virus attack, calls it 'pretty serious'
          condition</h4>
        <p>
          Singer Justin Bieber, 28, has revealed he has been diagnosed with a rare disorder that paralyzed .....
        </p>
        <a href="others.html" class="btn">Read More</a>
      </div>
      <div class="card">
        <img class="h2" src="img/billgate.jpg" alt="">
        <h4>Bill Gates says crypto and NFTs are a sham</h4>
        <p>
          Don't count Bill Gates among the fans of cryptocurrencies and NFTs. Those digital asset trends are "100% based
          on greater fool theory," the Microsoft co-founder said Tuesday at .....
        </p>
        <a href="others.html" class="btn">Read More</a>
      </div>

    </div>
  </div>
  <br>
  <br>
  <br>

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



  <script src="js/bootstrap.min.js"></script>
</body>


</html>