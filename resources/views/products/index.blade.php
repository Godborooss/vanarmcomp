@extends('products.layout')





    <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="product-index" content="page where admin can add or remove or edit or show page">
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
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('about')}}">About Us</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link " href="{{route('contact')}}">Contact Us</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link  " href="{{route('blog')}}">News</a></li>
            </ul>
        </div>
    </div>
</nav>
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

        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Image</th>
                <th>name</th>
                <th>link</th>
                <td>Date</td>
                <th width="280px">Action</th>
            </tr>
            @foreach ($products as $product)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td><img src="/image/{{ $product->image }}" width="100px"></td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->link }}</td>
                    <td>{{ $product->created_at->format('d M Y') }}</td>
                    <td>
                        <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>

                            <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>


            @endforeach

        </table>
        {{ $products->links('vendor.pagination.bootstrap-4') }}
    </div>

</div>

<script src="{{asset('admincss/jquery.min.js')}}"></script>
<script src="{{asset('admincss/bootstrap.min.js')}}"></script>
<script src="{{asset('admincss/theme.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>

</body>

</html>





























