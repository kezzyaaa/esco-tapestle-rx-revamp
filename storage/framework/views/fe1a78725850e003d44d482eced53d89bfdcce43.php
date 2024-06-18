<?php $__env->startSection('slider'); ?>
    <!-- Homepage Slider -->
    <?php echo $__env->make('components/homeslider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('components'); ?>

    <?php echo $__env->make('components/preloader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('components/searchbox', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('components/cookieconsent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('components/covid-popup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('components/newsletterpopup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('components/floatingsocialicons', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('section2'); ?>

    <!-- ##### CTA Area Start ##### -->
    <section class="cta-area bg-img">
        <div class="container py-0 py-sm-5 h-100">

            <div class="h-100 py-5 d-flex flex-column justify-content-center">
                <!-- Cta Content -->
                <div class="row pt-4">
                    <div class="col-xl-12 col-md-12 col-lg-12 pt-2">
                        <div class="card containment-contorls-card shadow-sm border-0" style="border-radius: 0; background: transparent">
                            <div class="card-body" style="padding: 0;">
                                <div class="row" style="width: 100%; margin-left: 0;">
                                    <div class="col-lg-6" style="height: 44vh; padding: 0">
                                          <div class=""style="background-image: url('/images/sample-img.png'); height: 100%; background-size: cover;
                    background-repeat: no-repeat;">
                                          </div>
                                    </div>

                                    <div class="col-lg-6" style="display: flex; align-items: center;">
                                        <div  class="containment-contorls-right p-2 px-md-5 py-md-2 mt-3 mt-sm-2">
                                          <h3><span class="teal-color">About</span> Esco TapestleRx</h3>
                                          <p style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis. Vivamus feugiat tristique malesuada. Phasellus sollicitudin maximus felis vel porttitor. Etiam at ipsum ac felis lobortis ultricies. Phasellus bibendum, arcu ac euismod semper, mauris enim viverra quam, iaculis tincidunt metus enim eget nisi. Etiam et maximus libero. Donec finibus, odio sit amet posuere pharetra, diam risus hendrerit libero, in condimentum enim arcu ut enim. Suspendisse quis neque sem.</p>
                                          <div class="pt-4">
                                              <a href="#" class="btn pharma-btn">Learn more About us</a>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <hr>



            <div class="h-100 py-5 d-flex flex-column justify-content-center">
                    <!-- Cta Content -->
                    <div class=" wow fadeInUp">
                        <h3><span class="teal-color">Esco TapestleRx</span> Products</h3>
                        <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis.</p>
                    </div>
                    <div class="row pt-md-3 pt-3 px-4 px-sm-0">

                        <div class="col-lg-4 col-md-6 pt-4 wow fadeInUp" data-wow-delay="0.50s" style="height: 43vh;">
                          <a href="#">
                            <div class="card tech-and-tools-card custom-light-box-shadow border-0" style="height: 100%; width: 98%;  border-radius: 15px;">
                                <img data-src="/images/featured-products-sample-image.png" alt="ventilation containment" title="ventilation containment" class="img-fluid lazy" style="height: 100%; border-radius: 15px;">
                                <div class="" style="position: absolute; width: 85%; text-align: justify; left: 8%; top: 72%;">
                                  <h5 style="color: white;">Pharmacy Compounding</h5>
                                  <p style="color: white;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis.</p>
                                </div>
                            </div>
                          </a>
                        </div>
                        <div class="col-lg-4 col-md-6 pt-4 wow fadeInUp" data-wow-delay="0.75s" style="height: 43vh;">
                          <a href="#">
                          <div class="card tech-and-tools-card custom-light-box-shadow border-0" style="height: 100%; width: 98%;  border-radius: 15px;">
                              <img data-src="/images/featured-products-sample-image.png" alt="ventilation containment" title="ventilation containment" class="img-fluid lazy" style="height: 100%; border-radius: 15px;">
                              <div class="" style="position: absolute; width: 85%; text-align: justify; left: 8%; top: 72%;">
                                <h5 style="color: white;">Pharmacy Compounding</h5>
                                <p style="color: white;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis.</p>
                              </div>
                          </div>
                          </a>
                        </div>
                        <div class="col-lg-4 col-md-6 pt-4 wow fadeInUp" data-wow-delay="1s" style="height: 43vh;">
                            <a href="#">
                              <div class="card tech-and-tools-card custom-light-box-shadow border-0" style="height: 100%; width: 98%;  border-radius: 15px;">
                                  <img data-src="/images/featured-products-sample-image.png" alt="ventilation containment" title="ventilation containment" class="img-fluid lazy" style="height: 100%; border-radius: 15px;">
                                  <div class="" style="position: absolute; width: 85%; text-align: justify; left: 8%; top: 72%;">
                                    <h5 style="color: white;">Pharmacy Compounding</h5>
                                    <p style="color: white;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis.</p>
                                  </div>
                              </div>
                            </a>
                        </div>
                    </div>
            </div>

            <hr>

            <div class="h-100 py-5 d-flex flex-column justify-content-center">
                <div class=" wow fadeInUp">
                    <h3><span class="teal-color">Events</span> Calendar</h3>
                    <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis.</p>
                </div>
                <!-- Cta Content -->
                <div class="events-calendar-slider owl-carousel d-flex align-items-center">
                    <!-- Single Hero Slide -->
                        <div class="container">
                            <div class="row pt-4">
                                <div class="col-xl-12 col-md-12 col-lg-12 pt-2">
                                    <div class="card containment-contorls-card shadow-sm border-0">
                                        <div class="card-body p-4">
                                            <div class="row" style="justify-content: center;">
                                                <div class="col-lg-6 row" style="padding-left: 7.5px; padding-right: 7.5px; margin-top: 1em">
                                                    <div class="col-12">
                                                      <div class="col-12 row p-0" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); margin: .5em;">
                                                          <div class="col-3 events-date-container">
                                                              <p>AUG<br />01-02</p>
                                                          </div>
                                                          <div class="col-9 events-summary-container">
                                                              <p><strong>Lorem ipsum dolor sit amet, consectetur</strong> <br /><span class="fa fa-map-marker" aria-hidden="true"></span>&nbsp;Lorem Ipsum Dolor Sit Amet</p>
                                                          </div>
                                                      </div>
                                                    </div>
                                                    <div class="col-12">
                                                      <div class="col-12 row p-0" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); margin: .5em;">
                                                          <div class="col-3 events-date-container">
                                                              <p>AUG<br />01-02</p>
                                                          </div>
                                                          <div class="col-9 events-summary-container">
                                                              <p><strong>Lorem ipsum dolor sit amet, consectetur</strong> <br /><span class="fa fa-map-marker" aria-hidden="true"></span>&nbsp;Lorem Ipsum Dolor Sit Amet</p>
                                                          </div>
                                                      </div>
                                                    </div>
                                                    <div class="col-12">
                                                      <div class="col-12 row p-0" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); margin: .5em;">
                                                          <div class="col-3 events-date-container">
                                                              <p>AUG<br />01-02</p>
                                                          </div>
                                                          <div class="col-9 events-summary-container">
                                                              <p><strong>Lorem ipsum dolor sit amet, consectetur</strong> <br /><span class="fa fa-map-marker" aria-hidden="true"></span>&nbsp;Lorem Ipsum Dolor Sit Amet</p>
                                                          </div>
                                                      </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 row" style="padding-left: 7.5px; padding-right: 7.5px; margin-top: 1em">
                                                    <div class="col-12">
                                                      <div class="col-12 row p-0" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); margin: .5em;">
                                                          <div class="col-3 events-date-container">
                                                              <p>AUG<br />01-02</p>
                                                          </div>
                                                          <div class="col-9 events-summary-container">
                                                              <p><strong>Lorem ipsum dolor sit amet, consectetur</strong> <br /><span class="fa fa-map-marker" aria-hidden="true"></span>&nbsp;Lorem Ipsum Dolor Sit Amet</p>
                                                          </div>
                                                      </div>
                                                    </div>
                                                    <div class="col-12">
                                                      <div class="col-12 row p-0" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); margin: .5em;">
                                                          <div class="col-3 events-date-container">
                                                              <p>AUG<br />01-02</p>
                                                          </div>
                                                          <div class="col-9 events-summary-container">
                                                              <p><strong>Lorem ipsum dolor sit amet, consectetur</strong> <br /><span class="fa fa-map-marker" aria-hidden="true"></span>&nbsp;Lorem Ipsum Dolor Sit Amet</p>
                                                          </div>
                                                      </div>
                                                    </div>
                                                    <div class="col-12">
                                                      <div class="col-12 row p-0" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); margin: .5em;">
                                                          <div class="col-3 events-date-container">
                                                              <p>AUG<br />01-02</p>
                                                          </div>
                                                          <div class="col-9 events-summary-container">
                                                              <p><strong>Lorem ipsum dolor sit amet, consectetur</strong> <br /><span class="fa fa-map-marker" aria-hidden="true"></span>&nbsp;Lorem Ipsum Dolor Sit Amet</p>
                                                          </div>
                                                      </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                    <!-- Single Hero Slide -->

                        <div class="container">
                            <div class="row pt-4">
                                <div class="col-xl-12 col-md-12 col-lg-12 pt-2">
                                    <div class="card containment-contorls-card shadow-sm border-0">
                                        <div class="card-body p-4">
                                            <div class="row" style="justify-content: center;">
                                                <div class="col-lg-6 row" style="padding-left: 7.5px; padding-right: 7.5px; margin-top: 1em">
                                                    <div class="col-12">
                                                      <div class="col-12 row p-0" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); margin: .5em;">
                                                          <div class="col-3 events-date-container">
                                                              <p>AUG<br />01-02</p>
                                                          </div>
                                                          <div class="col-9 events-summary-container">
                                                              <p><strong>Lorem ipsum dolor sit amet, consectetur</strong> <br /><span class="fa fa-map-marker" aria-hidden="true"></span>&nbsp;Lorem Ipsum Dolor Sit Amet</p>
                                                          </div>
                                                      </div>
                                                    </div>
                                                    <div class="col-12">
                                                      <div class="col-12 row p-0" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); margin: .5em;">
                                                          <div class="col-3 events-date-container">
                                                              <p>AUG<br />01-02</p>
                                                          </div>
                                                          <div class="col-9 events-summary-container">
                                                              <p><strong>Lorem ipsum dolor sit amet, consectetur</strong> <br /><span class="fa fa-map-marker" aria-hidden="true"></span>&nbsp;Lorem Ipsum Dolor Sit Amet</p>
                                                          </div>
                                                      </div>
                                                    </div>
                                                    <div class="col-12">
                                                      <div class="col-12 row p-0" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); margin: .5em;">
                                                          <div class="col-3 events-date-container">
                                                              <p>AUG<br />01-02</p>
                                                          </div>
                                                          <div class="col-9 events-summary-container">
                                                              <p><strong>Lorem ipsum dolor sit amet, consectetur</strong> <br /><span class="fa fa-map-marker" aria-hidden="true"></span>&nbsp;Lorem Ipsum Dolor Sit Amet</p>
                                                          </div>
                                                      </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 row" style="padding-left: 7.5px; padding-right: 7.5px; margin-top: 1em">
                                                    <div class="col-12">
                                                      <div class="col-12 row p-0" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); margin: .5em;">
                                                          <div class="col-3 events-date-container">
                                                              <p>AUG<br />01-02</p>
                                                          </div>
                                                          <div class="col-9 events-summary-container">
                                                              <p><strong>Lorem ipsum dolor sit amet, consectetur</strong> <br /><span class="fa fa-map-marker" aria-hidden="true"></span>&nbsp;Lorem Ipsum Dolor Sit Amet</p>
                                                          </div>
                                                      </div>
                                                    </div>
                                                    <div class="col-12">
                                                      <div class="col-12 row p-0" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); margin: .5em;">
                                                          <div class="col-3 events-date-container">
                                                              <p>AUG<br />01-02</p>
                                                          </div>
                                                          <div class="col-9 events-summary-container">
                                                              <p><strong>Lorem ipsum dolor sit amet, consectetur</strong> <br /><span class="fa fa-map-marker" aria-hidden="true"></span>&nbsp;Lorem Ipsum Dolor Sit Amet</p>
                                                          </div>
                                                      </div>
                                                    </div>
                                                    <div class="col-12">
                                                      <div class="col-12 row p-0" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); margin: .5em;">
                                                          <div class="col-3 events-date-container">
                                                              <p>AUG<br />01-02</p>
                                                          </div>
                                                          <div class="col-9 events-summary-container">
                                                              <p><strong>Lorem ipsum dolor sit amet, consectetur</strong> <br /><span class="fa fa-map-marker" aria-hidden="true"></span>&nbsp;Lorem Ipsum Dolor Sit Amet</p>
                                                          </div>
                                                      </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                </div>
            </div>

            <hr>

            <div class="h-100 py-5 d-flex flex-column justify-content-center">
                <div class=" wow fadeInUp">
                    <h3><span class="teal-color">Esco TapestleRx</span> News</h3>
                    <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis.</p>
                </div>
                <div class="container">
                    <div class="row pt-4">
                        <div class="col-xl-12 col-md-12 col-lg-12 pt-2 news-section">
                            <div class="card containment-contorls-card shadow-sm border-0">
                                <div class="card-body p-1">
                                    <div class="row" style="justify-content: center;">

                                        <div class="col-lg-6 row news-container">
                                            <div class="col-12 news-title-line">
                                                <div class="float-left">
                                                    <h6>Application Articles</h656>
                                                </div>
                                                <div class="float-right">
                                                    <a href="#"><u>VIEW ALL</u>&nbsp;<i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="col-6 pt-4 fadeInUp" data-wow-delay="0.50s">
                                                <div class="custom-light-box-shadow news-card-shadow">
                                                    <div class="tech-and-tools-card-image">
                                                        <img data-src="/images/sample-img.png" alt="" title="" class="img-fluid lazy">
                                                    </div>
                                                    <div class="card-body tech-and-tools-card-summary">
                                                      <i class="fa fa-calendar" aria-hidden="true">&nbsp;</i><span>09-09-21</span>&nbsp;&nbsp;<i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;<span>Singapore</span>
                                                      <p class="card-text" style="margin-top: 1em;">
                                                          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                      </p>
                                                      <a href="#">READ MORE <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 pt-4 fadeInUp" data-wow-delay="0.50s">
                                                <div class="custom-light-box-shadow news-card-shadow">
                                                    <div class="tech-and-tools-card-image">
                                                        <img data-src="/images/sample-img.png" alt="" title="" class="img-fluid lazy">
                                                    </div>
                                                    <div class="card-body tech-and-tools-card-summary">
                                                      <i class="fa fa-calendar" aria-hidden="true">&nbsp;</i><span>09-09-21</span>&nbsp;&nbsp;<i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;<span>Singapore</span>
                                                      <p class="card-text" style="margin-top: 1em;">
                                                          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                      </p>
                                                      <a href="#">READ MORE <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 row news-container">
                                            <div class="col-12 news-title-line">
                                                <div class="float-left">
                                                    <h6>Corporate Press Releases</h6>
                                                </div>
                                                <div class="float-right">
                                                    <a href="#"><u>VIEW ALL</u>&nbsp;<i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="col-6 pt-4 fadeInUp" data-wow-delay="0.50s">
                                                <div class="custom-light-box-shadow news-card-shadow">
                                                    <div class="tech-and-tools-card-image">
                                                        <img data-src="/images/sample-img.png" alt="" title="" class="img-fluid lazy">
                                                    </div>
                                                    <div class="card-body tech-and-tools-card-summary">
                                                      <i class="fa fa-calendar" aria-hidden="true">&nbsp;</i><span>09-09-21</span>&nbsp;&nbsp;<i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;<span>Singapore</span>
                                                      <p class="card-text" style="margin-top: 1em;">
                                                          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                      </p>
                                                      <a href="#">READ MORE <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 pt-4 fadeInUp" data-wow-delay="0.50s">
                                                <div class="custom-light-box-shadow news-card-shadow">
                                                    <div class="tech-and-tools-card-image">
                                                        <img data-src="/images/sample-img.png" alt="" title="" class="img-fluid lazy">
                                                    </div>
                                                    <div class="card-body tech-and-tools-card-summary">
                                                      <i class="fa fa-calendar" aria-hidden="true">&nbsp;</i><span>09-09-21</span>&nbsp;&nbsp;<i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;<span>Singapore</span>
                                                      <p class="card-text" style="margin-top: 1em;">
                                                          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                      </p>
                                                      <a href="#">READ MORE <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 row news-container">
                                            <div class="col-12 news-title-line">
                                                <div class="float-left">
                                                    <h6>Project/Customer Highlights</h6>
                                                </div>
                                                <div class="float-right">
                                                    <a href="#"><u>VIEW ALL</u>&nbsp;<i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="col-6 pt-4 fadeInUp" data-wow-delay="0.50s">
                                                <div class="custom-light-box-shadow news-card-shadow">
                                                    <div class="tech-and-tools-card-image">
                                                        <img data-src="/images/sample-img.png" alt="" title="" class="img-fluid lazy">
                                                    </div>
                                                    <div class="card-body tech-and-tools-card-summary">
                                                      <i class="fa fa-calendar" aria-hidden="true">&nbsp;</i><span>09-09-21</span>&nbsp;&nbsp;<i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;<span>Singapore</span>
                                                      <p class="card-text" style="margin-top: 1em;">
                                                          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                      </p>
                                                      <a href="#">READ MORE <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 pt-4 fadeInUp" data-wow-delay="0.50s">
                                                <div class="custom-light-box-shadow news-card-shadow">
                                                    <div class="tech-and-tools-card-image">
                                                        <img data-src="/images/sample-img.png" alt="" title="" class="img-fluid lazy">
                                                    </div>
                                                    <div class="card-body tech-and-tools-card-summary">
                                                      <i class="fa fa-calendar" aria-hidden="true">&nbsp;</i><span>09-09-21</span>&nbsp;&nbsp;<i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;<span>Singapore</span>
                                                      <p class="card-text" style="margin-top: 1em;">
                                                          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                      </p>
                                                      <a href="#">READ MORE <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 row news-container">
                                            <div class="col-12 news-title-line">
                                                <div class="float-left">
                                                    <h6>Event Highlights</h6>
                                                </div>
                                                <div class="float-right">
                                                    <a href="#"><u>VIEW ALL</u>&nbsp;<i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="col-6 pt-4 fadeInUp" data-wow-delay="0.50s">
                                                <div class="custom-light-box-shadow news-card-shadow">
                                                    <div class="tech-and-tools-card-image">
                                                        <img data-src="/images/sample-img.png" alt="" title="" class="img-fluid lazy">
                                                    </div>
                                                    <div class="card-body tech-and-tools-card-summary">
                                                      <i class="fa fa-calendar" aria-hidden="true">&nbsp;</i><span>09-09-21</span>&nbsp;&nbsp;<i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;<span>Singapore</span>
                                                      <p class="card-text" style="margin-top: 1em;">
                                                          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                      </p>
                                                      <a href="#">READ MORE <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 pt-4 fadeInUp" data-wow-delay="0.50s">
                                                <div class="custom-light-box-shadow news-card-shadow">
                                                    <div class="tech-and-tools-card-image">
                                                        <img data-src="/images/sample-img.png" alt="" title="" class="img-fluid lazy">
                                                    </div>
                                                    <div class="card-body tech-and-tools-card-summary">
                                                      <i class="fa fa-calendar" aria-hidden="true">&nbsp;</i><span>09-09-21</span>&nbsp;&nbsp;<i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;<span>Singapore</span>
                                                      <p class="card-text" style="margin-top: 1em;">
                                                          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                      </p>
                                                      <a href="#">READ MORE <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('section3'); ?>

    <!-- ##### CTA Area Start ##### -->
    <!-- <section class="parallax-area bg-img" style="background-image: url(/images/bg-img/containment-controls-parallax-bg-min.jpg);">
            <div class="container h-100" style="z-index: 2;position: relative;">
            <div class="h-100 py-5 d-flex flex-column justify-content-center">

                    <div class="  wow fadeInDown">
                        <h3>CONTAINMENT CONTROLS</h3>
                        <p class="m-0">Engineering controls for Active Pharmaceutical/Cosmeceutical Ingredients, Fine Chemicals, linkers / payloads for antibody drug conjugates Intermediates, Drug Substances, Drug Products.</p>
                    </div>
                    <div class="row pt-4">
                        <div class="col-xl-12 col-md-12 col-lg-12 pt-2">
                            <div class="card containment-contorls-card shadow-sm border-0">
                                <div class="card-body p-4">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="d-flex flex-column containment-contorls-left">
                                                <?php $__currentLoopData = $Containment_controls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Containment_control): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                    <div class="d-flex pb-3 align-items-center wow fadeInRight" data-wow-delay="0.5s">
                                                        <div class="containment-contorls-img">
                                                            <a href="<?php echo e(url("/products")); ?>"><img  src="/images/misc-img/containment-controls-large/<?php echo e($Containment_control->img_large); ?>" alt="<?php echo e($Containment_control->name); ?>" title="<?php echo e($Containment_control->name); ?>"></a>

                                                        </div>
                                                        <div class="pl-3 containment-contorls-details">
                                                        <a href="<?php echo e(url("/products")); ?>"><p class="text-uppercase m-0"><strong><?php echo e($Containment_control->name); ?></strong></p></a>
                                                        <p class=" m-0"><?php echo e($Containment_control->description); ?></p>
                                                        </div>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div  class="containment-contorls-right p-2 px-md-5 py-md-2 mt-3 mt-sm-2">
                                                <a href="<?php echo e(url("/solutions/oel-oeb")); ?>"><img class="px-2 px-md-5 wow fadeInUp lazy" data-src="/images/misc-img/CM-Symbol-green-01-min.png" alt="oel-oeb containment map" title="oel-oeb containment map" data-wow-delay="0.5s"></a>
                                                <p class=" m-0 text-center wow fadeInUp" data-wow-delay="0.75s">To help clients decide which type of equipment best suits their applications, Esco Pharma prepared a containment map defining OEB's/OELs, BSLs, Radiation, Chemical Containment, and ATEX Rating.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
            </div>
        </div>

    </section> -->

