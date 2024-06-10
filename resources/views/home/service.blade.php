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


    <section class="investment-section pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-area">
                        <h2 class="title">
                            What we Offer?

                        </h2>

                        <div class="row mt-4 mb-none-30 investment-item-area">
                            <div class="col-lg-12 investment-item">
                                <div class="investment-single mb-30">
                                    <!-- <div class="thumb  bg_img" data-background="assets/images/investment/2.jpg">
                                      <div class="icon"><img src="assets/images/icons/investment/1.png" alt="image"></div>
                                    </div> -->
                                    <div class="content">

                                        {{$siteName}} investment firms operating under the {{$siteName}} trademark, are leading online trading service providers, offering investment services for trading with Forex and CFDs on indices, metals, energies, stocks, bonds and cryptocurrencies.
                                        <br>
                                        <br>

                                        Our dedication to provide access to highly-functional software and quality assurance means that our clients receive the best and most transparent trading experience. {{$siteName}} uses external auditors to enhance its operational and internal procedures to ensure regulatory compliance.
                                        <br>
                                        <br>


                                        <h5>Regulatory Authorisation and Licence</h5>
                                        Our investment firms are publicly acknowledged as a companies with an outstanding reputation, quality services, financial stability and high security of investments.
                                        <br>
                                        <br>

                                        <h5>The UK Financial Conduct Authority</h5>
                                        {{$siteName}} is authorised and regulated by the Financial Conduct Authority (FCA), FRN: 597451, and is authorised to hold Client Money under the FCA CASS rules.
                                        <br>
                                        <br>

                                        As a licensed organisation, {{$siteName}} is publicly acknowledged as a company with an outstanding reputation, quality services, financial stability and high security of investments.

                                        <br>
                                        <br>

                                        <h5>Flexible Trading Accounts</h5>
                                        Deposits to trading accounts can be made in most Cryptocurrencies, which are subsequently converted into GBP, EUR, USD, CHF or other applicable currencies. Additionally, if you want to protect your capital from currency fluctuation, you can have multiple trading accounts in different currencies at the same time. This gives our clients an opportunity to transfer funds from one account to another through a convenient internal transfer straight from the Trader`s Room.
                                        <br>
                                        <br>

                                        <h5>Education and Analytics</h5>
                                        At {{$siteName}}, our priority is to enable our clients to make better-informed trading decisions. For this reason, we offer numerous educational programmes – including webinars and seminars – which are designed to teach trading skills and explain the financial opportunities traders can have within the Forex and CFD markets. Additionally, we publish educational books and brochures in several languages, which are distributed internationally. Our range of educational tools is constantly expanding. This dedicated section also showcases a wide selection of analytical tools to help traders better navigate the financial markets.
                                        <br>
                                        <br>

                                        <h5>Customer Support</h5>
                                        {{$siteName}} offers customer support via phone and live chat to assist clients in all technical and organisational matters. The details of customer support can be found under Contact Us page.
                                        <br>
                                        <br>

                                        <h5>Security and Software</h5>
                                        Our servers are physically located next to all major liquidity providers, to ensure best execution and lowest latency. We also offer the most reliable and popular trading platforms, MetaTrader 4 and MetaTrader 5.
                                        <br>
                                        <br>

                                        This platform was developed by a global leader in trading software, the MetaQuotes Software Corp.
                                        <br>
                                        <br>


                                        <h2>Deposit</h2>

                                        <b>How do I deposit?</b>

                                        Funding your account is quick and simple. There are various payment methods at your disposal. Simply choose
                                        whichever method you prefer and follow the steps below to make a successful deposit:
                                        <br>
                                        <br>

                                        Step 1: Log in to your account
                                        <br>
                                        <br>

                                        Step 2: Click on “Invest”
                                        <br>
                                        <br>

                                        Step 3: Select the investment plan suitable for you and click proceed
                                        <br>
                                        <br>

                                        NB: A deposit invvoice will be sent to the email used in registering informing you of the acction
                                        <br>
                                        <br>

                                        Step 4: After clicking proceed the Companies Wallets addresss will be displayed and after you have succesfully made the deposit into the Companies wallet.
                                        <br>
                                        <br>

                                        Your Deposit will be confirmed.. HURRAY YOU CAN START EARNING

                                    </div>
                                </div>
                            </div><!-- investment-single end -->

                        </div>
                    </div>
                </div>
            </div>
        </div></section>

@endsection
