<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/Digital-Hostel/";
require_once($path . 'admin.php');
$connection = connect();


if (isset($_POST) & !empty($_POST)) {
    $name = ($_POST['name']);
    $desc = ($_POST['description']);

    // Execute query
    $query = "INSERT INTO `tblcategories` (name, description) 
		VALUES ('$name', '$desc')";
    $res = mysqli_query($connection, $query);
    if ($res) {
        // header('location: view.php');
        echo '<script> location.replace("components/category/view.php"); </script>';
    } else {
        $fmsg = "Failed to Insert data.";
        print_r($res);
    }
}
// include ($path . 'events/templates/header.php'); 
?>

<div class="container">
    <?php if (isset($fmsg)) { ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
    <h2 class="my-4">Add New Category</h2>
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Name</label>
            <input type="text" id="id" class="form-control" name="name" value="" required />
        </div>
        <div class="form-group">
            <label>Description</label>
            <input type="text" id="id" class="form-control" name="description" value="" />
        </div>
        <input type="submit" class="btn btn-primary" value="Add Category" />
    </form>
</div>