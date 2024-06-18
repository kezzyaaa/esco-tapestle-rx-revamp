      <nav id="sidebar" class="product-dir-sidebar">
                <div class="pr-2 pt-5">
                    <h5>Products A-Z</h5>
                    <!-- <ul class="list-unstyled components mb-5">
                    @foreach($products_categories_sidebar->sortBy('name') as $product_category_sidebar)
                      <li class="{{isset($product_category_sidebar->product_application_category_id)?'' : 'dropdown-toggle'}} "><a class="with-trans dropdown-toggle"  data-toggle="{{isset($product_category_sidebar->product_application_category_id)?'' : 'collapse'}}" aria-expanded="false" href="{{isset($product_category_sidebar->product_application_category_id)?(isset($product_category_sidebar->ext_link)?$product_category_sidebar->ext_link:$product_category_sidebar->path()) : '#'.str_replace(array( '\'', ' ', '®', '-' , ';', '(', ')' ), '', $product_category_sidebar->name)}}">&raquo; {{$product_category_sidebar->name}}</a>
                            @if(!isset($product_category_sidebar->product_application_category_id))
                                <ul class="collapse list-unstyled" id="{{str_replace(array( '\'', ' ', '®', '-' , ';', '(', ')' ), '', $product_category_sidebar->name)}}" style="">
                                @foreach($product_application_categories[$product_category_sidebar->id - 1]->products->where('is_activated', '=', 1)->sortBy('name') as $product)
                                @if ($product->ext_link)
                                    <li><a href="{{$product->ext_link}}" class="with-trans" target="_blank" rel="noopener noreferrer">&raquo; {{$product->brand}} {{$product->name}}</a>
                                @else
                                    <li><a href="{{$product->path()}}" class="with-trans">&raquo; {{$product->brand}} {{$product->name}}</a>
                                @endif
                                @endforeach
                                </ul>
                            @endif

                      </li>
                    @endforeach
                    </ul> -->

                    <ul class="list-unstyled components mb-5">
                      @foreach($sample_product_list as $product_list)
                      <li class="">
                        <a class="with-trans dropdown-toggle" data-toggle="collapse" aria-expanded="false" href="#">{{$product_list}}</a>
                      </li>
                      @endforeach
                    </ul>

                    {{-- <ul class="list-unstyled components mb-5">
                        @foreach($products_categories_sidebar->sortBy('name') as $product_category_sidebar)
                          <li class="{{isset($product_category_sidebar->product_application_category_id)?'' : 'dropdown-toggle'}}"><a href="{{isset($product_category_sidebar->product_application_category_id)? $product_category_sidebar->path() : '#'.str_replace(array( '\'', ' ', '®', '-' , ';', '(', ')' ), '', $product_category_sidebar->name)}}" {{isset($product_category_sidebar->product_application_category_id)?'' :'data-toggle=collapse aria-expanded=false class=collapsed'}} >&raquo; {{$product_category_sidebar->name}}</a>
                              @if(!isset($product_category_sidebar->product_application_category_id))
                                <ul class="list-unstyled collapse" id="{{str_replace(array( '\'', ' ', '®', '-' , ';', '(', ')' ), '', $product_category_sidebar->name)}}" style="">
                                @foreach($product_application_categories[$product_category_sidebar->id - 1]->products as $product)
                                  <li><a href="{{$product->path()}}">&raquo; {{$product->name}}</a>
                                @endforeach
                                </ul>
                              @endif
                          </li>
                        @endforeach
                    </ul> --}}

                      {{-- <div class="mb-5">
                          <h5>Tag Cloud</h5>
                        <div class="tagcloud mt-4">
                          <a href="#" class="tag-cloud-link">dish</a>
                          <a href="#" class="tag-cloud-link">menu</a>
                          <a href="#" class="tag-cloud-link">food</a>
                          <a href="#" class="tag-cloud-link">sweet</a>
                          <a href="#" class="tag-cloud-link">tasty</a>
                          <a href="#" class="tag-cloud-link">delicious</a>
                          <a href="#" class="tag-cloud-link">desserts</a>
                          <a href="#" class="tag-cloud-link">drinks</a>
                        </div>
                      </div>
                      <div class="mb-5">
                          <h5>Newsletter</h5>
                          <form action="#" class="subscribe-form mt-4">
                          <div class="form-group d-flex">
                              <div class="icon"><span class="icon-paper-plane"></span></div>
                            <input type="text" class="form-control" placeholder="Enter Email Address">
                          </div>
                        </form>
                    </div> --}}
          </div>
        </nav>
