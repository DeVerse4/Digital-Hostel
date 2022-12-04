<?php
include "../admin.php";
include "../header.php";
if (!isset($_SESSION)) {
    session_start();
}
$id = $_POST['collegeid'];
echo "$id";
if (isset($_SESSION['id'])) {
    $username = $_SESSION['id'];
    echo $username;
    $dsa = connect();
    $query = "SELECT * FROM `passgeneration` WHERE status='inactive'";

}
include "../footer.php";

?>