
    <!-- ##### Header Area Start ##### -->
    <header class="header-area">


        <!-- Navbar Area -->
        <div class="pharma-main-menu" id="sticky-header">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar" id="pharmaNav">
                          <!-- Logo -->
                        <!-- <a class="nav-brand" href="/"><img src="/images/core-img/ep logo v2-01.svg" alt="esco pharma logo"></a> -->
                        <a class="nav-brand" href="/"><img src="/images/core-img/TAPESTLE RX 2020.png" alt="esco pharma logo"></a>
                        <div class="d-flex">
                            <div class="search-btn search-mobile d-lg-none d-block">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </div>
                            <!-- Navbar Toggler -->

                            <div class="classy-navbar-toggler">
                                <span class="navbarToggler"><span></span><span></span><span></span></span>
                            </div>
                        </div>
                        <!-- Menu -->
                    <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul style="font-weight: bold;">
                                    <li class="<?php echo e(Request::is('about*') ? 'active' : ''); ?>"><a href="/about/profile">ABOUT US</a>
                                      <ul class="dropdown">
                                          <?php $__currentLoopData = $about_sub_menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $about_sub_menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                              <li><a href="/about/<?php echo e($about_sub_menu->slug); ?>"><?php echo e($about_sub_menu->name); ?></a></li>
                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                      </ul>
                                    </li>
                                    <li class="<?php echo e(Request::is('products*') ? 'active' : ''); ?>"><a href="/products">PRODUCTS</a>
                                        <div class="megamenu">

                                            <?php $__currentLoopData = $productCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <ul class="single-mega cn-col-4">
                                                    <li class="title"><?php echo e($productCategory->name); ?></li>
                                                    <?php $__currentLoopData = $productCategory->products->where('is_activated', '=', 1)->sortBy('name'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li><a href="<?php echo e(isset($product->ext_link)?$product->ext_link:$product->path()); ?>" title="<?php echo e($product->name); ?>"><?php echo e($product->brand); ?> <?php echo e($product->name); ?></a></li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>

                                    </li>

                                    <li class="<?php echo e(Request::is('solutions*') ? 'active' : ''); ?>"><a href="/solutions/by-application">SOLUTIONS</a>
                                        <ul class="dropdown">

                                            <?php $__currentLoopData = $solutions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $solution): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li>
                                                    <a href="<?php echo e($solution->path()); ?>"><?php echo e($solution->title); ?></a>
                                                    
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>

                                    </li>
                                    <li class="<?php echo e(Request::is('services*') ? 'active' : ''); ?>"><a href="/services/nebb-cleanroom-performance-testing">SERVICES</a>
                                        <ul class="dropdown">
                                            <?php $__currentLoopData = $services_sub_menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $services_sub_menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><a href="/services/<?php echo e($services_sub_menu->slug); ?>"><?php echo e($services_sub_menu->name); ?></a></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </li>
                                    <li class="<?php echo e(Request::is('news*') ? 'active' : ''); ?>"><a href="/news">NEWS</a></li>
                                    <li class="<?php echo e(Request::is('resource*') ? 'active' : ''); ?>"><a href="/resource/technical-references">RESOURCES</a>
                                        <ul class="dropdown">
                                            <?php $__currentLoopData = $resources_sub_menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $resources_sub_menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><a href="/resource/<?php echo e($resources_sub_menu->slug); ?>"><?php echo e($resources_sub_menu->name); ?></a></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </li>
                                    <li class="<?php echo e(Request::is('contact-us*') ? 'active' : ''); ?>"><a href="/contact-us/">CONTACT US</a></li>

                                </ul>

                                <!-- Newsletter Form -->
                                <div class="search-btn d-none d-lg-block">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>

            <!-- Top Header Area -->
            <div class="top-header-area">
                <div class="container">
                    <div class="row h-100 align-items-center justify-content-between">
                        <!-- Breaking News -->

                        <div class="col-12 col-md-8
                        ">
                            <div class="breaking-news">
                                <div id="breakingNewsTicker" class="ticker">
                                    <p style="color:#FFF"><em>Providing enabling technologies to support you from Discovery to Delivery.</em></p>
                                </div>
                            </div>
                        </div>

                        <!-- Top Social Info -->
                        <div class="col-12 col-md-4 d-none d-md-block">
                            <div class="top-social-info text-right">
                                <?php $__currentLoopData = $socialmedias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $socialmedia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="<?php echo e($socialmedia->link); ?>" <?php echo e($socialmedia->type == 'social' ? 'target="_blank"' : ''); ?>  class="icon-link <?php echo e($socialmedia->name); ?> fill"><i class="fa <?php echo e($socialmedia->icon); ?>"></i></a>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



    </header>
<?php /**PATH C:\xampp\htdocs\esco-tapestle-rx-revamp\resources\views/includes/nav.blade.php ENDPATH**/ ?>