<?php $__env->stopSection(); ?>


<?php $__env->startSection('section4'); ?>


    <!-- ##### CTA Area Start ##### -->
    <!-- <section class="featured-products bg-img" style="background-color: #eeeeee">
        <div class="container h-100">
            <div class="h-100 py-5 d-flex flex-column justify-content-center">

                    <div class="row pt-1 pt-sm-5 d-flex  align-items-center">
                        <div class="col-xl-6 col-md-6 col-xs-12">
                            <div class=" pr-0 pr-md-4 pr-lg-5">
                                <p class="text-tag">cGMP/GMP Compliant Turnkey Solutions</p>
                                <h3>FEATURED PRODUCTS</h3>
                                <p class="m-0 text-secondary">Esco Pharma offers a wide range of innovative and cost-effective GMP turnkey containment solutions to cater even the most critical manufacturing processes.</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6 col-10 offset-md-0 offset-1 mt-4 mt-sm-4">
                            <div class="feature-product-slider feature-product-slider-owl owl-carousel bg-img d-flex align-items-center"  style="background-image: url(images/upload/product-slider-green-bg-min.png); background-size: 100% 100%;">
                                    <div class="container">
                                        <a href="<?php echo e(url("/products/cell-processing-isolator/19")); ?>"><img data-src="/images/product-images/full-image/home-slider-cell-processing-isolator-min.png" class="img-fluid pb-3 slider-image lazy" title="Cell Processing Isolator (CPI)" alt="Cell Processing Isolator (CPI)"></a>
                                        <p data-animation="fadeInUp" class=" text-center">Cell processing isolator</p>
                                    </div>



                                    <div class="container">
                                        <a href="<?php echo e(url("/products/gmp-compliant-radioisotope-dispensing-isolator/39")); ?>"><img data-src="/images/product-images/full-image/home-radiopharmacy-isolator-min.png" class="img-fluid pb-3 slider-image lazy" title="Radiopharmacy isolator" alt="Radiopharmacy isolator"></a>
                                        <p data-animation="fadeInUp" class=" text-center">Radiopharmacy isolator</p>
                                    </div>

                            </div>
                        </div>

                    </div>
            </div>
        </div>
    </section> -->

    <!-- ##### CTA Area Start ##### -->
    <!-- <section class="featured-products bg-img">
        <div class="container h-100">
            <div class="h-100 py-5 d-flex flex-column justify-content-center">

                    <div class="row pt-1 pt-sm-5 d-flex  align-items-center">
                        <div class="col-xl-6 col-md-6 col-xs-12 d-block d-sm-none">
                            <div class=" pr-0 pr-sm-5 pl-sm-4">
                                <p class="text-tag">Efficient and Modular</p>
                                <h3>STANDARD CONFIGURABLE PRODUCTS</h3>
                                <p class="m-0 text-secondary">We offer a range of highly flexible equipment guaranteed to meet the individual needs of each user, with a lesser turnaround time to facilitate high product yield.</p>
                            </div>
                        </div>

                        <div class="col-xl-6 col-md-6 col-10 offset-md-0 offset-1 mt-4 mt-sm-4">
                            <div class="feature-product-slider standard-configurable-product-slider owl-carousel bg-img d-flex align-items-center"  style="background-image: url(images/upload/product-slider-gray-bg-min.png); background-size: 100% 100%;">

                                    <div class="container">
                                        <a href="<?php echo e(url("/products/laminar-flow-straddle-units/5")); ?>"><img data-src="/images/product-images/full-image/home-slider-lf-stradle-unit-min.png" class="img-fluid pb-3 slider-image lazy" title="Esco Enterprise Laminar Flow Straddle Units (Single/Double)" alt="Esco Enterprise Laminar Flow Straddle Units (Single/Double)"></a>
                                        <p data-animation="fadeInUp" class=" text-center">Esco Enterprise Laminar Flow <br>Straddle Units (Single/Double)</p>
                                    </div>



                                    <div class="container">
                                        <a href="<?php echo e(url("/products/healthcare-platform-isolator-with-filter-below-workzone/22")); ?>"><img data-src="/images/product-images/full-image/home-slider-healthcare-platform-min.png" class="img-fluid pb-3 slider-image lazy" title="Isoclean Healthcare Platform Isolator" alt="Isoclean Healthcare Platform Isolator"></a>
                                        <p data-animation="fadeInUp" class=" text-center">Isoclean<sup>&reg;</sup> Healthcare Platform Isolator</p>
                                    </div>

                                    <div class="container">
                                        <a href="<?php echo e(url("/products/turbulent-flow-aseptic-isolator/28")); ?>"><img data-src="/images/product-images/full-image/home-slider-turbulent-flow-aseptic-isolator-min.png" class="img-fluid pb-3 slider-image lazy" title="Turbulent Flow Aseptic Isolator" alt="Turbulent Flow Aseptic Isolator"></a>
                                        <p data-animation="fadeInUp" class=" text-center">Turbulent Flow Aseptic Isolator</p>
                                    </div>
                            </div>

                        </div>


                        <div class="col-xl-6 col-md-6 col-xs-12 d-none d-sm-block">
                            <div class="standard-prod  ml-0 ml-md-5 pr-0">
                                <p class="text-tag">Efficient and Modular</p>

                                <h3>STANDARD CONFIGURABLE PRODUCTS</h3>
                                <p class="m-0 text-secondary">We offer a range of highly flexible equipment guaranteed to meet the individual needs of each user, with a lesser turnaround time to facilitate high product yield.</p>
                            </div>
                        </div>

                    </div>
            </div>
        </div>
    </section> -->


