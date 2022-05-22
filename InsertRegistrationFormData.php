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
$fatherName = $_POST["fatherName"];
$motherName = $_POST["motherName"];
$dateofBirth=$_POST["dateofBirth"];
$phoneNumber = $_POST["phoneNumber"];
$nidNo = $_POST["nidNo"];
$division = $_POST["division"];
$district = $_POST["district"];
$upazila = $_POST["upazila"];
$uni = $_POST["uni"];


$sql = "INSERT INTO registration (name, fathername, motherName, dateofBirth, phoneNumber, nidNo, division, district, upazila, uni) VALUES ('$name', '$fatherName', '$motherName', '$dateofBirth', '$phoneNumber', 'nidNo', 'division', 'district', '$upazila', '$uni'  )";

?>

<?php require_once "header.php" ?>
<div class="ui segment">
<?php
if(mysqli_query($conn,$sql)){
	echo "<br><h4>Registration Successful</h4></br>";
} else {
	echo "<br><h4>Registration Failed</h4></br>"; 
}
mysqli_close($conn);
?>
</div>
<?php require_once "footer.php" ?>		


												
												
