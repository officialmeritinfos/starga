@extends('home.base')
@section('content')


    <!-- banner-section start -->
    <section class="banner-section banner--three">
        <div class="banner-elements-image anim-bounce"><img src="{{asset('home/images/elements/home3-banner.png')}}" alt="image"></div>
        <div class="shape"><img src="{{asset('home/images/elements/banner-three-shape.png')}}" alt="image"></div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-content-area">
                        <div class="banner-content">
                            <span class="banner-sub-title">Turn Your Passion to Profit !</span>

                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="{{asset('home/img/gpc-mining.jpg')}}" alt="First slide">
                                        <div class="carousel-caption">
                                            <h2 style="color: white;"><b>RANFURT PACKAGE PLAN</b></h2>
                                            <a href="{{route('register')}}" class="btn btn-danger btn-lg">Explore</a>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('home/img/tesla1.jpg')}}" alt="Second slide">
                                        <div class="carousel-caption">
                                            <h2><b>TESLA SUPERCHARGER</b></h2>
                                            <a href="{{url('tesla')}}" class="btn btn-danger btn-lg">Explore</a>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('home/img/atm1.jpg')}}" alt="Third slide">
                                        <div class="carousel-caption">
                                            <h2 style="color: white;"><b>BITCOIN ATM</b></h2>
                                            <a href="{{url('atm')}}" class="btn btn-danger btn-lg">Explore</a>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <h2 class="banner-title">Best Defi Investment Platform/ Simplified Investment Platform</h2>
                            <p>Have you ever thought about financial freedom? Do you plan on how to get financial freedom? A lot of people out here
                                are chasing financial freedom but for lack of information they don't know the steps to take. Finding yourself on this page
                                is not a coincidence, rather it is a signal that financial freedom is only steps away if you make the right choice, the right
                                decision by joining {{$siteName}}
                            </p>
                        </div>
                        <div class="banner-btn-area">
                            <a href="{{route('register')}}" class="btn btn-danger btn-hover">Get Started now!</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->



    <!-- counter-section start -->

    <!-- counter-section end -->

    <!-- features-section start -->
    <section class="features-section pt-120 pb-120">
        <div class="shape"><img src="{{asset('home/images/elements/invest-shape-two.png')}}" alt="image"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-header text-center">
                        <span class="section-subtitle"><img src="{{asset('home/img/logo.png')}}" style="width: 50px;"> Our Amazing Features</span>
                        <h2 class="section-title">Investing For Everyone</h2>
                        <p>We are a global investment firm dedicated to maximizing profits while minimizing financial risks.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-4">
                    <div class="feature-thumb wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s">
                        <img src="{{asset('home/images/elements/features2.png')}}" alt="image">
                    </div>
                </div>
                <div class="col-xl-4 offset-md-1">
                    <div class="feature-item wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
                        <div class="icon">
                            <div class="icon-inner">

                                <i class="fa fa-user-plus fa-2x" style="color: white;"></i>
                            </div>
                        </div>
                        <div class="content">
                            <h3 class="title">Sign up in minutes</h3>
                            <p>Sign Up - Register and fill in your details and do the required KYC</p>
                            <a href="register">get started</a>
                        </div>
                    </div><!-- feature-item end -->
                    <div class="feature-item wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s">
                        <div class="icon">
                            <div class="icon-inner">

                                <i class="fa fa-chart-bar fa-2x" style="color: white;"></i>
                            </div>
                        </div>
                        <div class="content">
                            <h3 class="title">Investing Made Easy</h3>
                            <p>Choose from four simple starting option - cautious , balanced & adventurous.We’ll take care of the rest!</p>
                            <a href="{{url('plans')}}">read more</a>
                        </div>
                    </div><!-- feature-item end -->
                    <div class="feature-item wow fadeIn" data-wow-duration="2s" data-wow-delay="0.7s">
                        <div class="icon">
                            <div class="icon-inner">

                                <i class="fa fa-layer-group fa-2x" style="color: white;"></i>
                            </div>
                        </div>
                        <div class="content">
                            <h3 class="title">Build Your Porfolio</h3>
                            <p>We’ll help you pick an investment strategy that reflects your interests,beliefs and goals.</p>
                            <a href="{{url('plans')}}">explore our investing </a>
                        </div>
                    </div><!-- feature-item end -->
                </div>
            </div>
        </div>
    </section>
    <!-- features-section end -->

    <!-- choose-us-section start -->
    <section class="choose-us-section pt-120 pb-120 bg_img" data-background="">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-header text-center">
                        <span class="section-subtitle"><img src="{{asset('home/img/logo.png')}}" style="width: 50px;"> Boost your Money</span>
                        <h2 class="section-title">Why you Should Choose Us</h2>
                        <p>Our service gives you better result and savings, as per your requirement and you can manage your investments from anywhere either form home or work place,any time.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="row m-0">
                <div class="col-lg-12 p-0">
                    <div class="choose-us-slider owl-carousel">
                        <div class="choose-item text-center">
                            <div class="choose-thumb">
                                <img src="{{asset('home/images/choose-us/1.png')}}" alt="image">
                            </div>
                            <div class="choose-content">
                                <h3 class="title">Fast Profit </h3>
                                <p>We're talking about ways you can make money fast.Invest money and get reward, bonus and profit</p>
                                <!-- <a href="#0" class="read-more-btn">read more<i class="fa fa-long-arrow-right"></i></a> -->
                            </div>
                        </div><!-- choose-item end -->
                        <div class="choose-item text-center">
                            <div class="choose-thumb">
                                <img src="{{asset('home/images/choose-us/2.png')}}" alt="image">
                            </div>
                            <div class="choose-content">
                                <h3 class="title">Instant Withdraw</h3>
                                <p>We’re extremely excited to launch instant withdrawals. You can deposit, grow and withdraw funds in just a few clicks.</p>
                                <!-- <a href="#0" class="read-more-btn">read more<i class="fa fa-long-arrow-right"></i></a> -->
                            </div>
                        </div><!-- choose-item end -->
                        <div class="choose-item text-center">
                            <div class="choose-thumb">
                                <img src="{{asset('home/images/choose-us/3.png')}}" alt="image">
                            </div>
                            <div class="choose-content">
                                <h3 class="title">Dedicated Server</h3>
                                <p>Dedicated server hosting with 100% guaranteed network uptime.There's no sharing of CPU time, RAM or bandwidth</p>
                                <!-- <a href="#0" class="read-more-btn">read more<i class="fa fa-long-arrow-right"></i></a> -->
                            </div>
                        </div><!-- choose-item end -->
                        <div class="choose-item text-center">
                            <div class="choose-thumb">
                                <img src="{{asset('home/images/choose-us/4.png')}}" alt="image">
                            </div>
                            <div class="choose-content">
                                <h3 class="title">DDoS Protection</h3>
                                <p>To protect your resources from modern DDoS attacks is through a multi-layer deployment of purpose-built DDoS mitigation </p>
                                <!-- <a href="#0" class="read-more-btn">read more<i class="fa fa-long-arrow-right"></i></a> -->
                            </div>
                        </div><!-- choose-item end -->
                        <div class="choose-item text-center">
                            <div class="choose-thumb">
                                <img src="{{asset('home/images/choose-us/5.png')}}" alt="image">
                            </div>
                            <div class="choose-content">
                                <h3 class="title">24/7 Support</h3>
                                <p>Our Technical Support team is available for any questions.Our multilingual 24/7 support allows to keep in touch.</p>
                                <a href="cdn-cgi/l/email-protection#25464a4b514446516557444b435057514c4b5340565148404b510b464a48" class="read-more-btn">contact us<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div><!-- choose-item end -->
                        <div class="choose-item text-center">
                            <div class="choose-thumb">
                                <img src="{{asset('home/images/choose-us/1.png')}}" alt="image">
                            </div>
                            <div class="choose-content">
                                <h3 class="title">Fast Profit </h3>
                                <p>We're talking about ways you can make money fast.Invest money and get reward, bonus and profit</p>
                                <!-- <a href="#0" class="read-more-btn">get started<i class="fa fa-long-arrow-right"></i></a> -->
                            </div>
                        </div><!-- choose-item end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- choose-us-section end -->


    <!-- offer-section start -->
    <section class="offer-section pt-120 pb-120 bg_img" data-background="{{asset('home/images/offer-bg.png')}}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-header text-center wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s">
                        <span class="section-subtitle"><img src="{{asset('home/img/logo.png')}}" style="width: 50px;"> Our mission is to help our User</span>
                        <h2 class="section-title">To Maximize Income Passively</h2>
                        <a href="{{url('services')}}" class="btn btn-danger text-small btn-hover mt-30">what we offer</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="offer-slider owl-carousel">
                        <div class="offer-item">
                            <div class="icon">
                                <img src="{{asset('home/images/icons/offer/1.svg')}}" alt="icon">
                            </div>
                            <div class="content">
                                <h3 class="title">smart deposit</h3>
                                <p>Best way to put your idle money to work.</p>
                                <a href="{{url('smartdeposit')}}" target="_blank" class="read-more-btn">read more<i class="icofont-long-arrow-right"></i></a>
                            </div>
                        </div><!-- offer-item end -->
                        <div class="offer-item">
                            <div class="icon">
                                <img src="{{asset('home/images/icons/offer/2.svg')}}" alt="icon">
                            </div>
                            <div class="content">
                                <h3 class="title">One - Tap Invest</h3>
                                <p>Invest without net baning/debit card.</p>
                                <!-- <a href="#0" class="read-more-btn">read more<i class="icofont-long-arrow-right"></i></a> -->
                            </div>
                        </div><!-- offer-item end -->
                        <div class="offer-item">
                            <div class="icon">
                                <img src="{{asset('home/images/icons/offer/3.svg')}}" alt="icon">
                            </div>
                            <div class="content">
                                <h3 class="title">invest & saving</h3>
                                <p>Grow your saving by investing as little as $50</p>
                                <a href="{{url('investsave')}}" target="_blank" class="read-more-btn">read more<i class="icofont-long-arrow-right"></i></a>
                            </div>
                        </div><!-- offer-item end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- offer-section end -->


    <!-- // section -->

    <!-- deposit-withdraw-section start -->
    <section class="deposit-withdraw-section pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-header text-center">
                        <span class="section-subtitle"><img src="{{asset('home/img/logo.png')}}" style="width: 50px;"> Convenient money</span>
                        <h2 class="section-title">Deposit & Withdrawal</h2>
                        <p>Depositing or withdrawing money is simple.We support several payment methods, which depend on what country your payment account is located in.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 order-lg-1 order-2">
                    <div class="feature-item">
                        <div class="icon">
                            <div class="icon-inner">
                                <img src="{{asset('home/images/icons/payment-option/ft1.svg')}}" alt="icon">
                            </div>
                        </div>
                        <div class="content">
                            <h3 class="title">No Limits</h3>
                            <p>Unlimited maximum withdrawal amount</p>
                        </div>
                    </div><!-- feature-item end -->
                    <div class="feature-item">
                        <div class="icon">
                            <div class="icon-inner">
                                <img src="{{asset('home/images/icons/payment-option/ft2.svg')}}" alt="icon">
                            </div>
                        </div>
                        <div class="content">
                            <h3 class="title">Withdrawal in 24 /7</h3>
                            <p>Deposit – instantaneous</p>
                        </div>
                    </div><!-- feature-item end -->
                </div>
                <div class="col-lg-5 order-lg-2 order-1">
                    <div class="dep-wth-option-area wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s">
                        <span class="circle one"></span>
                        <span class="circle two"></span>
                        <span class="circle three"></span>
                        <span class="circle four"></span>
                        <!-- <a href="#0" class="card-item">
                      <span class="icon"><img src="{{asset('home/images/icons/payment-option/card.svg')}}" alt="image"></span>
                      <span class="caption">Credit Card</span>
                    </a>
                     -->
                        <!-- card-item end -->

                        <!-- <a href="#0" class="card-item">
                      <span class="icon"><img src="{{asset('home/images/icons/payment-option/paypal.svg')}}" alt="image"></span>
                      <span class="caption">Pay pal</span>
                    </a> -->

                        <a href="#0" class="card-item">
                            <span class="icon"><img src="{{asset('home/images/icons/payment-option/bitcoin.svg')}}" alt="image"></span>
                            <span class="caption">Bitcoin</span>
                        </a>
                        <!-- card-item end -->

                        <!-- <a href="#0" class="card-item">
                      <span class="icon"><img src="{{asset('home/images/icons/payment-option/litecoin.svg')}}" alt="image"></span>
                      <span class="caption">Litecoin</span>
                    </a>
                     -->
                        <!-- card-item end -->

                        <a href="#0" class="card-item">
                            <span class="icon"><img src="{{asset('home/images/icons/payment-option/ethereum.svg')}}" alt="image"></span>
                            <span class="caption">ethereum</span>
                        </a>

                        <!-- card-item end -->
                        <!-- <a href="#0" class="card-item">
                      <span class="icon"><img src="{{asset('home/images/icons/payment-option/ripple.svg')}}" alt="image"></span>
                      <span class="caption">Ripple</span>
                    </a>
                     -->
                        <!-- card-item end -->
                        <!-- <a href="#0" class="text-btn">view all option</a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- deposit-withdraw-section end -->

    <!-- community-section start -->
    <section class="community-section pt-120 pb-120">
        <div class="element-shape"><img src="{{asset('home/images/elements/criptocurrency-shape.png')}}" alt="image"></div>
        <div class="element-img anim-bounce"><img src="{{asset('home/images/elements/criptocurrency-el.png')}}" alt="image"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-header text-center wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s">
                        <span class="section-subtitle"><img src="{{asset('home/img/logo.png')}}" style="width: 50px;"> We support</span>
                        <h2 class="section-title">Cryptocurrency Community</h2>
                        <p>Access a world of dynamic investment opportunities, buy into businesses you believe in and share in their success.You may make additional deposits at any time. All our
                            payments are instant payments.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row mb-none-30">
                        <div class="col-xl-5 offset-xl-5 col-md-6">
                            <div class="community-item community-item--style2 mb-30">
                                <div class="icon">

                                    <i class="fa fa-chalkboard-teacher fa-3x"></i>
                                </div>
                                <div class="content">
                                    <h3 class="title">Simplicity</h3>
                                    <p>We’re eliminating complex user experiences.</p>
                                    <!-- <a href="#0" class="read-more-btn">read more<i class="icofont-long-arrow-right"></i></a> -->
                                </div>
                            </div><!-- community-item end -->
                        </div>
                        <div class="col-xl-5 offset-xl-6 col-md-6">
                            <div class="community-item community-item--style2 mb-30">
                                <div class="icon">

                                    <i class="fa fa-lock fa-3x"></i>
                                </div>
                                <div class="content">
                                    <h3 class="title">security</h3>
                                    <p>Enhanced security features like multi-factor </p>
                                    <!-- <a href="#0" class="read-more-btn">read more<i class="icofont-long-arrow-right"></i></a> -->
                                </div>
                            </div><!-- community-item end -->
                        </div>
                        <div class="col-xl-5 offset-xl-7 col-md-6">
                            <div class="community-item community-item--style2 mb-30">
                                <div class="icon">

                                    <i class="fa fa-headset fa-3x"></i>
                                </div>
                                <div class="content">
                                    <h3 class="title">support</h3>
                                    <p>Get all the support you need for your Investment</p>
                                    <a href="mailto:{{$web->email}}"
                                       class="read-more-btn">contact us<i class="icofont-long-arrow-right"></i></a>
                                </div>
                            </div><!-- community-item end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- community-section end -->


    <!-- affiliate-features-section start -->
    <section class="affiliate-features-section style--tow pt-120 pb-120">
        <div class="shape-el"><img src="{{asset('home/images/elements/affiliate-round-shape.png')}}" alt="image"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row mb-none-30">
                        <div class="col-md-6">
                            <div class="affiliate-features-item item--style2 text-center mb-30">
                                <div class="icon">

                                    <i class="fa fa-chart-area fa-3x " style="color: orange;"></i>
                                </div>
                                <span class="subtitle">Enjoy unlimited</span>
                                <h3 class="title">Commissions</h3>
                            </div>
                        </div><!-- affiliate-features-item end -->
                        <div class="col-md-6">
                            <div class="affiliate-features-item item--style2 text-center mb-30">
                                <div class="icon">

                                    <i class="fa fa-coins fa-3x " style="color: orange;"></i>
                                </div>
                                <span class="subtitle">Extra Bonus and</span>
                                <h3 class="title">Promotions</h3>
                            </div>
                        </div><!-- affiliate-features-item end -->
                        <div class="col-md-6">
                            <div class="affiliate-features-item item--style2 text-center mb-30">
                                <div class="icon">

                                    <i class="fa fa-headset fa-3x " style="color: orange;"></i>
                                </div>
                                <span class="subtitle">Get top notch</span>
                                <h3 class="title">Support</h3>
                            </div>
                        </div><!-- affiliate-features-item end -->
                        <div class="col-md-6">
                            <div class="affiliate-features-item item--style2 text-center mb-30">
                                <div class="icon">

                                    <i class="fa fa-user-plus fa-3x " style="color: orange;"></i>
                                </div>
                                <span class="subtitle">Joining is</span>
                                <h3 class="title">Free & Easy</h3>
                            </div>
                        </div><!-- affiliate-features-item end -->
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-5">
                    <div class="affiliate-features-content">
                        <div class="section-header">
                            <span class="section-subtitle"><img src="{{asset('home/img/logo.png')}}" style="width: 50px;"> Earn The Big Money</span>
                            <h2 class="section-title">Affiliate Program</h2>
                            <p>Our affiliate program can increase your income by receiving percentage from the purchases made by your referrals into. </p>
                        </div>
                        <p>Invite other users (for example, your friends, co-workers, etc.) to join the project. After registration they will be your referrals; and if they purchase any item on our web site you receive 10% reward.</p>
                        <a href="{{url('affiliate')}}" class="btn btn-danger btn-hover text-small">Get started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- affiliate-features-section end -->



    <!-- testimonial-section start -->
    <section class="testimonial-section pt-xl-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-header text-center">
                        <span class="section-subtitle"><img src="{{asset('home/img/logo.png')}}" style="width: 50px;"> Testimonials</span>
                        <h2 class="section-title">Over 40,000 Happy Customers</h2>
                        <p>We have many happy investors invest with us .Some impresions from our Customers! PLease read some of the lovely things our Customers say about us.</p>
                        <div class="btn-area">
                            <a href="#0" class="btn btn-danger text-small" data-toggle="modal" data-target="#signUpModal">join us</a>
                            <a href="{{url('services')}}" class="btn btn-danger text-small">what we offer</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-wrapper style--one d-lg-flex flex-wrap justify-content-between d-none">
                        <div class="testimonial-single">
                            <div class="thumb">
                                <img src="{{asset('home/images/testimonial/1.jpg')}}" alt="image">
                            </div>
                            <div class="details text-center">
                                <p>
                                    I have kept my eye out over the years whenever there is a printed review of
                                    portfolio management software. I can say unequivocally that there is not a
                                    better all-around portfolio management software program out there today.
                                    {{$siteName}} handles everything... even those esoteric transactions that
                                    no one thinks about talking about in the media. And, Quicken is not sophisticated
                                    enough to handle
                                    the transactions as seamlessly as {{$siteName}} . {{$siteName}} is a GEM!
                                </p>
                                <h4 class="name">Pierre Cox</h4>
                                <span class="client-details">Switzerland, 28th April,2020</span>
                                <span class="arrow-wrap"><span class="arrow"></span></span>
                            </div>
                        </div><!-- testimonial-single end -->
                        <div class="testimonial-single">
                            <div class="thumb">
                                <img src="{{asset('home/images/testimonial/2.jpg')}}" alt="image">
                            </div>
                            <div class="details text-center">
                                <p>
                                    This is the best portfolio management program I have used it my 30+years of investing. I would recommend {{$siteName}} to anyone with a portfolio of any size.
                                </p>
                                <h4 class="name">Thomas Crane</h4>
                                <span class="client-details">Australia, 6th May,2020</span>
                                <span class="arrow-wrap"><span class="arrow"></span></span>
                            </div>
                        </div><!-- testimonial-single end -->
                        <div class="testimonial-single">
                            <div class="thumb">
                                <img src="{{asset('home/images/testimonial/3.jpg')}}" alt="image">
                            </div>
                            <div class="details text-center">
                                <p>
                                    {{$siteName}} puts me in a position of strength as the CEO of my investment "company". I especially love the year-end reports to see how I've done vs. the professionals or the S&P. {{$siteName}} reports cover so many aspects of portfolio management! Keep up the good work!
                                </p>
                                <h4 class="name">Alvaro Mcgee</h4>
                                <span class="client-details">Germany, 3rd April,2018</span>
                                <span class="arrow-wrap"><span class="arrow"></span></span>
                            </div>
                        </div><!-- testimonial-single end -->
                        <div class="testimonial-single active">
                            <div class="thumb">
                                <img src="{{asset('home/images/testimonial/4.jpg')}}" alt="image">
                            </div>
                            <div class="details text-center">
                                <p>
                                    I don't know what I would do without it. {{$siteName}} helps me track and plan my investments. Even though my funds are limited and I am electronically challenged, it works for me. I believe it is a valuable tool for everyone regardless of the size or complexity of accounts. It works well for businesses and individuals.
                                </p>
                                <h4 class="name">Miranda Shaffer</h4>
                                <span class="client-details">Germany, 26th April,2020</span>
                                <span class="arrow-wrap"><span class="arrow"></span></span>
                            </div>
                        </div><!-- testimonial-single end -->
                        <div class="testimonial-single">
                            <div class="thumb">
                                <img src="{{asset('home/images/testimonial/5.jpg')}}" alt="image">
                            </div>
                            <div class="details text-center">
                                <p>
                                    {{$siteName}} is a great program for an individual investor to monitor their investments.
                                </p>
                                <h4 class="name">Ignacio Mcpherson</h4>
                                <span class="client-details">Australia, 15th April,2019</span>
                                <span class="arrow-wrap"><span class="arrow"></span></span>
                            </div>
                        </div><!-- testimonial-single end -->
                        <div class="testimonial-single">
                            <div class="thumb">
                                <img src="{{asset('home/images/testimonial/6.jpg')}}" alt="image">
                            </div>
                            <div class="details text-center">
                                <p class="text-sm">
                                    After reviewing several investment management software programs to manage my portfolios,
                                    this one is the best on the market, and I'm very happy I chose {{$siteName}}.
                                    The program is simple and easy to use, yet powerful. Thank you {{$siteName}} Team.
                                </p>
                                <h4 class="name">Brian Robertson</h4>
                                <span class="client-details">Switzerland, 3rd Sept,2020</span>
                                <span class="arrow-wrap"><span class="arrow"></span></span>
                            </div>
                        </div><!-- testimonial-single end -->
                    </div>

                    <div class="testmonial-slider-wrapper d-lg-none mb-4">
                        <div class="testimonial-slider owl-carousel">

                            <div class="testimonial-single-two">
                                <div class="thumb"><img src="{{asset('home/images/testimonial/5.jpg')}}" style="border-radius: 50%;" alt="image"></div>
                                <h4 class="name">Ignacio Mcpherson</h4>
                                <span class="designation">Australia, 15th April 2020</span>
                                <p>
                                    {{$siteName}} is a great program for an individual investor to monitor their investments.
                                </p>
                            </div><!-- testimonial-single-two end -->

                            <div class="testimonial-single-two">
                                <div class="thumb"><img src="{{asset('home/images/testimonial/6.jpg')}}" style="border-radius: 50%;" alt="image"></div>
                                <h4 class="name">Brian Robertson</h4>
                                <span class="designation">Germany, 3rd Sept,2020</span>
                                <p>
                                    After reviewing several investment management software programs to manage my portfolios,
                                    this one is the best on the market, and I'm very happy I chose {{$siteName}}.
                                    The program is simple and easy to use, yet powerful. Thank you {{$siteName}} Team.
                                </p>
                            </div><!-- testimonial-single-two end -->

                            <div class="testimonial-single-two">
                                <div class="thumb"><img src="{{asset('home/images/testimonial/4.jpg')}}" style="border-radius: 50%;" alt="image"></div>
                                <h4 class="name">Miranda Shaffer</h4>
                                <span class="designation">Switzerland, 26th April,2020</span>
                                <p>
                                    I don't know what I would do without it. {{$siteName}} helps me track and plan my investments. Even though my funds are limited and I am electronically challenged, it works for me. I believe it is a valuable tool for everyone regardless of the size or complexity of accounts. It works well for businesses and individuals.
                                </p>
                            </div><!-- testimonial-single-two end -->

                            <div class="testimonial-single-two">
                                <div class="thumb"><img src="{{asset('home/images/testimonial/3.jpg')}}" style="border-radius: 50%;" alt="image"></div>
                                <h4 class="name">Alvaro Mcgee</h4>
                                <span class="designation">Germany, 3rd April,2019</span>
                                <p>
                                    {{$siteName}} puts me in a position of strength as the CEO of my investment "company". I especially love the year-end reports to see how I've done vs. the professionals or the S&P. {{$siteName}} reports cover so many aspects of portfolio management! Keep up the good work!
                                </p>
                            </div><!-- testimonial-single-two end -->

                            <div class="testimonial-single-two">
                                <div class="thumb"><img src="{{asset('home/images/testimonial/2.jpg')}}" style="border-radius: 50%;" alt="image"></div>
                                <h4 class="name">Thomas Crane</h4>
                                <span class="designation">Germany, 3rd Sept,2020</span>
                                <p>
                                    This is the best portfolio management program I have used it my 30+years of investing. I would recommend {{$siteName}} to anyone with a portfolio of any size.
                                </p>
                            </div><!-- testimonial-single-two end -->

                            <div class="testimonial-single-two">
                                <div class="thumb"><img src="{{asset('home/images/testimonial/1.jpg')}}" style="border-radius: 50%;" alt="image"></div>
                                <h4 class="name">Pierre Cox</h4>
                                <span class="designation">Switzerland, 3rd Sept,2018</span>
                                <p>
                                    I have kept my eye out over the years whenever there is a printed review of
                                    portfolio management software. I can say unequivocally that there is not a
                                    better all-around portfolio management software program out there today.
                                    {{$siteName}} handles everything... even those esoteric transactions that
                                    no one thinks about talking about in the media. And, Quicken is not sophisticated
                                    enough to handle
                                    the transactions as seamlessly as {{$siteName}} . {{$siteName}} is a GEM!
                                </p>
                            </div><!-- testimonial-single-two end -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
