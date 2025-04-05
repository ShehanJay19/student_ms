<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sipvimana MIS | Home</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <!--custom css -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
      </head>
   
   
      <body>

        <nav class="navbar navbar-expand-lg">
          <div class="container-fluid">
              <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="navbar-logo">
                </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ms-auto">
                      <li class="nav-item">
                          <a class="nav-link " aria-current="page" href="#">Home</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">Students</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">Teachers</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">Courses</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#contact">Contact</a>
                      </li>
                  </ul>
              </div>
          </div>
      </nav>

     <!-- Welcome Area -->
     <section id="welcome">
<div class="container mt-5">
    <h2 class="text-center">Welcome to Sipvimana MIS</h2>
    <div class="row align-items-center">
        <!-- Image Column -->
        <div class="col-md-6 text-center">
            <img src="{{ asset('images/building.jpg') }}" alt="Sipvimana" class="img-fluid" style="max-width: 100%; height: auto;">
        </div>
        <!-- Description Column -->
        <div class="col-md-6">
            
            <p class="text-center">
              Sipvimana Education Center is a leading academic institution located in the heart of Matale city, dedicated to empowering students through quality education and personalized learning experiences. The center offers a wide range of programs, including academic tutoring, language classes, and IT training, designed to meet the needs of students from primary to advanced levels. With a team of qualified instructors and a student-friendly environment, Sipvimana aims to inspire lifelong learning and academic excellence. Its mission is to nurture confident, skilled individuals who are prepared to face future challenges with knowledge and integrity.


            </p>
           
        </div>
        <!-- viwe Students  Column -->
        <div class="text-center">
            <h3 class="mt-4">Explore Our Students</h3>
            <a href="" class="btn btn-primary mb-3">View Students</a>
        </div>
    </div>
</div>
</section>
<!-- End Welcome Area -->

     <!-- Detail Area -->
     <section id="detail">
     <div class="row">
          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Total Teachers</h5>
                <p class="card-text display-4"></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Total Courses</h5>
                    <p class="card-text display-4"></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Total Students</h5>
                    <p class="card-text display-4"></p>
              </div>
            </div>
          </div>
         
        </div>
    </section>
        <!-- End Detail area -->

        <!--Contatct Area -->

        <section id="contact" class="contact-area">

            <p></p>
            <p></p>
            <p></p>
            <div class="container">
              <div class="row">
                <div class="col-lg-12 col-md-12 contact-title text-center">
                  <h2 class="title-text">Contact Me</h2>
                  <p>Feel free to reach out to me through any of the following platforms:</p>
                </div>
              </div>
              <div class="row contact-info text-center">
                <div class="col-lg-3 col-md-6">
                  <i class="fas fa-phone-alt"></i>
                  <h4>Phone</h4>
                  <p>+94 77 843 2116</p>
                </div>
                <div class="col-lg-3 col-md-6">
                  <i class="fas fa-envelope"></i>
                  <h4>Email</h4>
                  <p><a href="mailto:shehanjaya1921@gmail.com">shehanjaya1921@gmail.com</a></p>
                </div>
                </div>
            </div>
          </section>
        <!-- End Contact Area -->


     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
