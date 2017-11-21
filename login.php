<?php
require 'connect.php';
if(isset($_POST['submit'])){
	$email= $_POST['email'];
	$password = $_POST['pwd'];
	
$sql="SELECT name FROM employee WHERE email='$email' and password='$password'";
$sql1 = "SELECT name FROM employee WHERE email='$email'";
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$result1=$con->query($sql1);
$count=mysqli_num_rows($result);
if($result1->num_rows > 0)
{
while($row = $result1->fetch_assoc())
{
$a= $row["name"];
}
}
else
{
echo "0 rows";
}
if($count==1){

session_start();
    $_SESSION['loggedin'] = true;
$_SESSION["name"] = $a;
header("location:header.php");
echo $_SESSION["name"];
}
else {
header("location:login.php");
}
mysql_close($con);
}
?>




<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>
<body background="img/bgg.jpg">
	<div class="container">
		<br>
		<h1>USER Login !
		</h1>
			<p>Please login into analyser for the approval
			</p>
			<br>
			<br>
		 	<div class="row">
 			 <div class="col-sm-4">
 			 	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" style="">
				<div class="form-group">
    			<label for="email">Email address:</label>
    			<input type="email" class="form-control" id="email" name="email" required>
  				</div>
  				<div class="form-group">
    			<label for="pwd">Password:</label>
    			<input type="password" class="form-control" id="pwd" name="pwd" required>
  				</div>
  				 <button type="submit" class="btn btn-primary" value="submit" name="submit">Submit</button>
  				</form>
 			 <div class="col-sm-4"></div>
 			 <div class="col-sm-4"></div>
  			</div> 
	</div>

</body>
</html>