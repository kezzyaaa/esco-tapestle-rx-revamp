<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('includes.head')
    <link rel="stylesheet" type="text/css" href="/css/jquery.simpleLens.css">
<body>
	@yield('components')
	@include('includes.nav')
    @include('components/breadcumb-prod')

	<section class="cta-area bg-img pb-5 page-background">
		<div class="container d-lg-flex  align-items-stretch">
			@yield('content')
			@include('includes.product_detail_sidebar')
		</div>
	</section>

	@include('includes.footer')

</body>
@include('includes/scripts')
<script type="text/javascript" src= "{{ asset('js/jquery.simpleLens.min.js') }}"></script>
<script>  $(document).ready(function() {
  $('.simpleLens-big-image').simpleLens({
        loading_image:'/images/misc-img/loading.gif'
        });
  });
</script>
</html>

