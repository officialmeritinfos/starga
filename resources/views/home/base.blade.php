<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$siteName}}</title>
    <link rel="stylesheet" href="{{asset('home/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/icofont.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/lightcase.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/responsive.css')}}">
    <!-- Template CSS -->
    <!-- Plugins -->

    <!-- Template CSS -->
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('home/images/'.$web->logo)}}">
    <meta name="description" content="Comprehensive financial advice and investment services that are tailored to meet your individual needs.">
    <meta name="keywords" content="finance, invest, goal, values, income, earnings, gold, forex, equity">
    <meta name="url" content="/">

    <meta name="og:title" content="{{$siteName}}"/>
    <meta name="og:type" content="company"/>
    <meta name="og:url" content="/"/>
    <meta name="og:image" content="{{asset('home/images/'.$web->logo)}}"/>
    <meta name="og:site_name" content="{{$siteName}}"/>
    <meta name="og:description" content="Comprehensive financial advice and investment services that are tailored to meet your individual needs."/>
    <meta name="description" content="{{$web->description}}">
    <meta name="keywords" content="business, marketing, agency">
    <title> {{$siteName}} | {{$pageName}}</title>
    <style>
        .watkey {
            z-index: 9;
            position: fixed;
            bottom: 15px;
            left: 15px;
            padding: 4px;
            border: 1px solid #0d9f16;
            border-radius: 50%;
        }

    </style>

    <style>
        /* Custom CSS for the Float widget */
        .telegram-float-widget {
            position: fixed;
            left: 10px;
            /* Adjust the left positioning as needed */
            bottom: 20px;
            /* Adjust the bottom positioning as needed */
            z-index: 9999;
        }

        .whatsapp-float-widget {
            position: fixed;
            left: 70px;
            /* Adjust the left positioning as needed */
            bottom: 10px;
            /* Adjust the bottom positioning as needed */
            z-index: 9999;
        }
    </style>
</head>
<body>
@inject('injected','App\Defaults\Custom')


<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6 col-md-6">
                    <div class="header-top-left d-flex">
                        @if(!empty($web->phone))
                            <div class="support-part">
                                <a href="tel:{{$web->phone}}" id="support_"><i class="fa fa-headphones"></i>Support</a>
                            </div>
                        @endif
                        <div class="email-part">
                            <a href="mailto:{{$web->email}}">{{$web->email}}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="header-top-right d-flex align-items-center justify-content-end">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <nav class="navbar navbar-expand-xl">
                <a class="site-logo site-title" href="{{url('/')}}">
                    <img src="{{asset('home/images/'.$web->logo)}}" style="height:80px!important" alt="site-logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="menu-toggle"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav main-menu ml-auto">

                        <li class=""><a href="{{url('about')}}">about</a></li>
                        <li class=""><a href="{{url('plans')}}">Invest</a></li>

                        <li class=""><a href="{{url('forex')}}">Forex</a></li>

                        <li class=""><a href="{{route('login')}}">Insurance</a></li>
                        <li class=""><a href="{{route('login')}}">Loan</a></li>
                        <li class=""><a href="{{url('tesla')}}">tesla</a></li>
                        <li class=""><a href="{{url('atm')}}">ATM</a></li>
                    </ul>
                    <div class="header-join-part">
                        <a href="{{route('login')}}" class="btn btn-danger btn-hover" >Login</a>
                    </div>
                </div>
            </nav>
        </div>
    </div><!-- header-bottom end -->
</header>


@yield('content')

