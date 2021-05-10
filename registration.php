<?php
session_start();
?><!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Business Card Maker</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>
 <?php include "Includes/header.php"; ?>

 
      <div class="col-lg-9">

        <div class="row">

          <div class="col-lg-12">
            <div class="card h-100">
             
              <div class="card-body">
                <center><h4 class="card-title">
                Registration
                </h4></center><hr>
               
               	<form action="" onsubmit= "return validation();" method="post">

								<fieldset style="margin-left:10%; margin-right:10%;">	
									
								
								<div class="form-group">
								   
								   <div id="fname1"></div>
								  
									<input type="text" name="name" id="fname" class="form-control" placeholder="Name*" required>
								</div>
							   

							   <div class="form-group">
								  
								  <div id="email_id1"></div>
								   
								  <input type="text" name="email" id="email_id" class="form-control" placeholder="Email id*" required>
								
								</div>
								
								<div class="form-group">
								
									<div id="pass1"></div>
								   <!-- //Minimum eight characters, at least one letter, one number and one special character -->
									<input type="password" name="password" id="pass" class="form-control" placeholder="Password*" required>
									
								</div>
							   
							   <div class="form-group">
               
									<div id="ct1"></div>
									
			<input type="number" name="contact" class="form-control" placeholder="Contact*" required>
								</div>
           
								<br />
								
								<center>
								
									<input type="submit" value="Register" class="btn btn-info" />
									
								</center>
							
								<br/>
								</fieldset>
						
						</form>

	<br />	<br />	<br />	<br />	<br />	<br /><br />	<br />


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
<?php 
require "connection.php";
if(isset($_POST['name'])){
echo $name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$contact=$_POST['contact'];
$sql="insert into register(name, email, password, contact)values('$name','$email','$password','$city');";
$execute_query=mysql_query($sql);
if($execute_query>0){
	echo "<script>alert('User Registered Successfully!!');window.location.href='login.php'</script>";	
	}else{
echo mysql_error();
	}
}
?>
