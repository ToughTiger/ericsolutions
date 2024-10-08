<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>eRIC Solutions</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{URL::asset('assets/img/favicon.png')}}" rel="icon">
    <link href="{{URL::asset('assets/img/favicon.png')}}" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
          integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- Fonts -->

    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{URL::asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{URL::asset('assets/css/app.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/css/main.css')}}" rel="stylesheet">



    <!-- =======================================================
    * Template Name: Selecao
    * Template URL: https://bootstrapmade.com/selecao-bootstrap-template/
    * Updated: Aug 07 2024 with Bootstrap v5.3.3
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body class="index-page">
<header id="header" class="header d-flex align-items-center fixed-top dark-background">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="#" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="{{URL::asset('assets/img/logo-light.png')}}" height="200px" width="300px" alt="">
            {{--            <h1 class="sitename">Selecao</h1>--}}
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="/" class="active">Home</a></li>
                <li class="dropdown"><a href="#"><span>Company</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="/#about"><span>About</span></a></li>
                        <li><a href="/#team"><span>Our Team</span></a></li>
                        <li><a href="/#location"><span>Locations</span></a></li>
                        <li><a href="/#carrier"><span>Carrier</span></a></li>


                    </ul>
                </li>
                <li class="dropdown"><a href="#services"><span>Services</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="/clinical_operation"><span>Clinical Operation & Project Management</span></a></li>
                        <li><a href="/biostatistics"><span>Biostatistics</span></a></li>
                        <li><a href="/pharmacovigilance"><span>Pharmacovigilance</span></a></li>
                        <li><a href="/clinical_data"><span>Clinical Data Standard</span></a></li>
                        <li><a href="/data_management"><span>Data Management</span></a></li>
                        <li><a href="/medical_writing"><span>Medical Writing</span></a></li>
                        <li><a href="/etmf"><span>eTMF Services</span></a></li>

                    </ul>
                </li>
                <li class="dropdown"><a href="/#technology"><span>Technology</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="/edc"><span>Electronic Data Capture</span></a></li>
                        <li><a href="/ctms"><span>Clinical Trail Management Software</span></a></li>
                        <li><a href="/etmf_tech"><span>Electronic Trail Master File</span></a></li>
                        <li><a href="/irt"><span>Interactive Response technology</span></a></li>


                    </ul>
                </li>

                <li class="dropdown"><a href="/#technology"><span>A I Technology</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="/protocol"><span>Protocol Writer</span></a></li>
                        <li><a href="/csr"><span>CSR Writer</span></a></li>
                    </ul>
                </li>

                <li><a href="/posts">Blog</a></li>


                <li><a href="/contacts">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>
</header>

    <main class="main">

        {{ $slot }}


    </main>

<!-- Vendor JS Files -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="{{URL::asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{URL::asset('assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{URL::asset('assets/vendor/aos/aos.js')}}"></script>
<script src="{{URL::asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{URL::asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{URL::asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{URL::asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>


<!-- Main JS File -->
<script src="{{URL::asset('assets/js/main.js')}}"></script>


</body>

</html>
