@extends('layouts.newsCategoryListView')

@section('title')
  {{$activeNewsCatSel->title}}
@endsection

@section('meta_description')
  {{$activeNewsCatSel->meta_description}}
@endsection

@section('meta_keywords')
  {{$activeNewsCatSel->meta_keywords}}
@endsection

@section('components')

    @include('components/preloader')
    @include('components/searchbox')
    @include('components/cookieconsent')
    @include('components/newsletterpopup')
    @include('components/floatingsocialicons')

@endsection

@section('content')
    {{-- {!! $activeNewsCatSel->content !!} --}}
@endsection

<style>

</style>
