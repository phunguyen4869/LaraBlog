<!DOCTYPE HTML>
<html lang="en">

<head>
    @include('head')
</head>

<body>
    <div class="fh5co-loader">HEHEHE</div>

    <div id="page">

        @include('nav')

        @yield('content')

        @include('footer')
    </div>
    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
    </div>
</body>

</html>
