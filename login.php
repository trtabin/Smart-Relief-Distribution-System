<?php require_once "header.php" ?>

<div class="ui segment">
	<form class="ui form" action="loginData.php" method="post">
		<div class="field">
			<label>E-mail</label>
			<input type="email" name="email" placeholder="E-mail address" />
		</div>
		<div class="field">
			<label>Password</label>
			<input type="password" name="password" placeholder="Password" />
		</div>
		<div class="field">
			<div class="ui checkbox">
				<input type="checkbox" tabindex="0" />
				<label>Keep me logged in</label>
			</div>
		</div>
		<button class="ui button" type="submit">Submit</button>
	</form>
</div>
<?php require_once "footer.php" ?>
