<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['user_name'])) {
    header('location:index.html');
}

?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fontawesome Icons CDN -->
    <script src="https://kit.fontawesome.com/5c57ccedd7.js" crossorigin="anonymous"></script>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Tailwind CSS  -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Icons CDN  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- External JS  -->
    <script src="script.js"></script>

    <!-- External CSS  -->
    <link rel="stylesheet" href="./styles/styles.css">
    <title>Digital Hostel</title>
</head>

<body>
    <nav class="p-5 bg-white shadow md:flex md:items-center md:justify-between">
        <div class="flex justify-between items-center ">
            <span class="text-2xl font-[Montserrat] cursor-pointer font-bold">
                VGI Hostel
            </span>

            <span class="text-3xl cursor-pointer mx-2 md:hidden block">
                <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
            </span>
        </div>

        <ul id="menu" class="md:flex md:items-center z-[-1] md:z-auto md:static absolute bg-white w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
            <li class="mx-4 my-6 md:my-0">
                <a href="/" class="text hover:text-[#FF8600] duration-500">HOME</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="./error.php" class="text hover:text-[#FF8600] duration-500">SERVICE</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="./error.php" class="text hover:text-[#FF8600] duration-500">ABOUT</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="./pages/contact.php" class="text hover:text-[#FF8600] duration-500">CONTACT</a>
            </li>

            <button class="bg-[#FF8600D1] text-white font-[Montserrat] duration-500 px-6 py-2 mx-4 hover:bg-[#FF8600] rounded ">
                Get started
            </button>
        </ul>
    </nav>

    <!-- ================ -->
    <!-- BANNER  -->
    <!-- ================ -->

    <section class="relative bg-[url('./images/hostel1.png')] bg-cover bg-center bg-no-repeat" id="MainContent">
        <div class="absolute inset-0 bg-white/75 sm:bg-transparent sm:bg-gradient-to-r sm:from-white/95 sm:to-white/25 z-0">
        </div>

        <div class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8">
            <div class="max-w-xl text-center sm:text-left">
                <h1 class="text-3xl font-extrabold sm:text-5xl">
                    VGI Hostel

                    <strong class="block font-extrabold text-rose-700">
                        Forever Home.
                    </strong>
                </h1>

                <p class="mt-4 max-w-lg sm:text-xl sm:leading-relaxed">
                    We understand that most of our students are moving away from home for the first time, so we strive to make the transition as smooth as possible by providing comfortable, safe and homely set-up within the campus
                </p>

                <div class="mt-8 flex flex-wrap gap-4 text-center">
                    <a href="#" class="block w-full rounded bg-[#ff8800] px-12 py-3 text-sm font-medium text-white shadow hover:bg-rose-700 focus:outline-none focus:ring active:bg-rose-500 sm:w-auto">
                        Register
                    </a>

                    <a href="./pages/contact.html" class="block w-full rounded bg-white px-12 py-3 text-sm font-medium text-rose-600 shadow hover:text-rose-700 focus:outline-none focus:ring active:text-rose-500 sm:w-auto">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ================ -->
    <!-- FACILITIES  -->
    <!-- ================ -->

    <section class="bg-gray-100 text-justify">
        <div class="max-w-screen px-4 py-16 sm:px-6 lg:px-8 items-center">
            <div class="max-w">
                <h2 class="text-3xl font-bold sm:text-4xl">What makes us special</h2>

                <p class="mt-4 max-w sm:text-xl sm:leading-relaxed">
                    The institute provides magnificent residential facilities offering a comprehensive range of facilities within the institute, separately for boys and girls. All the rooms have been designed to provide adequate moving space and ample air and light.
                    Residential facility is permitted on annual basis for students admitted for regular programmes for the duration of regular academic. The hostel is administered by chief warden and assisted by warden/assistant warden. Each room is provided with furniture needed by a student i.e. bed, table, chair, cupboard, etc. Hostel rooms are allotted on "first come first serve basis".
                </p>
            </div>
            <div class="mt-2">
                <h3 class="text-2xl font-bold sm:text-2xl underline underline-offset-4">
                    FACILITIES
                </h3>
                <ol class="gradient-list">
                    <li class="m-2">
                        Separate residential facility for boys and girls within the campus.
                    </li>
                    <li class="m-2">
                        An easygoing and friendly environment.
                    </li>
                    <li class="m-2">
                        24x7 Wi-Fi connectivity provided in all hostels.
                    </li>
                    <li class="m-2">
                        Mess, canteen, RO water system, hot water supply through geysers in winter.
                    </li>
                    <li class="m-2">
                        Guest room for parents / guardian / guest person(s) at reasonable charges.
                    </li>
                    <li class="m-2">
                        24x7 electricity and water supply in all the hostels.
                    </li>
                    <li class="m-2">
                        CCTV cameras at entrances of all hostels and foyer inside the campus.
                    </li>
                    <li class="m-2">
                        Sports (indoor & outdoor) and Gym facility is also available.
                    </li>
                    <li class="m-2">
                        Gymnasium
                    </li>
                    <li class="m-2">
                        Events and Activities
                    </li>
                </ol>
            </div>
            <div class="mt-4">
                <h3 class="text-2xl font-bold sm:text-2xl underline underline-offset-4">
                    Hostel food facility
                </h3>
                <ol class="gradient-list">
                    <li class="m-2">
                        Modern Mess to cater to students' needs
                    </li>
                    <li class="m-2">
                        Nutritions, hygienic and delicious vegetarian and non-vegetarian food provided.
                    </li>
                    <li class="m-2">
                        A lot of variety in the Menu.
                    </li>
                    <li class="m-2">
                        Nutritions Menu is well appreciated by the hostel inmates.
                    </li>
                </ol>
            </div>
            <div class="mt-4">
                <h3 class="text-2xl font-bold sm:text-2xl underline underline-offset-4">
                    Safety and Security
                </h3>
                <p class="mt-4 max-w sm:text-xl sm:leading-relaxed">
                    The institute ensures the safety and security of the students in the hostels through a dedicated team of security officers and personnel who work for the same. There are security guards who take care that proper decorum is maintained in the campus and are there to assist the students in case of any emergency Conditions of availing Residential Facility.
                </p>
                <ol class="gradient-list">
                    <li class="m-2">
                        The student should not paste any poster or painting on the walls of rooms or at other places in and outside residential premises.
                    </li>
                    <li class="m-2">
                        The entrance of outsiders in the residential accommodation will be restricted and entry and/or stay of parents/guardian or any other visitor (if authorized)will be subject to the permission of warden and other concerned authorities of the College.
                    </li>
                    <li class="m-2">
                        Students having complaints regarding mess should report to the Warden, Principal and A/O. But they are not allowed to indulge in accumulating the mess or strike.
                    </li>
                    <li class="m-2">
                        All Hostel gates will be closed at 9.00 a.m. and opened at 4.15 p.m. during the college days. In between, students are not allowed to enter the hostel. All hostel gates will be closed at 8.30 p.m. daily.
                    </li>
                    <li class="m-2">
                        Students themselves are responsible for the cleanliness of their rooms/apartments. However the washrooms and corridors will be cleaned by the housekeeping staff on periodical basis.
                    </li>
                    <li class="m-2">
                        Student should be present in their respective rooms when the attendance is taken during study hours. Absentees will be fined.
                    </li>
                    <li class="m-2">
                        Students are not to damage any property inside the residential premises.
                    </li>
                    <li class="m-2">
                        Students with genuine reason are allowed to go out even after 7p.m. to 8 p.m. with the warden's permission.
                    </li>
                </ol>
            </div>
        </div>
    </section>

    <!-- ================ -->
    <!-- TESTIMONIALS  -->
    <!-- ================ -->

    <section class="bg-gray-100 mt-8">
        <div class="mx-auto max-w-[1340px] px-4 py-18 sm:px-6 sm:py-24 lg:mr-0 lg:pl-8 lg:pr-0">
            <div class="max-w-7xl items-end justify-between sm:flex sm:pr-6 lg:pr-8">
                <h2 class="max-w-xl text-4xl font-bold sm:text-5xl">
                    Read trusted reviews from our Hostlers
                </h2>

                <div class="mt-8 flex lg:mt-0">
                    <button class="prev-button text-pink-600 focus:text-pink-400 focus:outline-none">
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>

                    <button class="next-button ml-3 text-pink-600 focus:text-pink-400 focus:outline-none">
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                </div>
            </div>

            <div class="-mx-6 mt-8 lg:col-span-2 lg:mx-0">
                <div class="swiper-container !overflow-hidden">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <blockquote class="flex h-full flex-col justify-between bg-white p-12">
                                <div>
                                    <div class="flex gap-0.5">
                                        <span class=" p-0.5">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        <span class=" p-0.5">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        <span class=" p-0.5">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        <span class=" p-0.5">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        <span class=" p-0.5">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                    </div>

                                    <div class="mt-4">
                                        <h3 class="text-2xl font-bold text-pink-600 sm:text-3xl">
                                            Lorem ipsum dolor sit amet.
                                        </h3>

                                        <p class="mt-4 text-lg text-gray-600">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Ipsam cumque recusandae dolorum porro, quasi sunt
                                            necessitatibus dolorem ab laudantium vel.
                                        </p>
                                    </div>
                                </div>

                                <footer class="mt-8 text-gray-500">- Pritam Kumar</footer>
                            </blockquote>
                        </div>

                        <div class="swiper-slide">
                            <blockquote class="flex h-full flex-col justify-between bg-white p-12">
                                <div>
                                    <div class="flex gap-0.5">
                                        <span class=" p-0.5">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        <span class=" p-0.5">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        <span class=" p-0.5">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        <span class=" p-0.5">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        <span class=" p-0.5">
                                            <i class="fa-solid fa-star-half-stroke"></i>
                                        </span>
                                    </div>

                                    <div class="mt-4">
                                        <h3 class="text-2xl font-bold text-pink-600 sm:text-3xl">
                                            Lorem ipsum dolor sit amet.
                                        </h3>

                                        <p class="mt-4 text-lg text-gray-600">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Ipsam cumque recusandae dolorum porro, quasi sunt
                                            necessitatibus dolorem ab laudantium vel.
                                        </p>
                                    </div>
                                </div>

                                <footer class="mt-8 text-gray-500">- Shujauddin Qadri</footer>
                            </blockquote>
                        </div>

                        <div class="swiper-slide">
                            <blockquote class="flex h-full flex-col justify-between bg-white p-12">
                                <div>
                                    <div class="flex gap-0.5">
                                        <span class=" p-0.5">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        <span class=" p-0.5">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        <span class=" p-0.5">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        <span class=" p-0.5">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        <span class=" p-0.5">
                                            <i class="fa-regular fa-star"></i>
                                        </span>
                                    </div>

                                    <div class="mt-4">
                                        <h3 class="text-2xl font-bold text-pink-600 sm:text-3xl">
                                            Lorem ipsum dolor sit amet.
                                        </h3>

                                        <p class="mt-4 text-lg text-gray-600">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Ipsam cumque recusandae dolorum porro, quasi sunt
                                            necessitatibus dolorem ab laudantium vel.
                                        </p>
                                    </div>
                                </div>

                                <footer class="mt-8 text-gray-500">- Gyan Prakash</footer>
                            </blockquote>
                        </div>

                        <div class="swiper-slide">
                            <blockquote class="flex h-full flex-col justify-between bg-white p-12">
                                <div>
                                    <div class="flex gap-0.5">
                                        <span class=" p-0.5">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        <span class=" p-0.5">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        <span class=" p-0.5">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        <span class=" p-0.5">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        <span class=" p-0.5">
                                            <i class="fa-solid fa-star-half-stroke"></i>
                                        </span>
                                    </div>

                                    <div class="mt-4">
                                        <h3 class="text-2xl font-bold text-pink-600 sm:text-3xl">
                                            Lorem ipsum dolor sit amet.
                                        </h3>

                                        <p class="mt-4 text-lg text-gray-600">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Ipsam cumque recusandae dolorum porro, quasi sunt
                                            necessitatibus dolorem ab laudantium vel.
                                        </p>
                                    </div>
                                </div>

                                <footer class="mt-8 text-gray-500">- Ahmad Kamran</footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================ -->
    <!-- FOOTER  -->
    <!-- ================ -->

    <footer class="bg-gray-100 border-t-[2px]">
        <div class="relative mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8 lg:pt-24">
            <div class="absolute top-2 right-4 sm:top-6 sm:right-6 lg:top-8 lg:right-8">
                <a class="inline-block rounded-full bg-[#27187E] p-2 text-white shadow transition sm:p-3 lg:p-4" href="#MainContent">

                    <i class="fa-solid fa-chevron-up"></i>
                </a>
            </div>

            <div class="lg:flex lg:items-end lg:justify-between">
                <div>
                    <div class="flex justify-center text-[#27187E] lg:justify-start">
                        <p class="text-3xl font-extrabold sm:text-5xl">
                            VGI Hostel
                        </p>
                    </div>

                    <p class="mx-auto mt-6 max-w-md text-center leading-relaxed text-gray-500 lg:text-left">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt
                        consequuntur amet culpa cum itaque neque.
                    </p>
                </div>

                <nav class="mt-12 lg:mt-0">
                    <ul class="flex flex-wrap justify-center gap-6 md:gap-8 lg:justify-end lg:gap-12">
                        <li>
                            <a class="text-gray-700 transition hover:text-gray-700/75" href="/">
                                Home
                            </a>
                        </li>

                        <li>
                            <a class="text-gray-700 transition hover:text-gray-700/75" href="/">
                                About
                            </a>
                        </li>

                        <li>
                            <a class="text-gray-700 transition hover:text-gray-700/75" href="/">
                                Services
                            </a>
                        </li>

                        <li>
                            <a class="text-gray-700 transition hover:text-gray-700/75" href="/">
                                Gallery
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <p class="mt-12 text-center text-sm text-gray-500 lg:text-right">
                Copyright &copy; 2022. All rights reserved.
            </p>
        </div>
    </footer>
</body>

</html>