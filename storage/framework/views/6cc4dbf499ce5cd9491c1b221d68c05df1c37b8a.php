<?php $__env->startSection('title'); ?>
  <?php echo e($activePage->first()->name); ?>

<?php $__env->stopSection(); ?>

<?php if($activePage->first()->name): ?>
    <?php $__env->startSection('title'); ?><?php echo e($activePage->first()->name); ?><?php $__env->stopSection(); ?>
    <?php $__env->startSection('og_title'); ?><?php echo e($activePage->first()->name); ?><?php $__env->stopSection(); ?>
<?php endif; ?>

<?php if($activePage->first()->meta_description): ?>
    <?php $__env->startSection('meta_description'); ?><?php echo e($activePage->first()->meta_description); ?><?php $__env->stopSection(); ?>
<?php endif; ?>

<?php if($activePage->first()->meta_keywords): ?>
    <?php $__env->startSection('meta_keywords'); ?><?php echo e($activePage->first()->meta_keywords); ?><?php $__env->stopSection(); ?>
<?php endif; ?>

<?php if($activePage->first()->meta_description): ?>
    <?php $__env->startSection('og_description'); ?><?php echo e($activePage->first()->meta_description); ?><?php $__env->stopSection(); ?>
<?php endif; ?>
<?php $__env->startSection('og_type'); ?><?php echo e('page'); ?><?php $__env->stopSection(); ?>

<?php if($Breadcrumb_banner): ?>
    <?php $__env->startSection('og_image'); ?><?php echo e(url("/images/banner-images/$Breadcrumb_banner")); ?><?php $__env->stopSection(); ?>
    <?php $__env->startSection('itemprop_image'); ?><?php echo e(url("/images/banner-images/$Breadcrumb_banner")); ?><?php $__env->stopSection(); ?>
<?php endif; ?>

