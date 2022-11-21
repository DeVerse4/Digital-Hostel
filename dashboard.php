<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <script src="https://kit.fontawesome.com/464630c8e0.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
    
    
    <title>Profile - Brand</title>
</head>

<body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Arya Bhatta Hostel</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-lg-o">
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Gallery</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                  Services
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Generate Pass</a>
                  <a class="dropdown-item" href="#">See your attendance</a>
               
              </li>
              <li class="nav-item ">
                <a href="#" class="login btn btn-primary" data-toggle="modal" data-target="#loginModal">Login</a>
              </li>
    
            </ul>
          </div>
        </div>
      </nav>
    <div id="wrapper"><br>
        
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Profile</h3>
                    <div class="row mb-3">
                        <div class="col-lg-4">
                            <div class="card mb-3">
                                <div class="card-body text-center shadow"><img class="rounded-circle mb-3 mt-4" src="pexels-pixabay-45201.jpg" width="160" height="160" />
                                    <div class="mb-3"><button class="btn btn-primary btn-sm" type="button">Change Photo</button></div>
                                </div>
                            </div>
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="text-primary fw-bold m-0">Projects</h6>
                                </div>
                                <div class="card-body"><label class="form-label" for="address"><strong>ATTENDANCE</strong><br/></label></div>
                                <div class="card-body"><label class="form-label" for="address"><strong>ROOM NUMBER</strong><br /></label></div>
                                <div class="card-body"><label class="form-label" for="address"><strong>FEE PAID </strong><br /></label></div>
                                <div class="card-body"></div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            
    
                                  
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow mb-3">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 fw-bold">Personal details</p>
                                        </div>
                                        <div class="card-body">
                                            <form>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="username"><strong>Username</strong></label><input id="username" class="form-control" type="text" placeholder="user.name" name="username" /></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="email"><strong>Email Address</strong></label><input id="email" class="form-control" type="email" placeholder="user@example.com" name="email" /></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="first_name"><strong>Name</strong></label><input id="first_name" class="form-control" type="text" placeholder="John" name="first_name" /></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="last_name"><strong>Father's Name</strong></label><input id="last_name" class="form-control" type="text" placeholder="Doe" name="last_name" /></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col">
                                                      <div class="mb-3"><label class="form-label" for="first_name"><strong>Mobile number</strong></label><input id="first_name" class="form-control" type="text" placeholder="+91" value="+91" name="first_name" /></div>
                                                  </div>
                                                
                                              </div>
                                                <div class="mb-3 mt-3"><button class="btn btn-primary btn-sm" type="submit">Save</button></div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card shadow">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 fw-bold">Contact</p>
                                        </div>
                                        <div class="card-body">
                                            <form>
                                                <div class="mb-3"><label class="form-label" for="address"><strong>Address</strong></label><input id="address" class="form-control" type="text" placeholder="Sunset Blvd, 38" name="address" /></div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="city"><strong>City</strong></label><input id="city" class="form-control" type="text" placeholder="Los Angeles" name="city" /></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="country"><strong>Country</strong></label><input id="country" class="form-control" type="text" placeholder="USA" name="country" /></div>
                                                    </div>
                                                </div>
                                                <div class="mb-3"><button class="btn btn-primary btn-sm" type="submit">Save</button></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <!--footer-->

            </div>
            
            
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
             <?php include 'footer.php'; ?>
