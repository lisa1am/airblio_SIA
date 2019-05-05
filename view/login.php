<?php
// Démarrage de la session
session_start();

// On vérifie si le champ Login n'est pas vide.
if ($_SESSION['Login']==''||$_SESSION["Password"]==' '){
	//le placer dans la vraie page 
	
 Header('Location:connexion.php?erreur=2');   
 }else{
	try{
		$DataBase = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
	}catch (Exception $e){
        	die('Erreur : ' . $e->getMessage());
	}

	$req= $DataBase->prepare('SELECT nom, password FROM Responsable_technique where nom = ? and password = ?');
	$req->execute(array($_SESSION['Login'],$_SESSION['Password']));
	$rows=$req->fetchAll();
		if (count($rows)==0){
			//reste sur la page de connexion
			
			HEADER("Location:connexion.php?erreur=1");
					
		}else{
			// redirige vers l'acceuil
			HEADER("Location:menu2.html");
	}
}
?>
