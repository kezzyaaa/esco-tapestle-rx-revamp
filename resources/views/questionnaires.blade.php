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
    <div class="row">
        @foreach($questionnaires as $questionnaire)

            <div class="col-6 col-md-4">
                <div class="prod-broch-card-image-details" title="{{$questionnaire->title}}">
                    <a href="/pdf/brochures/{{$questionnaire->file}}" target="_blank">
                        <div class="mb-2 p-1 custom-brochure-light-border-shadow">
                            <div class="prod-brochure-container">
                                {{-- <div class="download-icon"><i class="fa fa-cloud-download" aria-hidden="true"></i></div>
                                <div class="prod-brochure-overlay"></div> --}}
                                <img title="{{$questionnaire->title}}" alt="{{$questionnaire->title}}" class="prod-brochure-img" src="/images/product-brochure-thumb/{{$questionnaire->img_thumb}}">
                            </div>
                        </div>
                    </a>
                    <a href="/pdf/brochures/{{$questionnaire->file}}" target="_blank"><p class="text-center">{{$questionnaire->title}}</p></a>
                </div>
              </div>

        @endforeach
    </div>
</section>

@endsection



