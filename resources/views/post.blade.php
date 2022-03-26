<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{asset('admincss/bootstrap.min.css')}}"/>
    <title>Create Drag and Droppable Datatables Using jQuery UI Sortable in Laravel</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>
<body>
<div id="wrapper">
    <nav  class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
        <div class="container-fluid d-flex flex-column p-0">
            <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                <div class="sidebar-brand-icon rotate-n-15"></div>
                <div class="sidebar-brand-text mx-3"><span>VANARMCOMP</span></div>
            </a>
            <hr class="sidebar-divider my-0">
            <ul class="nav navbar-nav text-light" id="accordionSidebar">

                <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('admin')}}"><span>&nbsp;Admin page</span></a></li>

                <hr class="sidebar-divider">
                <div class="sidebar-heading">
                    <p class="mb-0">INTERFACE</p>
                </div>
                <li class="nav-item" role="presentation">
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('products.index')}}"><span>&nbsp;Products</span></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('blogs.index')}}"><span>&nbsp;Blogs/News</span></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('sorting')}}"><span>&nbsp;Sorting</span></a></li>

                <li class="nav-item" role="presentation"></li>



            </ul>
            <div class="text-center d-none d-md-inline"></div>
        </div>
    </nav>













    <div style="padding: 50px 50px 50px 50px">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">

                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table id="table" class="table table-bordered">
            <thead>
            <tr>
                <th width="30px">#</th>
                <th>nomer</th>
                <th>name</th>
                <th>detail</th>
                <th>image</th>

                <th>Created At</th>
            </tr>
            </thead>
            <tbody id="tablecontents">
            @foreach($posts as $post)
                <tr class="row1" data-id="{{ $post->id }}">

                    <td class="pl-3"><i class="fa fa-sort"></i></td>
                    <td>{{ ++$i }}</td>
                    <td>{{ $post->name }}</td>
                    <td>{{ $post->link }}</td>
                    <td><img src="/image/{{ $post->image }}" width="100px"></td>

                    <td>{{ date('d-m-Y h:m:s',strtotime($post->created_at)) }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>


    </div>

</div>





<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#table").DataTable();

        $( "#tablecontents" ).sortable({
            items: "tr",
            cursor: 'move',
            opacity: 0.6,
            update: function() {
                sendOrderToServer();
            }
        });

        function sendOrderToServer() {
            var order = [];
            var token = $('meta[name="csrf-token"]').attr('content');
            $('tr.row1').each(function(index,element) {
                order.push({
                    id: $(this).attr('data-id'),
                    position: index+1
                });
            });

            $.ajax({
                type: "POST",
                dataType: "json",
                url: "{{ url('post-sortable') }}",
                data: {
                    order: order,
                    _token: token
                },
                success: function(response) {
                    if (response.status == "success") {
                        console.log(response);
                    } else {
                        console.log(response);
                    }
                }
            });
        }
    });
</script>
</body>
</html>

