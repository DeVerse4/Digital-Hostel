<?php 
	include "inc/header.php"; 
	include "classes/Student.php"; 
	$stu = new Student();
?>
<?php 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$name = $_POST['name'];
		$room = $_POST['room'];
		$insertdata = $stu->insertStudent($name, $room);
	}
?>

	<div class="container">
<?php
	if (isset($insertdata)) {
		echo $insertdata;
	}
?>
		<div class="card">
			<div class="card-header">
				<h2>
					<a class="btn btn-success" href="add.php">Add Student</a>
					<a class="btn btn-info float-right" href="index.php">Back</a>
				</h2>
			</div>

			<div class="card-body">
				<form action="" method="post">
					<div class="form-group">
						<label for="name">Student Name</label>
						<input type="text" class="form-control" name="name" id="name" required="">
					</div>

					<div class="form-group">
						<label for="room">Student Room No</label>
						<input type="text" class="form-control" name="room" id="room" required="">
					</div>

					<div class="form-group text-center">
						<input type="submit" name="submit" class="btn btn-primary px-5" id="room" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>
<?php include("inc/footer.php"); ?>