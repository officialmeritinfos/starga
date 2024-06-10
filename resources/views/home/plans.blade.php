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


    <!-- inner-page-banner-section start -->

    <!-- inner-page-banner-section end -->
    <img src="{{asset('home/img/crypto.jpg')}}" style="width: 100%;">

    <section class="investment-section pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-area">
                        <h2 class="title">Investment opportunities</h2>

                        <div class="row mt-4 mb-none-30 investment-item-area">
                            @foreach($packages as $package)
                                @inject('injected','App\Defaults\Custom')
                                <div class="col-lg-6 investment-item">
                                    <div class="investment-single mb-30">
                                        <!-- <div class="thumb  bg_img" data-background="assets/images/investment/2.jpg">
                                          <div class="icon"><img src="assets/images/icons/investment/1.png" alt="image"></div>
                                        </div> -->
                                        <div class="content">
                                            <div class="left">
                                                <h3 class="investment-title">{{$package->name}} </h3>
                                                <p></p>
                                                <div class="share-price">
                                                    <h3 class="price">${{number_format($package->minAmount,2)}} min<small>/per share</small></h3>
                                                </div>
                                                <div class="d-flex flex-wrap mt-5">
                                                    <div class="icon-item d-flex flex-wrap">
                                                        <div class="icon"><i class="icofont-ui-user-group"></i></div>
                                                        <div class="content">
                                                            <span class="counter">14423</span>
                                                            <p>investors</p>
                                                        </div>
                                                    </div><!-- icon-item end -->
                                                    <div class="icon-item d-flex flex-wrap">
                                                        <div class="icon"><i class="icofont-wall-clock"></i></div>
                                                        <div class="content">
                                                            <span class="counter">{{$package->Duration}}</span>
                                                            <p>Duration</p>
                                                        </div>
                                                    </div><!-- icon-item end -->
                                                </div>
                                                <p>PROFIT PAYOUT: {{$injected->getReturnType($package->returnType)}}</p>
                                                <p>INSURANCE RATE: {{$package->insuranceRate}}%</p>
                                                @empty($package->stockValue)
                                                    <p>High End Machine: Yes</p>
                                                @else
                                                    <p>Stock Value: {{$package->stockValue}}</p>
                                                @endif
                                                <div class="shares-part">
                                                    <div class="share-item">
                                                        <span class="caption">Max Invest</span>
                                                        <h4 class="amount">
                                                            @if($package->isUnlimited==1)
                                                                Unlimited
                                                            @else
                                                                ${{number_format($package->maxAmount,2)}}
                                                            @endif

                                                        </h4>
                                                    </div><!-- share-item end -->
                                                    <div class="share-item">
                                                        <span class="caption">Deposit Return</span>
                                                        <h4 class="amount">Yes</h4>
                                                    </div><!-- share-item end -->
                                                    <div class="share-item">
                                                        <span class="caption">Investment Profit</span>
                                                        <h4 class="amount">{{$package->roi}}%</h4>
                                                    </div><!-- share-item end -->
                                                </div><!-- shares-part end -->
                                            </div>
                                            <div class="col-12" align="center">
                                                <a href="{{route('register')}}" class="btn btn-primary btn-hover" type="button" data-toggle="modal" data-target="#signUpModal">Get started</a>
                                            </div>
                                        </div>

                                    </div>

                                </div><!-- investment-single end -->
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div></section>

@endsection
