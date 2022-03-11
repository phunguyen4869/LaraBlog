@extends('main')

@section('content')
    <div class="container-wrap">
        <aside id="fh5co-hero">
            <div class="flexslider">
                <ul class="slides">
                    <li
                        style="background-image: url({{ url('/storage/background-image/contact-slider.JPG') }});">
                        <div class="overlay-gradient"></div>
                        <div class="container-fluids">
                            <div class="row">
                                <div
                                    class="col-md-6 col-md-offset-3 slider-text slider-text-bg">
                                    <div class="slider-text-inner text-center">
                                        <h1>Contact</h1>
                                        <h2>My templates Made by <a
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
        <div id="fh5co-contact">
            <div class="row animate-box">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                    <h2>Contact me</h2>
                    <p>Contact me to work, booking music band or anything else.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-md-push-1 animate-box">
                    <h3>My Address</h3>
                    <ul class="contact-info">
                        <li><i class="icon-location4"></i>Phu My Town,
                            Ba Ria Vung Tau Province</li>
                        <li><i class="icon-phone3"></i>0848.818.727</li>
                        <li><i class="icon-location3"></i><a
                                href="#">phunguyen4869@gmail.com</a></li>
                        <li><i class="icon-globe2"></i><a
                                href="https://phunguyen0302.wordpress.com/">phunguyen0302.wordpress.com</a></li>
                    </ul>
                </div>
                <div class="col-md-7 col-md-push-1 animate-box">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control"
                                    placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control"
                                    placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea name="" class="form-control" id=""
                                    cols="30" rows="7"
                                    placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" value="Send Message"
                                    class="btn btn-primary btn-modify">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- END container-wrap -->
@endsection
