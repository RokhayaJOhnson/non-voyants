<?php 
	
	include ("../pages/config.php");

	$fileChoosed = $_GET['fileChoosed'];

	class Openfolder
	{
		
		function folderToOpen($filePath, $fileChoosed)
		{

			if (is_dir($filePath)) {
				
				if ($handle = opendir($filePath)) {
					
					while (false !== ($entry = readdir($handle))) {
						
						if (($entry != '.') && ($entry != '..') && ($entry === $fileChoosed)) {
							
							$tableDirectory[] = $entry;

							foreach ($tableDirectory as $key => $value) {
							
								$file = PDF_GENERAL_PATH.$value;

								header("Content-Type: application/pdf");
	  
								readfile($file);
							}
						}
					}
					
				}
				closedir($handle);
			}
		}
	}

	$openFolder = New Openfolder();
	$foldersToOpen = $openFolder->folderToOpen(PDF_GENERAL_PATH, $fileChoosed);

?>
