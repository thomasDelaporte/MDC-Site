
		<?php include('./Vue/header.php'); ?>
	
		<?php
			error_reporting(E_ALL | E_STRICT);
		
			// On définit le tableau contenant les pages autorisées
			$pageOK = array (
				'p1' => 'planning',
				'p2' => 'musculation',
				'p3' => 'esport',
				'p4' => 'sport'
			);
			
			include('./Controleur/Controleur.php');
			if(isset($_GET['page'])){
				
				if(isset($pageOK[$_GET['page']])){
					
					$type = ucfirst($pageOK[$_GET['page']]);
					$vue_url = "./Vue/" . $type . '.php';
					
					if(file_exists($vue_url)){
						include($vue_url);
					}
				}
			} else {

				include('./Vue/index.php');
			}
			
		?>
		
		<?php include('./Vue/footer.php'); ?>
