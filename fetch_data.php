<?php

//fetch_data.php

include('database_connection.php');

if(isset($_POST["action"]))
{
	$query = "
		SELECT * FROM artist_registration WHERE status = '1'
	";
	
	if(isset($_POST["brand"]))
	{
		$brand_filter = implode("','", $_POST["brand"]);
		$query .= "
		 AND category IN('".$brand_filter."')
		";
	}
	
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';
	if($total_row > 0)
	{
		foreach($result as $row)
		{
			$output .= '
		

					<div class="panel-title" >
						
							
							
				
					<div class="row" style="background-color:#ececec;padding:20px 0px; margin-bottom:10px;">
						<div class="col-xs-4">
						<img class="img-responsive" src="../../../desifankarnew/images/e1.jpg" style="height:170px; width:100%; border-radius:5px;">
						</div>
						<div class="col-xs-4">
							<h4 class="product-name"><strong>'. $row['first_name'] .'</strong></h4><h4><small>Product description</small></h4>
						</div>
						<div class="col-xs-4">
							<div class="col-xs-6 text-right">
								<h6><strong>'. $row['first_name'] .'<span class="text-muted">x</span></strong></h6>
							</div>
							<div class="col-xs-4">
								<input type="text" class="form-control input-sm" value="1">
							</div>
							<div class="col-xs-2">
								<button type="button" class="btn btn-link btn-xs">
									<span class="glyphicon glyphicon-trash"> </span>
								</button>
							</div>
						</div>
					</div>
				
			
			
		</div>
	

			
			';
		}
	}
	else
	{
		$output = '<h3>No Data Found</h3>';
	}
	echo $output;
}

?>