<?php
ob_start();
include("../header.php");
$buffer = ob_get_contents();
ob_end_clean();

$title = "Complaint | Arya Bhatta Hostel";
$buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

echo $buffer;
?>

<div class="form-container" style='background: #f1f2f6'>
    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="page-title">
                <h1 class="h1-responsive font-weight">Raise a Complaint</h1>
            </div>
        </div>
    </div>
    <div class="reg-form">
        <?php
        $sno = $_REQUEST["id"];
        include "../admin.php";
        $x = getComplaint($sno);
        $rs = mysqli_fetch_row($x);
        ?>
        <form class="form-signin" action="UpdComplaintAction.php" method="post" autocomplete="off">
            <div class="form-section ">
                <input type="hidden" name="sno" value=<?php echo $rs[0]; ?> />
                <div class="form-elements">
                    <label for="complain_subject" class="input-label">Subject</label>
                    <input type="text" disabled id="complain_subject" name="subject" value="<?php echo $rs[2]; ?> " class="form-control" />
                </div>
                <div class="form-elements">
                    <label for="inputName" class="input-label">User complaint</label>
                    <textarea id="complaintDesc" name="complaintDesc" disabled class="form-control" placeholder="Describe your complaint..." required autofocus style="resize: none !important;"><?php echo $rs[3]; ?> </textarea>
                </div>
                <div class="form-elements">
                    <label for="inputName" class="input-label">Resolve Message</label>
                    <textarea id="resolveMsg" name="rmsg" class="form-control" placeholder="Resolve message for user's complaint" required autofocus style="resize: none !important;"></textarea>
                </div>
            </div>
            <button class="btn btn-md btn-block" type="submit">Resolve Complaint</button>
        </form>
    </div>
</div>



<?php
include '../footer.php';
