      <nav id="sidebar" class="product-sidebar">
        <div class="pl-2 pt-5">
          <div>
            <div class="">
              <h5>Highlights</h5>
            </div>
            <ul class="list-unstyled components mb-5">
              <?php $__currentLoopData = $activeProduct->productSpecification; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productSpecification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(isset($productSpecification->pivot->content)  && ($productSpecification->pivot->content != '<p><br></p>') ): ?>
                <li class="nav-item">
                    <a class="nav-link product_spec_link show w-600 with-trans" id="tab---1" data-link="#accordion<?php echo e($productSpecification->title); ?>" data-toggle="tab" href="" role="tab" aria-controls="<?php echo e($productSpecification->title); ?>" aria-selected="true"><?php echo e($productSpecification->title); ?></a>
                </li>
                <?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php if($activeProduct->productBrochure->where('is_activated', '=', 1)->count() > 0): ?>
                <li class="nav-item">
                    <a class="nav-link product_spec_link show w-600 with-trans" id="tab---1" data-toggle="tab" href="" role="tab" data-link="#accordionBrochures_sellsheet" aria-controls="Brochures & Sell Sheets" aria-selected="true">Brochures & Sell Sheets</a>
                </li>
              <?php endif; ?>
                <?php if($relatedprods->count() > 0): ?>
                    <li class="nav-item">
                        <a class="nav-link product_spec_link show w-600 with-trans" id="tab---1" data-toggle="tab" href="" role="tab" data-link="#accordionRelated_prod" aria-controls="Related Products" aria-selected="true">Related Products</a>
                    </li>
                <?php endif; ?>
                <?php if($relatedArticles->count() > 0): ?>
                    <li class="nav-item">
                        <a class="nav-link product_spec_link show w-600 with-trans" id="tab---1" data-toggle="tab" href="" role="tab" data-link="#accordionRelated_article" aria-controls="Related Articles" aria-selected="true">Related Articles</a>
                    </li>
                <?php endif; ?>
            </ul>
          </div>
        </div>
      </nav>


<?php /**PATH C:\xampp\htdocs\esco-tapestle-rx-revamp\resources\views/includes/product_detail_sidebar.blade.php ENDPATH**/ ?>