<head>
    <meta charset="UTF-8">
    <link rel="alternate" href="<?php echo e(url("/")); ?>" hreflang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $__env->yieldContent('title',$config->meta_title); ?></title>
    <meta name="description" content="<?php echo $__env->yieldContent('meta_description',$config->meta_description); ?>">

    <meta name="keywords" content="<?php echo $__env->yieldContent('meta_keywords',$config->meta_keywords); ?>">
    <meta name="author" content="<?php echo $__env->yieldContent('meta_author',$config->meta_author); ?>">
    <meta name="copyright" content="<?php echo $__env->yieldContent('meta_copyright',$config->meta_copyright); ?>">


    

    <meta name="geo.region" content="<?php echo e($config->geo_region); ?>" />
    <meta name="geo.placename" content="<?php echo e($config->geo_placename); ?>" />
    <meta name="geo.position" content="<?php echo e($config->geo_position); ?>" />

     <link rel="canonical" href="<?php echo $__env->yieldContent('canonical',url()->current()); ?>">

    <meta property="og:title" content="<?php echo $__env->yieldContent('og_title','Esco Pharma'); ?>">
    <meta property="og:description" content="<?php echo $__env->yieldContent('og_description',$config->meta_description); ?>">
    <meta property="og:image" content="<?php echo $__env->yieldContent('og_image',asset('images/bg-img/global-factory-network-home-slider-min.jpg')); ?>">
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:url" content="<?php echo e(url()->current()); ?>">
    <meta property="og:type" content="<?php echo $__env->yieldContent('og_type','Website'); ?>">
    <meta property="og:locale" content="en_US" />

    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('images/core-img/apple-touch-icon.png')); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('images/core-img/favicon-32x32.png')); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('images/core-img/favicon-16x16.png')); ?>">
    <link rel="manifest" href="<?php echo e(asset('images/core-img/site.webmanifest')); ?>">
    <link rel="mask-icon" href="<?php echo e(asset('images/core-img/safari-pinned-tab.svg')); ?>" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107500006-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-107500006-1');
    </script>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">


    <!-- Favicon -->
    <link rel="icon" href="<?php echo e(asset('images/core-img/escopharma-favicon.ico')); ?>">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.transitions.min.css" integrity="sha256-dXyOKu96u6fTl8EzuQyIRkxBEIzVLPQT8c16NSCl4Sc=" crossorigin="anonymous" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css" integrity="sha256-AWqwvQ3kg5aA5KcXpX25sYKowsX97sTCTbeo33Yfyk0=" crossorigin="anonymous" /> -->
    <link href="<?php echo e(asset('css/app.css')); ?>?v=10.26" rel="stylesheet">
</head>
<?php /**PATH C:\xampp\htdocs\esco-tapestle-rx-revamp\resources\views/includes/head.blade.php ENDPATH**/ ?>