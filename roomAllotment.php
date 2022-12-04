<?php
include 'header.php';
// include 'admin.php';
?>

<div class="form-container" style='background: #f1f2f6'>
    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="page-title">
                <h1 class="h1-responsive font-weight">Room Allotment</h1>
            </div>
        </div>
    </div>
    <div class="reg-form">
        <form class="form-signin" action="roomallotaction.php" method="post">
            <div class="form-section ">
                <div class="form-elements">
                    <label for="inputEmail" class="input-label">Room Number</label>
                    <select name=roomno class="form-control" required>
                        <option value=''>Select Room No</option>";
                        <?php
                        $q = getRoomNo();
                        for ($i = 1; $i <= mysqli_num_rows($q); $i++) {
                            $rs = mysqli_fetch_row($q);
                            echo "<option value='$rs[0]'>$rs[0] - $rs[1]($rs[2]) $rs[3] </option>";
                        }
                        ?>
                    </select>

                </div>
                <div class="form-elements">
                    <label for="collegeID" class="input-label">College ID</label>
                    <select name='collegeid' class="form-control" required>
                        <option value=''>Select College Id</option>";
                        <?php
                        $q = getCollegeId();
                        for ($i = 1; $i <= mysqli_num_rows($q); $i++) {
                            $rs = mysqli_fetch_row($q);
                            echo "<option value='$rs[0]'>$rs[0] - $rs[1] $rs[2] </option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-elements">
                    <label for="roomtype">Room Type</label>
                    <select name="roomtype" class="form-control" id="roomtype">
                        <option value="single">Single</option>
                        <option value="double">Double</option>
                        <option value="triple">Triple</option>
                    </select>
                </div>
                <div class="form-elements">
                    <label for="roomstatus">Room Status</label>
                    <select name="roomstatus" class="form-control" id="roomstatus">
                        <option value="vacant">Vacant</option>
                        <option value="occupied">Occupied</option>
                    </select>
                </div>
                <div class="form-elements">
                    <label for="roomallotmentdate">Room Allotment Date</label>
                    <input classs="form-control" type="date" name="roomallotmentdate" id="roomallotmentdate">
                </div>
            </div>
            <button class="btn btn-md btn-block" name="submit" type="submit">Allot</button>
            <?php
            if (isset($_REQUEST['r1'])) {
                echo "Room Alloted Successfully";
            }
            if (isset($_REQUEST['r0'])) {
                echo "Room Alloted Failed";
            }
            ?>
        </form>
    </div>
</div>

<?php
include 'footer.php';