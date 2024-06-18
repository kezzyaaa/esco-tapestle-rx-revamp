@extends('layouts.productCatAppView')

@section('title')
  {{$activeProductCat->first()->name}}
@endsection

@section('components')

    @include('components/preloader')
    @include('components/searchbox')
    @include('components/cookieconsent')
    @include('components/newsletterpopup')
    @include('components/floatingsocialicons')


@endsection


@section('content')
    <div id="content" class="py-5 px-3" style="background: rgba(238, 238, 238, 0.3);">
        <div class="product-details">
            <h2 class="product-name mb-4">{{$activeProductCat->first()->name}}</h2>
        </div>

        {!! $activeProductCat->first()->details !!}
    </div>
@endsection

<link href="{{ asset('css/idGeneratedStyles.css') }}" rel="stylesheet">
