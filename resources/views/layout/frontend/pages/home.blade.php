@extends('main')

@section('content')
<section class="header">
    <div class="container">
        <h1 class="text-center mb-26">Reescribir <span>Tool</span></h1>
        <div class="tool m-auto d-flex ">
            <div class="tool-left">
                <textarea name="" id=""></textarea>
                <div class="d-block input-area">
                    <div class="input-text text-center">insert your text here</div>
                    <div class="d-flex btn-input mt-10">
                        <button class="d-flex btn text-center"><img src="{{asset('web_assets/frontend/img/file-btn.svg')}}" width="20"
                                alt="foluder">Select File</button>
                        <button class="btn">Paste text</button>
                    </div>
                </div>
            </div>
            <div class="tool-border"></div>
            <div class="tool-right">
                <div class="output-text">
                    <img src=" {{asset('web_assets/frontend/img/output-img.svg')}}" width="100%" alt="output-img">
                </div>
            </div>
        </div>
        <div class="text-center">
            <button class="btn head-btn">Reescribir</button>
        </div>
    </div>
</section>
<!-- feature box -->
<section class="feature">
    <div class="container">
        <h2 class="text-center mt-36 mb-10"> <span>Our</span> Feature</h2>
        <p class="text-center feature-text">There are many variations of passages of lorem ipsum available, but the
            majority <br> and the have suffered alteration in some form, by injected</p>

        <div class=" d-flex f-wrap space-between mt-36">
            <div class="feature-border f_boxes">
                <div class="feature-box ">
                    <div class="small_border1"></div>
                    <div class="feature-inner">
                        <img src="{{asset('web_assets/frontend/img/document.svg')}}" class="black-box" width="auto" alt="">
                        <h3 class="mb-10 mt-36"><span>Reescribir</span> Tool</h3>
                        <p class="black-text">There are many variations of passages of Lorem Ipsum
                            a randomised handful of model sentence structures, to
                            reasonable.</p>
                    </div>
                </div>
            </div>
            <div class="feature-border f_boxes">
                <div class="feature-box ">
                    <div class="small_border1"></div>
                    <div class="feature-inner">
                        <img src=" {{asset('web_assets/frontend/img/folder-select.svg')}}" width="auto" alt="">
                        <h3 class="mb-10 mt-36"><span>Reescribir</span> Tool</h3>
                        <p class="black-text">There are many variations of passages of Lorem Ipsum
                            a randomised handful of model sentence structures, to
                            reasonable.</p>
                    </div>
                </div>
            </div>
            <div class="feature-border f_boxes">
                <div class="feature-box ">
                    <div class="small_border1"></div>
                    <div class="feature-inner">
                        <img src="{{asset('web_assets/frontend/img/pencil.svg')}}" width="auto" alt="">
                        <h3 class="mb-10 mt-36"><span>Reescribir</span> Tool</h3>
                        <p class="black-text">There are many variations of passages of Lorem Ipsum
                            a randomised handful of model sentence structures, to
                            reasonable.</p>
                    </div>
                </div>
            </div>
            <div class="feature-border f_boxes">
                <div class="feature-box ">
                    <div class="small_border1"></div>
                    <div class="feature-inner">
                        <img src="{{asset('web_assets/frontend/img/settings.svg')}}" width="auto" alt="">
                        <h3 class="mb-10 mt-36"><span>Reescribir</span> Tool</h3>
                        <p class="black-text">There are many variations of passages of Lorem Ipsum
                            a randomised handful of model sentence structures, to
                            reasonable.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="Decribe">
    <div class="container">
        <h2 class="text-center"><span>How Does</span> It Work</h2>
        <div class="describe_buttons mt-36 m-auto d-flex space-between">
            <button>Enter text</button>
            <button>Reescribir</button>
            <button>Done</button>
        </div>
        <div class="tool-describe d-flex">
            <div class="tool-fun">
                <div class="fun-box d-flex">
                    <img src="{{asset('web_assets/frontend/img/orange-tick.svg')}}" width="auto" alt="">
                    <p>There are many variations of passages of model sentence structures</p>
                </div>
                <div class="fun-box d-flex">
                    <img src="{{asset('web_assets/frontend/img/orange-tick.svg')}}" width="auto" alt="">
                    <p>There are many variations of passages of model sentence structures</p>
                </div>
                <div class="fun-box d-flex">
                    <img src="{{asset('web_assets/frontend/img/orange-tick.svg')}}" width="auto" alt="">
                    <p>There are many variations of passages of model sentence structures</p>
                </div>
                <div class="fun-box d-flex">
                    <img src="{{asset('web_assets/frontend/img/orange-tick.svg')}}" width="auto" alt="">
                    <p>There are many variations of passages of model sentence structures</p>
                </div>
                <div class="fun-box d-flex">
                    <img src="{{asset('web_assets/frontend/img/orange-tick.svg')}}" width="auto" alt="">
                    <p>There are many variations of passages of model sentence structures</p>
                </div>
            </div>
            <div class="tool-structure">
                <div class="tool-image text-center">
                    <img src="{{asset('web_assets/frontend/img/tool-pic.png')}}" width="auto" alt="tool">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="card">
    <div class="container d-flex space-between f-wrap ">
        @foreach (get_blogs_by_limit(3) as $blog)
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
