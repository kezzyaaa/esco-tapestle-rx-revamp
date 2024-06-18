@extends('layouts.app')

@section('content')
    <div class="wrapper d-flex align-items-stretch">
        @include('dashboard.partials.sidebar')




        <div id="content" class="m-4 m-md-5 mt-5">
                <!-- Page Content  -->
                @include('dashboard.partials.buttons')
                {{-- @include('dashboard.partials.alerts') --}}
                @include('dashboard.partials.errors')

            <form action="/dashboard/resources/{{$brochure->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title"><strong>Title*</strong></label>
                            <input type="text" name="title" required id="title" value="{{old('title') ?? $brochure->title}}" class="form-control">
                            <div class="text-danger">
                              {{$errors -> first('name')}}
                            </div>
                          </div>
                          <input type="hidden" name="is_activated" id="is_activated" value="{{$brochure->is_activated}}" class="form-control">

                          <div class="form-group">
                                <label for="type"><strong>File Type*</strong></label>
                                <select name="type" required id="type" data-value="{{ old('type') ?? $brochure->type}}" class="form-control">
                                    <option value="1">Brochure</option>
                                    <option value="2">Questionnaires</option>
                                </select>
                          </div>
                          <div class="card p-4">
                                <div class="form-group d-flex flex-column">
                                    <label for="file"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> <strong>File</strong></label>
                                    <input type="file" name="file" id="file" value="{{old('file') ?? $brochure->file}}">
                                </div>
                                <a href="/pdf/brochures/{{$brochure->file}}" target="_blank">{{$brochure->file}}</a>
                            <p class="mt-2"><small><i class="fa fa-exclamation-triangle text-danger" aria-hidden="true"></i> note: file should be PDF or MS word file</small></p>

                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card p-4">
                            <div class="form-group d-flex flex-column">
                                <label for="img_thumb"><i class="fa fa-file-image-o" aria-hidden="true"></i>
                                    <strong>Image</strong></label>
                                <input type="file" name="img_thumb" id="img_thumb" value="{{old('img_thumb') ?? $brochure->img_thumb}}">
                            </div>
                            <img src="/images/product-brochure-thumb/{{$brochure->img_thumb}}" alt="" class="img-fluid w-25">
                            {{-- <img src="/images/news-banner/full/{{ $news->banner_img}}" class="img-fluid w-50" alt=""> --}}
                            <p class="mt-2"><small><i class="fa fa-exclamation-triangle text-danger" aria-hidden="true"></i> note: images should be minified first (upload only 300x424 px image) | jpg only</small></p>
                        </div>
                    </div>

                </div>








                <p><input type="submit" class="btn btn-primary mt-4" value="Save"></p>
            </form>


        </div>
    </div>
@endsection

@section('scripts')
    @if (session()->has('message'))
    <script>
        var message = "{{Session::get('message')}}";
        Toast.fire({
            icon: 'success',
            title: message
        })

    </script>
    @endif
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
