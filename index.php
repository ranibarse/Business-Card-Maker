	<?php
session_start();
?><!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>
 Business Card Maker </title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body style="    background-color: black;">


  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="margin-top: -60px;">
    <div class="container">
      <a class="navbar-brand" href="#">Business Card Maker</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" style="padding: 0 0 0 500px;" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active" style="padding: 1px 15px 0 0;"> 
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          
         <?php  if(!isset($_SESSION['userid'])){ ?> 
        <li class="nav-item active"  style="padding: 1px 15px 0 0;">
            <a class="nav-link" href="login.php">Login</a>
              <span class="sr-only">(current)</span>
          </li>
          <li class="nav-item active"  style="padding: 1px 15px 0 0;">
            <a class="nav-link" href="registration.php">Register</a>
              <span class="sr-only">(current)</span>
          </li>


            <li class="nav-item active"  style="padding: 1px 15px 0 0;">
            <a class="nav-link" href="about-us.php">About us</a>
              <span class="sr-only">(current)</span>
          </li>

            <li class="nav-item active"  style="padding: 1px 15px 0 0;">
            <a class="nav-link" href="Our-Team.php">Our Team</a>
              <span class="sr-only">(current)</span>
          </li>


          <?php }else{ ?>
        
        
         <li class="nav-item active">
            <a class="nav-link" href="logout.php">Logout
            
            </a>
          </li>
       <?php  } ?>
        </ul>
      </div>
    </div>
  </nav>
 <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">
      <?php  if(isset($_SESSION['userid'])){ ?>
      <center>
<img src="images/00-ELASTOFONT-STORE-READY_user-circle-512.png" height="100" width="100">
      <br /><br />  Welcome <?php echo $_SESSION['username']; ?> 
        </center>
       
        
        <h1 class="my-4"></h1>
        <div class="list-group">
          <a href="" class="list-group-item">User Profile</a>
        
          
        </div>
        
          
       <h1 class="my-4"></h1>
        <div class="list-group">
          <a href="Add-New-Business-Card-Details.php" class="list-group-item">
          Add New Business Card Details</a>
        
        
            <a href="Get-Exsistance-Card-Details.php" class="list-group-item">
            Get Exsistance Card Details</a>
        </div>

     <?php } ?>
      <!-- /.col-lg-3 --></div>

  
      <div class="col-lg-9">






 <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
      <img class="d-block img-fluid" style="width:100%; height:550px;" src="images/diabetes.jpg" alt="First slide">
      </div>

      <div class="item">
      <img class="d-block img-fluid" style="width:100%; height:550px;" src="images/standard-business_cards-prod-img-1_450x450 (1).jpg" alt="First slide">
      </div>
    
      <div class="item">
       <img class="d-block img-fluid" style="width:100%; height:550px;" src="images/Online-Business-Card-Maker-mail.jpg" alt="First slide">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>




        <div class="row">

          <div class="col-lg-12">
            <div class="card h-100">
             
              <div class="card-body">
               <h1>Easy-to-Use Business Card Maker</h1>
    <h2>Try Our Free Business Card Maker - It's Fast & Easy!</h2>
    <ul>
        <li><strong>We’re Trusted</strong> - 25 million users worldwide have used our free templates.</li>
        <li><strong>High-Quality Designs</strong> - Our designers are expertly trained.</li>
        <li><strong>Fast & Easy Process</strong> - Make personalized business cards in minutes.</li>
        <li><strong>It's Free</strong> - Make your business cards for free. Buy your favorite design.</li>
        <li><strong>Our Selection</strong> - Have we mentioned our 1,000s of business card options?</li>
    </ul>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

         

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Business Card Maker</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
