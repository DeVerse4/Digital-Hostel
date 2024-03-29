<?php include_once 'header.php'; ?>
<section style="z-index:-10;" id="home-sec">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="banner" style="background-image: url(./images/hostel1.png);"></div>
                <!-- <img src="./images/hostel1.png" class="img img-thumbnail d-block head-photo" alt=""> -->
                <div class="carousel-caption">
                    <h2><span>Aryabhatta Hostel</span></h2>
                    <h3>Forever Home.</h3>
                    <p>We understand that most of our students are moving away from home for the first time, so we
                        strive to make the transition as smooth as possible by providing comfortable, safe and homely
                        set-up within the campus</p>
                    <p>
                        <?php if ($id == "") { ?>
                        <a class="reg-btn" href="Registration/registration.php">Register</a>
                        <?php } ?>
                        <a href="#contact" class="contact-btn m-0">Contact</a>
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="banner" style="background-image: url(./images/hostel2.png);"></div>
                <!-- <img src="./images/hostel2.png" class="img img-thumbnail d-block head-photo" -->
                <!-- alt="'s Hostel"> -->
                <div class="carousel-caption ">
                    <h2><span>Kalpana Chawla Hostel</span></h2>
                    <h3>Forever Home.</h3>
                    <p>We understand that most of our students are moving away from home for the first time, so we
                        strive to make the transition as smooth as possible by providing comfortable, safe and homely
                        set-up within the campus</p>
                    <div class="btns">
                        <?php if ($id == "") { ?>
                        <a class="reg-btn" href="Registration/registration.php">Register</a>
                        <?php } ?>
                        <a class="contact-btn" href="#contact">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
            <span class="carousel-control-prev-icon" style="color: blue;" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>

</section>

<!-- services and facilities -->

<section class="facility-section">
    <div class="container-fluid">
        <div class="col-md-12 col-sm-12 col xs-12">
            <div class="section-title">
                <h2 class="h1-responsive font-weight-bold">Our Facilities</h2>
            </div>
        </div>
    </div>
    <div class="container ">
        <div class="facility row row-cols-1 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="images/wifi.png" style="height: 220px;" class="card-img-top" alt="" />
                    <div class="card-body">
                        <h5 class="card-title">Free Wifi</h5>
                        <p class="card-text">
                            24x7 free high speed Wi-Fi connectivity provided in all hostels.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="images/mess.jpg" style="height: 220px;" class="card-img-top" alt="" />
                    <div class="card-body">
                        <h5 class="card-title">Hostel food facility</h5>
                        <p class="card-text">Mess, canteen, RO water system, hot water supply through geysers in winter.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="images/security.jpg" style="height: 220px;" class="card-img-top" alt="" />
                    <div class="card-body">
                        <h5 class="card-title">Safety and Security</h5>
                        <p class="card-text">Separate residential facility for boys and girls within the campus.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="images/gym.jpg" style="height: 220px;" class="card-img-top" alt="" />
                    <div class="card-body">
                        <h5 class="card-title">Gymnasium</h5>
                        <p class="card-text">
                            Sports (indoor & outdoor) and Gym facility is also available.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="images/ground.jpg" style="height: 220px;" class="card-img-top" alt="" />
                    <div class="card-body">
                        <h5 class="card-title">Sports and Activity</h5>
                        <p class="card-text">Sports (indoor & outdoor) equipments and infrastructure. Sports event HPL
                            is organized every year.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="images/security.jpg" style="height: 220px;" class="card-img-top" alt="" />
                    <div class="card-body">
                        <h5 class="card-title">CCTV Surveillance</h5>
                        <p class="card-text">
                            CCTV cameras at entrances of all hostels and foyer inside the campus.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="images/electricity.jpg" style="height: 220px;" class="card-img-top" alt="" />
                    <div class="card-body">
                        <h5 class="card-title">24x7 electricity</h5>
                        <p class="card-text">24x7 electricity in all the hostels. Proper backup for electricity failure.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="images/room.jpg" style="height: 220px;" class="card-img-top" alt="" />
                    <div class="card-body">
                        <h5 class="card-title">Guest Room facility</h5>
                        <p class="card-text">
                            Guest room for parents / guardian / guest person(s) at reasonable charges.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- Videos -->
