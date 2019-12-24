<?php // Файл для таблицы Новости в БД

include_once '../config/db.php';

function getLastProducts($limit = null)
{
	global $db;

	$sql = "SELECT * FROM `products` ORDER BY id DESC ";

	if ($limit) 
	{
		$sql .= " LIMIT {$limit}";
	}

	$rs = mysqli_query($db,$sql);

	return createSmartyRsArray($rs); 
}

 function getProductsByCat($itemId)
 {
 	global $db;

 	$itemId = intval($itemId);

 	$sql = "SELECT * FROM products WHERE category_id = '{$itemId}' ";

 	$rs = mysqli_query($db,$sql);

	return createSmartyRsArray($rs); 

 }

function getProductById($itemId)
{
	global $db;

	$itemId = intval($itemId); 

	$sql = "SELECT * FROM products WHERE id = '{$itemId}' ";

 
	$rs = mysqli_query($db,$sql);

	return mysqli_fetch_assoc($rs); 
}

function getProducts()
{
	global $db;

	$sql = "SELECT * FROM `products` ORDER BY category_id ";

 
	$rs = mysqli_query($db,$sql);

	return createSmartyRsArray($rs); 
}

function insertProduct($itemName, $itemDesc)
{
	global $db;

	$sql = "INSERT INTO products SET 
	`name` = '{$itemName}',
	`description` = '{$itemDesc}'";
	$rs = mysqli_query($db,$sql);

	return $rs; 
}

function updateProduct($itemId,$itemName,$itemDesc)
{
	global $db;

	$set = array();

	if ($itemName) 
	{
		$set[] = "`name` = '{$itemName}'";
	}

	if ($itemDesc) 
	{
		$set[] = "`description` = '{$itemDesc}'";
	}

	$setStr =  implode($set, ", ");
	$sql = "UPDATE products SET {$setStr} WHERE id = '{$itemId}'";
	//d($sql);
	$rs = mysqli_query($db,$sql);

	return $rs; 

}