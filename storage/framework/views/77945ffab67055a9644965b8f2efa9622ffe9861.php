<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <?php echo $__env->make('includes/head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>

	<?php echo $__env->yieldContent('components'); ?>
	<?php echo $__env->make('includes/nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('components/breadcumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<section class="cta-area bg-img pb-5">
    <div class="" style="position: absolute; z-index: -1; background: url('/images/bg-img/blueprint_background.jpg') center no-repeat fixed;
    background-size: cover; height: calc(100vh - 50vh); width: 100%;">
    </div>
		<div class="container d-lg-flex flex-md-row-reverse align-items-stretch">
            <!-- <div id="content" class="px-md-3 px-0 pt-5 w-100" style="background-color: rgba(238, 238, 238, 0.3);"> -->
            <div id="content" class="px-md-3 px-0 pt-5 w-100">
                <?php echo $__env->yieldContent('content'); ?>
                <?php echo $__env->yieldContent('rel_prod'); ?>
            </div>
			<?php echo $__env->make('includes.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</div>
	</section>
  <?php echo $__env->make('includes/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
<?php echo $__env->make('includes/scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('scripts'); ?>
</html>
<?php /**PATH C:\xampp\htdocs\esco-tapestle-rx-revamp\resources\views/layouts/pageWithSidebarView.blade.php ENDPATH**/ ?>