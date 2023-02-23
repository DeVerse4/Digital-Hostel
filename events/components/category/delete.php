<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/Digital-Hostel/";

require_once($path . 'admin.php');
$connection = connect();
$id = $_GET['id'];
$DelSql = "DELETE FROM `tblcategories` WHERE id=$id";
$res = mysqli_query($connection, $DelSql);
if($res){
	header('location: view.php');
}else{
	echo "Failed to delete";
}
?>