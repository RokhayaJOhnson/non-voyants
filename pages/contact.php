<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact</title>
</head>
<body>

	<header>

		<?php include("header.php"); ?>
		
	</header>
	<main>
		
		<form>
			<label>Nom</label> <input type="text" name="name"> <br>
			<label>Prenom</label> <input type="text" name="first_name"> <br>
			<label>Votre Message</label> <br>
			<textarea> J'aimerai en savoir plus sur votre fondation </textarea> <br>
			<input type="submit" name="send" value="Envoyer">
		</form>

	</main>

	<?php include("footer.php"); ?>

</body>
</html>
