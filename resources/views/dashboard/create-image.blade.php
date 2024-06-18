@extends('layouts.app')

@section('content')
    <div class="wrapper d-flex align-items-stretch">
        @include('dashboard.partials.sidebar')




        <div id="content" class="m-4 m-md-5 mt-5">
                <!-- Page Content  -->
                @include('dashboard.partials.buttons')

                @include('dashboard.partials.errors')

            <form action="/dashboard/images" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title"><strong>Title*</strong></label>
                            <input type="text" name="title" required id="title" value="{{old('title')}}" class="form-control">
                            <div class="text-danger">
                              {{$errors -> first('title')}}
                            </div>
                          </div>
                        <div class="form-group">
                            <label for="alt"><strong>Alt*</strong></label>
                            <input type="text" name="alt" required id="alt" value="{{old('alt')}}" class="form-control">
                            <div class="text-danger">
                              {{$errors -> first('alt')}}
                            </div>
                          </div>

                          <div class="card p-4">
                            <div class="form-group d-flex flex-column">
                                <label for="file"><i class="fa fa-file-image-o" aria-hidden="true"></i>
                                    <strong>Image</strong></label>
                                <input type="file" name="file" id="file" value="{{old('file')}}" required>
                            </div>
                            {{-- <img src="/images/news-banner/full/{{ $news->banner_img}}" class="img-fluid w-50" alt=""> --}}
                            <p class="mt-2"><small><i class="fa fa-exclamation-triangle text-danger" aria-hidden="true"></i> note: images should be minified first </small></p>
                        </div>
                    </div>
                    <div class="col-md-6">


                </div>








                <p><input type="submit" class="btn btn-primary mt-4" value="Save"></p>
            </form>


        </div>
    </div>
@endsection

@section('scripts')

    <script>
        $(function() {
            $("#type").each(function (index, element) {
                    const val = $(this).data('value');
                    if(val !== '') {
                        $(this).val(val);
                    }
            });
        })


    </script>
@endsection
