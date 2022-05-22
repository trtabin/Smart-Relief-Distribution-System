
<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "myDB";


$conn = mysqli_connect($serverName, $userName, $password, $dbName);
if(!$conn){
	die("Connection Failed: ". mysqli_connect_error());
}
$sql = "SELECT * FROM registration WHERE 1 ";

if(!empty($_POST["name"])){
	$name = $_POST["name"];
	$sql .=  "and name = '$name' ";
}

if(!empty($_POST["fatherName"])){
	$fatherName = $_POST["fatherName"];
	$sql .=  "and fatherName = '$fatherName' ";
}

if(!empty($_POST["motherName"])){
	$motherName = $_POST["motherName"];
	$sql .=  "and motherName = '$motherName' ";
}

if(!empty($_POST["nidNo"])){
	$nidNo = $_POST["nidNo"];
	$sql .=  "and nidNo = '$nidNo' ";
}

if(!empty($_POST["division"])){
	$division = $_POST["division"];
	$sql .=  "and division = '$division' ";
}

if(!empty($_POST["district"])){
	$district = $_POST["district"];
	$sql .=  "and district = '$district' ";
}

if(!empty($_POST["upazila"])){
	$upazila = $_POST["upazila"];
	$sql .=  "and upazila = '$upazila' ";
}

if(!empty($_POST["union"])){
	$union = $_POST["union"];
	$sql .=  "and union = '$union' ";
}

$result = mysqli_query($conn, $sql);

?>


	<div class="twelve wide  stretched column">
		<div class="ui segment">
			<table class="ui celled black table">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Father's Name</th>
						<th>Mother's Name</th>
						<th>Date of Birth</th>
						<th>NID NO</th>
						<th>Division</th>
						<th>District</th>
						<th>Upazila</th>
						<th>Union</th>
						<th>Gift Received</th>						



					</tr>
				</thead>
				<tbody>
					<?php
           if(mysqli_num_rows($result)>0){ while ($row =
					mysqli_fetch_assoc($result)) { ?>
					<tr>
						<td><?php echo $row["id"] ?></td>
						<td><?php echo $row["name"] ?></td>
						<td><?php echo $row["fatherName"] ?></td>
						<td><?php echo $row["motherName"] ?></td>
						<td><?php echo $row["dateofBirth"] ?></td>
						<td><?php echo $row["nidNo"] ?></td>
						<td><?php echo $row["division"] ?></td>
						<td><?php echo $row["district"] ?></td>
						<td><?php echo $row["upazila"] ?></td>
						<td><?php echo $row["union"] ?></td>
						<td><?php echo $row["giftReceived"] ?></td>						
					</tr>
					<?php
                    }
            } else {
                	echo "0 result";
            }

            mysqli_close($conn);
            ?>