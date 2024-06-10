@extends('home.base')
@section('content')
    <!-- inner-page-banner-section start -->
    <section class="inner-page-banner-section gradient-bg" style="height: 150px;">
        <div class="illustration-img"><img src="{{asset('home/images/inner-page-banner-illustrations/investment.png')}}" alt="image-illustration"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="inner-page-content-area">
                        <h2 class="page-title">{{$pageName}}</h2>
                        <nav aria-label="breadcrumb" class="page-header-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index">Home</a></li>
                                <li class="breadcrumb-item">{{$pageName}}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- inner-page-banner-section end -->


    <!-- how-work-section start -->
    <section class="how-work-section pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-header text-center">
                        <span class="section-subtitle">How you can invest your</span>
                        <h2 class="section-title">Money More Smartly</h2>
                        <p>It’s a simple way to start invest.You don’t need a deep wallet to start {{$siteName}}. Pick an amount you can afford, and build your {{$siteName}} over time.</p>
                    </div>
                </div>
            </div>
            <div class="row mb-none-30">
                <div class="col-lg-4 col-md-4 col-sm-6 mb-30">
                    <div class="how-work-item--two text-center" data-count="01">
                        <div class="icon">
                            <img src="{{asset('home/images/icons/how-work/4.png')}}" alt="image">
                        </div>
                        <div class="content">
                            <h3 class="title">Sign up</h3>
                            <p>To start investing using the {{$siteName}} Invest platform, you need to register. Registration is incredibly simple; it should take you no more than 5 min.</p>
                            <a href="#0" class="btn btn-danger btn-hover text-small" data-toggle="modal" data-target="#signUpModal">Sign up</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 mb-30">
                    <div class="how-work-item--two text-center" data-count="02">
                        <div class="icon">
                            <img src="{{asset('home/images/icons/how-work/5.png')}}" alt="image">
                        </div>
                        <div class="content">
                            <h3 class="title">Invest</h3>
                            <p>After you have created your account, your identity has been verified & you have added funds, you can start searching for the invest</p>
                            <!-- <a href="./index.php" class="btn btn-danger btn-hover text-small">Invest now</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 mb-30">
                    <div class="how-work-item--two text-center" data-count="03">
                        <div class="icon">
                            <img src="{{asset('home/images/icons/how-work/6.png')}}" alt="image">
                        </div>
                        <div class="content">
                            <h3 class="title">Grow Your Income</h3>
                            <p>After you have created your account, your identity has been verified & you have added funds, you can start searching for the invest</p>
                            <!-- <a href="#0" class="btn btn-danger btn-hover text-small">Read More</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- how-work-section end -->

    <!-- app-section start -->
    <section class="app-section pt-120 pb-120">
        <div class="shape"><img src="{{asset('home/images/elements/about.png')}}" alt="image"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="app-item mb-30">
                                <img src="{{asset('home/images/icons/app-item-icon/1.png')}}" alt="image">
                                <h6 class="caption">See all your money in one place</h6>
                            </div><!-- app-item end -->
                            <div class="app-item">
                                <img src="{{asset('home/images/icons/app-item-icon/2.png')}}" alt="image">
                                <h6 class="caption">Invest your money more smartly</h6>
                            </div><!-- app-item end -->
                        </div>
                        <div class="col-md-6 mt-50">
                            <div class="app-item mb-30">
                                <img src="{{asset('home/images/icons/app-item-icon/3.png')}}" alt="image">
                                <h6 class="caption">Keep track of your moneymore simply</h6>
                            </div><!-- app-item end -->
                            <div class="app-item">
                                <img src="{{asset('home/images/icons/app-item-icon/4.png')}}" alt="image">
                                <h6 class="caption">Get a personalised budget,automatically</h6>
                            </div><!-- app-item end -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-5 pt-md-5">
                    <div class="app-content text-lg-left text-center">
                        <div class="section-header">
                            <h1>COMING SOON!!</h1>
                            <span class="section-subtitle">Manage your money more easily</span>
                            <h2 class="section-title">OUR SMART APP</h2>
                            <p>Invest in stocks, ETFs, options, and cryptocurrencies, all commission-free, right from your phone or desktop.</p>
                        </div>
                        <p>Intuitively designed for newcomers and experts alike, {{$siteName}} gives you a clear picture of your portfolio’s performance over time, so you can adjust your positions and learn by doing.Stay up to date on Your account balance, details and request withdrawals / make deposits.</p>
                        <div class="btn-area justify-content-lg-start justify-content-center">
                            <!-- <a href="#0" class="wow zoomIn" data-wow-duration="0.3s" data-wow-delay="0.5s"><img src="{{asset('home/images/buttons/google.png')}}" alt="button"></a>
                            <a href="#0" class="wow zoomIn" data-wow-duration="0.7s" data-wow-delay="0.5s"><img src="{{asset('home/images/buttons/apple.png')}}" alt="button"></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- app-section end -->


@endsection
