<!DOCTYPE html>
<html lang="en">

@include('home.partials.header')


<body>
<!-- preloader start -->
{{--<div class="preloader">--}}
{{--    <img src="home/images/preloader.gif" alt="preloader">--}}
{{--</div>--}}
<!-- preloader end -->

<!-- header -->
@include('home.partials.navbar')
<!-- /header -->

@yield('contents')

<!-- footer -->
@include('home.partials.footer')
<!-- /footer -->

@include('home.partials.footer-scripts')

</body>
</html>
