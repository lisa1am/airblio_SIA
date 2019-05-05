<?php 
//$start_view = 'intervention_search';
$start_view = 'menu_show';
$view = (isset($_GET['view'])) ? $_GET['view'] : "";
if(!empty($view)){
	$controller = explode("_", $view)[0];
	$action = explode("_", $view)[1];
    header('Location:/airblio_SIA/controller/'.$controller.'.php?action='.$action);
} else {
	$controller = explode("_", $start_view)[0];
	$action = explode("_", $start_view)[1];
    header('Location:/airblio_SIA/controller/'.$controller.'.php?action='.$action);
}

?>