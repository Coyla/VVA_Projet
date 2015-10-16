
<div class="inscription_content">
	<div class="inscription_title">
		<h2> Inscription</h2>
	</div>
	<div class="inscription_form">

	<?php echo validation_errors(); ?>
	<?php echo form_open('user/inscription'); ?>
	<label for="email"> Adresse Mail</label>
	<input type="input" name="email"><br/>
	<label for="name"> Nom d'utilisateur </label>
	<input type="input" name="name"><br/>
	<label for="first_name"> Prénom </label>
	<input type="input" name="first_name"><br/>
	<label for="password"> Mot de passe </label>
	<input type="password" name="password"><br/>
	<input type="submit" name="submit" value="Créer un compte">
	</form>

	</div>
</div>