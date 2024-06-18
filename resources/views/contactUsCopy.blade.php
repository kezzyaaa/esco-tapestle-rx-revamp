@extends('layouts.contactUspageView')

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

    <div class="contact-wrap">
        @if (session()->has('message'))
            <div class="alert alert-success" role="alert">
                <strong>Success</strong> {{session()->get('message')}}
            </div>
        @elseif(session()->has('error'))
            <div class="alert alert-danger">{!!session()->get('error')!!}</div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-unstyled">
                        @foreach ($errors->all() as $error)
                            <li>{!! $error !!}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        @endif

        <div class="tab-head mb-3">
            <div class="tab-title">Contact Form Copy</div>
        </div>

        <div class="contact-form-border">
          <p>For more queries or comments about our products and corporate website. Please use the contact form below<br><small>(<span style="color: red;">*</span>) required</small></p>

          <form class="form-area contact-form text-right" id="contactUsFormCopy" action="/contact-us-copy" method="post">

              <div class="form-group row mt-3">
                  <label for="name" class="col-sm-3 col-form-label"><span>*</span> Name</label>
                  <div class="col-sm-9">
                      <input name="name" required minlength="2" placeholder="Enter your name" value="{{ old('name') }}" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" type="text" size="20" maxlength="100">
                      @error('name')
                          <div class="error text-left text-danger"><i class="fa fa-info-circle" aria-hidden="true"></i> {{ $message }}</div>
                      @enderror
                  </div>
              </div>

              <div class="form-group row">
                  <label for="staticEmail" class="col-sm-3 col-form-label"><span>*</span> Email</label>
                  <div class="col-sm-9">
                      <input type="email" name="email" required  placeholder="Enter email address" value="{{ old('email') }}"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" maxlength="80" size="20">
                      @error('email')
                          <div class="error text-left text-danger"><i class="fa fa-info-circle" aria-hidden="true"></i> {{ $message }}</div>
                      @enderror
                  </div>
              </div>

              <div class="form-group row">
                  <label for="company" class="col-sm-3 col-form-label"><span>*</span> Company</label>
                  <div class="col-sm-9">
                      <input name="company" required placeholder="Enter company name" value="{{ old('company') }}" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter company name'" class="common-input mb-20 form-control" type="text" size="20" maxlength="100">
                      @error('company')
                          <div class="error text-left text-danger"><i class="fa fa-info-circle" aria-hidden="true"></i> {{ $message }}</div>
                      @enderror

                  </div>
              </div>

              <div class="form-group row">
                  <label for="address" class="col-sm-3 col-form-label"><span>*</span> Address</label>
                  <div class="col-sm-9">
                      <input name="address" required placeholder="Enter address" value="{{ old('address') }}" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter address'" class="common-input mb-20 form-control" type="text" size="20" maxlength="200">
                      @error('address')
                          <div class="error text-left text-danger"><i class="fa fa-info-circle" aria-hidden="true"></i> {{ $message }}</div>
                      @enderror
                  </div>
              </div>

              <div class="form-group row">
                  <label for="country" class="col-sm-3 col-form-label"><span>*</span> Country</label>
                  <div class="col-sm-9">
                      <select id="country" name="country" value="{{ old('country') }}" onchange="countryAtChange()" required class="form-control">
                              <option value="" selected="">Select your country</option>
                              @foreach ($countries as $country)
                              <option value="{{$country->code}}" {{ (old("country") == $country->code ? "selected":"") }} data-areacode="{{$country->area_code}}">{{$country->name}}</option>
                              @endforeach

                          </select>
                          @error('country')
                              <div class="error text-left text-danger"><i class="fa fa-info-circle" aria-hidden="true"></i> {{ $message }}</div>
                          @enderror
                  </div>
                  <input type="hidden" id="countryName" name="countryName" value="{{ old('countryName') }}">


              </div>

              <div class="form-group row">
                  <label for="contactNumber" class="col-sm-3 col-form-label"><span>*</span> Contact Number</label>
                  <div class="col-sm-9">
                      <div class="row small-gutters">
                          <div class="col-2">
                              <input name="areaCode" id="areaCode"  value="{{ old('areaCode') }}" class="common-input mb-20 form-control" type="text" readonly>
                          </div>
                          <div class="col-10">
                              <input name="contactNumber" id="contactNumber" required placeholder="Enter contact number" value="{{ old('contactNumber') }}" onfocus="this.placeholder = ''" onblur="phoneChange()" class="common-input mb-20 form-control" maxlength="30" size="20" type="number">
                              <input class="form-control" id="contactFull" maxlength="40" name="contactFull" size="20" type="hidden">
                              @error('contactNumber')
                                  <div class="error text-left text-danger"><i class="fa fa-info-circle" aria-hidden="true"></i> {{ $message }}</div>
                              @enderror
                          </div>
                      </div>

                  </div>
              </div>

              <div class="form-group row">
                  <label for="prodInterest[]" class="col-sm-3 col-form-label">Product of Interest</label>
                  <div class="col-sm-9">
                      <select multiple="" class="form-control" id="prodInterest" name="prodInterest[]" title="">
                          <option value="">---Select Products--</option>
                          @foreach ($product_list as $product)
                              <option {{$product->id==$prod?'selected':''}} {{ (collect(old('prodInterest'))->contains((isset($product->brand)?$product->brand.' ':'').$product->name)) ? 'selected':'' }} value="{{(isset($product->brand)?$product->brand.' ':'').$product->name}}">{{(isset($product->brand)?$product->brand.' ':'').$product->name}}</option>
                          @endforeach
                      </select>
                          <small id="prodInterestHelp" class="form-text text-muted text-left">For multiple products, hold down the 'Ctrl' key then select the product interest.</small>
                      @error('prodInterest')
                          <div class="error text-left text-danger"><i class="fa fa-info-circle" aria-hidden="true"></i> {{ $message }}</div>
                      @enderror
                  </div>
              </div>

              <div class="form-group row">
                  <label for="message" class="col-sm-3 col-form-label">Message</label>
                  <div class="col-sm-9">
                      <textarea class="common-textarea form-control" name="message" placeholder="Enter Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'">{{ old('message') }}</textarea>
                  </div>
              </div>

              <input type="hidden" name="recaptcha" id="recaptcha">

              @csrf

              <div class="form-group row">
                  <label for="staticEmail" class="col-sm-3 col-form-label"></label>
                  <div class="col-sm-9">
                      <div class="alert-msg" style="text-align: left;"></div>
                      <button id="btnSubmit" class="primary-btn primary" style="float: left;padding: 8px 10px;">Send Message
                      </button>
                  </div>
              </div>


          </form>
        </div>

    </div>

    {{-- <hr class="w-100">
    <div class="contact-wrap">
        <div class="address-wrap">
            <div class="tab-head">
                <div class="tab-title">Esco Micro Pte. Ltd.</div>
            </div>
            <div class="single-contact-address d-flex flex-row">
                <div class="icon">
                    <i class="fa fa-home lnr" aria-hidden="true"></i>
                </div>
                <div class="contact-details">
                    <p>21 Changi South Street 1 Singapore 486777</p>
                </div>
            </div>
            <div class="row mt-2">
                <div class="single-contact-address col-md-6 d-flex flex-row">
                    <div class="icon">
                        <i class="fa fa-phone lnr" aria-hidden="true"></i>
                    </div>
                    <div class="contact-details">
                        <p>Tel: <a href="tel:+65 65420833">+65 65420833</a></p>
                        <p>Fax: <a href="tel:+65 65426920">+65 65426920</a></p>
                    </div>
                </div>
                <div class="single-contact-address col-md-6 d-flex flex-row">
                    <div class="icon">
                        <i class="fa fa-envelope lnr" aria-hidden="true"></i>
                    </div>
                    <div class="contact-details">
                        <p>Email: <a href="mailto:csis.pharma@escoglobal.com">csis.pharma@escoglobal.com</a></p>
                    </div>
                </div>
            </div>


        </div>

    </div> --}}

    <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.sitekey') }}"></script>

    <script>
	  grecaptcha.ready(function() {
	      document.getElementById('contactUsFormCopy').addEventListener("submit", function(event) {
	        event.preventDefault();
	        grecaptcha.execute('{{ config('services.recaptcha.sitekey') }}', {action: 'contact'}).then(function(token) {
	           document.getElementById("recaptcha").value= token;
	           document.getElementById('contactUsFormCopy').submit();
	        });
	      }, false);
	  });
	</script>

    <script>
        function countryAtChange() {
            var e = document.getElementById("country");
            var cname = e.options[e.selectedIndex].text;
            var areaCode = e.options[e.selectedIndex].dataset.areacode;

            document.getElementById("countryName").value = cname;
            document.getElementById("areaCode").value = '+'+areaCode.replace("-", " ");


        }
        function phoneChange(){
            var tel =  document.getElementById("areaCode").value + " " + document.getElementById("contactNumber").value;
            document.getElementById("contactFull").value = tel;
        }


    </script>

    <style>
        
    </style>
</section>

@endsection
