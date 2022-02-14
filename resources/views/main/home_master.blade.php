<!DOCTYPE html>
<html lang="tr">
<head><meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="icon" href="{{asset('public/icon/favicon.ico')}}">
    <meta name="csrf-token" content="{{csrf_token()}}"><!-- Otmatik alt kategori seçmek için ekledik-->
    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('meta_keywords')">
    <meta name="description" content="@yield('meta_description')">
    <meta property="og:site_name" content="@yield('og:site_name')" />
    <meta property="og:title" content="@yield('og:title')"/>
    <meta property="og:type" content="article" />
    <meta property="og:description" content="@yield('og:description')"/>
    <meta property="og:image" content="@yield('og:image')"/>
    {{--    <meta property="og:type" content="article"/>--}}
    <meta property="og:url" content="@yield('og:url')"/>
    <meta property="og:image:type" content="image/jpeg"/>
    <meta name="twitter:url" content="@yield(('twitter:url'))"/>
    <meta name="twitter:domain" content="@yield(('twitter:domain'))"/>
    <meta name="twitter:site" content="@yield(('twitter:site'))"/>
    <meta name="twitter:title" content="@yield(('twitter:title'))"/>
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="600" />
    <meta property="og:image:type" content="image/jpeg" />
    <link rel="canonical" href="{{url()->current()}}"/>
    <meta name="google-site-verification" content="@yield('google_verification')"/>
    <script async src="https://www.googletagmanager.com/gtag/js?id=@yield('google_verification')"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', '@yield('google_verification')');
    </script>
{{--    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6265404652403069"--}}
{{--            crossorigin="anonymous" defer></script>--}}
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id='@yield('google_analytics')'"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '@yield('google_analytics')');
    </script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=@yield('adsense_code')"      crossorigin="anonymous" async></script>

    <link rel="preload" as="style"  href="{{mix('frontend/assets/css/combine.css')}}" as="style" onload="this.rel='stylesheet'" onerror="this.href='stylesheet'">

    <link rel="preload" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" as="style" onload="this.rel='stylesheet'" onerror="this.href='stylesheet'" defer>
{{--    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" defer>--}}
    <link rel="preload" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" as="style" onload="this.rel='stylesheet'" onerror="this.href='stylesheet' crossorigin="anonymous"">
{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">--}}
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/tiny-slider.css" as="style" onload="this.rel='stylesheet'" onerror="this.href='stylesheet' crossorigin="anonymous"">
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/tiny-slider.css">--}}
    <link rel="preload" href="{{asset('frontend/assets/node_modules/animate.css/animate.css')}}" as="style" onload="this.rel='stylesheet'" onerror="this.href='stylesheet'">
{{--    <link rel="stylesheet" href="{{asset('frontend/assets/node_modules/animate.css/animate.css')}}">--}}
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900|Roboto:100,300,400,500,700,900&display=swap" as="style" onload="this.rel='stylesheet'" onerror="this.href='stylesheet' crossorigin="anonymous"">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900|Roboto:100,300,400,500,700,900&display=swap">
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" as="style" onload="this.rel='stylesheet'" onerror="this.href='stylesheet' crossorigin="anonymous"">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap">
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Work+Sans:100,300,400,500,600,700,800,900&display=swap" as="style" onload="this.rel='stylesheet'" onerror="this.href='stylesheet' crossorigin="anonymous"">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Work+Sans:100,300,400,500,600,700,800,900&display=swap">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" as="style" onload="this.rel='stylesheet'"">
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">--}}
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" as="style" onload="this.rel='stylesheet'"">
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">--}}
{{--    <link rel="stylesheet" href="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css">--}}
    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css" async/>
{{--    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">--}}
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
{{--    <link rel="stylesheet" href="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css">--}}
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" async/>
{{--    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/svg-turkiye-haritasi.css')}}">--}}

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Cache-control" content="public">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script  src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" async integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script rel="preload" src="{{mix('frontend/assets/js/combine.js')}}"></script>

    <!-- <script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-app.js"></script>
     <script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-messaging.js"></script>
     <script src="https://www.gstatic.com/firebasejs/4.9.1/firebase.js"></script>-->
{{--        <script type="text/javascript" src="{{asset('frontend/assets/js/svg-turkiye-haritasi.js')}}"></script>--}}


</head>
<body>

@include('main.body.header')

@yield('content')
@include('main.body.footer')

<script>
    svgturkiyeharitasi();

</script>

</body>

</html>
