@extends('main')

@section('content')
    <div class="container-wrap">
        <aside id="fh5co-hero">
            <div class="flexslider">
                <ul class="slides">
                    <li
                        style="background-image: url({{ url('/storage/background-image/about-slider.JPG') }});">
                        <div class="overlay-gradient"></div>
                        <div class="container-fluids">
                            <div class="row">
                                <div
                                    class="col-md-6 col-md-offset-3 slider-text slider-text-bg">
                                    <div class="slider-text-inner text-center">
                                        <h1 style="color: white">About</h1>
                                        <h2 style="color: white">My templates Made by <a
                                                href="http://freehtml5.co/"
                                                target="_blank">freehtml5.co</a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>
        <div id="fh5co-about">
            <div class="row animate-box">
                <div class="col-md-6 col-md-offset-3 text-center heading-section">
                    <h3>My Story</h3>
                    <p>Everyone has their own story. I would like to tell my story.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center animate-box">
                    <p><img src="{{ url('/storage/background-image/about-story.jpg') }}"
                            alt="Free HTML5 Bootstrap Template"
                            class="img-responsive"></p>
                </div>
                <div class="col-md-8 col-md-offset-2 text-center animate-box">
                    <div class="about-desc">
                        <h3>Hi! I'm Phu Nguyen</h3>
                        <p>I'm a information technology engineer. Graduating in
                            2021, but unfortunately, the outbreak of
                            the covid epidemic caused a huge impact. However, thanks
                            to that, I have more time to learn more about the
                            knowledge that I missed when I was in university.</p>
                        <p>
                        <ul class="fh5co-social-icons">
                            <li><a href="https://www.facebook.com/PhuIT3299"><i class="icon-facebook"></i></a></li>
                            <li><a href="https://github.com/phunguyen4869"><i class="icon-github"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/phunguyen4869/"><i class="icon-linkedin"></i></a></li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- END container-wrap -->
@endsection
