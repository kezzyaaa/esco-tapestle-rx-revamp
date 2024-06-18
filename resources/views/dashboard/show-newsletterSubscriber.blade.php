@extends('layouts.app')

@section('content')
    <div class="wrapper d-flex align-items-stretch">
    @include('dashboard.partials.sidebar')



        <div id="content" class="m-4 m-md-5 mt-5">
             <!-- Page Content  -->

             {{-- @include('dashboard.partials.alerts') --}}


            <table id="newslist" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($NewsletterSubcribers as $NewsletterSubcriber)
                            <td>{{$NewsletterSubcriber->name}}</td>
                            <td>{{$NewsletterSubcriber->email}}</td>
                            <td>{!!$NewsletterSubcriber->created_at!!}</td>
                        </tr>

                    @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Date</th>
                    </tr>
                </tfoot>
            </table>


        </div>
    </div>
@endsection

@section('scripts')
    <script>

        $(document).ready(function() {
            $('#newslist').DataTable({
                "order": [[ 2, "desc" ]]
            });
        } );

    </script>
@endsection
