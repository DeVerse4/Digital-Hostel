<?php
include "../header.php";
$id = $_SESSION['id'];
if (isset($_GET['pr'])) {
    include 'pendingRequest.php?passid=' . $_GET['pr'];
}
?>


<div class="form-container" style='background: #f1f2f6'>
    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="page-title">
                <h1 class="h2-responsive font-weight">Pass Generation Form</h1>
            </div>
        </div>
    </div>
    <div class="reg-form">
        <form class="form-signin" action="pass_submit.php" method="post">
            <div class="form-section ">
                <div class="form-elements">
                    <label for="inputEmail" class="input-label">Name</label>
                    <input type="text" id="inputEmail" name="name" class="form-control" value='<?php echo $name; ?>'
                        placeholder="Name" required disabled>
                </div>
                <div class="form-elements">
                    <label for="collegeID" class="input-label">College ID</label>
                    <input type="text" id="inputcollegeid" name="collegeid" class="form-control"
                        value="<?php echo $id; ?>" required disabled>
                </div>
                <div class="form-elements">
                    <label for="inputName" class="input-label">Room No</label>
                    <input type="text" id="inputName" name="room_no" class="form-control" placeholder="Room Number"
                        required autofocus>
                </div>
                <div class="form-elements">
                    <label for="inputName" class="input-label">Phone Number</label>
                    <input type="text" id="inputName" name="phone_no" class="form-control" placeholder="Phone Number"
                        required autofocus>
                </div>
                <div class="form-elements">
                    <label for="inputPassword" class="input-label">Destination Address</label>
                    <input type="text" id="inputPassword" name="destination" class="form-control"
                        placeholder="Destination Address" required>
                </div>
                <div class="form-elements">
                    <label for="inputPassword" class="input-label">Purpose</label>
                    <input type="text" id="inputPassword" name="purpose" class="form-control" placeholder="Purpose"
                        required>
                </div>
                <div class="form-elements">
                    <label for="outd" class="input-label">Out Date</label>
                    <input type="date" id="outd" name="outdate" class="form-control" required>
                </div>
                <div class="form-elements">
                    <label for="rdate" class="input-label">Return Date</label>
                    <input type="date" id="rdate" name="returndate" class="form-control" required>
                </div>

            </div>

            <button class="btn btn-md btn-block" type="submit" name="submit">Generate Pass</button>
        </form>
    </div>
</div>



<?php include '../footer.php'; ?>