<?php
include '../header.php';
include '../admin.php';
?>
<style>
    body {
        background-color: #f5f7ff;
    }

    .dashNav {
        position: sticky;
        top: 110px;
        z-index: 1;
    }

    .dashNav {
        width: 100%;
    }

    .nav-pills .nav-link.active {
        color: #fff;
        background-color: #4B49AC;
    }

    .dashNav li {
        text-align: justify;
        border-radius: 5px;
        margin: 3px 10px;
        border: 1px solid #4B49AC;
        font-size: 18px;
        font-weight: 600;
    }

    .dashNav li a:hover {
        background-color: #4B49AC;
        color: #fff;
    }

    /* .dashNav a img {
        color: #4B49AC;
        width: 20px;
        height: 20px;
        margin-right: 10px;
    }

    .dashNav a:hover {
        background-color: #4B49AC;
        color: #fff;
    }

    .dashNav a.active {
        background-color: #4B49AC;
        color: #fff;
    } */

    /* .input-group {
        width: 100%;
    } */

    .inputFlds {
        width: 100%;
        margin-bottom: 10px;
    }

    .studentProfile {
        background-color: #ffffff;
        padding: 20px 10px;
        border-radius: 10px;
    }

    /* .studentProfile form {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    } */

    /* .studentProfile form.inputFlds {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
    } */

    .studentProfile form h1 {
        font-size: 30px;
        font-weight: 600;
        color: #4B49AC;
        text-align: center;
        margin-bottom: 20px;
    }

    .studentProfile form label {
        font-weight: bold;
        font-size: 18px;
        color: #4B49AC;
        margin-bottom: 10px;
    }

    .studentProfile form input,
    .studentProfile form select {
        border: 1px solid #4B49AC;
        border-radius: 10px;
        background-color: transparent;
        padding: 10px;
        font-size: 18px;
        margin-bottom: 10px;
    }

    .studentProfile form textarea {
        border: 1px solid #4B49AC;
        border-radius: 10px;
        background-color: transparent;
        padding: 10px;
        font-size: 18px;
        margin-bottom: 10px;
        resize: none;
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    .studentProfile form button {
        width: 140px;
        height: 40px;
        border: none;
        border-radius: 10px;
        background-color: #4B49AC;
        color: #fff;
        font-size: 18px;
        font-weight: bold;
        cursor: pointer;
    }

    .studentProfile form button:hover {
        background-color: #fff;
        color: #4B49AC;
        border: 1px solid #4B49AC;
    }
</style>
<div class="container-fluid ">
    <div class="row border bg-light m-1 mb-3" style="height: 10vh;">
        <div class="col-md-12 d-flex align-items-center justify-content-center">
            <h3 class="text-uppercase font-weight-bold">
                Dashboard
            </h3>
        </div>
    </div>
    <div class="row m-1 justify-content-between">
        <div class="row bg-light col-md-2 align-items-start">
            <ul class="nav dashNav nav-pills flex-column me-3  font-weight-bold" style="border-color:#4B49AC;">
                <li class="active"><a class="active nav-link" data-toggle="pill" href="#home">Profile</a></li>
                <li><a class="nav-link" data-toggle="pill" href="#acedamics">Acedemics</a></li>
                <li><a class="nav-link" data-toggle="pill" href="#contact">Contact</a></li>
                <li><a class="nav-link" data-toggle="pill" href="#attendance">Attendance</a></li>
                <li><a class="nav-link" data-toggle="pill" href="#requestpass">Request Pass</a></li>
                <li><a class="nav-link" data-toggle="pill" href="#fees">Fees</a></li>
                <li><a class="nav-link" data-toggle="pill" href="#complaints">Complaints</a></li>
            </ul>
        </div>

        <div class="row col-md-10 align-items-start">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="tab-content">
                    <div id="home" class="tab-pane fade-in active">
                        <div class="studentProfile">
                            <div class="">
                                <div class="card-body">
                                    <form action="dashboardAction.php" method="POST" autocomplete="off">
                                        <div>
                                            <h1>Personal details</h1>
                                        </div>
                                        <div class="input-group form-section" style="justify-content: space-evenly">
                                            <div class="row inputFlds ">
                                                <div class="col-md-6">
                                                    <label for="name" class="input-label">First Name: </label>
                                                    <input type="text" class="form-control " name="fname"
                                                        placeholder="Your First Name" required autofocus />
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="lname" class="input-label">Last Last Name: </label>
                                                    <input type="text" class="form-control" name="name"
                                                        placeholder="Your Name" required autofocus />
                                                </div>
                                            </div>
                                            <div class=" row inputFlds">
                                                <div class="col-md-6">
                                                    <label for="collegeid" class="input-label">College ID: </label>
                                                    <input type="text" class="form-control" name="collegeid"
                                                        placeholder="College ID" />
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="email" class="input-label">Gender: </label>
                                                    <input type="text" class="form-control" name="email"
                                                        placeholder="Your Email" />
                                                </div>
                                            </div>
                                            <div class="row inputFlds">

                                            </div>
                                        </div>
                                        <button class="btn btn-block" type="submit">Update</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div id="acedamics" class="tab-pane fade">
                        <div class="studentProfile">
                            <div class="">
                                <div class="card-body">
                                    <form action="" method="POST" autocomplete="off">
                                        <div>
                                            <h1>Academic details</h1>
                                        </div>
                                        <div class="input-group form-section" style="justify-content: space-evenly">
                                            <div class="row inputFlds ">
                                                <div class="col-md-6">
                                                    <label for="name" class="input-label">Course: </label>
                                                    <select name="fathname" class="form-control"
                                                        placeholder="Father's Name">
                                                        <option value="">Select Course</option>
                                                        <option value="B.Tech">B.Tech</option>
                                                        <option value="M.Tech">M.Tech</option>
                                                        <option value="M.Tech">Polytechnic</option>
                                                        <option value="BBA">BBA</option>
                                                        <option value="MBA">MBA</option>
                                                        <option value="B.Pharma">B.Pharma</option>
                                                        <option value="D.pharma">D.Pharma</option>
                                                        <option value="other">Others</option>

                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="name" class="input-label">Branch: </label>
                                                    <input type="text" class="form-control" name="mothname"
                                                        placeholder="Mother's Name" />
                                                </div>
                                            </div>
                                            <div class="row inputFlds">
                                                <div class="col-md-6">
                                                    <label for="email" class="input-label">University Name: </label>
                                                    <input type="text" class="form-control" name="fathphone"
                                                        placeholder="Father's Phone" />
                                                </div>
                                            </div>
                                            <div class="row inputFlds">
                                                <div class="col-md-6">
                                                    <label for="phone" class="input-label">Roll Number: </label>
                                                    <input type="text" class="form-control" name="phone"
                                                        placeholder="University Roll Number" />
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="email" class="input-label">Graduation Year: </label>
                                                    <input type="text" class="form-control" name="fathocc"
                                                        placeholder="Father's Occupation" />
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-block" type="submit">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="contact" class="tab-pane fade">
                        <div class="studentProfile">
                            <div class="">
                                <div class="card-body">
                                    <form action="" method="POST" autocomplete="off">
                                        <div>
                                            <h1>Contact details</h1>
                                        </div>
                                        <div class="input-group form-section" style="justify-content: space-evenly">

                                            <div class=" row inputFlds">
                                                <div class="col-md-6">
                                                    <label for="phone" class="input-label">Phone: </label>
                                                    <input type="text" class="form-control" name="phone"
                                                        placeholder="Your Phone" />
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="email" class="input-label">Email: </label>
                                                    <input type="text" class="form-control" name="email"
                                                        placeholder="Your Email" />
                                                </div>
                                            </div>
                                            <div class="row inputFlds">
                                                <div class="col-md-6">
                                                    <label for="email" class="input-label">Hometown: </label>
                                                    <input type="text" class="form-control" name="email"
                                                        placeholder="Your Email" />
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="phone" class="input-label">Pincode: </label>
                                                    <input type="number" class="form-control" name="phone"
                                                        placeholder="Your Phone" />
                                                </div>
                                            </div>
                                            <div class="row inputFlds">
                                                <div class="col-md-12">
                                                    <label for="address" class="input-label">Address: </label>
                                                    <textarea name="addr" class="form-control" id="addr"
                                                        placeholder="Your Address"></textarea>
                                                </div>
                                            </div>
                                            <button class="btn btn-block" type="submit">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div id="attendance" class="tab-pane fade">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-12">

                                    <div class="card mt-5">

                                        <div class="card-header">
                                            <center>
                                                <h4>Attendance Report </h4>
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
                                                            $id = $_SESSION["id"];
                                                            $con = mysqli_connect("localhost", "root", "", "digital_hostel");
                                                            $query = "SELECT * FROM tblAttendance WHERE collegeid='$id' order by attendancedate ";
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
                    </div>
                    <div id="fees" class="tab-pane fade">
                        <h3>Menu 2</h3>
                        <p>Some content in menu 2.</p>
                    </div>
                    <div id="menu" class="tab-pane fade">
                        <h3>Menu 2</h3>
                        <p>Some content in menu 2.</p>
                    </div>
                    <div id="menu5" class="tab-pane fade">
                        <h3>Menu 2</h3>
                        <p>Some content in menu 2.</p>
                    </div>
                    <div id="complaints" class="tab-pane fade">
                        <table class="table table-striped table-hover" style="height: 50vh;">
                            <tr>
                                <th colspan="9">
                                    <h3 class="h3-responsive font-weight text-center">Your Complaints</h3>
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
                            </tr>
                            <?php
                            $x = singeleUserComplaint($id);
                            for ($i = 0; $i < mysqli_num_rows($x); $i++) {
                                echo "<tr>";
                                $rs = mysqli_fetch_row($x);
                                foreach ($rs as $n) {
                                    echo "<td>$n</td>";
                                }
                                echo "</tr>";
                            }
                            ?>
                        </table>
                    </div>
                </div>

            </div>
            <div class="col-md-1"></div>
        </div>
    </div>

</div>
<?php
include '../footer.php';
?>