<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/Digital-Hostel/";
require_once($path . 'admin.php');
$connection = connect();
	
	$ReadSql = "SELECT * FROM `tblevents`";
	$res = mysqli_query($connection, $ReadSql);
	
	?>

<?php include ($path . 'events/templates/header.php') ?>
<div class="container-fluid my-4">
	<div class="row my-2">
		<h2>Event Management System - Events</h2>
		<a href="add.php"><button type="button" class="btn btn-primary ml-4 pl-2">Add New</button></a>
	</div>
	<table class="table ">
		<thead>
			<tr>
				<th>Event No.</th>
				<th>Name</th>
				<th>Category</th>
				<th>Start Date</th>
				<th>End Date</th>
				<th>Sponsored By</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php
			while ($r = mysqli_fetch_assoc($res)) {
			?>
				<tr>
					<th scope="row"><?php echo $r['id']; ?></th>
					<td><?php echo $r['name']; ?></td>
					<td><?php echo $r['category']; ?></td>
					<td><?php echo $r['start_date']; ?></td>
					<td><?php echo $r['end_date']; ?></td>
					<td><?php echo $r['sponsors']; ?></td>
					<td>
						<a href="update.php?id=<?php echo $r['id']; ?>"><button type="button" class="btn btn-info">Edit</button></a>

						<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal<?php echo $r['id']; ?>">Delete</button>

						<!-- Modal -->
						<div class="modal fade" id="myModal<?php echo $r['id']; ?>" role="dialog">
							<div class="modal-dialog">

								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title">Delete Job</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<p>Are you sure?</p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
										<a href="delete.php?id=<?php echo $r['id']; ?>"><button type="button" class="btn btn-danger"> Yes, Delete</button></a>
									</div>
								</div>

							</div>
						</div>

					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div>



<?php require($path . 'events/templates/footer.php') ?>