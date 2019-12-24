<?php // Этот файл отвечает за таблицу  категории в PhpMyAdmin

include_once '../config/db.php';


function getCatById($catId) // Данные категории по ID
{
	global $db;
	$catId = intval($catId);
	$sql =  "SELECT * FROM category WHERE id = '{$catId}' ";
	$rs = mysqli_query($db,$sql);
	return mysqli_fetch_assoc($rs);
}