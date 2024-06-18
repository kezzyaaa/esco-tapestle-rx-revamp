
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img">
        <div class="page-banner-background-image" style="background-image: url('/images/banner-images/<?php echo e($Breadcrumb_banner); ?>');"></div>
        <svg class="page_overlay" style="" viewBox="0 0 800 260" preserveAspectRatio="none">

            <path class="page_overlay-path pathOne" d="M0,0 341,0 259,260 0,260"></path>
            <path class="page_overlay-path pathTwo" d="M0,0 247,0 178,260 0,260"></path>
            <path class="page_overlay-path pathThree" d="M381,0 382,0 220,260 219,260"></path>
        </svg>
        <div class="container">
            <div class="row align-items-end">
                <div class="col-12">
                    <div class="breadcumb-text">
                        <h1 class="pb-2"><?php echo e($page_title); ?></h1>
                        <p class="text-white"><a class="text-white" href="/"><i class="fa fa-home" aria-hidden="true"></i></a> &rsaquo; <a class="text-white" href="/<?php echo Request::segment(1); ?>"><?php echo e(ucfirst($breadcrumb_section)); ?></a> &rsaquo;<span class=""> <?php echo e($breadcrumb_name); ?></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <style type="text/css">
        .page-banner-background-image{
            width: 100%;
            height: 100%;
            background-position: center;
            background-size: cover;
            transform: scale(1);
            transition: all 0.3s;
            position: absolute;
            top: 0;
            left: 0;
        }

        .page_overlay{
            position: absolute;
            bottom: 0;
            height: 100%;
            width: 100%;
            opacity: 1;
        }

        .page_overlay-path{
            opacity: 1;
            z-index: 0;
            position: relative;
            transition: all 0.3s;
        }
        .page_overlay-path.pathOne{
            d: path("M0,0 341,0 259,260 0,260");
            fill: rgba(164, 206, 131, 0.50);
            transform: translateX(-20px);
        }

        .page_overlay-path.pathTwo{
            d: path("M0,0 247,0 178,260 0,260");
            fill: rgba(83, 122, 90, 0.73);
            transform: translateX(-20px);

        }
        .page_overlay-path.pathThree{
            d: path("M381,0 382,0 220,260 219,260");
            fill: rgba(51, 51, 51, 0.43);
            transform: skew(-8deg, 0deg);
            transform-origin: center;

        }

        .breadcumb-area:hover .page-banner-background-image{
            transform: scale(1.05);
        }
        .breadcumb-area:hover .page_overlay .pathOne{
            transform: translateX(0px);
        }
        .breadcumb-area:hover .page_overlay .pathTwo{
            transform: translateX(0px);
        }
        .breadcumb-area:hover .page_overlay .pathThree{
            transform: skew(0deg, 0deg);
        }

    </style>
<?php /**PATH C:\xampp\htdocs\esco-tapestle-rx-revamp\resources\views/components/breadcumb.blade.php ENDPATH**/ ?>