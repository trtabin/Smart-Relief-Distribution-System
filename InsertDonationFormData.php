<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "myDB";


$conn = mysqli_connect($serverName, $userName, $password, $dbName);
if(!$conn){
	die("Connection Failed: ". mysqli_connect_error());
}


$name = $_POST["name"];
$phoneNumber = $_POST["phoneNumber"];
$email = $_POST["email"];
$donationAmount=$_POST["donationAmount"];
$nidNo = $_POST["nidNo"];
$address = $_POST["address"];


$sql = "INSERT INTO donation (name, phoneNubmer, email, donationAmount, nidNo, address) VALUES ('$name', '$phoneNubmer', '$email', '$donationAmount', '$nidNo', '$address'  )";

if(mysqli_query($conn,$sql)){
	echo "New record created successfully";
} else {
	echo "Error: ". $sql. "<br>". mysqli_error($conn); 
}

mysqli_close($conn);
?>
