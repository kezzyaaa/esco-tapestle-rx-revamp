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
                  <p>Are you sure you want to delete this news?</p>
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


            <table id="newslist" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Created</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($newslist as $news)
                        <tr id="news_id_{{$news->id}}">
                            <td>{{$news->title}}</td>
                            <td>{{$news->author}}</td>
                            <td>{!!$news->description!!}</td>
                            <td>{{$news->newsCategory->title}}</td>
                            <td class="nowrap">{{$news->created_at}}</td>
                            <td class="nowrap">
                                <input data-id="{{$news->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $news->is_activated? 'checked' : '' }}>
                                {{-- <button type="button" class="btn {{$news->is_activated?'btn-warning':'btn-success'}}" data-toggle="modal" data-target="#exampleModal"><i class="fa {{$news->is_activated?'fa-times':'fa-check'}}" aria-hidden="true"></i></button> --}}
                                {{-- <button type="button" class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i></button> --}}

                                <a href="/dashboard/news/{{$news->id}}/edit" class="btn btn-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                <button type="button" data-id="{{$news->id}}" data-title="{{$news->title}}" class="btn btn-danger delete-news"><i class="fa fa-trash" aria-hidden="true"></i></button>
                            </td>
                        </tr>

                    @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Created</th>
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
                "order": [[ 4, "desc" ]]
            });
        } );


        $('.toggle-class').change(function() {
            var status = $(this).prop('checked') == true ? 1 : 0;
            var news_id = $(this).data('id');

            $.ajax({
                type: "GET",
                dataType: "json",
                url: '/dashboard/news/changeStatus',
                data: {'status': status, 'news_id': news_id},
                success: function(data){
                console.log(data.success)
                }
            });
        });

        $('.delete-news').click(function(e) {
            var news_id = $(this).data('id');
            var news_title = $(this).data('title');

            $('#delete-confirm').data("id", news_id);
            $('#title-delete').html( news_title );

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
            var news_id = $(this).data('id');

            $.ajax({
                type: "DELETE",
                dataType: "json",
                url: '/dashboard/news/'+news_id,
                data: {'_token': '{{ csrf_token() }}','news_id': news_id},
                success: function(data){
                    $('#confirmModal').modal("hide");
                    setTimeout(function(){$('#news_id_' + news_id).remove()}, 700);
                    // setTimeout(function(){$('#alert-confirm').fadeIn(300).delay(2000).fadeOut(300)}, 500);
                    // setTimeout(function(){ location.reload() }, 2500);
                    // $('.toast').toast('show');

                    Toast.fire({
                        icon: 'success',
                        title: 'Deleted successfully'
                    })

                }
            });
        });


    </script>
@endsection
