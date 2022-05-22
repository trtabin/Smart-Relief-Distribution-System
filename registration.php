<?php require_once "header.php" ?>
					<div class="ui info message">
						<div class="header">
							Need relief? Do registration first.
						</div>
					</div>
					<div class="ui segment">
						<form class="ui form" action="InsertRegistrationFormData.php" method="post">
						<div class="field">
								<label>Your Name</label>
								<input type="text" name="name" placeholder="Your Name" required />
							</div>
							<div class="field">
								<label>Father's Name</label>
								<input type="text" name="fatherName" placeholder="Father's Name" required />
							</div>
							<div class="field">
								<label>Mother's Name</label>
								<input type="text" name="motherName" placeholder="Mother's Name" required />
							</div>
							<div class="field">
								<label>Date of Birth</label>
								<input type="date" name="dateofBirth" min="1900-04-01" max="2010-04-30" placeholder="Date of Birth (mm/dd/yy)" required />
							</div>
              <div class="field">
                <label>Phone Number</label>
                <input type="number" name="phoneNumber" placeholder="Enter your phone number." required />
              </div>
							<div class="field">
								<label>NID No</label>
								<input type="number" name="nidNo" placeholder="National Id Number" required />
							</div>
<!-- -------------------------------------------------------------------------------Updated 24/4 -->

							<div class="field">
								<label>Address</label>

<div class="field">
<label>Division</label>
<select name="division" required>
  <option value="">--Enter Division --</option>
  <option value="Barisal Division">Barisal Division </option>
  <option value="Chittagong Division ">Chittagong Division </option>
  <option value="Dhaka Division ">Dhaka Division </option>
  <option value="Khulna Division ">Khulna Division </option>
  <option value="Mymensingh Division ">Mymensingh Division </option>
  <option value="Rajshahi Division ">Rajshahi Division </option>
  <option value="Rangpur Division ">Rangpur Division </option>
  <option value="Sylhet Division ">Sylhet Division </option>  	
</select>	
</div>
 
<div class="field">
<label>District</label>
<select name="district">
  <option value="">--Enter District--</option>
  <option value="Brahmanbaria District ">Brahmanbaria District </option>
  <option value="Comilla District ">Comilla District </option>
  <option value="Chandpur District ">Chandpur District </option>
  <option value="Lakshmipur District ">Lakshmipur District </option>
  <option value="Noakhali District ">Noakhali District </option>
  <option value="Feni District ">Feni District </option>
  <option value="Khagrachhari District ">Khagrachhari District </option>
  <option value="Rangamati District ">Rangamati District </option>
  <option value="Bandarban District ">Bandarban District </option>
  <option value="Chittagong District ">Chittagong District </option>
  <option value="Cox's Bazar District ">Cox's Bazar District </option>
</select>	
</div>

<div class="field">
<label>Upazila</label>
<select name="upazila">
  <option value="">--Enter Upazila--</option>
  <option value="Senbagh Upazila"> Senbagh Upazila</option>
  <option value="Begumganj Upazila">Begumganj Upazila </option>
  <option value="Chatkhil Upazila">Chatkhil Upazila </option>
  <option value="Companiganj Upazila">Companiganj Upazila </option>
  <option value="Noakhali Sadar Upazila">Noakhali Sadar Upazila </option>
  <option value="Hatiya Upazila">Hatiya Upazila </option>
  <option value="Kabirhat Upazila">Kabirhat Upazila </option>
  <option value="Sonaimuri Upazila"> Sonaimuri Upazila</option>  
  <option value="Suborno Char Upazila">Suborno Char Upazila </option>
</select>	
</div>

<div class="field">
<label>Union</label>
<select name="uni">
  <option value="">--Enter Union--</option>
  <option value=" Ander char">Ander char </option>
  <option value=" Ashwadia">Ashwadia </option>
  <option value="Binodpur">Binodpur </option>
  <option value="Char Matua">Char Matua </option>
  <option value="Dadpur">Dadpur </option>
  <option value="Dharmapur">Dharmapur </option>
  <option value="Ewazbalia">Ewazbalia </option>
  <option value="Kadir Hanif">Kadir Hanif </option>
  <option value="Kaladaraf">Kaladaraf </option>
  <option value="Niazpur ">Niazpur </option>
  <option value="Noakhali ">Noakhali </option>
  <option value="Noannai ">Noannai </option>
  <option value="Purba Char Matua ">Purba Char Matua </option>  
  <option value="Char Elahi ">Char Elahi </option>
  <option value="Char Fakira"> Char Fakira</option>
  <option value="Char Hazari ">Char Hazari </option>
  <option value="Char Kakra ">Char Kakra </option>  
  <option value="Char Parbati ">Char Parbati </option>
  <option value="Musapur ">Musapur </option>
  <option value="Rampur ">Rampur </option>
  <option value="Sirajpur ">Sirajpur </option>    
</select>	
</div>

								

							</div>
<!-- -------------------------------------------------------------------------------Updated 24/4 -->
							<div class="field">
								<div class="ui checkbox">
									<input type="checkbox" tabindex="0" required />
									<label>I agree to the Terms and Conditions</label>
								</div>
							</div>
							<button class="ui button" type="submit">Submit</button>
						</form>
					</div>
<?php require_once "footer.php" ?>	



