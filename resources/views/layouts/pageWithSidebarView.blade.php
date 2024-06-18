<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('includes/head')
<body>

	@yield('components')
	@include('includes/nav')
    @include('components/breadcumb')

	<section class="cta-area bg-img pb-5">
    <div class="" style="position: absolute; z-index: -1; background: url('/images/bg-img/blueprint_background.jpg') center no-repeat fixed;
    background-size: cover; height: calc(100vh - 50vh); width: 100%;">
    </div>
		<div class="container d-lg-flex flex-md-row-reverse align-items-stretch">
            <!-- <div id="content" class="px-md-3 px-0 pt-5 w-100" style="background-color: rgba(238, 238, 238, 0.3);"> -->
            <div id="content" class="px-md-3 px-0 pt-5 w-100">
                @yield('content')
                @yield('rel_prod')
            </div>
			@include('includes.sidebar')
		</div>
	</section>
  @include('includes/footer')
</body>
@include('includes/scripts')
@yield('scripts')
</html>
