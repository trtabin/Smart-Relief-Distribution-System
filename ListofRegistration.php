<?php require_once "header.php" ?>
<?php 
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "myDB";

$conn = mysqli_connect($serverName, $userName, $password ,$dbName);
if(!$conn){
	die("Connection Failed: ". mysqli_connect_error());
} 

$sql = "SELECT * FROM registration ";
$result = mysqli_query($conn,$sql);
?>

<div class="ui center aligned segment" style=" background-color: #333;">
	<div class="ui statistic">
		<div class="value" style="color: grey;">
			20
		</div>

		<div class="label">
			<span style="color: grey;">TOTAL REGISTRATIONS FOR RELIEF</span><br />
		</div>
	</div>
</div>

<div class="ui segment">
<div class="ui stackable grid">
	
	<div class="four wide column">
		<div class="ui vertical fluid tabular menu">
			<a class="item " href="ListofDonation.php">
				List Of Donations
			</a>
			<a class="item active" href="ListofRegistration.php">
				List Of Registration
			</a>
		
		</div>
	</div>
	<div class="twelve wide stretched column">
		<div class="ui segment">
		    <form action="insertCheckboxData.php" method="post" >
			<table class="ui celled black table">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Father's Name</th>
						<th>Mother's Name</th>
						<th>Date of Birth</th>
						<th>Phone Number</th>
						<th>NID No</th>
						<th>Division</th>
						<th>District</th>
						<th>Upazila</th>
						<th>Union</th>
						<th>Action</th>
						
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
						<td><?php echo $row["phoneNumber"] ?></td>
						<td><?php echo $row["nidNo"] ?></td>
						<td><?php echo $row["division"] ?></td>
						<td><?php echo $row["district"] ?></td>
						<td><?php echo $row["upazila"] ?></td>
						<td><?php echo $row["uni"] ?></td>
						<td><input type="checkbox" id="<?php echo $row["name"]; ?>" name="<?php echo $row["nidNo"]; ?>" value="1"></td>
					</tr>
					<?php
                    }
                    
              
           } else {
                	echo "0 result";
                    }

                    mysqli_close($conn);
                    ?>
                    
				</tbody>
				
			</table>
			<input class="ui fluid button" type="submit" name="submit">
            </form>
		</div>
	</div>
</div>
</div>

<?php require_once "footer.php" ?>
