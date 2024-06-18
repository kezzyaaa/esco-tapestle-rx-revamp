@extends('layouts.'.$layout)


@if($activeSolutionSel->title)
    @section('title'){{$activeSolutionSel->title}}@endsection
    @section('og_title'){{$activeSolutionSel->title}}@endsection
@endif

@if($activeSolutionSel->meta_keywords)
    @section('meta_keywords'){{$activeSolutionSel->meta_keywords}}@endsection
@endif

@if($activeSolutionSel->meta_description)
    @section('meta_description'){{$activeSolutionSel->meta_description}}@endsection
@endif

@if($activeSolutionSel->description)
    @section('og_description'){{$activeSolutionSel->description}}@endsection
@endif

@section('og_type'){{'article'}}@endsection

@if($activeSolutionSel->parent == null)
    @section('og_image'){{url("/images/banner-images/$activeSolutionSel->banner_img")}}@endsection
    @section('itemprop_image'){{url("/images/banner-images/$activeSolutionSel->banner_img")}}@endsection
@else
    @section('og_image'){{url("/images/misc-img/solution-icons/$activeSolutionSel->icon")}}@endsection
    @section('itemprop_image'){{url("/images/misc-img/solution-icons/$activeSolutionSel->icon")}}@endsection
@endif



@section('components')

    @include('components/preloader')
    @include('components/searchbox')
    @include('components/cookieconsent')
    @include('components/newsletterpopup')
    @include('components/floatingsocialicons')

@endsection


@section('content')
    {!! $activeSolutionSel->content !!}

    @if($activeSolutionSel->product->count() > 0)
        <p class="mt-3"><strong>Recommended Products</strong></p>

        <div class="owl-carousel owl-theme solutionRelatedprodCarousel px-4 px-lg-5">
            @foreach($activeSolutionSel->product as $product)
                <div class="item">
                    <a href="{{isset($product->ext_link)?$product->ext_link:$product->path()}}" target="_blank"><img class="mb-2 product-img" src="/images/product-images/thumb/{{$product->image_thumb}}"></a>
                    <a href="{{isset($product->ext_link)?$product->ext_link:$product->path()}}" target="_blank"><p class="text-center">{{$product->brand}} {{$product->name}}</p></a>
                </div>
            @endforeach
        </div>

    @endif
@endsection

<style>

</style>