<footer class="footer-section">
    <div class="footer-top bg_img" data-background="{{asset('home/images/footer-bg-2.png')}}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="section-header text-white text-center">
                        <span class="section-subtitle">Subscribe to {{$siteName}}</span>
                        <h2 class="section-title">To Get Exclusive Benefits</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="subscribe-wrapper style--two">
                        <form class="subscribe-form">
                            <input type="text" name="subs_name" id="subs_name" placeholder="Your Email Address">
                            <button type="submit" class="subs-btn">subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row mb-none-30">
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget mb-30">
                        <h3 class="widget-title">About {{$siteName}}</h3>
                        <ul class="footer-menu-list">
                            <li><a href="{{url('about')}}">About</a></li>
                            <li><a href="{{url('contact')}}">Contact Us</a></li>
                            <li><a href="{{url('plans')}}">Our Plans</a></li>
                            <li><a href="{{url('affiliate')}}">Affiliate</a></li>
                            <li><a href="{{url('stocks')}}">Stocks</a></li>


                        </ul>
                    </div>
                </div><!-- footer-widget end -->
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget mb-30">
                        <h3 class="widget-title">My Account</h3>
                        <ul class="footer-menu-list">
                            <li><a href="{{route('login')}}">Manage Your Account</a></li>
                            <li><a href="{{route('login')}}">Deposit</a></li>
                            <li><a href="{{route('login')}}">Withdraw</a></li>
                            <li><a href="{{url('safety')}}">Safety & Security</a></li>
                            <li><a href="{{url('plans')}}">Investments</a></li>
                        </ul>
                    </div>
                </div><!-- footer-widget end -->
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget mb-30">
                        <h3 class="widget-title">help center</h3>
                        <ul class="footer-menu-list">
                            <li><a href="{{url('contact')}}">Direct Contact</a></li>
                            <!-- <li><a href="{{url('faqs')}}">FAQ</a></li> -->
                            <li><a href="{{url('howItWorks')}}">How it works</a></li>
                            <li><a href="{{url('terms')}}">Terms and Conditions</a></li>
                            <li><a href="{{url('services')}}">What we offer</a></li>
                            <li><a href="{{url('privacy')}}">Privacy and Policy</a></li>

                        </ul>
                    </div>
                </div><!-- footer-widget end -->
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget mb-30">
                        <h3 class="widget-title">Contact</h3>
                        <ul class="footer-menu-list">
                            <li>
                                <a href="mailto:{{$web->email}}">
                                    {{$web->email}}
                                </a>
                            </li>
                            <li>

                                <a href="#" target="_blank">
                                    <i class="fa fa-instagram"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="fa fa-telegram"></i>
                                </a>

                            </li>
                        </ul>
                    </div>
                </div><!-- footer-widget end -->
            </div>

        </div>
    </div>
    <div style="width:100%;position:fixed;left:0;z-index:99;bottom:0;">
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>

            <script type="text/javascript" src="../s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                {
                    "symbols": [
                    {
                        "proName": "FOREXCOM:SPXUSD",
                        "title": "S&P 500"
                    },
                    {
                        "proName": "FOREXCOM:NSXUSD",
                        "title": "Nasdaq 100"
                    },
                    {
                        "proName": "FX_IDC:EURUSD",
                        "title": "EUR/USD"
                    },
                    {
                        "proName": "BITSTAMP:BTCUSD",
                        "title": "BTC/USD"
                    },
                    {
                        "proName": "BITSTAMP:ETHUSD",
                        "title": "ETH/USD"
                    }
                ],
                    "colorTheme": "light",
                    "isTransparent": false,
                    "displayMode": "adaptive",
                    "locale": "en"
                }
            </script>
        </div>
        <!-- TradingView Widget END -->
    </div>
    <div class="footer-bottom" style="margin-bottom:2.6rem">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="copy-right-text text-md-left text-center mb-md-0 mb-3"> &copy; {{$siteName}} {{date('Y')}}. All Rights Reserved.</p>
                </div>
                <div class="col-md-6">
                    <div class="card-list text-md-right text-center">
                        <!-- <a href="#0"><img src="{{asset('home/images/icons/card-options/americanexpress.png')}}" alt="image"></a>
                        <a href="#0"><img src="{{asset('home/images/icons/card-options/maestro.png')}}" alt="image"></a>
                        <a href="#0"><img src="{{asset('home/images/icons/card-options/visa.png')}}" alt="image"></a>
                        <a href="#0"><img src="{{asset('home/images/icons/card-options/paypal.png')}}" alt="image"></a>
                        <a href="#0"><img src="{{asset('home/images/icons/card-options/mastercard.png')}}" alt="image"></a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer-section end -->

<!-- scroll-to-top start -->
<div class="scroll-to-top">
    <span class="scroll-icon">
      <i class="fa fa-rocket"></i>
    </span>
</div>
<!-- scroll-to-top end -->


<!-- jQuery & Bootstrap -->


<!-- Plugin JS -->



<!-- Custom JS -->
<div class="telegram-float-widget">
    <a href="https://wa.me/{{$web->phone}}" target="_blank">
        <img src="https://cdn2.iconfinder.com/data/icons/social-media-applications/64/social_media_applications_23-whatsapp-256.png" alt="" width="50">
    </a>
