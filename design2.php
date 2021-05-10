<!doctype <!DOCTYPE html>
<html>
<head><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<style>
.businessCard {
    width: 80%;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 50px;
    font-family: 'lato','sans-serif';
    font-size: 1.1em;
    position: relative;
}
.businessCard .fullName {
    font-weight: bolder;
    font-size: 2em;
}
.businessCard .jobTitle {
    font-style: italic;
    font-size: 1.3em;
}
.businessCard .profilePictureWrapper {
    overflow: hidden;
    border-radius: 50%;
    padding: 10px;
    border: 4px solid black;
    margin-top: 38%;
}
.businessCard .linksAndDetailsSection .rowJoinerWrapper {
    width: 34px;
    height: 15px;
    padding-left: 0.75rem;
    min-height: 1px;
    position: relative;
    text-align: center;
    z-index: 999;
    float: left;
    margin-bottom: -1px;
    margin-top: -1px;
}
.businessCard .linksAndDetailsSection .rowJoiner {
    width: 50%;
    height: 100%;
    margin-left: auto;
    border-left: 1px solid black;
    border-right: 1px solid black;
}
.businessCard .linkedInURL i, .businessCard .codingProfileURL i {
    position: absolute;
    width: 24px;
    height: 24px;
    text-align: center;
    font-size: large;
}
.businessCard .linksAndDetailsSection i.fa {
    font-size: x-large;
}
.businessCard .linksAndDetailsSection .iconWrapper {
    display: inline-block;
    width: 34px;
    height: 31px;
    padding-top: 3px;
    padding-left: 4px;
    margin-right: 10px;
    border-radius: 8px;
    border: 1px solid black;

}
.businessCard .linksAndDetailsSection .textWrapper {
    display: inline-block;
}
.businessCard .iconsSolidBackground {
    background-color: black;
    color: white !important;
}
.businessCard .diagonals {
    position: absolute;
    height: 200%;
    width: 14px;
    top: -50%;
    right: 222px;
    border-left: 4px solid red;
    border-right: 4px solid red;
    transform: rotateZ(24deg);
    background-color: #38013d;
}
.businessCard > .card-panel {
    position: relative;
    background-color: unset;
}
.businessCard .background {
    width: 100%;
    position: absolute;
    height: 100%;
    top: 0px;
    left: 0px;
    overflow: hidden;
    background-color: white;
}
.businessCard .ageWrapper {
    margin-top: 4px;
    font-size: medium;
    font-style: italic;
}
.businessCard .linksAndDetailsSection {
    min-height: 88px;
}
.businessCard .fixedUpperRightToolbar {
    position: absolute;
    right: 10px;
    top: 10px;
}
@media (max-width: 600px) {
    .businessCard .profilePictureWrapper {
        margin-top: 0px;
    }
}
</style>

</head>
<body>
	<?php
require "connection.php";
$userid=$_GET['id'];
$sql="select * from card_details where ID='$userid'";
$execute_query=mysql_query($sql);
while($row=mysql_fetch_array($execute_query)){



?>
<div id="html-content-holder" >
      <div class="businessCard materialize">
        <div class="background">
            <div class="diagonals"></div>
        </div>
        <div class="card-panel z-depth-4 hoverable"  style="background-image:url(images/1_dP81IJq-tGFxy1rIK3RYsg.png);">
            <div class="row valign-wrapper">
                <div class="col s8 leftSide">
                    <div class="row nameAndTitleSection">
                        <div class="fullName col s12" style="color:#FFF;"><?php echo $row['Company_name']; ?></div>
                        <div class="divider col s12" style="height: 2px;"></div>
                        <div class="jobTitle col s11 offset-s1"  style="color:#FFF;"><?php echo $row['Company_services']; ?></div>
                         <div class="jobTitle col s11 offset-s1"  style="color:#FFF;"><?php echo $row['Company_address']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col s11 offset-s1 linksAndDetailsSection">
                            <div class="emailAddress col s12 valign-wrapper">
                                <div class="iconWrapper z-depth-2 iconsSolidBackground">
                                    <div class="icon">
                                       
                                    </div>
                                </div>
                                <div class="textWrapper">
                                    <a href="" style="color:#FFF;" target="_blank"><?php echo $row['Company_contact_person_name']; ?></a>
                                </div>
                            </div>
                            <div class="rowJoinerWrapper"><div class="rowJoiner iconsSolidBackground"></div></div>
                            <div class="geography col s12 valign-wrapper">
                                <div class="iconWrapper z-depth-2 iconsSolidBackground">
                                    <div class="icon">
                                    
                                    </div>
                                </div>
                                <div class="textWrapper">
                                    <span style="color:#FFF;"><?php echo $row['Company_contact_person_designation']; ?></span>
                                </div>
                            </div>
                            <div class="rowJoinerWrapper"><div class="rowJoiner iconsSolidBackground"></div></div>
                            <div class="linkedInURL col s12 valign-wrapper">
                                <div class="iconWrapper z-depth-2 iconsSolidBackground">
                                    <div class="icon">
                                        <i class="material-icons left">link</i><i class="fa fa-linkedin-square iconsSolidBackground" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="textWrapper">
                                    <a href="" target="_blank" style="color:#FFF;"><?php echo $row['Company_contact_person_emailid']; ?></a>
                                </div>
                            </div>
                            <div class="rowJoinerWrapper"><div class="rowJoiner iconsSolidBackground"></div></div>
                            <div class="codingProfileURL col s12 valign-wrapper">
                                <div class="iconWrapper z-depth-2 iconsSolidBackground">
                                    <div class="icon">
                                        <i class="material-icons left">code</i><i class="fa fa-github iconsSolidBackground" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="textWrapper">
                                    <a href="" style="color:#FFF;" target="_blank"><?php echo $row['Company_contact_person_contact']; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s4 rightSide">
                    <div class="valign-wrapper">
                        <div class=" col s12 z-depth-2">
<img class="profilePicture responsive-img" src="images/logo/<?php echo $row['Company_logo']; ?>">
                        </div>
                    </div>
                    <div class="ageWrapper col s12 center">
                        <span style="color:white;"><?php echo $row['Company_website']; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
     </div>

      <?php } ?>
  <center>  <input id="btn-Preview-Image" type="button" value="Preview First Then Download"/>
    <a id="btn-Convert-Html2Image" href="#">Download</a>
     <a id="" href="design3.php?id=<?php  echo $_GET['id']; ?>">Next Design</a>
    <br/>
    <h3>Preview :</h3>
    <div id="previewImage">
    </div>

</center>
<script>
$(document).ready(function(){

	
var element = $("#html-content-holder"); // global variable
var getCanvas; // global variable
 
    $("#btn-Preview-Image").on('click', function () {
         html2canvas(element, {
         onrendered: function (canvas) {
                $("#previewImage").append(canvas);
                getCanvas = canvas;
             }
         });
    });

	$("#btn-Convert-Html2Image").on('click', function () {
    var imgageData = getCanvas.toDataURL("image/png");
    // Now browser starts downloading it instead of just showing it
    var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
    $("#btn-Convert-Html2Image").attr("download", "your_pic_name.png").attr("href", newData);
	});

});

</script>
</body>