@extends('layouts.app')

@section('content')
    <div class="wrapper d-flex align-items-stretch">
        @include('dashboard.partials.sidebar')



        <div id="content" class="m-4 m-md-5 mt-5">
                    <!-- Page Content  -->
                @include('dashboard.partials.buttons')



                {{-- @include('dashboard.partials.alerts') --}}
                @include('dashboard.partials.errors')



            <form action="/dashboard/product-model/{{$product->id}}" method="post" enctype="multipart/form-data" autocomplete="off">
                @csrf
                @method('PATCH')
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="name"><strong>Brand</strong></label>
                            <input type="text" name="brand" id="brand" value="{{old('brand') ?? $product->brand}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="name"><strong>Name*</strong></label>
                            <input type="text" name="name" required id="title" value="{{old('name') ?? $product->name}}" class="form-control">
                          </div>
                          <div class="form-group">
                            <label for="category"><strong>Product Category*</strong></label>
                            <select name="product_category_id" required id="product_category_id" class="form-control">
                              @foreach ($product_categories as $product_category)
                                <option value="{{$product_category->id}}" {{ $product_category->id == $product->product_category_id? 'selected':''}}>{{$product_category->name}}</option>
                              @endforeach
                        </select>
                        </div>
                        <div class="form-group">
                            <label for="product_application_category_id"><strong>Product Application Category*</strong></label>
                            <select name="product_application_category_id" required id="productApplicationCategory" class="form-control">
                                <option value="0" {{ $product->product_application_category_id == 0? 'selected':''}}>None</option>
                              @foreach ($product_application_categories as $product_application_category)
                                <option value="{{$product_application_category->id}}" {{ $product->product_application_category_id == $product_application_category->id? 'selected':''}}>{{$product_application_category->name}}</option>
                              @endforeach
                        </select>
                        </div>


                        <p class="mb-2"><strong>Containment Controls</strong></p>
                        @foreach($product->containmentcontrol as $product_containment_control)

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="{{Str::slug($product_containment_control->name)}}" id="{{$product_containment_control->name}}" {{($product_containment_control->pivot->is_activated == '1') ? 'checked' : ''}} value="1">
                                <label class="form-check-label" for="{{$product_containment_control->name}}">{{$product_containment_control->name}}</label>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-md-4">
                        <div class="card p-4">
                            <div class="form-group d-flex flex-column">
                                <label for="image"><strong>Product Image</strong></label>
                                <input type="file" name="image" class="over-flow-hidden" id="image">
                            </div>

                            <img src="/images/product-images/thumb/{{ $product->image_thumb}}" class="img-fluid w-75 img-center-block" alt="">
                            <p class="mt-2"><small><i class="fa fa-exclamation-triangle text-danger" aria-hidden="true"></i> note: images should be minified first (upload only 1500x1500px image)</small></p>
                        </div>

                    </div>
                </div>



                <div class="form-group mt-4">
                    <label for="details"><strong>Details*</strong></label>
                    <textarea class="summernote" required name="details">
                        {{ old('content') ?? $product->details}}
                    </textarea>
                </div>



                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        @foreach($product_spec as $index => $productSpecification)
                        <li class="nav-item">
                            <a class="nav-link {{$index == 0? 'active':'' }}" id="{{$productSpecification->title}}-tab" data-toggle="tab" href="#{{$productSpecification->title}}" role="tab" aria-controls="{{$productSpecification->title}}" aria-selected="true"><strong>{{$productSpecification->title}}</strong></a>
                        </li>

                        @endforeach
                        <li class="nav-item">
                            <a class="nav-link" id="brochures-tab" data-toggle="tab" href="#brochures" role="tab" aria-controls="brochures" aria-selected="true"><strong>Brochures & Sell Sheets</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="relatedProd-tab" data-toggle="tab" href="#relatedProd" role="tab" aria-controls="relatedProd" aria-selected="true"><strong>Related products</strong></a>
                        </li>
                      </ul>
                      <div class="tab-content" id="myTabContent">
                        @foreach($product_spec as $index => $productSpecification)
                        <div class="tab-pane fade {{$index == 0? 'active show':'' }}" id="{{$productSpecification->title}}" role="tabpanel" aria-labelledby="home-tab">
                            <div class="form-group mt-4">
                                {{-- <label for="details"><strong>{{$productSpecification->title}}</strong></label> --}}
                                <textarea class="summernote" name="{{$productSpecification->title}}">
                                    {{ old($productSpecification->title) ?? isset($product->productSpecification->where('id', '=', $productSpecification->id)->first()->pivot->content)? $product->productSpecification->where('id', '=', $productSpecification->id)->first()->pivot->content : '' }}
                                </textarea>
                            </div>
                        </div>
                        @endforeach
                        <div class="tab-pane fade" id="brochures" role="tabpanel" aria-labelledby="brochures-tab">
                            <div class="row mt-4">
                                @foreach($product_brochures->chunk(15) as $chunk)

                                    <div class="col-md-4">
                                        @foreach($chunk as $product_brochure)
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="{{Str::slug($product_brochure->title)}}" id="{{Str::slug($product_brochure->title)}}" {{array_key_exists($product_brochure->id, $product->productBrochure->keyBy('id')->toArray()) ? 'checked' : ''}} value="1">
                                                <label class="form-check-label" for="{{Str::slug($product_brochure->title)}}">{{$product_brochure->title}}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>

                        </div>
                        <div class="tab-pane fade" id="relatedProd" role="tabpanel" aria-labelledby="relatedProd-tab">
                            <div class="row mt-4">
                                @foreach($product_list->chunk(15) as $chunk)

                                    <div class="col-md-4">
                                        @foreach($chunk as $product_rel)
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="{{Str::slug($product_rel->name)}}" id="{{Str::slug($product_rel->name)}}" {{array_key_exists($product_rel->id, $product->relProd->keyBy('id')->toArray()) ? 'checked' : ''}} value="1">
                                                <label class="form-check-label" for="{{Str::slug($product_rel->name)}}">{{$product_rel->name}}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    </div>




                <div class="frame">
                    <h3>SEO (Search Engine Optimization)</h3>
                    <div class="form-group mt-2">
                        <label for="slug"><strong>Custom Slug*</strong></label>
                        <input type="text" name="slug" required id="slug" value="{{old('slug') ?? $product->slug}}" class="form-control">
                        <p class="mt-2"><small><i class="fa fa-info-circle text-info" aria-hidden="true"></i> Note: The ideal length for page url is between 50 and 60  eg. ( integrable-and-dependable-esco-airstream ) <a href="https://neilpatel.com/blog/seo-urls/#:~:text=Notice%20how%20the%20number%20one,good%20number%20to%20shoot%20for." target="_blank" rel="noopener noreferrer">More info</a><br> URL : <span id="url-complete">https://escopharma.com/products/<span id="slug-temp"></span></span> <br>( count : <span id="url-count" class="font-weight-bold"></span>  <span id="checkOrfailSlug"></span> )</small></p>
                    </div>

                    <div class="form-group">
                        <label for="meta_title"><strong>Meta Title*</strong></label>
                        <input type="text" name="meta_title" required id="meta_title" value="{{old('meta_title') ?? $product->meta_title}}" class="form-control">
                        <p class="mt-2"><small><i class="fa fa-info-circle text-info" aria-hidden="true"></i> note:  The ideal length for page titles is between 50 and 60 characters (spaces included), with an absolute limit of 65 characters. <a href="https://www.woorank.com/en/edu/seo-guides/title-tag-seo" target="_blank" rel="noopener noreferrer">More info</a> <br>( count : <span id="title-count" class="font-weight-bold"></span>  <span id="checkOrfailTitle"></span> )</small></p>
                    </div>

                    <div class="form-group mt-4">
                        <label for="meta_description"><strong>Meta Description*</strong></label>
                        <textarea  type="text" name="meta_description" required id="meta_description" class="form-control" rows="3">{{old('meta_description') ?? $product->meta_description}}</textarea>
                        <p class="mt-2"><small><i class="fa fa-info-circle text-info" aria-hidden="true"></i> Note: The optimal length for meta description is 155–160 characters <a href="https://moz.com/learn/seo/meta-description#:~:text=Meta%20descriptions%20can%20be%20any,descriptions%20between%2050%E2%80%93160%20characters." target="_blank" rel="noopener noreferrer">More info</a><br>( count : <span id="metadesc-count" class="font-weight-bold"></span>  <span id="checkOrfailDescription"></span> )</small></p>
                    </div>

                    <div class="form-group">
                        <label for="meta_keywords"><strong>Meta Keywords*</strong></label>
                        <input type="text" name="meta_keywords" required id="meta_keywords" value="{{old('meta_keywords') ?? $product->meta_keywords}}" class="form-control">
                    </div>



                </div>
                <small>Note: (*) required</small>
                <p><input type="submit" class="btn btn-primary mt-4" value="Save"></p>
            </form>


        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/seo.js') }}"></script>
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
        $('.summernote').summernote({
            height: 400,
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
