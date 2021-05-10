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
               
               
<table class="table table-bordered">
    <thead>
      <tr>
        <th>Company Name</th>
        <th>Company website</th>
        <th>Company contact person name</th>
        <th>Logo</th>
        <th>Action</th>
      </tr>
    </thead>
       <tbody>
<?php
require "connection.php";
$userid=$_SESSION['userid'];
$sql="select * from card_details where user_id='$userid'";
$execute_query=mysql_query($sql);
while($row=mysql_fetch_array($execute_query)){



?>

 
 
      <tr>
        <td><?php echo $row['Company_name']; ?></td>
        <td><?php echo $row['Company_website']; ?></td>

        <td><?php echo $row['Company_contact_person_name']; ?></td>
         <td><img src="images/logo/<?php echo $row['Company_logo']; ?>" style="height:90px; width:90px;"></td>
        <td><a href="design1.php?id=<?php echo $row['ID']; ?>" class="btn btn-primary">Click Here</a></td>
      </tr>
     <?php } ?>
    </tbody>
  </table>
             

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
  
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
