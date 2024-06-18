<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('includes/head')
<body>

	@yield('components')
	@include('includes/nav')



	@yield('slider')
	@yield('section2')
    @yield('section3')
    @yield('section4')
    @yield('section5')
    @yield('section6')
    @yield('section7')
    @yield('section8')
    @yield('section9')

    @include('includes/footer')


</body>
@include('includes/scripts')
</html>


