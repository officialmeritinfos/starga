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

    <section class="investment-section pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-area">
                        <h2 class="title">
                            Forex, Stocks & Cryptocurrrency
                        </h2>

                        <div class="row mt-4 mb-none-30 investment-item-area">
                            <div class="col-12 investment-item">
                                <div class="investment-single mb-30">

                                    <div class="content">
                                        <div class="left">

                                            <h2>Trade Forex with {{$siteName}}</h2>

                                            If you’re looking to trade the foreign exchange market, you’re in the right place! Admiral Markets gives you access to over 40 CFDs on currency pairs, including Forex majors, such as EURUSD; Forex minors, such as EURGBP; and exotic pairs, like USDCZK.
                                            <br>
                                            <br>
                                            {{$siteName}}  offers much more than Forex trading! We also offer CFDs on indices, precious metals, energies, ETFs, bonds, shares, stocks and cryptocurrencies!
                                            The first step to start trading the Forex and CFD markets is by signing up.
                                            <br>
                                            <br>

                                            <!-- TradingView Widget BEGIN -->
                                            <div class="tradingview-widget-container">
                                                <div class="tradingview-widget-container__widget"></div>
                                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
                                                    {
                                                        "width": "100%",
                                                        "height": "700",
                                                        "currencies": [
                                                        "EUR",
                                                        "USD",
                                                        "JPY",
                                                        "GBP",
                                                        "CHF",
                                                        "AUD",
                                                        "CAD",
                                                        "NZD",
                                                        "CNY"
                                                    ],
                                                        "isTransparent": false,
                                                        "colorTheme": "light",
                                                        "locale": "en"
                                                    }
                                                </script>
                                            </div>
                                            <!-- TradingView Widget END -->
                                            <!-- TradingView Widget END -->
                                            <br>
                                            <br>


                                            <h2>Stock Trading</h2>
                                            We Trade single stocks of the world’s largest companies at competitive trading terms
                                            <!-- TradingView Widget BEGIN -->
                                            <br>
                                            <br>

                                            <h2>Cryptocurrency CFDs trading</h2>
                                            Tap into the economy of the future with CFDs on Bitcoin, Litecoin, Ethereum and other cryptocurrencies with the Automated trading process {{$siteName}} offers
                                            <!-- TradingView Widget BEGIN -->
                                            <div class="tradingview-widget-container">
                                                <div class="tradingview-widget-container__widget"></div>
                                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                                                    {
                                                        "width": "100%",
                                                        "height": 490,
                                                        "defaultColumn": "overview",
                                                        "screener_type": "crypto_mkt",
                                                        "displayCurrency": "BTC",
                                                        "colorTheme": "light",
                                                        "locale": "en"
                                                    }
                                                </script>
                                            </div>
                                            <!-- TradingView Widget END -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div></section>

@endsection
