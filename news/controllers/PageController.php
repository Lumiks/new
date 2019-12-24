<?php //Контроллер страницы

// Подключение модули 
include_once '../models/NewsModel.php';

function indexAction($smarty){	
	$itemId = isset($_GET['id']) ? $_GET['id'] : null;
	if ( ! $itemId) exit();

	$rsInfo = getNewsById ($itemId);//Данные 

		$smarty->assign('pageTitle', '');
    	$smarty->assign('rsInfo', $rsInfo);

    	loadTemplate($smarty, 'header');
    	loadTemplate($smarty, 'page');
   		loadTemplate($smarty, 'footer');
}
