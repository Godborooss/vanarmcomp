
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="admin" content="admin page on our site">
    <title>Blank Page - Brand</title>
    <link rel="stylesheet" href="{{asset('admincss/bootstrap.min.css')}}"/>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
</head>

<body id="page-top">
<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
    <div class="container"><a class="navbar-brand logo" href="{{route('index')}}">Vanarmcomp</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse"
             id="navcol-1">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a class="nav-link" href="features.html">Features</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="pricing.html">Pricing</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('about')}}">About Us</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link " href="{{route('contact')}}">Contact Us</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link  " href="{{route('blog')}}">News</a></li>
            </ul>
        </div>
    </div>
</nav>
<div id="wrapper">
    <nav style="margin-top: 4%" class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
        <div class="container-fluid d-flex flex-column p-0">
            <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                <div class="sidebar-brand-icon rotate-n-15"></div>
                <div class="sidebar-brand-text mx-3"><span>VANARMCOMP</span></div>
            </a>
            <hr class="sidebar-divider my-0">
            <ul class="nav navbar-nav text-light" id="accordionSidebar">
                <li class="nav-item" role="presentation"><a class="nav-link" href="index.html"><span>&nbsp;Dashboard</span></a></li>



                <li class="nav-item" role="presentation"></li>
                <hr class="sidebar-divider">

                <li class="nav-item" role="presentation">
                    <div><a class="btn btn-link nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-3" href="#collapse-3" role="button">&nbsp;<span>Pages</span></a>
                        <div class="collapse" id="collapse-3">
                            <div class="bg-white border rounded py-2 collapse-inner">
                                <h6 class="collapse-header">Managing:</h6><a class="collapse-item" href="{{route('products.index')}}">products manager</a><a class="collapse-item" href="{{route('blogs.index')}}">blogs manager</a><a class="collapse-item" href="{{route('sorting')}}">Sorting</a>
                                <h6 class="collapse-header">OTHER PAGES:</h6><a class="collapse-item" href="404.html">404 Page</a><a class="collapse-item" href="admin.blade.php">Blank Page</a></div>
                        </div>
                    </div>

                </li>

            </ul>
            <div class="text-center d-none d-md-inline"></div>
        </div>
    </nav>
    <div style="padding: 50px 50px 50px 50px">
        <div  class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">

                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('blogs.create') }}"> Create New Blog</a>
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table  class="table table-bordered">
            <tr >
                <th>No</th>
                <th>Image</th>
                <th>Name</th>
                <th>Description</th>
                <td>Date</td>
                <th width="280px">Action</th>
            </tr>
            @foreach ($blogs as $blog)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td><img src="/image/{{ $blog->image }}" width="100px"></td>
                    <td>{{ $blog->name }}</td>
                    <td>{{ $blog->description }}</td>
                    <td>{{ $blog->created_at->format('d M Y') }}</td>
                    <td>
                        <form action="{{ route('blogs.destroy',$blog->id) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('blogs.show',$blog->id) }}">Show</a>

                            <a class="btn btn-primary" href="{{ route('blogs.edit',$blog->id) }}">Edit</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
    <script src="{{asset('admincss/jquery.min.js')}}"></script>
    <script src="{{asset('admincss/bootstrap.min.js')}}"></script>
    <script src="{{asset('admincss/theme.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>

</body>

</html>
