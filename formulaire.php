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
<form action="index.php" method="post">
	<header class="row">
		<div style="background-color: #ffa64d; color: white; font-size: 1.7em; font-weight: bold;" class="col-md-1 text-center">Up</div>
		<h1 style="color: #ffa64d;" class="col-md-11">Titre</h1>
	</header>
	<hr style="height:3 em;">
	
	<section class="row">
	<div class="col-md-6">
		Civilit&eacute;*
		<div class="form-check form-check-inline" style="padding-left:10%;">
		  <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Mme">
		  <label class="form-check-label" for="inlineRadio1">Mme</label>
		</div>
		<div class="form-check form-check-inline">
		  <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Mr" checked>
		  <label class="form-check-label" for="inlineRadio2">Mr</label>
		</div>
	</div>
	<div class="col-md-6"
	<p>Votre demande concerne: </p>
		<div class="form-check">
		  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
		  <label class="form-check-label" for="exampleRadios1">
		    Ch&egrave;que D&eacute;jeuner
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
		  <label class="form-check-label" for="exampleRadios2">
		    Cadhoc
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
		  <label class="form-check-label" for="exampleRadios1">
		    Ch&egrave;que Domicile
		  </label>
		</div>
	</section>
</form>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>