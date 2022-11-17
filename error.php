<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'poppins', sans-serif;
        }
        nav img {
            width: 40px;
            height: 40px;
            margin: 10px;
        }
        nav{
            height: 70px;
            background: rgb(39, 24, 126);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 50px;

        }
        nav h2{
            color: white;
            font-size: 30px;
            font-weight: 500;
            letter-spacing: 2px;
            filter: drop-shadow(0 0 0.75rem rgb(255, 255, 255));
        }
        nav a {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: #000;
            font-size: 20px;
            font-weight: 500;
            margin: 0 20px;
            background-color: azure;
            transition: 300ms ease-in-out;
        }
        nav a:hover{
            background-color: #fff;
            box-shadow: 5px 5px 0px whitesmoke;
        }
        img {
            height: 100%;
            width: 100%;
        }
        .img {
            height: calc(100vh - 80px);
        }
    </style>
</head>
<body>
    <nav>
        <h2 href="index.php">Arya Bhatta Hostel</h2>
        <a href="index.php"><img src="https://img.icons8.com/fluency/96/null/left.png"/> <span>Back to Home &nbsp;</span></a>

    </nav>
    <div class="img" >
        <img src="images/404.jpg" alt="">
    </div>
</body>
</html>