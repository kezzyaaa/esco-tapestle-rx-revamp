@extends('layouts.productDirectoryView')

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




  <div id="content" class="px-lg-5 px-3 py-3 py-md-5 w-100" style="background: rgba(238, 238, 238, 0.3);">
    <!-- <div class="product-category-title pr-0 pr-sm-5">
        <h2 class="mb-3">Protection Guaranteed with Esco Pharma Turnkey Solutions</h2>
    </div>
    <div class="product-directory-containment-controls">
        <div class="row">
            @foreach($Containment_controls as $Containment_control)
            <div class="col-6">
                <div class="px-md-5 px-0 px-sm-2 mt-3">
                    <div class="containment-controls-img px-md-4 px-lg-4 px-xl-5 px-4">
                        @if ($user_browser == 'Internet Explorer' || $user_browser == 'Microsoft Edge')
                            <center><img  src="/images/misc-img/containment-controls-large/{{$Containment_control->img_large}}" alt="{{$Containment_control->name}}"></center>
                        @else
                            <lottie-player
                                src="/images/misc-img/contaiment-controls-icon-json/{{$Containment_control->lottie_file_large}}"  background="transparent"  speed="1"  hover    >
                            </lottie-player>
                        @endif
                    </div>
                    <div class="containment-controls-details mt-2">
                        <p class="text-center text-uppercase mb-1 mb-sm-2"><strong>{{$Containment_control->name}}</strong></p>
                        <p class="text-center">{{$Containment_control->description}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div> -->

    <!-- <hr> -->
    <div class="search-container">
        <div class="row">
            <div class="col-md-7">
                <!-- Actual search box -->
                <div class="form-group has-search mb-0">
                    <label for="search" class="font-weight-bold">Search for Products</label>
                    <span class="fa fa-search form-control-feedback"></span>
                    <input type="text" class="form-control" name="search" placeholder="Search" id="prod-search-box" aria-label="search">
                    <label for="search" class="text-muted mt-1">(eg. isolator, air showers)</label>
                </div>
            </div>


            <div class="col-md-5 float-right">
                <label for="search" class="d-none d-sm-block">&nbsp;</label>

                <div class="d-flex justify-content-sm-end pl-lg-5">

                    <div class="mr-2">
                        <div class="button-group">
                            <button type="button" class="btn btn-default btn-sm dropdown-toggle filter-dropdown" data-toggle="dropdown"><i class="fa fa-cog" aria-hidden="true"></i> Filter <span class="caret"></span></button>
                            <ul id="dropdown-checkbox-list" class="dropdown-menu px-2 dropdown-menu-right">
                                 @foreach($Containment_controls as $Containment_control)
                                <li>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input form-containment-check" id="{{$Containment_control->name}}" name="{{$Containment_control->name}}" value="{{$Containment_control->id}}">
                                        <label  class="form-check-label" for="{{$Containment_control->name}}">{{$Containment_control->name}}</label>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <select class="custom-select sort-product-select">
                        <option value="asc" selected>Sort</option>
                        <option value="asc">A to Z</option>
                        <option value="desc">Z to A</option>
                    </select>

                </div>
            </div>

        </div>
    </div>

        <!-- @foreach($productCategories as $productCategory)
        <div class="product-category-title pr-0 pr-sm-5 mt-4">
            <h2 class="mb-4 with-link" id="{{$productCategory->slug}}">{{$productCategory->name}}</h2>
            <p>{{$productCategory->content}}</p>
        </div>
        <div class="row prod-listing">
            @foreach($productCategory->products->where('is_activated', '=', 1)->sortBy('name') as $product)
            <div class="col-lg-4 prod-single" data-ename="{{strtolower($product->brand)}}{{strtolower($product->name)}}" data-containments="@foreach($product->containmentcontrol as $product_containment_control){{($product_containment_control->pivot->is_activated == '1') ? $product_containment_control->id.' ': ''}}@endforeach">
                <div class="product-card mt-4">
                <div class="product-card-img">
                    <div class="p-3">
                    <a href="{{$product->path()}}"><img data-src="/images/product-images/thumb/{{$product->image_thumb}}" class="product-img lazy" alt="{{$product->brand}} {{$product->name}}" title="{{$product->brand}} {{$product->name}}"></a>
                    </div>

                    <div class="product-card-containment-control p-1">
                    @foreach($product->containmentcontrol as $product_containment_control)
                        <img class="{{($product_containment_control->pivot->is_activated == '1') ? '' : 'disable_containment'}}" src="/images/misc-img/containment-controls-small/{{$product_containment_control->img_small}}">
                    @endforeach
                    </div>
                </div>
                <div class="product-title-button p-2">
                    <p class="text-left"><strong>{{$product->brand}} {{$product->name}}</strong></p>
                    <a class="pharma-btn btn" href="{{$product->path()}}">VIEW PRODUCT <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>

                </div>
            </div>
            @endforeach
        </div>
        @endforeach -->

        <div class="product-category-title pr-0 pr-sm-5 mt-4">
          <h2 class="mb-4 with-link">Pharmacy Compounding</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec libero odio, posuere ut dui id, elementum sagittis ante. Cras congue risus non ipsum luctus malesuada. Nunc nec mi at nisi pellentesque tincidunt semper nec libero. Aenean aliquet consequat felis, et laoreet elit volutpat non.</p>
        </div>

        <div class="row prod-listing">
          @foreach($row_items_1 as $row_item_1)
          <div class="col-lg-4 col-6 prod-single">
            <div class="product-card mt-4" style="box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%); background-image: linear-gradient(#D1F2F4, #FFFFFF); border-radius: 5%; border: 0;">
              <div class="product-card-img" style="text-align: center;">
                  <div class="p-3">
                      <a href=""><img data-src="/images/product-images/thumb/ceiling-laminar-airflow-units-min.png" class="product-img lazy" alt="" title=""></a>
                  </div>
              </div>
              <div class="" style="text-align: center; padding-bottom: 1em;">
                <p class=""><strong>Lorem Ipsum</strong></p>
                <br />
                <a class="" href="">VIEW PRODUCT&nbsp;<i class="product-arrow" aria-hidden="true"></i></a>
                <br />
              </div>
            </div>
          </div>
          @endforeach
        </div>

        <div class="product-category-title pr-0 pr-sm-5 mt-4">
          <h2 class="mb-4 with-link">Nuclear Medicine / Radiopharmacy Compounding</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec libero odio, posuere ut dui id, elementum sagittis ante. Cras congue risus non ipsum luctus malesuada. Nunc nec mi at nisi pellentesque tincidunt semper nec libero. Aenean aliquet consequat felis, et laoreet elit volutpat non.</p>
        </div>

        <div class="row prod-listing">
          @foreach($row_items_2 as $row_item_2)
          <div class="col-lg-4 col-6 prod-single">
            <div class="product-card mt-4" style="box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%); background-image: linear-gradient(#D1F2F4, #FFFFFF); border-radius: 5%; border: 0;">
              <div class="product-card-img" style="text-align: center;">
                  <div class="p-3">
                      <a href=""><img data-src="/images/product-images/thumb/ceiling-laminar-airflow-units-min.png" class="product-img lazy" alt="" title=""></a>
                  </div>
              </div>
              <div class="" style="text-align: center; padding-bottom: 1em;">
                <p class=""><strong>Lorem Ipsum</strong></p>
                <br />
                <a class="" href="">VIEW PRODUCT&nbsp;<i class="product-arrow" aria-hidden="true"></i></a>
                <br />
              </div>
            </div>
          </div>
          @endforeach
        </div>

        <div class="product-category-title pr-0 pr-sm-5 mt-4">
          <h2 class="mb-4 with-link">Cleanroom Components (Ccfib) & Others</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec libero odio, posuere ut dui id, elementum sagittis ante. Cras congue risus non ipsum luctus malesuada. Nunc nec mi at nisi pellentesque tincidunt semper nec libero. Aenean aliquet consequat felis, et laoreet elit volutpat non.</p>
        </div>

        <div class="row prod-listing">
          @foreach($row_items_3 as $row_item_3)
          <div class="col-lg-4 col-6 prod-single">
            <div class="product-card mt-4" style="box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%); background-image: linear-gradient(#D1F2F4, #FFFFFF); border-radius: 5%; border: 0;">
              <div class="product-card-img" style="text-align: center;">
                  <div class="p-3">
                      <a href=""><img data-src="/images/product-images/thumb/ceiling-laminar-airflow-units-min.png" class="product-img lazy" alt="" title=""></a>
                  </div>
              </div>
              <div class="" style="text-align: center; padding-bottom: 1em;">
                <p class=""><strong>Lorem Ipsum</strong></p>
                <br />
                <a class="" href="">VIEW PRODUCT&nbsp;<i class="product-arrow" aria-hidden="true"></i></a>
                <br />
              </div>
            </div>
          </div>
          @endforeach
        </div>

        <div class="product-category-title pr-0 pr-sm-5 mt-4">
          <h2 class="mb-4 with-link">Centralized 503B Cgmp Pharmacy Compounding</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec libero odio, posuere ut dui id, elementum sagittis ante. Cras congue risus non ipsum luctus malesuada. Nunc nec mi at nisi pellentesque tincidunt semper nec libero. Aenean aliquet consequat felis, et laoreet elit volutpat non.</p>
        </div>

        <div class="row prod-listing">
          <div class="col-lg-4 col-6 prod-single">
            <div class="product-card mt-4" style="box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%); background-image: linear-gradient(#D1F2F4, #FFFFFF); border-radius: 5%; border: 0;">
              <div class="product-card-img" style="text-align: center;">
                  <div class="p-3">
                      <a href=""><img data-src="/images/product-images/thumb/ceiling-laminar-airflow-units-min.png" class="product-img lazy" alt="" title=""></a>
                  </div>
              </div>
              <div class="" style="text-align: center; padding-bottom: 1em;">
                <p class=""><strong>Lorem Ipsum</strong></p>
                <br />
                <a class="" href="">VIEW PRODUCT&nbsp;<i class="product-arrow" aria-hidden="true"></i></a>
                <br />
              </div>
            </div>
          </div>
        </div>

        <!-- @foreach($productCategories as $productCategory)
        <div class="product-category-title pr-0 pr-sm-5 mt-4">
            <h2 class="mb-4 with-link" id="{{$productCategory->slug}}">{{$productCategory->name}}</h2>
            <p>{{$productCategory->content}}</p>
        </div>
        <div class="row prod-listing">
            @foreach($productCategory->products->where('is_activated', '=', 1)->sortBy('name') as $product)
            <div class="col-lg-4 prod-single" data-ename="{{strtolower($product->brand)}}{{strtolower($product->name)}}" data-containments="@foreach($product->containmentcontrol as $product_containment_control){{($product_containment_control->pivot->is_activated == '1') ? $product_containment_control->id.' ': ''}}@endforeach">
                <div class="product-card mt-4">
                <div class="product-card-img">
                    <div class="p-3">
                    <a href="{{$product->path()}}"><img data-src="/images/product-images/thumb/{{$product->image_thumb}}" class="product-img lazy" alt="{{$product->brand}} {{$product->name}}" title="{{$product->brand}} {{$product->name}}"></a>
                    </div>

                    <div class="product-card-containment-control p-1">
                    @foreach($product->containmentcontrol as $product_containment_control)
                        <img class="{{($product_containment_control->pivot->is_activated == '1') ? '' : 'disable_containment'}}" src="/images/misc-img/containment-controls-small/{{$product_containment_control->img_small}}">
                    @endforeach
                    </div>
                </div>
                <div class="product-title-button p-2">
                    <p class="text-left"><strong>{{$product->brand}} {{$product->name}}</strong></p>
                    <a class="pharma-btn btn" href="{{$product->path()}}">VIEW PRODUCT <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>

                </div>
            </div>
            @endforeach
        </div>
        @endforeach -->

        <hr>

  </div>

@endsection



@section('scripts')

<script>
    (function ($) {
      $(document).ready(function() {
            $( "#dropdown-checkbox-list" ).click(function(event) {
                event.stopPropagation();
            });

            $(".sort-product-select").change(function () {
                var sort = this.value;
                sortProducts(sort);
            });

            sortProducts('asc');

            // var $wrapper = $('.prod-listing');

            // $wrapper.find('.prod-single').sort(function (a, b) {
            //     return $(a).data('ename') > $(b).data('ename');
            // }).appendTo($wrapper);
            function sortProducts(sort){
                $('.prod-listing').each(function(i, obj) {
                    var $myColorList = $(this);

                    // Elements one layer deep get .children(), any deeper go with .find()
                    var $colors = $myColorList.children('.prod-single');

                    /**
                    * Bind $colors to the sort method so we don't have to travel up
                    * all these properties more than once.
                    */
                    var sortList = Array.prototype.sort.bind($colors);

                    if(sort == 'asc'){
                        sortList(function ( a, b ) {

                        // Cache inner content from the first element (a) and the next sibling (b)
                        var aText = $(a).data('ename');
                        var bText = $(b).data('ename');

                        // console.log(bText);
                        // Returning -1 will place element `a` before element `b`
                        if ( aText < bText ) {
                            return -1;
                        }

                        // Returning 1 will do the opposite
                        if ( aText > bText ) {
                            return 1;
                        }

                        // Returning 0 leaves them as-is
                        return 0;
                        });
                    }else{
                        sortList(function ( b,a ) {

                        // Cache inner content from the first element (a) and the next sibling (b)
                        var aText = $(a).data('ename');
                        var bText = $(b).data('ename');

                        // console.log(bText);
                        // Returning -1 will place element `a` before element `b`
                        if ( aText < bText ) {
                            return -1;
                        }

                        // Returning 1 will do the opposite
                        if ( aText > bText ) {
                            return 1;
                        }

                        // Returning 0 leaves them as-is
                        return 0;
                        });
                    }
                    // Put it right back where we got it
                    $myColorList.append($colors);

                });





            }



            var $filterCheckboxes = $('input[type="checkbox"].form-check-input');




            var filterFunc = function() {

            var selectedFilters = {};

            $filterCheckboxes.filter(':checked').each(function() {
                if (!selectedFilters.hasOwnProperty(this.name)) {
                selectedFilters[this.name] = [];
                }

                selectedFilters[this.name].push(this.value);

            });


            if(!jQuery.isEmptyObject(selectedFilters) ){

                // create a collection containing all of the filterable elements
                var $filteredResults = $('.prod-single');

                    // loop over the selected filter name -> (array) values pairs
                    $.each(selectedFilters, function(name, filterValues) {

                        // filter each .model element
                        $filteredResults = $filteredResults.filter(function() {

                        var matched = false,
                            currentFilterValues = $(this).data('containments').split(' ');

                        // loop over each category value in the current .model's data-category
                        $.each(currentFilterValues, function(_, currentFilterValue) {

                            // if the current category exists in the selected filters array
                            // set matched to true, and stop looping. as we're ORing in each
                            // set of filters, we only need to match once

                            if ($.inArray(currentFilterValue, filterValues) != -1) {
                            matched = true;
                            return false;
                            }
                        });

                        // if matched is true the current .model element is returned
                        return matched;

                        });
                    });
                    //   console.log($filteredResults);
                    $('.prod-single').hide().filter($filteredResults).show();
            }else{
                $('.prod-single').show();

            }

        }

        $filterCheckboxes.on('change', filterFunc);
    });

    /*

        How to use:
        1)	Copy this jQuery to your project
        2)	Add [data-search] to search input
        3)	Add [data-filter-item] to the items that should be filtered
        4)	Add [data-filter-name="SEARCH TERM"] to the filter-items

    */

    $('#prod-search-box').on('keyup', function() {
        var searchVal = $(this).val();
        var filterItems = $('.prod-single');

        if ( searchVal != '' ) {
            filterItems.addClass('d-none');
            $('[data-ename*="' + searchVal.toLowerCase() + '"]').removeClass('d-none');
        } else {
            filterItems.removeClass('d-none');
        }
    });

})(jQuery);
</script>


@endsection
