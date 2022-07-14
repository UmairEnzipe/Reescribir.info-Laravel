@extends('main')
@section('content')
<style>
    .header {
        background-image: none;
    }
</style>
    <section class="new_post">
        <div class="container">
            <h1 class="text-center">Latest Articles</h1>
            @foreach ($blogs as $blog)
                <a href="{{ route('page.single_blog', $blog['slug'])}}" class="new_article d-flex m-auto space-between">
                    <div class="article_img">
                        <img class="feature" src="{{ asset(@$blog['images']['original']) }}" width="100%" alt="image">
                    </div>
                    <div class="article_info">
                        <div class="inner_title">
                            <h2>{{ @$blog['title'] }}</h2>
                        </div>
                        <div class="article_footer d-flex space-between">
                            <button>Read more</button>
                            <p>{{ \Carbon\Carbon::parse(@$blog['created_at'])->diffForhumans() }}</p>
                        </div>
                    </div>
                    {{-- @break($loop->iteration == 1) --}}
                </a>
            @endforeach
            {{-- <section class="card">
                <div class="container d-flex space-between f-wrap ">
                    @foreach ($blogs as $blog)
                    @continue($loop->iteration == 1)
                    <a class="card-box" href="post.html">
                        <div class="img-wrapper">
                            <img class="feature" src="{{ asset(@$blog ['images']['original']) }}" width="100%" alt="image">
                        </div>
                        <div class="card-body">
                            <p> {{ @$blog['title']}} </p>
                        </div>
                            <div class="card-footer mb-10 d-flex space-between">
                                <button class="btn">Read more</button>
                                <p>{{ \Carbon\Carbon::parse(@$blog['created_at'])->diffForhumans() }}</p>
                            </div>
                    </a>
                    @endforeach
                </div>
            </section> --}}
            {{-- <div class="pageslide">
                <div class="pagechanger d-flex space-between">
                    <div><img src="{{ asset('web_assets/frontend/img/leftslide.svg') }}" class="" width="100%"
                            alt="leftside"></div>
                    <div class="d-flex pageno">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="">...</a>
                        <a href="">12</a>
                    </div>
                    <div><img src="{{ asset('web_assets/frontend/img/rightslide.svg') }}" class="" width="100%"
                            alt="rightside"></div>
                </div>
            </div> --}}
        </div>
    </section>
@endsection
