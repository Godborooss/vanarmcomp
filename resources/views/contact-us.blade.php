@extends('layouts.bootcss')
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="contact-us" content="site where you can contact with us">
    <title>Contact Us - Brand</title>
    <link rel="stylesheet" href="../../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="../../public/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="../../public/css/smoothproducts.css">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.1.1/motion-ui.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="{{asset('dist/css/foundation.css')}}"/>
    <link rel="stylesheet" href="{{asset('dist/css/app.css')}}"/>
    {{--<link rel="stylesheet" href="{{asset('css/app.css')}}"/>--}}
    <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link href="{{ asset('fonts/simple-line-icons.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link href="{{ asset('css/smoothproducts.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="{{route('index')}}">Vanarmcomp</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link  " href="{{route('blog')}}">News</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link  "  href="{{route('index')}}/#ourpartners">Our Partners</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('index')}}/#aboutus">About Us</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="{{route('contact')}}">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page contact-us-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Contact Us</h2>
                    <h4>43 Knunyanc, Vanadzor, 2005, Armenia</h4>
                    <h4>Tel: +37493756055 </h4>

                   <p><a href="mailto:info@vanarmcomp.com">info@vanarmcomp.com</a></p>
<br>
                    <p style="font-size: 25px">Cooperation Inquery </p>
                </div>
                <div class="container mt-4">
                    <!-- Success message -->
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    @endif
                    <form action="" method="post" action="{{ route('contact.store') }}">
                        <!-- CROSS Site Request Forgery Protection -->
                        @csrf


                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name">
                            @if ($errors->has('name'))
                                <div class="error">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email">
                            @if ($errors->has('email'))
                                <div class="error">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone">
                            @if ($errors->has('phone'))
                                <div class="error">
                                    {{ $errors->first('phone') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" class="form-control {{ $errors->has('companyname') ? 'error' : '' }}" placeholder="" name="companyname" id="companyname">
                            @if ($errors->has('companyname'))
                                <div class="error">
                                    {{ $errors->first('companyname') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message" id="message" rows="4"></textarea>
                            @if ($errors->has('message'))
                                <div class="error">
                                    {{ $errors->first('message') }}
                                </div>
                            @endif
                        </div>
                        <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
                    </form>
                </div>
            </div>
        </section>
    </main>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>

</body>

</html>
