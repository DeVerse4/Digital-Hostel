<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:error.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Digital Hostel</title>
</head>
<body>
    <div class="grid h-screen place-content-center bg-white">
        <div class="text-center">
          <strong class="text-9xl font-black text-gray-200">404</strong>
      
          <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-4xl">
            Uh-oh!
          </h1>
      
          <p class="mt-4 text-gray-500">We can't find that page.</p>
      
          <a
            href="../DgitalHostel/index.php"
            class="mt-6 inline-block rounded bg-indigo-600 px-5 py-3 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring"
          >
            Go Back Home
          </a>
        </div>
      </div>
      
</body>
</html>