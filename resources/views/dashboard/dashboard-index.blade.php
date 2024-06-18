@extends('layouts.app')

@section('content')
    <div class="wrapper d-flex align-items-stretch">
    @include('dashboard.partials.sidebar')

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            <h1>Welcome to Esco Pharma</h1>
            <img src="/images/upload/analytics-home.png" class="w-75" alt="">
        </div>
    </div>
@endsection
