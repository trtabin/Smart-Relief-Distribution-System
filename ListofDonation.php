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

$sql = "SELECT * FROM donation ";
$result = mysqli_query($conn,$sql);
?>


<div class="ui center aligned segment" style=" background-color: #333;">
	<div class="ui statistic">
		<div class="value" style="color: grey;">
			56
		</div>

		<div class="label">
			<span style="color: grey;">TOTAL DONATIONS</span><br />
		</div>
	</div>
</div>

<div class="ui segment">

<div class="ui stackable grid">
	<div class="four wide column">
		<div class="ui vertical fluid tabular menu">
			<a class="item active" href="ListofDonation.php">
				List Of Donations
			</a>
			<a class="item " href="ListofRegistration.php">
				List Of Registration
			</a>
	
		</div>
	</div>
	<div class="twelve wide  stretched column">
		<div class="ui segment">
			<table class="ui celled black table">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Phone Number</th>
						<th>Email</th>
						<th>Donation Amount</th>
						<th>NID No</th>
						<th>Address</th>
					</tr>
				</thead>
				<tbody>
					<?php
           if(mysqli_num_rows($result)>0){ while ($row =
					mysqli_fetch_assoc($result)) { ?>
					<tr>
						<td><?php echo $row["id"] ?></td>
						<td><?php echo $row["name"] ?></td>
						<td><?php echo $row["phoneNumber"] ?></td>
						<td><?php echo $row["email"] ?></td>
						<td><?php echo $row["donationAmount"] ?></td>
						<td><?php echo $row["nidNo"] ?></td>
						<td><?php echo $row["address"] ?></td>
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
		</div>
	</div>
</div>
</div>

<?php require_once "footer.php" ?>
