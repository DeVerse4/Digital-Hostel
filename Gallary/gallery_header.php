<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!--End Bootstrap -->
    <link rel="stylesheet" href="../Styles/style.css">
    <title>Events and Gallery</title>
    <script src="https://kit.fontawesome.com/5194f2ea08.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:200i,300,400&display=swap');

        * {
            margin: 0px;
            padding: 0px;
            font-size: 10px;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;

        }

        :root {
            --main-white: #f1f2f6;
            --main-orange: #ff8600;
            --main-blue: #758bfd;
            --main-grayBlue: #aeb8fe;
            --main-indigo: #27187e;
        }

        body {
            background-color: var(--main-white);
            scroll-behavior: smooth;
        }

        .navbar1 {
            position: fixed;
            width: 100%;
            height: 70px;
            left: 0px;
            top: 0px;
            background: var(--main-indigo);
        }

        .heading {
            padding: 120px 120px 65px 120px;
            font-weight: 700;
            text-align: center;
            font-size: 4rem;
            color: var(--main-indigo);
        }

        .filter-bar {
            margin: 0 auto;
            max-width: 1100px;
        }

        .filter-bar .filter_nav {
            display: flex;
            justify-content: center;

        }

        .filter_nav .filters {
            display: flex;
            max-width: 72rem;
            width: 100%;
            justify-content: space-between;
        }

        .filter_nav .filters .item {
            padding: 7px 25px;
            font-size: 1.8rem;
            font-weight: 600;
            color: var(--main-orange);
            border: 2px solid var(--main-orange);
            border-radius: 5rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .filter_nav .filters .active,
        .filter_nav .filters .item:hover {
            color: var(--main-white);
            background-color: var(--main-orange);

        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            margin-top: 3rem;
        }

        .gallery .image {
            padding: .7rem;
            width: calc(100%/4);
        }

        .gallery .image.hide {
            display: none;
        }

        .gallery .image.show {
            animation: animate 0.4s ease;
        }

        @keyframes animate {
            0% {
                transform: scale(0.5);
            }

            100% {
                transform: scale(1);
            }
        }

        .gallery .image span {
            display: flex;
            width: 100%;
            overflow: hidden;
        }

        .gallery .image img {
            width: 100%;
            vertical-align: middle;
            transition: all 0.3s ease;
        }

        .gallery .image:hover img {
            transform: scale(1.1);
        }

        .preview-box {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0.9);
            background: #fff;
            max-width: 70rem;
            z-index: 5;
            opacity: 0;
            pointer-events: none;
            width: 100%;
            border-radius: 0.3rem;
            padding: 0 5px 5px 5px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
        }

        .preview-box.show {
            opacity: 100;
            pointer-events: auto;
            transform: translate(-50%, -50%) scale(1);
            transition: all 0.3s ease;
        }

        .preview-box .details {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 13px 15px 13px 10px;
        }

        .preview-box .details .title {
            display: flex;
            font-size: 18px;
            font-weight: 500;
        }

        .details .title p {
            margin-left: 0.5rem;
            font-size: 18px;
            font-weight: 600;
        }

        .details .icon {
            color: var(--main-orange);
            font-size: 2.2rem;
            cursor: pointer;
        }

        .preview-box .image-box {
            display: flex;
            width: 100%;
        }

        .image-box img {
            width: 100%;
            border-radius: 0 0 3px 3px;
        }

        .shadow {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            z-index: 2;
            display: none;
            background: rgba(0, 0, 0, 0.4);
        }

        .shadow.show {
            display: block;
        }

        @media(max-width: 1000px) {
            .gallery .image {
                width: calc(100%/3);
            }
        }

        @media(max-width: 800px) {
            .gallery .image {
                width: calc(100%/2);
            }
        }

        @media(max-width: 700px) {
            nav .filters {
                flex-wrap: wrap;
                justify-content: center;
            }

            nav .filters .item {
                margin: 5px;
            }

            .gallery .image {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Arya Bhatta Hostel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fa-solid fa-bars"></i></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-lg-o">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./Gallary/gallery.php">Gallery</a>
                    </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Attendance</a>
                        </li>
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                Admin
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Generate Pass</a>
                                <a class="dropdown-item" href="#">Student details</a>
                                <a class="dropdown-item" href="#">Feedbacks</a>
                                <a class="dropdown-item" href="#">Complains</a>
                            </div>
                        </li> -->
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
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-profile" href="#"><img src="images/default.png" height="40" width="40" style="border-radius: 30px;" alt="User"><span class="ml-2 text-dark"><i class="fa-solid fa-caret-down"></i></span></a>
                        </li>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Dashboard</a>
                            <li class="divider"></li>
                            <a class="dropdown-item" href="#">Update Profile</a>
                            <li class="divider"></li>
                            <a class="dropdown-item" href="#">Change Password</a>
                            <li class="divider"></li>
                                <a class="dropdown-item" href="Feedback.php"><b>Feedback</b></a>
                                <li class="divider"></li>
                                <a class="dropdown-item" href="Complaints.php"><b>Complaints</b></a>
                                <li class="divider"></li>
                                <a class="dropdown-item" href="Contactus.php"><b>Contact us</b></a>
                                <li class="divider"></li>
                            <a class="dropdown-item" href="logout.php"><b>Logout</b></a>
                        </div> -->
                </ul>
            </div>
        </div>
    </nav>