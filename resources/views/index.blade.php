 <!DOCTYPE html>
<html lang="en">
<head>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('dist/css/app.css')}}"/>
    <meta charset="utf-8">
    <meta  name="description" content="index page on site">
    <title>index</title>
    <link href="{{ asset('fonts/simple-line-icons.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/smoothproducts.css') }}" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <style>
        html {
            scroll-behavior: smooth;
        }
        .bookmark-item {
            background-color: rgba(0,0,0,0); /* nets out to transparent */
            transition: all 400ms ease-in-out;
        }
        .bookmark-item:hover {
            background-color: rgba(12,12,13,0.1); /* pale gray */
            transition: all 400ms ease-in-out;
        }
        footer {
            text-align: center;
            padding: 3px;
            background-color: #2a2828;
            color: white;
        }
        #main {
            width: 300px;
            height: 300px;
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
    <div class="container"><a class="navbar-brand logo" href="{{route('index')}}">Vanarmcomp</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse"
             id="navcol-1">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a class="nav-link active  " href="{{route('blog')}}">News</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link active "  href="#ourpartners">Our Partners</a></li>
              <li class="nav-item" role="presentation"><a class="nav-link active" href="#aboutus">About Us</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link active " href="{{route('contact')}}">Contact Us</a></li>
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
                    <h2 id="aboutus" style="color: blue" ><br>Company&nbsp;profile<br><br></h2>
                    <p class="per" style="max-width: 963px;"><br>Vanarmcomp is a leading importer and distributor of hardware, computer parts and periphery in Armenia. One of our company's major goals is the formation and maintenance of effective and reliable system of cooperation between world
                        famous computer hardware manufacturers and local businesses in Armenia. We present and promote Hardware brands in Armenia. With our over 10 years of branding, marketing and promotion experience in Armenia at Vanarmcomp we are now
                        succeeding in fast and efficient development of new brands in the Armenian Market.<br><br></p>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6"><img class="img-thumbnail" alt="missions"
                                                height="367px" width="540px" src="{{ asset('image/ourmission.jpg') }}"></div>
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
                    <p style="max-width: 613px;">With the super-high temps of growth of the IT industry and the rapidly increasing demand of high quality and effectively priced hardware and computer equipment, we set up our mission to on providing people and companies of Armenia
                        with high quality products and best service.<br><br></p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-5 feature-box"><i class="icon-star icon"></i>
                        <h3>Our Computers</h3>
                        <p>Today we are one of the leading companies in the IT-sphere in Armenia, cooperating and serving a number of companies of various sectors of the economy, presenting many recognized international brands throughout Armenia<br></p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="icon-pencil icon"></i>
                        <h3>Security</h3>
                        <p>Warranty policy is another asset of VanArmComp. We provide warranty on all products we sell.<br><br></p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="icon-screen-smartphone icon"></i>
                        <h3>Invest</h3>
                        <p>The professional stuff of VanArmComp LLC works with enthusiasm and wish to make a big investment in the country's further development and make Personal Computers affordable for all families.<br><br></p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="icon-refresh icon"></i>
                        <h3>Addition</h3>
                        <p>One of the major principals of the company has been followed very strongly and that is direct cooperation with manufacturers which stands that
                            all products imported by Vanarmcomp LLC are imported from direct manufacturers. This principle allows our company to provide best quality which is affordable for all due to very reasonable prices.<br></p>
                    </div>
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
                        <div class="card clean-card text-center"><img height="" width="" alt="Arsen"  class="card-img-top w-100 d-block" src="{{ asset('image/avatar1.jpg') }}">
                            <div class="card-body info">
                                <p style="font-size: 23px" class="card-title">Arsen Mkrtchyan</p>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                 </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center"><img alt="Armen" class="card-img-top w-100 d-block" height="" width=""  src="{{ asset('image/avatar2.jpg') }}">
                            <div class="card-body info">
                                <p style="font-size: 23px" class="card-title">Armen Mkrtchyan</p>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center"><img alt="Warduhi" class="card-img-top w-100 d-block" height="" width="347px"  src="{{ asset('image/avatar3.jpg') }}">
                            <div class="card-body info">
                                <p  style="font-size: 23px" class="card-title">Warduhi Pashoyan</p>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>






            <section class="clean-block about-us">
                <div class="container">
                    <div class="block-heading">
                        <h2 id="ourpartners" class="bookmark-item text-info">Our Partners</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                    </div>

                    <div  style="padding: 0  0 0 125px" class=" justify-content-center">
                        <div class="row">
                            @foreach($products as $product )

                                <div class=" small-3 medium-3 large-3 columns col-sm-6 col-lg-3">
                                    <div class="item-wrapper">
                                        <div class="img-wrapper">
                                            <a href="{{$product->link}}">
                                                <img alt="companies" class="" height="" src="/image/{{ $product->image }}" width="100px">
                                            </a>

                                        </div>

                                    </div>
                                </div>
                            @endforeach
                        </div>





                    </div>

                    <div class="row justify-content-center">

                    </div>
                </div>
            </section>
        </section>
    </main>









<footer>
    <p>Vanarmcomp LLC<br>
        <a href="mailto:info@vanarmcomp.com">info@vanarmcomp.com</a></p>
</footer>


   <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/smoothproducts.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/theme.js')}}"></script>





</body>


</html>
