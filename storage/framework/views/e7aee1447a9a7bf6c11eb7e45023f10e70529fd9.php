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
  <!-- Page Content  -->
    <?php echo $activePage->first()->content; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('rel_prod'); ?>
  <!-- Page Content  -->
  <?php if($activePage->first()->product()->count() > 0): ?>
    <p class="mt-3"><strong>Related Products</strong></p>

    <div class="owl-carousel owl-theme solutionRelatedprodCarousel px-5">
        <?php $__currentLoopData = $activePage->first()->product()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="item">
                <a href="<?php echo e(isset($product->ext_link)?$product->ext_link:$product->path()); ?>" target="_blank"><img class="mb-2 product-img lazy" data-src="/images/product-images/thumb/<?php echo e($product->image_thumb); ?>"></a>
                <a href="<?php echo e(isset($product->ext_link)?$product->ext_link:$product->path()); ?>" target="_blank"><p class="text-center"><?php echo e($product->brand); ?> <?php echo e($product->name); ?></p></a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

  <?php endif; ?>
<?php $__env->stopSection(); ?>

<link href="<?php echo e(asset('css/idGeneratedStyles.css')); ?>" rel="stylesheet">

<?php echo $__env->make('layouts.'.$layout, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\esco-tapestle-rx-revamp\resources\views/page.blade.php ENDPATH**/ ?>