@extends('layouts.app')

@section('content')
    <div class="wrapper d-flex align-items-stretch">
    @include('dashboard.partials.sidebar')

        <!-- Modal -->
        <div id="confirmModal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title"><i class="fa fa-exclamation-triangle text-danger" aria-hidden="true"></i> Delete</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to delete this resources?</p>
                  <p id="title-delete"></p>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button id="delete-confirm" type="button" class="btn btn-danger">Delete</button>

                </div>
              </div>
            </div>
          </div>


        <div id="content" class="m-4 m-md-5 mt-5">

            @include('dashboard.partials.buttons')

            @include('dashboard.partials.alerts')


            <table id="productlist" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Image</th>
                        <th>File</th>
                        <th>File Type</th>
                        <th>Created</th>
                        <th>Options</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($productsbrochureslist as $productsbrochure)
                        <tr id="brochure_id_{{$productsbrochure->id}}">
                            <td style="width: 20%;">{{$productsbrochure->title}}</td>
                            <td><img src="/images/product-brochure-thumb/{{$productsbrochure->img_thumb}}" class="prod-table-image"></td>
                            <td><a href="/pdf/brochures/{{$productsbrochure->file}}" target="_blank">{{$productsbrochure->file}}</a></td>
                            <td>

                            @switch($productsbrochure->type)
                                @case(1)
                                    Brochure
                                    @break

                                @case(2)
                                    Questionnaires
                                    @break

                                @default
                                    Something went wrong, please try again
                            @endswitch

                            </td>
                            <td class="nowrap">{{$productsbrochure->created_at}}</td>
                            <td class="nowrap">
                                <input data-id="{{$productsbrochure->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $productsbrochure->is_activated? 'checked' : '' }}>

                                <a href="/dashboard/resources/{{$productsbrochure->id}}/edit" class="btn btn-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                <button type="button" data-id="{{$productsbrochure->id}}" data-title="{{$productsbrochure->name}}" class="btn btn-danger delete-product"><i class="fa fa-trash" aria-hidden="true"></i></button>
                            </td>
                        </tr>

                    @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Image</th>
                        <th>File</th>
                        <th>File Type</th>
                        <th>Created</th>
                        <th>Options</th>

                    </tr>
                </tfoot>
            </table>


        </div>
    </div>
@endsection

@section('scripts')
    @if (session()->has('message'))
    <script>
        var message = "{{Session::get('message')}}";
        Toast.fire({
            icon: 'success',
            title: message
        })

    </script>
    @endif
    <script>

        $(document).ready(function() {
            $('#productlist').DataTable({
                "order": [[ 4, "desc" ]]
            });

        } );

            $('#productlist .toggle-class').change(function() {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var brochure_id = $(this).data('id');
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '/dashboard/resources/changeStatus',
                    data: {'status': status, 'brochure_id': brochure_id},
                    success: function(data){
                    console.log(data.success)
                    }
                });
            });
            $('#productlist .delete-product').click(function(e) {
                var product_id = $(this).data('id');
                var product_title = $(this).data('title');

                $('#delete-confirm').data("id", product_id);
                $('#title-delete').html( product_title );

                e.preventDefault();
                $('#confirmModal').modal("show")

                // $.ajax({
                //     type: "DELETE",
                //     dataType: "json",
                //     url: '/dashboard/product/'+product_id,
                //     data: {'_token': '{{ csrf_token() }}','product_id': product_id},
                //     success: function(data){
                //         location.reload();
                //     }
                // });
            });
            $('#delete-confirm').click(function(e) {
                var brochure_id = $(this).data('id');
                $.ajax({
                    type: "DELETE",
                    dataType: "json",
                    url: '/dashboard/resources/'+brochure_id,
                    data: {'_token': '{{ csrf_token() }}','brochure_id': brochure_id},
                    success: function(data){
                        $('#confirmModal').modal("hide");
                        setTimeout(function(){$('#brochure_id_' + brochure_id).remove()}, 700);

                        Toast.fire({
                            icon: 'success',
                            title: 'Deleted successfully'
                        })


                    }
                });
            });


    </script>
@endsection
