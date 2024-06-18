<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <?php echo $__env->make('includes/head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>

	<?php echo $__env->yieldContent('components'); ?>
	<?php echo $__env->make('includes/nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



	<?php echo $__env->yieldContent('slider'); ?>
	<?php echo $__env->yieldContent('section2'); ?>
    <?php echo $__env->yieldContent('section3'); ?>
    <?php echo $__env->yieldContent('section4'); ?>
    <?php echo $__env->yieldContent('section5'); ?>
    <?php echo $__env->yieldContent('section6'); ?>
    <?php echo $__env->yieldContent('section7'); ?>
    <?php echo $__env->yieldContent('section8'); ?>
    <?php echo $__env->yieldContent('section9'); ?>

    <?php echo $__env->make('includes/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</body>
<?php echo $__env->make('includes/scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</html>


<?php /**PATH C:\xampp\htdocs\esco-tapestle-rx-revamp\resources\views/layouts/homepageView.blade.php ENDPATH**/ ?>