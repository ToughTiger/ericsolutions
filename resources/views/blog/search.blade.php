<x-layout>

    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background">
            <div class="container position-relative">
                <h1>Blog</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li class="current">Search Result</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <!-- Blog Posts Section -->

        <section id="blog-posts" class="blog-posts section">

            <div class="container">
                {{-- Display an error message if one is set --}}
                @if(isset($error))
                    <div class="alert alert-danger">
                        {{ $error }}
                    </div>
                @endif

                {{-- Display Blog if not error--}}

                @if($paginatedBlogs && count($paginatedBlogs) > 0)
                    <div class="row gy-4">
                        @foreach($paginatedBlogs as $blogPost)
                            <div class="col-lg-4">

                                <article>
                                    {{--    @dd($posts);--}}
                                    <div class="post-img">
                                        <img src="{{$blogPost['featured_image']}}" alt="{{ $blogPost['name'] }}" class="img-fluid">
                                    </div>
                                    {{--                                @foreach($post->categories as $category)--}}
                                    {{--                            <p class="post-category">{{$category->name}}</p>--}}
                                    {{--                            @endforeach--}}
                                    <h2 class="title">
                                        <a href="/posts/{{ $blogPost['id'] }}">{{ $blogPost['name'] }}</a>
                                    </h2>

                                    <div class="d-flex align-items-center">
                                        {{--                                <img src="{{URL::asset('storage/' .$post->author->image_url)}}" alt="{{$post->author->name}}" class="img-fluid post-author-img flex-shrink-0">--}}
                                        <div class="post-meta">
                                            <p class="post-author">{{ $blogPost['author_name']}}</p>
                                            <p class="post-date">
                                                {{\Carbon\Carbon::parse($blogPost['publish_date'])->format('j F, Y')}}
                                            </p>
                                        </div>
                                    </div>

                                </article>

                            </div><!-- End post list item -->
                        @endforeach
                    </div>
            </div>

        </section><!-- /Blog Posts Section -->
        @endif
        <!-- Blog Pagination Section -->
        <section id="blog-pagination" class="text-center">{{ $paginatedBlogs->links() }}</section>

    </main>

    <x-footer></x-footer>
</x-layout>
