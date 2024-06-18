@extends('layouts.app')

@section('content')
    <div class="wrapper d-flex align-items-stretch">
    @include('dashboard.partials.sidebar')



        <div id="content" class="m-4 m-md-5 mt-5">
             <!-- Page Content  -->

             {{-- @include('dashboard.partials.alerts') --}}


            <table id="newslist" class="table table-striped table-bordered" style="width:100%; font-size:0.8em">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th nowrap="nowrap">Contact Number</th>
                        <th>Country</th>
                        <th>Company</th>
                        <th>Address</th>
                        <th>Product of Interest</th>
                        <th>Message</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Leads as $Lead)
                            <td nowrap="nowrap">{{$Lead->name}}</td>
                            <td>{{$Lead->email}}</td>
                            <td nowrap="nowrap">{{$Lead->contactFull}}</td>
                            <td>{{$Lead->countryName}}</td>
                            <td>{{$Lead->company}}</td>
                            <td>{{$Lead->address}}</td>
                            <td>{{$Lead->prodInterest}}</td>
                            <td>{{$Lead->message}}</td>
                            <td nowrap="nowrap">{!!$Lead->created_at!!}</td>
                        </tr>

                    @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact Number</th>
                        <th>Country</th>
                        <th>Company</th>
                        <th>Address</th>
                        <th>Product of Interest</th>
                        <th>Message</th>
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
                "order": [[ 8, "desc" ]]
            });
        } );

    </script>
@endsection
