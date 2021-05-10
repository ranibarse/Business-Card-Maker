<?php
session_start();
?><!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Disease Diagnosis Based on Patient's Health Parameters</title>

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
                Update Your Profile
                </h4></center><hr>
               
               	<form action="" onsubmit= "return validation();" method="post">

								<fieldset style="margin-left:10%; margin-right:10%;">	
									
								
								<div class="form-group">
								   
								  <label>Gender</label><Br>
	 <input type="radio" name="gender" value="male"> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>

								</div>
							      
               
 <div class="form-group">
<label>

Age (Years)

</label>
	 <input type="text" name="Age" id="fname" class="form-control" placeholder="Age (years)" required>
</div>                       


                                <div class="form-group">
<label>
T3
</label>
	 <input type="text" name="T3" id="fname" class="form-control" placeholder="T3" required>
									
								</div>
                                
                                
                                
                                
                                
                                <div class="form-group">
<label>

TT4
</label>
	 <input type="text" name="TT4" id="fname" class="form-control" placeholder=
     "TT4" required>
									
								</div>
							   
              
              
              
               
 <div class="form-group">
<abel>
T4U

</label>
	 <input type="text" name="T4U" id="fname" class="form-control" placeholder="T4U" required>
</div>
							                    
       
   	
								<div class="form-group">
								   
								  <label>Pre Glucose Level (Plasma glucose concentration a 2 hours in an oral glucose tolerance test)</label>
	 <input type="text" name="Glucose" id="fname" class="form-control" placeholder="Glucose Level (Plasma glucose concentration a 2 hours in an oral glucose tolerance test)" required>
								</div>
							   
                               
                               		<div class="form-group">
								   
		<label>Post meal Glucose Level</label>
	 <input type="text" name="postGlucose" id="fname" class="form-control" placeholder="Glucose Level (Plasma glucose concentration a 2 hours in an oral glucose tolerance test)" required>
								</div>
							   
 
 
    

							   <div class="form-group">
								  
								  <label>
Chest Pain (Range 0 to 3)
</label>	 <input type="text"
 name="cp" id="cp" class="form-control" placeholder="Chest Pain" required>
								</div>
								
	<div class="form-group">
<label>

Resting Blood Pressure(
 blood pressure (in mm Hg on admission to the hospital) Range 80 to 200
</label>
	 <input type="text" name="bp" id="fname" class="form-control" placeholder="Resting Blood Pressure(
 blood pressure (in mm Hg on admission to the hospital) Range 80 to 200" required>
									
								</div>
 
 
 
   
                                <div class="form-group">
<label>

Cholestoral (serum cholestoral in mg/dl)
</label>
	 <input type="text" name="Cholestoral" id="fname" class="form-control" placeholder="Cholestoral (serum cholestoral in mg/dl)" required>
									
								</div>
                                
                                
                                
                                                  
                                <div class="form-group">
<label>


fasting blood sugar 
(fasting blood sugar > 120 mg/dl) (1 = true; 0 = false)
</label>
	 <input type="text" name="fbs" id="fname" class="form-control" placeholder=
     "(fasting blood sugar > 120 mg/dl) (1 = true; 0 = false)" required>
									
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
      <p class="m-0 text-center text-white">Disease Diagnosis Based on Patient's Health Parameters | Developed By Rutuja</p>
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
if(isset($_POST['gender'])){
 $gender=$_POST['gender'];
$Age=$_POST['Age'];




$Tumor="";
$Goitre="";

$T3=$_POST['T3'];
$TT4=$_POST['TT4'];
$T4U=$_POST['T4U'];





$cp=$_POST['cp'];
$bp=$_POST['bp'];
$Cholestoral=$_POST['Cholestoral'];
$fbs=$_POST['fbs'];







$userid=$_SESSION['userid'];

$sql="INSERT INTO `disease_diagnosis`.`thyroid_user_profile` (`user_id`, `age`, `sex`, `Tumor`, `Goitre`, `T3`, `TT4`, `T4U`) VALUES ('$userid','$Age','$gender','$Tumor','$Goitre','$T3','$TT4','$T4U');";
$execute_query=mysql_query($sql);



$Glucose=$_POST['Glucose'];
$postGlucose=$_POST['postGlucose'];
$BloodPressure="-";
$SkinThickness="-";
$Insulin="-";

$BMI="-";
$Pedigree='-';


$sql="INSERT INTO `user_dibetic_profile` (`user_id`, `Pregnancies`, `pre_suger`, `post_suger`, `BloodPressure`, `SkinThickness`, `Insulin`, `BMI`, `DiabetesPedigreeFunction`, `Age`)VALUES  ('$userid','-','$Glucose','$postGlucose','$BloodPressure','$SkinThickness','$Insulin','$BMI','$Pedigree','$Age');";
$execute_query=mysql_query($sql);









$Glucose="";
$bp=$_POST['bp'];
$cp=$_POST['cp'];
$Cholestoral=$_POST['Cholestoral'];

$fbs=$_POST['fbs'];
$achieved="";
$depression="";



$sql="INSERT INTO `heart_desease_user_profile` (`user_id`, `age`, `sex`, `cp`, `trestbps`, `chol`, `fbs`) VALUES('$userid','$Age','$gender','$cp','$bp',
'$Cholestoral','$fbs');";
$execute_query=mysql_query($sql);

if($execute_query>0){
	echo "<script>alert('User Profile  Uploaded Successfully!!');</script>";	
	}else{
echo mysql_error();
	}
	
}
?>
