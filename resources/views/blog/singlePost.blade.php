<!DOCTYPE html>
<html lang="en">

<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DG3HYM0N5T"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-DG3HYM0N5T');
    </script>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title',$post->title) | Eric Solutions</title>
    <meta name="keywords" content="@yield('meta_keywords',$post->keywords)">
    <meta name="description" content="@yield('meta_description',$post->meta_description)">
    <link rel="canonical" href="{{url()->current()}}"/>

    <!-- Favicons -->
    <link href="{{URL::asset('assets/img/favicon.png')}}" rel="icon">
    <link href="{{URL::asset('assets/img/favicon.png')}}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{URL::asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/vendor/aos/aos.css" rel="stylesheet')}}">
    <link href="{{URL::asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{URL::asset('assets/css/app.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/css/main.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/css/normalize.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

    <!-- =======================================================
    * Template Name: Selecao
    * Template URL: https://bootstrapmade.com/selecao-bootstrap-template/
    * Updated: Aug 07 2024 with Bootstrap v5.3.3
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
    <?php
//        dd($post->author->name);
    $structuredData = [
        "@context" => "https://schema.org",
        "@type"=> "BlogPosting",
        "mainEntityOfPage"=> [
            "@type"=> "WebPage",
            "@id"=> "https://www.ericsolutions.com/posts/$post->title"
        ],
        "headline"=> $post->title,
        "description"=> $post->meta_description,
        "datePublished"=> $post->created_at,
        "dateModified"=> $post->updated_at,
        "author"=> [
            "@type"=> "Person",
            "name"=> $post->author->name,
            "url"=> "https://www.ericsolutions.com/users/$post->author_id"
        ],
        "publisher"=> [
            "@type"=> "Organization",
            "name"=> "Eric Solutions",
            "logo"=> [
                "@type"=> "ImageObject",
                "url"=> "https://www.ericsolutions.com/assets/img/logo-light.png"
            ]
        ],
        "articleBody"=> "As clinical trials continue to evolve, the way data is captured, managed, and analyzed is undergoing significant transformation...",
        "image"=> "https://www.ericsolutions.com/images/clinical-trial-trends-2024.jpg",
        "keywords"=> "clinical trial data management, AI in clinical trials, decentralized clinical trials, cloud-based CTMS, real-world data, data integration",
        "articleSection"=> "Clinical Trial Data Management, Technology Trends"

    ];


    ?>
    <script type="application/ld+json">
        {!! json_encode($structuredData, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) !!}
    </script>

</head>

<body class="index-page">

<header id="header" class="header d-flex align-items-center fixed-top dark-background">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="#" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="/assets/img/logo-light.png" width="100%" alt="">
            {{--            <h1 class="sitename">Selecao</h1>--}}
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="/" >Home</a></li>
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

                <li><a href="/posts">Blog</a></li>

                <li><a href="/contacts">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>
