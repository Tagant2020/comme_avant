<?php
if(isset($_POST)){
	include_once('../bigModelForMe.php'); // mon modele contenant les methodes pour mes requetes vers la bd

	$json_file;// le fichier json à inserer
	$json_file = json_decode($json_file, true); // conversion du fichier json vers un tableau php
	
	foreach($json_file as $key=>$val){
		$manager->insertion('personne',$val,'');
	}
 }
?>