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
                <a href="{{route('front.home')}}" class="nav-item nav-link{{(request()->is('/'))?'active' : ''}}">{{ trans('menu.home') }}</a>
                 <a href="{{route('front.about')}}about.html" class="nav-item nav-link{{(request()->is('/'))?'active' : ''}}">{{ trans('menu.about') }}</a>
                 <a href="{{route('front.services')}}" class="nav-item nav-link{{(request()->is('/'))?'active' : ''}}">{{ trans('menu.services') }}</a>
                 <a href="{{route('front.packages')}}" class="nav-item nav-link{{(request()->is('/'))?'active' : ''}}">{{ trans('menu.packages') }}</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle
                    {{(request()->is('destination')) ?'active' : ''}}
                    {{(request()->is('booking')) ?'active' : ''}}
                    {{(request()->is('guides')) ?'active' : ''}}
                    {{(request()->is('testimonial')) ?'active' : ''}}
                    " data-bs-toggle="dropdown">{{ trans('menu.pages') }}
                    <div class="dropdown-menu m-0">
                        <a href="{{route('front.desination') }}" class="dropdown-item {{(request()->is('desination')) ? 'active' : '' }}">Destination</a>
                         <a href="{{route('front.booking')}}" class="dropdown-item {{(request()->is('booking')) ? 'active' : '' }}">Booking</a>
                         <a href="{{route('front.guides')}}" class="dropdown-item{{(request()->is('guides')) ? 'active' : ''}}">Travel Guides</a>
                         <a href="{{route('front.testimonial')}}" class="dropdown-item{{(request()->is('testimonial')) ? 'active' : ''}}">Testimonial</a>
                         <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                {{-- <a href="{{routes('front.contac')}}" class="nav-item nav-link{{(request()->is('contact')) ? 'active' : ''}}">Contact</a> --}}
            </div>

            <?php  
        $flag = app()->getlocale();
                if($flag=="en"){
                    $flag="us";
                }
            ?>
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle               
            " data-bs-toggle="dropdown"><i
                    class="flag-icon flag-icon-{{ $flag=='kh'?'kh':'' }}{{ $flag=='us'?'us':'' }} mr-2"></i> {{
                $flag=='kh'?'ភាសាខ្មែរ':'' }}{{
                $flag=='us'?"English":'' }}</a>
            <div class="dropdown-menu m-0">
                <a href="{{url('lang/kh')}}" class="dropdown-item {{ $flag=='kh'?'active':'' }}                    
                    "><i class="flag-icon flag-icon-kh mr-2"></i> ភាសាខ្មែរ</a>
                <a href="{{url('lang/en')}}" class="dropdown-item {{ $flag=='us'?'active':'' }}"><i
                        class="flag-icon flag-icon-us mr-2"></i> English</a>
            </div>
        </div>
            <a href="" class="btn btn-primary rounded-pill py-2 px-4">Register</a>
        </div>
    </nav>

    {{-- <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white animated slideInDown">About Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div> --}}
</div>