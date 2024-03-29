<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- Fontawesome Icons CDN -->
    <script src="https://kit.fontawesome.com/5194f2ea08.js" crossorigin="anonymous"></script>

    <!-- Swiper css -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />


    <!-- Icons CDN  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!--<link rel="stylesheet" href="/Digital-Hostel/Registration/regFormStyle.css">-->
    <link rel="stylesheet" href="/Digital-Hostel/Styles/style.css">

    <!--jQuery CDN-->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>


    <title>Arya Bhatta Hostel</title>
</head>

<body>
    <?php
    $id = "";
    $mode = "";
    $name = "";
    session_start();
    if (isset($_SESSION["id"])) {
        $id = $_SESSION["id"];
        $mode = $_SESSION["mode"];
        $name = $_SESSION["name"];
    }
    ?>
    <?php
    if (isset($_GET["t"]))
        echo '<script> alert("User Successfully Registered, Login now.");</script>';
    ?>
    <?php
    if (isset($_GET["k"]))
        echo '<script> alert("Invalid Login Id & Password. Please Retry.."); </script>';
    ?>
    <?php
    if (isset($_GET["q"]))
        echo '<script> alert("Successfully Logged out...."); </script>';
    ?>
    <?php
    if (isset($_GET["s"]))
        echo '<script> alert("Complaint successfully registered...."); </script>';
    ?>
    <?php
    if (isset($_GET["login"]))
        echo '<script> alert("Logged In."); </script>';
    ?>
    <?php
    if (isset($_GET["c"]))
        echo '<script> alert("Message sent successfully..."); </script>';
    ?>
    <?php
    if (isset($_GET["v"]))
        echo '<script> alert("Email Verified. You can login now."); </script>';
    ?>
    <nav class="navbar navbar-inverse navbar-expand-lg sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/Digital-Hostel/index.php">Arya Bhatta Hostel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fa-solid fa-bars"></i></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-lg-o">
                    <li class="nav-item">
                        <a class="nav-link" href="/Digital-Hostel/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Digital-Hostel/about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Digital-Hostel/Gallery/gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Digital-Hostel/Gallery/gallery.php">Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Digital-Hostel/feedback.php">Feedback</a>
                    </li>
                    <?php if ($mode == "admin") { ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false">
                            Attendance
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/Digital-Hostel/Attendance/attendance@boys.php">Mark
                                Attendance</a>
                            <a class="dropdown-item"
                                href="/Digital-Hostel/Attendance/AttendanceboysReport.php">Attendance Report</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false">
                            Admin
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/Digital-Hostel/pass_system/passReport.php">Gate Passes</a>
                            <a class="dropdown-item" href="/Digital-Hostel/alluserdetails.php">Student details</a>
                            <a class="dropdown-item" href="/Digital-Hostel/roomAllotment.php">Room Alloatment</a>
                            <a class="dropdown-item" href="/Digital-Hostel/roomReport.php">Room Report</a>
                            <a class="dropdown-item" href="/Digital-Hostel/notices.php">Add Notice</a>
                            <a class="dropdown-item" href="/Digital-Hostel/FeedbackReport.php">Feedbacks</a>
                            <a class="dropdown-item" href="/Digital-Hostel/Complaint/complaintReport.php">Complains</a>
                        </div>
                    </li>
                    <?php } ?>
                    <?php if ($mode == "student") { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/Digital-Hostel/notices.php">Notices</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/Digital-Hostel/" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            Services
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/Digital-Hostel/pass_system/passform.php"><b>Generate
                                    Pass</b></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/Digital-Hostel/findFriend.php"><b>Find Friend</b></a>
                        </div>
                    </li>
                    <?php } ?>
                    <?php if ($id == "") { ?>
                    <li class="nav-item ">
                        <a class="login btn btn-primary" data-toggle="modal" data-target="#loginModal">Login</a>
                    </li>
                    <?php } else { ?>
                    <li class="nav-item dropdown">
                        <a class="nav-profile dropdown-toggle" href="/Digital-Hostel/" role="button"
                            data-toggle="dropdown" aria-expanded="false">
                            <?php
                        include_once "admin.php";
                        $kk = isPhoto($id);
                        $rrr = mysqli_fetch_row($kk);
                        if ($rrr[0])
                            echo "<img src='Photo.php?id=$id' height='40' width='40'
                        style='border-radius: 30px; border: 1px solid black;' alt='myUser'></a>";
                        else {
                            ?>
                            <img src="/Digital-Hostel/images/default.png" height="40" width="40"
                                style="border-radius: 30px; border: 1px solid black;" alt="User">
                        </a>
                        <?php } ?>
                        <div class="dropdown-menu dropdown-menu-right ">
                            <a class="dropdown-item"><b>Hello,
                                    <?php echo $name; ?>
                                </b>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item"
                                href="/Digital-Hostel/dashboard/studentDashboard.php"><b>Dashboard</b></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/Digital-Hostel/forgetpassword/forgetrequest.php"><b>Change
                                    Password</b></a>
                            <div class="dropdown-divider"></div>
                            <?php if ($mode != "admin") { ?>
                            <a class="dropdown-item" href="/Digital-Hostel/Feedback.php"><b>Feedback</b></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item"
                                href="/Digital-Hostel/Complaint/complaint.php"><b>Complaints</b></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/Digital-Hostel/Contactus.php"><b>Contact us</b></a>
                            <div class="dropdown-divider"></div>
                            <?php } ?>
                            <a class="dropdown-item" href="/Digital-Hostel/logout.php"><b>Logout</b></a>
                        </div>

                    </li>
            </div>
            <?php } ?>
            </ul>
        </div>
        </div>
    </nav>