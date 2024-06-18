    <!-- ##### solutions carousel ##### -->


    <!-- <div id="solution-carousel" class="owl-carousel sol-carousel mt-3">
        @foreach($activeSolutionSel->children as $activeSolutionChild)
            <div class="item">
                <img src="/images/misc-img/solution-icons/{{$activeSolutionChild->icon}}" alt="{{$activeSolutionChild->title}}" title="{{$activeSolutionChild->title}}"/>
                <div class="inner mt-3">
                    <div class="inner-details mt-4">
                        <a href="{{$activeSolutionChild->path()}}"><h4 class="mb-2">{{$activeSolutionChild->title}}</h4></a>
                        <p>{{$activeSolutionChild->details}}</p>
                        <a href="{{$activeSolutionChild->path()}}" class="btn pharma-btn">LEARN MORE</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div> -->

    <div class="mt-3">
      <!-- Cta Content -->
      <div id="applicationsCarousel" class="applications-carousel owl-carousel owl-theme align-items-center">
          <!-- Single Hero Slide -->
          <div class="item" data-dot="<button>1</button>">
            <div class="container">
                <div class="row pt-4">
                    <div class="col-xl-12 col-md-12 col-lg-12 pt-2">
                        <div class="card containment-contorls-card shadow-sm border-0">
                            <div class="card-body p-4">
                              <div class="row" style="margin-bottom: 1rem;">

                                @foreach($row_items_1 as $row_value_1)
                                  <div class="col-lg-3 col-6 prod-single">
                                    <div class="product-card mt-4" style="box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%); background-image: linear-gradient(#48AFB5, #FFFFFF); border-radius: 5%; border: 0;">
                                      <div class="product-card-img" style="text-align: center;">
                                          <div class="p-3">
                                              <a href=""><img data-src="/images/app-icons/TPRX_application icons-0{{$row_value_1}}.svg" class="product-img lazy" alt="" title=""></a>
                                          </div>
                                          <p class=""><strong>Lorem Ipsum</strong></p>
                                      </div>
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

          <div class="item" data-dot="<button>2</button>">
            <div class="container">
                <div class="row pt-4">
                    <div class="col-xl-12 col-md-12 col-lg-12 pt-2">
                        <div class="card containment-contorls-card shadow-sm border-0">
                            <div class="card-body p-4">
                              <div class="row" style="margin-bottom: 1rem;">

                                @foreach($row_items_2 as $row_value_2)
                                  <div class="col-lg-3 col-6 prod-single">
                                    <div class="product-card mt-4" style="box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%); background-image: linear-gradient(#48AFB5, #FFFFFF); border-radius: 5%; border: 0;">
                                      <div class="product-card-img" style="text-align: center;">
                                          <div class="p-3">
                                              <a href=""><img data-src="/images/app-icons/TPRX_application icons-{{$row_value_2}}.svg" class="product-img lazy" alt="" title=""></a>
                                          </div>
                                          <p class=""><strong>Lorem Ipsum</strong></p>
                                      </div>
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

          <div class="item" data-dot="<button>3</button>">
            <div class="container">
                <div class="row pt-4">
                    <div class="col-xl-12 col-md-12 col-lg-12 pt-2">
                        <div class="card containment-contorls-card shadow-sm border-0">
                            <div class="card-body p-4">
                              <div class="row" style="margin-bottom: 1rem;">

                                @foreach($row_items_3 as $row_value_3)
                                  <div class="col-lg-3 col-6 prod-single">
                                    <div class="product-card mt-4" style="box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%); background-image: linear-gradient(#48AFB5, #FFFFFF); border-radius: 5%; border: 0;">
                                      <div class="product-card-img" style="text-align: center;">
                                          <div class="p-3">
                                              <a href=""><img data-src="/images/app-icons/TPRX_application icons-{{$row_value_3}}.svg" class="product-img lazy" alt="" title=""></a>
                                          </div>
                                          <p class=""><strong>Lorem Ipsum</strong></p>
                                      </div>
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

          <div class="item" data-dot="<button>4</button>">
            <div class="container">
                <div class="row pt-4">
                    <div class="col-xl-12 col-md-12 col-lg-12 pt-2">
                        <div class="card containment-contorls-card shadow-sm border-0">
                            <div class="card-body p-4">
                              <div class="row" style="margin-bottom: 1rem;">

                                  <div class="col-lg-3 col-6 prod-single">
                                    <div class="product-card mt-4" style="box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%); background-image: linear-gradient(#48AFB5, #FFFFFF); border-radius: 5%; border: 0;">
                                      <div class="product-card-img" style="text-align: center;">
                                          <div class="p-3">
                                              <a href=""><img data-src="/images/app-icons/TPRX_application icons-25.svg" class="product-img lazy" alt="" title=""></a>
                                          </div>
                                          <p class=""><strong>Lorem Ipsum</strong></p>
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
