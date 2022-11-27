<?php
include 'header.php';
?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card mt-5">
                    <div class="card-header">
                       <center> <h4>Student Details</h4></center>
                       <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" name="collegeid" value="<?php if(isset($_GET['collegeid'])){echo $_GET['collegeid'];} ?>" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="card-body">
                        
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th> Sno</th>
                                    <th>Collage ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","digital_hostel");

                                if(isset($_GET['collegeid']))
                                {
                                    $stud_id = $_GET['collegeid'];
                                    $name = $_GET['collegeid'];
                                    $gender = $_GET['collegeid'];
                                    $query = "SELECT * FROM tblregistration WHERE collegeid='$stud_id' OR `name` = '$name' OR `gender` = '$gender'";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $row)
                                        {
                                            ?>
                                            <tr>
                                            <td><?= $row['sno']; ?></td>
                                                <td><?= $row['collegeid']; ?></td>
                                                <td><?= $row['name']; ?></td>
                                                <td><?= $row['mailid']; ?></td>
                                                
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "No Record Found";
                                    }
                                }else {

                                    $query = "SELECT * FROM tblregistration WHERE GENDER='M'";
                                    $query_run = mysqli_query($con, $query);
                                    
                                    $start = 0;
                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $row)
                                        {
                                            ?>
                                            <tr>
                                            <td><?= $row['sno']; ?></td>
                                                <td><?= $row['collegeid']; ?></td>
                                                <td><?= $row['name']; ?></td>
                                                <td><?= $row['mailid']; ?></td>
                                                
                                               
                                            <?php
                                            $start++;
                                        }
                                    }
                                    else
                                    {
                                        ?>
                                            <tr>
                                                <td colspan="4">No Record Found</td>
                                            </tr>
                                        <?php
                                    }
                                }
                                    
                                ?>

                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php
include 'footer.php';
?>