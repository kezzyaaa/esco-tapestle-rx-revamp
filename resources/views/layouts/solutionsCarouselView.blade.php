<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('includes/head')
<body>
	@yield('components')
	@include('includes/nav')
    @include('components/breadcumb')

	<section class="bg-img pb-5 page-background">
		<div class="container">
            <div class="pt-2 pt-md-4">
                @yield('content')
                <div class="px-3">
                    @include('components/solutionsCarousel')
                </div>

            </div>
		</div>
	</section>
  @include('includes/footer')
</body>
@include('includes/scripts')

</html>

<style>

</style>
