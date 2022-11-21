<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/events/";

require_once($path . 'connect.php');

// Initialize the session
session_start();

if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['role'] == 'admin')) {
	echo "Unauthorized Access";
	return;
}

$id = $_GET['id'];

$SelSql = "SELECT * FROM `events` WHERE id=$id";
$res = mysqli_query($connection, $SelSql);
$r = mysqli_fetch_assoc($res);


if (isset($_POST) & !empty($_POST)) {
	$name = ($_POST['name']);
	$description = ($_POST['description']);
	$category = ($_POST['category']);
	$start_date = ($_POST['start_date']);
	$end_date = ($_POST['end_date']);
	$sponsors = ($_POST['sponsors']);


	// Execute query
	$query = "UPDATE `events` SET name='$name', description='$description', category='$category', start_date='$start_date', end_date='$end_date', sponsors='$sponsors' WHERE id='$id'";

	$res = mysqli_query($connection, $query); // get result
	if ($res) {
		header('location: view.php');
	} else {
		$fmsg = "Failed to Insert data.";
		// print_r($res);
	}
}
?>

<?php require_once($path . 'templates/header.php') ?>

<div class="container">
	<?php if (isset($fmsg)) { ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
	
	<h2 class="my-4">Update Event</h2>
	<form method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label>Name</label>
			<input type="text" class="form-control" name="name" value="<?php echo $r['name']; ?>" required />
		</div>
		<div class="form-group">
			<label>New description</label>
			<input type="text" class="form-control" name="description" value="<?php echo $r['description']; ?>" required />
		</div>
		<div class="form-group">
			<label>Category</label>
			<select name="category">
				<?php
				$getCategories = "SELECT * FROM `categories`";
				$res = mysqli_query($connection, $getCategories);
				while ($r = mysqli_fetch_assoc($res)) { ?>
					<option value="<?= $r['name'] ?>"><?= $r['name'] ?></option>
				<?php } ?>
			</select>
		</div>
		<div class="form-group">
			<label>Sponsors</label>
			<input type="text" class="form-control" name="sponsors" value="<?php echo $r['sponsors']; ?>" />
		</div>
		<div class="form-group">
			<label>Start Date</label>
			<input type="date" class="form-control" name="start_date" value="<?php echo $r['start_date']; ?>" />
		</div>
		<div class="form-group">
			<label>End Date</label>
			<input type="date" class="form-control" name="end_date" value="<?php echo $r['end_date']; ?>" />
		</div>

		<input type="submit" class="btn btn-primary" value="Update" />
	</form>
</div>

<?php require_once($path . 'templates/footer.php') ?>