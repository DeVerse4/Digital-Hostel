<?php
session_start();
include "admin.php";
$title = $_REQUEST["title"];
$description = $_REQUEST["description"];
$notice = $_REQUEST["noticePhoto"];
$notice = $_FILES["noticePhoto"]["tmp_name"];
$data = file_get_contents($notice);
$noticephoto = addslashes($data);
$x = uploadNotice($title, $description, $noticephoto);
header("location:notices.php");
?>