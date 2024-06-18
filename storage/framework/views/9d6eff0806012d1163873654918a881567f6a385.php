      <nav id="sidebar" class="product-dir-sidebar">
                <div class="pr-2 pt-5">
                    <h5>Products A-Z</h5>
                    <!-- <ul class="list-unstyled components mb-5">
                    <?php $__currentLoopData = $products_categories_sidebar->sortBy('name'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_category_sidebar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <li class="<?php echo e(isset($product_category_sidebar->product_application_category_id)?'' : 'dropdown-toggle'); ?> "><a class="with-trans dropdown-toggle"  data-toggle="<?php echo e(isset($product_category_sidebar->product_application_category_id)?'' : 'collapse'); ?>" aria-expanded="false" href="<?php echo e(isset($product_category_sidebar->product_application_category_id)?(isset($product_category_sidebar->ext_link)?$product_category_sidebar->ext_link:$product_category_sidebar->path()) : '#'.str_replace(array( '\'', ' ', '®', '-' , ';', '(', ')' ), '', $product_category_sidebar->name)); ?>">&raquo; <?php echo e($product_category_sidebar->name); ?></a>
                            <?php if(!isset($product_category_sidebar->product_application_category_id)): ?>
                                <ul class="collapse list-unstyled" id="<?php echo e(str_replace(array( '\'', ' ', '®', '-' , ';', '(', ')' ), '', $product_category_sidebar->name)); ?>" style="">
                                <?php $__currentLoopData = $product_application_categories[$product_category_sidebar->id - 1]->products->where('is_activated', '=', 1)->sortBy('name'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($product->ext_link): ?>
                                    <li><a href="<?php echo e($product->ext_link); ?>" class="with-trans" target="_blank" rel="noopener noreferrer">&raquo; <?php echo e($product->brand); ?> <?php echo e($product->name); ?></a>
                                <?php else: ?>
                                    <li><a href="<?php echo e($product->path()); ?>" class="with-trans">&raquo; <?php echo e($product->brand); ?> <?php echo e($product->name); ?></a>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            <?php endif; ?>

                      </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul> -->

                    <ul class="list-unstyled components mb-5">
                      <?php $__currentLoopData = $sample_product_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <li class="">
                        <a class="with-trans dropdown-toggle" data-toggle="collapse" aria-expanded="false" href="#"><?php echo e($product_list); ?></a>
                      </li>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>

                    

                      
          </div>
        </nav>
<?php /**PATH C:\xampp\htdocs\esco-tapestle-rx-revamp\resources\views/includes/product_sidebar.blade.php ENDPATH**/ ?>