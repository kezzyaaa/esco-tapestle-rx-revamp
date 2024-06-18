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




  <div id="content" class="px-lg-5 px-3 py-3 py-md-5 w-100" style="background: rgba(238, 238, 238, 0.3);">
    <!-- <div class="product-category-title pr-0 pr-sm-5">
        <h2 class="mb-3">Protection Guaranteed with Esco Pharma Turnkey Solutions</h2>
    </div>
    <div class="product-directory-containment-controls">
        <div class="row">
            <?php $__currentLoopData = $Containment_controls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Containment_control): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-6">
                <div class="px-md-5 px-0 px-sm-2 mt-3">
                    <div class="containment-controls-img px-md-4 px-lg-4 px-xl-5 px-4">
                        <?php if($user_browser == 'Internet Explorer' || $user_browser == 'Microsoft Edge'): ?>
                            <center><img  src="/images/misc-img/containment-controls-large/<?php echo e($Containment_control->img_large); ?>" alt="<?php echo e($Containment_control->name); ?>"></center>
                        <?php else: ?>
                            <lottie-player
                                src="/images/misc-img/contaiment-controls-icon-json/<?php echo e($Containment_control->lottie_file_large); ?>"  background="transparent"  speed="1"  hover    >
                            </lottie-player>
                        <?php endif; ?>
                    </div>
                    <div class="containment-controls-details mt-2">
                        <p class="text-center text-uppercase mb-1 mb-sm-2"><strong><?php echo e($Containment_control->name); ?></strong></p>
                        <p class="text-center"><?php echo e($Containment_control->description); ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                 <?php $__currentLoopData = $Containment_controls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Containment_control): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input form-containment-check" id="<?php echo e($Containment_control->name); ?>" name="<?php echo e($Containment_control->name); ?>" value="<?php echo e($Containment_control->id); ?>">
                                        <label  class="form-check-label" for="<?php echo e($Containment_control->name); ?>"><?php echo e($Containment_control->name); ?></label>
                                    </div>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

        <!-- <?php $__currentLoopData = $productCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="product-category-title pr-0 pr-sm-5 mt-4">
            <h2 class="mb-4 with-link" id="<?php echo e($productCategory->slug); ?>"><?php echo e($productCategory->name); ?></h2>
            <p><?php echo e($productCategory->content); ?></p>
        </div>
        <div class="row prod-listing">
            <?php $__currentLoopData = $productCategory->products->where('is_activated', '=', 1)->sortBy('name'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 prod-single" data-ename="<?php echo e(strtolower($product->brand)); ?><?php echo e(strtolower($product->name)); ?>" data-containments="<?php $__currentLoopData = $product->containmentcontrol; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_containment_control): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e(($product_containment_control->pivot->is_activated == '1') ? $product_containment_control->id.' ': ''); ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>">
                <div class="product-card mt-4">
                <div class="product-card-img">
                    <div class="p-3">
                    <a href="<?php echo e($product->path()); ?>"><img data-src="/images/product-images/thumb/<?php echo e($product->image_thumb); ?>" class="product-img lazy" alt="<?php echo e($product->brand); ?> <?php echo e($product->name); ?>" title="<?php echo e($product->brand); ?> <?php echo e($product->name); ?>"></a>
                    </div>

                    <div class="product-card-containment-control p-1">
                    <?php $__currentLoopData = $product->containmentcontrol; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_containment_control): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <img class="<?php echo e(($product_containment_control->pivot->is_activated == '1') ? '' : 'disable_containment'); ?>" src="/images/misc-img/containment-controls-small/<?php echo e($product_containment_control->img_small); ?>">
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="product-title-button p-2">
                    <p class="text-left"><strong><?php echo e($product->brand); ?> <?php echo e($product->name); ?></strong></p>
                    <a class="pharma-btn btn" href="<?php echo e($product->path()); ?>">VIEW PRODUCT <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>

                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> -->

        <div class="product-category-title pr-0 pr-sm-5 mt-4">
          <h2 class="mb-4 with-link">Pharmacy Compounding</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec libero odio, posuere ut dui id, elementum sagittis ante. Cras congue risus non ipsum luctus malesuada. Nunc nec mi at nisi pellentesque tincidunt semper nec libero. Aenean aliquet consequat felis, et laoreet elit volutpat non.</p>
        </div>

        <div class="row prod-listing">
          <?php $__currentLoopData = $row_items_1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row_item_1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="product-category-title pr-0 pr-sm-5 mt-4">
          <h2 class="mb-4 with-link">Nuclear Medicine / Radiopharmacy Compounding</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec libero odio, posuere ut dui id, elementum sagittis ante. Cras congue risus non ipsum luctus malesuada. Nunc nec mi at nisi pellentesque tincidunt semper nec libero. Aenean aliquet consequat felis, et laoreet elit volutpat non.</p>
        </div>

        <div class="row prod-listing">
          <?php $__currentLoopData = $row_items_2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row_item_2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="product-category-title pr-0 pr-sm-5 mt-4">
          <h2 class="mb-4 with-link">Cleanroom Components (Ccfib) & Others</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec libero odio, posuere ut dui id, elementum sagittis ante. Cras congue risus non ipsum luctus malesuada. Nunc nec mi at nisi pellentesque tincidunt semper nec libero. Aenean aliquet consequat felis, et laoreet elit volutpat non.</p>
        </div>

        <div class="row prod-listing">
          <?php $__currentLoopData = $row_items_3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row_item_3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

        <!-- <?php $__currentLoopData = $productCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="product-category-title pr-0 pr-sm-5 mt-4">
            <h2 class="mb-4 with-link" id="<?php echo e($productCategory->slug); ?>"><?php echo e($productCategory->name); ?></h2>
            <p><?php echo e($productCategory->content); ?></p>
        </div>
        <div class="row prod-listing">
            <?php $__currentLoopData = $productCategory->products->where('is_activated', '=', 1)->sortBy('name'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 prod-single" data-ename="<?php echo e(strtolower($product->brand)); ?><?php echo e(strtolower($product->name)); ?>" data-containments="<?php $__currentLoopData = $product->containmentcontrol; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_containment_control): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e(($product_containment_control->pivot->is_activated == '1') ? $product_containment_control->id.' ': ''); ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>">
                <div class="product-card mt-4">
                <div class="product-card-img">
                    <div class="p-3">
                    <a href="<?php echo e($product->path()); ?>"><img data-src="/images/product-images/thumb/<?php echo e($product->image_thumb); ?>" class="product-img lazy" alt="<?php echo e($product->brand); ?> <?php echo e($product->name); ?>" title="<?php echo e($product->brand); ?> <?php echo e($product->name); ?>"></a>
                    </div>

                    <div class="product-card-containment-control p-1">
                    <?php $__currentLoopData = $product->containmentcontrol; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_containment_control): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <img class="<?php echo e(($product_containment_control->pivot->is_activated == '1') ? '' : 'disable_containment'); ?>" src="/images/misc-img/containment-controls-small/<?php echo e($product_containment_control->img_small); ?>">
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="product-title-button p-2">
                    <p class="text-left"><strong><?php echo e($product->brand); ?> <?php echo e($product->name); ?></strong></p>
                    <a class="pharma-btn btn" href="<?php echo e($product->path()); ?>">VIEW PRODUCT <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>

                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> -->

        <hr>

  </div>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('scripts'); ?>

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


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.productDirectoryView', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\esco-tapestle-rx-revamp\resources\views/productDirectory.blade.php ENDPATH**/ ?>