<!--     <div class="bcg-parallax">
        <div class="bcg"></div>
        <div class="content-wrapper">
            <h3 class="text-white">Section with parallax effect</h3>
            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae voluptates, animi illum cum repellendus adipisci nulla, ipsam natus rem pariatur excepturi dolores consequatur nisi eos, maiores maxime placeat nam necessitatibus.</p>
        </div>
    </div> -->


    <!-- ##### CTA Area Start ##### -->
    <!-- <section class="featured-products bg-img" style="background-color: #eeeeee">
        <div class="container h-100">
            <div class="h-100 py-5 d-flex flex-column justify-content-center">

                    <div class="row pt-1 pt-sm-5 d-flex  align-items-center">
                        <div class="col-xl-6 col-md-6 col-xs-12">
                            <div class=" pr-0 pr-md-4 pr-lg-5">
                                <p class="text-tag">Tailored-Fit for Your Needs</p>
                                <h3>CUSTOM-TAILORED PRODUCTS</h3>
                                <p class="m-0 text-secondary">Our team of experts are able to provide equipment designs that are tailored-fit for its intended processes and unit operations, guaranteed to meet the rigorous demands of GMP manufacturing industries.</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6 col-10 offset-md-0 offset-1 mt-4 mt-sm-4">
                            <div class="feature-product-slider custom-tailored-product-slider owl-carousel bg-img d-flex align-items-center"  style="background-image: url(images/upload/product-slider-green-bg-min.png); background-size: 100% 100%; ">


                                    <div class="container">
                                        <a href="<?php echo e(url("/products/biobooth/37")); ?>"><img data-src="/images/product-images/full-image/home-slider-biobooth-powder-coated-min.png" class="img-fluid pb-3 slider-image lazy" title="Esco BioBooth™" alt="Esco BioBooth™"></a>
                                        <p data-animation="fadeInUp" class=" text-center">BioBooth&trade;</p>
                                    </div>


                                    <div class="container">
                                        <a href="<?php echo e(url("/products/downflow-booths/3")); ?>"><img data-src="/images/product-images/full-image/home-slider-downflow-booths-min.png" class="img-fluid pb-3 slider-image lazy" title="Downflow Booth" alt="Downflow Booth"></a>
                                        <p data-animation="fadeInUp" class=" text-center">Downflow Booth</p>
                                    </div>

                            </div>

                        </div>
                    </div>
            </div>
        </div>
    </section> -->



