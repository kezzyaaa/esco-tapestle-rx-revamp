<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('includes/head')
<body>

	@yield('components')
	@include('includes/nav')
    @include('components/breadcumb')

	<section class="cta-area bg-img pb-5 page-background">
		<div class="container d-lg-flex flex-md-row-reverse align-items-stretch">
            <div id="content" class="px-md-3 px-0 pt-5 w-100" style="background-color: rgba(238, 238, 238, 0.3);">


              <div class="pt-lg-5 mb-4">
                      <div class=" about-section">
                          <div class="featured-section-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                              <div class="img-1" style="background: url(\'/images/about-us/vision.jpg\') center center / cover;">
                              </div>
                          </div>
                          <div class="featured-section py-4 pr-3  wow fadeInRight" data-wow-duration="1s" data-wow-delay="1.5s">
                              <div class="img-2 about-section-title-and-description">
                                  <h3>Our Vision</h3>
                                  <p>From our regional offices, Esco Pharma provides specialist services, equipment packages, and process solutions from our core platform products. This leads to improved protection of operators, reduction of cross-contamination, and a more efficient processing; thereby, directly and indirectly advancing occupational health and human healthcare. Globally, Esco Pharma’s scope of activity revolves around the fields of Biotherapeutics, Niche Manufacturing, and QC/QA. </p>
                              </div>
                          </div>

                      </div>
                  </div>

                  <p>&nbsp;</p>
                  <p>&nbsp;</p>


                  <div class="pt-md-5 mt-md-5 mb-4">
                      <div class=" about-section right-img">

                          <div class="featured-section py-4  pl-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                              <div class="img-1 about-section-title-and-description text-right">
                                  <h3>Our Mission</h3>
                                  <p>Our mission is to create safe industrial work environments for operator  protection and for the integrity of the products; that eventually find their way into global healthcare systems.
                <br><br>This enables pharmaceuticals, nutraceuticals, and cosmeceuticals to comply with internationally accredited cGMP, as well as, industrial, environmental, and health and safety standards.
                <br><br>Access to advanced technology often has multiple barriers, such as its cost, lack of information, and even communication with suppliers. This results to an extended project turnaround with higher maintenance costs.
                <br><br>Esco Pharma’s largest global network of localized application specialists and service offices, provide faster service response than others; translating into more competitive maintenance costs and shorter project life cycles.
                <br><br>Esco Pharma provides specialist services, equipment packages, and process solutions from our core platform products. This leads to improved operator protection, reduction of cross contamination, and a more efficient processing; thus, directly and indirectly advancing occupational health and human healthcare.</p>
                              </div>
                          </div>
                          <div class="featured-section-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                              <div class="img-2" style="background: url(\'/images/about-us/biocontainment.jpg\'); background-position: center;">
                              </div>
                          </div>
                      </div>
                  </div>


                @yield('rel_prod')
            </div>
			@include('includes.sidebar')
		</div>
	</section>
  @include('includes/footer')
</body>
@include('includes/scripts')
@yield('scripts')
</html>
