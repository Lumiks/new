<?php //Подключение к MySql и БД

$dblocation = "127.0.0.1";
$dbname= "news";
$dbuser = "root";
$dbpasswd = "";

$db = mysqli_connect($dblocation, $dbuser, $dbpasswd);// Соединение с БД

if(! $db)// Проверка на потключение к MySql
{
	echo "Ошибка доступа к MySql";
	exit();
}

//Устанавливаем кодировку по умолчанию для текущего соединения.
mysqli_set_charset($db, 'utf8');

if ( ! mysqli_select_db($db, $dbname)) {// Подключение к БД
	echo "Ошибка доступа к Базе данных: {$dbname}";
	exit();
}