<?php $__env->stopSection(); ?>

<?php $__env->startSection('section5'); ?>

    <!-- ##### CTA Area Start ##### -->
    <!-- ##### CTA Area Start ##### -->
    <!-- <section class="solutions-section bg-img" style="background-image: url(/images/bg-img/solutions-section-bg-min.jpg);">
        <div class="container h-100">
            <div class="h-100 py-5 d-flex flex-column justify-content-center">

                    <div class=" pr-5">
                        <h3>SOLUTIONS</h3>
                        <p class="m-0 ">Discover how Esco Pharma creates innovative turnkey solutions tailored to meet each client's individual needs.</p>
                    </div>
                    <div class="">
                        <div class="">
                            <div id="cf7_controls" class="">

                                <div class="cf7_controls-img-details">
                                    <div class="cf7_controls-img-details1">
                                        <div class="cf7_controls-img-details2" style="">
                                            <div id="cf7" class="shadow">

                                                    <div class="opaque solutions-content " style="display: flex;height: 100%; background-color: #48AFB5; align-items: center;  justify-content: center;">
                                                         <div>
                                                            <img src="/images/core-img/EscoPharma only REV-min.png" alt="esco pharma solutions" style="top: 50%;width: 85%; position: relative;" class="px-5">
                                                            <p class="text-white mt-4" style="font-weight: 600;">Hover on each topic to learn more</p>
                                                         </div>

                                                     </div>
                                                     <?php $__currentLoopData = $activeSolutionSel->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activeSolutionChild): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="solutions-content solutions-content-index" style="height: 100%;">
                                                            <img data-src="/images/misc-img/solution-icons/<?php echo e($activeSolutionChild->icon); ?>" class="lazy" alt="<?php echo e($activeSolutionChild->title); ?>" />
                                                            <p class="px-4"><?php echo e(\Illuminate\Support\Str::limit($activeSolutionChild->details, 160, $end='...')); ?></p>
                                                            <a href="<?php echo e($activeSolutionChild->path()); ?>" class="btn pharma-btn">LEARN MORE</a>

                                                        </div>
                                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>

                                            </div>
                                        </div>
                                    </div>



                                    <div class="hoverable-solutions hover-sol-left">
                                        <?php $__currentLoopData = $activeSolutionSel->childrenFirstHalf; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activeSolutionChild): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <p data-solution-count="<?php echo e($loop->index); ?>"><?php echo e($activeSolutionChild->title); ?></p>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>



                                    <div class="hoverable-solutions hover-sol-right">
                                        <?php $__currentLoopData = $activeSolutionSel->childrenSecondHalf; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activeSolutionChild): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <p data-solution-count="<?php echo e($loop->index + 10); ?>"><?php echo e($activeSolutionChild->title); ?></p>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                            </div>
                        </div>



                        </div>
                    </div>
            </div>
        </div>
    </section> -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('section6'); ?>

