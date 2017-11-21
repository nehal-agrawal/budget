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
	<header style="height: 164px;">
		<img class="img-fluid" src="img/logo.jpg" alt="Logo" style="width: 100%; height: 100%;"> 
	</header>
	<nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
		<a class="navbar-brand" href="#">Budget Approval System
		</a>
		<ul class="nav nav-pills" role="tablist">
   			<li class="nav-item">
      			<a class="nav-link active" data-toggle="pill" href="#home">Home</a>
    		</li>
    		<li class="nav-item">
      			<a class="nav-link" data-toggle="pill" href="#menu1">Upload</a>
    		</li>
    		<li class="nav-item">
      			<a class="nav-link" data-toggle="pill" href="#menu2">Status</a>
    		</li>
    		<li class="nav-item">
      			<a class="nav-link" data-toggle="pill" href="#menu3">About</a>
    		</li>
  		</ul>
 	</nav>	
 	<div class="container-fluid">
 		<div class="tab-content">
   		 <div id="home" class="container tab-pane active"><br>
      		
      		<div class="row">
    			<div class="col-sm-2">
    	 			<div class="card">
   			 			<img class="card-img-top" src="img/img_avatar1.png" alt="Card image" >
    					<div class="card-body">
      						<h4 class="card-title">  <?php  session_start(); 
							if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
								{	
									$x  = $_SESSION["name"];
									echo $_SESSION["name"];
								}
				 			else { echo ";";}
				  			?></h4>
    					</div>
    		 			<button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModal"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</button>
    					<?php 
    					include("connect.php");
						$sql = "SELECT * FROM employee WHERE name='$x'";
						$result = mysqli_query($con, $sql);
						// output data of each row
				    	while($row = mysqli_fetch_assoc($result)) {
				        $id = $row['id'];
				        $n = $row['name'];
				        $em=$row['email'];
				        $emid = $row['empid'];
				        $dep = $row['departement'];
				        $loc = $row['location'];
				        $gender = $row['gender'];
				        $date = $row['dob'];
				        $cnc = $row['contact'];
				        $add = $row['address'];
				        $pas = $row['password'];
   						}
    		 			?>
					</div>
    			</div>
    			<div class="col-sm-10">
					<div class="jumbotron jumbotron-fluid">
  						<div class="container">
    						<h1>User Details :</h1> <br>
    						<div class="table-responsive">
    							<table class="table">
						   		 <thead>
						      		<tr>
						        		<th>NAME : <?php echo $n; ?></th>
						        		<th>EMPLOYEE ID : <?php echo $emid; ?></th>
						      		</tr>
						      		<tr>
						      			<th>DEPARTEMENT : <?php echo $dep; ?></th>
						      			<th>JOB LOCATION : noida</th>
						      		</tr>
						      		<tr>
						      			<th>E-MAIL :<?php echo $em ?></th>
						      			<th>CONTACT :<?php echo $cnc; ?></th>
						      		</tr>
						      		<tr>
						      			<th>D.O.B : <?php echo $date; ?></th>
						      			<th>GENDER : <?php echo $gender; ?></th>
						      		</tr>
						      		<tr>
						      			<th>ADDRESS : <?php echo $add; ?></th>
						      		</tr>
						    	 </thead>
						    	</table>
    						</div>
						</div>
					</div>
					<div class="modal fade" id="myModal">
   						<div class="modal-dialog">
      						<div class="modal-content">
						        <!-- Modal Header -->
						        <div class="modal-header">
						          <h4 class="modal-title">Are You sure You want To Logout ?</h4>
						          <button type="button" class="close" data-dismiss="modal">&times;</button>
						        </div>
						        <!-- Modal footer -->
						        <div class="modal-footer">
						          <a href="login.php"><button type="button" class="btn btn-secondary" onclick="<?php session_destroy(); ?>">Logout
						          </button></a>
						        </div>
      						</div>
    					</div>
  					</div>
				</div>
			</div>
		 </div>
    	 <div id="menu1" class="container tab-pane fade"><br>
      	 		<form method="post" action="thankyou.php" enctype="multipart/form-data">
    				<label for="sel1">Requester</label>
      				<select class="form-control" name="req">
      					<option value="">Select</option>
					    <option value="<?php echo $n;  ?>"><?php echo $n;  ?></option>
					</select>
			        <label for="sel1">Departement</label>
			        <select class="form-control" name="dept">
			        <option value="accouting">accouting</option>
			        <option value="finance">finance</option>
			        <option value="human resource">Human resource</option>
			        </select>
			  		<label for="usr">Request Title</label>
			  		<input type="text" class="form-control" name="reqtitle">
			  		<label for="sel1">Expenditure Type</label><br>
	  				<div class="form-check form-check-inline">
				        <label class="form-check-label">
				          <input type="checkbox" class="form-check-input" name="exptype" value="marketing">Marketing
				        </label>
				        <label class="form-check-label">
          					<input type="checkbox" class="form-check-input" name="exptype" value="travel">Travel
        				</label>
        				<label class="form-check-label">
          					<input type="checkbox" class="form-check-input" name="exptype" value="investement">Investement
        				</label>
      				</div>
       				<div class="form-group">
  					<label for="comment">Cost Justification(savings/benefits)</label>
  					<textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
					</div> 
      				<hr>
      				<label for="usr">Detail of the Purchase</label>
      				<div class="table-responsive">          
					  <table class="table">
					    <thead>
					      <tr>
					        <th>Description</th>
					        <th>Category</th>
					        <th>Quantity</th>
					        <th>Unit price(Rs)</th>
					        <th>VAT Rate</th>
					        <th>Total</th>
					      </tr>
					    </thead>
					    <tbody>
					      <tr>
					        <td><input type="text" class="form-control" id="usr" name="itemdesc"></td>
					        <td> <select class="form-control" id="sel1" name="tablecateg">
					    	<option value="">Select an item</option>
						    <option value="tickets">Tickets</option>
						    <option value="tshirts">t-shirt</option>
						    <option value="festiexp">festival exp</option>
						  	</select></td>
					        <td><input type="text" class="form-control" name="quan" ></td>
					        <td><input type="text" class="form-control" name="unitprice" ></td>
					        <td><select class="form-control" name="vatrate">
					    		<option value="17.5">17.5%</option>
					    		<option value="18.5">18.5%</option>
					    		<option value="19.0">19.0%</option>
					    		<option value="20.0">20.0%</option>
					  		</select></td>
					        <td><input type="text" class="form-control" name="total" value=""></td>
					      </tr>
					    </tbody>
					  </table>
					</div>
					<label for="comment">Comments (If any)</label>
  					<textarea class="form-control" rows="5" id="comment" name="comment1"></textarea><br>

				    <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
				</form>
    	 </div>
    	 
    	 <div id="menu2" class="container tab-pane fade"><br>
      	 
      	 <?php
      	 	$sql = "SELECT id,Departement,Expenditure_type,DOP_TOTAL,status FROM upload WHERE Requester='$x'";
      	 	$result = mysqli_query($con, $sql);
			if(!empty($result))
      	 	{
      	 		
      	 	echo"<div class='table-responsive'>";          
				 echo "<table class='table'>";
				    echo "<thead>";
				      echo "<tr>";
				        echo "<th>Status Id</th>";
				        echo "<th>Departement</th>";
				        echo "<th>Expenditure_type</th>";
				        echo "<th>Total Amount</th>";
				        echo "<th>Status</th>";
				      echo "</tr>";
				    echo "</thead>";
				    echo "<tbody>";
				    while($row = mysqli_fetch_assoc($result)){
				      echo "<tr>";
				      
				        echo "<td>".$row['id']."</td>";
				        echo "<td>".$row['Departement']."</td>";
				        echo "<td>".$row['Expenditure_type']."</td>";
				        echo "<td>".$row['DOP_TOTAL']."</td>";
				        echo "<td>".$row['status']."</td>";
				        

				      echo "</tr>";
				  }
				    echo "</tbody>";
				  echo "</table>";
				  echo "</div>";
      	 	}
      	 	else
      	 	{
      	 		echo "<p>Hurry ! No pending Approval to show</p>";
      	 		
      	 		}
      	  ?>
      	 
    	 </div>
    	 <div id="menu3" class="container tab-pane fade"><br>
    	 	<div class="container">
  			<div class="jumbotron">
      	 		<h2 class="text-primary">About Budget Approval System</h3> <br>
      	 		<h4>Company Profile</h4>
      	 		<p>Our company is a Marketing and Exporting company, which has about 7 branches abroad. Our company was founded in 1994. Within 8 years company started 12 more branches in major areas. It is one of the most popular marketing company. It is also the market topper in educational books encompassing books on variety of subjects and interest. </p> <br>
      	 		<h4>About Budget Approval Process</h4>
      	 		<p>Budget Approval is a web based Profit Loss analyzing developed softwares. The company uses it for daily updating and inventory management. You can upload your Product Information. The information provided by you will be parsed and will be approved accordingly. </p>

      	 	</div>
      	 </div>
    	 </div>
    	</div>
  	</div>
</body>
</html>