<!DOCTYPE html>
<html>
<head>
	<title>Budget Approval System</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  
</head>
<body>
	<?php 
    	 require 'connect.php';
    	 	if(isset($_POST['submit']))
    	 	{

    	 		$requester=$_POST['req'];
    	 		$departement = $_POST['dept'];
    	 		$request_title = $_POST['reqtitle'];
    	 		$exp_type = $_POST['exptype'];
    	 		$cost_just = $_POST['comment'];
    	 		$description = $_POST['itemdesc'];
    	 		$category = $_POST['tablecateg'];
    	 		$quantity = $_POST['quan'];
    	 		$unit_price = $_POST['unitprice'];
    	 		$vat_rate = $_POST['vatrate'];
    	 		$total = $_POST['total'];
    	 		$comment = $_POST['comment1'];

    	 		$sql = "INSERT INTO upload (Requester,Departement,Request_title,Expenditure_type,cost_justification,DOP_DESCRIPTION,DOP_CATEGORY,DOP_QUANTITY,DOP_UNITPRICE,DOP_VATRATE,DOP_TOTAL,comments,status) VALUES('$requester','$departement','$request_title','$exp_type','$cost_just','$description','$category',$quantity,$unit_price,$vat_rate,$total,'$comment','pending')";
    	 		mysqli_query($con,$sql);
    	 		
    	 	}

    	 ?>
<div class="container-fluid">
  <div class="jumbotron">
    <h1 class="text-primary">Your Information is submitted</h1>      
    <p>We will notify You when it will be approved. Meanwhile You can check your status in status section of your account.</p>
    <p>Please <a href="login.php">click here</a> to go back to login page.</p>
  </div>     
</div>
</body>
</html>