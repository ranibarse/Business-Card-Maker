
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Business Card Maker</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse"  id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          
         <?php  if(!isset($_SESSION['userid'])){ ?> 
        <li class="nav-item active">
            <a class="nav-link" href="login.php">Login</a>
              <span class="sr-only">(current)</span>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="registration.php">Register</a>
              <span class="sr-only">(current)</span>
          </li>


            <li class="nav-item active">
            <a class="nav-link" href="about-us.php">About us</a>
              <span class="sr-only">(current)</span>
          </li>

            <li class="nav-item active">
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