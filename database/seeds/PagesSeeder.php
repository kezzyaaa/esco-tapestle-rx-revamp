<?php

use Illuminate\Database\Seeder;
use App\Page;


class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    protected $page;

    public function __construct(Page $page)
    {
    	$this->page = $page;
    }

    public function run()
    {
		$pages = [
      [
           'page_category_id' => '1',
           'slug' => 'overview',
      'title' => 'Overview',
      'name' => 'Overview',
      'tagline' => null,
      'banner_img' => 'global-factories-new-min.png',
      'section' => 'about',
      'content' => '
      <h3 style="color: #48AFB5">Lorem Ipsum</h3>
      <p style="margin-bottom: 1rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pellentesque tortor sed nisi fringilla, sed lacinia turpis euismod. Nulla facilisi. Donec interdum urna vitae venenatis luctus. Vestibulum in accumsan erat, sit amet tristique eros. Mauris ac nulla id tellus accumsan posuere in a risus.</p>

      <div class="row" style="margin-bottom: 1rem;">
        <div class="col-xl-3 col-6 overview-item-round">
          <img data-src="/images/sample-img.png" alt="" title="" class="img-fluid lazy">
        </div>
        <div class="col-xl-3 col-6 overview-item-round">
          <img data-src="/images/sample-img.png" alt="" title="" class="img-fluid lazy">
        </div>
        <div class="col-xl-3 col-6 overview-item-round">
          <img data-src="/images/sample-img.png" alt="" title="" class="img-fluid lazy">
        </div>
        <div class="col-xl-3 col-6 overview-item-round">
          <img data-src="/images/sample-img.png" alt="" title="" class="img-fluid lazy">
        </div>
      </div>

      <p style="margin-bottom: 1rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pellentesque tortor sed nisi fringilla, sed lacinia turpis euismod. Nulla facilisi. Donec interdum urna vitae venenatis luctus. Vestibulum in accumsan erat, sit amet tristique eros. Mauris ac nulla id tellus accumsan posuere in a risus.</p>

      <h3 style="color: #48AFB5">Lorem Ipsum</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pellentesque tortor sed nisi fringilla, sed lacinia turpis euismod. Nulla facilisi. Donec interdum urna vitae venenatis luctus. Vestibulum in accumsan erat, sit amet tristique eros. Mauris ac nulla id tellus accumsan posuere in a risus.</p>

      <div class="row" style="padding-bottom: 1rem;">
        <div class="col-lg-4 col-12 overview-item-square">
          <img data-src="/images/sample-img.png" alt="" title="" class="img-fluid lazy">
        </div>
        <div class="col-lg-4 col-12 overview-item-square">
          <img data-src="/images/sample-img.png" alt="" title="" class="img-fluid lazy">
        </div>
        <div class="col-lg-4 col-12 overview-item-square">
          <img data-src="/images/sample-img.png" alt="" title="" class="img-fluid lazy">
        </div>
      </div>

      <h3 style="color: #48AFB5">Lorem Ipsum</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pellentesque tortor sed nisi fringilla, sed lacinia turpis euismod. Nulla facilisi. Donec interdum urna vitae venenatis luctus. Vestibulum in accumsan erat, sit amet tristique eros. Mauris ac nulla id tellus accumsan posuere in a risus.</p>
      ',
      'layout' => 'pageWithSidebarView',
      'is_activated' => null,
      'meta_keywords' => null,
      'meta_description' => null],



		   [
            'page_category_id' => '1',
            'slug' => 'profile',
		   'title' => 'Profile',
		   'name' => 'Profile',
		   'tagline' => null,
		   'banner_img' => 'about_us_banner.jpg',
		   'section' => 'about',
           'content' => '

           <div class="container" style="text-align: justify">
             <h3 style="color: #48AFB5">Lorem Ipsum</h3>
             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pellentesque tortor sed nisi fringilla, sed lacinia turpis euismod. Nulla facilisi. Donec interdum urna vitae venenatis luctus. Vestibulum in accumsan erat, sit amet tristique eros. Mauris ac nulla id tellus accumsan posuere in a risus.</p>
             <br />
             <br />
             <h3 style="color: #48AFB5">Lorem Ipsum</h3>
             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pellentesque tortor sed nisi fringilla, sed lacinia turpis euismod. Nulla facilisi. Donec interdum urna vitae venenatis luctus. Vestibulum in accumsan erat, sit amet tristique eros. Mauris ac nulla id tellus accumsan posuere in a risus.</p>
             <br />
             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pellentesque tortor sed nisi fringilla, sed lacinia turpis euismod. Nulla facilisi. Donec interdum urna vitae venenatis luctus. Vestibulum in accumsan erat, sit amet tristique eros. Mauris ac nulla id tellus accumsan posuere in a risus.</p>
             <br />
             <br />
             <h3 style="color: #48AFB5">Lorem Ipsum</h3>
             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pellentesque tortor sed nisi fringilla, sed lacinia turpis euismod. Nulla facilisi. Donec interdum urna vitae venenatis luctus. Vestibulum in accumsan erat, sit amet tristique eros. Mauris ac nulla id tellus accumsan posuere in a risus.</p>
             <br />
             <div style="padding-left: 1em; padding-right: 1em;">
               <img style="width: 100%;" data-src="/images/sample-img.png" alt="" title="" class="img-fluid lazy">
             </div>
           </div>



						',
		   'layout' => 'pageWithSidebarView',
		   'is_activated' => null,
		   'meta_keywords' => null,
		   'meta_description' => null],




		   [
            'page_category_id' => '1',
            'slug' => 'vision-mission',
		   'title' => 'Vision-Mission',
		   'name' => 'Vision-Mission',
		   'tagline' => null,
		   'banner_img' => 'mission-vission-min.jpg',
		   'section' => 'about',
           'content' => '

                <div class="pt-lg-5 mb-4 about-vision">
                        <div class=" about-section">
                            <div class="featured-section-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                                <div class="img-1" style="background: url(\'/images/sample-img.png\') center center / cover;">
                                </div>
                            </div>
                            <div class="featured-section wow fadeInRight" data-wow-duration="1s" data-wow-delay="1.5s">
                                <div class="img-2 about-section-title-and-description">
                                    <h3>Our <span>Vision</span></h3>
                                    <p>From our regional offices, Esco Pharma provides specialist services, equipment packages, and process solutions from our core platform products. This leads to improved protection of operators, reduction of cross-contamination, and a more efficient processing; thereby, directly and indirectly advancing occupational health and human healthcare. Globally, Esco Pharma’s scope of activity revolves around the fields of Biotherapeutics, Niche Manufacturing, and QC/QA. </p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <p>&nbsp;</p>
                    <p>&nbsp;</p>


                    <div class="pt-md-5 mt-md-5 mb-4 about-mission">
                        <div class=" about-section right-img">

                            <div class="featured-section wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                                <div class="img-1 about-section-title-and-description">
                                    <h3>Our <span>Mission</span></h3>
                                    <p>Our mission is to create safe industrial work environments for operator  protection and for the integrity of the products; that eventually find their way into global healthcare systems.
									<br><br>This enables pharmaceuticals, nutraceuticals, and cosmeceuticals to comply with internationally accredited cGMP, as well as, industrial, environmental, and health and safety standards.
									<br><br>Access to advanced technology often has multiple barriers, such as its cost, lack of information, and even communication with suppliers. This results to an extended project turnaround with higher maintenance costs.
									<br><br>Esco Pharma’s largest global network of localized application specialists and service offices, provide faster service response than others; translating into more competitive maintenance costs and shorter project life cycles.
									<br><br>Esco Pharma provides specialist services, equipment packages, and process solutions from our core platform products. This leads to improved operator protection, reduction of cross contamination, and a more efficient processing; thus, directly and indirectly advancing occupational health and human healthcare.</p>
                                </div>
                            </div>
                            <div class="featured-section-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                <div class="img-2" style="background: url(\'/images/sample-img.png\'); background-position: center;">
                                </div>
                            </div>
                        </div>
                    </div>',
		   'layout' => 'pageWithSidebarView',
		   'is_activated' => null,
		   'meta_keywords' => null,
		   'meta_description' => null],













		   ['slug' => 'products',
		   'title' => 'Products Core Technology',
		   'name' => 'Products Core Technology',
		   'tagline' => null,
		   'banner_img' => 'products-directory-banner.jpg',
		   'section' => 'Products A-Z',
		   'content' => '',
		   'layout' => 'productDirectoryView',
		   'is_activated' => null,
		   'meta_keywords' => null,
           'meta_description' => null],

        // Services pages

        // the checks must be pre-set

		   [
            'page_category_id' => '4',
            'slug' => 'nebb-cleanroom-performance-testing',
		   'title' => 'Nebb Cleanroom Performance Testing',
		   'name' => 'Nebb Cleanroom Performance Testing',
		   'tagline' => null,
		   'banner_img' => 'services-banner.jpg',
		   'section' => 'services',
           'content' => '

           <div class="px-0 px-sm-3 wow fadeInUp">
               <h3>Technical <span class="teal-color">References</span></h3>
               <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis.</p>
           </div>

           <ul class="image-list-style-ul-lg">
               <li>
                   <h6>Lorem Ipsum</h6>
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                   <ul>
                       <li><p>Lorem ipsum dolor sit amet</p></li>
                       <li><p>Lorem ipsum dolor sit amet</p></li>
                       <li><p>Lorem ipsum dolor sit amet</p></li>
                       <li><p>Lorem ipsum dolor sit amet</p></li>
                   </ul>
               </li>

               <li>
                   <h6>Lorem Ipsum</h6>
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                   <ul>
                       <li><p>Lorem ipsum dolor sit amet</p></li>
                       <li><p>Lorem ipsum dolor sit amet</p></li>
                   </ul>
               </li>

               <li>
                   <h6>Lorem Ipsum</h6>
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                   <ul>
                       <li><p>Lorem ipsum dolor sit amet</p></li>
                       <li><p>Lorem ipsum dolor sit amet</p></li>
                       <li><p>Lorem ipsum dolor sit amet</p></li>
                   </ul>
               </li>

               <li>
                   <h6>Lorem Ipsum</h6>
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                   <ul>
                       <li><p>Lorem ipsum dolor sit amet</p></li>
                       <li><p>Lorem ipsum dolor sit amet</p></li>
                       <li><p>Lorem ipsum dolor sit amet</p></li>
                   </ul>
               </li>
           </ul>


           ',
		   'layout' => 'pageWithSidebarView',
		   'is_activated' => null,
		   'meta_keywords' => null,
		   'meta_description' => null],



           [
            'page_category_id' => '4',
            'slug' => 'surface-wipe-sampling-analysis',
		   'title' => 'Surface Wipe Sampling Analysis',
		   'name' => 'Surface Wipe Sampling Analysis',
		   'tagline' => null,
		   'banner_img' => 'services-banner.jpg',
		   'section' => 'services',
           'content' => '
                 <div class="px-0 px-sm-3 wow fadeInUp">
                     <h3>Technical <span class="teal-color">References</span></h3>
                     <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis.</p>
                 </div>

                <div class="row mt-3">
                    <div class="col-md-3">
                        <img class="img-fluid" src="/images/sample-img.png" alt="">
                    </div>
                    <div class="col-md-9">
                        <h6 class="text-white primary-bg pl-2">Lorem Ipsum</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis.</p>
                        <ul class="image-list-style-ul-lg">
                            <li><p><strong>Lorem Ipsum</strong></p></li>
                            <li><p><strong>Lorem Ipsum</strong></p></li>
                            <li><p><strong>Lorem Ipsum</strong></p></li>

                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis.</p>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-3">
                        <img class="img-fluid" src="/images/sample-img.png" alt="">
                    </div>
                    <div class="col-md-9">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis.</p>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-3">
                        <img class="img-fluid" src="/images/sample-img.png" alt="">
                    </div>

                    <div class="col-md-9">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis.</p>
                        <ul class="image-list-style-ul-lg">
                            <li><p>Lorem Ipsum</p></li>
                            <li><p>Lorem Ipsum</p></li>
                            <li><p>Lorem Ipsum</p></li>
                            <li><p>Lorem Ipsum</p></li>
                            <li><p>Lorem Ipsum</p></li>
                            <li><p>Lorem Ipsum</p></li>
                        </ul>
                    </div>
                </div>

           ',
		   'layout' => 'pageWithSidebarView',
		   'is_activated' => null,
		   'meta_keywords' => null,
		   'meta_description' => null],




           [
            'page_category_id' => '4',
            'slug' => 'equipment-maintenance-certification',
		   'title' => 'Equipment Maintenance/Certification',
		   'name' => 'Equipment Maintenance/Certification',
		   'tagline' => null,
		   'banner_img' => 'services-banner.jpg',
		   'section' => 'services',
           'content' => '

               <div class="px-0 px-sm-3 wow fadeInUp">
                   <h3>Technical <span class="teal-color">References</span></h3>
                   <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis.</p>
               </div>

               <div>
                   <h4>Lorem ipsum dolor:</h4>
                   <ul class="image-list-style-ul-lg">
                       <li><p>Lorem Ipsum</p></li>
                       <li><p>Lorem Ipsum</p></li>
                       <li><p>Lorem Ipsum</p></li>
                       <li><p>Lorem Ipsum</p></li>
                       <li><p>Lorem Ipsum</p></li>
                       <li><p>Lorem Ipsum</p></li>
                       <li><p>Lorem Ipsum</p></li>
                       <li><p>Lorem Ipsum</p></li>
                   </ul>
               </div>

               <p class="text-justify mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis.</p>

           ',
		   'layout' => 'pageWithSidebarView',
		   'is_activated' => null,
		   'meta_keywords' => null,
		   'meta_description' => null],

       //     [
       //      'page_category_id' => '4',
       //      'slug' => 'upgrade-your-equipment-with-us',
		   // 'title' => 'Upgrade Your Equipment With Us!',
		   // 'name' => 'Upgrade Your Equipment With Us',
		   // 'tagline' => null,
		   // 'banner_img' => 'services-banner.jpg',
		   // 'section' => 'services',
       //     'content' => '
       //          <p class="text-justify">Esco is dedicated to optimize the process of the clients; from equipment installation and validation up to its relocation and upgrade. This guarantees a minimized process disruption and the safety of the equipment.
       //          <br><br>
       //          Upgrading your Esco equipment is easily achieved with the flexible design and the various options that we cater:</p>
       //          <br>
       //          <ul class="image-list-style-ul-lg">
       //              <li><p>Equipment Validation </p></li>
       //              <li><p>Biodecontamination Cycle Development</p></li>
       //              <li><p>Equipment Relocation</p></li>
       //              <li>
       //                  <p>Cooling Coil Packages for Downflow Booths.</p>
       //                  <p><em>- Addition of high containment screens for Downflow Booths.</em></p>
       //              </li>
       //              <li>
       //                  <p>Retrofit Solutions to reduce OELs through the addition of local exhaust ventilation (LEV) or changing filter housings in Downflow Booths to Bag-In, Bag-Out (BIBO):</p>
       //                  <p><em>- Others as a custom request.</em></p>
       //              </li>
       //          </ul>
       //
       //     ',
		   // 'layout' => 'pageWithSidebarView',
		   // 'is_activated' => null,
		   // 'meta_keywords' => null,
		   // 'meta_description' => null],


           [
            'page_category_id' => '5',
            'slug' => 'technical-references',
		   'title' => 'Technical References',
		   'name' => 'Technical Referenes',
		   'tagline' => null,
		   'banner_img' => 'resources.jpg',
		   'section' => 'resource',
       // reference to downloads.blade.php
           'content' => '

           <div class="px-0 px-sm-3 wow fadeInUp">
               <h3>Technical <span class="teal-color">References</span></h3>
               <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis.</p>
           </div>

           <div id="accordion" class="product_spec_accordion px-0 px-sm-3 pt-4" role="tablist" aria-multiselectable="true">
   	          	<!-- Accordion Item 1 -->
   	          	<div class="mb-3">

                       <div class="tab-head">
                           <div class="tab-title">Pharmacy Compounding Equipment Selection Guide</div>
                       </div>
   		            <div id="#" class="collapse show clear-both" role="tabpanel" aria-labelledby="accordionHeadingOne" aria-expanded="false" data-parent="accordion">
   		              <div class="card-block p-3 p-sm-4">
                           <div class="row">
                               <div class="col-6 col-md-4">
                                   <div class="prod-broch-card-image-details" title="#">
                                       <a href="#" target="_blank">
                                           <div class="mb-2 p-1 custom-brochure-light-border-shadow">
                                               <div class="prod-brochure-container">
                                                   <img title="#" alt="#" class="prod-brochure-img" src="/images/sample-img.png">
                                               </div>
                                           </div>
                                       </a>
                                       <a href="#" target="_blank"><p class="text-center">Lorem Ipsum</p></a>
                                   </div>
                               </div>

                               <div class="col-6 col-md-4">
                                   <div class="prod-broch-card-image-details" title="#">
                                       <a href="#" target="_blank">
                                           <div class="mb-2 p-1 custom-brochure-light-border-shadow">
                                               <div class="prod-brochure-container">
                                                   <img title="#" alt="#" class="prod-brochure-img" src="/images/sample-img.png">
                                               </div>
                                           </div>
                                       </a>
                                       <a href="#" target="_blank"><p class="text-center">Lorem Ipsum</p></a>
                                   </div>
                               </div>

                               <div class="col-6 col-md-4">
                                   <div class="prod-broch-card-image-details" title="#">
                                       <a href="#" target="_blank">
                                           <div class="mb-2 p-1 custom-brochure-light-border-shadow">
                                               <div class="prod-brochure-container">
                                                   <img title="#" alt="#" class="prod-brochure-img" src="/images/sample-img.png">
                                               </div>
                                           </div>
                                       </a>
                                       <a href="#" target="_blank"><p class="text-center">Lorem Ipsum</p></a>
                                   </div>
                               </div>
                           </div>
   		              </div>
   		            </div>
   	          	</div>

           </div>

           <div id="accordion" class="product_spec_accordion px-0 px-sm-3" role="tablist" aria-multiselectable="true">
   	          	<!-- Accordion Item 1 -->
   	          	<div class="mb-3">

                       <div class="tab-head">
                           <div class="tab-title">Usp 797/800 Reference Guide</div>
                       </div>
   		            <div id="#" class="collapse show clear-both" role="tabpanel" aria-labelledby="accordionHeadingOne" aria-expanded="false" data-parent="accordion">
   		              <div class="card-block p-3 p-sm-4">
                           <div class="row">
                               <div class="col-6 col-md-4">
                                   <div class="prod-broch-card-image-details" title="#">
                                       <a href="#" target="_blank">
                                           <div class="mb-2 p-1 custom-brochure-light-border-shadow">
                                               <div class="prod-brochure-container">
                                                   <img title="#" alt="#" class="prod-brochure-img" src="/images/sample-img.png">
                                               </div>
                                           </div>
                                       </a>
                                       <a href="#" target="_blank"><p class="text-center">Lorem Ipsum</p></a>
                                   </div>
                               </div>

                               <div class="col-6 col-md-4">
                                   <div class="prod-broch-card-image-details" title="#">
                                       <a href="#" target="_blank">
                                           <div class="mb-2 p-1 custom-brochure-light-border-shadow">
                                               <div class="prod-brochure-container">
                                                   <img title="#" alt="#" class="prod-brochure-img" src="/images/sample-img.png">
                                               </div>
                                           </div>
                                       </a>
                                       <a href="#" target="_blank"><p class="text-center">Lorem Ipsum</p></a>
                                   </div>
                               </div>

                               <div class="col-6 col-md-4">
                                   <div class="prod-broch-card-image-details" title="#">
                                       <a href="#" target="_blank">
                                           <div class="mb-2 p-1 custom-brochure-light-border-shadow">
                                               <div class="prod-brochure-container">
                                                   <img title="#" alt="#" class="prod-brochure-img" src="/images/sample-img.png">
                                               </div>
                                           </div>
                                       </a>
                                       <a href="#" target="_blank"><p class="text-center">Lorem Ipsum</p></a>
                                   </div>
                               </div>
                           </div>
   		              </div>
   		            </div>
   	          	</div>

           </div>

           <div id="accordion" class="product_spec_accordion px-0 px-sm-3" role="tablist" aria-multiselectable="true">
   	          	<!-- Accordion Item 1 -->
   	          	<div class="mb-3">

                       <div class="tab-head">
                           <div class="tab-title">Usp 825 Reference Guide</div>
                       </div>
   		            <div id="#" class="collapse show clear-both" role="tabpanel" aria-labelledby="accordionHeadingOne" aria-expanded="false" data-parent="accordion">
   		              <div class="card-block p-3 p-sm-4">
                           <div class="row">
                               <div class="col-6 col-md-4">
                                   <div class="prod-broch-card-image-details" title="#">
                                       <a href="#" target="_blank">
                                           <div class="mb-2 p-1 custom-brochure-light-border-shadow">
                                               <div class="prod-brochure-container">
                                                   <img title="#" alt="#" class="prod-brochure-img" src="/images/sample-img.png">
                                               </div>
                                           </div>
                                       </a>
                                       <a href="#" target="_blank"><p class="text-center">Lorem Ipsum</p></a>
                                   </div>
                               </div>

                               <div class="col-6 col-md-4">
                                   <div class="prod-broch-card-image-details" title="#">
                                       <a href="#" target="_blank">
                                           <div class="mb-2 p-1 custom-brochure-light-border-shadow">
                                               <div class="prod-brochure-container">
                                                   <img title="#" alt="#" class="prod-brochure-img" src="/images/sample-img.png">
                                               </div>
                                           </div>
                                       </a>
                                       <a href="#" target="_blank"><p class="text-center">Lorem Ipsum</p></a>
                                   </div>
                               </div>

                               <div class="col-6 col-md-4">
                                   <div class="prod-broch-card-image-details" title="#">
                                       <a href="#" target="_blank">
                                           <div class="mb-2 p-1 custom-brochure-light-border-shadow">
                                               <div class="prod-brochure-container">
                                                   <img title="#" alt="#" class="prod-brochure-img" src="/images/sample-img.png">
                                               </div>
                                           </div>
                                       </a>
                                       <a href="#" target="_blank"><p class="text-center">Lorem Ipsum</p></a>
                                   </div>
                               </div>
                           </div>
   		              </div>
   		            </div>
   	          	</div>

           </div>

           <div id="accordion" class="product_spec_accordion px-0 px-sm-3" role="tablist" aria-multiselectable="true">
   	          	<!-- Accordion Item 1 -->
   	          	<div class="mb-3">

                       <div class="tab-head">
                           <div class="tab-title">503A/503B Reference Guide</div>
                       </div>
   		            <div id="#" class="collapse show clear-both" role="tabpanel" aria-labelledby="accordionHeadingOne" aria-expanded="false" data-parent="accordion">
   		              <div class="card-block p-3 p-sm-4">
                           <div class="row">
                               <div class="col-6 col-md-4">
                                   <div class="prod-broch-card-image-details" title="#">
                                       <a href="#" target="_blank">
                                           <div class="mb-2 p-1 custom-brochure-light-border-shadow">
                                               <div class="prod-brochure-container">
                                                   <img title="#" alt="#" class="prod-brochure-img" src="/images/sample-img.png">
                                               </div>
                                           </div>
                                       </a>
                                       <a href="#" target="_blank"><p class="text-center">Lorem Ipsum</p></a>
                                   </div>
                               </div>

                               <div class="col-6 col-md-4">
                                   <div class="prod-broch-card-image-details" title="#">
                                       <a href="#" target="_blank">
                                           <div class="mb-2 p-1 custom-brochure-light-border-shadow">
                                               <div class="prod-brochure-container">
                                                   <img title="#" alt="#" class="prod-brochure-img" src="/images/sample-img.png">
                                               </div>
                                           </div>
                                       </a>
                                       <a href="#" target="_blank"><p class="text-center">Lorem Ipsum</p></a>
                                   </div>
                               </div>

                               <div class="col-6 col-md-4">
                                   <div class="prod-broch-card-image-details" title="#">
                                       <a href="#" target="_blank">
                                           <div class="mb-2 p-1 custom-brochure-light-border-shadow">
                                               <div class="prod-brochure-container">
                                                   <img title="#" alt="#" class="prod-brochure-img" src="/images/sample-img.png">
                                               </div>
                                           </div>
                                       </a>
                                       <a href="#" target="_blank"><p class="text-center">Lorem Ipsum</p></a>
                                   </div>
                               </div>
                           </div>
   		              </div>
   		            </div>
   	          	</div>

           </div>

           <div id="accordion" class="product_spec_accordion px-0 px-sm-3" role="tablist" aria-multiselectable="true">
   	          	<!-- Accordion Item 1 -->
   	          	<div class="mb-3">

                       <div class="tab-head">
                           <div class="tab-title">HDs..</div>
                       </div>
   		            <div id="#" class="collapse show clear-both" role="tabpanel" aria-labelledby="accordionHeadingOne" aria-expanded="false" data-parent="accordion">
   		              <div class="card-block p-3 p-sm-4">
                           <div class="row">
                               <div class="col-6 col-md-4">
                                   <div class="prod-broch-card-image-details" title="#">
                                       <a href="#" target="_blank">
                                           <div class="mb-2 p-1 custom-brochure-light-border-shadow">
                                               <div class="prod-brochure-container">
                                                   <img title="#" alt="#" class="prod-brochure-img" src="/images/sample-img.png">
                                               </div>
                                           </div>
                                       </a>
                                       <a href="#" target="_blank"><p class="text-center">Lorem Ipsum</p></a>
                                   </div>
                               </div>

                               <div class="col-6 col-md-4">
                                   <div class="prod-broch-card-image-details" title="#">
                                       <a href="#" target="_blank">
                                           <div class="mb-2 p-1 custom-brochure-light-border-shadow">
                                               <div class="prod-brochure-container">
                                                   <img title="#" alt="#" class="prod-brochure-img" src="/images/sample-img.png">
                                               </div>
                                           </div>
                                       </a>
                                       <a href="#" target="_blank"><p class="text-center">Lorem Ipsum</p></a>
                                   </div>
                               </div>

                               <div class="col-6 col-md-4">
                                   <div class="prod-broch-card-image-details" title="#">
                                       <a href="#" target="_blank">
                                           <div class="mb-2 p-1 custom-brochure-light-border-shadow">
                                               <div class="prod-brochure-container">
                                                   <img title="#" alt="#" class="prod-brochure-img" src="/images/sample-img.png">
                                               </div>
                                           </div>
                                       </a>
                                       <a href="#" target="_blank"><p class="text-center">Lorem Ipsum</p></a>
                                   </div>
                               </div>
                           </div>
   		              </div>
   		            </div>
   	          	</div>

           </div>

           ',
		   'layout' => 'pageWithSidebarView',
		   'is_activated' => null,
		   'meta_keywords' => null,
		   'meta_description' => null],


           [
            'page_category_id' => '5',
            'slug' => 'product-references',
		   'title' => 'Product References',
		   'name' => 'Product References',
		   'tagline' => null,
		   'banner_img' => 'resources.jpg',
		   'section' => 'resource',
           'content' => '
           <div class="px-0 px-sm-3 wow fadeInUp">
               <h3>Product <span class="teal-color">References</span></h3>
               <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis.</p>
           </div>

           <div id="accordion" class="product_spec_accordion px-0 px-sm-3 pt-4" role="tablist" aria-multiselectable="true">
                 <!-- Accordion Item 1 -->
                 <div class="mb-3">

                       <div class="tab-head">
                           <div class="tab-title">Catalogues/Brochures</div>
                       </div>
                   <div id="#" class="collapse show clear-both" role="tabpanel" aria-labelledby="accordionHeadingOne" aria-expanded="false" data-parent="accordion">
                     <div class="card-block p-3 p-sm-4">
                           <div class="row">
                               <div class="col-6 col-md-4">
                                   <div class="prod-broch-card-image-details" title="#">
                                       <a href="#" target="_blank">
                                           <div class="mb-2 p-1 custom-brochure-light-border-shadow">
                                               <div class="prod-brochure-container">
                                                   <img title="#" alt="#" class="prod-brochure-img" src="/images/sample-img.png">
                                               </div>
                                           </div>
                                       </a>
                                       <a href="#" target="_blank"><p class="text-center">Lorem Ipsum</p></a>
                                   </div>
                               </div>

                               <div class="col-6 col-md-4">
                                   <div class="prod-broch-card-image-details" title="#">
                                       <a href="#" target="_blank">
                                           <div class="mb-2 p-1 custom-brochure-light-border-shadow">
                                               <div class="prod-brochure-container">
                                                   <img title="#" alt="#" class="prod-brochure-img" src="/images/sample-img.png">
                                               </div>
                                           </div>
                                       </a>
                                       <a href="#" target="_blank"><p class="text-center">Lorem Ipsum</p></a>
                                   </div>
                               </div>

                               <div class="col-6 col-md-4">
                                   <div class="prod-broch-card-image-details" title="#">
                                       <a href="#" target="_blank">
                                           <div class="mb-2 p-1 custom-brochure-light-border-shadow">
                                               <div class="prod-brochure-container">
                                                   <img title="#" alt="#" class="prod-brochure-img" src="/images/sample-img.png">
                                               </div>
                                           </div>
                                       </a>
                                       <a href="#" target="_blank"><p class="text-center">Lorem Ipsum</p></a>
                                   </div>
                               </div>

                               <div class="col-6 col-md-4">
                                   <div class="prod-broch-card-image-details" title="#">
                                       <a href="#" target="_blank">
                                           <div class="mb-2 p-1 custom-brochure-light-border-shadow">
                                               <div class="prod-brochure-container">
                                                   <img title="#" alt="#" class="prod-brochure-img" src="/images/sample-img.png">
                                               </div>
                                           </div>
                                       </a>
                                       <a href="#" target="_blank"><p class="text-center">Lorem Ipsum</p></a>
                                   </div>
                               </div>

                               <div class="col-6 col-md-4">
                                   <div class="prod-broch-card-image-details" title="#">
                                       <a href="#" target="_blank">
                                           <div class="mb-2 p-1 custom-brochure-light-border-shadow">
                                               <div class="prod-brochure-container">
                                                   <img title="#" alt="#" class="prod-brochure-img" src="/images/sample-img.png">
                                               </div>
                                           </div>
                                       </a>
                                       <a href="#" target="_blank"><p class="text-center">Lorem Ipsum</p></a>
                                   </div>
                               </div>

                               <div class="col-6 col-md-4">
                                   <div class="prod-broch-card-image-details" title="#">
                                       <a href="#" target="_blank">
                                           <div class="mb-2 p-1 custom-brochure-light-border-shadow">
                                               <div class="prod-brochure-container">
                                                   <img title="#" alt="#" class="prod-brochure-img" src="/images/sample-img.png">
                                               </div>
                                           </div>
                                       </a>
                                       <a href="#" target="_blank"><p class="text-center">Lorem Ipsum</p></a>
                                   </div>
                               </div>

                               <div class="col-6 col-md-4">
                                   <div class="prod-broch-card-image-details" title="#">
                                       <a href="#" target="_blank">
                                           <div class="mb-2 p-1 custom-brochure-light-border-shadow">
                                               <div class="prod-brochure-container">
                                                   <img title="#" alt="#" class="prod-brochure-img" src="/images/sample-img.png">
                                               </div>
                                           </div>
                                       </a>
                                       <a href="#" target="_blank"><p class="text-center">Lorem Ipsum</p></a>
                                   </div>
                               </div>

                               <div class="col-6 col-md-4">
                                   <div class="prod-broch-card-image-details" title="#">
                                       <a href="#" target="_blank">
                                           <div class="mb-2 p-1 custom-brochure-light-border-shadow">
                                               <div class="prod-brochure-container">
                                                   <img title="#" alt="#" class="prod-brochure-img" src="/images/sample-img.png">
                                               </div>
                                           </div>
                                       </a>
                                       <a href="#" target="_blank"><p class="text-center">Lorem Ipsum</p></a>
                                   </div>
                               </div>

                               <div class="col-6 col-md-4">
                                   <div class="prod-broch-card-image-details" title="#">
                                       <a href="#" target="_blank">
                                           <div class="mb-2 p-1 custom-brochure-light-border-shadow">
                                               <div class="prod-brochure-container">
                                                   <img title="#" alt="#" class="prod-brochure-img" src="/images/sample-img.png">
                                               </div>
                                           </div>
                                       </a>
                                       <a href="#" target="_blank"><p class="text-center">Lorem Ipsum</p></a>
                                   </div>
                               </div>
                           </div>
                     </div>
                   </div>
                 </div>

           </div>



           ',
		   'layout' => 'pageWithSidebarView',
		   'is_activated' => null,
		   'meta_keywords' => null,
		   'meta_description' => null],


           [
            'page_category_id' => '5',
            'slug' => 'seminars-webinars',
		   'title' => 'Seminars/Webinars',
		   'name' => 'Seminars/Webinars',
		   'tagline' => null,
		   'banner_img' => 'resources.jpg',
		   'section' => 'resource',
           'content' => '

           <div class="px-0 px-sm-3 wow fadeInUp">
               <h3>Product <span class="teal-color">References</span></h3>
               <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis.</p>
               <br>
               <h5>Lorem Ipsum</h5>
               <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis.</p>
               <ol>
                  <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis. </li>
                  <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis. </li>
                  <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis. </li>
               </ol>
               <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis.</p>
               <br>
               <table class="table table-bordered seminars-webinars-table">
                  <thead>
                      <tr class="text-center">
                          <th class="col-4">Lorem Ipsum</th>
                          <th class="col-8">Lorem Ipsum</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td class="col-4">1. Lorem ipsum dolor sit amet</td>
                          <td class="col-8">
                              <ul>
                                  <li>Lorem ipsum dolor sit amet</li>
                                  <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis.</li>
                              </ul>
                          </td>
                      </tr>
                      <tr>
                          <td class="col-4">2. Lorem ipsum dolor sit amet</td>
                          <td class="col-8">
                              <ul>
                                  <li>Lorem ipsum dolor sit amet</li>
                                  <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis.</li>
                              </ul>
                          </td>
                      </tr>
                      <tr>
                          <td class="col-4">3. Lorem ipsum dolor sit amet</td>
                          <td class="col-8">
                              <ul>
                                  <li>Lorem ipsum dolor sit amet</li>
                                  <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis.</li>
                              </ul>
                          </td>
                      </tr>
                      <tr>
                          <td class="col-4">4. Lorem ipsum dolor sit amet</td>
                          <td class="col-8">
                              <ul>
                                  <li>Lorem ipsum dolor sit amet</li>
                                  <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis.</li>
                              </ul>
                          </td>
                      </tr>
               </table>
               <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis.</p>
               <div class="pt-4 text-center">
                   <a href="#" class="btn pharma-btn">Lorem Ipsum</a>
               </div>
           </div>




           ',
		   'layout' => 'pageWithSidebarView',
		   'is_activated' => null,
		   'meta_keywords' => null,
		   'meta_description' => null],



           [
            'page_category_id' => '5',
            'slug' => 'videos',
		   'title' => 'Videos',
		   'name' => 'Videos',
		   'tagline' => null,
		   'banner_img' => 'resources.jpg',
		   'section' => 'resource',
       // just put youtube playlist here
           'content' => '

           <div id="player">
                <div class="js-player" data-type="youtube" data-video-id="" data-ytpls="PL533213361AEB44D3"></div>
           </div>

           ',
		   'layout' => 'pageWithSidebarView',
		   'is_activated' => null,
		   'meta_keywords' => null,
		   'meta_description' => null],


           [
            'page_category_id' => '5',
            'slug' => 'application-posters-flyers',
		   'title' => 'Application Posters/Flyers',
		   'name' => 'Application Posters/Flyers',
		   'tagline' => null,
		   'banner_img' => 'resources.jpg',
		   'section' => 'resource',
           'content' => '
           <div class="px-0 px-sm-3 wow fadeInUp">
               <h3>Application Posters / Flyers</h3>
               <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate lectus eu arcu hendrerit mollis.</p>
           </div>

           <div id="accordion" class="product_spec_accordion px-0 px-sm-3 pt-4" role="tablist" aria-multiselectable="true">
                 <!-- Accordion Item 1 -->
                 <div class="mb-3">

                       <div class="tab-head">
                           <div class="tab-title">Application Posters/Flyers</div>
                       </div>
                   <div id="#" class="collapse show clear-both" role="tabpanel" aria-labelledby="accordionHeadingOne" aria-expanded="false" data-parent="accordion">
                     <div class="card-block p-3 p-sm-4">
                           <div class="row">
                               <div class="col-6 col-md-4">
                                   <div class="prod-broch-card-image-details" title="#">
                                       <a href="#" target="_blank">
                                           <div class="mb-2 p-1 custom-brochure-light-border-shadow">
                                               <div class="prod-brochure-container">
                                                   <img title="#" alt="#" class="prod-brochure-img" src="/images/sample-img.png">
                                               </div>
                                           </div>
                                       </a>
                                       <a href="#" target="_blank"><p class="text-center">Lorem Ipsum</p></a>
                                   </div>
                               </div>

                               <div class="col-6 col-md-4">
                                   <div class="prod-broch-card-image-details" title="#">
                                       <a href="#" target="_blank">
                                           <div class="mb-2 p-1 custom-brochure-light-border-shadow">
                                               <div class="prod-brochure-container">
                                                   <img title="#" alt="#" class="prod-brochure-img" src="/images/sample-img.png">
                                               </div>
                                           </div>
                                       </a>
                                       <a href="#" target="_blank"><p class="text-center">Lorem Ipsum</p></a>
                                   </div>
                               </div>

                               <div class="col-6 col-md-4">
                                   <div class="prod-broch-card-image-details" title="#">
                                       <a href="#" target="_blank">
                                           <div class="mb-2 p-1 custom-brochure-light-border-shadow">
                                               <div class="prod-brochure-container">
                                                   <img title="#" alt="#" class="prod-brochure-img" src="/images/sample-img.png">
                                               </div>
                                           </div>
                                       </a>
                                       <a href="#" target="_blank"><p class="text-center">Lorem Ipsum</p></a>
                                   </div>
                               </div>

                               <div class="col-6 col-md-4">
                                   <div class="prod-broch-card-image-details" title="#">
                                       <a href="#" target="_blank">
                                           <div class="mb-2 p-1 custom-brochure-light-border-shadow">
                                               <div class="prod-brochure-container">
                                                   <img title="#" alt="#" class="prod-brochure-img" src="/images/sample-img.png">
                                               </div>
                                           </div>
                                       </a>
                                       <a href="#" target="_blank"><p class="text-center">Lorem Ipsum</p></a>
                                   </div>
                               </div>

                               <div class="col-6 col-md-4">
                                   <div class="prod-broch-card-image-details" title="#">
                                       <a href="#" target="_blank">
                                           <div class="mb-2 p-1 custom-brochure-light-border-shadow">
                                               <div class="prod-brochure-container">
                                                   <img title="#" alt="#" class="prod-brochure-img" src="/images/sample-img.png">
                                               </div>
                                           </div>
                                       </a>
                                       <a href="#" target="_blank"><p class="text-center">Lorem Ipsum</p></a>
                                   </div>
                               </div>

                               <div class="col-6 col-md-4">
                                   <div class="prod-broch-card-image-details" title="#">
                                       <a href="#" target="_blank">
                                           <div class="mb-2 p-1 custom-brochure-light-border-shadow">
                                               <div class="prod-brochure-container">
                                                   <img title="#" alt="#" class="prod-brochure-img" src="/images/sample-img.png">
                                               </div>
                                           </div>
                                       </a>
                                       <a href="#" target="_blank"><p class="text-center">Lorem Ipsum</p></a>
                                   </div>
                               </div>

                               <div class="col-6 col-md-4">
                                   <div class="prod-broch-card-image-details" title="#">
                                       <a href="#" target="_blank">
                                           <div class="mb-2 p-1 custom-brochure-light-border-shadow">
                                               <div class="prod-brochure-container">
                                                   <img title="#" alt="#" class="prod-brochure-img" src="/images/sample-img.png">
                                               </div>
                                           </div>
                                       </a>
                                       <a href="#" target="_blank"><p class="text-center">Lorem Ipsum</p></a>
                                   </div>
                               </div>

                               <div class="col-6 col-md-4">
                                   <div class="prod-broch-card-image-details" title="#">
                                       <a href="#" target="_blank">
                                           <div class="mb-2 p-1 custom-brochure-light-border-shadow">
                                               <div class="prod-brochure-container">
                                                   <img title="#" alt="#" class="prod-brochure-img" src="/images/sample-img.png">
                                               </div>
                                           </div>
                                       </a>
                                       <a href="#" target="_blank"><p class="text-center">Lorem Ipsum</p></a>
                                   </div>
                               </div>

                               <div class="col-6 col-md-4">
                                   <div class="prod-broch-card-image-details" title="#">
                                       <a href="#" target="_blank">
                                           <div class="mb-2 p-1 custom-brochure-light-border-shadow">
                                               <div class="prod-brochure-container">
                                                   <img title="#" alt="#" class="prod-brochure-img" src="/images/sample-img.png">
                                               </div>
                                           </div>
                                       </a>
                                       <a href="#" target="_blank"><p class="text-center">Lorem Ipsum</p></a>
                                   </div>
                               </div>
                           </div>
                     </div>
                   </div>
                 </div>

           </div>

           ',
		   'layout' => 'pageWithSidebarView',
		   'is_activated' => null,
		   'meta_keywords' => null,
		   'meta_description' => null],

       //     [
       //      'page_category_id' => '5',
       //      'slug' => 'guide-to-different-processing',
		   // 'title' => 'Guide to different processing',
		   // 'name' => 'Guide to different processing',
		   // 'tagline' => null,
		   // 'banner_img' => 'resources.jpg',
		   // 'section' => 'resource',
       //     'content' => '
       //
       //          <div class="pdfCon">    <p style="text-align: justify;">Sterile drugs should be manufactured using aseptic processing only when terminal sterilization is not feasible. However, some final packaging may afford some unique and substantial advantage (e.g., some dual-chamber syringes) that would not be possible if terminal sterilization were employed. In such cases, a manufacturer can explore the option of adding adjunct processing steps to increase the level of sterility assurance.</p>
       //          <p style="text-align: justify;">Product Requirements</p>
       //          <p style="text-align: justify;">FDA has stated, where possible, that the use of terminal sterilization should be used in the manufacture of sterile product, when no detrimental effects has been inflicted on the achieving the end-product.</p>
       //          <p style="text-align: justify;">Consequently, the first step in establishing the processing conditions, and therefore the design of the manufacturing facility, is to determine whether terminal sterilization will be requires.</p>
       //          <p style="text-align: justify;">In some cases, an additional method e.g. heat treatment, can be added to aseptic processing to better assure product safety.</p>
       //          <p style="text-align: justify;">Decision Tree for the Selection of the Sterilization Methods</p>
       //          <ol style="text-align: justify;">
       //          <li>Those products intended to be sterile should be terminally sterilized in their final container as clearly stated in the European Pharmacopoeia, and in the CPMP Notes for Guidance.</li>
       //          <li>Where it is not possible to carry out terminal sterilization by heat due to formulation instability, a decision should be taken to utilize an alternative method of terminal sterilization, filtration and/or aseptic processing.</li>
       //          <li>It is recognized that the new terminal sterilization process other than those described in the pharmacopoeia may be developed to provide sterility assurance levels equivalent to present official methods, and such processes when properly validated may offer alternative approaches.</li>
       //          <li>The use of an inappropriate heat-labile packaging material cannot in itself be the sole reason for adoption of aseptic processing. However, it may be that the choice of a packaging material for a given product has to take into account factors other than the method of sterilization.</li>
       //          <li>Conventionally, it has been accepted that other factors such as the type of container, route of administration and patient benefit have contributed to the choice of a particular container type, which will not withstand terminal heat sterilization (e.g. certain ophthalmic products) and such products are therefore manufactured by validated aseptic processing.</li>
       //          </ol>
       //          <p style="text-align: justify;">&nbsp;</p>
       //          <p align="center"><strong>Sterilization Choices for Aqueous Products</strong></p>
       //          <p><img style="display: block; margin-left: auto; margin-right: auto;" src="/images/upload/sterilization-choices-for-aqueous-products.jpg" alt="Sterilization Choices for Aqueous Products" width="50%"></p>
       //          <p>&nbsp;</p>
       //          <p align="center"><strong>Sterilization Choices for Non Aqueous Liquid, Semi solid, or Dry Powder</strong></p>
       //          <p><img style="display: block; margin-left: auto; margin-right: auto;" src="/images/upload/sterilization-choices-for-non-aqueous-liquid.jpg" alt="" width="60%"></p>
       //          <p style="text-align: justify;">&nbsp;</p>
       //          <p style="text-align: justify;">For the purpose of ensuring sterility, all aqueous-based sterile products are subject to terminal moist heat sterilization, with the following exceptions:</p>
       //          <ol style="text-align: justify;" type="square">
       //          <li>Instances where terminal moist heat sterilization is not practical, e.g. product degradation. Such instances are fully evaluated and documented.</li>
       //          <li>For aseptic processes that exclude human intervention e.g., robotics, form-fill-seal and barrier system, may be employed in lieu of terminal moist heat sterilization providing that validation data demonstrated equivalence.</li>
       //          </ol>
       //          <p style="text-align: justify;">Two basic approaches are employed to develop sterilization cycles for moist heat processes:</p>
       //          <ul style="text-align: justify;">
       //          <li>Overkill</li>
       //          </ul>
       //          <p style="text-align: justify;">This is used when the product can withstand excessive heat treatment such as an F<sub>0 </sub>≥ 12 without adverse effects. Bio burden and resistance data are not required to determine the required “F<sub>0</sub>“values. Cycle parameters are adjusted to assure that the coldest point within the load receives an “F<sub>0</sub>“that will provide at least a 12-log reduction of microorganisms having a D<sub>121 </sub>value of at least one minute.</p>
       //          <ul style="text-align: justify;">
       //          <li>Probability of survival</li>
       //          </ul>
       //          <p style="text-align: justify;">This approach is used primarily for heat labile products. In this approach, the process for the terminal sterilization of a sealed container is validated to achieve the destruction of pre-sterilization bio burden to a level of 100, with a minimum safety factor of an additional six-log reduction (1x10-6). The probability that any one unit is contaminated is therefore no more than one in a million; this is considered to be an acceptable level of sterility assurance.</p>
       //          <p style="text-align: justify;">The probability of survival is determined using a semi-logarithmic microbial death curve, where a plot of the log of the number of survivor versus time at a fixed temperature yields a straight line.</p>
       //          <p style="text-align: justify;">The determination of the minimum “F<sub>0</sub>“value for the probability of survival approach is based upon the number of microorganisms (bio burden) found in a given product and their heat resistance.</p>
       //          <p style="text-align: justify;">&nbsp;</p>
       //          <p style="text-align: justify;"><strong>Types of Terminal Sterilization</strong></p>
       //          <p style="text-align: justify;"><strong><em>Sterilization by heat</em></strong></p>
       //          <p style="text-align: justify;">Each heat-sterilization cycle should be recorded by means of appropriate equipment of suitable accuracy and precision, e.g. on a time/temperature chart with a suitably large scale. The temperature should be recorded by a probe at the coolest part of the load or loaded chamber, this point having been determined during the validation; the temperature should preferably be checked against a second independent temperature probe located at the same position. The chart, or a photocopy of it, should form part of the batch record. Chemical or biological indicators may also be used but should not take the place of physical controls.</p>
       //          <p style="text-align: justify;">Sufficient time must be allowed for the whole of the load to reach the required temperature before measurement of the sterilizing time is started. This time must be determined for each type of load to be processed.</p>
       //          <p style="text-align: justify;">After the high-temperature phase of a heat sterilization cycle, precautions should be taken against contamination of a sterilized load during cooling. Any cooling fluid or gas in contact with the product should be sterilized.</p>
       //          <p style="text-align: justify;"><strong><em>Sterilization by moist heat</em></strong></p>
       //          <p style="text-align: justify;">Sterilization by moist heat (heating in an autoclave) is suitable only for water-wettable materials and aqueous formulations. Both temperature and pressure should be used to monitor the process. The temperature recorder should normally be independent of the controller, and there should be an independent temperature indicator, the reading from which should be routinely checked against the chart recorder during the sterilization period. For sterilizers fitted with a drain at the bottom of the chamber, it may also be necessary to record the temperature at this position throughout the sterilization period. There should be regular leak tests on the chamber when a vacuum phase is part of the cycle.</p>
       //          <p style="text-align: justify;">The items to be sterilized, other than products in sealed containers, should be wrapped in a material that allows the removal of air and the penetration of steam but prevents recontamination after sterilization. All parts of the load should be in contact with water or saturated steam at the required temperature for the required time.</p>
       //          <p style="text-align: justify;">Care should be taken to ensure that the steam used for sterilization is of suitable quality and does not contain additives at a level that could cause contamination of the product or equipment.</p>
       //          <p style="text-align: justify;"><strong><em>Sterilization by dry heat</em></strong></p>
       //          <p style="text-align: justify;">Sterilization by dry heat may be suitable for non-aqueous liquids or dry powder products. The process used should include air circulation within the chamber and the maintenance of a positive pressure to prevent the entry of non-sterile air. If air is supplied, it should be passed through a microorganism-retaining filter (e.g. an HEPA filter). Where sterilization by dry heat is also intended to remove pyrogens, challenge tests using endotoxins will be required as part of the validation.</p>
       //          <p style="text-align: justify;"><strong><em>Sterilization by radiation</em></strong></p>
       //          <p style="text-align: justify;">Sterilization by radiation is used mainly for the sterilization of heat-sensitive materials and products. Many pharmaceutical products and some packaging materials are radiation-sensitive, so this method is permissible only when the absence of deleterious effects on the product has been confirmed experimentally. Ultraviolet irradiation is not an acceptable method for terminal sterilization.</p>
       //          <p style="text-align: justify;">If sterilization by radiation is carried out by an outside contractor, the manufacturer is responsible for ensuring that the requirements of section 6.8 are met, and that the sterilization process is validated. The responsibilities of the radiation plant operator (e.g. for using the correct dose) should also be specified.</p>
       //          <p style="text-align: justify;">During the sterilization procedure, the radiation dose should be measured. For this purpose, the dosimeters used must be independent of the dose rate and must provide a quantitative measurement of the dose received by the product itself. Dosimeters should be inserted in the load in sufficient number, and close enough together to ensure that there is always a dosimeter in the chamber. Where plastic dosimeters are employed, they should be used within the time-limit of their calibration. Dosimeter absorbances should be read shortly after exposure to radiation. Biological indicators may be used only as an additional control. Radiation-sensitive colour discs may be used to differentiate between packages that have been subjected to irradiation and those that have not; they are not indicators of successful sterilization. The information obtained should constitute part of the batch record.</p>
       //          <p style="text-align: justify;">Validation procedures should ensure that consideration is given to the effects of variations in the density of the packages.</p>
       //          <p style="text-align: justify;">Handling procedures should prevent any misidentification of irradiated and non-irradiated materials. Each package should carry a radiation-sensitive indicator to show whether or not it has been subjected to radiation treatment.</p>
       //          <p style="text-align: justify;">The total radiation dose should be administered within a predetermined period of time.</p>
       //          <p style="text-align: justify;"><strong><em>Sterilization by gases and fumigants</em></strong></p>
       //          <p style="text-align: justify;">This method of sterilization should only be used for products where there is no suitable alternative.</p>
       //          <p style="text-align: justify;">Various gases and fumigants may be used for sterilization (e.g. ethylene oxide, hydrogen peroxide vapour). Ethylene oxide should be used only when no other method is practicable. During process validation it should be shown that the gas has no damaging effect on the product and that the conditions and time allowed for degassing are such as to reduce any residual gas and reaction products to defined acceptable limits for the type of product or material concerned. These limits should be incorporated in the specifications.</p>
       //          <p style="text-align: justify;">Direct contact between gas and microorganisms is essential; precautions should therefore be taken to avoid the presence of organisms likely to be enclosed in materials such as crystals or dried protein. The nature and quantity of packaging materials can significantly affect the process.</p>
       //          <p style="text-align: justify;">Before exposure to the gas, materials should be brought into equilibrium with the humidity and temperature required by the process. This requirement should be balanced against the need to minimize the waiting time before sterilization.</p>
       //          <p style="text-align: justify;">Each sterilization cycle should be monitored with suitable biological indicators, using the appropriate number of test pieces distributed throughout the load. The information so obtained should form part of the batch record.</p>
       //          <p style="text-align: justify;">Biological indicators should be stored and used according to the manufacturer’s instructions, and their performance checked by positive controls.</p>
       //          <p style="text-align: justify;">For each sterilization cycle, records should be made of the time taken to complete the cycle, of the pressure, temperature and humidity within the chamber during the process, and of the gas concentration. The pressure and temperature should be recorded on a chart throughout the cycle. The records should form part of the batch record.</p>
       //          <p style="text-align: justify;">After sterilization, the load should be stored in a controlled manner under ventilated conditions to allow concentrations of residual gas and reaction products to fall to their prescribed levels. This process should be validated.</p></div>
       //
       //     ',
		   // 'layout' => 'pageWithSidebarView',
		   // 'is_activated' => null,
		   // 'meta_keywords' => null,
		   // 'meta_description' => null],

		   ['slug' => 'news',
		   'title' => 'Esco Pharma News',
		   'name' => 'Esco Pharma News',
		   'tagline' => null,
		   'banner_img' => 'news.jpg',
		   'section' => 'News',
           'content' => '',
		   'layout' => 'newsdirectorypageView',
		   'is_activated' => null,
		   'meta_keywords' => null,
		   'meta_description' => null],

		   ['slug' => 'Events',
		   'title' => 'Esco Pharma Events',
		   'name' => 'Esco Pharma Events',
		   'tagline' => null,
		   'banner_img' => 'events_banner-min.jpg',
		   'section' => 'Events',
           'content' => '',
		   'layout' => 'eventsdirectorypageView',
		   'is_activated' => null,
		   'meta_keywords' => null,
           'meta_description' => null],


		   ['slug' => 'contact-us',
		   'title' => 'Contact Us',
		   'name' => 'Contact Us',
		   'tagline' => null,
		   'banner_img' => 'contact-us-banner-b-min.jpg',
		   'section' => 'Contact',
           'content' => '',
		   'layout' => 'newsdirectorypageView',
		   'is_activated' => null,
		   'meta_keywords' => null,
		   'meta_description' => null],


		   [
            'page_category_id' => '6',
            'slug' => 'data-privacy-policy',
		   'title' => 'Data Privacy Policy',
		   'name' => 'Data Privacy Policy',
		   'tagline' => null,
		   'banner_img' => 'privacy-policy-min.jpg',
		   'section' => 'customer-service',
           'content' => '
           <div class="container-fluid" style="overflow-wrap: break-word; ">
           <p><b>1.Introduction</b></p>

                <blockquote>
                <p><b>1.1</b>&nbsp; Esco Group (collectively referred to in this Privacy Statement as “we” or “Esco”) recognizes the importance of protecting the privacy of all information provided by users or our websites, subscribers to our publications, registrants for events and conferences, recipients of our e-mail newsletters and all other customers and potential customers of our products and services. We provide this notice of our Privacy Policy to make sure that your expectations and our practices are aligned, and tat you (“you” or “User”) are aware of your choices regarding our use and disclosure of the information you provide us.</p>

                <p><b>(a)</b>&nbsp;&nbsp; This Privacy Policy applies to your use of:</p>

                <blockquote>
                <p><b>(i)</b>&nbsp;&nbsp; this website, including related digital publications, bulletin boards, forums, social media and e-newsletters (the “Site”) and, without limitation,</p>
                </blockquote>

                <blockquote>
                <p><b>(ii)</b>&nbsp;&nbsp; all other websites owned and/or provided by Esco Group (“Esco” or “we”);</p>
                </blockquote>

                <blockquote>
                <p><b>(iii)</b>&nbsp;&nbsp; all services offered through this Site and/or any other Esco website;</p>
                </blockquote>

                <blockquote>
                <p><b>(iv)</b>&nbsp;&nbsp; all mobile applications owned and/or provided by Esco and/or available on or through this Site or any other Esco website; and</p>
                </blockquote>

                <blockquote>
                <p><b>(v)</b>&nbsp;&nbsp; all web pages, data, text, images, photographs, illustrations, graphics, audio, video and documents including articles, marketing materials, press releases and other information and content available on or through this Site or any Esco website.</p>
                </blockquote>

                <p><b>(b)</b>&nbsp;&nbsp; This Privacy Policy also applies to information we collect by other means (including offline) or from other sources including but not limited to registration for events/conferences. This Privacy Policy does not apply to the practices of companies that Esco does not own or control, or to people that Esco does not employ or manage.</p>

                <p><b>(c)</b>&nbsp;&nbsp; By accessing and using the Services, you acknowledge that you have read and understand this Privacy Policy, and that you accept them and agree to be legally bound by it. Your use of any of the Services constitutes your acceptance of this Privacy Policy and your consent to any action we take with respect to your information in compliance with this Privacy Policy.</p>

                <p><b>(d)</b>&nbsp;&nbsp; We may change the terms of this Privacy Policy, so Users are encouraged to review this page from time to time. Your continued use of the Services following the posting of changes to the Privacy Policy means that you accept the changes.</p>

                <p><b>(e)</b>&nbsp;&nbsp; This Privacy Policy applies however you access the Services, including, without limitation, via a computer, tablet, smart-phone or other internet-enabled device (“Device”).</p>

                <p><b>(f)</b>&nbsp;&nbsp; We attempt to ensure that any personal data we collect about you will be held and processed strictly in accordance with the Data Protection Act 1998 (DPA) and, on and from 25 May 2018, the European General Data Protection Regulation (GDPR). Terms with meanings under GDPR are identified here:</p>

                <blockquote>
                <p><b>(i)</b>&nbsp;&nbsp; We are considered a “Data Controller”. Data Controller means a person who (either alone or jointly or in common with other persons) determines the purposes for which and the manner in which any personal data are, or are to be, processed.</p>
                </blockquote>

                <blockquote>
                <p><b>(ii)</b>&nbsp;&nbsp; We employ “Data Processors (or Service Providers)” Data Processor (or Service Provider) means any person (other than an employee of the Data Controller) who processes the data on behalf of the Data Controller.</p>
                </blockquote>

                <blockquote>
                <p><b>(iii)</b>&nbsp;&nbsp; You, or any User, would be considered a “Data Subject”. A Data Subject is any living individual who is the subject of Personal Data.</p>
                </blockquote>

                <blockquote>
                <p><b>(iv)</b>&nbsp;&nbsp; “Personal Data” is defined below.</p>
                </blockquote>
                </blockquote>

                <p><b>2.Collecting personal information</b></p>

                <blockquote>
                <p><b>(a)</b>&nbsp;&nbsp; We require you to provide certain information about yourself when you register with certain Services. We may receive information about you when you request for quotation, respond to requests for feedback, participate in contests and surveys, requests for contact, request of visit or service.</p>

                <p><b>(b)</b>&nbsp;&nbsp; Information we collect may include information from which you may be personally identified (“Personal Data”) which may include:</p>

                <blockquote>
                <p><b>(i)</b>&nbsp;&nbsp; name, postal address, telephone number, fax number and e-mail address,</p>
                </blockquote>

                <blockquote>
                <p><b>(ii)</b>&nbsp;&nbsp; certain business information such as employer name, occupation, industry, job function, and job title.</p>
                </blockquote>

                <blockquote>
                <p><b>(iii)</b>&nbsp;&nbsp; certain optional information such as geolocation information, zip code.</p>
                </blockquote>

                <blockquote>
                <p><b>(iv)</b>&nbsp;&nbsp; Facebook/Twitter/Instagram/Google/LinkedIn/Pinterest/Tumblr/Yahoo/Viber/SKYPE user name (or similar user names), and</p>
                </blockquote>

                <blockquote>
                <p><b>(v)</b>&nbsp;&nbsp; photos, videos, that may contain your image or voice when you give feedback in our product or services, or post content on a blog site as a guest with authoring rights, as applicable.</p>
                </blockquote>

                <p><b>(c)</b>&nbsp;&nbsp; Certain data collected automatically either generated by the use of the Services or from the Service infrastructure itself (for example, the duration of a page visit) which is considered “Usage Data” may also be collected. Some examples:</p>

                <blockquote>
                <p><b>(i)</b>&nbsp;&nbsp; When you visit the Services, we may collect the IP address of your Device.</p>
                </blockquote>

                <blockquote>
                <p><b>(ii)</b>&nbsp;&nbsp; We also use automatic data collection technology to record other information that identifies your Device and tracks your behavior on the Services.</p>
                </blockquote>

                <blockquote>
                <p><b>(iii)</b>&nbsp;&nbsp; cWe may automatically receive and record information on our server logs from your browser and about your visits to and use of this website (including your IP address, geographical location, browser type and version, operating system, referral source, length of visit, page views and website navigation paths);</p>
                </blockquote>

                <p><b>(d)</b>&nbsp;&nbsp; We receive information contained in or relating to any communications that you send to us or send through our website.</p>

                <p><b>(e)</b>&nbsp;&nbsp; We also receive any other personal information that you choose to send to us.</p>

                <p><b>2.1</b><b>&nbsp;</b>&nbsp; Before you disclose to us the personal information of another person, you must obtain that person&lsquo;s consent to both the disclosure and the processing of that personal information in accordance with the terms of this policy.</p>
                </blockquote>

                <p><b>3.Using your personal information </b></p>

                <blockquote>
                <p><b>3.1</b><b>&nbsp;</b>&nbsp; Personal information submitted to us through our website will be used for the purposes specified in this policy or on the relevant pages of the website.</p>

                <p><b>3.2</b><b>&nbsp;</b>&nbsp; We may use your personal information to:</p>

                <blockquote>
                <p><b>(a)</b>&nbsp;&nbsp; administer our website and business;</p>

                <p><b>(b)</b>&nbsp;&nbsp; send you non-marketing commercial communications;</p>

                <p><b>(c)</b>&nbsp;&nbsp; send you email notifications that you have specifically requested;</p>

                <p><b>(d)</b>&nbsp;&nbsp; unless you opt out, we may use the information you provide us to send you e-mail, fax and other communications on behalf of Esco and our affiliates, including e-mail newsletters or promotional offers for Esco services.</p>

                <p><b>(e)</b>&nbsp;&nbsp; use your information to send you e-mail and other communications on behalf of third parties. Each of these communications will include instructions for opting out of receiving future third party offers from us. You may opt out of receiving third party offers at any time.</p>

                <p><b>(f)</b>&nbsp;&nbsp; send you marketing communications relating to our business which we think may be of interest to you, by post or, where you have specifically agreed to this, by email or similar technology;</p>

                <p><b>(g)</b>&nbsp;&nbsp; deal with enquiries and complaints made by or about you relating to our website;</p>

                <p><b>(h)</b>&nbsp;&nbsp; keep our website secure and prevent fraud;</p>

                <p><b>(i)</b>&nbsp;&nbsp; verify compliance with the terms and conditions governing the use of our website.</p>

                <p><b>(j)</b>&nbsp;&nbsp; provide you with the Services.</p>

                <p><b>(k)</b>&nbsp;&nbsp; respond to your inquiries and contact you about changes regarding the Services.</p>

                <p><b>(l)</b>&nbsp;&nbsp; provide you with e-mail, fax and other notices (such as Recertification, new product offers, promos, contests) regarding your account and the products or services that you are receiving, and for billing and collection purposes.</p>

                <p><b>(m)</b>&nbsp;&nbsp; For any other purpose disclosed at the time the information is collected or to which you consent.</p>

                <p><b>(n)</b>&nbsp;&nbsp; As otherwise specifically described in this Privacy Policy or the Terms.</p>
                </blockquote>

                <p><b>3.3</b><b>&nbsp;</b>&nbsp; Your privacy settings can be used to limit the publication of your information on our website and can be adjusted using privacy controls on the website.</p>
                </blockquote>

                <p><b>4. Disclosing personal information </b></p>

                <blockquote>
                <p><b>4.1</b><b>&nbsp;</b>&nbsp; We may disclose your personal information to any of our employees, officers, insurers, professional advisers, agents, suppliers or subcontractors insofar as reasonably necessary for the purposes set out in this policy.</p>

                <p><b>4.2</b><b>&nbsp;</b>&nbsp; We may disclose your personal information to any member of our group of companies (this means our subsidiaries, our ultimate holding company and all its subsidiaries) insofar as reasonably necessary for the purposes set out in this policy.</p>

                <p><b>4.3</b><b>&nbsp;</b>&nbsp; We may disclose your personal information:</p>

                <blockquote>
                <p><b>(a)</b>&nbsp;&nbsp; to the extent that we are required to do so by law;</p>

                <p><b>(b)</b>&nbsp;&nbsp; in connection with any ongoing or prospective legal proceedings;</p>

                <p><b>(c)</b>&nbsp;&nbsp; in order to establish, exercise or defend our legal rights (including providing information to others for the purposes of fraud prevention and reducing credit risk);</p>

                <p><b>(d)</b>&nbsp;&nbsp; to any person who we reasonably believe may apply to a court or other competent authority for disclosure of that personal information where, in our reasonable opinion, such court or authority would be reasonably likely to order disclosure of that personal information.</p>
                </blockquote>

                <p><b>4.4</b><b>&nbsp;</b>&nbsp; Except as provided in this policy, we will not provide your personal information to third parties.</p>
                </blockquote>

                <p><b>5. International data transfers </b></p>

                <blockquote>
                <p><b>5.1</b><b>&nbsp;</b>&nbsp; Information that we collect may be stored and processed in and transferred between any of the countries in which we operate in order to enable us to use the information in accordance with this policy.</p>

                <p><b>5.2</b><b>&nbsp;</b>&nbsp; Information that we collect may be transferred to the other countries where we have subsidiary offices and partners.</p>

                <p><b>5.3</b><b>&nbsp;</b>&nbsp; You expressly agree to the transfers of personal information described in this Section 5.</p>
                </blockquote>

                <p><b>6. Retaining personal information </b></p>

                <blockquote>
                <p><b>6.1</b><b>&nbsp;</b>&nbsp; This Section 6 sets out our data retention policies and procedure, which are designed to help ensure that we comply with our legal obligations in relation to the retention and deletion of personal information.</p>

                <p><b>6.2</b><b>&nbsp;</b>&nbsp; Personal information that we process for any purpose or purposes shall not be kept for longer than is necessary for that purpose or those purposes.</p>

                <p><b>6.3</b><b>&nbsp;</b>&nbsp; Notwithstanding the other provisions of this Section 6, we will retain documents (including electronic documents) containing personal data:</p>

                <blockquote>
                <p><b>(a)</b>&nbsp;&nbsp; to the extent that we are required to do so by law;</p>

                <p><b>(b)</b>&nbsp;&nbsp; if we believe that the documents may be relevant to any ongoing or prospective legal proceedings; and</p>

                <p><b>(c)</b>&nbsp;&nbsp; in order to establish, exercise or defend our legal rights (including providing information to others for the purposes of fraud prevention and reducing credit risk).</p>
                </blockquote>
                </blockquote>

                <p><b>7. Retaining personal information </b></p>

                <blockquote>
                <p><b>7.1</b><b>&nbsp;</b>&nbsp; We will take reasonable technical and organizational precautions to prevent the loss, misuse or alteration of your personal information.</p>

                <p><b>7.2</b><b>&nbsp;</b>&nbsp; This Section 6 sets out our data retention policies and procedure, which are designed to help ensure that we comply with our legal obligations in relation to the retention and deletion of personal information.</p>

                <p><b>7.3</b><b>&nbsp;</b>&nbsp; We will store all the personal information you provide on our secure (password- and firewallprotected) servers.</p>
                </blockquote>

                <p><b>8. Amendments </b></p>

                <blockquote>
                <p><b>8.1</b><b>&nbsp;</b>&nbsp; We may update this policy from time to time by publishing a new version on our website.</p>

                <p><b>8.2</b><b>&nbsp;</b>&nbsp; This Section 6 sets out our data retention policies and procedure, which are designed to help ensure that we comply with our legal obligations in relation to the retention and deletion of personal information.</p>
                </blockquote>

                <p><b>9. Your Rights </b></p>

                <blockquote>
                <p><b>9.1</b><b>&nbsp;</b>&nbsp; We may withhold personal information that you request to the extent permitted by law.</p>

                <p><b>9.2</b><b>&nbsp;</b>&nbsp; You may instruct us at any time not to process your personal information for marketing purposes.</p>

                <p><b>9.3</b><b>&nbsp;</b>&nbsp; In practice, you will usually either expressly agree in advance to our use of your personal information for marketing purposes, or we will provide you with an opportunity to opt out of the use of your personal information for marketing purposes.</p>
                </blockquote>

                <p><b>10. Third party websites </b></p>

                <blockquote>
                <p><b>10.1</b><b>&nbsp;</b>&nbsp; Our website includes hyperlinks to, and details of, third party websites.</p>

                <p><b>10.2</b><b>&nbsp;</b>&nbsp; We have no control over, and are not responsible for, the privacy policies and practices of third parties.</p>
                </blockquote>

                <p><b>11. Updating information </b></p>

                <blockquote>
                <p><b>11.1</b><b>&nbsp;</b>&nbsp; Please let us know if the personal information that we hold about you needs to be corrected or updated.</p>
                </blockquote>

                <p><b>12. Opting Out </b></p>

                <blockquote>
                <p>You have the right to opt out to any of our Services and communications. You may opt out of receiving any, or all, of these communications from us by following the unsubscribe link or instructions provided in any email we send.</p>

                <p>All email newsletters will provide you with an opportunity to opt out of receiving future issues of the newsletter. All promotional offers will include an opportunity to opt out of receiving future promotions from the brand whose product/service is being promoted.</p>

                <p>You may also opt out of receiving third party offers from a Service at any time by sending an e-mail to mail.escoglobal.com with the subject line “opt out – third party” or by such other means as we may from time to time make available to you.</p>
                </blockquote>

                <p><b>13. Our details </b></p>

                <blockquote>
                <p><b>13.1</b><b>&nbsp;</b>&nbsp; This website is owned and operated by Esco Micro Pte. Ltd.</p>

                <p><b>13.2</b><b>&nbsp;</b>&nbsp; We are registered in Singapore under registration number 198400165W, and our registered office is at 21 Changi South Street 1, Singapore 468777.</p>

                <p><b>13.3</b><b>&nbsp;</b>&nbsp; Our principal place of business is at 21 Changi South Street 1, Singapore 468777.</p>

                <p><b>13.4</b><b>&nbsp;</b>&nbsp; You can contact us by writing to the business address given above, by using our website contact form, by email to mail@escoglobal.com or by telephone on +65 65420833.</p>
                </blockquote>

                <p><b>Data Protection Officer:</b> <a href="mailto:reginald.agsalon@escoglobal.com">reginald.agsalon@escoglobal.com</a></p>
       </div>

            <style>
                blockquote {
                    margin: 0 0 1rem;
                    padding: 5px 20px;
                    margin: 0 0 11px;
                    border-left: 5px solid #eee;
                }
            </style>



           ',
		   'layout' => 'pageWithSidebarView',
		   'is_activated' => null,
		   'meta_keywords' => null,
           'meta_description' => null],


		   [
            'page_category_id' => '6',
            'slug' => 'conditions-of-supply',
		   'title' => 'Conditions of Supply',
		   'name' => 'Conditions of Supply',
		   'tagline' => null,
		   'banner_img' => 'Condition of supply-min.jpg',
		   'section' => 'customer-service',
           'content' => '
                <ol style="padding: 12px;" class="main-list">
                <li>
                    <p style="font-weight: bold">Scope</p>
                    <p>These Conditions apply to and are deemed to be incorporated in all contracts for the sale of equipment or the supply of services by Esco Micro Pte Ltd (&lsquo;Esco&rsquo;).  No addition or variation or waiver of these Conditions has any legal effect except as specifically agreed by Esco in writing.  These Conditions shall prevail over terms and conditions stipulated by the Customer.  </p>
                </li>

                <li>
                    <p style="font-weight: bold">Definitions</p>
                    <p>"Equipment" means any machinery, systems or associated parts designed and manufactured or assembled by Esco at the Esco facility located in Bintan, Indonesia, at another Esco facility, or sourced elsewhere at Esco&rsquo;s discretion.</p>
                    <p>"Customer" includes any principal or agent or subcontractor of the Customer.</p>
                </li>

                <h6 style="margin-left: -13px;margin-bottom: 0.8em; margin-top:1.5em; font-size:1.5em; font-weight:700;">A. SALE OF MACHINERY AND SYSTEMS</h6>

                <li>
                    <p style="font-weight: bold">Quotations and Acceptance</p>
                    <ol style="padding-left: 20px;">
                    <li>
                        <p>Prices and terms of contract quoted by Esco shall exclude the cost of freight and packing.  Delivery shall be ex works the principal place of manufacture (Incoterms 2000 definition) unless otherwise agreed with the Customer. </p>
                    </li>
                    <li>
                        <p>Prices quoted by Esco shall remain valid for a period of 60 days unless otherwise agreed or unless Esco&rsquo;s costs increase for reasons outside its control. </p>
                    </li>
                    <li>
                        <p>If the Customer specifies a currency other than that in which Esco quotes, Esco reserves the right to amend the quoted price by any amount to cover movements in the exchange rate between the currency of the quotation and the specified currency arising between the time of quotation and acceptance of the order.</p>
                    </li>
                    <li>
                        <p>The obligations of Esco hereunder are subject to the prior receipt by Esco of any export licenses required in connection with the shipment of the equipment.  In addition, nothing contained herein shall be deemed to require Esco to take any action that would constitute, directly or indirectly, a violation of any laws of any applicable jurisdiction, and Esco’s failure to take any such action shall not be deemed a breach hereunder.</p>
                    </li>
                    </ol>
                </li>

                <li>
                    <p style="font-weight: bold">Shipment</p>
                    <ol style="padding-left: 20px;">
                    <li>
                        <p>Unless otherwise agreed, the Customer is responsible for transportation from the principal place of shipment.  Esco shall at the Customer’s request and expense arrange carriage and insure the equipment against normal transit risks but in the event of loss or damage whether or not caused by the negligence of Esco or its carrier or any other person, Esco liability shall be limited to passing on to the Customer the benefit of such insurance.  </p>
                    </li>
                    <li>
                        <p>If instructions for dispatch are not received or if the Customer otherwise fails to take delivery or it requires Esco to delay delivery beyond any agreed delivery date, Esco shall be entitled to make arrangements for storage of the equipment and to charge the Customer accordingly and the Customer shall become responsible for the risk of loss of or damage to the equipment and for paying the contract price as if the goods had been delivered.  Esco shall be entitled, after reasonable notice to the Customer, to dispose of the equipment elsewhere.</p>
                    </li>
                    </ol>
                </li>
                <li>
                    <p style="font-weight: bold">Installations</p>
                    <ol style="padding-left: 20px;">
                    <li>
                        <p>If requested, Esco and its employees or subcontractors will provide supervisory services or perform installation or erection or commissioning services on the equipment.  These services shall be supplied for an agreed period and for a specified function and the Customer shall pay for the provision of a representative at the specified rate per day plus living and travel and any other ancillary expenses that may be incurred by reason of performing these services.  For this purpose, one day shall be deemed to mean eight (8) hours.  Additional hours per day shall be charged at a premium. </p>
                    </li>
                    <li>
                        <p>If such services are required for a number of days in excess of the period agreed, the Customer shall inform Esco in writing of the requirement and Esco reserves the right to request the Customer to pay for additional days in the same manner as specified in Clause 7.1 above plus any additional costs or expenses incurred by reason of the extension of the period of service. </p>
                    </li>
                    <li>
                        <p>The Customer shall prepare a location and facilities suitable for the equipment according to specifications to be issued by Esco upon completion of its design of the equipment.  If Esco is not satisfied with preparatory work, it reserves the right to charge for costs caused by delay.</p>
                    </li>
                    <li>
                        <p>The Customer shall be responsible for obtaining all necessary consents and licenses and for supplying Esco with all necessary information and drawings about the installation site and shall provide at its own expense such ancillary services and facilities as Esco may reasonably require to fulfill the installation.</p>
                    </li>
                    <li>
                        <p>Esco shall not be responsible for off-loading, provision of and connection to services and utilities.</p>
                    </li>
                    <li>
                        <p>The Customer shall ensure safe and adequate access to the site for Esco and its employees and subcontractors and shall be responsible for the safe custody of all equipment materials and other property left on site by Esco in the course of installation.  The Customer shall be liable for any injury suffered by Esco or its employees or subcontractors except to the extent injury is caused by their own negligence. </p>
                    </li>
                    </ol>
                </li>


                <li>
                    <p style="font-weight: bold">Payment</p>
                    <ol style="padding-left: 20px;">
                    <li>
                        <p>Unless otherwise agreed, payment of the Purchase Price by the Customer to Esco shall be according to the agreement associated with the quotation ordered against, or pre-established terms.</p>
                    </li>
                    <li>
                        <p>Esco reserves the right to pass on to the Customer any increases in costs arising for reasons outside its control.</p>
                    </li>
                    </ol>
                </li>

                <h6 style="margin-left: -13px;margin-bottom: 0.8em; margin-top:1.5em; font-size:1.5em; font-weight:700;">B. AFTER SALES SERVICE AND REPLACEMENT PARTS</h6>
                <li>
                    <p style="font-weight: bold">Quotations &amp; Payment</p>
                    <ol style="padding-left: 20px;">
                    <li>
                        <p>Prices and terms quoted exclude the cost of freight for replacement parts.  Quotations are valid for 30 days unless otherwise specified. </p>
                    </li>
                    <li>
                        <p>Full payment must be made to ESCO prior to shipment unless net 30 day terms have been previously established. Equipment shall remain the property of Esco until the Customer has made full and unconditional payment.  If any payment is overdue, Esco shall be entitled to suspend further deliveries, and may after giving notice to the Customer enter the premises where it believes its equipment to be for the purpose of recovering its equipment.</p>
                    </li>
                    </ol>
                </li>
                <h6 style="margin-left: -13px;margin-bottom: 0.8em; margin-top:1.5em; font-size:1.5em; font-weight:700;">C. GENERAL</h6>
                <li>
                    <p style="font-weight: bold">Quotations and Acceptance</p>
                    <ol style="padding-left: 20px;">
                    <li>
                        <p>Prices are quoted exclusive of applicable sales and use taxes, import duties, and/or other local taxes and fees which will be charged at the rates ruling at the time of supply. </p>
                    </li>
                    <li>
                        <p>No obligation shall be binding on Esco unless and until received and accepted by Esco in writing.</p>
                    </li>
                    </ol>
                </li>

                <li>
                    <p style="font-weight: bold">Delivery</p>
                    <ol style="padding-left: 20px;">
                    <li>
                        <p>Although Esco shall endeavor to supply equipment within the time specified, no liability can be accepted for delays in delivery due to any cause beyond Esco’s reasonable control, or for any other reason unless specifically agreed in writing.  If work is delayed or interrupted by the Customer, the Customer shall pay Esco for all additional resulting charges.</p>
                    </li>
                    <li>
                        <p>Esco reserves the right to make shipment in installments.</p>
                    </li>
                    <li>
                        <p>Unless otherwise agreed, any discrepancy in or damage to the equipment must be notified to Esco in writing within thirty (30) days of shipment or dispatch failing which Esco accepts no liability for discrepancies in or damage to the equipment.  Failure by the Customer to give such notice shall constitute unqualified acceptance and a waiver of all such claims by the Customer. </p>
                    </li>
                    <li>
                        <p>The Customer shall be required to procure at its own expense any import licenses or related documentation required for the country of destination and any intermediate destination to which the equipment is to be dispatched or delivered.  The Customer shall be responsible for any import duties.</p>
                    </li>
                    </ol>
                </li>


                <li>
                    <p style="font-weight: bold">Patents, Design Rights etc.</p>
                    <ol style="padding-left: 20px;">
                    <li>
                        <p>Any know how, technical information, drawings, specifications or documents supplied in connection with this contract shall be kept confidential by the Customer and shall not be disclosed to any third party or used for any other purpose than for the purpose of this contract without the prior written consent of Esco unless and until the same is or becomes public knowledge.</p>
                    </li>
                    <li>
                        <p>Ownership is retained by Esco of any patent, copyright, design right or other intellectual property right in its equipment supplied under this contract and in any technical information, know how, drawings, specifications or any other documents supplied hereunder. .</p>
                    </li>
                    <li>
                        <p>Esco warrants that any component incorporated as part of the equipment and which is of Esco standard manufacture is free of third party patent or any other intellectual property restrictions as and when supplied but Esco gives no other warranty against patent or other intellectual property infringement and no liability is accepted in respect thereof. </p>
                    </li>
                    <li>
                        <p>If Esco supplies equipment with variations to meet the Customer&rsquo;s special requirements, or to the Customer&rsquo;s own specification, or if Esco processes the Customer&rsquo;s own equipment, goods or materials, no warranty is given and the Customer shall accept full liability in respect of infringement of patents or other intellectual property rights and agrees to indemnify Esco against all claims, losses or costs arising therefrom. </p>
                    </li>

                    <li>
                        <p>No warranty is given that any particular use of any equipment, or any technique employed therewith is free of patent or other intellectual property restrictions.  Any advice given by Esco in relation thereto is given without liability on Esco&rsquo;s part. </p>
                    </li>
                    <li>
                        <p>The trademarks and names of Esco and its associated companies shall not be used otherwise than as applied by Esco to equipment supplied under this Contract.   </p>
                    </li>
                    </ol>
                </li>


                <li>
                    <p style="font-weight: bold">Warranty</p>
                    <ol style="padding-left: 20px;">
                    <li>
                        <p>Esco products come with a limited warranty. The warranty period will vary depending on the product purchased, beginning on the date of shipment from any Esco international warehousing location. </p>
                        <p>Esco&rsquo;s limited warranty covers defects in materials and workmanship. Esco&rsquo;s liability under this limited warranty shall be, at our option, to repair or replace any defective parts of the equipment, provided that these parts, if proven to the satisfaction of Esco, were defective at the time of being sold and that all defective parts shall be returned, properly identified with a Return Authorization.</p>
                        <p>This limited warranty covers parts only, and not transportation / insurance charges. This limited warranty does not cover</p>
                        <p>(a)  Freight or installation (inside delivery handling) damage. If your product was damaged in transit, you must file a claim directly with the freight carrier.</p>
                        <p>(b)  Products with missing or defaced serial numbers.</p>
                        <p>(c)  Products for which Esco has not received payment.</p>
                        <p>(d)  Problems that result from:</p>
                        <p>External causes such as accident, abuse, misuse, problems with electrical power, improper operating environmental conditions.</p>


                        <ul style="padding-left: 40px;">
                            <li>
                                <p>Servicing not authorized by Esco.</p>
                            </li>
                            <li>
                                <p>Usage that is not in accordance with product instructions.</p>
                            </li>
                            <li>
                                <p>Failure to follow the product instructions.</p>
                            </li>
                            <li>
                                <p>Failure to perform preventive maintenance.</p>
                            </li>
                            <li>
                                <p>Using accessories, parts, or components not supplied by Esco.</p>
                            </li>
                            <li>
                                <p>Damage by fire, floods, or acts of God.</p>
                            </li>
                            <li>
                                <p>Customer modifications to the product</p>
                            </li>
                        </ul>
                        <p>(e)  Consumables such as filters (HEPA, ULPA, carbon, pre-filters), gaskets / seals and fluorescent / UV bulbs</p>

                    </li>
                    <li>
                        <p>Factory installed, customer specified equipment or accessories are warranted only to the extent guaranteed by the original manufacturer. The customer agrees that in relation to these products purchased through Esco, our limited warranty shall not apply and the original manufacturer&rsquo;s warranty shall be the sole warranty in respect of these products. The customer shall utilize that warranty for the support of such products and in any event not look to Esco for such warranty support.</p>
                    </li>
                    <li>
                        <p>Esco encourages all users to register their equipment online at www.Escoglobal.com/warranty_registrations.php or complete the warranty registration form included with each product.</p>
                    </li>
                    <li>
                        <p>ALL EXPRESS AND IMPLIED WARRANTIES FOR THE PRODUCT, INCLUDING BUT NOT LIMITED TO ANY IMPLIED WARRANTIES AND CONDITIONS OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE LIMITED IN TIME TO THE TERM OF THIS LIMITED WARRANTY. NO WARRANTIES, WHETHER EXPRESS OR IMPLIED, WILL APPLY AFTER THE LIMITED WARRANTY PERIOD HAS EXPIRED. Esco DOES NOT ACCEPT LIABILITY BEYOND THE REMEDIES PROVIDED FOR IN THIS LIMITED WARRANTY OR FOR SPECIAL, INDIRECT, CONSEQUENTIAL OR INCIDENTAL DAMAGES, INCLUDING, WITHOUT LIMITATION, ANY LIABILITY FOR THIRD-PARTY CLAIMS AGAINST YOU FOR DAMAGES, FOR PRODUCTS NOT BEING AVAILABLE FOR USE, OR FOR LOST WORK. Esco&rsquo;S LIABILITY WILL BE NO MORE THAN THE AMOUNT YOU PAID FOR THE PRODUCT THAT IS THE SUBJECT OF A CLAIM. THIS IS THE MAXIMUM AMOUNT FOR WHICH Esco IS RESPONSIBLE.</p>
                    </li>

                    </ol>
                </li>


                <li>
                    <p style="font-weight: bold">Safety</p>
                    <p>So far as reasonably practicable Esco has ensured that its equipment has been so designed and constructed as to be safe and without risks to health when properly installed and used in accordance with Esco&rsquo;s operating instructions.  The Customer is responsible for any risks to health or safety from Esco equipment in its possession or control and must ensure that persons who use, maintain or otherwise handle equipment supplied by Esco receive adequate training and safety literature.  Safety literature will be supplied by Esco free of charge and may be photocopied by the Customer as required. </p>
                </li>

                <li>
                    <p style="font-weight: bold">Limitation of Liability</p>
                    <ol style="padding-left: 20px;">
                    <li>
                        <p>Esco&rsquo;s liability to the Customer, whether in negligence or otherwise, for direct physical damage arising out of or in connection with this Contract, shall be subject to an overall limit of the cost paid for the equipment that is the subject of a claim.  Liability for the supply of services or the provision of technical advice for a fee is limited to the amount paid by the Customer.</p>
                    </li>
                    <li>
                        <p>Nothing in these conditions shall restrict Esco&rsquo;s liability for personal injury or death caused by the negligence of Esco or its employees.</p>
                    </li>
                    <li>
                        <p>Except as so provided, neither Esco nor its employees or agents shall have any liability whatsoever to the Customer for negligence or otherwise, and Esco accepts no liability for loss of profit, loss of market or any other indirect or consequential loss whatsoever. </p>
                    </li>
                    </ol>
                </li>
                <li>
                    <p style="font-weight: bold">Force Majeure</p>
                    <p>Without prejudice to any other terms hereof Esco shall not be liable for any failure to fulfill its obligations under this Contract if the carrying out of any obligation is hindered or prevented by any event or circumstance beyond Esco&rsquo;s reasonable control or, without prejudice to the generality of the foregoing, strike, lock out or industrial dispute or failure of breakdown of plant, supplies, transport or equipment.  If the delivery of equipment or completion of any work should be delayed for more than six months, the Customer shall be entitled to cancel the Contract or the remainder thereof on payment of a reasonable sum for part performance but shall not be entitled to any other damages or compensation whatsoever. </p>
                </li>
                <li>
                    <p style="font-weight: bold">Cancellation</p>
                    <p>The Customer may not cancel the Contract or any part thereof except by giving written notice which must be acknowledged by Esco.  On cancellation, the Customer may be charged for all work done and materials provided up to the time of cancellation plus a charge for the overheads and loss of profit.</p>
                </li>
                <li>
                    <p style="font-weight: bold">Termination</p>
                    <p>If the Customer commits any act of bankruptcy or, being a company, has a receiver appointed or an administration order made against it or goes into liquidation (except for the purpose of reconstruction or amalgamation) or commits any breach of any provision of this Contract, then all sums due hereunder shall immediately become due and payable and Esco may, notwithstanding any previous waiver, terminate this Contract forthwith by written notice, but without prejudice to any prior right of either party. </p>
                </li>
                <li>
                    <p style="font-weight: bold">Law</p>
                    <p>The Contract and these Conditions are governed by the laws of Singapore and shall be subject to the exclusive jurisdiction of the courts of Singapore.</p>
                </li>
                </ol>
           ',
		   'layout' => 'pageWithSidebarView',
		   'is_activated' => null,
		   'meta_keywords' => null,
		   'meta_description' => null],


		   [
            'page_category_id' => '6',
            'slug' => 'terms-and-conditions',
		   'title' => 'Terms and Conditions',
		   'name' => 'Terms and Conditions',
		   'tagline' => null,
		   'banner_img' => 'terms-and-condition-min.jpg',
		   'section' => 'customer-service',
           'content' => '
                <div class="row-fluid">

                <h6 class="esco-blue">Introduction</h6>
                <ol>
                    <li>These terms and conditions govern your use of our website.</li>
                    <li>By using our website, you accept these terms and conditions in full; accordingly, if you disagree with these terms and conditions or any part of these terms and conditions, you must not use our website.</li>
                </ol>

                <h6 class="esco-blue">Copyright notice</h6>
                <ol>
                    <li>Copyright (c) 2015 VacciXcell - Bioprocessing Specialists.</li>
                    <li>Subject to the express provisions of these terms and conditions:

                        <ul class="">
                            <li>we, together with our licensors, own and control all the copyright and other intellectual property rights in our website and the material on our website; and</li>
                            <li>all the copyright and other intellectual property rights in our website and the material on our website are reserved.</li>
                        </ul>
                    </li>

                </ol>

                <h6 class="esco-blue">Licence to use website</h6>
                <ol>
                    <li>
                        You may:
                        <ul>
                            <li>view pages from our website in a web browser;</li>
                            <li>download pages from our website for caching in a web browser;</li>
                            <li>print pages from our website;</li>
                        </ul>
                        subject to the other provisions of these terms and conditions.
                    </li>
                    <li>Except as expressly permitted by Section 3.1 or the other provisions of these terms and conditions, you must not download any material from our website or save any such material to your computer.</li>
                    <li>You may only use our website for your own personal and business purposes, and you must not use our website for any other purposes.</li>
                    <li>Except as expressly permitted by these terms and conditions, you must not edit or otherwise modify any material on our website.</li>
                    <li>
                        Unless you own or control the relevant rights in the material, you must not:
                        <ul>
                            <li>republish material from our website (including republication on another website);</li>
                            <li>sell, rent or sub-license material from our website;</li>
                            <li>show any material from our website in public;</li>
                            <li>exploit material from our website for a commercial purpose; or</li>
                            <li>redistribute material from our website, save to the extent expressly permitted by these terms and conditions.</li>

                        </ul>
                    </li>

                    <li>We reserve the right to restrict access to areas of our website, or indeed our whole website, at our discretion; you must not circumvent or bypass, or attempt to circumvent or bypass, any access restriction measures on our website.</li>
                </ol>
                <h6 class="esco-blue">RSS feed</h6>
                <ol>
                    <li>You may access our RSS feed using an RSS reader or aggregator.</li>
                    <li>By accessing our RSS feed, you accept these terms and conditions.</li>
                    <li>Subject to your acceptance of these terms and conditions, we grant to you a non-exclusive, non-transferable, non-sub-licensable licence to display content from our RSS feed in unmodified form on any non-commercial website owned and operated by you, providing that you must not aggregate our RSS feed with any other feed when displaying it in accordance with this Section 4.3.</li>
                    <li>It is a condition of this licence that you include a credit for us and hyperlink to our website on each web page where the RSS feed is published (in such form as we may specify from time to time, or if we do not specify any particular form, in a reasonable form).</li>
                    <li>We may revoke any licence set out in this Section 4 at any time, with or without notice or explanation.</li>
                </ol>

                <h6 class="esco-blue">Downloadable content</h6>
                <ol>
                    <li>We may from time to time make available on the website downloadable content (such as newsletters, brochures, white papers and technical specifications).</li>
                    <li>
                        In addition to the rights granted under Section 3.1 above, you may redistribute print and electronic copies of downloadable content within your business, organisation, company or group of companies, providing that copies of downloadable content must not be edited or amended in any way and must retain:
                        <ul>
                            <li>the name of our company;</li>
                            <li>any disclaimers, copyright notices and other legal notices; and</li>
                            <li>any authorial credits.</li>
                        </ul>
                    </li>

                </ol>

                <h6 class="esco-blue">Acceptable use</h6>
                <ol>
                    <li>You must not:
                        <ul>
                            <li>use our website in any way or take any action that causes, or may cause, damage to the website or impairment of the performance, availability or accessibility of the website;</li>
                            <li>use our website in any way that is unlawful, illegal, fraudulent or harmful, or in connection with any unlawful, illegal, fraudulent or harmful purpose or activity;</li>
                            <li>use our website to copy, store, host, transmit, send, use, publish or distribute any material which consists of (or is linked to) any spyware, computer virus, Trojan horse, worm, keystroke logger, rootkit or other malicious computer software;</li>
                            <li>conduct any systematic or automated data collection activities (including without limitation scraping, data mining, data extraction and data harvesting) on or in relation to our website without our express written consent;</li>
                            <li>access or otherwise interact with our website using any robot, spider or other automated means;</li>
                            <li>violate the directives set out in the robots.txt file for our website; or</li>

                        </ul>
                    </li>
                    <li>You must not use data collected from our website to contact individuals, companies or other persons or entities.</li>
                    <li>You must ensure that all the information you supply to us through our website, or in relation to our website, is true, accurate, current, complete and non-misleading.</li>

                </ol>

                <h6 class="esco-blue">Limited warranties</h6>
                <ol>
                    <li>We do not warrant or represent:
                        <ul>
                            <li>the completeness or accuracy of the information published on our website;</li>
                            <li>that the material on the website is up to date; or</li>
                            <li>that the website or any service on the website will remain available.</li>
                        </ul>
                    </li>
                    <li>We reserve the right to discontinue or alter any or all of our website services, and to stop publishing our website, at any time in our sole discretion without notice or explanation; and save to the extent that these terms and conditions expressly provide otherwise, you will not be entitled to any compensation or other payment upon the discontinuance or alteration of any website services, or if we stop publishing the website.</li>
                    <li>To the maximum extent permitted by applicable law and subject to Section 15.1, we exclude all representations and warranties relating to the subject matter of these terms and conditions, our website and the use of our website.</li>
                </ol>

                <h6 class="esco-blue">Limitations and exclusions of liability</h6>
                <ol>
                    <li>
                        Nothing in these terms and conditions will:
                        <ul>
                            <li>limit or exclude any liability for death or personal injury resulting from negligence;</li>
                            <li>limit or exclude any liability for fraud or fraudulent misrepresentation;</li>
                            <li>limit any liabilities in any way that is not permitted under applicable law; or</li>
                            <li>exclude any liabilities that may not be excluded under applicable law.</li>
                        </ul>
                    </li>
                    <li>The limitations and exclusions of liability set out in this Section 15 and elsewhere in these terms and conditions:
                        <ul>
                            <li>are subject to Section 15.1; and</li>
                            <li>govern all liabilities arising under these terms and conditions or relating to the subject matter of these terms and conditions, including liabilities arising in contract, in tort (including negligence) and for breach of statutory duty.</li>
                        </ul>
                    </li>
                    <li>To the extent that our website and the information and services on our website are provided free of charge, we will not be liable for any loss or damage of any nature.</li>
                    <li>We will not be liable to you in respect of any losses arising out of any event or events beyond our reasonable control.</li>
                    <li>We will not be liable to you in respect of any business losses, including (without limitation) loss of or damage to profits, income, revenue, use, production, anticipated savings, business, contracts, commercial opportunities or goodwill.</li>
                    <li>We will not be liable to you in respect of any loss or corruption of any data, database or software.</li>
                    <li>We will not be liable to you in respect of any special, indirect or consequential loss or damage.</li>
                    <li>You accept that we have an interest in limiting the personal liability of our officers and employees and, having regard to that interest, you acknowledge that we are a limited liability entity; you agree that you will not bring any claim personally against our officers or employees in respect of any losses you suffer in connection with the website or these terms and conditions (this will not, of course, limit or exclude the liability of the limited liability entity itself for the acts and omissions of our officers and employees).</li>


                </ol>
                <h6 class="esco-blue">Breaches of these terms and conditions</h6>
                <ol>
                    <li>Without prejudice to our other rights under these terms and conditions, if you breach these terms and conditions in any way, or if we reasonably suspect that you have breached these terms and conditions in any way, we may:
                        <ul>
                            <li>send you one or more formal warnings;</li>
                            <li>temporarily suspend your access to our website;</li>
                            <li>permanently prohibit you from accessing our website;</li>
                            <li>block computers using your IP address from accessing our website;</li>
                            <li>contact any or all your internet service providers and request that they block your access to our website;</li>
                            <li>commence legal action against you, whether for breach of contract or otherwise; and/or</li>
                            <li>suspend or delete your account on our website.</li>
                        </ul>
                    </li>
                    <li>Where we suspend or prohibit or block your access to our website or a part of our website, you must not take any action to circumvent such suspension or prohibition or blocking (including without limitation creating and/or using a different account).</li>
                </ol>

                <h6 class="esco-blue">Third party websites</h6>
                <ol>
                    <li>Our website includes hyperlinks to other websites owned and operated by third parties; such hyperlinks are not recommendations.</li>
                    <li>We have no control over third party websites and their contents, and subject to Section 15.1 we accept no responsibility for them or for any loss or damage that may arise from your use of them.</li>
                </ol>


                <h6 class="esco-blue">Variation</h6>
                <ol>
                    <li>We may revise these terms and conditions from time to time.</li>
                    <li>The revised terms and conditions will apply to the use of our website from the date of their publication on the website, and you hereby waive any right you may otherwise have to be notified of, or to consent to, revisions of the terms and conditions</li>
                </ol>

                <h6 class="esco-blue">Assignment</h6>
                <ol>
                    <li>You hereby agree that we may assign, transfer, sub-contract or otherwise deal with our rights and/or obligations under these terms and conditions.</li>
                    <li>You may not without our prior written consent assign, transfer, sub-contract or otherwise deal with any of your rights and/or obligations under these terms and conditions. </li>
                </ol>

                <h6 class="esco-blue">Severability</h6>
                <ol>
                    <li> If a provision of these terms and conditions is determined by any court or other competent authority to be unlawful and/or unenforceable, the other provisions will continue in effect.</li>
                    <li>If any unlawful and/or unenforceable provision of these terms and conditions would be lawful or enforceable if part of it were deleted, that part will be deemed to be deleted, and the rest of the provision will continue in effect. </li>

                </ol>

                <h6 class="esco-blue">Third party rights</h6>
                <ol>
                    <li>These terms and conditions are for our benefit and your benefit, and are not intended to benefit or be enforceable by any third party.</li>
                    <li>The exercise of the parties&rsquo; rights under these terms and conditions is not subject to the consent of any third party.</li>
                </ol>

                <h6 class="esco-blue">Entire agreement</h6>
                <ol>
                    <li>Subject to Section 15.1, these terms and conditions, together with our privacy and cookies policy, constitute the entire agreement between you and us in relation to your use of our website and supersede all previous agreements between you and us in relation to your use of our website.</li>
                </ol>

                <h6 class="esco-blue">Law and jurisdiction</h6>
                <ol>
                    <li>These terms and conditions shall be governed by and construed in accordance with Singapore law.</li>
                    <li>Any disputes relating to these terms and conditions shall be subject to the exclusive jurisdiction of the courts of Singapore.</li>
                </ol>

                <h6 class="esco-blue">Our details</h6>
                <ol>
                    <li>This website is owned and operated by VacciXcell - Bioprocessing Specialists.</li>
                    <li>We are registered in Singapore under registration number 198400165W, and our registered office is at 21 Changi South Street 1, Singapore 486777.</li>
                    <li>Our principal place of business is at 21 Changi South Street 1, Singapore 486777.</li>
                    <li>You can contact us by writing to the business address given above, by using our website contact form, by email to <a href="mailto:xl.lin@vaccixcell.com">xl.lin@vaccixcell.com</a>.</li>
                </ol>

            </div>

            <style>
                ol{
                    margin-bottom:1em;
                }
            </style>
           ',
		   'layout' => 'pageWithSidebarView',
		   'is_activated' => null,
		   'meta_keywords' => null,
		   'meta_description' => null],

           [
            'page_category_id' => '3',
            'slug' => 'traditional-filling-line-system',
		   'title' => 'Formulation and Filling Line Isolators',
		   'name' => 'Traditional Filling Line System',
		   'tagline' => null,
		   'banner_img' => 'filling-lines-min.jpg',
		   'section' => 'formulation-and-filling-line',
           'content' => '
                    <h3>Formulation and Filling Line</h3>
                    <p>Esco partners with filling line companies to create a client-specific technology, which utilizes cGMP compliant isolators and high quality filling line accessories/technologies, to ensure product safety and sterility throughout the entire manufacturing cycle.​</p>

                    <p>Enclosure systems for this technology can range from open and closed Restricted Access Barrier Systems (o/cRABS) to leak tight isolation technologies compliant to international GMP standards.</p>


                    <h6 class="mt-4">Traditional Filling Line Isolator System</h6>
                    <ul>
                        <li><p>Are single format dedicated lines often with pre-preparation (washing/sterilization tunnels), to process glass <strong>vials, cartridges, and syringes.​</strong></p></li>
                        <li><p>In the traditional filling line system approach, the technology usually has bigger footprint and requires longer processing time <em>(i.e. sterilization process of final container formats and multiple-use components for the run)</em>, which may cause unnecessary delays and lower throughputs. </p></li>
                        <li>
                            <p>Subtypes:​ </p>
                            <ul>
                                <li>Non-Robotic</li>
                                <li>Robotic</li>
                            </ul>
                            <div class="table-responsive mt-3">
                                    <table id="table001" class="Gen-Specs _idGenTablePara-1">
                                    <colgroup>
                                        <col class="_idGenTableRowColumn-1">
                                        <col class="_idGenTableRowColumn-2">
                                    </colgroup>
                                    <thead>
                                        <tr class="Gen-Specs _idGenTableRowColumn-4">
                                            <td class="Gen-Specs Header-Row Header-Row CellOverride-1 w-50" rowspan="2">
                                                <p class="TBL-Row-Heading">Pros</p>
                                            </td>

                                            <td class="Gen-Specs Header-Row Header-Row CellOverride-2 _idGenCellOverride-1" w-50 colspan="3">
                                                <p class="TBL-Row-Heading">Cons</p>
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="Gen-Specs _idGenTableRowColumn-5">
                                            <td class="Gen-Specs Body-Cells Body-Cells CellOverride-6 _idGenCellOverride-2">
                                                <p>Dedicated fill-finish capabilities for a specific to the container format.</p>
                                            </td>
                                            <td class="Gen-Specs Body-Cells Body-Cells CellOverride-6 _idGenCellOverride-2">
                                                <p class="mb-0">Adding another filling capability in a facility can be:​</p>
                                                <ul>
                                                    <li>Costly</li>
                                                    <li>Have a long lead schedule​</li>
                                                    <li>Disruptive to current manufacturing operations​</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr class="Gen-Specs _idGenTableRowColumn-5">
                                            <td class="Gen-Specs Body-Cells Body-Cells _idGenCellOverride-2">
                                                <p>Highly efficient for high volume dedicated products where flexibility is not necessary</p>
                                            </td>
                                            <td class="Gen-Specs Body-Cells Body-Cells _idGenCellOverride-2">
                                                <p class="mb-0">Processing Challenges​</p>
                                                <ul>
                                                    <li>Glass on glass contact​</li>
                                                    <li>Machine jams</li>
                                                    <li>Broken containers</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr class="Gen-Specs _idGenTableRowColumn-5">
                                            <td class="Gen-Specs Body-Cells Body-Cells CellOverride-6 _idGenCellOverride-2">
                                                <p>Wide variety of models with a wide range of container sizes</p>
                                            </td>
                                            <td class="Gen-Specs Body-Cells Body-Cells CellOverride-6 _idGenCellOverride-2">
                                                <p class="mb-0">&nbsp;​</p>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </li>


                    </ul>

                    <p class="mt-4"><strong>Traditional Filling Line system Integrations:</strong></p>

                    <ul>
                        <li>Rotary Washer</li>
                        <li>Depyrogenation Tunnel</li>
                        <li>Filler</li>
                        <li>Stoppering/ Partial Stoppering</li>
                        <li>Loading / Unloading and Freeze Drier</li>
                        <li>Capper</li>
                        <li>External Washer</li>
                    </ul>

                    <img src="/images/upload/9010289_Vaccixcell_Filling Line Page-new_1594220148-min.jpg" class="my-4">


                    <div id="accordion" class="product_spec_accordion" role="tablist" aria-multiselectable="true">
                        <!-- Accordion Item 1 -->
                        <div class="mb-3">
                            <div role="tab" id="accordiontraditional-filling-line-system-non-robotic">
                                <div class="accordion-head p-2">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#traditional-filling-line-system-non-robotic" aria-expanded="false" aria-controls="accordionBodyOne"
                                    class=" ">
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    <h6 class="m-0">Traditional Filling Line System: Non-Robotic</h6>
                                    </a>
                                </div>
                            </div>

                            <div id="traditional-filling-line-system-non-robotic" class="collapse show" role="tabpanel" aria-labelledby="accordionHeadingOne" aria-expanded="false" data-parent="accordion">
                                <div class="card-block p-3 p-sm-4">
                                    <ul>
                                        <li>Non-robotic traditional filling line systems are usually dedicated to a single container format without the use of automation technology like robotic arms for the flexible movement of the containers. ​</li>
                                        <li>This involves the use of a system with a large footprint.​</li>
                                    </ul>
                                    <img src="/images/upload/Formulation and Filling Line-01-min.png" class="mt-3">
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div role="tab" id="accordiontraditional-filling-line-system-robotic">
                                <div class="accordion-head p-2">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#traditional-filling-line-system-robotic" aria-expanded="false" aria-controls="accordionBodyOne"
                                    class=" ">
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    <h6 class="m-0">Traditional Filling Line System: Robotic​</h6>
                                    </a>
                                </div>
                            </div>

                            <div id="traditional-filling-line-system-robotic" class="collapse show" role="tabpanel" aria-labelledby="accordionHeadingOne" aria-expanded="false" data-parent="accordion">
                                <div class="card-block p-3 p-sm-4">
                                    <ul>
                                        <li><p>In aseptic drug processing, automation can achieve the elimination and absolute control of all sources of contaminants. Robotic systems also provide consistent performance with lesser equipment inside the isolator and lesser operator manipulation requirement. ​ ​</p></li>
                                        <li>
                                            <p><em><strong>Growing Trends</strong>​</em></p>
                                            <p>Pharmaceutical industries are focusing on targeted therapies for smaller patient populations</p>
                                            <ul>
                                                <li><strong>Challenge:</strong> producing higher number of smaller batches in different container formats​ ​</li>
                                                <li><strong>Solution:</strong> Recipe-driven robotic systems that can process different container formats (vials, syringes, cartridges) on a single platform.</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                <div id="accordion" class="product_spec_accordion mt-4" role="tablist" aria-multiselectable="true">

                    <div class="mb-4">
		            <div role="tab" id="accordionRelated_prod">
		                <div class="accordion-head p-2">
		                  <a data-toggle="collapse" data-parent="#accordion" href="#related_prod" aria-expanded="false" aria-controls="accordionBodyOne" class=" ">
		                    <i class="fa fa-angle-down" aria-hidden="true"></i>
		                    <h6 class="m-0">Related Products</h6>
		                  </a>
		                </div>
		            </div>

		            <div id="related_prod" class="collapse show" role="tabpanel" aria-labelledby="accordionHeadingOne" aria-expanded="false" data-parent="accordion">
		              <div class="card-block p-3 p-sm-4">
		              	<div class="row">
                          <div class="col-md-4">
                          <div class="prod-broch-card-image-details my-3">
                                  <a href="/products/filling-line-isolator/43" target="_blank"><img class="mb-2 product-img" src="/images/product-images/thumb/dispensing-process-barrier-450px-min.png"></a>
                                  <a href="/products/filling-line-isolator/43" target="_blank"><p class="text-center">Filling Line Isolator</p></a>
                              </div>
                          </div>
                          <div class="col-md-4">
                          <div class="prod-broch-card-image-details my-3">
                              <a href="/rabs/open-restricted-access-barrier-system" target="_blank"><img class="mb-2 product-img" src="/images/product-images/thumb/oRABS-450px-min.png"></a>
                              <a href="/rabs/open-restricted-access-barrier-system" target="_blank"><p class="text-center">Open Restricted Access Barrier System</p></a>
                          </div>
                          </div>

                        <div class="col-md-4">
                          <div class="prod-broch-card-image-details my-3">
                              <a href="/rabs/closed-restricted-access-barrier-system" target="_blank"><img class="mb-2 product-img" src="/images/product-images/thumb/cRABS-450px-min.png"></a>
                              <a href="/rabs/closed-restricted-access-barrier-system" target="_blank"><p class="text-center">Closed Restricted Access Barrier System</p></a>
                          </div>
                          </div>


                        </div>

		              </div>
		            </div>
                  </div>
                </div>
            ',
		   'layout' => 'pageWithSidebarView',
		   'is_activated' => null,
		   'meta_keywords' => null,
		   'meta_description' => null],

           [
            'page_category_id' => '3',
            'slug' => 'flexible-multi-format-ready-to-use-rtu',
		   'title' => 'Formulation and Filling Line Isolators',
		   'name' => 'Flexible Multi-format Ready-to-Use (RTU) Filling Line System',
		   'tagline' => null,
		   'banner_img' => 'filling-lines-min.jpg',
		   'section' => 'formulation-and-filling-line',
           'content' => '
                <h3>Formulation and Filling Line</h3>
                <p>Esco partners with filling line companies to create a client-specific technology, which utilizes cGMP compliant isolators and high quality filling line accessories/technologies, to ensure product safety and sterility throughout the entire manufacturing cycle.​</p>
                <p>Enclosure systems for this technology can range from open and closed Restricted Access Barrier Systems (o/cRABS) to leak tight isolation technologies compliant to international GMP standards.</p>
                <h6 class="mt-4">Flexible Multi-format Ready-to-Use (RTU) Filling Line System</h6>
                <ul>
                    <li><p><em>Integrates the best industry technologies to simplify the manufacturing process. It utilizes flexible ready-to-use and single-use consumables, thus, removing container preparation process at the manufacturing site. It can also cater to multi-format containers and sizes on a single modular platform.​</em></p></li>
                    <li><p>Combined manufacturing process that allows multiple container formats to be <strong>filled and finished on a single system.</strong></p></li>
                    <li><p>The use of RTU and single-use components lessens process delays and run time, as well as increases sterility of the process.​</p></li>
                    <li>
                        <p>Subtypes:</p>
                        <ul>
                            <li>
                                <p>Single Format</p>
                                <ol style="list-style-type:lower-roman;">
                                    <li><p>Robotic</p></li>
                                    <li><p>Non-Robotic</p></li></ol></li>
                            <li>
                                <p>Multi-Format</p>
                                <ol style="list-style-type:lower-roman;">
                                    <li><p>Robotic</p></li>
                                    <li><p>Non-Robotic</p></li>
                                </ol></li>
                        </ul>
                    </li>
                </ul>

                <p class="mt-4"><strong>Flexible Multi-format Ready-to-Use (RTU) Filling Line System Integrations:</strong></p>
                <ul>
                    <li><p>RTU consumables</p></li>
                    <li><p>
                        Single-Use Disposable Components:</p>
                        <ul>
                            <li><p>Mixing bag/Holding bag​</p></li>
                            <li><p>Pre-filtration sampling bags​</p></li>
                            <li><p>Reservoir bags​</p></li>
                            <li><p>Aseptic connections/assemblies​</p></li>
                        </ul></li>
                    <li><p>Automated Tub Conveyor & Automated Nest Transporter​</p></li>
                    <li><p>Robotic Arm (filling, stoppering, and capping)</p></li>
                    <li><p>External Vial Washer​</p></li>
                    <li><p>Additional Features</p>
                        <ul>
                            <li><p>Stopper gap detection system</p></li>
                            <li><p>Quarantine location​</p></li>
                            <li><p>Inspection and labelling system</p></li>
                            <li><p>Viable monitoring (active and passive)</p></li>
                            <li><p>Modular in-situ​ configuration to have changeable parts to fill multiple container formats ​<em>(e.g. RTU vials/ syringes/cartridges/IV bags)​</em></p></li>
                        </ul></li>
                </ul>
                <img src="/images/upload/9010289_Vaccixcell_Filling Line Page2-new-min.jpg" class="my-4">


                <div id="accordion" class="product_spec_accordion" role="tablist" aria-multiselectable="true">
                <!-- Accordion Item 1 -->
                    <div class="mb-3">
                        <div role="tab" id="accordionflexible-single-format-rtu-filling-line-system">
                            <div class="accordion-head p-2">
                                <a data-toggle="collapse" data-parent="#accordion" href="#flexible-single-format-rtu-filling-line-system" aria-expanded="false" aria-controls="accordionBodyOne"
                                class=" ">
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                                <h6 class="m-0">Flexible Single-Format RTU Filling Line System</h6>
                                </a>
                            </div>
                        </div>

                        <div id="flexible-single-format-rtu-filling-line-system" class="collapse show" role="tabpanel" aria-labelledby="accordionHeadingOne" aria-expanded="false" data-parent="accordion">
                            <div class="card-block p-3 p-sm-4">
                                <ul class="image-list-style-ul-lg">
                                    <li>
                                        <p><strong>Flexible Single-Format RTU Filling Line System:​ </strong>Non-Robotic</p>
                                        <ul>
                                            <li><p>Incapable to have an in situ format change <br><em>(i.e.: vial to syringe or to cartridge, vice-versa)</em>.</p></li>
                                            <li><p>Optional external washer for post-freeze dried products​ <br><em>Required for potent liquid filling as some liquids on external surface of vials/syringe will form potent powders harmful to operators.</em></p></li>
                                            <li><p>Highly efficient for high volume dedicated products where flexibility is not necessary</p></li>

                                        </ul>
                                    </li>
                                    <li>
                                        <p><strong>Flexible Single-Format RTU Filling Line System: ​</strong>Robotic</p>
                                        <ul>
                                            <li>
                                                <p>The use of robotic systems increases accuracy and repeatability of the process which is a high demand for aseptic processes</p>
                                                <ul>
                                                    <li>
                                                        <p>Advatages:</p>
                                                        <ul>
                                                            <li><p>Full enclosure within an isolator system​</p></li>
                                                            <li><p>Ready-to-use containers</em></p></li>
                                                            <li><p>Robotic Arms​</p></li>

                                                        </ul>
                                                    </li>
                                                    <li>
                                                    <p>Features:</p>
                                                    <ul>
                                                        <li><p>Optional external washer for post-freeze dried products​<br><em>Required for potent liquid filling as some liquids on external surface of vials/syringe will form potent powders harmful to operators.</em></p></li>
                                                        <li><p>Incapable for an in situ format change ​<br>(i.e.: vial to syringe or to cartridge, vice-versa)</em>.</p></li>

                                                    </ul>
                                                </li>

                                                </ul>
                                            </li>

                                        </ul>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div role="tab" id="accordionflexible-multi-format-rtu-filling-line-system">
                            <div class="accordion-head p-2">
                                <a data-toggle="collapse" data-parent="#accordion" href="#flexible-multi-format-rtu-filling-line-system" aria-expanded="false" aria-controls="accordionBodyOne"
                                class=" ">
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                                <h6 class="m-0">Flexible Multi-Format RTU Filling Line System​</h6>
                                </a>
                            </div>
                        </div>

                        <div id="flexible-multi-format-rtu-filling-line-system" class="collapse show" role="tabpanel" aria-labelledby="accordionHeadingOne" aria-expanded="false" data-parent="accordion">
                            <div class="card-block p-3 p-sm-4">
                                <ul class="image-list-style-ul-lg">
                                    <li>
                                        <p><strong>Flexible Multi-Format RTU Filling Line System: </strong>Non-Robotic​</p>
                                        <ul>
                                            <li>
                                                <p>Ability to <strong>fill multiple container formats</strong> & sizes on <strong>a single modular platform</strong></p>
                                            </li>
                                            <li>
                                                <p>Increased asset utilization</p>
                                            </li>
                                        </ul>

                                    </li>

                                    <li>
                                        <p><strong>Flexible Multi-Format RTU Filling Line System: ​</strong>Robotic</p>
                                        <ul>
                                            <li>
                                                <p>Utilizes the best automation technologies in the industry to increase accuracy and throughput of multiple container systems. </p>
                                                <ul>
                                                    <li>
                                                        <p>Advatages:</p>
                                                        <ul>
                                                            <li><p>Flexible - compatible with new or changing products​</p></li>
                                                            <li><p>Less complex</p></li>
                                                            <li><p>Smaller more flexible facility​​</p></li>
                                                            <li><p>Reduced intervention risk​​​</p></li>
                                                            <li><p>Isolator-barrier technology ​​​</p></li>

                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <p>Features:</p>
                                                        <ul>
                                                            <li><p>Isolator Barrier Technology + <strong>Robotics</strong></p></li>
                                                            <li><p>Provides full separation between the operator and the process</p></li>
                                                            <li><p>Compatible with VHP bio-decontamination  ​</p></li>
                                                            <li><p>Recipe driven operation​</p></li>
                                                            <li><p>Maximum flexibility and functionality​</p></li>
                                                            <li><p>Negligible particle generation​</p></li>

                                                        </ul>
                                                    </li>

                                                </ul>
                                            </li>

                                        </ul>

                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                </div>




            <div id="accordion" class="product_spec_accordion mt-4" role="tablist" aria-multiselectable="true">
            <div class="mb-3">
		            <div role="tab" id="accordionRelated_prod">
		                <div class="accordion-head p-2">
		                  <a data-toggle="collapse" data-parent="#accordion" href="#related_prod" aria-expanded="false" aria-controls="accordionBodyOne" class=" ">
		                    <i class="fa fa-angle-down" aria-hidden="true"></i>
		                    <h6 class="m-0">Related Products</h6>
		                  </a>
		                </div>
		            </div>

		            <div id="related_prod" class="collapse show" role="tabpanel" aria-labelledby="accordionHeadingOne" aria-expanded="false" data-parent="accordion">
		              <div class="card-block p-3 p-sm-4">
		              	<div class="row">
                            <div class="col-md-4">
                                <div class="prod-broch-card-image-details my-3">
                                    <a href="/products/filling-line-isolator/43" target="_blank"><img class="mb-2 product-img" src="/images/product-images/thumb/dispensing-process-barrier-450px-min.png"></a>
                                    <a href="/products/filling-line-isolator/43" target="_blank"><p class="text-center">Filling Line Isolator</p></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="prod-broch-card-image-details my-3">
                                    <a href="/rabs/open-restricted-access-barrier-system" target="_blank"><img class="mb-2 product-img" src="/images/product-images/thumb/oRABS-450px-min.png"></a>
                                    <a href="/rabs/open-restricted-access-barrier-system" target="_blank"><p class="text-center">Open Restricted Access Barrier System</p></a>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="prod-broch-card-image-details my-3">
                                    <a href="/rabs/closed-restricted-access-barrier-system" target="_blank"><img class="mb-2 product-img" src="/images/product-images/thumb/cRABS-450px-min.png"></a>
                                    <a href="/rabs/closed-restricted-access-barrier-system" target="_blank"><p class="text-center">Closed Restricted Access Barrier System</p></a>
                                </div>
                            </div>
                        </div>

		              </div>
		            </div>
                  </div>
            </div>
           ',
		   'layout' => 'pageWithSidebarView',
		   'is_activated' => null,
		   'meta_keywords' => null,
		   'meta_description' => null],



           [
            'page_category_id' => '2',
            'slug' => 'restricted-access-barrier-system',
		   'title' => 'Restricted Access Barrier System',
		   'name' => 'Restricted Access Barrier System',
		   'tagline' => null,
		   'banner_img' => 'rabs-banner-min.jpg',
		   'section' => 'rabs',
           'content' => '<p><strong>RABS</strong> can be utilized in fill-finish areas. The equipment provides an enclosed environment which reduces the risk of contaminating the product, containers, closures, and direct contact surfaces. It grants superior protection than conventional cleanroom operations by providing a level of separation between operator and product.</p>
           <h6 class="mt-3">The configurations of RABS include:</h6>
           <ul class="image-list-style-ul-lg">
                <li><p>ISO Class 5 environment with unidirectional airflow</p></li>
                <li><p>Rigid wall enclosure</p></li>
                <li><p>Use of glove port/s, half suit/s, to access all areas of the enclosure during filling operations​</p></li>
                <li><p>Sterilization-In-Place (SIP) is preferred for contact parts (fluid pathways). Other materials coming from the outside environment must undergo autoclaving prior to RABS entry via aseptic transfer ports.​</p></li>
           </ul>

           <p>Since the equipment is open to the surrounding room, it is commonly located in an ISO Class 7 or better environment.</p>
           <p>Moreover, RABS are further divided into two: open RABS (oRABS) or closed RABS (cRABS).</p>
           <p>An oRABS can either have: a dedicated air handling system (active) which is completely independent from the room’s air supply; or a shared one with the cleanroom’s downflow (passive), which recycles air from the surrounding environment. Additionally, its barrier doors can be opened for operator intervention at defined risk stages of aseptic processes.​</p>

           <p>However, cRABS provide a higher level of contamination control since its barrier doors remain closed from the last bio-decontamination through the initial set-up. It also has a dedicated air handling system which will circulate within the barriers. cRABS also make use of gaseous decontamination system.​</p>

            <div id="accordion" class="product_spec_accordion mt-5" role="tablist" aria-multiselectable="true">

                  <div class="mb-3">
                  <div role="tab" id="accordionRelated_article">
                      <div class="accordion-head p-2">
                        <a data-toggle="collapse" data-parent="#accordion" href="#related_article" aria-expanded="false" aria-controls="accordionBodyOne" class=" ">
                          <i class="fa fa-angle-down" aria-hidden="true"></i>
                          <h6 class="m-0">Related Articles</h6>
                        </a>
                      </div>
                  </div>

                  <div id="related_article" class="collapse show" role="tabpanel" aria-labelledby="accordionHeadingOne" aria-expanded="false" data-parent="accordion">
                    <div class="card-block p-3 p-sm-4">
                        <div class="row">
                          <div class="col-md-12">

                              <div class="latest-post-area mt-0">
                                  <div class="latest-post-wrap">

                                    <div class="single-latest-post row align-items-center">
                                          <div class="col-md-4 post-left">
                                              <div class="feature-img custom-light-box-shadow relative">
                                                  <div class="news-overlay overlay-bg"></div>
                                                  <img class="img-fluid" src="/images/news-banner/thumb/General-Processing-Platform-Isolator-min.png" alt="RABS vs Isolators: Understanding the differences">
                                              </div>

                                          </div>
                                          <div class="col-md-8 post-right">
                                              <a href="/news/rabs-vs-isolators-understanding-the-differences">
                                                  <h4>RABS vs Isolators: Understanding the differences</h4>
                                              </a>
                                              <ul class="meta">
                                                  <li><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i>Esco Healthcare</a></li>
                                                  <li><a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i>07 December, 2016</a></li>

                                              </ul>
                                              <p class="excert secondary-text-color text-justify">
                                                  </p><p>During the last 2 decades, aseptic processing has advanced with the use of isolators and Restricted Access Barrier Systems (RABS) as a means of detaching the operator from "critical areas" thereby...
                                              </p>
                                          </div>
                                      </div>
                                                                              <div class="single-latest-post row align-items-center">
                                          <div class="col-md-4 post-left">
                                              <div class="feature-img custom-light-box-shadow relative">
                                                  <div class="news-overlay overlay-bg"></div>
                                                  <img class="img-fluid" src="/images/news-banner/thumb/rabs-and-isolators-a-clash-of-roles.jpg" alt="RABS and Isolators: A Clash of Roles">
                                              </div>

                                          </div>
                                          <div class="col-md-8 post-right">
                                              <a href="/news/rabs-and-isolators-a-clash-of-roles">
                                                  <h4>RABS and Isolators: A Clash of Roles</h4>
                                              </a>
                                              <ul class="meta">
                                                  <li><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i>Esco Healthcare</a></li>
                                                  <li><a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i>29 June, 2018</a></li>

                                              </ul>
                                              <p class="excert secondary-text-color text-justify">
                                                  </p><p>The International Society for Pharmaceutical Engineering (ISPE) released the term \'Advanced Aseptic Processing (AAP)/\', which covers both the Restricted Access Barrier System (RABS) and the isolator...
                                              </p>
                                          </div>
                                      </div>
                                                                          </div>

                              </div>
                          </div>



                        </div>

                    </div>
                  </div>
                </div>


            </div>
           ',
		   'layout' => 'pageWithSidebarView',
		   'is_activated' => null,
		   'meta_keywords' => null,
		   'meta_description' => null],



           [
            'page_category_id' => '2',
            'slug' => 'open-restricted-access-barrier-system',
		   'title' => 'Open Restricted Access Barrier System',
		   'name' => 'Open Restricted Access Barrier System',
		   'tagline' => null,
		   'banner_img' => 'rabs-banner-min.jpg',
		   'section' => 'rabs',
           'content' => '<p>An open operation RABS, by definition, provides recognition that the barrier doors can be opened for operator intervention(s), at defined risk assessed stages during aseptic production operations, after the last bio-decontamination step.</p>

           <p>Open RABS have an air handling system that is shared with the cleanroom’s ceiling downflow with an air overspill to the surrounding environment. This overspill is directed to a low level under the physical glove-barrier screens and below the points of critical operation; typically ​300 mm below and away from the point of fill. ​</p>

           <p>Transfer devices may include closed or aerodynamic protection at the device-barrier connection location to maintain a closed separation to the surrounding environment during the transfer procedure.​</p>

           <p>oRABS are used to incorporate filling line equipment both for aseptic and potent products processing. This equipment is a very practical to means as a containment solution for processes such as, but not limited to, milling and sieving purposes.​</p>


           <h6 class="mt-3">Open operation RABS are further characterized:</h6>
           <ul class="image-list-style-ul-lg">
                <li><p><strong>Type 1: Process Intervention​</strong> <br>(highest contamination risk)</p></li>
                <li><p><strong>Type 2: Set-up Intervention​​</strong><br>(high contamination risk)</p></li>
                <li><p><strong>Type 3: Inherent Closed Barrier Interventions​</strong>​<br>(lowest contamination risk)</p></li>
           </ul>

           ',
		   'layout' => 'pageWithSidebarView',
		   'is_activated' => null,
		   'meta_keywords' => null,
		   'meta_description' => null],


           [
            'page_category_id' => '2',
            'slug' => 'closed-restricted-access-barrier-system',
		   'title' => 'Closed Restricted Access Barrier System',
		   'name' => 'Closed Restricted Access Barrier System',
		   'tagline' => null,
		   'banner_img' => 'rabs-banner-min.jpg',
		   'section' => 'rabs',
           'content' => '<p>The closed RABS is an intermediate solution between isolators and open RABS. A closed operation RAB provides a higher level of contamination control because the RABS barrier doors remain closed from the point of the last bio-decontamination, through initial set-up through processing. These systems typically use transfer systems that are similar to isolator type transfer systems that are closed and dock with the RABS.</p>

           <p>Closed design RABs have a dedicated air handling system that provides down-flow air that circulates inside physical barriers, together with the provision of fresh air make up and ducted exhaust systems. Materials transfer devices are either a fully closed system, (e.g. alpha-beta rapid transfer ports, and/or devices that connect or interface) are under aerodynamic barrier protection and remain closed to the surrounding environment during transfer procedures. Closed-design RABs may also include a gaseous decontamination system.​​</p>

           <p>Since the system controls the full airflow (inlet and outlet), allowing the correct pressure to enter, it can be a suitable equipment for handling or processing slightly toxic products. These systems cannot not be used for highly toxic products. However this can be considered as the right technology to be applied when a slightly potent/toxic product is to be manipulated.​</p>

           <p>Just like isolators, even closed RABS internally assure a “class A” environment, being the surrounding area classified as “class B."</p>


           <h6 class="mt-3">Advantages of cRABS are:</h6>
           <ul class="image-list-style-ul-lg">
                <li><p>Easy installation, also on existing machines;</p></li>
                <li><p>Easy to validate (air flow, air classification, doors interlocks);​</p></li>
                <li><p>Possibility to downgrade the production area to class B;​</p></li>
                <li><p>Humidity and temperature inside the Closed-RABS can be controlled adopting a dedicated HVAC;</p></li>
                <li><p>Possibility to recycle the air used inside, saving HVAC energy consumption;​</p></li>
                <li><p>Surrounding production area must be class B (with an isolator it can be downgraded to the less expensive class C);​</p></li>
           </ul>



           <h6 class="mt-3">Applications:</h6>
           <ul class="image-list-style-ul-lg">
                <li><p>Potent Filling Line Isolator</p></li>
                <li><p>Aseptic Formulation</p></li>
                <li><p>Contained powder handling</p></li>
                <li><p>Potent Formulation</p></li>
           </ul>

           ',
		   'layout' => 'pageWithSidebarView',
		   'is_activated' => null,
		   'meta_keywords' => null,
		   'meta_description' => null],



           [
            'page_category_id' => '7',
            'slug' => 'compounding-aseptic-isolator-cai',
		   'title' => 'Compounding Aseptic Isolator (CAI)',
		   'name' => 'Compounding Aseptic Isolator (CAI)',
		   'tagline' => null,
		   'banner_img' => 'caci-cai-banner-min.jpg',
		   'section' => 'compounding-aseptic-isolator',
           'content' => '<p>Designed in accordance with the United States Pharmacopeia General Chapter <797> guidelines, <a href="/">Esco Pharma’s</a> CAI ensures a sterile/aseptic compounding environment within the isolator at all times, from compounding up to material transfer operations.</p>
           <h2 style="font-size:1.7em; margin-top:1em">Understanding CAI</h2>
           <p>Esco Pharma’s Compounding Aseptic Isolator (CAI) provides a safe and clean environment for compounding of <em>non-hazardous, sterile drug</em> preparations and IV admixtures in compliance with USP <797> criteria.<br></br>
           The work zone and pass-through interchange are under positive pressure to the room to maintain sterility in case of breach in the barrier isolation system. Air cleanliness is maintained with the use HEPA filters and other filters capable of eliminating microbial and other particulate contaminants
           </p>
           <h3 class="mt-4 prod-detail-list-title">Key Applications: </h3>
           <ul class="image-list-style-ul-lg">
            <li><h4 class="prod-detail-list-title-normal-and-weight">Aseptic Compounding</h4></li>
            <li><h4 class="prod-detail-list-title-normal-and-weight">Total Parenteral Nutrition Formulation</h4></li>
            <li><h4 class="prod-detail-list-title-normal-and-weight">Sterile Filling Line</h4></li>
            <li><h4 class="prod-detail-list-title-normal-and-weight">Cell Therapy</h4></li>
            <li><h4 class="prod-detail-list-title-normal-and-weight">Gene Therapy</h4></li>
            <li><h4 class="prod-detail-list-title-normal-and-weight">Tissue Engineering</h4></li>
            <li><h4 class="prod-detail-list-title-normal-and-weight">Batch Sterility Testing</h4></li>
            <li><h4 class="prod-detail-list-title-normal-and-weight">Cosmetic / Cosmeceuticals</h4></li>
            </ul>
            <h2 style="font-size:1.7em; margin-top:1em">Advantages of Esco Pharma’s CACI</h2>
            <p>One of the requirements of USP <797> is to ensure that air from the ambient environment going into the isolator must first pass through microbially retentive filters (HEPA at minimum). As such, Esco Pharma’s Compounding Aseptic Isolators (CAI) are designed with a standard HEPA (H14) filtration system with a 99.995% filtration efficiency at 0.1 to 0.3 microns, thus, providing an ISO Class 5 air quality in the chambers (as per ISO 14644-1). </p>
            <h3 class="mt-4 prod-detail-list-title">Pressure Regime </h3>
            <p>For CAI and sterile compounding, the system operates under a standard positive pressure of + ≥37 Pa in the work zone and + ≥25 Pa in the pass-through chamber. This design guarantees the removal of cross-contamination risk from the surrounding environment towards the isolator chambers, which in turn ensures the provision of sterile and high-quality final compounded sterile products (CSPs).</p>
            <h3 class="mt-4 prod-detail-list-title">Airflow Regime </h3>
            <p>Recirculating airflow can be applied for compounding non-hazardous sterile drugs. In a recirculating airflow regime, about 90% of HEPA-filtered air is recirculated within the isolator while approximately 10% of air is exhausted through such filters to prevent heat build-up in the system. The exhausted air will then be replenished by ambient air coming from the top in-let G4 pre-filters with 80% efficiency. </p>
            <h3 class="mt-4 prod-detail-list-title">Ensuring Sterility</h3>
            <p>Sterility is key in compounding aseptic/sterile products as any contamination to the final product may result to a serious adverse event for patients which may even cause irreparable damage to the image of the institution.<br><br>
            CAI systems help ensure maintenance of sterility as they provide complete separation between the operators/surrounding environment and the actual process. As such, unlike open-front cabinets (laminar flow benches and biological safety cabinets), CAI units are not highly dependent on aseptic technique of the operator, although proper training and annual retraining of all operators involved in sterile compounding, must still be observed.<br><br>
            Another way of ensuring sterility in the work zone of the CAI is to have a proper maintenance service of the isolator system. Guidelines suggest annual recertification of the unit is important to ensure that it still provides the same quality of service similar to its integrity during initial installation.
            In line with this is the importance of having a proper cleaning/decontamination process for the isolator system. Note that the frequency of this will depend on each facility’s services.
            </p>
            <ul class="image-list-style-ul-lg">
             <li><h4 class="prod-detail-list-title-normal-and-weight"><strong>Decontamination Process</strong></h4>
             <p>involves the proper removal of residues in the work zone through the use of agents such as: sterile alcohol, sterile water, peroxide, or sodium hypochlorite.</p></li>
             <li><h4 class="prod-detail-list-title-normal-and-weight"><strong>Cleaning Process</strong></h4>
             <p>is the step of removing both inorganic and organic materials from the work zone via germicidal detergents and sterile water.</p></li>
             <li><h4 class="prod-detail-list-title-normal-and-weight"><strong>Disinfection Process</strong></h4>
             <p>this is the act of destroying microorganisms that might be present in the work zone through the use of sterile alcohol or other EPA-registered disinfectants.</p></li>
             </ul>

             <p>Each compounding facility has its own protocols for various processes, and understanding the needs of each process is critical in choosing the correct equipment that will help protect the actual sterile compounded product as well as the operator and the environment from untoward exposure or cross-contamination. </p>
            <br>
             <p><strong>References:</strong></p>
             <ol class="break-word font-80 ">
                    <li>USP Compounding Expert Committee, (nd). General Chapter <797> Pharmaceutical Compounding – Sterile Preparations. Retrieved from: https://www.usp.org/compounding/general-chapter-797 [Accessed 11 November 2020]. </li>
                    <li>USP Compounding Expert Committee, (nd). General Chapter <800> Hazardous Drugs – Handling on Healthcare Settings. [ONLINE] available at: http://www.usp.org/sites/default/files/usp/document/our-work/healthcare-quality-safety/general-chapter-800.pdf. [Accessed 11 November 2020]. </li>

                </ol>
           ',
		   'layout' => 'pageWithSidebarView',
		   'is_activated' => null,
		   'meta_keywords' => 'compounding aseptic isolator, cai isolator, CAI, cai sterile compounding, cai compounding',
		   'meta_description' => 'Esco Pharma’s Compounding Aseptic Isolator (CAI) is intended for compounding non-hazardous sterile drug preparations in compliance with USP 797 criteria. '],



           [
            'page_category_id' => '7',
            'slug' => 'compounding-aseptic-containment-isolator-caci',
		   'title' => 'Compounding Aseptic Containment Isolator (CACI)',
		   'name' => 'Compounding Aseptic Containment Isolator (CACI)',
		   'tagline' => null,
		   'banner_img' => 'caci-cai-banner-min.jpg',
		   'section' => 'compounding-aseptic-isolator',
           'content' => '<p>The Compounding Aseptic Containment Isolator (CACI) by <a href="/">Esco Pharma</a> is designed in compliance with the United States Pharmacopeia General Chapter <797> and <800> guidelines. It aims to provide a safe and clean environment for compounding of sterile hazardous drug preparations in.</p>
           <h2 style="font-size:1.7em; margin-top:1em">Understanding CACI</h2>
           <p>Compounding Aseptic Containment Isolator (CACI) provides a safe and clean environment for compounding of hazardous, sterile drug preparations in compliance with USP 797 and 800 criteria. It is suitable for work involving hazardous materials, antineoplastic, or cytotoxic compounding applications.<br><br>
           The work zone and pass-through chambers are under negative pressure to maintain operator protection in case of a breach in the barrier isolation system. Clean air within the work zone must be supplied through a microbial retentive filter (HEPA minimum) system capable of containing airborne concentrations of the physical size and state of the drug being compounded.<br><br>
           During processes involving handling of volatile hazardous drugs, air must be externally vented from the isolator through a properly designed and dedicated building exhaust. This is the premium solution for every pharmacy’s compounding and containment needs.

           </p>
           <h3 class="mt-4 prod-detail-list-title">Key Applications: </h3>
           <ul class="image-list-style-ul-lg">
            <li><h4 class="prod-detail-list-title-normal-and-weight">Potent Formulation</h4></li>
            <li><h4 class="prod-detail-list-title-normal-and-weight">Aseptic Formulation</h4></li>
            <li><h4 class="prod-detail-list-title-normal-and-weight">Sterile/Aseptic Compounding</h4></li>
            <li><h4 class="prod-detail-list-title-normal-and-weight">Chemotherapy Compounding</h4></li>
            <li><h4 class="prod-detail-list-title-normal-and-weight">Contained Powder Handling</h4></li>
            <li><h4 class="prod-detail-list-title-normal-and-weight">Pharmacy Cytotoxic Compounding Isolator</h4></li>
            <li><h4 class="prod-detail-list-title-normal-and-weight">Sub-division Isolator</h4></li>
            <li><h4 class="prod-detail-list-title-normal-and-weight">Off-loading Containment Isolator</h4></li>
            </ul>
            <h2 style="font-size:1.7em; margin-top:1em">Advantages of Esco Pharma’s CACI</h2>
            <p>Esco Pharma’s Compounding Aseptic Containment Isolators (CACI) are designed with a standard HEPA (H14) filtration system with a 99.995% filtration efficiency at 0.1 to 0.3 microns, thus, providing an ISO Class 5 air quality in the chambers (as per ISO 14644-1). Options for a HEPA bag-in, bag-out (BIBO) exhaust filtration system is available for safe filtration change.</p>

            <h3 class="mt-4 prod-detail-list-title">Pressure Regime </h3>
            <p>Negatively pressured and ISO 10648-2 Class 3 pressure leak tight CACI units, operate under a standard regime of -37 Pa in the work zone and -25 Pa in the pass-through chamber. This design ensures containment of the hazardous/toxic materials handled inside the isolator while also maintaining a sterile work zone to uphold the integrity and high quality of compounded sterile products (CSPs).</p>

            <h3 class="mt-4 prod-detail-list-title">Airflow Regime </h3>
            <p>Esco Pharma’s CACI units can be configured to have a recirculating or total exhaust/single pass airflow system. In a recirculating airflow regime, about 90% of HEPA-filtered air is recirculated within the isolator while approximately 10% of air is exhausted through such filters to prevent heat build-up in the system. The exhausted air will then be replenished by ambient air coming from the top in-let G4 pre-filters with 80% efficiency. This airflow regime can be recommended for compounding facility’s not handling volatile hazardous drugs, especially for institutions that do not have the capacity for a 100% exhaust/ducting system.<br><br>
            However, as per USP <800> guidelines, for facility’s handling volatile hazardous drugs/substances it is better to have a total exhaust/single pass equipment that will be connected to a ducting/exhaust system. It must be understood that HEPA filters are for the removal of particles (0.1 to 0.3micron sizes) and are not designed for filtration of gases or volatile materials. As such, the sure way to fully remove the volatile materials from the isolator and from the facility is to duct the isolator to a dedicated building exhaust system. The airflow for this total exhaust/single pass isolator ensures that all air passing through the supply HEPA filters will also be exhausted out through a series of HEPA exhaust filter system (option for BIBO).<br><br>
            Each compounding facility has its own protocols for various processes, and understanding the needs of each process is critical in choosing the correct equipment that will help protect the actual sterile compounded product as well as the operator and the environment from untoward exposure or cross-contamination.
            </p>

            <br>
             <p><strong>References:</strong></p>
             <ol class="break-word font-80 ">
                    <li>USP Compounding Expert Committee, (nd). General Chapter <797> Pharmaceutical Compounding – Sterile Preparations. Retrieved from: https://www.usp.org/compounding/general-chapter-797 [Accessed 11 November 2020]. </li>
                    <li>USP Compounding Expert Committee, (nd). General Chapter <800> Hazardous Drugs – Handling on Healthcare Settings. [ONLINE] available at: http://www.usp.org/sites/default/files/usp/document/our-work/healthcare-quality-safety/general-chapter-800.pdf. [Accessed 11 November 2020]. </li>

                </ol>
           ',
		   'layout' => 'pageWithSidebarView',
		   'is_activated' => null,
		   'meta_keywords' => 'caci isolator, compounding aseptic containment isolator, caci sterile compounding, caci compounding',
		   'meta_description' => 'Esco Pharma\'s Compounding Aseptic Containment Isolator (CACI) is designed for the compounding of sterile hazardous drugs as per USP 800 criteria. '],
           ];




        foreach($pages as $page){
        	$get = $this->createPage($page);
        	//	var_dump($get);
        }


        // Open Restricted Access Barrier System
        // $myproductspec = Page::find(25)->product()->sync([43,20,44]);
        // Closed Restricted Access Barrier System
        // $myproductspec = Page::find(26)->product()->sync([43,20,24]);
        // Restricted Access Barrier System
        // $myproductspec = Page::find(24)->product()->sync([43,20,24,44]);
        // Compounding Aseptic Isolator (CAI)
        // $myproductspec = Page::find(27)->product()->sync([20,38,21,35,30]);
        // Compounding Aseptic Containment Isolator (CACI)
        // $myproductspec = Page::find(28)->product()->sync([38,21,35,30]);

    }
    public function createPage($page)
    {
    	$this->page->create($page);
    	return $this;
    }

}
