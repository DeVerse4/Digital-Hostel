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

        <!-- External JS  -->
        <script src="DgitalHostel\script.js"></script>

        <link rel="stylesheet" href="regFormStyle.css">
        <link rel="stylesheet" href="../Styles/style.css">

        <title>Registration | Arya Bhatta Hostel</title>
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
        
        <nav class="navbar navbar-inverse navbar-expand-lg sticky">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Arya Bhatta Hostel</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fa-solid fa-bars"></i></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mb-lg-o">
                        <li class="nav-item">
                            <a class="nav-link" href="/index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Gallery</a>
                        </li>
                        <?php if ($mode == "admin") { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Attendance</a>
                            </li>
                        <?php } ?>
                        <?php if ($mode == "admin") { ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                    Admin
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Generate Pass</a>
                                    <a class="dropdown-item" href="#">Student details</a>
                                    <a class="dropdown-item" href="#">Feedbacks</a>
                                    <a class="dropdown-item" href="#">Complains</a>
                                </div>
                            </li>
                        <?php } ?>
                        <?php if ($id != "admin") { ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                    Services
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Generate Pass</a>
                                    <a class="dropdown-item" href="#">Attendance</a>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="login btn btn-primary" data-toggle="modal" data-target="#loginModal">Login</a>
                            </li>
                        <?php } else { ?>
                            <li class="nav-item dropdown">
                                <a class="nav-profile" href="#"><img src="images/default.png" height="40" width="40" style="border-radius: 30px;" alt="User"><span class="ml-2 text-dark"><i class="fa-solid fa-caret-down"></i></span></a>
                            </li>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Dashboard</a>
                                <li class="divider"></li>
                                <a class="dropdown-item" href="#">Update Profile</a>
                                <li class="divider"></li>
                                <a class="dropdown-item" href="#">Change Password</a>
                                <li class="divider"></li>
                                <?php if ($mode != "admin") { ?>
                                    <a class="dropdown-item" href="Feedback.php"><b>Feedback</b></a>
                                    <li class="divider"></li>
                                    <a class="dropdown-item" href="Complaints.php"><b>Complaints</b></a>
                                    <li class="divider"></li>
                                    <a class="dropdown-item" href="Contactus.php"><b>Contact us</b></a>
                                    <li class="divider"></li>
                                <?php } ?>
                                <a class="dropdown-item" href="logout.php"><b>Logout</b></a>

                            </div>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>