<!-- <section class="bg-img">
    <div class="container">
        <div class=" py-0 pt-sm-2 my-5 d-flex flex-column justify-content-center">

                <div class=" pr-5">
                    <h3>YOUR TURNKEY SOLUTION PROVIDER</h3>
                    <p class="m-0 ">For Isolation Containment, Clean Air, and Cross-Contamination Facility Integrated Barrier Technologies</p>
                </div>
        </div>
    </div>
    <div style=" width: 100%; background: #48AFB5;">
        <div class="container">
            <div class=" py-2 py-sm-5  d-flex flex-column justify-content-center">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div class="turnkey-solution-content">
                            <div class="p-3 mt-3 turnkey-solution-box">
                                <img data-src="/images/misc-img/turnkey-solutions/shorten-sales-cycle-in-realtime-min.png" title="SHORTEN SALES CYCLE IN REALTIME" alt="SHORTEN SALES CYCLE IN REALTIME" class="img-fluid lazy">
                                <div class="turnkey-solution-box-details">
                                    <p class="text-white text-center p-1 p-sm-4">The 25 direct sales/service, with local presales, within 40 global locations that Esco offers will shorten real-time sales cycle.</p>
                                </div>
                                <div class="turnkey-solution-box-ovelay">
                                </div>
                            </div>
                            <p class="text-center mt-2 text-white turnkey-solution-title">SHORTEN SALES CYCLE IN REALTIME</p>
                        </div>

                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="turnkey-solution-content">
                            <div class="p-3 mt-3 turnkey-solution-box">
                                <img data-src="/images/misc-img/turnkey-solutions/distributed-manufacturing-in-3-contenents-min.png" class="lazy img-fluid" title="DISTRIBUTED MANUFACTURING IN 3 CONTINENTS" alt="DISTRIBUTED MANUFACTURING IN 3 CONTINENTS">
                                <div class="turnkey-solution-box-details">
                                    <p class="text-white text-center p-1 p-sm-4">The three factories of Esco span the continents of Asia, Europe, and America with their own ISO 9001, 14001, and 13845  (only in Asia) Sheetmetal and Assembly Factory- vertically integrated down to the component level.</p>
                                </div>
                                <div class="turnkey-solution-box-ovelay">
                                </div>
                            </div>
                            <p class="text-center mt-2 text-white turnkey-solution-title">DISTRIBUTED MANUFACTURING IN 3 CONTINENTS </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="turnkey-solution-content">
                            <div class="p-3 mt-3 turnkey-solution-box">
                                <img data-src="/images/misc-img/turnkey-solutions/process-driven-products-min.png" class="img-fluid lazy" title="PROCESS-DRIVEN PRODUCTS" alt="PROCESS-DRIVEN PRODUCTS">
                                <div class="turnkey-solution-box-details">
                                    <p class="text-white text-center p-1 p-sm-4">Esco’s team of highly experienced engineers and scientists, design and deliver top calibre equipment for the critical processes of pharmaceutical manufacturing. </p>
                                </div>
                                <div class="turnkey-solution-box-ovelay">
                                </div>


                            </div>
                            <p class="text-center mt-2 text-white turnkey-solution-title">PROCESS-DRIVEN PRODUCTS</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="turnkey-solution-content">
                            <div class="p-3 mt-3 turnkey-solution-box">
                                <img data-src="/images/misc-img/turnkey-solutions/cgmp-compliance-min.png" class="img-fluid lazy" title="cGMP COMPLIANCE" alt="cGMP COMPLIANCE">
                                <div class="turnkey-solution-box-details">
                                    <p class="text-white text-center p-1 p-sm-4">All equipment are designed in compliance with the standards of current good manufacturing practice; promoting the worldwide production of high quality pharmaceuticals.</p>
                                </div>
                                <div class="turnkey-solution-box-ovelay">
                                </div>
                            </div>
                            <p class="text-center mt-2 text-white turnkey-solution-title">cGMP COMPLIANCE</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="turnkey-solution-content">
                            <div class="p-3 mt-3 turnkey-solution-box">
                                <img data-src="/images/misc-img/turnkey-solutions/purchase-order-min.png" class="img-fluid lazy" title="PURCHASE ORDERS" alt="PURCHASE ORDERS">
                                <div class="turnkey-solution-box-details">
                                    <p class="text-white text-center p-1 p-sm-4">Our global presence allows decentralized contracts so purchases and/or contracts are made in local currency and language.</p>
                                </div>
                                <div class="turnkey-solution-box-ovelay">
                                </div>

                            </div>
                            <p class="text-center mt-2 text-white turnkey-solution-title">PURCHASE ORDERS</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="turnkey-solution-content">
                            <div class="p-3 mt-3 turnkey-solution-box">
                                <img data-src="/images/misc-img/turnkey-solutions/after-market-support-min.png" class="img-fluid lazy" alt="AFTERMARKET SUPPORT" title="AFTERMARKET SUPPORT">
                                <div class="turnkey-solution-box-details">
                                    <p class="text-white text-center p-1 p-sm-4">Esco employs a number of highly trained service engineers in each of its local offices for a rapid and direct response to each client's service requirements; thus, preventing profit losses. </p>
                                </div>
                                <div class="turnkey-solution-box-ovelay">
                                </div>
                            </div>
                            <p class="text-center mt-2 text-white turnkey-solution-title">AFTERMARKET SUPPORT</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="turnkey-solution-content">
                            <div class="p-3 mt-3 turnkey-solution-box">
                                <img data-src="/images/misc-img/turnkey-solutions/esco-aster-process-study-lab-min.png" class="img-fluid lazy" title="ESCO ASTER:PROCESS STUDY LABS & ANALYTICS" alt="ESCO ASTER:PROCESS STUDY LABS & ANALYTICS">
                                <div class="turnkey-solution-box-details">
                                    <p class="text-white text-center p-1 p-sm-4">Our sister subsidiary, Esco Aster, is an independent cGMP CDMO company capable of providing PD services, with the necessary validation studies (gas cycle), as required by the client. </p>
                                </div>
                                <div class="turnkey-solution-box-ovelay">
                                </div>
                            </div>
                            <p class="text-center mt-2 text-white turnkey-solution-title">ESCO ASTER:PROCESS STUDY LABS & ANALYTICS</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="turnkey-solution-content">
                            <div class="p-3 mt-3 turnkey-solution-box">
                                <img data-src="/images/misc-img/turnkey-solutions/quality-and-precision-min.png" class="img-fluid lazy" title="QUALITY AND PRECISION" alt="QUALITY AND PRECISION">
                                <div class="turnkey-solution-box-details">
                                    <p class="text-white text-center p-1 p-sm-4">The three factories of Esco in Asia, Europe, and America, houses a team of highly experienced engineers who design and deliver top calibre equipment for the critical processes of pharmaceutical manufacturing.</p>
                                </div>
                                <div class="turnkey-solution-box-ovelay">
                                </div>

                            </div>
                            <p class="text-center mt-2 text-white turnkey-solution-title">QUALITY AND PRECISION</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- ##### End of Your turnkey solution provider section ##### -->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('section7'); ?>

