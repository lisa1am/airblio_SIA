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
	InterventionController::$action($_GET);
}

// vérifier si la méthode est POST 
// et appeler la méthode en fonction de l'action
if(isset($_POST['action']))
{
	$action = $_POST['action'];
	InterventionController::$action($_POST);
}

class InterventionController
{

	public static function create($req)
	{	

		// récupérer les paramètres de la requête
		$client = $req['client'];
		$site_intervention_id = $req['site_intervention_id'];

		// instantancier les objects Factory et Intervention
		$inter = new Intervention();
		$facto = new Factory();
		// initialiser les propriétés de intervention
		$inter->set_client($client);
		$inter->set_site_intervention_id($site_intervention_id);

		// ajouter l'intervention dans la base
		$facto->create($inter);

		// rediriger vers la liste de intervention
		header('Location:/airblio_SIA/controller/intervention.php?action=search');
	}


	public static function update($req)
	{

	}

	public static function delete($req)
	{

	}

	public static function search($req)
	{
		$inter = new Intervention();
		$facto = new Factory();
		$list = serialize($facto->search($inter, ""));var_dump($list);
		View::show('intervention_search', array('data' => urlencode($list)));
	}
}

 ?>