<?php $__env->startSection('components'); ?>

    <?php echo $__env->make('components/preloader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('components/searchbox', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('components/cookieconsent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('components/newsletterpopup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('components/floatingsocialicons', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="site-main-container">
    <!-- Start top-post Area -->
    <section class="top-post-area pt-10">
        <div class="container p-0">
            <div class="row small-gutters">
                <div class="col-lg-8 top-post-left">
                    <div class="feature-image-thumb relative box">
                        
                        <div class="overlay overlay-bg"></div>
                    <img class="img-fluid" src="/images/news-banner/full/<?php echo e($latest[0]->banner_img); ?>" alt="<?php echo e($latest[0]->title); ?>">
                        <div class="top-post-details px-3">
                             <div>
                                 <ul class="tags p-0">
                                     <li><a href="#">LATEST</a></li>
                                 </ul>
                                 <a href="<?php echo e($latest[0]->path()); ?>">
                                     <h3><?php echo e($latest[0]->title); ?></h3>
                                 </a>
                                 <ul class="meta pl-0 mb-2">
                                     <li><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> <?php echo e($latest[0]->author); ?></a></li>
                                     <li><a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i> <?php echo e($latest[0]->created_at->format("d F, Y")); ?></a></li>
                                 </ul>
                             </div>
                         </div>
                    </div>

                </div>
                <div class="col-lg-4 top-post-right">
                    <div class="single-top-post">
                        <div class="feature-image-thumb relative">
                            <div class="overlay overlay-bg"></div>
                            <img class="img-fluid" src="/images/news-banner/full/<?php echo e($latest[1]->banner_img); ?>" alt="<?php echo e($latest[1]->title); ?>">
                        </div>
                        <div class="top-post-details px-3">

                            <a href="<?php echo e($latest[1]->path()); ?>">
                                <h4><?php echo e($latest[1]->title); ?></h4>
                            </a>

                        </div>
                    </div>
                    <div class="single-top-post mt-10">
                        <div class="feature-image-thumb relative">
                            <div class="overlay overlay-bg"></div>
                            <img class="img-fluid" src="/images/news-banner/full/<?php echo e($latest[2]->banner_img); ?>" alt="<?php echo e($latest[2]->title); ?>">

                        </div>
                        <div class="top-post-details px-3">

                            <a href="<?php echo e($latest[2]->path()); ?>">
                                <h4><?php echo e($latest[2]->title); ?></h4>
                            </a>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End top-post Area -->
    <!-- Start latest-post Area -->
    <section class="latest-post-area pb-120">
        <div class="container p-0">
            <div class="row">
                <div class="col-lg-8 post-list">
                    <!-- Start latest-post Area -->
                    <!-- <?php $__currentLoopData = $newscategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $newscategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="latest-post-wrap mb-sm-4 mb-0">
                            <div class="news-cat-head">
                                <div class="cat-title"><?php echo e($newscategory->title); ?></div>
                                <a class="view-all" href="<?php echo e($newscategory->path()); ?>">View All <i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                            <?php $__currentLoopData = $newscategory->news->sortByDesc('created_at')->take(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singleNews): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="single-latest-post row align-items-center">
                                    <div class="col-md-6 post-left">
                                        <div class="feature-img custom-light-box-shadow relative">
                                            <div class="news-overlay overlay-bg"></div>
                                            <img class="img-fluid" src="/images/news-banner/thumb/<?php echo e($singleNews->banner_thumb); ?>" alt="<?php echo e($singleNews->title); ?>">
                                        </div>

                                    </div>
                                    <div class="col-md-6 post-right">
                                        <a href="<?php echo e($singleNews->path()); ?>">
                                            <h4><?php echo e($singleNews->title); ?></h4>
                                        </a>
                                        <ul class="meta">
                                            <li><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> <?php echo e($singleNews->author); ?></a></li>
                                            <li><a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i> <?php echo e($singleNews->created_at->format("d F, Y")); ?></a></li>

                                        </ul>
                                        <p class="excert secondary-text-color text-justify">
                                            <?php echo e(\Illuminate\Support\Str::limit($singleNews->description, 200, $end='...')); ?>

                                        </p>
                                    </div>
                                </div>
                                <hr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> -->

                    <div class="latest-post-wrap mb-sm-4 mb-0">
                        <div class="news-cat-head">
                            <div class="cat-title">Application Articles</div>
                            <a class="view-all" href="#">View All <i class="fa fa-eye" aria-hidden="true"></i></a>
                        </div>
                        <?php $items = ['1','2','3','4']; ?>
                        <div class="news-articles-border">
                          <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <div class="single-latest-post row align-items-center">
                                  <div class="col-md-6 post-left">
                                      <div class="feature-img custom-light-box-shadow relative">
                                          <div class="news-overlay overlay-bg"></div>
                                          <img class="img-fluid" src="/images/sample-img.png" alt="" style="height: 15em;">
                                      </div>

                                  </div>
                                  <div class="col-md-6 post-right">
                                      <a href="#">
                                          <h4>Lorem ipsum dolor</h4>
                                      </a>
                                      <ul class="meta">
                                          <li><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> Lorem ipsum dolor</a></li>
                                          <li><a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i> Lorem ipsum dolor</a></li>

                                      </ul>
                                      <p class="excert secondary-text-color text-justify">
                                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus est sem, non ultricies dolor rutrum ac. Nulla porttitor convallis quam,
                                          a imperdiet ligula sagittis nec. Quisque a neque ut est ullamcorper sagittis aliquam in turpis. Maecenas...
                                      </p>
                                  </div>
                              </div>
                              <hr>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>

                    <div class="latest-post-wrap mb-sm-4 mb-0">
                        <div class="news-cat-head">
                            <div class="cat-title">Corporate Press Release</div>
                            <a class="view-all" href="#">View All <i class="fa fa-eye" aria-hidden="true"></i></a>
                        </div>
                        <div class="news-articles-border">
                          <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <div class="single-latest-post row align-items-center">
                                  <div class="col-md-6 post-left">
                                      <div class="feature-img custom-light-box-shadow relative">
                                          <div class="news-overlay overlay-bg"></div>
                                          <img class="img-fluid" src="/images/sample-img.png" alt="" style="height: 15em;">
                                      </div>

                                  </div>
                                  <div class="col-md-6 post-right">
                                      <a href="#">
                                          <h4>Lorem ipsum dolor</h4>
                                      </a>
                                      <ul class="meta">
                                          <li><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> Lorem ipsum dolor</a></li>
                                          <li><a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i> Lorem ipsum dolor</a></li>

                                      </ul>
                                      <p class="excert secondary-text-color text-justify">
                                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus est sem, non ultricies dolor rutrum ac. Nulla porttitor convallis quam,
                                          a imperdiet ligula sagittis nec. Quisque a neque ut est ullamcorper sagittis aliquam in turpis. Maecenas...
                                      </p>
                                  </div>
                              </div>
                              <hr>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>

                    <div class="latest-post-wrap mb-sm-4 mb-0">
                        <div class="news-cat-head">
                            <div class="cat-title">Project/Customer Highlights</div>
                            <a class="view-all" href="#">View All <i class="fa fa-eye" aria-hidden="true"></i></a>
                        </div>
                        <div class="news-articles-border">
                          <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <div class="single-latest-post row align-items-center">
                                  <div class="col-md-6 post-left">
                                      <div class="feature-img custom-light-box-shadow relative">
                                          <div class="news-overlay overlay-bg"></div>
                                          <img class="img-fluid" src="/images/sample-img.png" alt="" style="height: 15em;">
                                      </div>

                                  </div>
                                  <div class="col-md-6 post-right">
                                      <a href="#">
                                          <h4>Lorem ipsum dolor</h4>
                                      </a>
                                      <ul class="meta">
                                          <li><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> Lorem ipsum dolor</a></li>
                                          <li><a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i> Lorem ipsum dolor</a></li>

                                      </ul>
                                      <p class="excert secondary-text-color text-justify">
                                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus est sem, non ultricies dolor rutrum ac. Nulla porttitor convallis quam,
                                          a imperdiet ligula sagittis nec. Quisque a neque ut est ullamcorper sagittis aliquam in turpis. Maecenas...
                                      </p>
                                  </div>
                              </div>
                              <hr>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>

                    <div class="latest-post-wrap mb-sm-4 mb-0">
                        <div class="news-cat-head">
                            <div class="cat-title">Event Highlights</div>
                            <a class="view-all" href="#">View All <i class="fa fa-eye" aria-hidden="true"></i></a>
                        </div>
                        <div class="news-articles-border">
                          <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <div class="single-latest-post row align-items-center">
                                  <div class="col-md-6 post-left">
                                      <div class="feature-img custom-light-box-shadow relative">
                                          <div class="news-overlay overlay-bg"></div>
                                          <img class="img-fluid" src="/images/sample-img.png" alt="" style="height: 15em;">
                                      </div>

                                  </div>
                                  <div class="col-md-6 post-right">
                                      <a href="#">
                                          <h4>Lorem ipsum dolor</h4>
                                      </a>
                                      <ul class="meta">
                                          <li><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> Lorem ipsum dolor</a></li>
                                          <li><a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i> Lorem ipsum dolor</a></li>

                                      </ul>
                                      <p class="excert secondary-text-color text-justify">
                                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus est sem, non ultricies dolor rutrum ac. Nulla porttitor convallis quam,
                                          a imperdiet ligula sagittis nec. Quisque a neque ut est ullamcorper sagittis aliquam in turpis. Maecenas...
                                      </p>
                                  </div>
                              </div>
                              <hr>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>

                    <!-- End latest-post Area -->
                </div>




                <div class="col-lg-4">
                    <div class="sidebars-area">
                        <div class="single-sidebar-widget editors-pick-widget">
                            <div class="news-cat-head">
                                <div class="cat-title"><?php echo e($eventsTitle); ?></div>
                                <a class="view-all" href="<?php echo e(url("/events")); ?>">View All <i class="fa fa-eye" aria-hidden="true"></i></a>

                            </div>
                            <div class="featured-news-border">

                            <div class="editors-pick-post px-2">
                                <div class="feature-img-wrap relative">
                                    <div class="feature-img relative">
                                        <div class="overlay-bg-events pt-3 pl-3">
                                            <h2 class="text-white" style="font-size: 3em; text-shadow: 2px 1px rgba(82, 82, 82, 0.62);"><?php echo e($upcomingevents->first()->event_start->format("d")); ?></h2>
                                            <h4 class="text-white mb-0"><?php echo e($upcomingevents->first()->event_start->format("M")); ?></h4>
                                            <h4 class="text-white"><?php echo e($upcomingevents->first()->event_start->format("Y")); ?></h4>

                                        </div>
                                        <img class="img-fluid" src="/images/sample-img.png" alt="<?php echo e($upcomingevents->first()->title); ?>">
                                    </div>
                                </div>

                                <div class="post-lists">
                                    <?php $__currentLoopData = $upcomingevents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $upcomingevent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="single-post d-flex flex-row">
                                        <div class="detail"><h4 style="font-size: 1em;"><?php echo e($upcomingevent->title); ?></h4>
                                            <ul class="meta">
                                                 <li><i class="fa fa-calendar-o secondary-text-color" aria-hidden="true"></i> <?php echo e($upcomingevent->event_start->format("d M, Y")); ?> - </li>
                                                 <li><i class="fa fa-calendar-o secondary-text-color" aria-hidden="true"></i> <?php echo e($upcomingevent->event_end->format("d M, Y")); ?></li>
                                             </ul>
                                             <ul class="meta">
                                                 <li><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo e($upcomingevent->location); ?></li>
                                             </ul>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                          </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End latest-post Area -->
</div>

<style>
    .box {
  position: relative;
  /* max-width: 600px;
  width: 90%;
  height: 400px; */
  background: #fff;
  box-shadow: 0 0 15px rgba(0,0,0,.1);
}

/* common */
.ribbon {
  width: 150px;
  height: 150px;
  overflow: hidden;
  position: absolute;
}
.ribbon::before,
.ribbon::after {
  position: absolute;
  z-index: -1;
  content: '';
  display: block;
  border: 5px solid #91b377;
}
.ribbon span {
  position: absolute;
  display: block;
  width: 225px;
  padding: 15px 0;
  background-color:#a4ce83;
  box-shadow: 0 5px 10px rgba(0,0,0,.1);
  color: #fff;
  font: 700 18px/1 'Lato', sans-serif;
  text-shadow: 0 1px 1px rgba(0,0,0,.2);
  text-transform: uppercase;
  text-align: center;
}

/* top left*/
.ribbon-top-left {
  top: -10px;
  left: -10px;
}
.ribbon-top-left::before,
.ribbon-top-left::after {
  border-top-color: transparent;
  border-left-color: transparent;
}
.ribbon-top-left::before {
  top: 0;
  right: 0;
}
.ribbon-top-left::after {
  bottom: 0;
  left: 0;
}
.ribbon-top-left span {
  right: -25px;
  top: 30px;
  transform: rotate(-45deg);
}

/* top right*/
.ribbon-top-right {
  top: -10px;
  right: -10px;
}
.ribbon-top-right::before,
.ribbon-top-right::after {
  border-top-color: transparent;
  border-right-color: transparent;
}
.ribbon-top-right::before {
  top: 0;
  left: 0;
}
.ribbon-top-right::after {
  bottom: 0;
  right: 0;
}
.ribbon-top-right span {
  left: -25px;
  top: 30px;
  transform: rotate(45deg);
}

/* bottom left*/
.ribbon-bottom-left {
  bottom: -10px;
  left: -10px;
}
.ribbon-bottom-left::before,
.ribbon-bottom-left::after {
  border-bottom-color: transparent;
  border-left-color: transparent;
}
.ribbon-bottom-left::before {
  bottom: 0;
  right: 0;
}
.ribbon-bottom-left::after {
  top: 0;
  left: 0;
}
.ribbon-bottom-left span {
  right: -25px;
  bottom: 30px;
  transform: rotate(225deg);
}

/* bottom right*/
.ribbon-bottom-right {
  bottom: -10px;
  right: -10px;
}
.ribbon-bottom-right::before,
.ribbon-bottom-right::after {
  border-bottom-color: transparent;
  border-right-color: transparent;
}
.ribbon-bottom-right::before {
  bottom: 0;
  left: 0;
}
.ribbon-bottom-right::after {
  top: 0;
  right: 0;
}
.ribbon-bottom-right span {
  left: -25px;
  bottom: 30px;
  transform: rotate(-225deg);
}
</style>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.newsdirectorypageView', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\esco-tapestle-rx-revamp\resources\views/newsDirectory.blade.php ENDPATH**/ ?>