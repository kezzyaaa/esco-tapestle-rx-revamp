<?php $__env->startSection('title'); ?>
  <?php echo e($activePage->first()->name); ?>

<?php $__env->stopSection(); ?>


<?php if($activePage->first()->name): ?>
    <?php $__env->startSection('title'); ?><?php echo e($activePage->first()->name); ?><?php $__env->stopSection(); ?>
    <?php $__env->startSection('og_title'); ?><?php echo e($activePage->first()->name); ?><?php $__env->stopSection(); ?>
<?php endif; ?>

<?php if($activePage->first()->meta_description): ?>
    <?php $__env->startSection('meta_description'); ?><?php echo e($activePage->first()->meta_description); ?><?php $__env->stopSection(); ?>
<?php endif; ?>

<?php if($activePage->first()->meta_keywords): ?>
    <?php $__env->startSection('meta_keywords'); ?><?php echo e($activePage->first()->meta_keywords); ?><?php $__env->stopSection(); ?>
<?php endif; ?>

<?php if($activePage->first()->meta_description): ?>
    <?php $__env->startSection('og_description'); ?><?php echo e($activePage->first()->meta_description); ?><?php $__env->stopSection(); ?>
<?php endif; ?>
<?php $__env->startSection('og_type'); ?><?php echo e('page'); ?><?php $__env->stopSection(); ?>

<?php if($Breadcrumb_banner): ?>
    <?php $__env->startSection('og_image'); ?><?php echo e(url("/images/banner-images/$Breadcrumb_banner")); ?><?php $__env->stopSection(); ?>
    <?php $__env->startSection('itemprop_image'); ?><?php echo e(url("/images/banner-images/$Breadcrumb_banner")); ?><?php $__env->stopSection(); ?>
<?php endif; ?>


