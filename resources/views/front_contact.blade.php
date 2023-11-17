<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tourist - Travel Agency HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('travel_agency')}}/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{asset('travel_agency')}}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{asset('travel_agency')}}/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('travel_agency')}}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('travel_agency')}}/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
        @include('partials.top_navbar')
    <!-- Topbar End -->


    <!-- Navbar & Hero Start -->
        @include('partials.navbar')
        <div class="container-fluid position-relative p-0">
          <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
              <a href="" class="navbar-brand p-0">
                  <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>Tourist</h1>
                  <!-- <img src="img/logo.png" alt="Logo"> -->
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                  <span class="fa fa-bars"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarCollapse">
                  <div class="navbar-nav ms-auto py-0">
                      <a href="index.html" class="nav-item nav-link">Home</a>
                      <a href="about.html" class="nav-item nav-link">About</a>
                      <a href="service.html" class="nav-item nav-link">Services</a>
                      <a href="package.html" class="nav-item nav-link">Packages</a>
                      <div class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                          <div class="dropdown-menu m-0">
                              <a href="destination.html" class="dropdown-item">Destination</a>
                              <a href="booking.html" class="dropdown-item">Booking</a>
                              <a href="team.html" class="dropdown-item">Travel Guides</a>
                              <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                              <a href="404.html" class="dropdown-item">404 Page</a>
                          </div>
                      </div>
                      <a href="contact.html" class="nav-item nav-link active">Contact</a>
                  </div>
                  <a href="" class="btn btn-primary rounded-pill py-2 px-4">Register</a>
              </div>
          </nav>
  
          <div class="container-fluid bg-primary py-5 mb-5 hero-header">
              <div class="container py-5">
                  <div class="row justify-content-center py-5">
                      <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                          <h1 class="display-3 text-white animated slideInDown">Contact Us</h1>
                          <nav aria-label="breadcrumb">
                              <ol class="breadcrumb justify-content-center">
                                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                                  <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                  <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                              </ol>
                          </nav>
                      </div>
                  </div>
              </div>
          </div>
      </div>
        
    <!-- Navbar & Hero End -->


    <!-- About Start -->
        {{-- @include('partials.about') --}}
    <!-- About End -->


    <!-- Service Start -->
        {{-- @include('partials.services') --}}
    <!-- Service End -->


    <!-- Destination Start -->
        {{-- @include('partials.destintion') --}}
    <!-- Destination Start -->


    <!-- Package Start -->
        {{-- @include('partials.packages') --}}
    <!-- Package End -->


    <!-- Booking Start -->
        {{-- @include('partials.booking') --}}
    <!-- Booking Start -->


    <!-- Process Start -->
        {{-- @include('partials.process') --}}
    <!-- Process Start -->


    <!-- Team Start -->
        {{-- @include('partials.our_guides') --}}
    <!-- Team End -->


    <!-- Testimonial Start -->
        {{-- @include('partials.testimonials') --}}
    <!-- Testimonial End -->

<!-- Contact Start -->
     <div class="container-xxl py-5">
     <div class="container">
         <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
             <h6 class="section-title bg-white text-center text-primary px-3">Contact Us</h6>
             <h1 class="mb-5">Contact For Any Query</h1>
         </div>
         <div class="row g-4">
             <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                 <h5>Get In Touch</h5>
                 <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos</p>
                 <div class="d-flex align-items-center mb-4">
                     <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                         <i class="fa fa-map-marker-alt text-white"></i>
                     </div>
                     <div class="ms-3">
                         <h5 class="text-primary">Office</h5>
                         <p class="mb-0">123 Street, New York, USA</p>
                     </div>
                 </div>
                 <div class="d-flex align-items-center mb-4">
                     <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                         <i class="fa fa-phone-alt text-white"></i>
                     </div>
                     <div class="ms-3">
                         <h5 class="text-primary">Mobile</h5>
                         <p class="mb-0">+012 345 67890</p>
                     </div>
                 </div>
                 <div class="d-flex align-items-center">
                     <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                         <i class="fa fa-envelope-open text-white"></i>
                     </div>
                     <div class="ms-3">
                         <h5 class="text-primary">Email</h5>
                         <p class="mb-0">info@example.com</p>
                     </div>
                 </div>
             </div>
             <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                 <iframe class="position-relative rounded w-100 h-100"
                     src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                     frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
                     tabindex="0"></iframe>
             </div>
             <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                 <form>
                     <div class="row g-3">
                         <div class="col-md-6">
                             <div class="form-floating">
                                 <input type="text" class="form-control" id="name" placeholder="Your Name">
                                 <label for="name">Your Name</label>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="form-floating">
                                 <input type="email" class="form-control" id="email" placeholder="Your Email">
                                 <label for="email">Your Email</label>
                             </div>
                         </div>
                         <div class="col-12">
                             <div class="form-floating">
                                 <input type="text" class="form-control" id="subject" placeholder="Subject">
                                 <label for="subject">Subject</label>
                             </div>
                         </div>
                         <div class="col-12">
                             <div class="form-floating">
                                 <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                 <label for="message">Message</label>
                             </div>
                         </div>
                         <div class="col-12">
                             <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                         </div>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>
 <!-- Contact End -->


    <!-- Footer Start -->
        @include('partials.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('travel_agency')}}/lib/wow/wow.min.js"></script>
    <script src="{{asset('travel_agency')}}/lib/easing/easing.min.js"></script>
    <script src="{{asset('travel_agency')}}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{asset('travel_agency')}}/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{asset('travel_agency')}}/lib/tempusdominus/js/moment.min.js"></script>
    <script src="{{asset('travel_agency')}}/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="{{asset('travel_agency')}}/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{asset('travel_agency')}}/js/main.js"></script>
</body>

</html>
