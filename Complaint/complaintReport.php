<?php
include "../header.php";
// include "../admin.php";
?>
<table class="table table-striped table-hover" style="height: 50vh;">
    <tr>
        <th colspan="9">
            <h3 class="h3-responsive font-weight text-center">Students' Complaints</h3>
        </th>
    </tr>
    <tr>
        <th> Sno </th>
        <th>College Id</th>
        <th>Subject</th>
        <th>Complaint Message</th>
        <th>Complaint Date</th>
        <th>Complaint Status</th>
        <th>Resolve Message</th>
        <th>Resolve Date</th>
        <th>Action</th>
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
if (isset($_SESSION['deleteComp'])) {
    echo "<script>alert('" . $_SESSION['deleteComp'] . "')</script>";
    unset($_SESSION['deleteComp']);
}
if (isset($_SESSION['updCom'])) {
    echo "<script>alert('" . $_SESSION['updCom'] . "')</script>";
    unset($_SESSION['updCom']);
}

include "../footer.php";
?>