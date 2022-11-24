<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Student Attendance </title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/main.js"></script>
</head>
<body>
<!DOCTYPE html>

<body lang="en">

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


        <title>Arya Bhatta Hostel</title>
    </head>

    <body>
        <?php
        $id = "";
        $mode = "";
        session_start();
        if (isset($_SESSION["id"])) {
            $id = $_SESSION["id"];
            $mode = $_SESSION["mode"];
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
        <?php if (isset($_GET["q"]))
            echo '<script> alert("Successfully Logged out...."); </script>';
        ?>
        <!-- <?php if (isset($_GET["s"]))
            echo '<script> alert("Successfully signed in...."); </script>';
        ?> -->
        <nav class="navbar navbar-inverse navbar-expand-lg sticky-top bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Arya Bhatta Hostel</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fa-solid fa-bars"></i></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mb-lg-o">
                        <li class="nav-item">
                            <a class="nav-link" href="/Digital-Hostel/index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Digital-Hostel/error.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Digital-Hostel/Gallery/gallery.php">Gallery</a>
                        </li>
                        <?php if ($mode == "admin") { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/Digital-Hostel/error.php">Attendance</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="/Digital-Hostel/error.php" role="button"
                                data-toggle="dropdown" aria-expanded="false">
                                Admin
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/Digital-Hostel/error.php">Generate Pass</a>
                                <a class="dropdown-item" href="/Digital-Hostel/error.php">Student details</a>
                                <a class="dropdown-item" href="/Digital-Hostel/error.php">Add Notice</a>
                                <a class="dropdown-item" href="/Digital-Hostel/error.php">Feedbacks</a>
                                <a class="dropdown-item"
                                    href="/Digital-Hostel/Complaint/complaintReport.php">Complains</a>
                            </div>
                        </li>
                        <?php } ?>
                        <?php if ($mode == "student") { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/Digital-Hostel/error.php">Notices</a>
                        </li>
                        <?php } if ($mode == "admin") { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="error.php">Attendance</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="error.php" role="button" data-toggle="dropdown"
                                aria-expanded="false">
                                Admin
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="error.php">Generate Pass</a>
                                <a class="dropdown-item" href="error.php">Student details</a>
                                <a class="dropdown-item" href="error.php">Feedbacks</a>
                                <a class="dropdown-item" href="error.php">Complains</a>
                            </div>
                        </li>
                        <?php } ?>
                        <?php if ($mode == "student") { ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="error.php" role="button" data-toggle="dropdown"
                                aria-expanded="false">
                                Services
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="error.php">Generate Pass</a>
                                <a class="dropdown-item" href="error.php">Attendance</a>
                            </div>
                        </li>
                        <?php } ?>
                        <?php if ($id == "") { ?>
                        <li class="nav-item ">
                            <a class="login btn btn-primary" data-toggle="modal" data-target="#loginModal">Login</a>
                        </li>
                        <?php } else { ?>
                        <li class="nav-item dropdown">
                            <a class="nav-profile dropdown-toggle" href="error.php" role="button" data-toggle="dropdown"
                                aria-expanded="false">
                                <img src="images/default.png" height="40" width="40"
                                    style="border-radius: 30px; border: 1px solid black;" alt="User"></a>

                            <div class="dropdown-menu dropdown-menu-right ">
                                <a class="dropdown-item">Hello,
                                    <?php echo $id;?>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="error.php">Dashboard</a>
                                <!-- <li class="divider"></li> -->
                                <a class="dropdown-item" href="error.php">Update Profile</a>
                                <!-- <li class="divider"></li> -->
                                <a class="dropdown-item" href="error.php">Change Password</a>
                                <div class="dropdown-divider"></div>
                                <?php if ($mode != "admin") { ?>
                                <a class="dropdown-item" href="Feedback.php"><b>Feedback</b></a>
                                <!-- <li class="divider"></li> -->
                                <a class="dropdown-item" href="Complaints.php"><b>Complaints</b></a>
                                <!-- <li class="divider"></li> -->
                                <a class="dropdown-item" href="Contactus.php"><b>Contact us</b></a>
                                <div class="dropdown-divider"></div>
                                <?php } ?>
                                <a class="dropdown-item" href="logout.php"><b>Logout</b></a>
                            </div>

                        </li>
                </div>
                <?php } ?>
                </ul>
            </div>
            </div>
        </nav>
        <!-- End of Navbar -->
        
	<div class="container mb-3 mt-5">
		<div class="card card-body bg-light text-center">
			<h2>Student Attendance(room Call)</h2>
		</div>
	</div>