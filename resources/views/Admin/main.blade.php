<!DOCTYPE HTML>
<html lang="en">

<head>
    @include('Admin.head')
</head>

<body>
    <div class="wrapper">
        @include('Admin.nav')

        @include('Admin.sidebar')

        <div class="content-wrapper" style="min-height: 339.8px;">
            @yield('content')
        </div>

        @include('Admin.footer')
    </div>
</body>

</html>
