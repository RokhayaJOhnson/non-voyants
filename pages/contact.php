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
			<label>Nom</label> <br><br>
			<input type="text" name="name"> <br>
			<label>Prenom</label> <br><br>
			<input type="text" name="first_name"> <br>
			<label>Votre email*</label> <br>
			<input type="email" name="mail" required> <br><br>
			<label>Votre Message</label> <br>
			<textarea name="message"> </textarea> <br><br>
			<input type="submit" name="send" value="Envoyer">
		</form>

	</main>

	<?php include("footer.php"); 

		if (isset($_GET['send'])) {
			
			$monmail = "rokhayajo@gmail.com";
			$from  = "Mail envoyé depuis ".$_GET['mail'];
			$message = $_GET['message'];

			mail($monmail, $from, $message);
		}
	?>

</body>
</html>
