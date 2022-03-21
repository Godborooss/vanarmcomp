


    <!DOCTYPE html>
<html>

<head>

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


    <style>
        #main {
            width: 200px;
            height: 200px;
            border: 1px solid #c3c3c3;
            display: flex;
            flex-wrap: nowrap;
        }

        #main div {
            width: 50px;
            height: 50px;
        }
        .photo1 {
            background-image: url("{{ asset('image/imagecomp.jpg') }}");
        }


    </style>

</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#">Brand</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="index.blade.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="features.html">Features</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="pricing.html">Pricing</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="about-us.html">About Us</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="contact-us.html">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="page landing-page">

        <section class="clean-block clean-hero photo1 " style="color:rgba(9, 162, 255, 0.85);">
            <div class="text">
                <h2>VANARMCOMP LLC</h2>
                <p><br><strong>VanArmComp LLC has been operating in the field of IT of Republic&nbsp;of Armenia for already many years.&nbsp;</strong><br><br></p>
            </div>
        </section>
        <section class="clean-block clean-info dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info"><br>Company&nbsp;profile<br><br></h2>
                    <p class="per" style="max-width: 963px;"><br>Vanarmcomp is a leading importer and distributor of hardware, computer parts and periphery in Armenia. One of our company's major goals is the formation and maintenance of effective and reliable system of cooperation between world
                        famous computer hardware manufacturers and local businesses in Armenia. We present and promote Hardware brands in Armenia. With our over 10 years of branding, marketing and promotion experience in Armenia at Vanarmcomp we are now
                        succeeding in fast and efficient development of new brands in the Armenian Market.<br><br></p>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6"><img class="img-thumbnail" src="{{ asset('image/image5.jpg') }}"></div>
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
        <section class="clean-block features">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Features</h2>
                    <p style="max-width: 613px;"><br>With the super-high temps of growth of the IT industry and the rapidly increasing demand of high quality and effectively priced hardware and computer equipment, we set up our mission to on providing people and companies of Armenia
                        with high quality products and best service.<br><br></p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-5 feature-box"><i class="icon-star icon"></i>
                        <h4>Our Computers</h4>
                        <p><br>Today we are one of the leading companies in the IT-sphere in Armenia, cooperating and serving a number of companies of various sectors of the economy, presenting many recognized international brands throughout Armenia<br></p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="icon-pencil icon"></i>
                        <h4>Security</h4>
                        <p><br>Warranty policy is another asset of VanArmComp. We provide warranty on all products we sell.<br><br></p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="icon-screen-smartphone icon"></i>
                        <h4>Invest</h4>
                        <p><br>The professional stuff of VanArmComp LLC works with enthusiasm and wish to make a big investment in the country's further development and make Personal Computers affordable for all families.<br><br></p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="icon-refresh icon"></i>
                        <h4>Addition</h4>
                        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; One of the major principals of the company has been followed very strongly and that is direct cooperation with manufacturers which stands that
                            all products imported by Vanarmcomp LLC are imported from direct manufacturers. This principle allows our company to provide best quality which is affordable for all due to very reasonable prices.<br></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="clean-block slider dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Slider</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                </div>
                <div class="carousel slide" data-ride="carousel" id="carousel-1">
                    <div class="carousel-inner" role="listbox">

                        <div class="carousel-item active"><img class="w-100 d-block" src="{{ asset('image/image1.jpg') }}" alt="Slide Image"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="{{ asset('image/image4.jpg') }}" alt="Slide Image"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="{{ asset('image/image6.jpg') }}" alt="Slide Image"></div>
                    </div>
                    <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button"
                            data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-1" data-slide-to="1"></li>
                        <li data-target="#carousel-1" data-slide-to="2"></li>
                    </ol>
                </div>
            </div>
        </section>
        <section class="clean-block about-us">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">About Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="{{ asset('image/avatar1.jpg') }}">
                            <div class="card-body info">
                                <h4 class="card-title">Arsen Mkrtchyan</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="{{ asset('image/avatar2.jpg') }}">
                            <div class="card-body info">
                                <h4 class="card-title">Armen Mkrtchyan</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="{{ asset('image/avatar3.jpg') }}">
                            <div class="card-body info">
                                <h4 class="card-title">Warduhi Pashoyan</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="clean-block about-us">
                <div class="container">

                            <div class="row justify-content-center">
                                <div class="col-sm-6 col-lg-4">
                                    <div class="card clean-card text-center">
                                        @foreach ($products as $product)

                                               <img class="card-img-top w-100 d-block" src="/image/{{ $product->image }}" width="100px">
                                            <div  class="card-body info">
                                                <h4 class="card-title"> {{ $product->name }}<br></h4>
                                                <p class="card-text">{{ $product->detail }}<br></p>
                                                <h4 class="card-title"><a href="{{ $product->detail }}">{{ $product->name }}</a><br></h4>
                                                <p>_______________________________________</p>

                                            </div>



                                        @endforeach

                                    </div>
                                </div>
                            </div>

                        </div>


            </section>
<section class="clean-block about-us">
            <div class="row">
                @foreach($products as $product)
                    <div class="small-3 medium-3 large-3 columns col-sm-6 col-lg-4 ">
                        <div class="item-wrapper">
                            <div class="img-wrapper">
                                    <a href="#">
                                    <img class="" src="/image/{{ $product->image }}" width="100px">
                                    </a>

                            </div>
                            <a href="#">
                                <h3>
                                {{$product->name}}
                                </h3>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>


</section>





            <section class="clean-block about-us">
                <div class="container">
                    <div class="block-heading">
                        <h2 class="text-info">Our Partners</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-sm-6 col-lg-4">
                            <div class="card clean-card text-center">
                                <img class="card-img-top w-100 d-block" src="../../public/image/xilence.jpg">
                                <div class="card-body info">
                                    <h4 class="card-title"><a href="https://www.xilence.net/en">XILENCE</a><br></h4>
                                    <p class="card-text">OFFICIAL DISTRIBUTOR<br></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="../../public/image/kword.jpg">
                                <div class="card-body info">
                                    <h4 class="card-title"><a href="https://www.kworld-global.com/en/">Kworld</a><br></h4>
                                    <p class="card-text">OFFICIAL DISTRIBUTOR<br></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="../../public/image/supermicro.jpg">
                                <div class="card-body info">
                                    <h4 class="card-title"><a href="https://www.supermicro.com/en/">Supermicro</a><br></h4>
                                    <p class="card-text">OFFICIAL PARTNER<br></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">



                    </div>

                    <div class="row justify-content-center">

                    </div>
                </div>
            </section>
        </section>
    </main>



    <footer class="page-footer dark">
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
    </footer>









    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>



</body>


</html>
