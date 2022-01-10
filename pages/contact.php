<!DOCTYPE html>
<html>
<head>
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
			<input type="submit" name="send" value="Envoyer">
		</form>

	</main>
	<?php include("footer.php"); ?>

</body>
</html>