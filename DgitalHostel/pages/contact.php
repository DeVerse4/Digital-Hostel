<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/5c57ccedd7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/styles/styles.css">
    <title>DIgital Hostel</title>
</head>

<body>

    <header aria-label="Site Header" class="bg-white">
        <div class="mx-auto flex h-16 max-w-screen-xl items-center gap-8 px-4 sm:px-6 lg:px-8">
            <a class="block rounded-md bg-gray-400 px-5 py-2 text-sm font-medium text-white transition" href="/">
                <i class="fa-sharp fa-solid fa-city"></i>
            </a>

            <div class="flex flex-1 items-center justify-end sm:justify-between">
                <nav aria-label="Site Nav" class="hidden sm:block">
                    <ul class="flex items-center gap-6 text-lg">
                        <li>
                            <a class="text-gray-500 transition hover:text-gray-500/75" href="/">
                                Home
                            </a>
                        </li>

                        <li>
                            <a class="text-gray-500 transition hover:text-gray-500/75" href="/error.php">
                                About
                            </a>
                        </li>

                        <li>
                            <a class="text-gray-500 transition hover:text-gray-500/75" href="/error.php">
                                Gallery
                            </a>
                        </li>

                        <li>
                            <a class="text-gray-500 transition hover:text-gray-500/75" href="/error.php">
                                Services
                            </a>
                        </li>
                    </ul>
                </nav>


                <div class="flex items-center gap-4">
                    <div class="sm:flex sm:gap-4">
                        <a class="block rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white transition hover:bg-teal-700" href="/error.html">
                            Login
                        </a>

                        <a class="hidden rounded-md bg-gray-100 px-5 py-2.5 text-sm font-medium text-teal-600 transition hover:text-teal-600/75 sm:block" href="/error.html">
                            Register
                        </a>
                    </div>

                    <button class="block rounded bg-gray-100 p-2.5 text-gray-600 transition hover:text-gray-600/75 md:hidden">
                        <i class="fa-solid fa-bars"></i>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <section class="bg-white">
        <div class="container px-6 py-12 mx-auto">
            <div class="lg:flex lg:items-center lg:-mx-6">
                <div class="lg:w-1/2 lg:mx-6">
                    <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-5xl">
                        Contact us for <br> more info
                    </h1>

                    <div class="mt-8 space-y-8 md:mt-8">
                        <p class="flex items-start -mx-2">
                            <i class="fa-solid fa-map-location-dot text-gray-400 text-xl"></i>

                            <span class="mx-2 -my-2 text-gray-700 w-72">
                                Gautam Budha Nagar, Ghaziabad,
                                Utter Pradesh, India
                                203207
                            </span>
                        </p>

                        <p class="flex items-start -mx-2">
                            <i class="fa-solid fa-phone text-gray-400 text-xl"></i>

                            <span class="mx-2 -my-2 text-gray-700 w-72">+91 1234567890</span>
                        </p>

                        <p class="flex items-start -mx-2">
                            <i class="fa-solid fa-envelope text-gray-400 text-xl"></i>

                            <span class="mx-2 -my-2 text-gray-700 w-72">vgihostel@mail.com</span>
                        </p>
                    </div>

                    <div class="mt-6 w-80 md:mt-8">
                        <h3 class="text-gray-600 ">Follow us</h3>

                        <div class="flex mt-4 -mx-1.5 ">
                            <a class="mx-1.5 text-gray-400 transition-colors duration-300 transform hover:text-blue-400" href="#">
                                <i class="fa-brands fa-twitter text-xl"></i>
                            </a>

                            <a class="mx-1.5 text-gray-400 transition-colors duration-300 transform hover:text-blue-600" href="#">
                                <i class="fa-brands fa-linkedin-in text-xl"></i>
                            </a>

                            <a class="mx-1.5 text-gray-400 transition-colors duration-300 transform hover:text-blue-500" href="#">
                                <i class="fa-brands fa-facebook-f text-xl"></i>
                            </a>

                            <a class="mx-1.5 text-gray-400 transition-colors duration-300 transform hover:text-red-500" href="#">
                                <i class="fa-brands fa-instagram text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="mt-8 lg:w-1/2 lg:mx-6">
                    <div class="w-full px-8 py-10 mx-auto overflow-hidden bg-white rounded-lg shadow-2xl lg:max-w-xl shadow-gray-300/50">
                        <h1 class="text-lg font-medium text-gray-700">What do you want to ask</h1>

                        <form class="mt-6">
                            <div class="flex-1">
                                <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Full Name</label>
                                <input type="text" placeholder="Gyan Prakash Kumar" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>

                            <div class="flex-1 mt-6">
                                <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Email address</label>
                                <input type="email" placeholder="email@gmail.com" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>

                            <div class="w-full mt-6">
                                <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Message</label>
                                <textarea class="block w-full h-32 px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md resize-none md:h-48 focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" placeholder="Message"></textarea>
                            </div>

                            <button class="w-full px-6 py-3 mt-6 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-500 rounded-md hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                                get in touch
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>