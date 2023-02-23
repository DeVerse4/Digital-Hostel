<?php
// require_once('../admin.php');
// include '../header.php';
include 'includes.php';
$connect = connect();
if (isset($_SESSION['eveReg'])) {
	$status = $_SESSION['eveReg'];
	echo "<script>alert('$status');</script>";
	unset($_SESSION['eveReg']);
}
?>
<div class="container">
	<div class="col-md-12 col-sm-12 col xs-12">
		<div class="sectiontitle">
			<h2 class="h1-responsive font-weight-bold text-center">Events</h2>
			<?php if ($mode == "admin") { ?>
			<div>
				<nav class="navbar d-flex justify-content-center" style="gap: 1rem;">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item active">
							<a class="nav-link active" data-toggle="tab" aria-current="page" href="#events">
								Events
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" aria-current="page" href="#createEvent">
								Create Event
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" aria-current="page" href="#createCategory">
								Create Category
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" aria-current="page" href="#registeredStudent">
								Registered Student
							</a>
						</li>
					</ul>
				</nav>
			</div>
			<?php } ?>
		</div>
	</div>
</div>


<div class="d-flex my-2">

	<?php // output success or failed message.
    if (isset($smsg)) { ?>
	<div class="alert alert-success" role="alert">
		<?php echo $smsg; ?>
	</div>
	<?php } ?>
	<?php if (isset($fmsg)) { ?>
	<div class="alert alert-danger" role="alert">
		<?php echo $fmsg; ?>
	</div>
	<?php } ?>
</div>

<div class="">
	<div class="tab-content">
		<div id="events" class="tab-pane fade-in active">
			<?php
            include 'templates/joinEvents.php';
            ?>

		</div>
		<div id="createEvent" class="tab-pane fade">
			<?php
            include 'components/event/add.php';
            ?>
		</div>
		<div id="createCategory" class="tab-pane fade">
			<?php
            include 'components/category/add.php';
            ?>
		</div>
		<div id="registeredStudent" class="tab-pane fade">
			<?php
            include 'templates/registeredStudent.php';
            ?>
		</div>
	</div>
</div>


<?php
include_once 'templates/modelEvent.php';
require('../footer.php') ?>