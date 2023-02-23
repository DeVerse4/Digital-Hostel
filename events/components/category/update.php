<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/digital-Hostel/";

require_once($path . 'admin.php');
$connection = connect();

$id = $_GET['id'];

$SelSql = "SELECT * FROM `tblcategories` WHERE id=$id";
$res = mysqli_query($connection, $SelSql);
$r = mysqli_fetch_assoc($res);


if(isset($_POST) & !empty($_POST)){
	$name = ($_POST['name']);
	$description = ($_POST['description']);


    // Execute query
	$query = "UPDATE `tblcategories` SET name='$name', description='$description' WHERE id='$id'";
	
	$res = mysqli_query($connection, $query); // get result
	if($res){
		header('location: view.php');
	}else{
		$fmsg = "Failed to Insert data.";
		print_r($res);
	}
}
?>

<?php require_once($path . 'events/templates/header.php') ?>

	<div class="container">
	<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
		<h2 class="my-4">Update Category</h2>
		<form method="post" enctype="multipart/form-data">
			<div class="form-group">
                <label>Name</label>
				<input type="text" class="form-control" name="name" value="<?php echo $r['name'];?>" required/>
            </div> 
            <div class="form-group">
                <label>New description</label>
				<input type="text" class="form-control" name="description" value="<?php echo $r['description'];?>" required/>
            </div> 

			<input type="submit" class="btn btn-primary" value="Update" />
		</form>
	</div>
	
<?php require_once($path . 'events/templates/footer.php') ?>