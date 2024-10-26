<x-layout>

    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background">
            <div class="container position-relative">
                <h1>Blog</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li class="current">Blog</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <!-- Blog Posts Section -->
        <section id="blog-posts" class="blog-posts section">

            <div class="container">
                <div class="row gy-4">
             @foreach($posts as $post)
                    <div class="col-lg-4">
                        <article>
{{--    @dd($posts);--}}
                            <div class="post-img">
                                <img src="{{URL::asset('storage/'.$post->image)}}" alt="{{ $post->alt }}" class="img-fluid">
                            </div>
                                @foreach($post->categories as $category)
                            <p class="post-category">{{$category->name}}</p>
                            @endforeach
                            <h2 class="title">
                                <a href="/posts/{{$post->id}}">{{$post->title}}</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <img src="{{URL::asset('storage/' .$post->author->image_url)}}" alt="{{$post->author->name}}" class="img-fluid post-author-img flex-shrink-0">
                                <div class="post-meta">
                                    <p class="post-author">{{$post->author->name}}</p>
                                    <p class="post-date">
                                        {{\Carbon\Carbon::parse($post->created_at)->format('j F, Y')}}
                                    </p>
                                </div>
                            </div>

                        </article>
                    </div><!-- End post list item -->
             @endforeach
                </div>
            </div>

        </section><!-- /Blog Posts Section -->

        <!-- Blog Pagination Section -->
        <section id="blog-pagination" class="blog-pagination section">

            <div class="container">
                <div class="d-flex justify-content-center">
                   {!! $posts->links() !!}
                </div>
            </div>

        </section><!-- /Blog Pagination Section -->

    </main>

    <x-footer></x-footer>
</x-layout>