<!-- <section class=" bg-img">
    <div class="container">
        <div class="py-5 d-flex flex-column justify-content-center">

                <div class=" pr-0 pr-sm-5">
                    <h3>STOCK UNITS</h3>
                    <p class="m-0 ">Various GMP compliants standard units are readily available for installation in your facilities. Checkout the Esco office near you today!</p>
                </div>

                <div class="delicious-tabs-content stock-units-tab mt-5">

                    <div class="tab-content border border-secondary  border-bottom-0 p-3 px-2 px-md-5" id="myTabContent">
                        <div class="stock-units-tab tab-pane fade active show" id="tab1" role="tabpanel" aria-labelledby="tab--1">
                            <div class="stock-units-tab-content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img  data-src="/images/product-images/full-image/home-slider-downflow-booths-min.png" class="img-fluid pb-3 px-2 px-md-5 stock-units-prod-img lazy" title="Downflow Booth" alt="Downflow Booth">
                                    </div>
                                    <div class="col-md-6 d-flex flex-column justify-content-center">
                                        <div>
                                        <h3 class="stock-units-prod-title">DOWNFLOW BOOTH</h3>
                                        <p class="mb-1">Downflow booths, Flowhoods, and Glassware Hoods all utilize airflow containment by air entrainment technology to ensure clean air...</p>
                                        <a href="<?php echo e(url("/products/downflow-booths/3")); ?>" class="pharma-btn text-center">READ MORE <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                        <div class="stock-units-contact-det mt-4">
                                            <p><strong>CONTACT DETAILS</strong></p>
                                            <p class="mb-1">Pharma Factory<br>2512 Metropolitan Dr. Suite 120-B<br>Feasterville-Trevose, PA 19053-6738<br>Tel: +1 215-322-2155 - Ext 1101<br>Email: eti.pharma@escoglobal.com<br>Website: www.escopharma.com</p>
                                        </div>
                                    </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab--2">
                            <div class="delicious-tab-content">

                                <div class="delicious-tab-text">
                                    <center><img  data-src="/images/misc-img/stay-connected-for-updates-min.jpg" class="img-fluid pb-3 stock-units-prod-img lazy" title="Downflow Booth" alt="Downflow Booth" src="/images/misc-img/stay-connected-for-updates-min.jpg"></center>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab--3">
                            <div class="delicious-tab-content">

                                <div class="delicious-tab-text">
                                    <center><img  data-src="/images/misc-img/stay-connected-for-updates-min.jpg" class="img-fluid pb-3 stock-units-prod-img lazy" title="Downflow Booth" alt="Downflow Booth" src="/images/misc-img/stay-connected-for-updates-min.jpg"></center>

                                </div>
                            </div>
                        </div>
                    </div>

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active show" id="tab--1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">Americas (USA)</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab--2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Europe (UK)</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab--3" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">Asia | Rest of the World</a>
                        </li>
                    </ul>

                </div>
        </div>

    </div>

