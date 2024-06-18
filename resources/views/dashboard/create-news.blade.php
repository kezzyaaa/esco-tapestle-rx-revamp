@extends('layouts.app')

@section('content')
    <div class="wrapper d-flex align-items-stretch">
        @include('dashboard.partials.sidebar')




        <div id="content" class="m-4 m-md-5 mt-5">
                <!-- Page Content  -->
                @include('dashboard.partials.buttons')

                @include('dashboard.partials.errors')

            <form action="/dashboard/news" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title"><strong>Title</strong></label>
                    <input type="text" name="title" required id="title" value="{{old('title')}}" class="form-control">
                    <div class="text-danger">
                      {{$errors -> first('name')}}
                    </div>
                  </div>
                  <input type="hidden" name="is_activated" id="is_activated" value="0" class="form-control">

                <div class="form-group">
                    <label for="description"><strong>Description</strong></label>
                    <textarea  type="text" required name="description" class="form-control" rows="3">{{old('description')}}</textarea>
                </div>

                <div class="form-group">
                    <label for="category"><strong>Category</strong></label>
                    <select name="news_category_id" required id="news_category_id" class="form-control">
                    @foreach ($newsCategories as $newsCategory)
                        <option value="{{$newsCategory->id}}">{{$newsCategory->title}}</option>
                    @endforeach
                </select>
                </div>

                <div class="form-group">
                    <label for="content"><strong>Content</strong></label>

                    <textarea id="summernote" name="content">
                        {{old('content')}}
                    </textarea>

                </div>

                <div class="frame">
                    <h3>SEO (Search Engine Optimization)</h3>
                    <div class="form-group mt-2">
                        <label for="slug"><strong>Custom Slug</strong></label>
                        <input type="text" name="slug" required id="slug" value="{{old('slug') ?? $news->slug}}" class="form-control">
                        <p class="mt-2"><small><i class="fa fa-info-circle text-info" aria-hidden="true"></i> Note: The ideal length for page url is between 50 and 60  eg. ( integrable-and-dependable-esco-airstream ) <a href="https://neilpatel.com/blog/seo-urls/#:~:text=Notice%20how%20the%20number%20one,good%20number%20to%20shoot%20for." target="_blank" rel="noopener noreferrer">More info</a><br> URL : <span id="url-complete">https://escopharma.com/news/<span id="slug-temp"></span></span> <br>( count : <span id="url-count" class="font-weight-bold"></span>  <span id="checkOrfailSlug"></span> )</small></p>
                    </div>

                    <div class="form-group mt-2">
                        <label for="canonical_link"><strong>Canonical Link</strong></label>
                        <input type="text" name="canonical_link" id="canonical_link" value="{{old('canonical_link') ?? $news->canonical_link}}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="meta_title"><strong>Meta Title</strong></label>
                        <input type="text" name="meta_title" required id="meta_title" value="{{old('meta_title') ?? $news->meta_title}}" class="form-control">
                        <p class="mt-2"><small><i class="fa fa-info-circle text-info" aria-hidden="true"></i> note:  The ideal length for page titles is between 50 and 60 characters (spaces included), with an absolute limit of 65 characters. <a href="https://www.woorank.com/en/edu/seo-guides/title-tag-seo" target="_blank" rel="noopener noreferrer">More info</a> <br>( count : <span id="title-count" class="font-weight-bold"></span>  <span id="checkOrfailTitle"></span> )</small></p>
                    </div>

                    <div class="form-group mt-4">
                        <label for="meta_description"><strong>Meta Description</strong></label>
                        <textarea  type="text" name="meta_description" required id="meta_description" class="form-control" rows="3">{{old('meta_description') ?? $news->meta_description}}</textarea>
                        <p class="mt-2"><small><i class="fa fa-info-circle text-info" aria-hidden="true"></i> Note: The optimal length for meta description is 155–160 characters <a href="https://moz.com/learn/seo/meta-description#:~:text=Meta%20descriptions%20can%20be%20any,descriptions%20between%2050%E2%80%93160%20characters." target="_blank" rel="noopener noreferrer">More info</a><br>( count : <span id="metadesc-count" class="font-weight-bold"></span>  <span id="checkOrfailDescription"></span> )</small></p>
                    </div>

                    <div class="form-group">
                        <label for="meta_keywords"><strong>Meta Keywords</strong></label>
                        <input type="text" name="meta_keywords" required id="meta_keywords" value="{{old('meta_keywords') ?? $news->meta_keywords}}" class="form-control">
                    </div>



                </div>


                <div class="form-group d-flex flex-column">
                    <label for="banner_img"><strong>Banner</strong></label>
                    <input type="file" name="banner_img" id="banner_img">
                </div>

                {{-- <img src="/images/news-banner/full/{{ $news->banner_img}}" class="img-fluid w-50" alt=""> --}}
                <p class="mt-2"><small><i class="fa fa-exclamation-triangle text-danger" aria-hidden="true"></i> note: images should be minified first (upload only 1200x630 px image) | jpg only</small></p>


                <p><input type="submit" class="btn btn-primary mt-4" value="Save"></p>
            </form>


        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/seo.js') }}"></script>

    <script>

        $('#summernote').summernote({
            height: 500,
            lang: 'en-US',
            imageTitle: {
            specificAltField: true,
            },
            popover: {
                image: [
                    ['image', ['resizeFull', 'resizeHalf', 'resizeQuarter', 'resizeNone']],
                    ['float', ['floatLeft', 'floatRight', 'floatNone']],
                    ['remove', ['removeMedia']],
                    ['custom', ['imageTitle']],
                ],
                link: [
                    ['link', ['linkDialogShow', 'unlink']]
                ],
                air: [
                    ['color', ['color']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['para', ['ul', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture']]
                ]
            },
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['style']],
                ['font', ['strikethrough', 'superscript', 'subscript','bold', 'underline', 'clear']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']],
                ['height', ['height']]
            ],
            styleTags: [
            'p','h1', 'h2', 'h3', 'h4', 'h5', 'h6'
            ],
        });


    </script>
@endsection
