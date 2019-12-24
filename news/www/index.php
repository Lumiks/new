<?php

session_start();

// Если нет массива то создаём его 
if (! isset($_SESSION['cart'])) {
	$_SESSION['cart'] = array();//Если массив существует то данная строка не выполнится 
}
include_once'../config/config.php';// Инициализация настроек 
include_once'../config/db.php';// Инициализация Базы данных
include_once'../library/mainFunctions.php';// Основные функции


// Определение с каким контроллером будем работать 
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

// Определение с каким Функцией будем работать 
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

$smarty->assign('cartCntItems', count($_SESSION['cart']));

loadPage($smarty, $controllerName, $actionName);