<section class="video-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h2 class="h1-responsive font-weight-bold">Glimpse of us</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12- col xs-12">
                <div class="video-area">
                    <iframe class="yt-vid" src="https://www.youtube.com/embed/lKfd6j1EBPU" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12- col-xs-12">
                <div class="video-area">
                    <iframe class="yt-vid" src="https://www.youtube.com/embed/HBbMk8_IZHc" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================ -->
<!-- FAQS  -->
<!-- ================ -->

<section>
    <div class="container faq">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h2 class="h1-responsive font-weight-bold">FAQs</h2>
                </div>
            </div>
        </div>
        <div class="panel-group faq-group" id="faqAccordion">
            <?php
            include_once 'admin.php';
            $x = fetchfaq();
            for ($i = 0; $i < mysqli_num_rows($x); $i++) {
                $faqrow = mysqli_fetch_row($x);
            ?>
            <div class="panel panel-default faq-panel">
                <div class="panel-heading accordion-toggle question-toggle collapsed faq-heading" data-toggle="collapse"
                    data-parent="#faqAccordion" data-target="#question<?php echo $faqrow[0]; ?>">
                    <h4 class="panel-title ">
                        <a class="ing d-flex justify-content-between"><span>Q
                                <?php echo $faqrow[0]; ?> :
                                <?php echo $faqrow[1]; ?>
                            </span><span><i id="caret" class="fa-solid fa-angle-down"></i></span></a>
                    </h4>
                </div>
                <div id="question<?php echo $faqrow[0]; ?>" class="panel-collapse collapse faq-answer m-4">
                    <div class="panel-body">
                        <p>
                            <?php echo $faqrow[2] ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<!-- ================ -->
<!-- TESTIMONIALS  -->
<!-- ================ -->

<section class="testimonial-section">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h2 class="h1-responsive font-weight-bold">Read trusted reviews from our Hostlers</h2>
                </div>
            </div>
        </div>
        <div class="testimonial-wrapper">
            <div class="testimonials">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="layer"></div>
                                <div class="content">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem sunt in
                                        consequuntur molestiae
                                    </p>
                                    <div class="rating">
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
                                    </div>
                                    <div class="details">
                                        <h3>Shujauddin Qadri <br><span>3rd year student</span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="layer"></div>
                                <div class="content">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </p>
                                    <div class="rating">
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
                                    </div>
                                    <div class="details">
                                        <h3>Shujauddin Qadri <br><span>3rd year student</span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="layer"></div>
                                <div class="content">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </p>
                                    <div class="rating">
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
                                    </div>
                                    <div class="details">
                                        <h3>Ahmad Kamran <br><span>3rd year student</span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="layer"></div>
                                <div class="content">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </p>
                                    <div class="rating">
                                        <div class="flex gap-0.5">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <h3>Gyan Prakash <br><span>3rd year student</span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="layer"></div>
                                <div class="content">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </p>
                                    <div class="rating">
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
                                    </div>
                                    <div class="details">
                                        <h3>Pritam Kumar <br><span>3rd year student</span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="js-prev1" class="swiper-button-prev"></div>
                <div id="js-next1" class="swiper-button-next"></div>
            </div>
        </div>
    </div>
</section>

<!--End Testimonial-->


<!-- Contact -->
<section class="contact-section" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h2 class="h1-responsive font-weight-bold">Contact us</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12- col xs-12">
                <div class="contact-form">
                    <form id="contact-form" name="contact-form" action="contactAction.php" method="POST">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <label for="name" class="">Your name</label>
                                    <input type="text" id="name" placeholder="Your name here" name="name"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <label for="email" class="">Your email</label>
                                    <input type="text" id="email" placeholder="vgi@vgi.com" name="email"
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <label for="subject" class="">Subject</label>
                                    <input type="text" id="subject" name="subject" placeholder="Subject"
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form">
                                    <label for="message">Message</label>
                                    <textarea type="text" id="message" placeholder="Message" name="message" rows="2"
                                        class="form-control md-textarea" style="resize: none;"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="text-center text-md-left">
                            <input type="submit" class="btn btn-primary" value="Send">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12- col-xs-12">
                <div class="map-area">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d224337.6852025422!2d77.49773912305412!3d28.531412787546984!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x652350c1411a5f55!2sVishveshwarya%20Group%20of%20Institutions%20(B.tech%20MBA%20B.Pharma%20B.ed%20Polytechnic%20etc%20Courses)!5e0!3m2!1sen!2sin!4v1667767246138!5m2!1sen!2sin"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include_once 'footer.php'; ?>