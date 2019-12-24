<?php 

include_once '../config/db.php';


function getNewsLast($limit = null)
{
	global $db;

	$sql = "SELECT *FROM `news`  ORDER BY `id` DESC ";
	
	if ($limit) {
	
		$sql .= " LIMIT {$limit}";
	}
		

	$rs = mysqli_query($db,$sql);
	
	return createSmartyRsArray($rs); 
}

function getNewsById($itemId)
{
	$itemId = intval($itemId);
	$sql = "SELECT * FROM `news`  WHERE id = '{$itemId}'";
	$rs = mysqli_query($db,$sql);
	return createSmartyRsArray($rs); 
}