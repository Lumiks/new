<?php // Это файл Контроллера главной страницы

// Подключение модели 
include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';


function testAction(){
	echo 'IndexController.php > testAction';
}

// Формирование главной страница сайта
function indexAction($smarty){
	
    $rsProducts = getLastProducts(16);


    $smarty->assign('pageTitle', 'Главная страница сайта');
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsProducts', $rsProducts);
 
	loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}
