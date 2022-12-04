<?php

include '../admin.php';
session_start();
include "mail.php";
if (isset($_POST['submit'])) {
  $name = $_REQUEST["name"];
  $collegeid = $_SESSION['id'];
  $room_no = $_REQUEST["room_no"];
  $phone_no = $_REQUEST['phone_no'];
  $destination = $_REQUEST["destination"];
  $purpose = $_REQUEST["purpose"];
  $out_date = $_REQUEST["outdate"];
  $return_date = $_REQUEST["returndate"];
  function generateRandomString()
  {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < 5; $i++) {
      $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
  }
  $passid = generateRandomString();
  $result = addPass($name, $collegeid, $room_no, $phone_no, $destination, $purpose, $out_date, $return_date, $passid);
  header("location:passform.php?pa=1");
}
?>