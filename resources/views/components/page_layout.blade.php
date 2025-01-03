
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WN9XWGKG');</script>
    <!-- End Google Tag Manager -->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DG3HYM0N5T"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-DG3HYM0N5T');
    </script>
    <!-- Start of HubSpot Embed Code -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/44950087.js"></script>
    <!-- End of HubSpot Embed Code -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta name="description" content="{{ $meta['description'] ?? 'Default description' }}">
    <meta name="keywords" content="{{ !empty($meta['keywords']) ? $meta['keywords'] : 'Default keywords' }}">
    <link rel="canonical" href="{{ url()->current() }}" />
    <title> {{ $meta['title'] ?? 'Default Title' }}</title>
    <!-- Favicons -->
    <link href="{{URL::asset('assets/img/favicon.png')}}" rel="icon">
    <link href="{{URL::asset('assets/img/favicon.png')}}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/fontawesome.min.css')}}">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->

    <link href="{{URL::asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/vendor/aos/aos.css" rel="stylesheet')}}">
    <link href="{{URL::asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <link href="{{URL::asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <link href="{{URL::asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/contacts.css')}}">
    <link href="{{URL::asset('assets/css/app.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/css/main.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/css/normalize.css')}}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- =======================================================
    * Template Name: Selecao
    * Template URL: https://bootstrapmade.com/selecao-bootstrap-template/
    * Updated: Aug 07 2024 with Bootstrap v5.3.3
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->

    <link rel="stylesheet" href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

    <?php

    $structuredData = [
        "@context" => "https://schema.org",
        "@type"=> "Product Page",
        "mainEntityOfPage"=> [
            "@type"=> "WebPage",
            "@id"=> "https://www.ericsolutions.com/".$meta['title']
        ],
        "headline"=> $meta['title'],
        "description"=>$meta['description'],
        "datePublished"=> "02/10/2024",
        "dateModified"=> "",
        "author"=> [
            "@type"=> "Person",
            "name"=> "Santosh Pandey",
            "url"=> "https://www.ericsolutions.com",
        ],
        "publisher"=> [
            "@type"=> "Organization",
            "name"=> "Eric Solutions",
            "logo"=> [
                "@type"=> "ImageObject",
                "url"=> "https://www.ericsolutions.com/assets/img/logo-light.png"
            ]
        ],
    "articleBody"=> $meta['description'],
//    "keywords"=> !empty $meta['keywords'] ? $meta['keywords'] : nullOrEmptyString(),
    "articleSection"=> $meta['title'],

    ];


    ?>
    <script type="application/ld+json">
        {!! json_encode($structuredData, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) !!}
    </script>

</head>

<body class="index-page">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WN9XWGKG"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<header id="header" class="header d-flex align-items-center fixed-top dark-background">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="/" class="logo d-flex align-items-center">
            <img src="{{URL::asset('assets/img/logo-light.png')}}"  width="100%" alt="eric_solutions">
        </a>


        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="/" >Home</a></li>
                <li class="dropdown"><a href="/"><span>Company</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="/#about"><span>About</span></a></li>
                        <li><a href="/#team"><span>Our Team</span></a></li>
                        <li><a href="/#location"><span>Locations</span></a></li>
                        <li><a href="/#career"><span>Career</span></a></li>


                    </ul>
                </li>
                <li class="dropdown"><a href="/#services"><span>Services</span> <i
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
                        <li><a href="/ctms"><span>Clinical Trial Management Software</span></a></li>
                        <li><a href="/etmf_tech"><span>Electronic Trial Master File</span></a></li>
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
<x-footer></x-footer>

<!-- Vendor JS Files -->

<!-- Vendor JS Files -->
<script src="{{URL::asset('assets/js/jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{URL::asset('assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{URL::asset('assets/vendor/aos/aos.js')}}"></script>
<script src="{{URL::asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{URL::asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{URL::asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{URL::asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>


<!-- Main JS File -->
<script src="{{URL::asset('assets/js/main.min.js')}}"></script>

    <script>
        $(document).ready(function() {

            // // Get URL parameters
            // const pathname = window.location.pathname;
            // console.log(pathname)

            // Make link active
            function setActiveLink(pathname) {
                let currentUrl = window.location.pathname;
                console.log(currentUrl)
                $('a').each(function() {
                    if ($(this).attr('href') === currentUrl) {
                        $(this).addClass('active');
                    }
                });
            }


            setActiveLink();

        });
</script>


</body>

</html>
