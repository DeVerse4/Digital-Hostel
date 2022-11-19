<?php
include "../header.php";
include "../admin.php";
?>
<table class="table table-striped table-hover" style="height: 50vh;">
    <tr>
        <th colspan="9">
            <h3 class="h3-responsive font-weight text-center">Students' Complaints</h3>
        </th>
    </tr>
    <tr>
        <th> Sno </th><th>College Id</th><th>Subject</th><th>Complaint Message</th><th>Complaint Date</th><th>Complaint Status</th><th>Resolve Message</th><th>Resolve Date</th><th>Action</th>
    </tr>
    <?php
    $x = getAllComplaintsReport();
    for ($i = 0; $i < mysqli_num_rows($x); $i++) {
        echo "<tr>";
        $rs = mysqli_fetch_row($x);
        foreach ($rs as $n) {
            echo "<td>$n</td>";
        }
        echo "<td><a href=UpdComplaints.php?id=$rs[0]><i class='fa-regular fa-pen-to-square'></i></a> | <a href=DeleteComplaint.php?n=$rs[0]><i class='fa-solid fa-trash'></i></a></td>";
        echo "</tr>";
    }
    ?>
</table>
<?php
if (isset($_GET["s"])) {
    echo "<script> alert('Ur Complaints Successfully Deleted...')</script>";
}
if (isset($_GET["v"])) {
    echo "<script> alert('Complaints Successfully Resolved...')</script>";
}

include "../footer.php";
?>

