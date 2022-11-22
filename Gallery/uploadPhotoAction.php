<?php

session_start();
$collegeid = $_SESSION["id"];
$photo = $_REQUEST["photo"];
$photoTag = $_REQUEST["photo_tag"];
include "../admin.php";
$x = uploadPhoto($collegeid, $photo, $photoTag);
header("location:gallery.php?g=0");
?>
