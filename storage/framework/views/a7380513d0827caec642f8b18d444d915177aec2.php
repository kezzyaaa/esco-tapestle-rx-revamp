<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <?php echo $__env->make('includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <link rel="stylesheet" type="text/css" href="/css/jquery.simpleLens.css">
<body>
	<?php echo $__env->yieldContent('components'); ?>
	<?php echo $__env->make('includes.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('components/breadcumb-prod', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<section class="cta-area bg-img pb-5 page-background">
		<div class="container d-lg-flex  align-items-stretch">
			<?php echo $__env->yieldContent('content'); ?>
			<?php echo $__env->make('includes.product_detail_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</div>
	</section>

	<?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
<?php echo $__env->make('includes/scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script type="text/javascript" src= "<?php echo e(asset('js/jquery.simpleLens.min.js')); ?>"></script>
<script>  $(document).ready(function() {
  $('.simpleLens-big-image').simpleLens({
        loading_image:'/images/misc-img/loading.gif'
        });
  });
</script>
</html>

<?php /**PATH C:\xampp\htdocs\esco-tapestle-rx-revamp\resources\views/layouts/productDetailView.blade.php ENDPATH**/ ?>