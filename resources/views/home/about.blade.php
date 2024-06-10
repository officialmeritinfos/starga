@extends('home.base')
@section('content')

    <!-- inner-page-banner-section end -->
    <img src="{{asset('home/img/office.jpg')}}" style="width: 100%;">

    <!-- about-section start -->
    <section class="about-section start pt-120 pb-120">
        <div class="shape-el">
            <img src="{{asset('home/images/elements/about.png')}}" alt="image">
        </div>

        <div class="container mb-4">
            <div class="row">
                <div class="col-12">
                    <div class="section-header text-center">
                        <h2 class="section-title">About {{$siteName}}</h2>
                    </div>

                    <p>
                        {{$siteName}} was established on August 18th, 2017. We want to make saving and investing worthwhile again for everyone by making it simple to do and highly rewarding. We invite you to join us on this wonderful journey to groom the next wealthy generations.
                    </p>

                    <p>Another necessary revenue supply comes from sale of electricity and hardware of BitCoin mining.
                        As BitCoin mining demand grows and over half its profits disbursement for mining hardware power
                        consumption, We've noticed this greatly potential chance. starting 2019 we tend to determined to
                        focus our wholesale electricity mercantilism efforts within the BitCoin mining business.
                        To participate within the Cryptocurrencies market and build respectable profit,
                        you do not got to be a monetary knowledgeable and skilled monetary information
                        isn't needed in any respect. What you've got to try is to place your cash in
                        our program and that we can do the remaining for you, It's easy, simple and solely $50 to get started.
                        {{$siteName}} Business is exclusively transparent. Our business activity depends on with full trust and confidence on cryptocurrency trading, Margin and leveraged trading, forex, trading and other financial pursuits. We accumulates funds from {{$siteName}} via investors securities and appends to the firm trading liquid funds that are practised by our several AI bots on various secured exchanges to patronise. Collectively business results are consolidated and united to our investors reserve from where our investors withdraw it directly from {{$siteName}}. {{$siteName}} Experts and trade people moderate all bots and do the needed change in codes to perform bots better in specific market situations. It is obvious that more amount of trade will result in more income. Thus our investment plans are designed to serve all investors best way possible
                        to make their investment journey with our comfortable and rest assured profitable for long-term duration.</p>
                        
                         <a href="{{asset('home/tomocert.pdf')}}" class="btn btn-danger btn-hover">Our Certification</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-sm-6 mb-none-30">
                            <div class="counter-item style--two mb-30">
                                <div class="counter-icon">
                                    <img src="{{asset('home/images/icons/about/1.svg')}}" alt="icon">
                                </div>
                                <div class="counter-content pl-0">
                                    <span class="counter">40</span>
                                    <span>k</span>
                                    <span class="caption">Registered Members </span>
                                </div>
                            </div><!-- counter-item end-->
                            <div class="counter-item style--two mb-30">
                                <div class="counter-icon">
                                    <img src="{{asset('home/images/icons/about/2.svg')}}" alt="icon">
                                </div>
                                <div class="counter-content pl-0">
                                    <span class="counter">08</span>
                                    <span>M</span>
                                    <span class="caption">Satisfied customers</span>
                                </div>
                            </div><!-- counter-item end-->
                        </div>
                        <div class="col-lg-6 col-sm-6 mb-none-30 mt-sm-0 mt-5">
                            <div class="counter-item style--two mb-30">
                                <div class="counter-icon">
                                    <img src="{{asset('home/images/icons/about/4.svg')}}" alt="icon">
                                </div>
                                <div class="counter-content pl-0">
                                    <span>$</span>
                                    <span class="counter">14</span>
                                    <span>k</span>
                                    <span class="caption">Average Investment</span>
                                </div>
                            </div><!-- counter-item end-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-5">
                    <div class="about-content">
                        <div class="section-header">
                            <span class="section-subtitle">Earn The Big Money</span>
                            <h2 class="section-title">Affiliate Program</h2>
                            <p>To meet <a href="#0">today's challenges</a>, we've created a unique fund management system</p>
                        </div>
                        <p>{{$siteName}} is a global online investment platform that allows qualifying investors to invest in financial innovation including FinTech (Financial Technology) companies, funds and other new alternative financial products.</p>
                        <p>We believe that the future of finance looks very different to how it looks today and we offer qualifying investors the opportunity to invest in the companies and products that are building the future of finance.</p>
                        <!-- <a href="#0" class="btn btn-danger btn-hover text-small">read more</a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-section end -->

    <!-- global-section start -->
    <section class="global-section">
        <div class="container-fluid">
            <div class="row justify-content-end">
                <div class="col-xl-4 order-xl-1 order-2">
                    <div class="global-content">
                        <div class="section-header">
                            <span class="section-subtitle">Take A Look</span>
                            <h2 class="section-title">Global Presence</h2>
                        </div>
                        <p>We are 100% funded from our own platform with a team of over 300 professional FinTech investors who all believe the future of finance looks very different from today. Their experience and background covers most areas in finance, technology and startups.66,246 professional investors are waiting to invest.</p>
                        <p>We have built the largest global community of professional FinTech investors all investing online in the future of finance in over 50 currencies.</p>
                        <a data-toggle="modal" data-target="#signUpModal" class="btn btn-danger btn-hover">get started</a>
                    </div>
                </div>
                <div class="col-xl-6 order-xl-2 order-1 map-bg">
                    <img src="{{asset('home/images/elements/map.png')}}" alt="image">
                </div>
            </div>
        </div>
    </section>
    <!-- global-section end -->

    <!-- choose-us-section start -->
    <section class="choose-us-section pt-120 pb-120">
        <div class="animated-round"></div>
        <div class="container-fluid">
            <div class="row justify-content-xl-start justify-content-lg-center">
                <div class="col-xl-5 offset-xl-5 col-lg-6">
                    <div class="section-header text-xl-left text-center">
                        <span class="section-subtitle">A Few Reasons Why</span>
                        <h2 class="section-title">Investors Choose Us</h2>
                        <p>Our service gives you better result and savings, as per your requirement and you can manage your investments from anywhere either form home or work place, at any time.</p>
                    </div>
                </div>
            </div>
            <div class="row align-content-center">
                <div class="col-xl-5">
                    <div class="video-area">
                        <img src="{{asset('home/images/elements/makbook.png')}}" alt="image">
                        <!-- <a href="#0" class="round-video-btn"><i class="fa fa-play"></i></a> -->
                    </div>
                </div>
                <div class="col-xl-7 mt-xl-0 mt-5">
                    <div class="choose-us-slider__four owl-carousel">
                        <div class="choose-item style--two text-center">
                            <div class="choose-icon">
                                <img src="{{asset('home/images/icons/choose-us/1.svg')}}" alt="image">
                            </div>
                            <div class="choose-content">
                                <h3 class="title">Fast Profit </h3>
                                <p>We're talking about ways you can make money fast.Invest money and get reward, bonus and profit</p>
                            </div>
                        </div><!-- choose-item end -->
                        <div class="choose-item text-center">
                            <div class="choose-thumb">
                                <img src="{{asset('home/images/choose-us/2.png')}}" alt="image">
                            </div>
                            <div class="choose-content">
                                <h3 class="title">Instant Withdraw</h3>
                                <p>We’re extremely excited to launch instant withdrawals.you can deposit and withdraw funds in just a few clicks.</p>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- choose-us-section end -->

    <!-- team-section start -->
    <section class="team-section gradient-overlay bg_img pt-120" data-background="{{asset('home/images/team-section-bg.jpg')}}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-header text-center text-white">
                        <span class="section-subtitle">Meet our Creative</span>
                        <h2 class="section-title">Management Team</h2>
                        <p>Our team of creative programmers, marketing experts, and members of the global investment community have worked together to build the ultimate investment site, happy Investor reminds us how lucky .we are to be doing what we love.</p>
                    </div>
                </div>
            </div>
            <div class="team-slider owl-carousel">
                <div class="team-item">
                    <div class="thumb">
                        <img src="{{asset('home/images/team/1.jpg')}}" alt="image">
                    </div>
                    <div class="content text-center">
                        <h4 class="name">DEAN LARSEN WILSON</h4>
                        <span class="designation">ceo</span>
                        <ul class="socials-links">
                            <!--<li><a href="https://www.facebook.com/Dean-Larsen-Wilson-113729783833486/"><i class="fa fa-facebook-f"></i></a></li>-->
                            <!--<li><a href="https://twitter.com/deanlarsenwils1?lang=en"><i class="fa fa-twitter"></i></a></li>-->
                            <!-- <li><a href="#0"><i class="fa fa-google-plus"></i></a></li> -->
                            <!--<li><a href="https://instagram.com/deanlarsenwilson?igshid=125fkvvxjkmak"><i class="fa fa-instagram"></i></a></li>-->
                        </ul>
                    </div>
                </div><!-- team-item end -->
                <div class="team-item">
                    <div class="thumb">
                        <img src="{{asset('home/images/team/2.png')}}" alt="image">
                    </div>
                    <div class="content text-center">
                        <h4 class="name">GARY ELLSWORTH </h4>
                        <span class="designation">Advisory Member</span>
                        <ul class="socials-links">
                            <!--<li><a href="https://www.facebook.com/HanhNguyen212.e"><i class="fa fa-facebook-f"></i></a></li>-->
                            <!-- <li><a href="#0"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#0"><i class="fa fa-google-plus"></i></a></li>
                              <li><a href="#0"><i class="fa fa-instagram"></i></a></li> -->
                        </ul>
                    </div>
                </div><!-- team-item end -->
                <div class="team-item">
                    <div class="thumb">
                        <img src="{{asset('home/img/team1.jpg')}}" alt="image">
                    </div>
                    <div class="content text-center">
                        <h4 class="name">Ralf Saur</h4>
                        <span class="designation">IT Specialist</span>
                        <ul class="socials-links">
                            <!-- <li><a href="#0"><i class="fa fa-facebook-f"></i></a></li>
                              <li><a href="#0"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#0"><i class="fa fa-google-plus"></i></a></li>
                              <li><a href="#0"><i class="fa fa-instagram"></i></a></li> -->
                        </ul>
                    </div>
                </div><!-- team-item end -->
                <div class="team-item">
                    <div class="thumb">
                        <img src="{{asset('home/images/team/4.jpg')}}" alt="image">
                    </div>
                    <div class="content text-center">
                        <h4 class="name">Kimberly NMN Victoria</h4>
                        <span class="designation">Consultant</span>
                        <ul class="socials-links">
                            <!-- <li><a href="#0"><i class="fa fa-facebook-f"></i></a></li> -->
                            <!-- <li><a href="#0"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#0"><i class="fa fa-google-plus"></i></a></li>
                              <li><a href="#0"><i class="fa fa-instagram"></i></a></li> -->
                        </ul>
                    </div>
                </div><!-- team-item end -->

            </div>
        </div>
    </section>
    <!-- team-section end -->

@endsection
