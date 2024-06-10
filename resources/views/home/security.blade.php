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
                            Financial Security
                        </h2>

                        <div class="row mt-4 mb-none-30 investment-item-area">
                            <div class="col-12 investment-item">
                                <div class="investment-single mb-30">

                                    <div class="content">
                                        <div class="left">

                                            <br>
                                            <br>

                                            <h3>Segregation of client funds</h3>
                                            In accordance with FCA rules, all client money is kept fully segregated from {{$siteName}}’ own assets in an EEA-regulated credit institution. This ensures that clients’ funds are identifiable and available at all times and cannot be used by A{{$siteName}} for any purpose. Furthermore, under UK insolvency law, client money is protected and therefore unavailable to general creditors of the firm, if the firm fails.
                                            <br>
                                            <br>

                                            {{$siteName}} performs daily client money reconciliations in accordance with FCA requirements. This process ensures that funds held in segregated bank accounts always accurately reflect client assets. The full value of a client trading account is treated as client money. {{$siteName}} is regulated by the FCA and is required to file individual Client Money Asset Returns (CMAR) on a monthly basis with the regulator.
                                            <br>
                                            <br>

                                            {{$siteName}} client money controls and processes are audited annually by our auditors who report to the FCA.
                                            <br>
                                            <br>

                                            If the bank/Cryptocurrrency wallet which is used to hold segregated client money goes into liquidation, any losses would be shared by clients in proportion to their share of the total amount held with the failed bank. Any funds lost as a result of this liquidation of a bank regulated by the Prudential Regulation Authority (PRA), will be covered by the FSCS up to a limit of £85,000 per client (https://www.fscs.org.uk/). Any funds lost as a result of the liquidation of a European bank may be covered up to a limit of $100,000 per client, under the Deposit Guarantee scheme: Deposit Guarantee Scheme
                                            <br>
                                            <br>

                                            <h3>The Financial Services Compensation Scheme (FSCS)</h3>
                                            The FSCS exists to protect customers of financial services firms that have failed. The FSCS can pay compensation up to £85,000, if a firm ceases trading with a deficit in their segregated client money. It also pays compensation up to £85,000 if a PRA regulated bank which is used to hold segregated client money goes into liquidation.
                                            <br>
                                            <br>

                                            <h3>Deposit Guarantee Schemes</h3>
                                            Deposit guarantee schemes (DGS) reimburse a limited amount to compensate depositors whose bank has failed. Under EU rules, deposit guarantee schemes protect depositors` savings by guaranteeing deposits of up to $100,000.
                                            <br>
                                            <br>

                                            In Europe, they are organised at the national level, although minimum standards have been agreed at the EU level. Under EU rules, $100,000 per depositor is guaranteed through such schemes. Some Member States have several schemes in place, organised by different banking groups, such as savings banks, cooperative banks, public sector banks or private banks
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
