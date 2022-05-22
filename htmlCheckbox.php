</html>
<!DOCTYPE html>
<html>
<head>
	<title>Checkbox Test</title>
</head>
<body>
<form action="insertCheckboxData.php" method="post" >

	<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "myDB";

	$conn = mysqli_connect($serverName, $userName, $password, $dbName);
	if(!$conn){
		die("Connection Failed: ". mysqli_connect_error());
	}

	$sql = "SELECT * FROM registration";
	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result)>0){
		while ($row = mysqli_fetch_assoc($result)) {
	?>

	<input type="checkbox" id="<?php echo $row["name"]; ?>" name="<?php echo $row["nidNo"]; ?>" value="1">
	<label for="<?php echo $row["name"]; ?>"> <?php echo $row["name"]; ?> </label><br>

	<?php
		}
	} else {
		echo "0 result";
	}

	mysqli_close($conn);
	?>
	<input type="submit" name="submit">
</form>
</body>
</html>