</header>


    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background">
            <div class="container position-relative">
                <h1>{{$post->title}}</h1>
                <p>{{$post->meta_description}}</p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="/posts"><strong>Blog</strong></a></li>
                        @foreach($post->categories as $category)
                            <li class="current">{{$category->name}}</li>
                        @endforeach
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <div class="container">
            <div class="row">

                <div class="col-lg-8">

                    <!-- Blog Details Section -->
                    <section id="blog-details" class="blog-details section">
                        <div class="container">

                            <article class="article">

                                <div class="post-img">
                                    <img src="{{URL::asset('storage/'.$post->image)}}" alt="{{$post->alt}}" class="img-fluid">
                                </div>

                                <h1 class="title">{{$post->title}}</h1>

                                <div class="meta-top">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">{{$post->author->name}}</a></li>
                                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2020-01-01">{{\Carbon\Carbon::parse($post->published_at)->format('j F, Y')}}</time></a></li>
                                        <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">{{$post->comments->count()}}</a></li>
                                    </ul>
                                </div><!-- End meta top -->

                                <div class="content">

                                       @markdown($post->content)

                                </div><!-- End post content -->

                                <div class="meta-bottom">
                                    <i class="bi bi-folder"></i>
                                    <ul class="cats">
                                        @foreach($post->categories as $category)
                                            <li><a href="#">{{$category->name}}</a></li>
                                        @endforeach

                                    </ul>

                                    <i class="bi bi-tags"></i>
                                    <ul class="tags">
                                        @foreach($post->tags as $tag)
                                            <li><a href="#">{{$tag->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div><!-- End meta bottom -->
                                <div class="text-success social-container">
                                    <div class="social-share">{!! $post->share_buttons !!}</div>
                                </div>
                            </article>

                        </div>
                    </section><!-- /Blog Details Section -->

                    <!-- Blog Comments Section -->
                    <section id="blog-comments" class="blog-comments section">

                        <div class="container">

                            <h4 class="comments-count">{{$post->comments->count()}} {{$post->comments->count() > 1 ? "comments" : "comment"}}</h4>

                            @foreach($comments as $comment)
                                <div id="comment-1" class="comment">
                                    <div class="d-flex">
{{--                                        <div class="comment-img"><img src="assets/img/blog/comments-1.jpg" alt=""></div>--}}
                                        <div>
                                            <h5><a href="">{{$comment->visitor->first_name}}</a></h5>
                                            <time datetime="2020-01-01">{{\Carbon\Carbon::parse($comment->created_at)->format('j F, Y')}}</time>
                                            <p>
                                                {{$comment->comment}}
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- End comment #1 -->
                            @endforeach

                        </div>

                    </section><!-- /Blog Comments Section -->

                    <!-- Comment Form Section -->
                    <section id="comment-form" class="comment-form section">
                        <div class="container">

                            <form action="/comments" method="POST">
                                @csrf
                                <h4>Post Comment</h4>
                                <p>Your email address will not be published. Required fields are marked * </p>
                                <div class="row">
                                    <div class="col form-group">
                                        <input name="post_id" type="hidden" value="{{$post->id}}" class="form-control" placeholder="Your Website">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <input name="first_name" type="text" class="form-control" placeholder="Your First Name*" required>
                                    </div>
                                    <div class="col form-group">
                                        <input name="last_name" type="text" class="form-control" placeholder="Your Last Name*" required>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input name="email" type="email" class="form-control" placeholder="Your Email*">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input name="phone" type="text" class="form-control" placeholder="Your Phone (Optional)" >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Post Comment</button>
                                </div>

                            </form>

                        </div>
                    </section><!-- /Comment Form Section -->

                </div>

                <div class="col-lg-4 sidebar">

                    <div class="widgets-container">

                        <!-- Blog Author Widget -->
                        <div class="blog-author-widget widget-item">

                            <div class="d-flex flex-column align-items-center">
                                <img src="{{URL::asset('storage/'.$post->author->image_url)}}" class="rounded-circle flex-shrink-0" alt="">
                                <h4><a href="{{'/author/'.$post->author_id}}">{{$post->author->name}}</a> </h4>
                                <div class="social-links">
                                    <a href="https://x.com/{{$post->author->social}}"><i class="bi bi-twitter-x"></i></a>
                                    <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                                    <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                                    <a href="https://instagram.com/#"><i class="biu bi-linkedin"></i></a>
                                </div>

                                <p>
                                    {{$post->author->bio}}
                                </p>

                            </div>
                        </div><!--/Blog Author Widget -->

                        <!-- Search Widget -->
                        <div class="search-widget widget-item">

                            <h3 class="widget-title">Search</h3>
                            <form action="">
                                <input type="text">
                                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                            </form>

                        </div><!--/Search Widget -->

                        <!-- Categories Widget -->
                        <div class="categories-widget widget-item">

                            <h3 class="widget-title">Categories</h3>
                            <ul class="mt-3">
                                @foreach($categories as $category)
                                    <li><a href="#">{{$category->name}}</a></li>
                                @endforeach


                            </ul>

                        </div><!--/Categories Widget -->

                        <!-- Recent Posts Widget -->
                        <div class="recent-posts-widget widget-item">

                            <h3 class="widget-title">Recent Posts</h3>

                            @foreach($posts as $post)
                                <div class="post-item">
                                    <h4><a href="/posts/{{$post->id}}">{{$post->title}}</a></h4>
                                    <time datetime="2020-01-01">{{\Carbon\Carbon::parse($post->published_at)->format('j F, Y')}}</time>
                                </div><!-- End recent post item-->
                            @endforeach


                        </div><!--/Recent Posts Widget -->

                        <!-- Tags Widget -->
                        <div class="tags-widget widget-item">

                            <h3 class="widget-title">Tags</h3>
                            <ul>
                                @foreach($tags as $tag)
                                    <li><a href="#">{{$tag->name}}</a></li>
                                @endforeach

                            </ul>

                        </div><!--/Tags Widget -->

                    </div>

                </div>

            </div>
        </div>

    </main>

{!! Toastr::message() !!}
<footer class="footer_box" id="location">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6">
                {{--    Address Div Start        --}}
                <div class="address">

                    <img class="logo" src="{{URL::asset('assets/img/logo-light.png')}}" alt="eric_logo">

                    <p>621 E Tropical Way Plantation FL 33317</p>
                    <p>Tel: +1-786-636-5556</p>
                    <p>Email: Info@ericsolutions.com</p>
                </div>
                {{--    Address Div Ends        --}}
                {{--   company Div starts--}}

            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="company_links">
                    <h3>Company</h3>
                    <ul>
                        <li><a href="/about">About</a></li>
                        <li><a href="/#services">Services</a></li>
{{--                        <li><a href="/technology">Technology</a></li>--}}
                        <li><a href="">Blog</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="company_links">
                    <h3>Legal</h3>
                    <ul>
                        <li><a href="/privacy">Privacy Policy</a></li>
                        <li><a href="/gdpr">GDPR Compliance</a></li>
                        <li><a href="/cookies">Cookie Policy</a></li>

                    </ul>

                </div>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="company_links">
                    <h3>Socials</h3>
                    <ul>
                        <li><a href=""><i class="fa-brands fa-facebook "></i></a></li>
                        <li><a href=""></a><i class="fa-brands fa-square-x-twitter "></i></li>
                        <li><a href=""></a><i class="fa-brands fa-youtube "></i></li>
                        <li><a href=""></a><i class="fa-brands fa-instagram "></i></li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="row mt-3">
            <div class="col text-center">
                <p class="mb-0 text-white">&copy; 2024 Eric Solutions. All Rights Reserved.</p>
            </div>
        </div>
    </div>
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="fa-solid fa-arrow-up text-white"></i></a>
</footer>
<!-- Vendor JS Files -->
<script src="{{URL::asset('assets/js/jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{URL::asset('assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{URL::asset('assets/vendor/aos/aos.js')}}"></script>
<script src="{{URL::asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{URL::asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{URL::asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{URL::asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>



<script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
<script>

    @if(Session::has('message'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.success("{{ session('message') }}");
    @endif



</script>
<!-- Main JS File -->
<script src="{{URL::asset('assets/js/main.min.js')}}"></script>
</body>
</html>
