@extends('layouts.productDetailView')

@if($activeProduct->meta_title)
    @section('title'){{$activeProduct->meta_title}}@endsection
    @section('og_title'){{$activeProduct->meta_title}}@endsection
@else
    @if($activeProduct->name)
        @section('title'){{(isset($activeProduct->brand)?$activeProduct->brand.' ' : '').$activeProduct->name}}@endsection
        @section('og_title'){{(isset($activeProduct->brand)?$activeProduct->brand.' ' : '').$activeProduct->name}}@endsection
    @endif
@endif

@if($activeProduct->meta_description)
    @section('meta_description'){{$activeProduct->meta_description}}@endsection
@endif

@if($activeProduct->meta_keywords)
    @section('meta_keywords'){{$activeProduct->meta_keywords}}@endsection
@endif

@if($activeProduct->meta_description)
    @section('og_description'){{$activeProduct->meta_description}}@endsection
@endif
@section('og_type'){{'article'}}@endsection

@if($activeProduct->image_thumb)
    @section('og_image'){{url("/images/product-images/thumb/$activeProduct->image_thumb")}}@endsection
    @section('itemprop_image'){{url("/images/product-images/thumb/$activeProduct->image_thumb")}}@endsection
@endif


@section('components')

    @include('components/preloader')
    @include('components/searchbox')
    @include('components/cookieconsent')
    @include('components/newsletterpopup')
    @include('components/floatingsocialicons')


@endsection


