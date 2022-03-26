@extends('layouts.bootcss')
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="about-us" content="about us and our works">
    <title>About Us - Brand</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.1.1/motion-ui.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="{{asset('dist/css/foundation.css')}}"/>
    <link rel="stylesheet" href="{{asset('dist/css/app.css')}}"/>

    <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">

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
        <div class="container"><a class="navbar-brand logo"  href="{{route('index')}}">Vanarmcomp</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link  " href="{{route('blog')}}">News</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="">About Us</a></li>

                    <li class="nav-item" role="presentation"><a class="nav-link"href="{{route('contact')}}"  >Contact Us</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <main class="page">

        <section class="clean-block clean-info dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info"><br>Company&nbsp;profile<br><br></h2>
                    <p class="per" style="max-width: 963px;"><br>Vanarmcomp is a leading importer and distributor of hardware, computer parts and periphery in Armenia. One of our company's major goals is the formation and maintenance of effective and reliable system of cooperation between world
                        famous computer hardware manufacturers and local businesses in Armenia. We present and promote Hardware brands in Armenia. With our over 10 years of branding, marketing and promotion experience in Armenia at Vanarmcomp we are now
                        succeeding in fast and efficient development of new brands in the Armenian Market.<br><br></p>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6"><img width="500" height="600" class="img-thumbnail" src="{{ asset('image/server2.jpg') }}"></div>
                    <div class="col-md-6">
                        <h3><br><strong><em><span style="text-decoration: underline;">The&nbsp;mission</span></em></strong><br><br></h3>
                        <div class="getting-started-info">
                            <p><br>&nbsp;With the super-high temps of growth of the IT industry and the rapidly increasing demand of high quality and effectively priced hardware and computer equipment, we set up our mission to on providing people and companies
                                of Armenia with high quality products and best service.<br><br></p>
                        </div >
                    </div >
                </div >
            </div >
        </section>
    </main>
   <!-- <footer class="page-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Sign up</a></li>
                        <li><a href="#">Downloads</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="#">Company Information</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Legal</h5>
                    <ul>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2018 Copyright Text</p>
        </div>
    </footer>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>

</body>

</html>
