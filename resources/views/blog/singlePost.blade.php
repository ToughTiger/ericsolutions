<x-page_layout :meta="$meta">
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background">
            <div class="container position-relative">

                <h1>{{$post->getHtmlTitle()}}</h1>
{{--                <p>{{$post->meta_description}}</p>--}}
{{--                <nav class="breadcrumbs">--}}
{{--                    <ol>--}}
{{--                        <li><a href="/posts"><strong>Blog</strong></a></li>--}}
{{--                        @foreach($post->categories as $category)--}}
{{--                            <li class="current">{{$category->name}}</li>--}}
{{--                        @endforeach--}}
{{--                    </ol>--}}
{{--                </nav>--}}
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
                                    <img src="{{ $post->getFeaturedImage() }}" alt="{{$post->getFeaturedImageAltText()}}" class="img-fluid">
                                </div>

                                <h1 class="title">{{$post->getHtmlTitle()}}</h1>

                                <div class="meta-top">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="https://wwww.ericsolutions.com/author/{{$post->getBlogAuthorId()}}">{{$post->getAuthorName()}}</a></li>
                                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href=""><time datetime="2020-01-01">{{\Carbon\Carbon::parse($post->getPublishDate())->format('j F, Y')}}</time></a></li>
{{--                                        <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="">{{$post->comments->count()}}</a></li>--}}
                                    </ul>
                                </div><!-- End meta top -->

                                <div class="content">

                                    {!! $post->getPostBody() !!}

                                </div><!-- End post content -->

                                <div class="meta-bottom">
                                    <i class="bi bi-folder"></i>
                                    <ul class="cats">
{{--                                        @foreach($post->categories as $category)--}}
{{--                                            <li><a href="#">{{$category->name}}</a></li>--}}
{{--                                        @endforeach--}}

                                    </ul>

                                    <i class="bi bi-tags"></i>
                                    <ul class="tags">
                                        @if($tagNames && $tagNames->isNotEmpty())
                                            @foreach($tagNames as $tag)
                                                <li>Debug: {{$tag->getName() ?? 'No name'}}</li>
                                                @if(!empty($tag->getName()))
                                                    <li><a href="#">{{$tag->getName()}}</a></li>
                                                @else
                                                    <li><a href="#">No Tag Found</a></li>
                                                @endif
                                            @endforeach
                                        @else
                                            <li><a href="#">No Tags Available</a></li>
                                        @endif
                                    </ul>
                                </div><!-- End meta bottom -->
                                <div class="text-success social-container">
                                    <div class="social-share">{!! $share_buttons !!}</div>
                                </div>
                            </article>

                        </div>
                    </section><!-- /Blog Details Section -->

                    <!-- Blog Comments Section -->
{{--                    <section id="blog-comments" class="blog-comments section">--}}

{{--                        <div class="container">--}}

{{--                            <h4 class="comments-count">{{$post->comments->count()}} {{$post->comments->count() > 1 ? "comments" : "comment"}}</h4>--}}

