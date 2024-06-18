@extends('layouts.'.$layout)

@section('title')
  {{$activePage->first()->name}}
@endsection

@if($activePage->first()->name)
    @section('title'){{$activePage->first()->name}}@endsection
    @section('og_title'){{$activePage->first()->name}}@endsection
@endif

@if($activePage->first()->meta_description)
    @section('meta_description'){{$activePage->first()->meta_description}}@endsection
@endif

@if($activePage->first()->meta_keywords)
    @section('meta_keywords'){{$activePage->first()->meta_keywords}}@endsection
@endif

@if($activePage->first()->meta_description)
    @section('og_description'){{$activePage->first()->meta_description}}@endsection
@endif
@section('og_type'){{'page'}}@endsection

@if($Breadcrumb_banner)
    @section('og_image'){{url("/images/banner-images/$Breadcrumb_banner")}}@endsection
    @section('itemprop_image'){{url("/images/banner-images/$Breadcrumb_banner")}}@endsection
@endif


@section('components')

    @include('components/preloader')
    @include('components/searchbox')
    @include('components/cookieconsent')
    @include('components/newsletterpopup')
    @include('components/floatingsocialicons')


@endsection


@section('content')



<section class="contact-page-area pt-50 pb-120">

        <div id="accordion" class="product_spec_accordion px-0 px-sm-3" role="tablist" aria-multiselectable="true">
            @foreach($downloadCategories as $downloadCategory)
	          	<!-- Accordion Item 1 -->
	          	<div class="mb-3">

                    <div class="tab-head">
                        <div class="tab-title">{{$downloadCategory->title}}</div>
                    </div>
		            <div id="{{Str::kebab($downloadCategory->title)}}" class="collapse show clear-both" role="tabpanel" aria-labelledby="accordionHeadingOne" aria-expanded="false" data-parent="accordion">
		              <div class="card-block p-3 p-sm-4">
                        <div class="row">
                            @foreach($downloadCategory->productBrochure as $productBrochure)
                                <div class="col-6 col-md-4">
                                    <div class="prod-broch-card-image-details" title="{{$productBrochure->title}}">
                                        <a href="/pdf/brochures/{{$productBrochure->file}}" target="_blank">
                                            <div class="mb-2 p-1 custom-brochure-light-border-shadow">
                                                <div class="prod-brochure-container">
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

			@endforeach

        </div>



</section>

@endsection