@section('content')

  <!-- Page Content  -->
	<div id="content" class="py-5" style="background: rgba(238, 238, 238, 0.3);">
		<div class="product-details mb-5 px-0 px-sm-3">
			<div class="row">
				<div class="col-lg-5">
					<div class="d-flex justify-content-center pl-3">
    					<div class="simpleLens-gallery-container" id="demo-1">
					        <div class="simpleLens-container" id="simpleLens-container">
					            <div class="simpleLens-big-image-container" id="simpleLens-big-image-container">
									<a id="simpleLens-lens-image" class="simpleLens-lens-image img-responsive" data-lens-image="/images/product-images/full-image/{{$activeProduct->image}}">
					                    <img src="/images/product-images/thumb/{{$activeProduct->image_thumb}}" alt="{{$activeProduct->name}}" title="{{$activeProduct->name}}" class="simpleLens-big-image">
					                </a>
					            </div>
					        </div>
					    </div>
					</div>
					<div class="product-details-containment-control p-1 d-flex justify-content-center">
                      @foreach($activeProduct->containmentcontrol as $product_containment_control)
                        <div class="product-containment-tooltip mr-3" data-direction="bottom">
                            <div class="tooltip__initiator">
                                <img class=" {{($product_containment_control->pivot->is_activated == '1') ? '' : 'disable_containment'}}" src="/images/misc-img/containment-controls-large/{{$product_containment_control->img_large}}">
                            </div>
                            <div class="tooltip__item">
                                <p class="m-0 text-center"><small>{{$product_containment_control->name}}</small></p>
                            </div>
                        </div>
	                  @endforeach
	                </div>
				</div>
				<div class="col-lg-7 pt-lg-0 pt-md-4 pt-3">
					<div class="pl-md-4 pl-2 pr-2">
						<h1 class="product-name mb-4">{{$activeProduct->brand}} <span style="font-weight: normal;">{{$activeProduct->name}}</span></h1>
						<div class="">
							{!!$activeProduct->details!!}
							<div class=" mt-4">
								<a href="/contact-us/rfq/{{$activeProduct->id}}" class="btn pharma-btn mr-3">Request for Quotation <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
								{{-- <a href="#" class="btn pharma-btn">Contact Us <i class="fa fa-envelope" aria-hidden="true"></i></a> --}}
							</div>

						</div>
					</div>

				</div>
            </div>
            {!!$activeProduct->applications!!}

		</div>
		<hr>


        <div id="accordion" class="product_spec_accordion px-0 px-sm-3" role="tablist" aria-multiselectable="true">
            @foreach($activeProduct->productSpecification as $productSpecification)
                  <!-- Accordion Item 1 -->
                @if(isset($productSpecification->pivot->content) && ($productSpecification->pivot->content != '<p><br></p>'))
                    <div class="mb-3">
                        <div role="tab" id="accordion{{$productSpecification->title}}">
                            <div class="accordion-head p-2">
                            <a data-toggle="collapse" data-parent="#accordion" href="#{{$productSpecification->title}}" aria-expanded="false" aria-controls="accordionBodyOne"
                                class=" ">
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                                <h3 class="prod-detail-features-title mb-0">{{$productSpecification->title}}</h3>
                            </a>
                            </div>
                        </div>

                        <div id="{{$productSpecification->title}}" class="collapse show" role="tabpanel" aria-labelledby="accordionHeadingOne" aria-expanded="false" data-parent="accordion">
                        <div class="card-block p-3 p-sm-4">
                            {!! $productSpecification->pivot->content !!}
                        </div>
                        </div>
                    </div>
                @endif
			@endforeach
	          	<!-- Accordion Brochures -->
                @if($activeProduct->productBrochure->where('is_activated', '=', 1)->count() > 0)
	          	<div class="mb-3">
		            <div role="tab" id="accordionBrochures_sellsheet">
		                <div class="accordion-head p-2">
		                  <a data-toggle="collapse" data-parent="#accordion" href="#brochures_sellsheet" aria-expanded="false" aria-controls="accordionBodyOne"
		                    class=" ">
		                    <i class="fa fa-angle-down" aria-hidden="true"></i>
		                    <h3 class="prod-detail-features-title mb-0">Brochures & Sell Sheets</h3>
		                  </a>
		                </div>
		            </div>

		            <div id="brochures_sellsheet" class="collapse show" role="tabpanel" aria-labelledby="accordionHeadingOne" aria-expanded="false" data-parent="accordion">
		              <div class="card-block p-3 p-sm-4">
		              	<div class="row">
		                  @foreach($activeProduct->productBrochure->where('is_activated', '=', 1) as $productBrochure)
		                  	<div class="col-6 col-md-4">
								<div class="prod-broch-card-image-details" title="{{$productBrochure->title}}">
                                    <a href="/pdf/brochures/{{$productBrochure->file}}" target="_blank">
                                        <div class="mb-2 p-1 custom-brochure-light-border-shadow">
                                            <div class="prod-brochure-container">
                                                {{-- <div class="download-icon"><i class="fa fa-cloud-download" aria-hidden="true"></i></div> --}}
                                                {{-- <div class="prod-brochure-overlay"></div> --}}
                                                <img title="{{$productBrochure->title}}" alt="{{$productBrochure->title}}" class="prod-brochure-img" src="/images/product-brochure-thumb/{{$productBrochure->img_thumb}}">
                                            </div>
                                        </div>
                                    </a>
									<a href="/pdf/brochures/{{$productBrochure->file}}" target="_blank"><p class="text-center">{{$productBrochure->title}}</p></a>
								</div>
		              		</div>

			              @endforeach
		              	</div>

		              </div>
		            </div>
                  </div>

                  @endif

                  <!-- Related products -->
                @if($relatedprods->count() > 0)
	          	<div class="mb-3">
		            <div role="tab" id="accordionRelated_prod">
		                <div class="accordion-head p-2">
		                  <a data-toggle="collapse" data-parent="#accordion" href="#related_prod" aria-expanded="false" aria-controls="accordionBodyOne"
		                    class=" ">
		                    <i class="fa fa-angle-down" aria-hidden="true"></i>
		                    <h3 class="prod-detail-features-title mb-0">Related Products</h3>
		                  </a>
		                </div>
		            </div>

		            <div id="related_prod" class="collapse show" role="tabpanel" aria-labelledby="accordionHeadingOne" aria-expanded="false" data-parent="accordion">
		              <div class="card-block p-2 p-sm-4">
                        @if ($relatedprods->count() > 3)
                            <div class="owl-carousel owl-theme solutionRelatedprodCarousel prod-relate px-3 px-lg-5">
                                @foreach($relatedprods as $relatedprod)
                                    <div class="item">
                                        <a href="{{isset($relatedprod->ext_link)?$relatedprod->ext_link:$relatedprod->path()}}" target="_blank"><img class="mb-2 product-img lazy" data-src="/images/product-images/thumb/{{$relatedprod->image_thumb}}"></a>
                                        <a href="{{isset($relatedprod->ext_link)?$relatedprod->ext_link:$relatedprod->path()}}" target="_blank"><p class="text-center">{{$relatedprod->brand}} {{$relatedprod->name}}</p></a>
                                    </div>
                                @endforeach
                            </div>
                        @else

                        <div class="row">
                            @foreach($relatedprods as $relatedprod)
                                <div class="col-md-4">
                                    <div class="prod-broch-card-image-details my-3">
                                        <a href="{{isset($relatedprod->ext_link)?$relatedprod->ext_link:$relatedprod->path()}}" target="_blank"><img class="mb-2 product-img" src="/images/product-images/thumb/{{$relatedprod->image_thumb}}"></a>
                                        <a href="{{isset($relatedprod->ext_link)?$relatedprod->ext_link:$relatedprod->path()}}" target="_blank"><p class="text-center">{{$relatedprod->brand}} {{$relatedprod->name}}</p></a>
                                    </div>
                                </div>

                            @endforeach
                          </div>
                        @endif




		              </div>
		            </div>
                  </div>
                  @endif


                  <!-- Related Articles -->
                @if($relatedArticles->count() > 0)
	          	<div class="mb-3">
		            <div role="tab" id="accordionRelated_article">
		                <div class="accordion-head p-2">
		                  <a data-toggle="collapse" data-parent="#accordion" href="#related_article" aria-expanded="false" aria-controls="accordionBodyOne"
		                    class=" ">
		                    <i class="fa fa-angle-down" aria-hidden="true"></i>
		                    <h3 class="prod-detail-features-title mb-0">Related Articles</h3>
		                  </a>
		                </div>
		            </div>

		            <div id="related_article" class="collapse show" role="tabpanel" aria-labelledby="accordionHeadingOne" aria-expanded="false" data-parent="accordion">
		              <div class="card-block p-3 p-sm-4">
		              	<div class="row">
                            <div class="col-md-12">

                                <div class="latest-post-area mt-0">
                                    <div class="latest-post-wrap">
                                        @foreach($relatedArticles as $relatedArticle)
                                        <div class="single-latest-post row align-items-center">
                                            <div class="col-md-4 post-left">
                                                <div class="feature-img custom-light-box-shadow relative">
                                                    <div class="news-overlay overlay-bg"></div>
                                                    <img class="img-fluid" src="/images/news-banner/thumb/{{$relatedArticle->banner_thumb}}" alt="{{$relatedArticle->title}}">
                                                </div>

                                            </div>
                                            <div class="col-md-8 post-right">
                                                <a href="{{url('/news/'.$relatedArticle->slug)}}">
                                                    <h4>{{$relatedArticle->title}}</h4>
                                                </a>
                                                <ul class="meta">
                                                    <li><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> {{$relatedArticle->author}}</a></li>
                                                    <li><a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i> {{$relatedArticle->created_at->format("d F, Y")}}</a></li>

                                                </ul>
                                                <p class="excert secondary-text-color text-justify">
                                                    {!!\Illuminate\Support\Str::limit($relatedArticle->description, 200, $end='...')!!}
                                                </p>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>

                                </div>
                            </div>



		              	</div>

		              </div>
		            </div>
                  </div>
                  @endif



        </div>

	</div>
