@extends('layouts.app')

@section('content')
    <div class="wrapper d-flex align-items-stretch">
        @include('dashboard.partials.sidebar')



        <div id="content" class="m-4 m-md-5 mt-5">
                    <!-- Page Content  -->
                {{-- @include('dashboard.partials.configurationsbuttons') --}}

                @include('dashboard.partials.alerts')


            <form action="/dashboard/configurations/{{$configurations->id}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="domain"><strong>Domain</strong></label>
                    <input type="text" name="domain" id="title" value="{{old('domain') ?? $configurations->domain}}" class="form-control">

                  </div>
                <div class="form-group">
                    <label for="description"><strong>Language</strong></label>
                    <input  type="text" name="language" class="form-control" value="{{old('language') ?? $configurations->language}}" >

                </div>
                <div class="form-group">
                    <label for="description"><strong>Meta Title</strong></label>
                    <input  type="text" name="meta_title" class="form-control" value="{{old('meta_title') ?? $configurations->meta_title}}" >

                </div>
                <div class="form-group">
                    <label for="meta_description"><strong>Meta Description</strong></label>
                    <input  type="text" name="meta_description" class="form-control" value="{{old('meta_description') ?? $configurations->meta_description}}" >

                </div>
                <div class="form-group">
                    <label for="meta_keywords"><strong>Meta Keywords</strong></label>
                    <input  type="text" name="meta_keywords" class="form-control" value="{{old('meta_keywords') ?? $configurations->meta_keywords}}" >

                </div>


                {{-- <div class="form-group d-flex flex-column">
                    <label for="banner_img"><strong>Banner</strong></label>
                    <input type="file" name="banner_img" id="banner_img">
                </div>

                <img src="/images/configurations-banner/full/{{ $configurations->banner_img}}" class="img-fluid w-50" alt="">
                <p class="mt-2"><small><i class="fa fa-exclamation-triangle text-danger" aria-hidden="true"></i> note: images should be minified first (upload only 1200x630 px image) | jpg only</small></p> --}}

                <div class="form-group">
                    <label for="analytics"><strong>Analytics Script</strong></label>
                    <textarea type="text" name="analytics" rows="5" id="analytics" class="form-control">{{old('analytics') ?? $configurations->analytics}}</textarea>
                </div>
                <p><input type="submit" class="btn btn-primary mt-4" value="Save"></p>
            </form>


        </div>
    </div>
@endsection
@section('scripts')
    <script>

        $(document).ready(function() {
            setTimeout(function(){ $(".alert").alert('close') }, 3000);
        } );

    </script>
@endsection
