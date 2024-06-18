<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('includes/head')
<body>
	@yield('components')
	@include('includes/nav')
    @include('components/breadcumb')

	<section class="bg-img pb-5 page-background">
		<div class="container container d-lg-flex align-items-stretch">
            <div id="content" class="text-break px-md-4 pt-lg-5 pt-3 w-100" style="background: rgba(238, 238, 238, 0.3);">
                @yield('content')
            </div>
            @include('includes.news_sidebar')
		</div>
	</section>
  @include('includes/footer')
</body>
@include('includes/scripts')
</html>

