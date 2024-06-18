<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <?php echo $__env->make('includes/head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
	<?php echo $__env->yieldContent('components'); ?>
	<?php echo $__env->make('includes/nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('components/breadcumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<section class="cta-area bg-img pb-5 page-background">
		<div class="container d-lg-flex flex-md-row-reverse align-items-stretch">
            <div class="px-md-3 px-2 py-5 w-100" style="background: rgba(238, 238, 238, 0.3);">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
		</div>
	</section>
  <?php echo $__env->make('includes/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
<?php echo $__env->make('includes/scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</html>

<?php /**PATH C:\xampp\htdocs\esco-tapestle-rx-revamp\resources\views/layouts/newsdirectorypageView.blade.php ENDPATH**/ ?>