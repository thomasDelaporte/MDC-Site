<?php

	include('./Modele/Modele.php');
	
	function listPhotos(){
		return getListPhotos();
	}
	
	function listEvenements(){
		return getListEvenements();
	}
	
	function listMembres(){
		return getListMembres();
	}
	
	function addContact(){
		
		if(!empty($_POST)){
			
			$file_url = "";
			
			//UPLOAD FILES
			if($_FILES['fichier'] && $_FILES['fichier']['error'] == 0){
				$ext_valid = array('pdf', 'png', 'jpg', 'gif', 'rar', 'zip');
				
				$ext = explode('.'
				, $_FILES['fichier']['name'])[1];	
				if(in_array($ext, $ext_valid)){
					
					
					$name = './Public/file/'. uniqid() .'-'. $_FILES['fichier']['name'];
					$resultat = move_uploaded_file($_FILES['fichier']['tmp_name'], $name);
					
					if($resultat){
						$file_url = $name;
					}
				}
			}
			
			addContactData(array(
				$_POST['name'], $_POST['mail'], $_POST['phone'], $_POST['type'], $_POST['content'], $file_url)
			);
			$_POST = [];
		}
	}