<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card mt-5">
            <!-- <div class="card-header">
                    </div> -->

            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <!-- <th>Sno</th> -->
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
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $con = mysqli_connect("localhost", "root", "", "digital_hostel");

                        $query = "SELECT * FROM `passgeneration` WHERE status='denied'";
                        $query_run = mysqli_query($con, $query);

                        $start = 0;
                        if (mysqli_num_rows($query_run) > 0) {
                            foreach ($query_run as $row) {
                        ?>
                                <tr>
                                    <!-- <td><?= $row['sno']; ?></td> -->
                                    <td><?= $row['name']; ?></td>
                                    <td><?= $row['college_id']; ?></td>
                                    <td><?= $row['room_no']; ?></td>
                                    <td><?= $row['phone_no']; ?></td>
                                    <td><?= $row['destination']; ?></td>
                                    <td><?= $row['purpose']; ?></td>
                                    <td><?= $row['out_date']; ?></td>
                                    <td><?= $row['returndate']; ?></td>
                                    <td><?= $row['status']; ?></td>
                                    <td><?= $row['passid']; ?></td>

                                </tr>
                            <?php
                                $start++;
                            }
                        } else {
                            ?>
                            <tr>
                                <td colspan="4">No Record Found</td>
                            </tr>
                        <?php
                        }
                        ?>

                    </tbody>
                </table>

            </div>
        </div>

    </div>
</div>