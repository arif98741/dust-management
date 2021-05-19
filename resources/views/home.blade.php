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
<body data-spy="scroll" data-target=".site-nav-target" data-offset="200" style="background-image: url({{ asset('assets/frontend/images/background'.rand(1,6).'.jpg') }})">

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
                        <a href="index.html" class="unslate_co--site-logo">Waste Management System<span>.</span></a>
                    </div>
                    <div class="col-md-5 text-right text-lg-left">

                        @include('includes.public-nav')

                    </div>
                </div>
            </div>

        </nav>


        <div class="unslate_co--section section-counter" id="stats-section">
            <div class="container">
                <div class="section-heading-wrap text-center mt-5" data-aos="fade-up">
                    <h2 class="heading-h2 text-center divider">Statistics</h2>

                </div>

                <div class="row ">
                    <div class="col-6 col-sm-6 mb-5 mb-lg-0 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="0">
                        <div class="counter-v1 text-center">
                <span class="number-wrap">
                  <span class="number number-counter" data-number="{{ $total_pending }}">0</span>
                </span>
                            <span class="counter-label">Pending Request</span>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 mb-5 mb-lg-0 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="counter-v1 text-center">
                <span class="number-wrap">
                  <span class="number number-counter" data-number="{{ $total_completed }}">0</span>
                </span>
                            <span class="counter-label">Total Collected</span>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 mb-5 mb-lg-0 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="counter-v1 text-center">
                <span class="number-wrap">
                  <span class="number number-counter" data-number="{{ $total_driver }}">0</span>
                </span>
                            <span class="counter-label">Total Drivers</span>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 mb-5 mb-lg-0 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                        <div class="counter-v1 text-center">
                <span class="number-wrap">
                  <span class="number number-counter" data-number="{{ $total_user }}">0</span>
                </span>
                            <span class="counter-label">Total Users</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <div class="row justify-content-between content-block">

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <form method="post" class="form-outline-style-v1" id="contactForm">
                            <div class="form-group row mb-0">

                                <div class="col-lg-6 form-group">
                                    <label for="name">Name</label>
                                    <input name="name" type="text" class="form-control" id="name">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label for="email">Email</label>
                                    <input name="email" type="email" class="form-control" id="email">
                                </div>
                                <div class="col-lg-12 form-group">
                                    <label for="message">Write your message...</label>
                                    <textarea name="message" id="message" cols="30" rows="7"
                                              class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12 d-flex align-items-center">
                                    <input type="submit" class="btn btn-primary mr-3" value="Send Message">
                                    <span class="submitting"></span>
                                </div>
                            </div>
                        </form>
                        <div id="form-message-warning" class="mt-4"></div>
                        <div id="form-message-success">
                            Your message was sent, thank you!
                        </div>

                    </div>

                    <div class="col-md-4" data-aos-delay="200">
                        <div class="contact-info-v1">
                            <div class="d-block">
                                <span class="d-block contact-info-label">Email</span>
                                <a href="#" class="contact-info-val">contact@dustmanagement.com</a>
                            </div>
                            <div class="d-block">
                                <span class="d-block contact-info-label">Phone</span>
                                <a href="#" class="contact-info-val">+880172000000</a>
                            </div>
                            <div class="d-block">
                                <span class="d-block contact-info-label">Address</span>
                                <address class="contact-info-val">Asulia, Daffodil International University, <br> Savar,
                                    Dhaka
                                    3910
                                </address>
                            </div>
                        </div>
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

<script src="{{ asset('assets/frontend/js/scripts-dist.js')}}"></script>
<script src="{{ asset('assets/frontend/js/main.js')}}"></script>


</body>
</html>
