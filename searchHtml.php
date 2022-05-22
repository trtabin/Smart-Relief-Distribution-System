<?php require_once "header.php" ?>
					<div class="ui info message">
						<div class="header">
						Search From tha List
						</div>
					</div>
				
						<form action="search.php" method="post">
						
								<label>Your Name</label>
								<input type="text" name="name"  />
							
							
								<label>Father's Name</label>
								<input type="text" name="fatherName"  />
							
						
								<label>Mother's Name</label>
								<input type="text" name="motherName"  />
						
								<label>NID NO</label>
								<input type="number" name="nidNo"  /><br>
							
								<label>Division</label>
								<input type="text" name="division"  />
							
								<label>District</label>
								<input type="text" name="district" />

								<label>Upazila</label>
								<input type="text" name="upazila"  />
							
								<label>Union</label>
								<input type="text" name="union" />


				
							<button class="ui button" type="submit">Submit</button>
						</form>
					
<?php require_once "footer.php" ?>						