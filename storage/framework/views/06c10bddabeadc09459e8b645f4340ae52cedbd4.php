<nav id="sidebar" class="solution-sidebar">
    <div class="pr-4 pt-5 mt-sm-5 mt-md-0">
        <h5><?php echo $sidebar_title; ?></h5>
          <ul class="list-unstyled components mb-5">
              <?php $__currentLoopData = $sidebar_menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sidebar_menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li><a class="<?php echo e(Request::is($sidebar_menu->section.'/'.$sidebar_menu->slug) ? 'active' : ''); ?> with-trans" href="/<?php echo e($sidebar_menu->section); ?>/<?php echo e($sidebar_menu->slug); ?>">&raquo; <?php echo e($sidebar_menu->name); ?></a></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        
    </div>
  </nav>
<?php /**PATH C:\xampp\htdocs\esco-tapestle-rx-revamp\resources\views/includes/sidebar.blade.php ENDPATH**/ ?>