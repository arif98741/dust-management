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
                        <a href="index.html" class="unslate_co--site-logo">Dust Management<span>.</span></a>
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
                    <h2 class="heading-h2 text-center divider">Recent Dust Requests</h2>
                </div>


                <div class="row justify-content-between">

                    <div class="col-md-12" data-aos="fade-up" data-aos-delay="100">
                        <table class="table table-bordered">
                            <tr>
                                <th style="width: 20%">SL</th>
                                <th style="width: 20%">Dusty Type</th>
                                <th style="width: 20%">Amount</th>
                                <th style="width: 20%">Collection Address</th>
                                <th style="width: 20%">Request Date</th>
                                <th style="width: 20%">Status</th>
                            </tr>

                            @foreach($requests as $key=> $request)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $request->dust_type }}</td>
                                    <td>{{ $request->amount }}</td>
                                    <td>{{ $request->collection_address }}</td>
                                    <td>{{ date('d-m-Y h:iA',strtotime($request->created_at)) }}</td>
                                    <td>
                                        @if($request->status == 'pending')

                                            <p class="text-warning text-bold"> {{ ucfirst($request->status) }}</p>

                                        @elseif($request->status == 'completed')

                                            <p class="text-success text-bold"> {{ ucfirst($request->status) }}</p>
                                            @else
                                            <p class="text-info"> {{ ucfirst($request->status) }}</p>
                                        @endif

                                    </td>
                                </tr>

                            @endforeach
                        </table>

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
