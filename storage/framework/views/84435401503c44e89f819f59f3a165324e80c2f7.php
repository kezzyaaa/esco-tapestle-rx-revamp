<?php if($activeProduct->meta_title): ?>
    <?php $__env->startSection('title'); ?><?php echo e($activeProduct->meta_title); ?><?php $__env->stopSection(); ?>
    <?php $__env->startSection('og_title'); ?><?php echo e($activeProduct->meta_title); ?><?php $__env->stopSection(); ?>
<?php else: ?>
    <?php if($activeProduct->name): ?>
        <?php $__env->startSection('title'); ?><?php echo e((isset($activeProduct->brand)?$activeProduct->brand.' ' : '').$activeProduct->name); ?><?php $__env->stopSection(); ?>
        <?php $__env->startSection('og_title'); ?><?php echo e((isset($activeProduct->brand)?$activeProduct->brand.' ' : '').$activeProduct->name); ?><?php $__env->stopSection(); ?>
    <?php endif; ?>
<?php endif; ?>

<?php if($activeProduct->meta_description): ?>
    <?php $__env->startSection('meta_description'); ?><?php echo e($activeProduct->meta_description); ?><?php $__env->stopSection(); ?>
<?php endif; ?>

<?php if($activeProduct->meta_keywords): ?>
    <?php $__env->startSection('meta_keywords'); ?><?php echo e($activeProduct->meta_keywords); ?><?php $__env->stopSection(); ?>
<?php endif; ?>

<?php if($activeProduct->meta_description): ?>
    <?php $__env->startSection('og_description'); ?><?php echo e($activeProduct->meta_description); ?><?php $__env->stopSection(); ?>
<?php endif; ?>
<?php $__env->startSection('og_type'); ?><?php echo e('article'); ?><?php $__env->stopSection(); ?>

<?php if($activeProduct->image_thumb): ?>
    <?php $__env->startSection('og_image'); ?><?php echo e(url("/images/product-images/thumb/$activeProduct->image_thumb")); ?><?php $__env->stopSection(); ?>
    <?php $__env->startSection('itemprop_image'); ?><?php echo e(url("/images/product-images/thumb/$activeProduct->image_thumb")); ?><?php $__env->stopSection(); ?>
<?php endif; ?>


