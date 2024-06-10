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

    <div class="container">
        <h1 class="text-center">SUPER TESLA</h1>
        <p>
            a tesla supercharger is a 480-volt direct current fast-charging technology built by american vehicle manufacturer tesla, inc. for electric cars. the supercharger network was introduced on september 24, 2012, with six supercharger stations.[1] as of february 18, 2021, tesla operates over 30,000 superchargers in over 2,564 stations worldwide[2] (an average of 9 chargers per station). there are 1,101 stations in north america, 592 in europe, and 498 in the asia/pacific region.[3] supercharger stalls have a connector to supply electrical power at maximums of 72 kw, 150 kw or 250 kw.[4]
        </p>
        <img src="{{asset('home/img/tesla1.jpg')}}" style="width: 100%;">
        <p>
            the tesla model x costs about $15.29 to fully charge, which comes out to about 4.5 cents per mile. it will cost around $7.65 to charge a tesla model 3. depending on the variant, this is between 3 and 4 cents per mile. if you own a tesla model s, you can expect to pay about 3.7 per mile.
        </p>
        <img src="{{asset('home/img/tesla2.jpg')}}" style="width: 100%;">
        <div>
            <h3 class="text-center">
                COST
            </h3>
            <p>
                the cost for tesla supercharger is between $100,000 and $175,000 depending on the station, and a lot of those come from the permanent modifications needed at the site to support the supercharger tesla superchargers are gaining momentum as many people are now using tesla cars for their day to day activities and shariafinance is here to walk you down the steps of benefiting from this particular type of investment, the purchase of tesla superchargers, installation and maintenance will be overseen by shariafinance investment company
            </p>
        </div>
        <div class="alert alert-info">
            <h4>
                <a href="{{route('login')}}">INVEST NOW</a>
            </h4>
        </div>
    </div>
@endsection