{{--                            @foreach($comments as $comment)--}}
{{--                                <div id="comment-1" class="comment">--}}
{{--                                    <div class="d-flex">--}}
{{--                                        <div class="comment-img"><img src="assets/img/blog/comments-1.jpg" alt=""></div>--}}
{{--                                        <div>--}}
{{--                                            <h5><a href="">{{$comment->visitor->first_name}}</a></h5>--}}
{{--                                            <time datetime="2020-01-01">{{\Carbon\Carbon::parse($comment->created_at)->format('j F, Y')}}</time>--}}
{{--                                            <p>--}}
{{--                                                {{$comment->comment}}--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div><!-- End comment #1 -->--}}
{{--                            @endforeach--}}

{{--                        </div>--}}

{{--                    </section><!-- /Blog Comments Section -->--}}

{{--                    <!-- Comment Form Section -->--}}
{{--                    <section id="comment-form" class="comment-form section">--}}
{{--                        <div class="container">--}}

{{--                            <form action="/comments" method="POST">--}}
{{--                                @csrf--}}
{{--                                <h4>Post Comment</h4>--}}
{{--                                <p>Your email address will not be published. Required fields are marked * </p>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col form-group">--}}
{{--                                        <input name="post_id" type="hidden" value="{{$post->id}}" class="form-control" placeholder="Your Website">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col form-group">--}}
{{--                                        <input name="first_name" type="text" class="form-control" placeholder="Your First Name*" required>--}}
{{--                                    </div>--}}
{{--                                    <div class="col form-group">--}}
{{--                                        <input name="last_name" type="text" class="form-control" placeholder="Your Last Name*" required>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-md-6 form-group">--}}
{{--                                        <input name="email" type="email" class="form-control" placeholder="Your Email*">--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-6 form-group">--}}
{{--                                        <input name="phone" type="text" class="form-control" placeholder="Your Phone (Optional)" >--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col form-group">--}}
{{--                                        <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="text-center">--}}
{{--                                    <button type="submit" class="btn btn-primary">Post Comment</button>--}}
{{--                                </div>--}}

{{--                            </form>--}}

{{--                        </div>--}}
{{--                    </section><!-- /Comment Form Section -->--}}

                </div>

                <div class="col-lg-4 sidebar">

                    <div class="widgets-container">

                        <!-- Blog Author Widget -->
                        <div class="blog-author-widget widget-item">

{{--                            <div class="d-flex flex-column align-items-center">--}}
{{--                                <img src="{{URL::asset('storage/'.$post->author->image_url)}}" class="rounded-circle flex-shrink-0" alt="">--}}
{{--                                <h4><a href="{{'/author/'.$post->author_id}}">{{$post->author->name}}</a> </h4>--}}
{{--                                <div class="social-links">--}}
{{--                                    <a href="https://x.com/{{$post->author->social}}"><i class="bi bi-twitter-x"></i></a>--}}
{{--                                    <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>--}}
{{--                                    <a href="https://instagram.com/#"><i class="bi bi-instagram"></i></a>--}}
{{--                                    <a href="https://instagram.com/#"><i class="bi bi-linkedin"></i></a>--}}
{{--                                </div>--}}

{{--                                <p>--}}
{{--                                    {{$post->author->bio}}--}}
{{--                                </p>--}}

{{--                            </div>--}}
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
{{--                            <ul class="mt-3">--}}
{{--                                @foreach($categories as $category)--}}
{{--                                    <li><a href="#">{{$category->name}}</a></li>--}}
{{--                                @endforeach--}}


{{--                            </ul>--}}

                        </div><!--/Categories Widget -->

                        <!-- Recent Posts Widget -->
                        <div class="recent-posts-widget widget-item">

                            <h3 class="widget-title">Recent Posts</h3>

{{--                            @foreach($posts as $post)--}}
{{--                                <div class="post-item">--}}
{{--                                    <h4><a href="/posts/{{$post->id}}">{{$post->title}}</a></h4>--}}
{{--                                    <time datetime="2020-01-01">{{\Carbon\Carbon::parse($post->published_at)->format('j F, Y')}}</time>--}}
{{--                                </div><!-- End recent post item-->--}}
{{--                            @endforeach--}}


                        </div><!--/Recent Posts Widget -->

                        <!-- Tags Widget -->
                        <div class="tags-widget widget-item">

                            <h3 class="widget-title">Tags</h3>
{{--                            <ul>--}}
{{--                                @foreach($tags as $tag)--}}
{{--                                    <li><a href="#">{{$tag->name}}</a></li>--}}
{{--                                @endforeach--}}

{{--                            </ul>--}}

                        </div><!--/Tags Widget -->

                    </div>

                </div>

            </div>
        </div>

    </main>

{!! Toastr::message() !!}


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

</x-page_layout>
