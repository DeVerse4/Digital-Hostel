<?php
include '../header.php';
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card mt-5">

                <div class="card-header">
                    <center>
                        <h4>Attendence |
                            <?php echo date('Y-m-d'); ?>
                        </h4>
                    </center>
                    <div class="card-body">

                        <form action=AttendanceAction.php method=get>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>SNO</th>
                                        <th>Collage ID</th>
                                        <th>Gender</th>
                                        <th>Room Id</th>
                                        <th>Attendance</th>
                                        <th>Timing</th>
                                        <th>Status</th>
                                        <th>Attendance Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $con = mysqli_connect("localhost", "root", "", "digital_hostel");
                                    $query = "SELECT * FROM tblAttendance WHERE GENDER='M' order by collegeId, attendancedate ";
                                    $x = mysqli_query($con, $query);

                                    for ($i = 0; $i < mysqli_num_rows($x); $i++) {
                                        echo "<tr>";
                                        $rs = mysqli_fetch_row($x);
                                        foreach ($rs as $n)
                                            echo "<td>$n</td>";
                                        echo "</tr>";

                                    }

                                    ?>
                                    <?php if (isset($_GET["tt"]))
                                        echo "<tr><th colspan=5>Attendance Submited</th></tr>"; ?>

                                </tbody>
                            </table>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php
    include '../footer.php';
    ?>