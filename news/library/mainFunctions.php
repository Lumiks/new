<?php //Это фаел Основные Функции

/**
*Загрузка запрашиваемой страницы
*
* $controllerName Название кантроллера
* $actionName Название функции обработки страницы
**/
function loadPage($smarty, $controllerName, $actionName = 'index')
{
	include_once PathPrefix . $controllerName . PathPostfix;
    $function = $actionName . 'Action';
    $function($smarty);
}
/**
*Загрузка шаблона 
*
*$smarty обект шаблонизатора
*$templateName название файла шаблона
**/
function loadTemplate($smarty, $templateName)
{
    $smarty->display($templateName . TemplatePostfix);
}

/**
 * Функция отладки. Останавливает работу програамы выводя значение переменной
 * 
 * переменная для вывода ее на страницу 
 **/
function d($value = null, $die = 1)// остановка сайта если die = 1
{
    echo 'Debug: <br /><pre>';//изучение переменной 
    print_r($value);
    echo '</pre>';
    
    if($die) die;
}

function createSmartyRsArray($rs) //Преобразование результата работ функции выборки в ассоцифтивный массив 
{
	global $db;

	if (! $rs) return false;

	$smartyRs = array();
	while ($row = mysqli_fetch_assoc($rs)) {
		$smartyRs[] = $row;
	}
   return $smartyRs;
}














