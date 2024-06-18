<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('includes/head')

<body>
	@yield('components')
	@include('includes/nav')
    @include('components/breadcumb')

	<section class="cta-area bg-img pb-5 page-background">
		<div class="container d-lg-flex flex-md-row-reverse align-items-stretch">
            <div class="px-md-3 px-2 pt-5 pb-2 w-100" style="background: rgba(238, 238, 238, 0.3);">
                @yield('content')
            </div>
			@include('includes.contactus_sidebar')

		</div>
	</section>
  @include('includes/footer')
</body>
@include('includes/scripts')
</html>
