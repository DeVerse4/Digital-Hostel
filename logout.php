<?php
session_start();
session_destroy();
session_start();
$_SESSION['logout'] = "You are Logged out now 😥";
header('location:index.php?q=0');