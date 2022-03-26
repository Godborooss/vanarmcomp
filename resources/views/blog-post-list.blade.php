
@extends('layouts.bootcss')
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="news\blogs" content="our news and blogs form it industry">
    <title>Blog - Brand</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.1.1/motion-ui.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="{{asset('dist/css/foundation.css')}}"/>
    <link rel="stylesheet" href="{{asset('dist/css/app.css')}}"/>
    {{--<link rel="stylesheet" href="{{asset('css/app.css')}}"/>--}}
    <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link href="{{ asset('fonts/simple-line-icons.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link href="{{ asset('css/smoothproducts.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <style> #more  {display:  none;}</style>
</head>

<body>
<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
    <div class="container"><a class="navbar-brand logo" href="{{route('index')}}">Vanarmcomp</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse"
             id="navcol-1">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a class="nav-link active " href="{{route('blog')}}">News</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link  "  href="{{route('index')}}/#ourpartners">Our Partners</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('index')}}/#aboutus">About Us</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link " href="{{route('contact')}}">Contact Us</a></li>

            </ul>
        </div>
    </div>
</nav>
    <main class="page ">
        <section class="clean-block  dark">
            <div style="max-width: 800px" class="container">
                <div class="block-heading">
                    <h2 class="text-info">News</h2>
                        <p>News from IT Industry</p>
                </div>
                @foreach($blogs as $blog)
                <div style="" class="block-content">
                    <div class="clean-blog-post">
                        <div  class="row">

                            <div>

                                <h3>{{ $blog->name }}</h3>

                                <div class="info"><span class="text-muted">{{ $blog->created_at->format('d M Y') }}</span></div>

                                <p style="text-align: justify; text-justify: inter-word;">
                                    <img style="float: left; margin: 10px" width="150px" class="rounded img-fluid" src="/image/{{ $blog->image }}">
                                    {{ \Illuminate\Support\Str::limit($blog->description, 250, '') }}
                                    @if (strlen($blog->description) > 250)
                                        <span id="dots">...</span>
                                        <span id="more">{{ substr($blog->description, 250) }}</span>
                                    @endif
                                </p>

                                <button style="" onclick="myFunction()"  class="btn btn-outline-primary btn-sm" id="myBtn">Read more</button></div>

                        </div>

                    </div>

                </div>
                @endforeach
            </div>

        </section>
    </main>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>

<script>
    function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less";
            moreText.style.display = "inline";
        }
    }
</script>
</body>

</html>
