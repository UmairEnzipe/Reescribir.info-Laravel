@extends('main')
@section('content')
<style>
    .header {
        background-image: none;
    }
</style>
    <section class="heropost header">
        <div class="container">
            <h1>{{ @$blog['title'] }}</h2>
            <div class="article">
                <div class="article-wrapper">
                    <img class="feature" src="{{ asset(@$blog ['images']['original']) }}" width="100%" alt="image">
                </div>
                <div class="inner_article d-flex">
                    <div class="social_links mt-36">
                        <img src=" {{ asset('web_assets/frontend/img/fbft.svg') }}" width="auto" alt="">
                        <img src=" {{ asset('web_assets/frontend/img/twitter.svg') }}" width="auto" alt="">
                        <img src=" {{ asset('web_assets/frontend/img/linkedinft.sv') }}" width="auto" alt="">
                        <img src=" {{ asset('web_assets/frontend/img/pintres.svg') }}" width="auto" alt="">
                    </div>
                    <div class="articlecontent"> {!! @$blog['detail'] !!} </div>
                </div>
            </div>
        </div>
    </section>
    <section class="card">
        <div class="container d-flex space-between f-wrap ">
            @foreach (@get_blogs_by_limit(3, $blog['id']) as $blog)
                {{-- @continue($loop->iteration >2) --}}
                <a  href="{{ route('page.single_blog', $blog['slug'])}}" class="card-box">
                    <div class="img-wrapper">
                        <img class="feature" src="{{ asset(@$blog ['images']['original']) }}" width="100%" alt="image">
                    </div>
                    <div class="card-body">
                        <p> {{ @$blog['title'] }} </p>
                    </div>
                    <div class="card-footer d-flex space-between">
                        <button class="btn">Read more</button>
                        <p>{{ \Carbon\Carbon::parse(@$blog['created_at'])->diffForhumans() }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
@endsection
