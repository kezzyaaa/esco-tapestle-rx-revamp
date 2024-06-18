
    <!-- ##### Home Slider ##### -->
    <div class="" style="position: absolute; z-index: 0; background: url('/images/bg-img/blueprint_background.jpg') center no-repeat fixed;
    background-size: cover; height: calc(100vh - 100px); width: 100%;">
    </div>
    <div class="slider-container">
      <div class="slider-control left inactive"></div>
      <div class="slider-control right"></div>
      <ul class="slider-pagi"></ul>
      <div class="slider">
          @foreach ($sliders as $slider)
            <div class="slide slide-{{$slider->sort}} {{($slider->sort == '0') ? 'active' : ''}}">
                <div class="slide__bg d-lg-block d-md-none" style="background-image: url('/images/bg-img/TPRX_web banner temp-01.png');"></div>
                <!-- edit in database for complete list of images > sliders table -->
                <div class="slide__bg d-md-block d-lg-none" style="background-image: url('/images/bg-img/{{$slider->background_mobile}}');"></div>

                <div class="slide__content">
                <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                    <path class="slide__overlay-path pathOne" d="M720,190 720,195 495,405 490,405"/>
                    <path class="slide__overlay-path pathTwo" d="M720,200 720,300 600,405 500,405"/>
                </svg>

                <svg class="slide__overlay2" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                    <path class="slide__overlay-path pathThree" d="M150,0 155,0 0,155 0,150" />
                </svg>
                <svg class="slide__overlay3" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                    <path class="slide__overlay-path pathFour" d="M220,0 230,0 0,230 0,220"/>
                </svg>

                <div class="glasspane1"></div>
                <div class="glasspane2"></div>
                <div class="glasspane3"></div>


                    <div class="slide__text">
                    <div class="container">
                        <div class="row">
                        <div class="col-lg-6 col-md-8">
                            <h1 class="slide__text-heading">{{$slider->title}}</h1>
                            <p class="slide__text-desc">{{$slider->details}}</p>
                        <a class="slide__text-link" data-toggle="modal" data-target="#slider{{$slider->sort}}">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></i></a>
                        </div>
                        </div>


                    </div>

                    </div>

                </div>
            </div>

          @endforeach

      </div>
    </div>



    @foreach ($sliders as $slider)
        <div class="modal fade homeslider-modal" id="slider{{$slider->sort}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content p-4">
                    {!! $slider->content !!}
                </div>
            </div>
        </div>
   @endforeach
