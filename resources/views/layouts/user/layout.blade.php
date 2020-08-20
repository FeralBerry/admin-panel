<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8"> <![endif]-->
<!--[if IE 9]> <html class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>{{ $title ?? 'Login/Registration'}}</title>
    <meta name="description" content="Responsive modern ecommerce Html5 Template">
    <!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='//fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic%7CPT+Gudea:400,700,400italic%7CPT+Oswald:400,700,300' rel='stylesheet' id="googlefont">
    <link rel="stylesheet" href="{{ asset('user/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/prettyPhoto.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/jquery.bxslider.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/animate.css') }}">
    <!-- Favicon and Apple Icons -->
    <link rel="icon" type="image/png" href="{{ asset('user/img/icons/icon.png') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('user/img/icons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('user/img/icons/apple-icon-72x72.png') }}">
    <!--- jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.1.min.js"><\/script>')</script>
<!--[if lt IE 9]>
    <script src="{{ asset('user/js/html5shiv.js') }}"></script>
    <script src="{{ asset('user/js/respond.min.js') }}"></script>
    <![endif]-->
    <style id="custom-style"></style>
</head>
<body>
<div id="wrapper">
    @yield('header')
    <section id="content">
        @yield('content')
    </section><!-- End #content -->
    @yield('footer')
</div><!-- End #wrapper -->
<a href="#" id="scroll-top" title="Scroll to Top"><i class="fa fa-angle-up"></i></a><!-- End #scroll-top -->
<!-- END -->
<script src="{{ asset('user/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('user/js/smoothscroll.js') }}"></script>
<script src="{{ asset('user/js/jquery.debouncedresize.js') }}"></script>
<script src="{{ asset('user/js/retina.min.js') }}"></script>
<script src="{{ asset('user/js/jquery.placeholder.js') }}"></script>
<script src="{{ asset('user/js/jquery.hoverIntent.min.js') }}"></script>
<script src="{{ asset('user/js/twitter/jquery.tweet.min.js') }}"></script>
<script src="{{ asset('user/js/jquery.flexslider-min.js') }}"></script>
<script src="{{ asset('user/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('user/js/jflickrfeed.min.js') }}"></script>
<script src="{{ asset('user/js/jquery.prettyPhoto.js') }}"></script>
<script src="{{ asset('user/js/jquery.bxslider.min.js') }}"></script>
<script src="{{ asset('user/js/main.js') }}"></script>

<script>
        $(function() {

            // BxSlider.js Slider Plugin
             $('.bxslider').bxSlider({
                speed: 1000,
                auto: true,
                pause: 6000,
                prevText : '',
                nextText : ''
             });

             $(window).on('load resize', function() {
                var windowWidth = $(window).width(),
                    bxSliderWidth = $('#bxslider').width(),
                    bxSliderHeight = $('#bxslider').height(),
                    shadowWidth = (windowWidth - bxSliderWidth) / 2 ;

                    $('.left-side-shadow, .right-side-shadow').css({'width': shadowWidth, 'height': bxSliderHeight});

             });

        });
    </script>
<script>
    $(".category-list").on("click", ".tab", function(){
    $(".category-list .tab").removeClass("active");
    $(this).addClass("active");
});
</script>
</body>
</html>
