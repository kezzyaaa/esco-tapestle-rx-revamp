@extends('layouts.'.$layout)

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
  <!-- Page Content  -->
    {!!$activePage->first()->content!!}
@endsection

@section('rel_prod')
  <!-- Page Content  -->
  @if($activePage->first()->product()->count() > 0)
    <p class="mt-3"><strong>Related Products</strong></p>

    <div class="owl-carousel owl-theme solutionRelatedprodCarousel px-5">
        @foreach($activePage->first()->product()->get() as $product)
            <div class="item">
                <a href="{{isset($product->ext_link)?$product->ext_link:$product->path()}}" target="_blank"><img class="mb-2 product-img lazy" data-src="/images/product-images/thumb/{{$product->image_thumb}}"></a>
                <a href="{{isset($product->ext_link)?$product->ext_link:$product->path()}}" target="_blank"><p class="text-center">{{$product->brand}} {{$product->name}}</p></a>
            </div>
        @endforeach
    </div>

  @endif
@endsection

<link href="{{ asset('css/idGeneratedStyles.css') }}" rel="stylesheet">
