<?php include 'header.php' ?>

<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }

  .b-example-divider {
    height: 3rem;
    background-color: rgba(0, 0, 0, .1);
    border: solid rgba(0, 0, 0, .15);
    border-width: 1px 0;
    box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
  }

  .b-example-vr {
    flex-shrink: 0;
    width: 1.5rem;
    height: 100vh;
  }

  .bi {
    vertical-align: -.125em;
    fill: currentColor;
  }

  .nav-scroller {
    position: relative;
    z-index: 2;
    height: 2.75rem;
    overflow-y: hidden;
  }

  .nav-scroller .nav {
    display: flex;
    flex-wrap: nowrap;
    padding-bottom: 1rem;
    margin-top: -1px;
    overflow-x: auto;
    text-align: center;
    white-space: nowrap;
    -webkit-overflow-scrolling: touch;
  }

  .about-warden .col-lg-4 {
    margin-bottom: 1.5rem;
    text-align: center;
  }
</style>
<main>

  <div class="container-fluid">
    <div class="row">
      <div class="col-12 mb-5">
        <div class="image" style="height: 500px; width: 100%; background-image:url(./images/hostel1.png); background-repeat: no-repeat; background-size: cover;">
          <div class="overlapText f-flex justify-content-center align-items-center" style="padding-top: 15%;">
            <h1 class="text-center text-white font-weight-bold">About Us</h1>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container about-warden">

    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette ">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">Dr. V. R. Mishra<br><span class="text-muted">Director VGI</span></h2>
        <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius, quasi! Alias, iusto nisi, natus aperiam dolorem eaque nulla vel voluptas doloribus tenetur quod ipsa error. Provident iusto cum praesentium magni?
        </p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="/Digital-Hostel/images/director.jpeg" height="300" class="rounded" style="box-shadow: 0 0 0.8rem 0 #555;" alt="Director VGI">
        <title>Dr. V. R. Mishra</title>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Prabodh Dwivedi <br>
          <span class="text-muted"> Chief Warden, VGI Hostels</span>
        </h2>
        <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius, quasi! Alias, iusto nisi, natus aperiam dolorem eaque nulla vel voluptas doloribus tenetur quod ipsa error. Provident iusto cum praesentium magni?
        </p>
      </div>
      <div class="col-md-5">
        <title>Cheif Warden</title>
        <img src="/Digital-Hostel/images/chiefWarden.png" class=" rounded" height="300" style="box-shadow: 0 0 0.8rem 0 #555;" alt="Arya Bhatta Hostel Warden">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">Mr. R.B. Patel<br><span class="text-muted">Warden, Arya Bhatta Hostel </span></h2>
        <p class="lead"><strong>Qualification:</strong>M.Tech(ME)<br>
          <strong>Designation:</strong>Assistant professor in Vishveshwarya Institute of Polytechnic<br>
        </p>
      </div>
      <div class="col-md-5 order-md-1">
        <title>Arya Bhatta Hostel Warden</title>
        <img src="/Digital-Hostel/images/boys-warden.jpeg" class=" rounded" height="300" style="box-shadow: 0 0 0.8rem 0 #555;" alt="Arya Bhatta Hostel Warden">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Anita Teotia <br><span class="text-muted">Warden, Kalpana Chawla Hostel</span></h2>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore voluptatem veniam vel, nesciunt a ab suscipit animi ullam harum eligendi.</p>
      </div>
      <div class="col-md-5">
        <title>Kalpana Chawla Hostel Warden</title>
        <img src="/Digital-Hostel/images/girls-warden.jpeg" class=" rounded" height="300" style="box-shadow: 0 0 0.8rem 0 #555;" alt="Kalpana Chawla Hostel Warden">
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- Three columns of text below the carousel -->
    <h2 class="text-center">Developer Team: <b>DeVerse</b> </h2>
    <div class="row">
      <div class="col-md-3">
        <img src="/Digital-Hostel/images/default.png" style="border-radius: 50%;" alt="">
        <h4 class="fw-normal">Gyan Prakash</h4>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere, iusto.</p>
        <p>
          <a href="https://www.instagram.com/_i_gyan" class="me-4 link-secondary">
            <i class="fab fa-instagram fa-xl mr-2"></i>
          </a>
          <a href="https://www.linkedin.com/in/gyan-prakash-kumar" class="me-4 link-secondary">
            <i class="fab fa-linkedin fa-xl mr-2"></i>
          </a>
        </p>
      </div><!-- /.col-md-3 -->
      <div class="col-md-3">
        <img src="/Digital-Hostel/images/default.png" style="border-radius: 50%;" alt="">
        <h4 class="fw-normal">Shujauddin Qadri</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, libero.</p>
        <p>
          <a href="https://www.instagram.com/qadri81" class="me-4 link-secondary">
            <i class="fab fa-instagram fa-xl mr-2"></i>
          </a>
          <a href="https://www.linkedin.com/in/shqadri/" class="me-4 link-secondary">
            <i class="fab fa-linkedin fa-xl mr-2"></i>
          </a>
        </p>
      </div><!-- /.col-md-3 -->
      <div class="col-md-3">
        <img src="/Digital-Hostel/images/default.png" style="border-radius: 50%;" alt="">
        <h4 class="fw-normal">Ahmad Kamran</h4>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor, dolorum.</p>
        <p>
          <a href="https://www.instagram.com/_ahmad_kamran" class="me-4 link-secondary">
            <i class="fab fa-instagram fa-xl mr-2"></i>
          </a>
          <a href="https://www.linkedin.com/in/ahmad-kamran" class="me-4 link-secondary">
            <i class="fab fa-linkedin fa-xl mr-2"></i>
          </a>
        </p>
      </div><!-- /.col-md-3 -->
      <div class="col-md-3">
        <img src="/Digital-Hostel/images/default.png" style="border-radius: 50%;" alt="">
        <h4 class="fw-normal">Pritam Kumar</h4>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor, dolorum.</p>
        <p>
          <a href="https://www.instagram.com/pritam2620" class="me-4 link-secondary">
            <i class="fab fa-instagram fa-xl mr-2"></i>
          </a>
          <a href="https://www.linkedin.com/in/pritam1708" class="me-4 link-secondary">
            <i class="fab fa-linkedin fa-xl mr-2"></i>
          </a>
        </p>
      </div><!-- /.col-md-3 -->
    </div><!-- /.row -->

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->
</main>

<?php include 'footer.php' ?>