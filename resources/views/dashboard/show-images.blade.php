@extends('layouts.app')

@section('content')
    <div class="wrapper d-flex align-items-stretch">
    @include('dashboard.partials.sidebar')

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
              <p>Are you sure you want to delete this image?</p>
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
             <!-- Page Content  -->

             {{-- @include('dashboard.partials.alerts') --}}

             @include('dashboard.partials.buttons')


            <table id="newslist" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Image Preview</th>
                        <th>Path</th>
                        <th>Alt</th>
                        <th>dimension</th>
                        <th>size</th>
                        <th>Date</th>
                        <th>Options</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($imagelist as $Image)
                        <tr id="image_id_{{$Image->id}}">
                            <td>{{$Image->title}}</td>
                            <td><img src="/images/upload/{{$Image->file}}" class="img-fluid" style="width: 200px;"></td>
                            <td>{{'/images/upload/'.$Image->file}}</td>
                            <td>{{$Image->alt}}</td>
                            <td>{{$Image->size}}</td>
                            <td>{{$Image->dimension}}</td>
                            <td nowrap="nowrap">{!!$Image->created_at!!}</td>
                            <td><button type="button" data-id="{{$Image->id}}" data-title="{{$Image->title}}" class="btn btn-danger delete-image"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                        </tr>

                    @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <th>Title</th>
                        <th>Image Preview</th>
                        <th>Path</th>
                        <th>Alt</th>
                        <th>dimension</th>
                        <th>size</th>
                        <th>Date</th>
                        <th>Options</th>

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
                "order": [[ 6, "desc" ]]
            });
        } );

        $('.delete-image').click(function(e) {
            var image_id = $(this).data('id');
            var image_title = $(this).data('title');
            $('#delete-confirm').data("id", image_id);
            $('#title-delete').html( image_title );

            e.preventDefault();
            $('#confirmModal').modal("show")

            // $.ajax({
            //     type: "DELETE",
            //     dataType: "json",
            //     url: '/dashboard/news/'+news_id,
            //     data: {'_token': '{{ csrf_token() }}','news_id': news_id},
            //     success: function(data){
            //         location.reload();
            //     }
            // });
        });
        $('#delete-confirm').click(function(e) {
                var image_id = $(this).data('id');
                $.ajax({
                    type: "DELETE",
                    dataType: "json",
                    url: '/dashboard/images/'+image_id,
                    data: {'_token': '{{ csrf_token() }}','image_id': image_id},
                    success: function(data){
                        $('#confirmModal').modal("hide");
                        setTimeout(function(){$('#image_id_' + image_id).remove()}, 700);

                        Toast.fire({
                            icon: 'success',
                            title: 'Deleted successfully'
                        })


                    }
                });
            });

    </script>
@endsection
