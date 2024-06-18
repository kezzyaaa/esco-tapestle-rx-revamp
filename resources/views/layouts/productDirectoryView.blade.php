<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('includes.head')
<body>

        @yield('components')
        @include('includes.nav')
        @include('components/breadcumb')

        <div id="app">
            <section class="cta-area bg-img pb-5 page-background">
                <div class="container d-lg-flex flex-md-row-reverse align-items-stretch">
                    @yield('content')
                    @include('includes.product_sidebar')

                </div>
            </section>
        </div>

        @include('includes.footer')



</body>
@include('includes/scripts')

</html>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.15/lodash.min.js"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<script>


    // const app = new Vue({
    //     el: '#app',
    //     data:{
    //         search:'',
    //         sort: 'asc'
    //     },
    //     methods:{
    //         searchit: _.debounce(() => {
    //             Fire.$emit('searching');
    //         },500),
    //         sortValue: _.debounce(() => {
    //             Fire.$emit('searching');
    //         },500)
    //     }
    // });
    </script>
    @yield('scripts')
