<?php 
	
	Paydunya_Setup::setMasterKey("DMomyppW-SEaA-VQYK-gZ38-YGFFCvgbiaXS");
	Paydunya_Setup::setPublicKey("test_public_FG9RzlwfxkuNEmd7kSXKKk3aEdc");
	Paydunya_Setup::setPrivateKey("test_private_BiLcdgE3GQGbu3dG2lPWtE674JA");
	Paydunya_Setup::setToken("uyTnms0ccgndLZQBcGT8");
	Paydunya_Setup::setMode("test"); // Optionnel en mode test. Utilisez cette option pour les paiements tests.
// ------
  //Configuration des informations de votre service/entreprise
Paydunya_Checkout_Store::setName("Association Charité et Bienfaisance Pour la Promotion des Non-voyants"); // Seul le nom est requis
Paydunya_Checkout_Store::setTagline("L'élégance n'a pas de prix");
Paydunya_Checkout_Store::setPhoneNumber("336530583");
Paydunya_Checkout_Store::setPostalAddress("Dakar Plateau - Etablissement kheweul");
Paydunya_Checkout_Store::setWebsiteUrl("http://www.chez-sandra.sn");
Paydunya_Checkout_Store::setLogoUrl("http://www.chez-sandra.sn/logo.png");

// -------------
Paydunya_Checkout_Store::setCallbackUrl("http://localhost/AssociationCharite/pages/liste_des_dons.php");

?>