@endsection


<link href="{{ asset('css/idGeneratedStyles.css') }}" rel="stylesheet">

<style>

.product-containment-tooltip {
  position: relative;
}
.tooltip__item {
  position: absolute;
  min-width: 100px;
  padding: 3px;
  visibility: hidden;
  opacity: 0;
  background: white;
  transition: all 0.25s cubic-bezier(0, 0, 0.2, 1);
  color: #484848;
  border: 1px solid #cecece;
  border-radius: 3px;
  font-weight: 500;
  /* box-shadow: 0 2px 1px #bcbcbc; */
  z-index: 4;
}
.tooltip__item:after {
  content: "";
  display: block;
  position: absolute;
  width: 0;
  height: 0;
  border-style: solid;
}
.tooltip__initiator {
  cursor: pointer;
  z-index: 5;
}
.tooltip__initiator:hover{
    transform: scale(0.9);
    transition: all 600ms;
}
.tooltip__initiator:hover {
    transform: scale(1.2);
}

.product-containment-tooltip[data-direction="bottom"] .tooltip__initiator:hover ~ .tooltip__item {
  transform: translate3d(-50%, 0, 0);
  visibility: visible;
  opacity: 1;
}
.product-containment-tooltip[data-direction="bottom"] .tooltip__item {
  top: calc(100% + 1em);
  left: 50%;
  transform: translate3d(-50%, -15px, 0);
}
.product-containment-tooltip[data-direction="bottom"] .tooltip__item:after {
  top: -0.5em;
  left: 50%;
  transform: translate3d(-50%, 0, 0);
  border-width: 0 0.5em 0.5em 0.5em;
  border-color: transparent transparent white transparent;
  -webkit-filter: drop-shadow(0px 0px 0px #000);
  filter: drop-shadow(0px 0px 0px #000);
}

.fa.fa-info-circle {
  font-size: 38px;
  color: #21606b;
}


</style>
