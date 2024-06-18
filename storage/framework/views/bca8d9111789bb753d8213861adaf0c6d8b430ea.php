<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <?php echo $__env->make('includes/head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
	<?php echo $__env->yieldContent('components'); ?>
	<?php echo $__env->make('includes/nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('components/breadcumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<section class="bg-img pb-5 page-background">
		<div class="container">
            <div class="pt-2 pt-md-4">
                <?php echo $__env->yieldContent('content'); ?>
                <div class="px-3">
                    <?php echo $__env->make('components/solutionsCarousel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>

            </div>
		</div>
	</section>
  <?php echo $__env->make('includes/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
<?php echo $__env->make('includes/scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</html>

<style>

</style>
<?php /**PATH C:\xampp\htdocs\esco-tapestle-rx-revamp\resources\views/layouts/solutionsCarouselView.blade.php ENDPATH**/ ?>