
    <!-- ##### Header Area Start ##### -->
    <header class="header-area">


        <!-- Navbar Area -->
        <div class="pharma-main-menu" id="sticky-header">
            <div class="classy-nav-container breakpoint-off" style="background: #00467f">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar" id="pharmaNav">
                          <!-- Logo -->
                        <!-- <a class="nav-brand" href="/"><img src="/images/core-img/ep logo v2-01.svg" alt="esco pharma logo"></a> -->
                        <a class="nav-brand" href="/"><img src="/images/core-img/healthcare_logo2.png" alt="esco pharma logo"></a>
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
                                    <li class="{{ Request::is('about*') ? 'active' : '' }}"><a href="/about/profile" style="color: #FFF">ABOUT US</a>
                                      <ul class="dropdown">
                                          @foreach($about_sub_menus as $about_sub_menu)
                                              <li><a href="/about/{{$about_sub_menu->slug}}">{{$about_sub_menu->name}}</a></li>
                                          @endforeach
                                      </ul>
                                    </li>
                                    <li class="{{ Request::is('products*') ? 'active' : '' }}"><a href="/products" style="color: #FFF">PRODUCTS</a>
                                        <div class="megamenu">

                                            @foreach($productCategories as $productCategory)
                                                <ul class="single-mega cn-col-4">
                                                    <li class="title">{{$productCategory->name}}</li>
                                                    @foreach($productCategory->products->where('is_activated', '=', 1)->sortBy('name') as $product)
                                                    <li><a href="{{isset($product->ext_link)?$product->ext_link:$product->path()}}" title="{{$product->name}}">{{$product->brand}} {{$product->name}}</a></li>
                                                    @endforeach
                                                </ul>

                                            @endforeach
                                        </div>

                                    </li>

                                    <li class="{{ Request::is('solutions*') ? 'active' : '' }}"><a href="/solutions/by-application" style="color: #FFF">SOLUTIONS</a>
                                        <ul class="dropdown">

                                            @foreach($solutions as $solution)
                                                <li>
                                                    <a href="{{$solution->path()}}">{{$solution->title}}</a>
                                                    {{-- <ul class="dropdown">
                                                        @foreach($solution->children as $children)
                                                            <li><a href="{{$children->path()}}">{{$children->title}}</a></li>
                                                        @endforeach
                                                    </ul> --}}
                                                </li>
                                            @endforeach
                                        </ul>

                                    </li>
                                    <li class="{{ Request::is('services*') ? 'active' : '' }}"><a href="/services/nebb-cleanroom-performance-testing" style="color: #FFF">SERVICES</a>
                                        <ul class="dropdown">
                                            @foreach($services_sub_menus as $services_sub_menu)
                                                <li><a href="/services/{{$services_sub_menu->slug}}">{{$services_sub_menu->name}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="{{ Request::is('news*') ? 'active' : '' }}"><a href="/news" style="color: #FFF">NEWS</a></li>
                                    <li class="{{ Request::is('resource*') ? 'active' : '' }}"><a href="/resource/technical-references" style="color: #FFF">RESOURCES</a>
                                        <ul class="dropdown">
                                            @foreach($resources_sub_menus as $resources_sub_menu)
                                                <li><a href="/resource/{{$resources_sub_menu->slug}}">{{$resources_sub_menu->name}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="{{ Request::is('contact-us*') ? 'active' : '' }}"><a href="/contact-us/" style="color: #FFF">CONTACT US</a></li>

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
            <div class="top-header-area" style="background-color: #FFF;">
                <div class="container">
                    <div class="row h-100 align-items-center justify-content-between">
                        <!-- Breaking News -->

                        <div class="col-12 col-md-8
                        ">
                            <div class="breaking-news">
                                <div id="breakingNewsTicker" class="ticker">
                                    <p style="color: #00467f"><em>TaPestle Rx is the division of Esco Healthcare that specializes in healthcare facility and laboratory construction</em></p>
                                </div>
                            </div>
                        </div>

                        <!-- Top Social Info -->
                        <div class="col-12 col-md-4 d-none d-md-block">
                            <div class="top-social-info text-right">
                                @foreach($socialmedias as $socialmedia)
                                    <a href="{{$socialmedia->link}}" {{$socialmedia->type == 'social' ? 'target="_blank"' : ''}}  class="icon-link {{$socialmedia->name}} fill"><i class="fa {{$socialmedia->icon}}"></i></a>
                                 @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>



    </header>
