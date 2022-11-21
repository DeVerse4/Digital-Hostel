<?php

    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $subject = $_REQUEST["subject"];
    $message = $_REQUEST["message"];
    include_once 'admin.php';

    $x = addMessage($name, $email, $subject, $message);
    header("location:index.php?c=1");