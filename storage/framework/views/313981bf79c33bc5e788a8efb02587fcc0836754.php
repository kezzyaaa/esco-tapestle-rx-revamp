<?php if($activeSolutionSel->title): ?>
    <?php $__env->startSection('title'); ?><?php echo e($activeSolutionSel->title); ?><?php $__env->stopSection(); ?>
    <?php $__env->startSection('og_title'); ?><?php echo e($activeSolutionSel->title); ?><?php $__env->stopSection(); ?>
<?php endif; ?>

<?php if($activeSolutionSel->meta_keywords): ?>
    <?php $__env->startSection('meta_keywords'); ?><?php echo e($activeSolutionSel->meta_keywords); ?><?php $__env->stopSection(); ?>
<?php endif; ?>

<?php if($activeSolutionSel->meta_description): ?>
    <?php $__env->startSection('meta_description'); ?><?php echo e($activeSolutionSel->meta_description); ?><?php $__env->stopSection(); ?>
<?php endif; ?>

<?php if($activeSolutionSel->description): ?>
    <?php $__env->startSection('og_description'); ?><?php echo e($activeSolutionSel->description); ?><?php $__env->stopSection(); ?>
<?php endif; ?>

<?php $__env->startSection('og_type'); ?><?php echo e('article'); ?><?php $__env->stopSection(); ?>

<?php if($activeSolutionSel->parent == null): ?>
    <?php $__env->startSection('og_image'); ?><?php echo e(url("/images/banner-images/$activeSolutionSel->banner_img")); ?><?php $__env->stopSection(); ?>
    <?php $__env->startSection('itemprop_image'); ?><?php echo e(url("/images/banner-images/$activeSolutionSel->banner_img")); ?><?php $__env->stopSection(); ?>
<?php else: ?>
    <?php $__env->startSection('og_image'); ?><?php echo e(url("/images/misc-img/solution-icons/$activeSolutionSel->icon")); ?><?php $__env->stopSection(); ?>
    <?php $__env->startSection('itemprop_image'); ?><?php echo e(url("/images/misc-img/solution-icons/$activeSolutionSel->icon")); ?><?php $__env->stopSection(); ?>
<?php endif; ?>



<?php $__env->startSection('components'); ?>

    <?php echo $__env->make('components/preloader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('components/searchbox', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('components/cookieconsent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('components/newsletterpopup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('components/floatingsocialicons', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <?php echo $activeSolutionSel->content; ?>


    <?php if($activeSolutionSel->product->count() > 0): ?>
        <p class="mt-3"><strong>Recommended Products</strong></p>

        <div class="owl-carousel owl-theme solutionRelatedprodCarousel px-4 px-lg-5">
            <?php $__currentLoopData = $activeSolutionSel->product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="item">
                    <a href="<?php echo e(isset($product->ext_link)?$product->ext_link:$product->path()); ?>" target="_blank"><img class="mb-2 product-img" src="/images/product-images/thumb/<?php echo e($product->image_thumb); ?>"></a>
                    <a href="<?php echo e(isset($product->ext_link)?$product->ext_link:$product->path()); ?>" target="_blank"><p class="text-center"><?php echo e($product->brand); ?> <?php echo e($product->name); ?></p></a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

    <?php endif; ?>
<?php $__env->stopSection(); ?>

<style>

</style>

<?php echo $__env->make('layouts.'.$layout, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\esco-tapestle-rx-revamp\resources\views/solution.blade.php ENDPATH**/ ?>