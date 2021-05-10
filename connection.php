<?php
$sql=mysql_connect("localhost","root","");
mysql_select_db("business_card_maker");
if($sql){ 
echo ""; 
}
else
{ 
echo mysql_error();
}
	 ?>

