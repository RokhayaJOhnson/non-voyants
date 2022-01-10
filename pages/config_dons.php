<?php 
	
	Paydunya_Setup::setMasterKey("DMomyppW-SEaA-VQYK-gZ38-YGFFCvgbiaXS");
	Paydunya_Setup::setPublicKey("live_public_akNyfXNHNZZArbZ1TZsI4ppuYrI");
	Paydunya_Setup::setPrivateKey("live_private_zK0X7Cy6dSkMzk1RCAuyfNysICl");
	Paydunya_Setup::setToken("9M0TwVy1hiUj321T3QeD");
	Paydunya_Setup::setMode("live"); // Optionnel en mode test. Utilisez cette option pour les paiements tests.
// ------
  //Configuration des informations de votre service/entreprise
Paydunya_Checkout_Store::setName("Association Charité et Bienfaisance Pour la Promotion des Non-voyants"); // Seul le nom est requis
Paydunya_Checkout_Store::setTagline("Aidez-nous à aider");
Paydunya_Checkout_Store::setPhoneNumber("776315258");
// Paydunya_Checkout_Store::setPostalAddress("Dakar Plateau - Etablissement kheweul");
// Paydunya_Checkout_Store::setWebsiteUrl("http://www.chez-sandra.sn");
// Paydunya_Checkout_Store::setLogoUrl("http://www.chez-sandra.sn/logo.png");

// -------------
// Paydunya_Checkout_Store::setCallbackUrl("http://localhost/AssociationCharite/pages/liste_des_dons.php");

?>