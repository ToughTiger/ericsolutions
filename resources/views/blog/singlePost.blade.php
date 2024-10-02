<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title',$post->title)</title>
    <meta name="keywords" content="@yield('meta_keywords',$post->keywords)">
    <meta name="description" content="@yield('meta_description',$post->meta_description)">
    <link rel="canonical" href="{{url()->current()}}"/>

    <!-- Favicons -->
    <link href="{{URL::asset('assets/img/favicon.png')}}" rel="icon">
    <link href="{{URL::asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
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

    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

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
            <img src="{{URL::asset('assets/img/logo-light.png')}}" width="100%" alt="">
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

                <li><a href="/posts">Blog</a></li>

                <li><a href="#location">Contact</a></li>
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
                                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2020-01-01">{{$post->published_at}}</time></a></li>
                                        <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">12 Comments</a></li>
                                    </ul>
                                </div><!-- End meta top -->

                                <div class="content">
                                    @markdown
                                       {{$post->content}}
                                    @endmarkdown
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

                            </article>

                        </div>
                    </section><!-- /Blog Details Section -->

                    <!-- Blog Comments Section -->
                    <section id="blog-comments" class="blog-comments section">

                        <div class="container">

                            <h4 class="comments-count">8 Comments</h4>

                            <div id="comment-1" class="comment">
                                <div class="d-flex">
                                    <div class="comment-img"><img src="{{URL::asset('storage/'.$post->author->image_url)}}" alt=""></div>
                                    <div>
                                        <h5><a href="">{{$post->author->name}}</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                                        <time datetime="2020-01-01">01 Jan,2022</time>
                                        <p>
{{--                                            @dd($comments->toArray())--}}
                                          @foreach($post->comments as $comment)
                                            {{$comment->comment}}
                                            @endforeach
                                        </p>
                                    </div>
                                </div>
                            </div><!-- End comment #1 -->

                            <div id="comment-2" class="comment">
                                <div class="d-flex">
                                    <div class="comment-img"><img src="assets/img/blog/comments-2.jpg" alt=""></div>
                                    <div>
                                        <h5><a href="">Aron Alvarado</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                                        <time datetime="2020-01-01">01 Jan,2022</time>
                                        <p>

                                        </p>
                                    </div>
                                </div>

                                <div id="comment-reply-1" class="comment comment-reply">
                                    <div class="d-flex">
                                        <div class="comment-img"><img src="assets/img/blog/comments-3.jpg" alt=""></div>
                                        <div>
                                            <h5><a href="">Lynda Small</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                                            <time datetime="2020-01-01">01 Jan,2022</time>
                                            <p>
                                                Enim ipsa eum fugiat fuga repellat. Commodi quo quo dicta. Est ullam aspernatur ut vitae quia mollitia id non. Qui ad quas nostrum rerum sed necessitatibus aut est. Eum officiis sed repellat maxime vero nisi natus. Amet nesciunt nesciunt qui illum omnis est et dolor recusandae.

                                                Recusandae sit ad aut impedit et. Ipsa labore dolor impedit et natus in porro aut. Magnam qui cum. Illo similique occaecati nihil modi eligendi. Pariatur distinctio labore omnis incidunt et illum. Expedita et dignissimos distinctio laborum minima fugiat.

                                                Libero corporis qui. Nam illo odio beatae enim ducimus. Harum reiciendis error dolorum non autem quisquam vero rerum neque.
                                            </p>
                                        </div>
                                    </div>

                                    <div id="comment-reply-2" class="comment comment-reply">
                                        <div class="d-flex">
                                            <div class="comment-img"><img src="assets/img/blog/comments-4.jpg" alt=""></div>
                                            <div>
                                                <h5><a href="">Sianna Ramsay</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                                                <time datetime="2020-01-01">01 Jan,2022</time>
                                                <p>
                                                    Et dignissimos impedit nulla et quo distinctio ex nemo. Omnis quia dolores cupiditate et. Ut unde qui eligendi sapiente omnis ullam. Placeat porro est commodi est officiis voluptas repellat quisquam possimus. Perferendis id consectetur necessitatibus.
                                                </p>
                                            </div>
                                        </div>

                                    </div><!-- End comment reply #2-->

                                </div><!-- End comment reply #1-->

                            </div><!-- End comment #2-->

                            <div id="comment-3" class="comment">
                                <div class="d-flex">
                                    <div class="comment-img"><img src="assets/img/blog/comments-5.jpg" alt=""></div>
                                    <div>
                                        <h5><a href="">Nolan Davidson</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                                        <time datetime="2020-01-01">01 Jan,2022</time>
                                        <p>
                                            Distinctio nesciunt rerum reprehenderit sed. Iste omnis eius repellendus quia nihil ut accusantium tempore. Nesciunt expedita id dolor exercitationem aspernatur aut quam ut. Voluptatem est accusamus iste at.
                                            Non aut et et esse qui sit modi neque. Exercitationem et eos aspernatur. Ea est consequuntur officia beatae ea aut eos soluta. Non qui dolorum voluptatibus et optio veniam. Quam officia sit nostrum dolorem.
                                        </p>
                                    </div>
                                </div>

                            </div><!-- End comment #3 -->

                            <div id="comment-4" class="comment">
                                <div class="d-flex">
                                    <div class="comment-img"><img src="assets/img/blog/comments-6.jpg" alt=""></div>
                                    <div>
                                        <h5><a href="">Kay Duggan</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                                        <time datetime="2020-01-01">01 Jan,2022</time>
                                        <p>
                                            Dolorem atque aut. Omnis doloremque blanditiis quia eum porro quis ut velit tempore. Cumque sed quia ut maxime. Est ad aut cum. Ut exercitationem non in fugiat.
                                        </p>
                                    </div>
                                </div>

                            </div><!-- End comment #4 -->

                        </div>

                    </section><!-- /Blog Comments Section -->

                    <!-- Comment Form Section -->
                    <section id="comment-form" class="comment-form section">
                        <div class="container">

                            <form action="/comments" method="post" id="comments_form">
                                @csrf
                                <input type="hidden" name="post_id" value="{{$post->id}}">
                                <input type="hidden" name="user_id" value="{{$post->author->id}}">
                                <h4>Post Comment</h4>
                                <p>Only Register user can post the comments. if not register, <a href="/register">Register Here</a>  </p>
                                <div class="row">
                                <div class="row">
                                    <div class="col form-group">
                                        @if(!auth()->user())
                                        <textarea name="comment" class="form-control" placeholder="Your Comment*" disabled></textarea>
                                        @else
                                            <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>
                                        @endif
                                    </div>
                                </div>

                                <div class="text-center">
                                    @if(auth()->user())
                                    <button type="submit" class="btn btn-primary" >Post Comment</button>
                                    @else
                                        <button type="submit" class="btn btn-primary"disabled >Post Comment</button>
                                    @endif
                                </div>

                            </form>
                        @php

 @endphp

                        </div>
                    </section><!-- /Comment Form Section -->

                </div>

                <div class="col-lg-4 sidebar">

                    <div class="widgets-container">

                        <!-- Blog Author Widget -->
                        <div class="blog-author-widget widget-item">

                            <div class="d-flex flex-column align-items-center">
                                <img src="{{URL::asset('storage/'.$post->author->image_url)}}" class="rounded-circle flex-shrink-0" alt="">
                                <h4>{{$post->author->name}}</h4>
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
                                @foreach($post->categories as $category)
                                    <li><a href="#">{{$category->name}}</a></li>
                                @endforeach


                            </ul>

                        </div><!--/Categories Widget -->

                        <!-- Recent Posts Widget -->
                        <div class="recent-posts-widget widget-item">

                            <h3 class="widget-title">Recent Posts</h3>

                            @foreach($posts as $post)
                                <div class="post-item">
                                    <h4><a href="blog-details.html">{{$post->title}}</a></h4>
                                    <time datetime="2020-01-01">{{$post->published_at}}</time>
                                </div><!-- End recent post item-->
                            @endforeach


                        </div><!--/Recent Posts Widget -->

                        <!-- Tags Widget -->
                        <div class="tags-widget widget-item">

                            <h3 class="widget-title">Tags</h3>
                            <ul>
                                @foreach($post->tags as $tag)
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
                        <li><a href="/technology">Technology</a></li>
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
                        <li><a href=""><i class="fa-brands fa-facebook fa-2x"></i></a></li>
                        <li><a href=""></a><i class="fa-brands fa-square-x-twitter fa-2x"></i></li>
                        <li><a href=""></a><i class="fa-brands fa-youtube fa-2x"></i></li>
                        <li><a href=""></a><i class="fa-brands fa-instagram fa-2x"></i></li>
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

</footer>
<!-- Vendor JS Files -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
<script src="{{URL::asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{URL::asset('assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{URL::asset('assets/vendor/aos/aos.js')}}"></script>
<script src="{{URL::asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{URL::asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{URL::asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{URL::asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>


<!-- Main JS File -->
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
<script src="{{URL::asset('assets/js/main.js')}}"></script>
</body>
</html>
