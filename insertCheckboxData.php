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

//This section of code is for password generation
$total = mysqli_num_rows($result);
$total += 1;
$password = array('0');

for($i=1; $i<$total; $i++){

	start:
	$a = rand(100000,999999);
	for($j=0; $j<$i; $j++){
		if($password[$j]==$a){
			goto start;
		}
	}
	$password[$i] = $a;
}
$password_no = 1;
//--------------------------------------------------password generation completed

if(mysqli_num_rows($result)>0){
	while ($row = mysqli_fetch_assoc($result)){

		$nidNo = $row["nidNo"];
		$value = $row["giftReceived"];
		$uniqueCode = $password[$password_no];
		$password_no += 1;

		if(isset($_POST[$nidNo]) && ($_POST[$nidNo] == "1")){
			$value += 1;
		} else{
			$value += 0;
        }

        $sql = "UPDATE registration SET giftReceived ='$value', uniqueCode ='$uniqueCode' WHERE nidNo='$nidNo' ";

	}
} else{

}

?>

<?php require_once "header.php" ?>
<div class="ui segment">
<?php
if(mysqli_query($conn,$sql)){
	echo "<br><h4>Successfully Message Send</h4></br>";
} else {
	echo "<br><h4>Failed</h4></br>"; 
}
mysqli_close($conn);
?>
</div>
<?php require_once "footer.php" ?>		