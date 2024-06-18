<div id="floating-social-icons">

  <?php $__currentLoopData = $socialmedias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $socialmedia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="fl-fl float-<?php echo e($socialmedia->name); ?>">
        <a href="<?php echo e($socialmedia->link); ?>" <?php echo e($socialmedia->type == 'social' ? 'target="_blank"' : ''); ?>><?php echo e($socialmedia->tag); ?> <i class="fa <?php echo e($socialmedia->icon); ?>"></i></a>
    </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>
<?php /**PATH C:\xampp\htdocs\esco-tapestle-rx-revamp\resources\views/components/floatingsocialicons.blade.php ENDPATH**/ ?>