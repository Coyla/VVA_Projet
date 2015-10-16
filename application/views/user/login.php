<div class="login_content">
	<div class="login_title">
		<h1>Titre de login</h1>
	</div>
	
	<div class="login_form">
		<?php echo validation_errors(); ?>
		<?php echo form_open(); ?>
		<label for="email"> Email </label>
		<input type="input" name="email">
		<label for="password">Password</label>
		<input type="text" name="password">
		<input type="submit" name="submit" value="Login">
		<?php echo form_close(); ?>
	</div>
	
</div>