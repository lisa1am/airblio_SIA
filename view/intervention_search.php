<h2>Liste des interventions</h2>
<a href="/airblio_SIA/view/intervention_create.php">Ajouter</a><br><hr>
<?php 
include_once('../entity/intervention.php');

if(isset($_GET['data']))
{
	// déencoder l'url
	$data = urldecode(($_GET['data']));
	$data = unserialize($data);
	foreach ($data as $key => $value) 
	{
		?>
			<a href="/airblio_SIA/controller/intervention.php?action=read&intervention_id=<?=$value->get_intervention_id()?>">Intervention numero <?=$value->get_intervention_id()?></a><br>
		<?php
	}
}

?>