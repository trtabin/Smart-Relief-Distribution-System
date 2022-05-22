<?php require_once "header.php" ?>

<div class="ui center aligned segment">
	<p
		style="
			margin-top: 25px;
			margin-bottom: 50px;
			font-weight: 800;
			font-family: 'Poppins', sans-serif;
			font-size: 250%;
			color: #274353;
		"
	>
		Emergency Doctor Number
	</p>
	<div class="ui  centered stackable  grid">
		<div class="six wide column">
			<div class="ui list">
				<div class="item">
					<p style="text-align: justify; margin-bottom: 40px;">
						 Health worker/ doctor who are interested to serve people in this pandemic situation. Please! Let us know by this form
					</p>

			</div>
		</div>
		<div class="two wide column"></div>
		<div class="six wide column">
			<form class="ui form">
				<div class="two fields">
					<div class="field">
						<input type="text" name="name" placeholder="Name" />
					</div>
					<div class="field">
						<input type="email" name="email" placeholder="Email" />
					</div>
				</div>

				<div class="field">
					<input type="text" name="last-name" placeholder="Subject" />
				</div>
				<div class="field">
					<input type="number" name="last-name" placeholder="Phone Number" />
				</div>
				<div class="field">
					<textarea name="message" rows="7" placeholder="Message"></textarea>
				</div>

				<button class="ui fluid button" type="submit">Submit</button>
			</form>
		</div>
	</div>
</div>

<?php require_once "footer.php" ?>
