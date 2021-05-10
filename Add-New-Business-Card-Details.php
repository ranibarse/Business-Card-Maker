<?php
session_start();
?>
<!DOCTYPE html>
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

<body style="    background-color: black;">
 <?php include "Includes/header.php"; ?>

 
      <div class="col-lg-9">

        <div class="row">

          <div class="col-lg-12">
            <div class="card h-100">
             
              <div class="card-body">
                <center><h4 class="card-title">
                Update Your Profile
                </h4></center><hr>
               
<form action=""  method="post"  enctype="multipart/form-data">

								<fieldset style="margin-left:10%; margin-right:10%;">	
									
								
								
               
 <div class="form-group">
<label>

Company Name

</label>
	 <input type="text" name="company" id="fname" class="form-control" placeholder="Company Name" required>
</div>                       


                                <div class="form-group">
<label>
Company Website
</label>
	 <input type="text" name="Company_Website" id="fname" class="form-control" placeholder="Company Website" required>
									
								</div>
                                
                                
                                
                                
                                
                                <div class="form-group">
<label>

Company Address
</label>
	 <input type="text" name="Company_address" id="fname" class="form-control" placeholder=
     "Company Address" required>
									
								</div>
							   
              
              
              
               
 <div class="form-group">
<abel>
Company Services

</label>
	 <input type="text" name="Company_Services" id="fname" class="form-control" placeholder="Company Services" required>
</div>
							                    
       
   	
								<div class="form-group">
								   
								  <label>Company Logo</label>
	 <input type="file" name="file" required>
								</div>
							   
                               
                               		<div class="form-group">
								   
		<label>Company Contact Person Name</label>
	 <input type="text" name="Company_contact_person_name" id="fname" class="form-control" placeholder="Company Contact Person Name" required>
								</div>
							   
 
 <div class="form-group">
								   
		<label>Company Contact Person Designation</label>
	 <input type="text" name="Company_contact_person_designation" id="fname" class="form-control" placeholder="Company Contact Person Designation" required>
								</div>
                                
                                
                                <div class="form-group">
								   
		<label>Company Contact Person Contact</label>
	 <input type="text" name="Company_contact_person_contact" id="fname" class="form-control" placeholder="Company Contact Person Contact" required>
								</div>
                                
                                
 
    <div class="form-group">
								   
		<label>Company Contact Person emailid</label>
	 <input type="text" name="Company_contact_person_emailid" id="fname" class="form-control" placeholder="Company Contact Person emailid" required>
								</div>

							   
                   
					<center>
								
					<input type="submit" value="Upload" class="btn btn-info btn-block" />
									
					</center>
							
			<br/>
		</fieldset>
						
						</form>

	<br />	<br />	<br />	<br />	


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
if(isset($_POST['company'])){
	$company=$_POST['company'];
 $Company_Website=$_POST['Company_Website'];
$Company_address=$_POST['Company_address'];

$image_1=$_FILES['file']['name'];
$tmp_name1=$_FILES['file']['tmp_name'];
$location1='images/logo/';
move_uploaded_file($tmp_name1,$location1.$image_1);



$Company_Services=$_POST['Company_Services'];
$Company_contact_person_name=$_POST['Company_contact_person_name'];
$Company_contact_person_designation=$_POST['Company_contact_person_designation'];





$Company_contact_person_contact=$_POST['Company_contact_person_contact'];
$Company_contact_person_emailid=$_POST['Company_contact_person_emailid'];








$userid=$_SESSION['userid'];

$sql="INSERT INTO `card_details` ( `user_id`, `Company_name`, `Company_website`, `Company_address`, `Company_services`, `Company_logo`, `Company_contact_person_name`, `Company_contact_person_designation`, `Company_contact_person_contact`, `Company_contact_person_emailid`) VALUES ('$userid','$company', '$Company_Website', '$Company_address', '$Company_Services', '$image_1', '$Company_contact_person_name', '$Company_contact_person_designation', '$Company_contact_person_contact', '$Company_contact_person_emailid');";
$execute_query=mysql_query($sql);




if($execute_query>0){
	echo "<script>alert('User Profile  Uploaded Successfully!!');</script>";	
	}else{
echo mysql_error();
	}
	
}
?>
