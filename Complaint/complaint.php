<?php
include "../admin.php";
ob_start();
include("../header.php");
$buffer = ob_get_contents();
ob_end_clean();

$title = "Complaint | Arya Bhatta Hostel";
$buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

echo $buffer;
if (isset($_SESSION['addComp'])) {
    echo "<script>alert('" . $_SESSION['addComp'] . "')</script>";
    unset($_SESSION['addComp']);
}
if (isset($_SESSION['deleteComp'])) {
    echo "<script>alert('" . $_SESSION['deleteComp'] . "')</script>";
    unset($_SESSION['deleteComp']);
}
?>
<div class="form-container complaint-form" style='background: #f1f2f6'>
    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="page-title">
                <h1 class="h1-responsive font-weight">Raise a Complaint</h1>
            </div>
        </div>
    </div>
    <div class="reg-form">
        <form class="form-signin" action="complaintAction.php" method="post" autocomplete="off">
            <div class="form-section ">
                <div class="form-elements">
                    <label for="complain_subject" class="input-label">Subject</label>
                    <input type="text" id="complain_subject" name="subject" class="form-control"
                        placeholder="Complaint Subject" required autofocus>
                </div>
                <div class="form-elements">
                    <label for="inputName" class="input-label">Write your complaint here</label>
                    <textarea id="complaintDesc" name="complaintDesc" class="form-control"
                        placeholder="Describe your complaint..." required autofocus></textarea>
                </div>
            </div>
            <button class="btn btn-md btn-block" type="submit">Raise Complaint</button>
        </form>
    </div>
</div>

<section>
    <table class="table table-striped table-hover">
        <tr>
            <th colspan="8">
                <h3 class="h3-responsive font-weight text-center">Your Previous Complaints</h3>
            </th>
        </tr>
        <tr>
            <th>Sno </th>
            <th>Subject</th>
            <th>Message</th>
            <th>Complaint Date</th>
            <th>Complaint Status</th>
            <th>Resolve Message</th>
            <th>Resolve Date</th>
            <th>Action</th>
        </tr>
        <?php
        $x = getUserComplaints($id);
        for ($i = 0; $i < mysqli_num_rows($x); $i++) {
            echo "<tr>";
            $rs = mysqli_fetch_row($x);
            foreach ($rs as $n) {
                echo "<td>$n</td>";
            }
            echo "<td><a href=deleteUserComplaint.php?n=$rs[0]><i class='fa-solid fa-trash'></i></a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</section>



<?php
include '../footer.php';