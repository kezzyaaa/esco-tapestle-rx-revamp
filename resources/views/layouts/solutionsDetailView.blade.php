<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('includes/head')
    <style>

		/* these styles are for the demo, but are not required for the plugin */
		.zoom {
			display:inline-block;
			position: relative;
		}

		/* magnifying glass icon */
		.zoom:after {
			content:'';
			display:block;
			width:33px;
			height:33px;
			position:absolute;
			top:0;
			right:0;
			background:url(icon.png);
		}

		.zoom img {
			display: block;
		}

		.zoom img::selection { background-color: transparent; }

		#ex2 img:hover { cursor: url(grab.cur), default; }
		#ex2 img:active { cursor: url(grabbed.cur), default; }
	</style>
<body>
	@yield('components')
	@include('includes/nav')
    @include('components/breadcumb')

	<section class="bg-img pb-5 page-background">
		<div class="container d-lg-flex flex-md-row-reverse align-items-stretch">
            <div id="solution-content" class="px-md-4 pt-lg-5 pt-3 w-100 text-break" style="background: rgba(238, 238, 238, 0.3);">
                @yield('content')
            </div>
            @include('includes.solution_sidebar')
		</div>
	</section>
  @include('includes/footer')
</body>
@include('includes/scripts')
<script type="text/javascript" src= "{{ asset('js/jquery.zoom.min.js') }}"></script>
<script>  $(document).ready(function() {
    $('#ex1').zoom();
  });
</script>
</html>

<style>

</style>
