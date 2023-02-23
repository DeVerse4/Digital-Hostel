<?php
if (isset($_SESSION['denyPass'])) {
    echo "<script>alert('" . $_SESSION['denyPass'] . "')</script>";
    unset($_SESSION['denyPass']);
}
if (isset($_SESSION['approvePass'])) {
    echo "<script>alert('" . $_SESSION['approvePass'] . "')</script>";
    unset($_SESSION['approvePass']);
}
?>

<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card mt-5">
            <div class="card-body" style="overflow: auto;">
                <table class="table table-bordered table-striped">
                    <thead>
                        <table class='table table-hover table-striped'>
                            <thead>
                                <tr>
                                    <th>Sno</th>
                                    <th>Name</th>
                                    <th>College Id</th>
                                    <th>Room No</th>
                                    <th>Phone No</th>
                                    <th>Destination</th>
                                    <th>Purpose</th>
                                    <th>Out Date</th>
                                    <th>Return Date</th>
                                    <th>Status</th>
                                    <th>Pass Id</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (isset($_SESSION['id'])) {
                                    $mode = $_SESSION['mode'];
                                    $username = $_SESSION['id'];

                                    $dsa = connect();
                                    $query = "SELECT * FROM `passgeneration` WHERE status='Pending'";
                                    $result = mysqli_query($dsa, $query);
                                    $x = mysqli_num_rows($result);
                                    if ($x > 0) {
                                        for ($i = 1; $i <= mysqli_num_rows($result); $i++) {
                                            echo "<tr>";
                                            $rs = mysqli_fetch_row($result);
                                            foreach ($rs as $n)
                                                echo "<td>$n</td>";
                                            echo "<td><a href=approve.php?id=$rs[0]>Approve</a> | <a href=denyRequest.php?id=$rs[0]>Denied</a></td>";
                                        }
                                    } else {
                                        echo "<tr><td colspan=12>No Pending Passes</td></tr>";
                                    }
                                    echo "</tbody>";
                                    echo "</table>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>