<?php $__env->startSection('components'); ?>

    <?php echo $__env->make('components/preloader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('components/searchbox', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('components/cookieconsent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('components/newsletterpopup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('components/floatingsocialicons', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>



<section class="contact-page-area pt-50 pb-120">

    <div class="contact-wrap">
        <?php if(session()->has('message')): ?>
            <div class="alert alert-success" role="alert">
                <strong>Success</strong> <?php echo e(session()->get('message')); ?>

            </div>
        <?php elseif(session()->has('error')): ?>
            <div class="alert alert-danger"><?php echo session()->get('error'); ?></div>
                <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul class="list-unstyled">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo $error; ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <div class="tab-head mb-3">
            <div class="tab-title">Contact Form</div>
        </div>

        <div class="contact-form-border">
          <p>For more queries or comments about our products and corporate website. Please use the contact form below<br><small>(<span style="color: red;">*</span>) required</small></p>

          <form class="form-area contact-form text-right" id="contactUsform" action="/contact-us" method="post">

              <div class="form-group row mt-3">
                  <label for="name" class="col-sm-3 col-form-label"><span>*</span> Name</label>
                  <div class="col-sm-9">
                      <input name="name" required minlength="2" placeholder="Enter your name" value="<?php echo e(old('name')); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" type="text" size="20" maxlength="100">
                      <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <div class="error text-left text-danger"><i class="fa fa-info-circle" aria-hidden="true"></i> <?php echo e($message); ?></div>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </div>
              </div>

              <div class="form-group row">
                  <label for="staticEmail" class="col-sm-3 col-form-label"><span>*</span> Email</label>
                  <div class="col-sm-9">
                      <input type="email" name="email" required  placeholder="Enter email address" value="<?php echo e(old('email')); ?>"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" maxlength="80" size="20">
                      <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <div class="error text-left text-danger"><i class="fa fa-info-circle" aria-hidden="true"></i> <?php echo e($message); ?></div>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </div>
              </div>

              <div class="form-group row">
                  <label for="company" class="col-sm-3 col-form-label"><span>*</span> Company</label>
                  <div class="col-sm-9">
                      <input name="company" required placeholder="Enter company name" value="<?php echo e(old('company')); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter company name'" class="common-input mb-20 form-control" type="text" size="20" maxlength="100">
                      <?php $__errorArgs = ['company'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <div class="error text-left text-danger"><i class="fa fa-info-circle" aria-hidden="true"></i> <?php echo e($message); ?></div>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                  </div>
              </div>

              <div class="form-group row">
                  <label for="address" class="col-sm-3 col-form-label"><span>*</span> Address</label>
                  <div class="col-sm-9">
                      <input name="address" required placeholder="Enter address" value="<?php echo e(old('address')); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter address'" class="common-input mb-20 form-control" type="text" size="20" maxlength="200">
                      <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <div class="error text-left text-danger"><i class="fa fa-info-circle" aria-hidden="true"></i> <?php echo e($message); ?></div>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </div>
              </div>

              <div class="form-group row">
                  <label for="country" class="col-sm-3 col-form-label"><span>*</span> Country</label>
                  <div class="col-sm-9">
                      <select id="country" name="country" value="<?php echo e(old('country')); ?>" onchange="countryAtChange()" required class="form-control">
                              <option value="" selected="">Select your country</option>
                              <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($country->code); ?>" <?php echo e((old("country") == $country->code ? "selected":"")); ?> data-areacode="<?php echo e($country->area_code); ?>"><?php echo e($country->name); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                          </select>
                          <?php $__errorArgs = ['country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                              <div class="error text-left text-danger"><i class="fa fa-info-circle" aria-hidden="true"></i> <?php echo e($message); ?></div>
                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </div>
                  <input type="hidden" id="countryName" name="countryName" value="<?php echo e(old('countryName')); ?>">


              </div>

              <div class="form-group row">
                  <label for="contactNumber" class="col-sm-3 col-form-label"><span>*</span> Contact Number</label>
                  <div class="col-sm-9">
                      <div class="row small-gutters">
                          <div class="col-2">
                              <input name="areaCode" id="areaCode"  value="<?php echo e(old('areaCode')); ?>" class="common-input mb-20 form-control" type="text" readonly>
                          </div>
                          <div class="col-10">
                              <input name="contactNumber" id="contactNumber" required placeholder="Enter contact number" value="<?php echo e(old('contactNumber')); ?>" onfocus="this.placeholder = ''" onblur="phoneChange()" class="common-input mb-20 form-control" maxlength="30" size="20" type="number">
                              <input class="form-control" id="contactFull" maxlength="40" name="contactFull" size="20" type="hidden">
                              <?php $__errorArgs = ['contactNumber'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                  <div class="error text-left text-danger"><i class="fa fa-info-circle" aria-hidden="true"></i> <?php echo e($message); ?></div>
                              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                          </div>
                      </div>

                  </div>
              </div>

              <div class="form-group row">
                  <label for="prodInterest[]" class="col-sm-3 col-form-label">Product of Interest</label>
                  <div class="col-sm-9">
                      <select multiple="" class="form-control" id="prodInterest" name="prodInterest[]" title="">
                          <option value="">---Select Products--</option>
                          <?php $__currentLoopData = $product_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option <?php echo e($product->id==$prod?'selected':''); ?> <?php echo e((collect(old('prodInterest'))->contains((isset($product->brand)?$product->brand.' ':'').$product->name)) ? 'selected':''); ?> value="<?php echo e((isset($product->brand)?$product->brand.' ':'').$product->name); ?>"><?php echo e((isset($product->brand)?$product->brand.' ':'').$product->name); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                          <small id="prodInterestHelp" class="form-text text-muted text-left">For multiple products, hold down the 'Ctrl' key then select the product interest.</small>
                      <?php $__errorArgs = ['prodInterest'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <div class="error text-left text-danger"><i class="fa fa-info-circle" aria-hidden="true"></i> <?php echo e($message); ?></div>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </div>
              </div>

              <div class="form-group row">
                  <label for="message" class="col-sm-3 col-form-label">Message</label>
                  <div class="col-sm-9">
                      <textarea class="common-textarea form-control" name="message" placeholder="Enter Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"><?php echo e(old('message')); ?></textarea>
                  </div>
              </div>

              <input type="hidden" name="recaptcha" id="recaptcha">

              <?php echo csrf_field(); ?>

              <div class="form-group row">
                  <label for="staticEmail" class="col-sm-3 col-form-label"></label>
                  <div class="col-sm-9">
                      <div class="alert-msg" style="text-align: left;"></div>
                      <button id="btnSubmit" class="primary-btn primary" style="float: left;padding: 8px 10px;">Send Message
                      </button>
                  </div>
              </div>


          </form>
        </div>

    </div>

    

    <script src="https://www.google.com/recaptcha/api.js?render=<?php echo e(config('services.recaptcha.sitekey')); ?>"></script>

    <script>

         // grecaptcha.ready(function() {
         //     grecaptcha.execute('<?php echo e(config('services.recaptcha.sitekey')); ?>', {action: 'contact'}).then(function(token) {
         //        if (token) {
         //          document.getElementById('recaptcha').value = token;
         //        }
         //     });
         // });
    </script>

    <script>
	  grecaptcha.ready(function() {
	      document.getElementById('contactUsform').addEventListener("submit", function(event) {
	        event.preventDefault();
	        grecaptcha.execute('<?php echo e(config('services.recaptcha.sitekey')); ?>', {action: 'contact'}).then(function(token) {
	           document.getElementById("recaptcha").value= token;
	           document.getElementById('contactUsform').submit();
	        });
	      }, false);
	  });
	</script>

    <script>
        function countryAtChange() {
            var e = document.getElementById("country");
            var cname = e.options[e.selectedIndex].text;
            var areaCode = e.options[e.selectedIndex].dataset.areacode;

            document.getElementById("countryName").value = cname;
            document.getElementById("areaCode").value = '+'+areaCode.replace("-", " ");


        }
        function phoneChange(){
            var tel =  document.getElementById("areaCode").value + " " + document.getElementById("contactNumber").value;
            document.getElementById("contactFull").value = tel;
        }


    </script>

    <style>
        
    </style>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.contactUspageView', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\esco-tapestle-rx-revamp\resources\views/contactUs.blade.php ENDPATH**/ ?>