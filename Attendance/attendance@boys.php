<?php 
include '../header.php'; 
 $cur_date = date('Y-m-d');
 ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card mt-5">
                 
                    <div class="card-header">
                       <center> <h4>Attendence | <?php echo $cur_date;?> </h4></center>
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
                        
                      <form action=AttendanceAction.php method=get>
                            <table class="table table-bordered">
                            <thead>
                              <tr><th colspan=5 style="text-align:center;"><input type=radio name=timing value='Morning' checked> Morning Attendance   <input type=radio name=timing value='Evening' checked> Evening Attendance</td></tr>
                              <tr>
                                    <th>Room NO</th>
                                    <th>Name</th>
                                    <th>collegeId</th>
                                    <th>Attendence</th>
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
                                    $query = 'SELECT a.roomno,reg.name,a.collegeid FROM tblroomallotment a,tblregistration reg WHERE a.collegeid=reg.collegeid;';
                                    // $query = "SELECT * FROM tblregistration WHERE collegeid='$stud_id' OR `name` = '$name' OR `gender` = '$gender' order by 1";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $row)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $row['roomno']; ?></td>
                                                <input type=hidden name=cid<?php echo $start ?> value=<?= $row['name']; ?> >
                                                <td><?= $row['collegeid']; ?></td>
                                                
                                                <th><input type="radio" value="1" name="att<?php echo $start ?>" />Present <input type="radio" value="0" name="att<?php echo $start ?>" checked/>Absent</th>
                                            </tr 
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "</table>No Record Found";
                                    }
                                }else {
                                    $query = "SELECT a.roomno,reg.name,a.collegeid FROM tblroomallotment a,tblregistration reg WHERE a.collegeid=reg.collegeid and reg.gender='M';";
                                    // $query = "SELECT * FROM tblregistration WHERE GENDER='M' order by 1";
                                    $query_run = mysqli_query($con, $query);
                                    
                                    $start = 0;
                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $row)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $row['roomno']; ?></td>
                                                <input type=hidden name=cid<?php echo $start ?> value=<?= $row['collegeid']; ?> >
                                                <td><?= $row['name']; ?></td>
                                                <td><?= $row['collegeid']; ?></td>
                                                <th><input type="radio" value="Present" name="att<?php echo $start ?>" />Present <input type="radio" value="Absent" name="att<?php echo $start ?>" checked/>Absent</th>
                                            </tr>
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
                               <input type=hidden name=counter value=<?php echo $start ?> />
                               <tr><th colspan=5 style="text-align:center;"><input type=submit value=' S a v e ' class="btn btn-primary">  <input type=reset value=' C l e a r ' class="btn btn-primary"></td></tr>
                               <tr><th colspan=5><?php if(isset($_GET["tt"])) echo "Attendance Submited"; ?></th></tr>
                              
                            </tbody>
                        </table>
                       
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php
include '../footer.php';