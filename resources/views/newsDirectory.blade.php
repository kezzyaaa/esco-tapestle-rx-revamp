@extends('layouts.newsdirectorypageView')

@section('title')
  {{$activePage->first()->name}}
@endsection

@if($activePage->first()->name)
    @section('title'){{$activePage->first()->name}}@endsection
    @section('og_title'){{$activePage->first()->name}}@endsection
@endif

@if($activePage->first()->meta_description)
    @section('meta_description'){{$activePage->first()->meta_description}}@endsection
@endif

@if($activePage->first()->meta_keywords)
    @section('meta_keywords'){{$activePage->first()->meta_keywords}}@endsection
@endif

@if($activePage->first()->meta_description)
    @section('og_description'){{$activePage->first()->meta_description}}@endsection
@endif
@section('og_type'){{'page'}}@endsection

@if($Breadcrumb_banner)
    @section('og_image'){{url("/images/banner-images/$Breadcrumb_banner")}}@endsection
    @section('itemprop_image'){{url("/images/banner-images/$Breadcrumb_banner")}}@endsection
@endif

@section('components')

    @include('components/preloader')
    @include('components/searchbox')
    @include('components/cookieconsent')
    @include('components/newsletterpopup')
    @include('components/floatingsocialicons')


@endsection


@section('content')
<div class="site-main-container">
    <!-- Start top-post Area -->
    <section class="top-post-area pt-10">
        <div class="container p-0">
            <div class="row small-gutters">
                <div class="col-lg-8 top-post-left">
                    <div class="feature-image-thumb relative box">
                        {{-- <div class="ribbon ribbon-top-left"><span>LATEST</span></div> --}}
                        <div class="overlay overlay-bg"></div>
                    <img class="img-fluid" src="/images/news-banner/full/{{$latest[0]->banner_img}}" alt="{{$latest[0]->title}}">
                        <div class="top-post-details px-3">
                             <div>
                                 <ul class="tags p-0">
                                     <li><a href="#">LATEST</a></li>
                                 </ul>
                                 <a href="{{$latest[0]->path()}}">
                                     <h3>{{$latest[0]->title}}</h3>
                                 </a>
                                 <ul class="meta pl-0 mb-2">
                                     <li><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> {{$latest[0]->author}}</a></li>
                                     <li><a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i> {{$latest[0]->created_at->format("d F, Y")}}</a></li>
                                 </ul>
                             </div>
                         </div>
                    </div>

                </div>
                <div class="col-lg-4 top-post-right">
                    <div class="single-top-post">
                        <div class="feature-image-thumb relative">
                            <div class="overlay overlay-bg"></div>
                            <img class="img-fluid" src="/images/news-banner/full/{{$latest[1]->banner_img}}" alt="{{$latest[1]->title}}">
                        </div>
                        <div class="top-post-details px-3">

                            <a href="{{$latest[1]->path()}}">
                                <h4>{{$latest[1]->title}}</h4>
                            </a>

                        </div>
                    </div>
                    <div class="single-top-post mt-10">
                        <div class="feature-image-thumb relative">
                            <div class="overlay overlay-bg"></div>
                            <img class="img-fluid" src="/images/news-banner/full/{{$latest[2]->banner_img}}" alt="{{$latest[2]->title}}">

                        </div>
                        <div class="top-post-details px-3">

                            <a href="{{$latest[2]->path()}}">
                                <h4>{{$latest[2]->title}}</h4>
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
                    <!-- @foreach($newscategories as $newscategory)
                        <div class="latest-post-wrap mb-sm-4 mb-0">
                            <div class="news-cat-head">
                                <div class="cat-title">{{$newscategory->title}}</div>
                                <a class="view-all" href="{{$newscategory->path()}}">View All <i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                            @foreach($newscategory->news->sortByDesc('created_at')->take(4) as $singleNews)
                                <div class="single-latest-post row align-items-center">
                                    <div class="col-md-6 post-left">
                                        <div class="feature-img custom-light-box-shadow relative">
                                            <div class="news-overlay overlay-bg"></div>
                                            <img class="img-fluid" src="/images/news-banner/thumb/{{$singleNews->banner_thumb}}" alt="{{$singleNews->title}}">
                                        </div>

                                    </div>
                                    <div class="col-md-6 post-right">
                                        <a href="{{$singleNews->path()}}">
                                            <h4>{{$singleNews->title}}</h4>
                                        </a>
                                        <ul class="meta">
                                            <li><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> {{$singleNews->author}}</a></li>
                                            <li><a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i> {{$singleNews->created_at->format("d F, Y")}}</a></li>

                                        </ul>
                                        <p class="excert secondary-text-color text-justify">
                                            {{\Illuminate\Support\Str::limit($singleNews->description, 200, $end='...')}}
                                        </p>
                                    </div>
                                </div>
                                <hr>
                            @endforeach
                        </div>
                    @endforeach -->

                    <div class="latest-post-wrap mb-sm-4 mb-0">
                        <div class="news-cat-head">
                            <div class="cat-title">Application Articles</div>
                            <a class="view-all" href="#">View All <i class="fa fa-eye" aria-hidden="true"></i></a>
                        </div>
                        <?php $items = ['1','2','3','4']; ?>
                        <div class="news-articles-border">
                          @foreach($items as $item)
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
                              @endforeach
                        </div>
                    </div>

                    <div class="latest-post-wrap mb-sm-4 mb-0">
                        <div class="news-cat-head">
                            <div class="cat-title">Corporate Press Release</div>
                            <a class="view-all" href="#">View All <i class="fa fa-eye" aria-hidden="true"></i></a>
                        </div>
                        <div class="news-articles-border">
                          @foreach($items as $item)
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
                              @endforeach
                        </div>
                    </div>

                    <div class="latest-post-wrap mb-sm-4 mb-0">
                        <div class="news-cat-head">
                            <div class="cat-title">Project/Customer Highlights</div>
                            <a class="view-all" href="#">View All <i class="fa fa-eye" aria-hidden="true"></i></a>
                        </div>
                        <div class="news-articles-border">
                          @foreach($items as $item)
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
                              @endforeach
                        </div>
                    </div>

                    <div class="latest-post-wrap mb-sm-4 mb-0">
                        <div class="news-cat-head">
                            <div class="cat-title">Event Highlights</div>
                            <a class="view-all" href="#">View All <i class="fa fa-eye" aria-hidden="true"></i></a>
                        </div>
                        <div class="news-articles-border">
                          @foreach($items as $item)
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
                              @endforeach
                        </div>
                    </div>

                    <!-- End latest-post Area -->
                </div>




                <div class="col-lg-4">
                    <div class="sidebars-area">
                        <div class="single-sidebar-widget editors-pick-widget">
                            <div class="news-cat-head">
                                <div class="cat-title">{{$eventsTitle}}</div>
                                <a class="view-all" href="{{url("/events")}}">View All <i class="fa fa-eye" aria-hidden="true"></i></a>

                            </div>
                            <div class="featured-news-border">

                            <div class="editors-pick-post px-2">
                                <div class="feature-img-wrap relative">
                                    <div class="feature-img relative">
                                        <div class="overlay-bg-events pt-3 pl-3">
                                            <h2 class="text-white" style="font-size: 3em; text-shadow: 2px 1px rgba(82, 82, 82, 0.62);">{{$upcomingevents->first()->event_start->format("d")}}</h2>
                                            <h4 class="text-white mb-0">{{$upcomingevents->first()->event_start->format("M")}}</h4>
                                            <h4 class="text-white">{{$upcomingevents->first()->event_start->format("Y")}}</h4>

                                        </div>
                                        <img class="img-fluid" src="/images/sample-img.png" alt="{{$upcomingevents->first()->title}}">
                                    </div>
                                </div>

                                <div class="post-lists">
                                    @foreach($upcomingevents as $upcomingevent)
                                    <div class="single-post d-flex flex-row">
                                        <div class="detail"><h4 style="font-size: 1em;">{{$upcomingevent->title}}</h4>
                                            <ul class="meta">
                                                 <li><i class="fa fa-calendar-o secondary-text-color" aria-hidden="true"></i> {{$upcomingevent->event_start->format("d M, Y")}} - </li>
                                                 <li><i class="fa fa-calendar-o secondary-text-color" aria-hidden="true"></i> {{$upcomingevent->event_end->format("d M, Y")}}</li>
                                             </ul>
                                             <ul class="meta">
                                                 <li><i class="fa fa-map-marker" aria-hidden="true"></i> {{$upcomingevent->location}}</li>
                                             </ul>
                                        </div>
                                    </div>
                                    @endforeach
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

@endsection
