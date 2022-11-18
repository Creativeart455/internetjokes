<?php
include __DIR__ . '/../../Includes/Controllers/jokesController.php';
function loadTemplate($template,$variables){
	extract($variables);
	ob_start();
	include __DIR__ . '/../../Templates/' . $template;
	return ob_get_clean();
}


$controller = new jokesController();
$action = $_GET['action']??'index';

$page = $controller->$action();
$dynamic = loadTemplate($page['template'],$page['variables']);
include __DIR__."/../../Templates/index.html.php";
/*
 * result = ectract
 * foreach result
 * extract
 *
 * */
