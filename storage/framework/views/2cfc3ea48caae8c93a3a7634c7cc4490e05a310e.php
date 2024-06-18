<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <?php echo $__env->make('includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>

        <?php echo $__env->yieldContent('components'); ?>
        <?php echo $__env->make('includes.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('components/breadcumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div id="app">
            <section class="cta-area bg-img pb-5 page-background">
                <div class="container d-lg-flex flex-md-row-reverse align-items-stretch">
                    <?php echo $__env->yieldContent('content'); ?>
                    <?php echo $__env->make('includes.product_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                </div>
            </section>
        </div>

        <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



</body>
<?php echo $__env->make('includes/scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</html>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.15/lodash.min.js"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<script>


    // const app = new Vue({
    //     el: '#app',
    //     data:{
    //         search:'',
    //         sort: 'asc'
    //     },
    //     methods:{
    //         searchit: _.debounce(() => {
    //             Fire.$emit('searching');
    //         },500),
    //         sortValue: _.debounce(() => {
    //             Fire.$emit('searching');
    //         },500)
    //     }
    // });
    </script>
    <?php echo $__env->yieldContent('scripts'); ?>
<?php /**PATH C:\xampp\htdocs\esco-tapestle-rx-revamp\resources\views/layouts/productDirectoryView.blade.php ENDPATH**/ ?>