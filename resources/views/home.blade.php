@extends('main')

@section('content')
    <div class="container-wrap">
        <aside id="fh5co-hero">
            <div class="flexslider">
                <ul class="slides">
                    @foreach ($sliders as $slider)
                        <li style="background-image: url({{ $slider->image }});">
                            <div class="overlay-gradient"></div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div
                                        class="col-md-6 col-md-offset-3 col-md-pull-3 slider-text">
                                        <div class="slider-text-inner">
                                            <h1>{{ $slider->title }}</h1>
                                            <h2>{{ $slider->description }}</h2>
                                            <p><a class="btn btn-primary btn-demo"
                                                    href="#"></i> View Demo</a> <a
                                                    class="btn btn-primary btn-learn">Learn
                                                    More</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </aside>
        <div id="fh5co-services">
            <div class="row">
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
                        <span class="icon">
                            <i class="icon-diamond"></i>
                        </span>
                        <div class="desc">
                            <h3><a href="#">Xây dựng thương hiệu bản thân</a></h3>
                            <p>Mục đích của tôi khi làm ra blog này nhằm xây dựng và
                                khẳng định khả năng của bản thân. Tuy có thể còn
                                nhiều thiếu sót nhưng cũng không vì thế mà ngừng học
                                hỏi và cải thiện bản thân.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
                        <span class="icon">
                            <i class="icon-lab2"></i>
                        </span>
                        <div class="desc">
                            <h3><a href="#">Tìm hiểu và thiết kế website backend</a>
                            </h3>
                            <p>Trong suốt quá trình học tập và làm việc thì tôi nhận
                                ra rằng khi làm các sản phẩm thực tế sẽ tạo ra cho
                                bản thân niềm đam mê hứng khởi và yêu thích với công việc này.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
                        <span class="icon">
                            <i class="icon-settings"></i>
                        </span>
                        <div class="desc">
                            <h3><a href="#">Tìm cách cải tiến và đơn giản hóa công
                                    việc</a></h3>
                            <p>Khi thực hiện các sản phẩm thực tế tôi cũng nhận ra
                                rằng chúng ta có thể sử dụng những phương thức đã
                                được
                                xây dựng sẵn để cải thiện tốc độ làm việc, đồng thời
                                cũng có thể tái sử dụng và nâng cấp những phương
                                thức đã làm trước đó trở nên tốt hơn.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="fh5co-work" class="fh5co-light-grey">
            <div class="row animate-box">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                    <h2>Work</h2>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga
                        molestias accusamus alias autem provident. Odit ab aliquam
                        dolor eius.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 text-center animate-box">
                    <a href="work-single.html" class="work"
                        style="background-image: url(images/portfolio-1.jpg);">
                        <div class="desc">
                            <h3>Project Name</h3>
                            <span>Illustration</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <a href="work-single.html" class="work"
                        style="background-image: url(images/portfolio-2.jpg);">
                        <div class="desc">
                            <h3>Project Name</h3>
                            <span>Brading</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <a href="work-single.html" class="work"
                        style="background-image: url(images/portfolio-3.jpg);">
                        <div class="desc">
                            <h3>Project Name</h3>
                            <span>Illustration</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div id="fh5co-counter" class="fh5co-counters">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center animate-box">
                    <p>We have a fun facts far far away, behind the word mountains,
                        far from the countries Vokalia and Consonantia, there live
                        the blind texts.</p>
                </div>
            </div>
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <span class="fh5co-counter js-counter" data-from="0"
                                data-to="3452" data-speed="5000"
                                data-refresh-interval="50"></span>
                            <span class="fh5co-counter-label">Cups of Coffee</span>
                        </div>
                        <div class="col-md-3 text-center">
                            <span class="fh5co-counter js-counter" data-from="0"
                                data-to="234" data-speed="5000"
                                data-refresh-interval="50"></span>
                            <span class="fh5co-counter-label">Client</span>
                        </div>
                        <div class="col-md-3 text-center">
                            <span class="fh5co-counter js-counter" data-from="0"
                                data-to="6542" data-speed="5000"
                                data-refresh-interval="50"></span>
                            <span class="fh5co-counter-label">Projects</span>
                        </div>
                        <div class="col-md-3 text-center">
                            <span class="fh5co-counter js-counter" data-from="0"
                                data-to="8687" data-speed="5000"
                                data-refresh-interval="50"></span>
                            <span class="fh5co-counter-label">Done Projects</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="fh5co-blog" class="blog-flex">
            <div class="featured-blog"
                style="background-image: url(images/blog-1.jpg);">
                <div class="desc-t">
                    <div class="desc-tc">
                        <span class="featured-head">Featured Posts</span>
                        <h3><a href="#">Top 20 Best WordPress Themes 2017 Multi
                                Purpose and Creative Websites</a></h3>
                        <span><a href="#" class="read-button">Learn
                                More</a></span>
                    </div>
                </div>
            </div>
            <div class="blog-entry fh5co-light-grey">
                <div class="row animate-box">
                    <div class="col-md-12">
                        <h2>Latest Posts</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 animate-box">
                        <a href="#" class="blog-post">
                            <span class="img"
                                style="background-image: url(images/blog-2.jpg);"></span>
                            <div class="desc">
                                <h3>26 Best Education WordPress Themes 2017 You Need
                                    To See</h3>
                                <span class="cat">Collection</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-12 animate-box">
                        <a href="#" class="blog-post">
                            <span class="img"
                                style="background-image: url(images/blog-1.jpg);"></span>
                            <div class="desc">
                                <h3>16 Outstanding Photography WordPress Themes You
                                    Must See</h3>
                                <span class="cat">Collection</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-12 animate-box">
                        <a href="#" class="blog-post">
                            <span class="img"
                                style="background-image: url(images/blog-3.jpg);"></span>
                            <div class="desc">
                                <h3>16 Outstanding Photography WordPress Themes You
                                    Must See</h3>
                                <span class="cat">Collection</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- END container-wrap -->

    <div class="container-wrap">
        <footer id="fh5co-footer" role="contentinfo">
            <div class="row">
                <div class="col-md-3 fh5co-widget">
                    <h4>About Neat</h4>
                    <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia
                        reprehenderit. Eos cumque dicta adipisci architecto culpa
                        amet.</p>
                </div>
                <div class="col-md-3 col-md-push-1">
                    <h4>Latest Posts</h4>
                    <ul class="fh5co-footer-links">
                        <li><a href="#">Amazing Templates</a></li>
                        <li><a href="#">100+ Free Download Templates</a></li>
                        <li><a href="#">Neat is now available</a></li>
                        <li><a href="#">Download 1000+ icons</a></li>
                        <li><a href="#">Big Deal for this month of March, Join Us
                                here</a></li>
                    </ul>
                </div>

                <div class="col-md-3 col-md-push-1">
                    <h4>Links</h4>
                    <ul class="fh5co-footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Work</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">About us</a></li>
                    </ul>
                </div>

                <div class="col-md-3">
                    <h4>Contact Information</h4>
                    <ul class="fh5co-footer-links">
                        <li>198 West 21th Street, <br> Suite 721 New York NY 10016
                        </li>
                        <li><a href="tel://1234567920">+ 1235 2355 98</a></li>
                        <li><a href="mailto:info@yoursite.com">info@yoursite.com</a>
                        </li>
                        <li><a href="http://gettemplates.co">gettemplates.co</a>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="row copyright">
                <div class="col-md-12 text-center">
                    <p>
                        <small class="block">&copy; 2016 Free HTML5. All
                            Rights Reserved.</small>
                        <small class="block">Designed by <a
                                href="http://freehtml5.co/"
                                target="_blank">FreeHTML5.co</a> Demo Images: <a
                                href="http://unsplash.co/"
                                target="_blank">Unsplash</a></small>
                    </p>
                    <p>
                    <ul class="fh5co-social-icons">
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                        <li><a href="#"><i class="icon-dribbble"></i></a></li>
                    </ul>
                    </p>
                </div>
            </div>
        </footer>
    </div><!-- END container-wrap -->
@endsection
