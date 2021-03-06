<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <title>Care.BD</title>
  </head>
  <body>
 
    <!--  Navbar  -->
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-0 fixed-top">
      <div class="container">
        <a href="index.php" class="navbar-brand">
          <img style="width: 145px; height: 90px;" src="img/Artboard – 1.svg" alt="Company Logo">
        </a>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navmenu"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navmenu">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a href="index.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Services</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Team</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Newsfeed</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Activities</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Gallery</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">About Us</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Contact</a>
            </li>
            <li class="nav-item">
              <a href="signin.php" class="nav-link">Sign In</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>



    <!--  Showcase  -->
    <section class="bg-light text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
      <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between">
          <div>
            <h1><span class="text-warning">
              
            </span></h1>
           
            <div class="topFixedBanner">
              <img src="img/Logo.png" style="width: 1230px; height: 400px; transform: translateX(-65px);" alt="Company Banner">
            </div>
            
          </div>
          <img class="img-fluid w-50 d-none d-sm-block" src="img/" alt="">
        </div>
      </div>
    </section>




    <!--  Boxes Starting  -->

    <!-- <section class="p-5">
      <div class="container">
        <div class="row text-center g-4">
          <div class="col-md">
            <div class="card bg-dark text-light">
              <div class="card-body text-center">
                <div class="h1 mb-3">
                <i class="bi bi-laptop"></i>
                </div>
                <h3 class="card-title mb-3"></h3>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia incidunt tempora velit quos quas ipsum.
                </p>
                <a href="#" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card bg-secondary text-light">
              <div class="card-body text-center">
                <div class="h1 mb-3">
                <i class="bi bi-person-square"></i>
                </div>
                <h3 class="card-title mb-3"></h3>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia incidunt tempora velit quos quas ipsum.
                </p>
                <a href="#" class="btn btn-dark">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card bg-dark text-light">
              <div class="card-body text-center">
                <div class="h1 mb-3">
                <i class="bi bi-people"></i>
                </div>
                <h3 class="card-title mb-3"></h3>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia incidunt tempora velit quos quas ipsum.
                </p>
                <a href="#" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!--  Boxes Ending  -->


<?php

$a = "Some freakin' ";
?>
    <!--  Services -->


    <h2 class="text-center mt-5 pb-2">Our Services</h2>

    
    <Section id="services" class="p-5 bg-secondary">
      <div class="container">
        <div class="row g-4">

          <div class="col-md-6 col-lg-4">
            <div class="card bg-light">
              <div class="card-body text-center">
                <img src="" class="rounded-cirle mb-3" alt="">
                <h3 class="card-title mb-3">Cyber Helpline</h3>
                <p class="card-text"><?php echo $a; ?>Cyber Helpline</p>           
              </div>
            </div>
          </div>

        </div>
      </div>
    </Section>

    <Section id="services" class="p-5 bg-white">
      <div class="container">
        <div class="row g-4">

          <div class="col-md-6 col-lg-4">
            <div class="card bg-light">
              <div class="card-body text-center">
                <img src="" class="rounded-cirle mb-3" alt="">
                <h3 class="card-title mb-3">Food for Children</h3>
                <p class="card-text"><?php echo $a; ?>Food for Children</p>           
              </div>
            </div>
          </div>

        </div>
      </div>
    </Section>

   <Section id="services" class="p-5 bg-secondary">
      <div class="container">
        <div class="row g-4">

          <div class="col-md-6 col-lg-4">
            <div class="card bg-light">
              <div class="card-body text-center">
                <img src="" class="rounded-cirle mb-3" alt="">
                <h3 class="card-title mb-3">IT Support</h3>
                <p class="card-text"><?php echo $a; ?>IT Support</p>           
              </div>
            </div>
          </div>

        </div>
      </div>
    </Section>



    <!--  Footer  -->

    <div class="container-fluid text-center footerSection bg-dark">
      <div class="row p-5">
        <h1 class="text-white">Join Us</h1>
        <div class="col-lg-3 col-md-6 col-sm-12 p-3 text-justify">
          <a href="#"><i class="fab fa-facebook fa-3x" style="color: white;"></i></a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 p-3 text-justify">
          <a href="#"><i class="fab fa-twitter-square fa-3x" style="color: white;"></i></a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 p-3 text-justify">
          <a href="#"><i class="fab fa-linkedin fa-3x" style="color: white;"></i></a> 
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 p-3 text-justify">
          <a href="#"><i class="fab fa-instagram-square fa-3x" style="color: white;"></i></a> 
        </div>
      </div>
      <div class="row pb-4">
          <div class="col-lg-4 col-md-6 col-sm-12 text-justify text-white">
              <h1 class="serviceName">Reach Us</h1>
              <a href="#"><i class="bi bi-envelope text-dark mx-2"></i>contact@carebd.com</a>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 text-justify text-white">
              <h1 class="serviceName">Information</h1>
              <a href="#">About Us</a><br>
              <a href="#">Policy Networks</a><br>
              <a href="#">Contact Us</a>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 text-justify text-white">
              <h1 class="serviceName">Legal</h1>
              <a href="#">Refund Policy</a><br>
              <a href="#">Terms and Condition</a><br>
              <a href="#">Privacy Policy</a>
          </div>
      </div>
  </div>


    <footer class="p-2 bg-dark text-white text-center position-relative">
     <div class="container">
         <p class="pt-3 lead">Copyright &copy; 2021 S.M. Faizul Islam Fair</p>

         <a href="#" style="transform: translateX(-25px);" class="position-absolute bottom-0 end-0 p-4">
           <i class="bi bi-arrow-up-circle h1"></i>
         </a>
     </div>
    </footer>


    

 

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"
    ></script>

  </body>
</html>