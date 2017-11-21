<?php
$dbname = "budget";
$con=mysqli_connect("localhost","root","San#3219","$dbname");
 if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
/*$sql = "CREATE DATABASE budget";
if (mysqli_query($con, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($con);
}*/
/*$sql = "CREATE TABLE employee (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
empid VARCHAR(30) NOT NULL,
departement VARCHAR(30) NOT NULL,
location VARCHAR(30) NOT NULL,
gender VARCHAR(30) NOT NULL,
dob VARCHAR(10) NOT NULL,
contact INT(10) NOT NULL,
address VARCHAR(250) NOT NULL,
password VARCHAR(50) NOT NULL
)";

if (mysqli_query($con, $sql)) {
    echo "table created successfully";
} else {
    echo "Error creating table: " . mysqli_error($con);
}*/
/*$sql = "SELECT * FROM contact";
$result = mysqli_query($con, $sql);


    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row['id']. " - Name: " . $row['name']. " email " . $row['email']. "contact" . $row['contact'] . "message" . $row['message'] . "<br>";
    }*/

/*$sql = "INSERT INTO employee (id,name,email,empid,departement,location,gender,dob,contact,address,password) VALUES(1,'sanchay kothari','sanchay.v.k@gmail.com','emp12345','Human Resource','Noida','male','30/07/1996','123456789','E-305 Vijaya Appt. 779/1 Manishpuri colony, Indore, Madhya Pradesh, India','san12345')";
if(mysqli_query($con,$sql))
{
	echo "value inserted";
}*/
?>