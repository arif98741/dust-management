<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content=""/>
    <meta name="keywords" content=""/>

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/aos.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/jquery.fancybox.min.css')}}">


    <!-- Theme Style -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style1.css')}}">

</head>
<body data-spy="scroll" data-target=".site-nav-target" data-offset="200">

<nav class="unslate_co--site-mobile-menu">
    <div class="close-wrap d-flex">
        <a href="#" class="d-flex ml-auto js-menu-toggle">
            <span class="close-label">Close</span>
            <div class="close-times">
                <span class="bar1"></span>
                <span class="bar2"></span>
            </div>
        </a>
    </div>
    <div class="site-mobile-inner"></div>
</nav>


<div class="unslate_co--site-wrap">

    <div class="unslate_co--site-inner">


        <nav class="unslate_co--site-nav site-nav-target">

            <div class="container">

                <div class="row align-items-center justify-content-between text-left">

                    <div class="site-logo pos-absolute">
                        <a href="index.html" class="unslate_co--site-logo">Waste Management<span>.</span></a>
                    </div>
                    <div class="col-md-5 text-right text-lg-left">
                        @include('includes.public-nav')

                    </div>
                </div>
            </div>

        </nav>


        <!--<div class="unslate_co&#45;&#45;section" id="about-section">
          <div class="container">



            <div class="row mt-5 justify-content-between align-items-center">
              <div class="col-lg-7 mb-5 mb-lg-0" data-aos="fade-up">
                <figure class="dotted-bg">
                  <img src="images/profile.jpg" alt="Image" class="img-fluid">
                </figure>
              </div>
              <div class="col-lg-5 pl-lg-5" data-aos="fade-up"  data-aos-delay="100">
                <h3 class="mb-4 heading-h3">About John Smith</h3>
                <p >Far far away, behind the word mountains, far from the countries <a href="#">Vokalia and Consonantia</a>, there live the blind texts. </p>
                <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>

                <ul class="list-unstyled list-check d-block">
                  <li class="d-block">Far far away, behind the word mountains</li>
                  <li class="d-block">The countries Vokalia</li>
                  <li class="d-block">Duden flows by their place</li>
                </ul>
              </div>
            </div>
          </div>
        </div>-->

        <!-- END testimonial -->

        <div class="unslate_co--section" id="contact-section">
            <div class="container">
                <div class="section-heading-wrap text-center mb-5" data-aos="fade-up">
                    <h2 class="heading-h2 text-center divider">Register to Waste Management</h2>
                </div>


                <div class="row justify-content-between">

                    <div class="col-md-8" data-aos="fade-up" data-aos-delay="100">
                        <form method="post" action="{{ url('user-register') }}" class="form-outline-style-v1"
                              id="contactForm">
                            @method('post')
                            @csrf
                            <div class="form-group row mb-0">

                                <div class="col-lg-6 form-group">
                                    <label for="name">Name</label>
                                    <input name="name" value="{{ old('name') }}" type="text" class="form-control"
                                           id="name">
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong class="text-red">{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label for="email">Email</label>
                                    <input name="email" value="{{ old('email') }}" type="email" class="form-control"
                                           id="email">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong class="text-red">{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label for="email">Password</label>
                                    <input name="password" type="password" class="form-control" id="password">
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong class="text-red">{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col-md-12 d-flex align-items-center">
                                    <input type="submit" class="btn btn-primary mr-3" value="Submit">
                                    <span class="submitting"></span>
                                </div>

                            </div>
                            <div class="form-group row">

                            </div>
                        </form>
                        <div id="form-message-warning" class="mt-4"></div>
                        @if(Session::has('alert-success'))
                            <div id="form-message-success">
                                {{Session::get('alert-class') }}
                            </div>
                        @else
                            <div id="form-message-warning" class="mt-4">
                                {{ session()->get('alert-warning') }}
                            </div>

                        @endif


                    </div>


                </div>
            </div>
        </div>
    </div> <!-- END .unslate_co-site-inner -->

    <footer class="unslate_co--footer unslate_co--section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7">


                </div>
            </div>
        </div>
    </footer>


</div>


<!-- Loader -->
<div id="unslate_co--overlayer"></div>
<div class="site-loader-wrap">
    <div class="site-loader"></div>
</div>

<script src="{{ asset('assets/frontend/js/scripts-dist.js')}}"></script>
<script src="{{ asset('assets/frontend/js/main.js')}}"></script>


</body>
</html>
