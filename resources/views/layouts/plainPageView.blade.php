<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('includes/head')
    @yield('styles')
<body data-spy="scroll" data-target=".navbar" data-offset="100">

	@yield('content')

</body>
</html>




