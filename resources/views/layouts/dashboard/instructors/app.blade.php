<!DOCTYPE html>
<html>

<head>
    @include('instructor.head')

</head>

<body>
    <!-- Header Start -->
    <header class="header clearfix">
        @include('instructor.header')

    </header>
    <!-- Header End -->
    <!--  Sidebar Start -->
    <nav class="vertical_nav">
        @include('instructor.sidebar')

    </nav>
    <!--  Sidebar End -->

    <!-- Body Start -->
    @yield('content')
    <!-- Body End -->
</body>

<script src="{{asset('cursu_assets/js/vertical-responsive-menu.min.js')}}"></script>
<script src="{{asset('cursu_assets/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('cursu_assets/vendor/bootstrap-rtl/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('cursu_assets/vendor/OwlCarousel/owl.carousel.js')}}"></script>
<script src="{{asset('cursu_assets/vendor/semantic/semantic.min.js')}}"></script>
<script src="{{asset('cursu_assets/js/custom.js')}}"></script>
<script src="{{asset('cursu_assets/js/night-mode.js')}}"></script>


</html>