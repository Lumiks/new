<?php 

// Подключение модули 
include_once '../models/NewsModel.php';

function indexAction($smarty){	
	$rsInfo = getNewsLast(16);


		$smarty->assign('pageTitle', 'Новостная страница сайта');
    	$smarty->assign('rsInfo', $rsInfo);

    	loadTemplate($smarty, 'header');
    	loadTemplate($smarty, 'News');
   		loadTemplate($smarty, 'footer');

}
