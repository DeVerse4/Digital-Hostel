<?php

session_start();
include "../admin.php";
$collegeid = $_SESSION["id"];
$photo = $_REQUEST["photo"];
$photoTag = $_REQUEST["photo_tag"];
$photo = $_FILES["photo"]["tmp_name"];
$data = file_get_contents($photo);
$data = addslashes($data);
$x = uploadPhoto($collegeid, $data, $photoTag);
header("location:gallery.php?g=0");
?>