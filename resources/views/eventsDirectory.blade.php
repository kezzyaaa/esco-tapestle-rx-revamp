@extends('layouts.eventsDirectoryView')

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
<ul class="nav nav-tabs" id="events-tab" role="tablist">
    <li class="nav-item">
      <a class="nav-link  {{(count($eventsList) > 0)?'active':''}}" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Upcoming Events</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{(count($eventsList) > 0)?'':'active'}}" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Previous Events</a>
    </li>
  </ul>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade {{(count($eventsList) > 0)?'show active':''}}" id="home" role="tabpanel" aria-labelledby="home-tab">
        <div class="events-list row mb-3 my-4">
            @if(count($eventsList) > 0)
            @foreach($eventsList as $singleEvent)
            <div class="col-lg-6 post-left mb-5">
                <div class="bg-white single-event custom-light-box-shadow">
                    <div class="feature-img relative">
                        <div class="overlay-bg-events pt-3 pl-3">
                            <h2 class="text-white">{{$singleEvent->event_start->format("d")}}</h2>
                            <h5 class="text-white mb-0">{{$singleEvent->event_start->format("M")}}</h5>
                            <h5 class="text-white">{{$singleEvent->event_start->format("Y")}}</h5>

                        </div>
                        <img class="img-fluid" src="/images/events-banner/thumb/{{$singleEvent->banner_img}}" alt="{{$singleEvent->title}}">
                    </div>
                    <div class="p-3">
                        <h6>{{$singleEvent->title}}</h6>
                        <ul class="meta" style="list-style: none; padding-left:0;">
                            <li><p class="mb-1 secondary-text-color"><i class="fa fa-map-marker" aria-hidden="true"></i> {{$singleEvent->location}}</p></li>
                            <li><p class="secondary-text-color"><i class="fa fa-calendar" aria-hidden="true"></i> {{$singleEvent->event_start->format("d F, Y")}} - {{$singleEvent->event_end->format("d F, Y")}}</p></li>

                        </ul>
                    </div>

                </div>

            </div>
            @endforeach
            @else
             <div class="col-md-12">
                <h5>Stay tuned, for more upcoming events</h5>
             </div>
            @endif
        </div>
    </div>
    <div class="tab-pane fade {{(count($eventsList) < 1)?'show active':''}}" id="profile" role="tabpanel" aria-labelledby="profile-tab">

        <div class="events-list row mb-3 my-4">
            @foreach($previousEvents as $singleEvent)
                <div class="col-lg-6 post-left mb-5">
                    <div class="bg-white single-event custom-light-box-shadow">
                        <div class="feature-img relative">
                            <div class="overlay-bg-events pt-3 pl-3">
                                <h2 class="text-white">{{$singleEvent->event_start->format("d")}}</h2>
                                <h5 class="text-white mb-0">{{$singleEvent->event_start->format("M")}}</h5>
                                <h5 class="text-white">{{$singleEvent->event_start->format("Y")}}</h5>

                            </div>
                            <img class="img-fluid" src="/images/events-banner/thumb/{{$singleEvent->banner_img}}" alt="{{$singleEvent->title}}">
                        </div>
                        <div class="p-3">
                            <h6>{{$singleEvent->title}}</h6>
                            <ul class="meta" style="list-style: none; padding-left:0;">
                                <li><p class="mb-1 secondary-text-color"><i class="fa fa-map-marker" aria-hidden="true"></i> {{$singleEvent->location}}</p></li>
                                <li><p class="secondary-text-color"><i class="fa fa-calendar" aria-hidden="true"></i> {{$singleEvent->event_start->format("d F, Y")}} - {{$singleEvent->event_end->format("d F, Y")}}</p></li>

                            </ul>
                        </div>

                    </div>

                </div>
            @endforeach
        </div>

    </div>
  </div>




@endsection
