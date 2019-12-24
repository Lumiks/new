<?php // Редактирование

// Подключение модули 
include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';


$smarty->setTemplateDir(TemplateAdminPrefix);
$smarty->assign('teplateWebPath', TemplateAdminWebPath);



function indexAction($smarty)
{

	$rsProducts  = getProducts();

	$smarty->assign('rsCategories', $rsCategories);
	$smarty->assign('rsProducts', $rsProducts);

	$smarty->assign('pageTitle', 'Управление новостью');


	loadTemplate($smarty, 'adminHeader');
    loadTemplate($smarty, 'adminProducts');
    loadTemplate($smarty, 'adminFooter');
}


function addproductAction()
{
	$itemName = $_POST['itemName'];
	$itemDesc = $_POST['itemDesc'];

	$res = insertProduct($itemName,  $itemDesc);

	if ($res) 
	{
		$resData['success'] = 1;
		$resData['message'] = 'Изменения успешно внесены';
	}

	else
	{
		$resData['success'] = 0;
		$resData['message'] = 'Ошибка изменения данных';
	}

	echo json_encode($resData);
	return;
}

function updateproductAction()
{ 
	$itemId = $_POST['itemId'];
	$itemName = $_POST['itemName'];
	$itemDesc = $_POST['itemDesc'];

	$res = updateProduct($itemId,$itemName, $itemDesc);

	if ($res) 
	{
		$resData['success'] = 1;
		$resData['message'] = 'Изменения успешно внесены';
	}

	else
	{
		$resData['success'] = 0;
		$resData['message'] = 'Ошибка изменения данных';
	}

	echo json_encode($resData);
	return;
}