</section> -->

<?php $__env->stopSection(); ?>



<?php $__env->startSection('section8'); ?>

   <!-- ##### News & events section ##### -->

   <!-- <section class=" bg-img"  style="background:rgba(238, 238, 238, 0.3)">
    <hr>

    <div class="container">

        <div class=" py-5 d-flex flex-column justify-content-center">

                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class=" pr-5">
                            <h3 class="smaller-title"><?php echo e($eventsTitle); ?></h3>
                        </div>
                        <div class="events-list-home">
                            <?php $__currentLoopData = $upcomingevents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $upcomingevent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="event-item row mt-4">
                                    <div class="col-4">
                                        <div class="event-date">
                                            <h6 class="text-center text-white"><?php echo e($upcomingevent->event_start->format("M")); ?><br><span class="font-weight-bold event-day"><?php echo e($upcomingevent->event_start->format("d")); ?>-<?php echo e($upcomingevent->event_end->format("d")); ?></span></h6>
                                        </div>
                                    </div>
                                    <div class="col-8 d-flex align-items-center">
                                        <div>
                                            <h6><?php echo e($upcomingevent->title); ?></h6>
                                            <p class="secondary-text-color"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo e($upcomingevent->location); ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(url("/events")); ?>" class="pharma-btn">VIEW MORE <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-12">
                        <div class=" pr-5 mt-5 mt-md-4 mt-lg-0">
                            <h3>NEWS</h3>
                        </div>
                        <div class="news-list-home">
                            <div class="row">
                                <div class="col-12">
                                    <div class="main-news">
                                        <h6 class="news-category-title"><?php echo e($newscategories[0]->title); ?></h6>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <a href="<?php echo e($newscategories[0]->news->sortByDesc('created_at')->first()->path()); ?>"><img data-src="/images/news-banner/thumb/<?php echo e($newscategories[0]->news->sortByDesc('created_at')->first()->banner_thumb); ?>" class="custom-light-box-shadow lazy"></a>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="new-details">
                                                    <a href="<?php echo e($newscategories[0]->news->sortByDesc('created_at')->first()->path()); ?>"><h6 class="news-title mt-2 mt-sm-2"><?php echo e($newscategories[0]->news->sortByDesc('created_at')->first()->title); ?></h6></a>
                                                    <p class="mb-0 secondary-text-color"><?php echo e($newscategories[0]->news->sortByDesc('created_at')->first()->description); ?></p>
                                                    <a href="<?php echo e($newscategories[0]->news->sortByDesc('created_at')->first()->path()); ?>" class="pharma-btn">READ MORE <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="main-news">
                                        <h6 class="news-category-title"><?php echo e($newscategories[1]->title); ?></h6>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <a href="<?php echo e($newscategories[1]->news->sortByDesc('created_at')->first()->path()); ?>"><img data-src="/images/news-banner/thumb/<?php echo e($newscategories[1]->news->sortByDesc('created_at')->first()->banner_thumb); ?>" class="custom-light-box-shadow lazy"></a>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="new-details">
                                                    <a href="<?php echo e($newscategories[1]->news->sortByDesc('created_at')->first()->path()); ?>"><h6 class="news-title mt-2 mt-sm-2"><?php echo e($newscategories[1]->news->sortByDesc('created_at')->first()->title); ?></h6></a>
                                                    <p class="mb-0 secondary-text-color"><?php echo e($newscategories[1]->news->sortByDesc('created_at')->first()->description); ?></p>
                                                    <a href="<?php echo e($newscategories[1]->news->sortByDesc('created_at')->first()->path()); ?>" class="pharma-btn">READ MORE <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="main-news">
                                        <h6 class="news-category-title"><?php echo e($newscategories[2]->title); ?></h6>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <a href="<?php echo e($newscategories[2]->news->sortByDesc('created_at')->first()->path()); ?>"><img data-src="/images/news-banner/thumb/<?php echo e($newscategories[2]->news->sortByDesc('created_at')->first()->banner_thumb); ?>" class="custom-light-box-shadow lazy"></a>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="new-details">
                                                    <a href="<?php echo e($newscategories[2]->news->sortByDesc('created_at')->first()->path()); ?>"><h6 class="news-title mt-2 mt-sm-2"><?php echo e($newscategories[2]->news->sortByDesc('created_at')->first()->title); ?></h6></a>
                                                    <p class="mb-0 secondary-text-color"><?php echo e($newscategories[2]->news->sortByDesc('created_at')->first()->description); ?></p>
                                                    <a href="<?php echo e($newscategories[2]->news->sortByDesc('created_at')->first()->path()); ?>" class="pharma-btn">READ MORE <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </div>

                </div>

        </div>
    </div>

</section> -->

<!-- ##### End of News & events section ##### -->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('section9'); ?>

