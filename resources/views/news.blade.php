@extends('layouts.newsDetailView')

@if($activeNewsSel->meta_title)
    @section('title'){{$activeNewsSel->meta_title}}@endsection
    @section('og_title'){{$activeNewsSel->meta_title}}@endsection
@else
    @if($activeNewsSel->title)
        @section('title'){{$activeNewsSel->title}}@endsection
        @section('og_title'){{$activeNewsSel->title}}@endsection
    @endif
@endif



@if($activeNewsSel->meta_keywords)
    @section('meta_keywords'){{$activeNewsSel->meta_keywords}}@endsection
@endif

@if($activeNewsSel->meta_description)
    @section('meta_description'){{$activeNewsSel->meta_description}}@endsection
@endif

@if($activeNewsSel->author)
    @section('meta_author'){{$activeNewsSel->author}}@endsection
@endif

@if($activeNewsSel->description)
    @section('og_description'){{$activeNewsSel->description}}@endsection
@endif
@section('og_type'){{'article'}}@endsection

@if($activeNewsSel->banner_img)
    @section('og_image'){{url("/images/news-banner/full/$activeNewsSel->banner_img")}}@endsection
    @section('itemprop_image'){{url("/images/news-banner/full/$activeNewsSel->banner_img")}}@endsection
@endif

@if($activeNewsSel->canonical_link)
    @section('canonical'){{$activeNewsSel->canonical_link}}@endsection
@endif

@section('components')

    @include('components/preloader')
    @include('components/searchbox')
    @include('components/cookieconsent')
    @include('components/newsletterpopup')
    @include('components/floatingsocialicons')

@endsection

@section('content')
    {!! $activeNewsSel->content !!}
@endsection

<style>

</style>