</div>

<script src="{{asset('home/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('home/js/bootstrap.min.js')}}"></script>
<script src="{{asset('home/js/jquery.nice-select.js')}}"></script>
<script src="{{asset('home/js/lightcase.js')}}"></script>
<script src="{{asset('home/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('home/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('home/js/wow.min.js')}}"></script>
<script src="{{asset('home/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('home/js/jquery.countup.min.js')}}"></script>
<script src="{{asset('home/js/jquery.paroller.min.js')}}"></script>
<script src="{{asset('home/js/main.js')}}"></script>
<!-- Google language start -->
<style>

    #google_translate_element {
        z-index: 9999999;
        position: fixed;
        bottom: 25px;
        left: 15px;
    }

    .goog-te-gadget {
        font-family: Roboto, "Open Sans", sans-serif !important;
        text-transform: uppercase;
    }
    .goog-te-gadget-simple
    {
        padding: 0px !important;
        line-height: 1.428571429;
        color: white;
        vertical-align: middle;
        background-color: black;
        border: 1px solid #a5a5a599;
        border-radius: 4px;
        float: right;
        margin-top: -4px;
        z-index: 999999;
    }
    .goog-te-banner-frame.skiptranslate
    {
        display: none !important;
        color: white;
    }
    .goog-te-gadget-icon
    {
        background: none !important;
        display: none;
        color: white;
    }
    .goog-te-gadget-simple .goog-te-menu-value
    {
        font-size: 12px;
        color: white;
        font-family: 'Open Sans' , sans-serif;
    }
</style>
<div id="google_translate_element"></div>
<script type="text/javascript">
    window.onload = function googleTranslateElementInit() {
        new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<!-- start popup massage -->
<div class="notifier" style="display: none;">
    <div class="txt" style="color:black;">While you are waiting,someone from <b></b> just traded with <a href="javascript:void(0);" onclick="javascript:void(0);"></a></div>
</div>
<style>
    .notifier{
        border-radius: 7px;
        position: fixed;
        z-index: 90;
        bottom: 80px;
        right: 50px;
        background: #fff;
        padding: 15px 40px;
        box-shadow: 0px 5px 13px 0px rgba(0,0,0,.3);
    }
    .notifier a {
        font-weight: 700;
        display: block;
        color:#0080FF;
    }
    .notifier a, .notifier a:active {
        transition: all .2s ease;
        color:#0080FF;
    }
</style>
<script data-cfasync="false" src="#"></script><script type="text/javascript">
    var listCountries = ['Germany', 'Spain', 'Russia', 'Italy',
        'Italy',  'United States', 'Egypt',
        'United Kingdom', "United States","England","Germany","Germany","United States","Switzerland",
        "Austria","Austria","Austria","Australia","Australia","Australia","Russia","Russia",
        "United States","United Kingdom","Spain","Spain","India","England","Italy","Ukraine"
    ];
    var listPlans = ['$500','$5000','$1,000','$1000','$550','$3000','$690', '$360',
        '$700', '$600',"$500","$700","$1,000","$1289","$5000","$7000","$10000"];
    interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
    var run = setInterval(request, interval);

    function request() {
        clearInterval(run);
        interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
        var country = listCountries[Math.floor(Math.random() * listCountries.length)];
        var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
        var msg = 'While you are still contemplating ,an investor from <b>' + country + '</b> ' +
            'just traded with <a href="javascript:void(0);" onclick="javascript:void(0);">' + plan + ' .</a>';
        $(".notifier .txt").html(msg);
        $(".notifier").stop(true).fadeIn(300);
        window.setTimeout(function() {
            $(".notifier").stop(true).fadeOut(300);
        }, 6000);
        run = setInterval(request, interval);
    }
</script>
<!-- end popup massage -->
<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
    var _smartsupp = _smartsupp || {};
    _smartsupp.key = '93211e00ee35497e5878273ecab2623d96bf3d87';
    window.smartsupp||(function(d) {
        var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
        s=d.getElementsByTagName('script')[0];c=d.createElement('script');
        c.type='text/javascript';c.charset='utf-8';c.async=true;
        c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
    })(document);
</script>
<noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>
</body>
</html>