<section>
    <div class="container">
        <div class=" py-5 d-flex flex-column justify-content-center">
                <!-- Cta Content -->
                <div class=" pr-5">
                    <a href="#"><h3><span class="teal-color">Global</span> Reference</h3></a>
                </div>

                <div class="mt-4  global-reference">
                    <img class="global-reference-map lazy" data-src="/images/misc-img/tprx-map-01.png" alt="global references">
                     <!-- <i class="fa fa-map-marker pin rus fa-4x" data-countryname="Russia 3" aria-hidden="true" ></i>
                     <i class="fa fa-map-marker pin jap fa-3x" data-countryname="Japan 6" aria-hidden="true" ></i>
                     <i class="fa fa-map-marker pin kor fa-2x" data-countryname="South Korea 7" aria-hidden="true" ></i>
                     <i class="fa fa-map-marker pin tai fa-2x" data-countryname="Taiwan 3" aria-hidden="true" ></i>
                     <i class="fa fa-map-marker pin phi fa-2x" data-countryname="Philippines 20" aria-hidden="true" ></i>
                     <i class="fa fa-map-marker pin aus fa-4x" data-countryname="Australia 17" aria-hidden="true" ></i>
                     <i class="fa fa-map-marker pin new fa-3x" data-countryname="New Zealand 1" aria-hidden="true" ></i>
                     <i class="fa fa-map-marker pin chi fa-3x" data-countryname="China 1" aria-hidden="true" ></i>
                     <i class="fa fa-map-marker pin sin fa-2x" data-countryname="Singapore 19" aria-hidden="true" ></i>
                     <i class="fa fa-map-marker pin hkg fa-1x" data-countryname="Hong Kong 20" aria-hidden="true" ></i>
                     <i class="fa fa-map-marker pin vie fa-2x" data-countryname="Vietnam 43" aria-hidden="true" ></i>
                     <i class="fa fa-map-marker pin cam fa-1x" data-countryname="Cambodia 1" aria-hidden="true" ></i>
                     <i class="fa fa-map-marker pin thai fa-2x" data-countryname="Thailand 24" aria-hidden="true" ></i>
                     <i class="fa fa-map-marker pin mmy fa-2x" data-countryname="Myanmar 1" aria-hidden="true" ></i>
                     <i class="fa fa-map-marker pin bang fa-1x" data-countryname="Bangladesh 8" aria-hidden="true" ></i> -->
                     <!-- <i class="fa fa-map-marker pin sri fa-2x" aria-hidden="true" ></i> -->
                     <!-- <i class="fa fa-map-marker pin ind fa-3x" data-countryname="India 5" aria-hidden="true" ></i> -->
                     <!-- <i class="fa fa-map-marker pin pak fa-2x" aria-hidden="true" ></i> -->
                     <!-- <i class="fa fa-map-marker pin kaz fa-3x" data-countryname="Kazhakstan 1" aria-hidden="true" ></i>
                     <i class="fa fa-map-marker pin oman fa-2x" data-countryname="Oman 1" aria-hidden="true" ></i>
                     <i class="fa fa-map-marker pin uae fa-1x" data-countryname="UAE 1" aria-hidden="true" ></i>
                     <i class="fa fa-map-marker pin som fa-2x" data-countryname="Somalia 2" aria-hidden="true" ></i>
                     <i class="fa fa-map-marker pin eth fa-2x" data-countryname="Ethiopia 1" aria-hidden="true" ></i>
                     <i class="fa fa-map-marker pin ken fa-2x" data-countryname="Kenya 3" aria-hidden="true" ></i>
                     <i class="fa fa-map-marker pin saf fa-3x" data-countryname="South Africa 5" aria-hidden="true" ></i> -->
                     <!-- <i class="fa fa-map-marker pin car fa-3x" aria-hidden="true" ></i> -->
                     <!-- <i class="fa fa-map-marker pin alg fa-3x" data-countryname="Algeria 2" aria-hidden="true" ></i>
                     <i class="fa fa-map-marker pin egy fa-2x" data-countryname="Egypt 14" aria-hidden="true" ></i>
                     <i class="fa fa-map-marker pin isra fa-1x" data-countryname="Israel 5" aria-hidden="true" ></i>
                     <i class="fa fa-map-marker pin leb fa-1x" data-countryname="Lebanon 6" aria-hidden="true" ></i>
                     <i class="fa fa-map-marker pin turk fa-2x" data-countryname="Turkey 1" aria-hidden="true" ></i>
                     <i class="fa fa-map-marker pin bulg fa-2x" data-countryname="Bulgaria 7" aria-hidden="true" ></i>
                     <i class="fa fa-map-marker pin serb fa-1x" data-countryname="Serbia 1" aria-hidden="true" ></i>
                     <i class="fa fa-map-marker pin ita fa-2x" data-countryname="Italy 1" aria-hidden="true" ></i>
                     <i class="fa fa-map-marker pin czech fa-2x" data-countryname="Czech Republic 1" aria-hidden="true" ></i>
                     <i class="fa fa-map-marker pin uk fa-3x" data-countryname="UK 5" aria-hidden="true" ></i>
                     <i class="fa fa-map-marker pin ire fa-2x" data-countryname="Ireland 1" aria-hidden="true" ></i> -->
                     <!-- <i class="fa fa-map-marker pin can fa-3x" aria-hidden="true" ></i> -->
                     <!-- <i class="fa fa-map-marker pin usa fa-4x" data-countryname="USA 54" aria-hidden="true" ></i>
                     <i class="fa fa-map-marker pin mex fa-3x" data-countryname="Mexico 2" aria-hidden="true" ></i>
                     <i class="fa fa-map-marker pin bra fa-4x" data-countryname="Brazil 3" aria-hidden="true" ></i>
                     <i class="fa fa-map-marker pin uru fa-2x" data-countryname="Uruguay 3" aria-hidden="true" ></i>
                     <i class="fa fa-map-marker pin arg fa-3x" data-countryname="Argentina 1" aria-hidden="true" ></i>
                     <i class="fa fa-map-marker pin chil fa-2x" data-countryname="Chile 2" aria-hidden="true" ></i> -->

                     <!-- <span class="countrylabel invisible">Tooltip text</span> -->
                </div>

                <!-- <div class="row mt-3 d-sm-none ">
                    <div class="col-4">
                         <p class="global-reference-list">SINGAPORE: 19<br> INDONESIA: 19<br> MALAYSIA: 11<br> THAILAND: 24<br> VIETNAM: 43<br> PHILIPPINES: 20<br> HONG KONG: 20<br> SOUTH KOREA: 7<br> CAMBODIA: 1<br> JAPAN: 6<br> CHINA: 1<br> TAIWAN: 3<br> MYANMAR: 1<br> INDIA: 5</p>
                    </div>
                    <div class="col-4">
                         <p class="global-reference-list">MEXICO: 2<br> SOMALIA: 2<br> SOUTH AFRICA: 5<br> TURKEY: 1<br> ALGERIA: 2<br> EGYPT: 14<br> ETHIOPIA: 1<br> ISRAEL: 5<br> KENYA: 3<br> LEBANON: 6<br> OMAN: 1<br> UAE: 1<br> UK: 5 <br>IRELAND: 1</p>
                    </div>
                    <div class="col-4">
                         <p class="global-reference-list">BANGLADESH: 8<br> USA: 54<br> URUGUAY: 3<br> ARGENTINA: 1<br> BRAZIL: 3<br> CHILE: 2<br> CZECH REPUBLIC: 1<br> ITALY: 1<br> RUSSIA: 3<br> SERBIA: 1<br> KAZHAKSTAN: 1<br> BULGARIA: 7<br> NEW ZEALAND: 1<br> AUSTRALIA: 17</p>
                    </div>
                </div> -->
        </div>
    </div>
</section>

   <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/homepageView', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\esco-tapestle-rx-revamp\resources\views/home.blade.php ENDPATH**/ ?>