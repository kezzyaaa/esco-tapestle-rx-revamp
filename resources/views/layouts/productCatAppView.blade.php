<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('includes.head')
<body>

	@yield('components')
	@include('includes.nav')
    @include('components/breadcumb')

	<section class="cta-area bg-img pb-5 page-background">
		<div class="container d-lg-flex  align-items-stretch">
			@yield('content')
			{{-- @include('includes.product_detail_sidebar') --}}
		</div>
	</section>

	@include('includes.footer')

</body>
@include('includes/scripts')
</html>
