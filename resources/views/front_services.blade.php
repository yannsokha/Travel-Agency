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
                    {{-- <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>Tourist</h1> --}}
                    <!-- <img src="{{asset('travel_agency')}}/img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
            </nav>
            {{-- @include('partials.') --}}
            <div class="container-fluid bg-primary py-5 mb-5 hero-header">
                <div class="container py-5">
                    <div class="row justify-content-center py-5">
                        <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                            <h1 class="display-3 text-white animated slideInDown">Services</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                    <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
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
        @include('partials.services')
    <!-- Service End -->


    <!-- Destination Start -->
        @include('partials.destintion')
    <!-- Destination Start -->


    <!-- Package Start -->
        @include('partials.packages')
    <!-- Package End -->


    <!-- Booking Start -->
        @include('partials.booking')
    <!-- Booking Start -->


    <!-- Process Start -->
        @include('partials.process')
    <!-- Process Start -->


    <!-- Team Start -->
        @include('partials.our_guides')
    <!-- Team End -->


    <!-- Testimonial Start -->
        @include('partials.testimonials')
    <!-- Testimonial End -->


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
