<?php namespace controller;

include_once('../common/view.php');
include_once('../entity/intervention.php');
include_once('../dao/factory.php');


use common\View;
use entity\Intervention;
use dao\Factory;

// vérifier si la méthode est GET 
// et appeler la méthode en fonction de l'action
if(isset($_GET['action']))
{	
	$action = $_GET['action'];
	MenuController::$action($_GET);
}

// vérifier si la méthode est POST 
// et appeler la méthode en fonction de l'action
if(isset($_POST['action']))
{
	$action = $_POST['action'];
	MenuController::$action($_POST);
}

class MenuController
{

	public static function show()
	{
		header('Location:/airblio_SIA/view/menu.php');
	}
}

 ?>