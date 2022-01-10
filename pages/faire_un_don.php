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
	<title>Payer</title>
</head>
<body>
	
	<header>
		<?php 
			include("header_dons.php");
		?>
	</header>
	<main>
		
		<h1>Faire un don</h1>
		<form action="" method="POST">

			<input type="number" name="number">
			<input type="submit" name="submit">
			
		</form>

	</main>
</body>
</html>