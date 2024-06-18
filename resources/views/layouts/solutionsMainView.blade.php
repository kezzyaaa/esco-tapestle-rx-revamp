<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('includes/head')
<body>
	@yield('components')
	@include('includes/nav')
    @include('components/breadcumb')

	<section class="bg-img pb-5 page-background">
		<div class="container d-lg-flex flex-md-row-reverse align-items-stretch">
            <div id="solution-content" class="px-md-4 pt-lg-5 pt-3 w-100 text-break" style="background: rgba(238, 238, 238, 0.3);">
                {{-- @yield('content') --}}
                <div class="mb-3 solution-menu custom-light-box-shadow">
                    <h5>Contents</h5>
                    <ul>
                        @foreach($activeSolutionSel->children->where('is_activated', '=', 1) as $activeSolutionChild)
                        <li><p><a class="product_spec_link solution-menu-link" id="tab---1" data-link="#{{$activeSolutionChild->slug}}">{{$activeSolutionChild->title}}</a></p></li>
                        {{-- {!! $activeSolutionChild->content !!} --}}
                        {{-- <a href="{{$activeSolutionChild->path()}}" class="btn pharma-btn">LEARN MORE</a> --}}
                        @endforeach
                    </ul>

                </div>

                <div id="accordion" class="product_spec_accordion mt-5" role="tablist" aria-multiselectable="true">
                    @foreach($activeSolutionSel->children->where('is_activated', '=', 1) as $activeSolutionChild)
                    <div class="mb-3">
                        <div role="tab" id="accordionRelated_prod">
                            <div class="accordion-head p-2">
                                <a data-toggle="collapse" data-parent="#accordion" href="#{{$activeSolutionChild->slug}}" aria-expanded="false" aria-controls="accordionBodyOne" class=" ">
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                                <h6 class="m-0">{{$activeSolutionChild->title}}</h6>
                                </a>
                            </div>
                        </div>

                        <div id="{{$activeSolutionChild->slug}}" class="collapse show" role="tabpanel" aria-labelledby="accordionHeadingOne" aria-expanded="false" data-parent="accordion">
                            <div class="card-block p-3 p-sm-4">
                                {!! $activeSolutionChild->content !!}
                            @if($activeSolutionChild->product->count() > 0)
                                <p class="mt-3"><strong>Recommended Products</strong></p>

                                <div class="owl-carousel owl-theme solutionRelatedprodCarousel px-5">
                                    @foreach($activeSolutionChild->product as $product)
                                        <div class="item">
                                            <a href="{{isset($product->ext_link)?$product->ext_link:$product->path()}}" target="_blank"><img class="mb-2 product-img lazy" data-src="/images/product-images/thumb/{{$product->image_thumb}}"></a>
                                            <a href="{{isset($product->ext_link)?$product->ext_link:$product->path()}}" target="_blank"><p class="text-center">{{$product->brand}} {{$product->name}}</p></a>
                                        </div>
                                    @endforeach
                                </div>

                            @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @include('includes.solution_sidebar')
		</div>
	</section>
  @include('includes/footer')
</body>
@include('includes/scripts')

</html>

<style>

</style>
