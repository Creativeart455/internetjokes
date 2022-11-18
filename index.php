<?php
include __DIR__ . '/../../Includes/Controllers/jokesController.php';
$controller = new jokesController();
//if ( ! empty( $_POST ) ) {
//	$controller->store($_POST['text']);
//} else {
//	$route = $_GET['route'] ?? $_POST['route'] ?? '';
//	switch ( $route ) {
//		case 'create':
//			$controller->create();
//			break;
//		default:
//			$controller->index();
//			break;
//	}
//}
$action = $_GET['action']??'index';
//if($_POST['text']) {
//	die(var_dump( $_POST['text'] ));
//};
$controller->$action($_POST['text']??$_POST['id']??'');