<?php $__env->startSection('components'); ?>

    <?php echo $__env->make('components/preloader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('components/searchbox', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('components/cookieconsent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('components/newsletterpopup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('components/floatingsocialicons', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

  <!-- Page Content  -->
	<div id="content" class="py-5" style="background: rgba(238, 238, 238, 0.3);">
		<div class="product-details mb-5 px-0 px-sm-3">
			<div class="row">
				<div class="col-lg-5">
					<div class="d-flex justify-content-center pl-3">
    					<div class="simpleLens-gallery-container" id="demo-1">
					        <div class="simpleLens-container" id="simpleLens-container">
					            <div class="simpleLens-big-image-container" id="simpleLens-big-image-container">
									<a id="simpleLens-lens-image" class="simpleLens-lens-image img-responsive" data-lens-image="/images/product-images/full-image/<?php echo e($activeProduct->image); ?>">
					                    <img src="/images/product-images/thumb/<?php echo e($activeProduct->image_thumb); ?>" alt="<?php echo e($activeProduct->name); ?>" title="<?php echo e($activeProduct->name); ?>" class="simpleLens-big-image">
					                </a>
					            </div>
					        </div>
					    </div>
					</div>
					<div class="product-details-containment-control p-1 d-flex justify-content-center">
                      <?php $__currentLoopData = $activeProduct->containmentcontrol; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_containment_control): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="product-containment-tooltip mr-3" data-direction="bottom">
                            <div class="tooltip__initiator">
                                <img class=" <?php echo e(($product_containment_control->pivot->is_activated == '1') ? '' : 'disable_containment'); ?>" src="/images/misc-img/containment-controls-large/<?php echo e($product_containment_control->img_large); ?>">
                            </div>
                            <div class="tooltip__item">
                                <p class="m-0 text-center"><small><?php echo e($product_containment_control->name); ?></small></p>
                            </div>
                        </div>
	                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	                </div>
				</div>
				<div class="col-lg-7 pt-lg-0 pt-md-4 pt-3">
					<div class="pl-md-4 pl-2 pr-2">
						<h1 class="product-name mb-4"><?php echo e($activeProduct->brand); ?> <span style="font-weight: normal;"><?php echo e($activeProduct->name); ?></span></h1>
						<div class="">
							<?php echo $activeProduct->details; ?>

							<div class=" mt-4">
								<a href="/contact-us/rfq/<?php echo e($activeProduct->id); ?>" class="btn pharma-btn mr-3">Request for Quotation <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
								
							</div>

						</div>
					</div>

				</div>
            </div>
            <?php echo $activeProduct->applications; ?>


		</div>
		<hr>


        <div id="accordion" class="product_spec_accordion px-0 px-sm-3" role="tablist" aria-multiselectable="true">
            <?php $__currentLoopData = $activeProduct->productSpecification; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productSpecification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <!-- Accordion Item 1 -->
                <?php if(isset($productSpecification->pivot->content) && ($productSpecification->pivot->content != '<p><br></p>')): ?>
                    <div class="mb-3">
                        <div role="tab" id="accordion<?php echo e($productSpecification->title); ?>">
                            <div class="accordion-head p-2">
                            <a data-toggle="collapse" data-parent="#accordion" href="#<?php echo e($productSpecification->title); ?>" aria-expanded="false" aria-controls="accordionBodyOne"
                                class=" ">
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                                <h3 class="prod-detail-features-title mb-0"><?php echo e($productSpecification->title); ?></h3>
                            </a>
                            </div>
                        </div>

                        <div id="<?php echo e($productSpecification->title); ?>" class="collapse show" role="tabpanel" aria-labelledby="accordionHeadingOne" aria-expanded="false" data-parent="accordion">
                        <div class="card-block p-3 p-sm-4">
                            <?php echo $productSpecification->pivot->content; ?>

                        </div>
                        </div>
                    </div>
                <?php endif; ?>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	          	<!-- Accordion Brochures -->
                <?php if($activeProduct->productBrochure->where('is_activated', '=', 1)->count() > 0): ?>
	          	<div class="mb-3">
		            <div role="tab" id="accordionBrochures_sellsheet">
		                <div class="accordion-head p-2">
		                  <a data-toggle="collapse" data-parent="#accordion" href="#brochures_sellsheet" aria-expanded="false" aria-controls="accordionBodyOne"
		                    class=" ">
		                    <i class="fa fa-angle-down" aria-hidden="true"></i>
		                    <h3 class="prod-detail-features-title mb-0">Brochures & Sell Sheets</h3>
		                  </a>
		                </div>
		            </div>

		            <div id="brochures_sellsheet" class="collapse show" role="tabpanel" aria-labelledby="accordionHeadingOne" aria-expanded="false" data-parent="accordion">
		              <div class="card-block p-3 p-sm-4">
		              	<div class="row">
		                  <?php $__currentLoopData = $activeProduct->productBrochure->where('is_activated', '=', 1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productBrochure): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		                  	<div class="col-6 col-md-4">
								<div class="prod-broch-card-image-details" title="<?php echo e($productBrochure->title); ?>">
                                    <a href="/pdf/brochures/<?php echo e($productBrochure->file); ?>" target="_blank">
                                        <div class="mb-2 p-1 custom-brochure-light-border-shadow">
                                            <div class="prod-brochure-container">
                                                
                                                
                                                <img title="<?php echo e($productBrochure->title); ?>" alt="<?php echo e($productBrochure->title); ?>" class="prod-brochure-img" src="/images/product-brochure-thumb/<?php echo e($productBrochure->img_thumb); ?>">
                                            </div>
                                        </div>
                                    </a>
									<a href="/pdf/brochures/<?php echo e($productBrochure->file); ?>" target="_blank"><p class="text-center"><?php echo e($productBrochure->title); ?></p></a>
								</div>
		              		</div>

			              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		              	</div>

		              </div>
		            </div>
                  </div>

                  <?php endif; ?>

                  <!-- Related products -->
                <?php if($relatedprods->count() > 0): ?>
	          	<div class="mb-3">
		            <div role="tab" id="accordionRelated_prod">
		                <div class="accordion-head p-2">
		                  <a data-toggle="collapse" data-parent="#accordion" href="#related_prod" aria-expanded="false" aria-controls="accordionBodyOne"
		                    class=" ">
		                    <i class="fa fa-angle-down" aria-hidden="true"></i>
		                    <h3 class="prod-detail-features-title mb-0">Related Products</h3>
		                  </a>
		                </div>
		            </div>

		            <div id="related_prod" class="collapse show" role="tabpanel" aria-labelledby="accordionHeadingOne" aria-expanded="false" data-parent="accordion">
		              <div class="card-block p-2 p-sm-4">
                        <?php if($relatedprods->count() > 3): ?>
                            <div class="owl-carousel owl-theme solutionRelatedprodCarousel prod-relate px-3 px-lg-5">
                                <?php $__currentLoopData = $relatedprods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relatedprod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="item">
                                        <a href="<?php echo e(isset($relatedprod->ext_link)?$relatedprod->ext_link:$relatedprod->path()); ?>" target="_blank"><img class="mb-2 product-img lazy" data-src="/images/product-images/thumb/<?php echo e($relatedprod->image_thumb); ?>"></a>
                                        <a href="<?php echo e(isset($relatedprod->ext_link)?$relatedprod->ext_link:$relatedprod->path()); ?>" target="_blank"><p class="text-center"><?php echo e($relatedprod->brand); ?> <?php echo e($relatedprod->name); ?></p></a>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php else: ?>

                        <div class="row">
                            <?php $__currentLoopData = $relatedprods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relatedprod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-4">
                                    <div class="prod-broch-card-image-details my-3">
                                        <a href="<?php echo e(isset($relatedprod->ext_link)?$relatedprod->ext_link:$relatedprod->path()); ?>" target="_blank"><img class="mb-2 product-img" src="/images/product-images/thumb/<?php echo e($relatedprod->image_thumb); ?>"></a>
                                        <a href="<?php echo e(isset($relatedprod->ext_link)?$relatedprod->ext_link:$relatedprod->path()); ?>" target="_blank"><p class="text-center"><?php echo e($relatedprod->brand); ?> <?php echo e($relatedprod->name); ?></p></a>
                                    </div>
                                </div>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </div>
                        <?php endif; ?>




		              </div>
		            </div>
                  </div>
                  <?php endif; ?>


                  <!-- Related Articles -->
                <?php if($relatedArticles->count() > 0): ?>
	          	<div class="mb-3">
		            <div role="tab" id="accordionRelated_article">
		                <div class="accordion-head p-2">
		                  <a data-toggle="collapse" data-parent="#accordion" href="#related_article" aria-expanded="false" aria-controls="accordionBodyOne"
		                    class=" ">
		                    <i class="fa fa-angle-down" aria-hidden="true"></i>
		                    <h3 class="prod-detail-features-title mb-0">Related Articles</h3>
		                  </a>
		                </div>
		            </div>

		            <div id="related_article" class="collapse show" role="tabpanel" aria-labelledby="accordionHeadingOne" aria-expanded="false" data-parent="accordion">
		              <div class="card-block p-3 p-sm-4">
		              	<div class="row">
                            <div class="col-md-12">

                                <div class="latest-post-area mt-0">
                                    <div class="latest-post-wrap">
                                        <?php $__currentLoopData = $relatedArticles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relatedArticle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="single-latest-post row align-items-center">
                                            <div class="col-md-4 post-left">
                                                <div class="feature-img custom-light-box-shadow relative">
                                                    <div class="news-overlay overlay-bg"></div>
                                                    <img class="img-fluid" src="/images/news-banner/thumb/<?php echo e($relatedArticle->banner_thumb); ?>" alt="<?php echo e($relatedArticle->title); ?>">
                                                </div>

                                            </div>
                                            <div class="col-md-8 post-right">
                                                <a href="<?php echo e(url('/news/'.$relatedArticle->slug)); ?>">
                                                    <h4><?php echo e($relatedArticle->title); ?></h4>
                                                </a>
                                                <ul class="meta">
                                                    <li><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> <?php echo e($relatedArticle->author); ?></a></li>
                                                    <li><a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i> <?php echo e($relatedArticle->created_at->format("d F, Y")); ?></a></li>

                                                </ul>
                                                <p class="excert secondary-text-color text-justify">
                                                    <?php echo \Illuminate\Support\Str::limit($relatedArticle->description, 200, $end='...'); ?>

                                                </p>
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
                  <?php endif; ?>



        </div>

	</div>
<?php $__env->stopSection(); ?>


<link href="<?php echo e(asset('css/idGeneratedStyles.css')); ?>" rel="stylesheet">

<style>

.product-containment-tooltip {
  position: relative;
}
.tooltip__item {
  position: absolute;
  min-width: 100px;
  padding: 3px;
  visibility: hidden;
  opacity: 0;
  background: white;
  transition: all 0.25s cubic-bezier(0, 0, 0.2, 1);
  color: #484848;
  border: 1px solid #cecece;
  border-radius: 3px;
  font-weight: 500;
  /* box-shadow: 0 2px 1px #bcbcbc; */
  z-index: 4;
}
.tooltip__item:after {
  content: "";
  display: block;
  position: absolute;
  width: 0;
  height: 0;
  border-style: solid;
}
.tooltip__initiator {
  cursor: pointer;
  z-index: 5;
}
.tooltip__initiator:hover{
    transform: scale(0.9);
    transition: all 600ms;
}
.tooltip__initiator:hover {
    transform: scale(1.2);
}

.product-containment-tooltip[data-direction="bottom"] .tooltip__initiator:hover ~ .tooltip__item {
  transform: translate3d(-50%, 0, 0);
  visibility: visible;
  opacity: 1;
}
.product-containment-tooltip[data-direction="bottom"] .tooltip__item {
  top: calc(100% + 1em);
  left: 50%;
  transform: translate3d(-50%, -15px, 0);
}
.product-containment-tooltip[data-direction="bottom"] .tooltip__item:after {
  top: -0.5em;
  left: 50%;
  transform: translate3d(-50%, 0, 0);
  border-width: 0 0.5em 0.5em 0.5em;
  border-color: transparent transparent white transparent;
  -webkit-filter: drop-shadow(0px 0px 0px #000);
  filter: drop-shadow(0px 0px 0px #000);
}

.fa.fa-info-circle {
  font-size: 38px;
  color: #21606b;
}


</style>

<?php echo $__env->make('layouts.productDetailView', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\esco-tapestle-rx-revamp\resources\views/product.blade.php ENDPATH**/ ?>