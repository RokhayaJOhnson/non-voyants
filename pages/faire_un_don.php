<?php 
	require("../LIBS/paydunya-php-master/paydunya.php");
	require("config_dons.php");
	$invoice = new Paydunya_Checkout_Invoice();
	$somme = 0;
	
	
	if (isset($_POST['submit'])) {

		$number = $_POST['number'];

		$invoice->addItem("Faire un don", 1, $number, $number, "Vous allez faire un don");

		$invoice->setTotalAmount($number);

		if($invoice->create()) {

    	header("Location: ".$invoice->getInvoiceUrl());

		}else{
		    echo $invoice->response_text;
		}
		
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Faire un don</title>
	<link rel="stylesheet" type="text/css" href="../styles/don.css">
</head>
<body>
	
	<header>
		<?php 
			include("header_dons.php");
		?>
	</header>
	<main>
		
		<h1>Vous allez faire un don (minimum 200 francs CFA)</h1> <br>
		<h2>Mettez le montant à donner </h2> <br>

		<form action="" method="POST">

			<input type="number" name="number"> <br> <br>

			<input type="submit" name="submit" value="Faire un don" class="bouton_don">
			
		</form>

	</main>
</body>
</html>