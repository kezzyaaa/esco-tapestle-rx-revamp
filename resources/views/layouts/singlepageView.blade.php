<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('includes/head')
<body>

	@yield('components')
	@include('includes/nav')
    @include('components/breadcumb')

	<section class="cta-area bg-img pb-5 page-background">
        <div id="content" class="px-md-3 px-0 pt-5 w-100" style="background-color: rgba(238, 238, 238, 0.3);">
            @yield('content')
        </div>
	</section>
  @include('includes/footer')
</body>
@include('includes/scripts')

</html>

<script>
    'use strict';

    $(document).ready(function () {
        $(window).bind('scroll', function (e) {
            parallaxScroll();
        });
    });

    function parallaxScroll() {
        // const scrolled = $(window).scrollTop();
        // $('#team-image').css('top', (0 - (scrolled * .20)) + 'px');
        // $('.img-1').css('transform','translateY('+ (0 - (scrolled * .20)) + 'px)');
        // $('.img-2').css('transform','translateY('+ (0 - (scrolled * .15)) + 'px)');
    }
</script>
