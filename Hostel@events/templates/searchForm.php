<?php
// Include config file
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/events/";
require_once($path . 'connect.php');

// Initialize the session
session_start();

if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)) {
    $url = 'http://' . $_SERVER['HTTP_HOST']; // Get server
    $url .= "/events/components/user/login.php";
    header('Location: ' . $url, TRUE, 302);
}

?>
<?php require($path . 'templates/header.php') ?>
<div class="d-flex mt-4 mx-4">
    <h3>Search Results: </h3>
    <div class="row mt-4 pt-4 justify-content-between">
        <?php
        if (!empty($_REQUEST['term'])) {

            $term = mysqli_real_escape_string($connection, $_REQUEST['term']);

            $sql = "SELECT * FROM events WHERE name LIKE '%" . $term . "%'";
            $r_query = mysqli_query($connection, $sql);

            while ($r = mysqli_fetch_array($r_query)) {
                include($path . 'templates/event.php');
            }
        }
        ?>
    </div>
</div>

<?php require($path . 'templates/footer.php') ?>