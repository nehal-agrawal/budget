<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="fonts/css/font-awesome.min.css">
  <script type="text/javascript" src="search.js"></script>
</head>
	
<body>
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
 		 	<a class="navbar-brand" href="#">AdminPanel</a>
 	 		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    		<span class="navbar-toggler-icon"></span>
  			</button>
  			<div class="collapse navbar-collapse" id="collapsibleNavbar">
    		<ul class="navbar-nav">
      		
        	<ul class="navbar-nav justify-content-end">
    		

      		</div>
   	</nav>
	<div class="container-fluid">
  <div class="row">
    <div class="col-sm-2">
    	 <div class="card">
   			 <img class="card-img-top" src="img_avatar1.png" alt="Card image" >
    		<div class="card-body">
      			<h4 class="card-title">Super Admin</h4>
    		</div>
    		 <button type="button" class="btn btn-primary btn-block"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</button> 
    		

  		</div>
  		
    </div>
    <div class="col-sm-10">
  
   <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">DashBoard</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1"><i class="fa fa-users" aria-hidden="true"></i>Manage User</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2"><i class="fa fa-users" aria-hidden="true"></i>
Add Users</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu3"><i class="fa fa-envelope" aria-hidden="true"></i>
Request <span class="badge badge-dark">4</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu4">Forms</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      <h3>HOME</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <input type="text" class="form-control" id="myInput" placeholder="Search.."><br>
      <table class="table table-dark table-striped table-responsive">
    	<thead>
      	<tr>
        	<th>Firstname</th>
        	<th>Lastname</th>
        	<th>Email</th>
      	</tr>
    </thead>
    <tbody id="myTable">
      <tr>
        <td>Sanchay</td>
        <td>Kothari</td>
        <td>sanchay@example.com</td>
      </tr>
      <tr>
        <td>Umesh</td>
        <td>Kumar</td>
        <td>umesh@example.com</td>
      </tr>
      <tr>
        <td>sapna</td>
        <td>pandey</td>
        <td>sapna@example.com</td>
      </tr>
    </tbody>
  </table>
</div>
    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="container tab-pane fade"><br>
      <h3>Requests</h3>
      <?php
        require 'connect.php';
        $sql = "SELECT * FROM upload";
        $result = mysqli_query($con, $sql);
        echo"<div class='table-responsive'>";          
         echo "<table class='table'>";
            echo "<thead>";
              echo "<tr>";
                echo "<th>Status Id</th>";
                echo "<th>Requester</th>";
                echo "<th>Departement</th>";
                echo "<th>Request_title</th>";
                echo "<th>Expenditure_type</th>";
                echo "<th>cost_justification</th>";
                echo "<th>DOP_DESCRIPTION</th>";
                echo "<th>DOP_CATEGORY</th>";
                echo "<th>DOP_QUANTITY</th>";
                echo "<th>DOP_UNITPRICE</th>";
                echo "<th>DOP_VATRATE</th>";
                echo "<th>DOP_TOTAL</th>";
                echo "<th>comments</th>";
                echo "<th>status</th>";
                echo "<th>Update</th>";
              echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            while($row = mysqli_fetch_assoc($result)){
              echo "<tr>";
              
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['Requester']."</td>";
                echo "<td>".$row['Departement']."</td>";
                echo "<td>".$row['Request_title']."</td>";
                echo "<td>".$row['Expenditure_type']."</td>";
                echo "<td>".$row['cost_justification']."</td>";
                echo "<td>".$row['DOP_DESCRIPTION']."</td>";
                echo "<td>".$row['DOP_CATEGORY']."</td>";
                echo "<td>".$row['DOP_QUANTITY']."</td>";
                echo "<td>".$row['DOP_UNITPRICE']."</td>";
                echo "<td>".$row['DOP_VATRATE']."</td>";
                echo "<td>".$row['DOP_TOTAL']."</td>";
                echo "<td>".$row['comments']."</td>";
                echo "<td>".$row['status']."</td>";
                echo "<td>";
                echo "<button type='button' class='btn btn-outline-dark btn-sm'>";
                echo "approve";
                echo "</button>";
                echo"</td>";
              echo "</tr>";
          }
            echo "</tbody>";
          echo "</table>";
          echo "</div>";

      ?>
    </div>
    <div id="menu4" class="container tab-pane fade"><br>
      
    </div>
  </div>
  
  </div>

</body>
</html>