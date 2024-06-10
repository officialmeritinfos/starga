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

    <!-- affiliate-section start -->
    <section class="affiliate-section pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <div class="affiliate-content">
                        <div class="section-header">
                            <span class="section-subtitle">What You'll Get as</span>
                            <h2 class="section-title">Affiliate Partner</h2>
                            <p>Earn Unlimited Commissions with {{$siteName}} Affiliate Program.Our partner program can increase your income by receiving percentage from the purchases made by your referrals into.</p>
                        </div>
                        <div class="affiliate-item wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
                            <div class="icon">
                                <div class="icon-inner">
                                    <img src="{{asset('home/images/icons/investment/4.svg')}}" alt="icon">
                                </div>
                            </div>
                            <div class="content">
                                <h3 class="title">Attractive RevShare</h3>
                                <p>We pay 10% on each purchase from your referrals.Our  average user makes purchases for $51.42 per month</p>
                            </div>
                        </div><!-- affiliate-item end -->
                        <div class="affiliate-item wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
                            <div class="icon">
                                <div class="icon-inner">
                                    <img src="{{asset('home/images/icons/investment/5.svg')}}" alt="icon">
                                </div>
                            </div>
                            <div class="content">
                                <h3 class="title">High Conversion Rate</h3>
                                <p>Some of our affiliates have made about $70,000 as earnings by referring sales</p>
                            </div>
                        </div><!-- affiliate-item end -->
                        <div class="affiliate-item wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
                            <div class="icon">
                                <div class="icon-inner">
                                    <img src="{{asset('home/images/icons/investment/6.svg')}}" alt="icon">
                                </div>
                            </div>
                            <div class="content">
                                <h3 class="title">RealTime Statistics</h3>
                                <p>Monitor your conversions straight from your dashboard</p>
                            </div>
                        </div><!-- affiliate-item end -->
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="affiliate-join-area">
                        <div class="section-header text-center">
                            <span class="section-subtitle">affiliate program</span>
                            <h2 class="section-title">Join Now</h2>
                            <p>Make Money By Joining {{$siteName}} Affiliate when you Reffer</p>
                        </div>
                        <form class="affiliate-join-form">
                            <!-- <div class="form-group">
                              <input type="text" name="affiliate_name" id="affiliate_name" placeholder="Enter Your Name*">
                            </div>
                            <div class="form-group">
                              <input type="email" name="affiliate_email" id="affiliate_email" placeholder="Enter Your Email*">
                            </div>
                            <div class="form-group">
                              <input type="tel" name="affiliate_phone" id="affiliate_phone" placeholder="Enter Your Phone*">
                            </div> -->
                            <div class="text-center mt-30">
                                <button type="button" data-toggle="modal" data-target="#signUpModal" class="btn btn-danger btn-hover text-small">join now</button>
                            </div>
                        </form>
                    </div>
                    <div class="bonus-details-area">
                        <h4 class="title">Bonus  Details</h4>
                        <p>Turn your online presence into profit</p>
                        <ul>
                            <li>Monthly Bonus Plans</li>
                            <li>Increased payouts</li>
                            <li>Access to new EXCLUSIVE OFFERS</li>
                            <li>Fast payouts</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- affiliate-section end -->

    <!-- part-section start -->
    <section class="part-section pt-120 pb-120">
        <div class="el-map"><img src="{{asset('home/images/elements/part-map.png')}}" alt="image"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-header text-center">
                        <span class="section-subtitle">You’re Part of something Big</span>
                        <h2 class="header-amount">$50,257,285.47</h2>
                        <p>Total Commissions Paid to Our Affiliates</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-end mb-none-30">
                <div class="col-lg-3 col-sm-6 mb-30">
                    <div class="part-item">
                        <span class="counter">25</span>
                        <p>Supported Languages</p>
                    </div>
                </div><!-- part-item end -->
                <div class="col-lg-3 col-sm-6 mb-30">
                    <div class="part-item">
                        <span class="counter">8</span>
                        <span>K</span>
                        <p>Popular Investors</p>
                    </div>
                </div><!-- part-item end -->
                <div class="col-lg-3 col-sm-6 mb-30">
                    <div class="part-item">
                        <span class="counter">40.5</span>
                        <span>k</span>
                        <p>Users Worldwide</p>
                    </div>
                </div><!-- part-item end -->
                <div class="col-lg-3 col-sm-6 mb-30">
                    <div class="part-thumb">
                        <img src="{{asset('home/images/elements/part-image.png')}}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- part-section end -->

    <!-- affiliate-bonus-section start -->

    <!-- affiliate-bonus-section end -->

    <!-- memebership-level-section start -->

    <!-- memebership-level-section end -->

    <!-- how-work-section start -->
    <section class="how-work-section pt-120 pb-120">
        <div class="bg_img" data-background="{{asset('home/images/how-work-bg.png')}}"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-header text-center text-white">
                        <span class="section-subtitle">Here's How it Works</span>
                        <h2 class="section-title">Getting Started?It's Simple</h2>
                        <p>The affiliate program is our special feature for loyal Investors.Invite users and earn 10% - 30% of the fee on their exchange transactions!</p>
                    </div>
                </div>
            </div>
            <div class="row mb-none-30">
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="how-work-item">
                        <div class="icon">
                            <div class="circle-elements"><img src="{{asset('home/images/elements/how-work-icon-shape.png')}}" alt="image"></div>
                            <div class="icon-inner"><img src="{{asset('home/images/icons/how-work/1.png')}}" alt="image"></div>
                        </div>
                        <h3 class="title">Join Program</h3>
                        <p>Once you sign up, you’ll get a personalized link to send to your friends.Click Join Now below and start EARNING in just a few clicks.</p>
                        <a href="#0" class="btn btn-danger" data-toggle="modal" data-target="#signUpModal">join now</a>
                    </div>
                </div><!-- how-work-item end -->
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="how-work-item">
                        <div class="icon">
                            <div class="circle-elements"><img src="{{asset('home/images/elements/how-work-icon-shape.png')}}" alt="image"></div>
                            <div class="icon-inner"><img src="{{asset('home/images/icons/how-work/2.png')}}" alt="image"></div>
                        </div>
                        <h3 class="title">Promote</h3>
                        <p>Share your referral link wherever, whenever (don’t be selfish).Monetize your traffic with a Tracking Link.</p>
                        <!-- <a href="#0" class="btn btn-danger">Tracking Link</a> -->
                    </div>
                </div><!-- how-work-item end -->
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="how-work-item">
                        <div class="icon">
                            <div class="circle-elements"><img src="{{asset('home/images/elements/how-work-icon-shape.png')}}" alt="image"></div>
                            <div class="icon-inner"><img src="{{asset('home/images/icons/how-work/3.png')}}" alt="image"></div>
                        </div>
                        <h3 class="title">Earn</h3>
                        <p>Get up to 10% commission. Earn from ALL products with your 30 day cookie, not just those you advertise.</p>
                        <!-- <a href="#0" class="btn btn-danger">Commission Model</a> -->
                    </div>
                </div><!-- how-work-item end -->
            </div>
        </div>
    </section>
    <!-- how-work-section end -->

    <!-- testimonial-section start -->
    <section class="testimonial-section pt-120 pb-120">
        <div class="shape"><img src="{{asset('home/images/elements/testimonial-shape-2.png')}}" alt="image"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-header text-center">
                        <span class="section-subtitle">testimonials</span>
                        <h2 class="section-title">Already Earning With Us</h2>
                        <p>We pay 10% on each purchase from your referrals. Our average user makes purchases for $48.39 per month that means every month you can receive $11.61 from each of your referrals.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <div class="testmonial-slider-wrapper style--two">
                        <div class="testimonial-slider owl-carousel">
                            <div class="testimonial-single-two">
                                <div class="thumb"><img src="{{asset('home/images/testimonial/2.jpg')}}" style="border-radius: 50%;" alt="image"></div>
                                <h4 class="name">Thomas Crane</h4>
                                <p>
                                    This is the best portfolio management program I have used it my 30+years of investing. I would recommend {{$siteName}} to anyone with a portfolio of any size.
                                </p>
                            </div><!-- testimonial-single-two end -->

                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="testimonial-shape-thumb d-lg-block d-none"><img src="{{asset('home/images/elements/testimonial-shape.png')}}" alt="image"></div>
                </div>
            </div>
        </div></section>
    <!-- testimonial-section end -->

@endsection
