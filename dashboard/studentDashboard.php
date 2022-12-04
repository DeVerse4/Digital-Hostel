<?php
include_once '../header.php';
include_once '../admin.php';
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

    .edit-icon {
        color: #4B49AC;
        cursor: pointer;
        font-size: 14px;
    }

    .edit-icon img {
        width: 15px;
        height: 15px;
    }

    .uploadImgBtn {
        position: relative;
        bottom: 50px;
        right: 50px;
        border: 1px solid #4B49AC;
        border-radius: 5px;
    }

    .upload-img {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        margin-bottom: 20px;
    }

    .upload-img button {
        padding: 1px !important;
        font-size: 14px !important;
    }

    .upload-img {
        display: none;
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
                <li class="active"><a class="active nav-link" data-toggle="pill" href="#home">Personal</a></li>
                <li><a class="nav-link" data-toggle="pill" href="#acedamics">Acedemics</a></li>
                <li><a class="nav-link" data-toggle="pill" href="#contact">Contact</a></li>
                <li><a class="nav-link" data-toggle="pill" href="#attendance">View Attendance</a></li>
                <li><a class="nav-link" data-toggle="pill" href="#requestpass">View Passes</a></li>
                <li><a class="nav-link" data-toggle="pill" href="#fees">Fee Details</a></li>
                <li><a class="nav-link" data-toggle="pill" href="#complaints">View Complaints</a></li>
            </ul>
        </div>

        <div class="row col-md-10 align-items-start">
            <div class="col-md-12">
                <div class="tab-content">
                    <div id="home" class="tab-pane fade-in active">
                        <div class="studentProfile">
                            <div class="">
                                <div class="card-body">
                                    <div>
                                        <h1>
                                            <center>Personal details</center>
                                        </h1>
                                    </div>
                                    <div
                                        class="d-flex justify-content-center flex-column align-items-center user-image">
                                        <?php
                                        $x = isPhoto($id);
                                        $rs = mysqli_fetch_row($x);
                                        if ($rs[0] == 1)
                                            echo "<img src=Photo.php?id=$id height=250 width=250 style='border-radius:125px;' alt='user'>";
                                        else {
                                        ?>
                                        <img src="/Digital-Hostel/images/user.png" alt="user">
                                        <?php } ?>
                                        <span class="edit-icon">
                                            <p class="uploadImgBtn" style="color:white;">
                                                <img
                                                    src="https://img.icons8.com/fluency-systems-regular/48/null/pencil--v1.png" />
                                                edit
                                            </p>
                                        </span>
                                        <div class="upload-img" id="uploadImgForm">
                                            <form action="userPhotoAction.php" enctype="multipart/form-data"
                                                method=post>
                                                <input type="file" class="p-1" name="photo" id="image" accept="image/*">
                                                <div class="d-flex">
                                                    <input type="submit" name="save" value="Save" class="py-1"
                                                        style="background-color:#4B49AC; color:#fff;" />
                                                    <input type="button" class="cancelBtn ml-1 py-1" value="Cancel"
                                                        style="background-color:#4B49AC; color:#fff;" />
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <?php
                                    $name = "";
                                    $dob = "";
                                    $gender = "";
                                    $z = getProfile($id);
                                    $aa = mysqli_fetch_row($z);
                                    if (isset($aa[0])) {
                                        $name = $aa[2];
                                        $dob = $aa[3];
                                        $gender = $aa[4];
                                    }
                                    ?>
                                    <form action="dashboardAction.php" method="POST" autocomplete="off">
                                        <div class="input-group form-section" style="justify-content: space-evenly">
                                            <div class="row inputFlds ">
                                                <div class="col-md-6">
                                                    <label for="name" class="input-label">First Name: </label>
                                                    <input type="text" class="form-control " name="name"
                                                        placeholder="Your Name" value="<?php echo $name; ?>" required
                                                        autofocus />
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="dob" class="input-label">D.O.B: </label>
                                                    <input type="date" value="<?php echo $dob; ?>" class="form-control"
                                                        name="dob" max='2003-01-01' required autofocus />
                                                </div>
                                            </div>
                                            <div class=" row inputFlds">
                                                <div class="col-md-6">
                                                    <label for="collegeid" class="input-label">College ID: </label>
                                                    <input type="text" class="form-control" name="collegeid"
                                                        placeholder="College ID" value=<?php echo $id; ?> readonly />
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="email" class="input-label">Gender: </label>
                                                    <select name="gender" class="form-control" required readonly>
                                                        <option value=''>Hello I m...
                                                            <?php
                                                            $arr = array("Male", "Female");
                                                            foreach ($arr as $n) {
                                                                if ($n == $gender) {
                                                                    echo "<option value='$n' selected>$n</option>";
                                                                } else {
                                                                    echo "<option value='$n' che>$n</option>";
                                                                }
                                                            }
                                                            ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row inputFlds">
                                                <?php
                                                if (isset($_GET["p"]))
                                                    echo "Student Profile Successfully Updated";
                                                if (isset($_GET["y"]))
                                                    echo "Student Academic Profile Successfully Updated";
                                                if (isset($_GET["z"]))
                                                    echo "Student Contact Profile Successfully Updated";
                                                ?>
                                            </div>
                                        </div>
                                        <input class="btn btn-block btn-outline-primary" type="submit" value="Update" />
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div id="acedamics" class="tab-pane fade">
                        <div class="studentProfile">
                            <div class="">
                                <div class="card-body">
                                    <form action="AcademicAction.php" method="POST" autocomplete="off">
                                        <div>
                                            <h1>Academic details</h1>
                                        </div>
                                        <?php
                                        $course = "";
                                        $branch = "";
                                        $uni = "";
                                        $roll = "";
                                        $year = "";
                                        $dd = getAcademic($id);
                                        $ra = mysqli_fetch_row($dd);
                                        if (isset($ra[0])) {
                                            $course = $ra[2];
                                            $branch = $ra[3];
                                            $uni = $ra[4];
                                            $roll = $ra[5];
                                            $year = $ra[6];
                                        }

                                        ?>
                                        <div class="input-group form-section" style="justify-content: space-evenly">
                                            <div class="row inputFlds ">
                                                <div class="col-md-6">
                                                    <input type=hidden value='<?php echo $id; ?>' name=id />
                                                    <label for="name" class="input-label">Course: </label>
                                                    <select name="course" class="form-control">
                                                        <option value=''>Select Course</option>
                                                        <?php
                                                        $acar = array("BBA", "Polytechnic", "B.Tech", "D. Pharma", "B. Pharma", "M.Tech");
                                                        foreach ($acar as $n) {
                                                            if ($n == $course)
                                                                echo "<option value='$n' selected>$n</option>";
                                                            else
                                                                echo "<option value='$n'>$n</option>";
                                                        } ?>

                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="branch" class="input-label">Branch: </label>
                                                    <select name="branch" class="form-control">
                                                        <option value=''>Select Branch</option>
                                                        <?php
                                                        $brar = array("CS", "EE", "IT", "ME", "pharmacy");
                                                        foreach ($brar as $n) {
                                                            if ($n == $branch)
                                                                echo "<option value='$n' selected>$n</option>";
                                                            else
                                                                echo "<option value='$n'>$n</option>";
                                                        }
                                                        ?>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row inputFlds">
                                                <div class="col-md-6">
                                                    <label for="uni" class="input-label">University Name: </label>
                                                    <select name="uni" class="form-control">
                                                        <option value=''>Select University</option>
                                                        <?php
                                                        $unar = array("Dr. A.P.J. Abdul Kalam Technical University", "Chaudhary Charan Singh University, Meerut");
                                                        foreach ($unar as $n) {
                                                            if ($n == $uni)
                                                                echo "<option value='$n' selected>$n</option>";
                                                            else
                                                                echo "<option value='$n'>$n</option>";
                                                        } ?>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row inputFlds">
                                                <div class="col-md-6">
                                                    <label for="roll" class="input-label">Roll Number: </label>
                                                    <input type="text" value="<?php echo $roll; ?>" class="form-control"
                                                        name="roll" placeholder="University Roll Number" />
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="year" class="input-label">Graduation Year: </label>
                                                    <input type="text" value="<?php echo $year; ?>" class="form-control"
                                                        name="year" placeholder="Graduation Year" />
                                                </div>
                                            </div>
                                        </div>
                                        <input class="btn btn-block btn-outline-primary" type="submit" value="Update" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="contact" class="tab-pane fade">
                        <?php
                        $mobile = "";
                        $mailid = "";
                        $hometown = "";
                        $pin = "";
                        $address = "";
                        $dd = getContactInfo($id);
                        $ra = mysqli_fetch_row($dd);
                        if (isset($ra[0])) {
                            $mobile = $ra[2];
                            $mailid = $ra[3];
                            $hometown = $ra[4];
                            $address = $ra[5];
                            $pin = $ra[6];
                        }

                        ?>

                        <div class="studentProfile">
                            <div class="">
                                <div class="card-body">
                                    <form action="ContactDetailsAction.php" method="POST" autocomplete="off">
                                        <div>
                                            <h1>Contact details</h1>
                                        </div>
                                        <div class="input-group form-section" style="justify-content: space-evenly">

                                            <div class=" row inputFlds">
                                                <div class="col-md-6">
                                                    <input type=hidden value='<?php echo $id; ?>' name=id />
                                                    <label for="mobile" class="input-label">Mobile No: </label>
                                                    <input type="text" class="form-control" name="mobile"
                                                        value="<?php echo $mobile; ?>" placeholder="9990046906" />
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="email" class="input-label"> Mail Id: </label>
                                                    <input type="text" class="form-control" name="mailid"
                                                        value="<?php echo $mailid; ?>" placeholder="Your Mail Id" />
                                                </div>
                                            </div>
                                            <div class="row inputFlds">
                                                <div class="col-md-6">
                                                    <label for="email" class="input-label">Hometown: </label>
                                                    <select name=hometown class="form-control">
                                                        <option value=''>Select Hometown</option>
                                                        <?php $x = getState();
                                                        for ($i = 0; $i < mysqli_num_rows($x); $i++) {
                                                            $b = mysqli_fetch_row($x);
                                                            if ($hometown == $b[0])
                                                                echo "<option value='$b[0]' selected>$b[0]</option>";
                                                            else
                                                                echo "<option value='$b[0]'>$b[0]</option>";
                                                        } ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="pin" class="input-label">Pincode: </label>
                                                    <input type="number" class="form-control" name="pin"
                                                        value="<?php echo $pin; ?>" placeholder="Your pin code" />
                                                </div>
                                            </div>
                                            <div class="row inputFlds">
                                                <div class="col-md-12">
                                                    <label for="address" class="input-label">Address: </label>
                                                    <textarea name="addr" class="form-control" id="addr"
                                                        placeholder="Your Address"> <?php echo $address; ?></textarea>
                                                </div>
                                            </div>
                                            <input class="btn btn-block btn-outline-primary" type="submit"
                                                value="Update" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="attendance" class="tab-pane fade">
                        <div class="container-fluid">
                            <div class="row justify-content-center">
                                <div class="col-md-12">

                                    <div class="card mt-5">

                                        <div class="card-header">
                                            <center>
                                                <h4>Attendance Report </h4>
                                            </center>
                                            <div class="card-body">

                                                <form action=AttendanceAction.php method=get>
                                                    <table class="table table-stripped table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>SNO</th>
                                                                <th>Collage ID</th>
                                                                <th>Gender</th>
                                                                <th>Room Id</th>
                                                                <th>Attendance</th>
                                                                <th>Timing</th>
                                                                <th>Attendance Date</th>
                                                                <th>Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $id = $_SESSION["id"];
                                                            $con = mysqli_connect("localhost", "root", "", "digital_hostel");
                                                            $query = "SELECT collegeid,gender,roomid,attendance,timing,attendancedate,remarks FROM tblattendance WHERE collegeid='$id' order by attendancedate desc";
                                                            $x = mysqli_query($con, $query);
                                                            for ($i = 1; $i <= mysqli_num_rows($x); $i++) {
                                                                echo "<tr>";
                                                                $rs = mysqli_fetch_row($x);
                                                                echo "<td>$i</td>";
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
                    <div id="requestpass" class="tab-pane fade">
                        <div class="container-fluid">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class="card mt-5">
                                        <div class="card-header">
                                            <center>
                                                <h4>Passes Report </h4>
                                            </center>
                                            <div class="card-body">

                                                <table class="table table-stripped table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>SNO</th>
                                                            <th>Pass Id</th>
                                                            <th>Name</th>
                                                            <th>Room Id</th>
                                                            <th>Phone No</th>
                                                            <th>Destination</th>
                                                            <th>Purpose</th>
                                                            <th>Out Date</th>
                                                            <th>Return Date</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $id = $_SESSION["id"];
                                                        $con = mysqli_connect("localhost", "root", "", "digital_hostel");
                                                        $query = "SELECT passid,name,room_no,phone_no,destination,purpose,out_date,returndate,status FROM passgeneration where college_id='$id' order by sno";
                                                        $x = mysqli_query($con, $query);
                                                        for ($i = 1; $i <= mysqli_num_rows($x); $i++) {
                                                            echo "<tr>";
                                                            $rs = mysqli_fetch_row($x);
                                                            echo "<td>$i</td>";
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
                        <img src="../images/ComingSoon.png" class="img img-thumbnail">
                    </div>
                    <div id="complaints" class="tab-pane fade">
                        <table class="table table-stripped table-hover">
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
                            for ($i = 1; $i <= mysqli_num_rows($x); $i++) {
                                echo "<tr>";
                                $rs = mysqli_fetch_row($x);
                                echo "<td>$i</td>";
                                for ($j = 1; $j < count($rs); $j++) {
                                    echo "<td>$rs[$j]</td>";
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

    <script>
        const uploadImgBtn = document.querySelector('.uploadImgBtn');
        const cancelBtn = document.querySelector('.cancelBtn');
        const uploadImgForm = document.querySelector('#uploadImgForm');
        uploadImgBtn.addEventListener('click', () => {
            uploadImgForm.style.display = 'block';
            uploadImgForm.style.pointerEvents = 'auto';
            uploadImgBtn.style.transition = "all 2s";
        });
        cancelBtn.addEventListener('click', () => {
            uploadImgForm.style.display = 'none';
            uploadImgForm.style.pointerEvents = 'none';
            uploadImgBtn.style.transition = "all 2s";
        });
    </script>
    <?php
    include '../footer.php';
    ?>