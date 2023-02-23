<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/Digital-Hostel/";
ob_start();
require_once($path . 'admin.php');
$connection = connect();

if (isset($_POST) & !empty($_POST)) {
	$name = ($_POST['name']);
	$detail = ($_POST['description']);
	$category = ($_POST['category']);
	$sponsor = ($_POST['sponsor']);
	$start_date = ($_POST['start_date']);
	$end_date = ($_POST['end_date']);

	$query = "INSERT INTO `tblevents` (name, description, category, sponsors, start_date, end_date) 
		VALUES ('$name', '$detail', '$category', '$sponsor', '$start_date', '$end_date')";
	$res = mysqli_query($connection, $query);
	if ($res) {
		header('location: view.php');
	} else {
		$fmsg = "Failed to Insert data.";
		print_r($res);
	}
}
?>


<div class="container">
	<?php if (isset($fmsg)) { ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
	<h2 class="my-4">Add New Event</h2>
	<form method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label>Name</label>
			<input type="text" class="form-control" name="name" value="" required />
		</div>
		<div class="form-group">
			<label>Description</label>
			<input type="text" class="form-control" name="description" value="" required />
		</div>
		<div class="form-group">
			<label>Category: </label>
			<select name="category" class="form-control">
				<option value="">-- Select category --</option>
				<?php
				$getCategories = "SELECT * FROM `tblcategories`";
				$res = mysqli_query($connection, $getCategories);
				while ($r = mysqli_fetch_assoc($res)) { ?>
					<option value="<?= $r['name'] ?>"><?= $r['name'] ?></option>
				<?php } ?>
			</select>
		</div>
		<div class="form-group">
			<label>Sponsor</label>
			<input type="text" class="form-control" name="sponsor" value="" />
		</div>
		<div class="form-group">
			<label>Start Date</label>
			<input type="date" class="form-control" name="start_date" value="" />
		</div>
		<div class="form-group">
			<label>End Date</label>
			<input type="date" class="form-control" name="end_date" value="" />
		</div>
		<input type="submit" class="btn btn-primary" value="Add Event" />
	</form>
</div>
