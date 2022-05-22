<?php require_once "header.php" ?>
					<div class="ui info message">
						<div class="header">
						Your single contribution will go a long way to make our people smile
						</div>
					</div>
					<div class="ui segment">
						<form class="ui form" action="InsertDonationFormData.php" method="post">
						<div class="field">
								<label>Your Name</label>
								<input type="text" name="name" placeholder="Your Name" required />
							</div>
							<div class="field">
								<label>Phone Number</label>
								<input type="number" name="phoneNumber" placeholder="your 11 digits phone number" required/>
							</div>
							<div class="field">
								<label>Email</label>
								<input type="email" name="email" placeholder="Email" required/>
							</div>
							<div class="field">
								<label>Donation Amount</label>
								<input type="number" name="donationAmount" placeholder="Donation amount in Taka" required/>
							</div>
							<div class="field">
								<label>NID No</label>
								<input type="number" name="nidNo" placeholder="National Id Number" required/>
							</div>
							<div class="field">
								<label>Address</label>
								<input type="text" name="address" placeholder="Address" required/>
							</div>
							<div class="field">
								<div class="ui checkbox">
									<input type="checkbox" tabindex="0" class="hidden" required/>
									<label>I agree to the Terms and Conditions</label>
								</div>
							</div>
							<button class="ui button" type="submit">Submit</button>
						</form>
					</div>
<?php require_once "footer.php" ?>						