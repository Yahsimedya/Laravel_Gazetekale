<!DOCTYPE html>
<html lang="tr">
<head><meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="icon" href="<?php echo e(asset('public/icon/favicon.ico')); ?>">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>"><!-- Otmatik alt kategori seçmek için ekledik-->
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <meta name="keywords" content="<?php echo $__env->yieldContent('meta_keywords'); ?>">
    <meta name="description" content="<?php echo $__env->yieldContent('meta_description'); ?>">
    <meta property="og:site_name" content="<?php echo $__env->yieldContent('og:site_name'); ?>" />
    <meta property="og:title" content="<?php echo $__env->yieldContent('og:title'); ?>"/>
    <meta property="og:type" content="article" />
    <meta property="og:description" content="<?php echo $__env->yieldContent('og:description'); ?>"/>
    <meta property="og:image" content="<?php echo $__env->yieldContent('og:image'); ?>"/>
    
    <meta property="og:url" content="<?php echo $__env->yieldContent('og:url'); ?>"/>
    <meta property="og:image:type" content="image/jpeg"/>
    <meta name="twitter:url" content="<?php echo $__env->yieldContent(('twitter:url')); ?>"/>
    <meta name="twitter:domain" content="<?php echo $__env->yieldContent(('twitter:domain')); ?>"/>
    <meta name="twitter:site" content="<?php echo $__env->yieldContent(('twitter:site')); ?>"/>
    <meta name="twitter:title" content="<?php echo $__env->yieldContent(('twitter:title')); ?>"/>
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="600" />
    <meta property="og:image:type" content="image/jpeg" />
    <link rel="canonical" href="<?php echo e(url()->current()); ?>"/>
    <meta name="google-site-verification" content="<?php echo $__env->yieldContent('google_verification'); ?>"/>
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $__env->yieldContent('google_verification'); ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', '<?php echo $__env->yieldContent('google_verification'); ?>');
    </script>


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id='<?php echo $__env->yieldContent('google_analytics'); ?>'"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '<?php echo $__env->yieldContent('google_analytics'); ?>');
    </script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=<?php echo $__env->yieldContent('adsense_code'); ?>"      crossorigin="anonymous" async></script>

    <link rel="preload" as="style"  href="<?php echo e(mix('frontend/assets/css/combine.css')); ?>" as="style" onload="this.rel='stylesheet'" onerror="this.href='stylesheet'">

    <link rel="preload" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" as="style" onload="this.rel='stylesheet'" onerror="this.href='stylesheet'" defer>

    <link rel="preload" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" as="style" onload="this.rel='stylesheet'" onerror="this.href='stylesheet' crossorigin="anonymous"">

    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/tiny-slider.css" as="style" onload="this.rel='stylesheet'" onerror="this.href='stylesheet' crossorigin="anonymous"">

    <link rel="preload" href="<?php echo e(asset('frontend/assets/node_modules/animate.css/animate.css')); ?>" as="style" onload="this.rel='stylesheet'" onerror="this.href='stylesheet'">

    <link rel="preload" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900|Roboto:100,300,400,500,700,900&display=swap" as="style" onload="this.rel='stylesheet'" onerror="this.href='stylesheet' crossorigin="anonymous"">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900|Roboto:100,300,400,500,700,900&display=swap">
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" as="style" onload="this.rel='stylesheet'" onerror="this.href='stylesheet' crossorigin="anonymous"">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap">
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Work+Sans:100,300,400,500,600,700,800,900&display=swap" as="style" onload="this.rel='stylesheet'" onerror="this.href='stylesheet' crossorigin="anonymous"">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Work+Sans:100,300,400,500,600,700,800,900&display=swap">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" as="style" onload="this.rel='stylesheet'"">

    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" as="style" onload="this.rel='stylesheet'"">


    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css" async/>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" async/>


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Cache-control" content="public">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script  src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" async integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script rel="preload" src="<?php echo e(mix('frontend/assets/js/combine.js')); ?>"></script>

    <!-- <script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-app.js"></script>
     <script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-messaging.js"></script>
     <script src="https://www.gstatic.com/firebasejs/4.9.1/firebase.js"></script>-->



</head>
<body>

<?php echo $__env->make('main.body.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->make('main.body.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<script>
    svgturkiyeharitasi();

</script>

</body>

</html>
<?php /**PATH C:\laragon\www\Laravel_Gazetekale\resources\views/main/home_master.blade.php ENDPATH**/ ?>