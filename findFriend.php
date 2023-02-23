<?php
include 'header.php';
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">

            <div class="card mt-5">
                <div class="card-header text-center">
                    <h4>Search</h4>
                </div>
                <div class="card-body">

                    <form action="" method="GET">
                        <div class="row">
                            <div class="col-md-8">
                                <input type="text" name="collegeid" value="<?php if (isset($_GET['collegeid'])) {
                                    echo $_GET['collegeid'];
                                } ?>" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </form>

                    <div class="row">
                        <div class="col-md-12">
                            <hr>
                            <?php
                            $con = mysqli_connect("localhost", "root", "", "digital_hostel");

                            if (isset($_GET['collegeid'])) {
                                $stud_id = $_GET['collegeid'];
                                $name = $_GET['collegeid'];

                                $query = "SELECT * FROM tblregistration WHERE collegeid='$stud_id' OR `name` = '$name'; ";
                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $row) {
                            ?>
                            <div class="form-group mb-3">
                                <label for="">Id</label>
                                <input type="text" value="<?= $row['collegeid']; ?>" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Name</label>
                                <input type="text" value="<?= $row['name']; ?>" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Email</label>
                                <input type="text" value="<?= $row['mailid']; ?>" class="form-control">
                            </div>
                            <?php
                                    }
                                } else {
                                    echo "No Record Found";
                                }
                            }

                            ?>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>