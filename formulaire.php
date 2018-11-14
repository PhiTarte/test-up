<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Formulaire</title>
<style type="text/css">
	h1, h2 { color: #ffa64d;}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="container" style="width:1920; height:1325;">
<form action="#" method="post">
	<header class="row">
		<div style="background-color: #ffa64d; color: white; font-size: 1.7em; font-weight: bold;" class="col-md-1 text-center">Up</div>
		<h1 style="color: #ffa64d;" class="col-md-11">Titre</h1>
	</header>
	<hr style="height:3 em;">
	
	<section class="row">
	<div class="col-md-6">
		<div class="form-group">
			<label class="col-sm-2 col-form-label">Civilit&eacute;*</label>
			<div class="form-check form-check-inline" style="padding-left:10%;">
			  <input class="form-check-input" type="radio" name="gender" id="inlineRadioMme" value="Mme">
			  <label class="form-check-label" for="inlineRadio1">Mme</label>
			</div>
			<div class="form-check form-check-inline">
			  <input class="form-check-input" type="radio" name="gender" id="inlineRadioMr" value="Mr" checked>
			  <label class="form-check-label" for="inlineRadio2">Mr</label>
			</div>
		</div>
		<div class="form-group row">
		    <label for="firstName" class="col-sm-4 col-form-label">Pr&eacute;nom</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control-plaintext" id="firstName" name="firstName" value="<?php if(isset($_POST['firstName'])) { echo $_POST['firstName'];};?>">
		    </div>
		</div>
		<div class="form-group row">
		    <label for="name" class="col-sm-4 col-form-label">Nom</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control-plaintext" id="name" name="name" value="<?php if(isset($_POST['name'])) { echo $_POST['name'];};?>">
		    </div>
		</div>
		<div class="form-group row">
		    <label for="postalCode" class="col-sm-4 col-form-label">Code postal</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control-plaintext" id="postalCode" name="postalCode" value="<?php if(isset($_POST['postalCode'])) { echo $_POST['postalCode'];};?>">
		    </div>
		</div>
		<div class="form-group row">
		    <label for="town" class="col-sm-4 col-form-label">Ville</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control-plaintext" id="town" name="town" value="<?php if(isset($_POST['town'])) { echo $_POST['town'];};?>">
		    </div>
		</div>
		<div class="form-group row">
		    <label for="social" class="col-sm-4 col-form-label">Raison sociale</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control-plaintext" id="social" name="social" value="<?php if(isset($_POST['social'])) { echo $_POST['social'];};?>">
		    </div>
		</div>
		<div class="form-group row">
		    <label for="tel" class="col-sm-4 col-form-label">T&eacute;l&eacute;phone</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control-plaintext" id="tel" name="tel" value="<?php if(isset($_POST['tel'])) { echo $_POST['tel'];};?>">
		    </div>
		</div>
	</div>
	<div class="col-md-6" style="position: relative; height:100px;">
	<p>Votre demande concerne: </p>
		<div class="form-check">
		  <input class="form-check-input" type="radio" name="dej" id="dej" value="dej" checked>
		  <img src="up.png" style="height:10px;">
		  <label class="form-check-label" for="dej">
		    Ch&egrave;que D&eacute;jeuner
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input" type="radio" name="cad" id="cad" value="cad">
		  <img src="up.png" style="height:10px;">
		  <label class="form-check-label" for="cad">
		    Cadhoc
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input" type="radio" name="dom" id="dom" value="dom">
		  <img src="up.png" style="height:10px;">
		  <label class="form-check-label" for="dom">
		    Ch&egrave;que Domicile
		  </label>
		</div>
		<div class="row" style="margin-top:70%;">
			<input type="submit" value="           ETRE RECONTACTE" style="background-image: url('arrow.png');background-repeat: no-repeat;height:3.7em;">
			</input>
		</div>
	</div>
	</section>
	<section>
		<?php
			$message="";
			if (isset($_POST["gender"])) {
				$message = $_POST["gender"]." ".$_POST['firstName']." ".$_POST['name']." habite ".$_POST['town']." (".$_POST['postalCode']." ) "." raison sociale: ".$_POST['social']." telephone: ".$_POST['tel'];
			echo htmlentities($message); 	
			}
		?>
	</section>
</form>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>