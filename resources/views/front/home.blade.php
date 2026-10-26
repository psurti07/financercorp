@extends('layouts.front')
@push('css')
    <link rel="stylesheet" href="{{ asset('front/calc/commoncalculator.css') }}">
    <link rel="stylesheet" href="{{ asset('front/calc/emicalculator.css') }}">
    <link rel="stylesheet" href="{{ asset('front/calc/calcstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/custom.css') }}">
@endpush
@push('style-css')
@endpush
@section('content')
    <section id="hero-7" class="hero-section bg--green-100">
        <div class="container">
            <div class="row d-flex align-items-center">

                <div class="col-md-12 col-lg-6 col-12">
                    <div class="hero-7-txt mb-4">
                        <span class="color--blue-500 text-uppercase mb-2 d-block s-10">LOAN APPLICATION SUPPORT PLATFORM</span>
                        <h1 class="w-700 color--white mb-3">Clear Financial Guidance For Every <span
                                class="color--blue-500">Application Step</span></h1>
                        <p class=" color--white mb-4">Get support with documents, application steps and lender requirements through our associated NBFC partner network.</p>
                        {{-- <a href="{{ route('self.apply.main') }}"
                         class="btn r-04 btn--theme hover--tra-white last-link me-2 mb-md-0 mb-0">Self
                         Apply</a> --}}
                        <a href="{{ route('loan.agent.main') }}"
                            class="btn r-04 btn--theme hover--tra-white rounded-pill last-link">Hire
                            an Agent</a>
                    </div>
                   
                    <div class="statistic-5-wrapper mt-4 counter-border">
                        <div class="row row-cols-2 row-cols-md-4 g-2">
                            <div class="col sec-1 staticts-1 staticts-1 mt-0">
                                <div id="sb-5-1" class="text-center">
                                    <div class="statistic-block text-lg-start text-center">
                                        <div class="statistic-digit">
                                            <h4 class="s-26 w-700 mb-2 color--green-500">
                                                <span class="count-element">10000</span>+
                                            </h4>
                                        </div>
                                        <div class="statistic-txt">
                                            <p class="s-11 w-500 color--grey text-uppercase">Happy Customers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col sec-2 staticts-1 staticts-border mt-0">
                                <div id="sb-5-3" class="text-center">
                                    <div class="statistic-block ttext-lg-start text-center">
                                        <div class="statistic-digit">
                                            <h4 class="s-26 w-700 mb-2 color--green-500">
                                                <span class="count-element">10</span>Cr+
                                            </h4>
                                        </div>
                                        <div class="statistic-txt">
                                            <p class="s-11 w-500 color--grey text-uppercase">Application Value Assisted</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col sec-3 staticts-1 staticts-border-top mt-0">
                                <div id="sb-5-2" class="text-center">
                                    <div class="statistic-block text-lg-start text-center">
                                        <div class="statistic-digit">
                                            <h4 class="s-26 w-700 mb-2 color--green-500">
                                                <span class="count-element">8</span>+
                                            </h4>
                                        </div>
                                        <div class="statistic-txt">
                                            <p class="s-11 w-500 color--grey text-uppercase">NBFC Partners</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col sec-4 staticts-1">
                                <div id="sb-5-4" class="text-center">
                                    <div class="statistic-block text-lg-start text-center">
                                        <div class="statistic-digit">
                                            <h4 class="s-26 w-700 mb-2 color--green-500">
                                                <span class="count-element">100</span>%
                                            </h4>
                                        </div>
                                        <div class="statistic-txt">
                                            <p class="s-11 w-500 color--grey text-uppercase">Digital Process</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 col-12 m-auto mt-lg-0 mt-4">
                 <div class="home-img text-center">
                        <img src="{{ asset('front/images/home-1.png') }}" alt="wisemudra" class="img-fluid r-20 p-0">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-80 content-section division bg--yellow-100" id="company">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 pe-lg-40 company-left-content">
                    <h6 class="s-14 txt-upcase mb-20">About FinancerCorp</h6>
                    <div class="mb-20 quote">
                        <p class="s-18 mb-0 text-dark">
                            At FinancerCorp, we provide clear loan application support to help individuals understand documents, application steps and general lender requirements. We work with associated NBFC partners to help make the process more transparent and easier to navigate.
                        </p>
                    </div>

                    <p class="s-15 color--coal mb-15">
                        Our team provides guidance with document preparation, application information and next-step support. FinancerCorp does not provide loans or make lending decisions.
                    </p>

                </div>

                <!-- Why It Matters -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 ps-lg-40 mt-4 mt-md-0">

                    <h6 class="s-14 txt-upcase mb-20">Why It Matters</h6>

                    <ul class="list-unstyled mb-0">
                        <li class="d-flex align-items-start mb-15">
                            <span class="color--green-500 me-3">●</span>
                            <span class="s-15 color--coal mb-0">
                                <strong class="color--black">Clear application guidance.</strong>
                                Understand the documents and steps involved in a loan application.
                            </span>
                        </li>

                        <li class="d-flex align-items-start mb-15">
                            <span class="color--green-500 me-3">●</span>
                            <span class="s-15 color--coal mb-0">
                                <strong class="color--black">Transparent service information.</strong>
                                Any applicable service fee is shared before you choose support.
                            </span>
                        </li>

                        <li class="d-flex align-items-start mb-15">
                            <span class="color--green-500 me-3">●</span>
                            <span class="s-15 color--coal mb-0">
                                <strong class="color--black">Support through the process.</strong>
                              Receive guidance until your application is submitted for NBFC review.
                            </span>
                        </li>

                        <li class="d-flex align-items-start mb-0">
                            <span class="color--green-500 me-3">●</span>
                            <span class="s-15 color--coal mb-0">
                                <strong class="color--black">Associated NBFC network.</strong>
                                We work with associated NBFC partners, subject to their respective criteria.
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- why Financercorp section starts -->

    <section id="features-6" class="py-80 features-section division bg--yellow-300">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-9">
                    <div class="section-title text-center mb-50">
                        <span class="section-subtitle color--green-500"> — WHAT SETS US APART</span>
                        <h2 class="s-28">Why <span class="color--green-500">Choose Us</span></h2>
                        <p class="s-16 color--grey">Because Your Dreams Deserve Smart Support</p>
                    </div>
                </div>
            </div>

            <div class="fbox-wrapper">
                <div class="row gx-3 gy-3 row-cols-1 row-cols-md-2 row-cols-lg-4">

                    <div class="col">
                        <div class="fbox-8 bg--yellow-100 fb-2 r-16 h-100">
                            <div class="fbox-ico ico-25">
                                <div class="shape-ico color--theme bg--green-100 p-10 pb-0 r-12 lh-1">
                                    <span class="flaticon-home"></span>
                                </div>
                            </div>

                            <div class="fbox-txt">
                                <h4 class="s-18 w-700">Associated NBFC Network</h4>
                                <p class="color--grey">
                                    Explore application support through our associated NBFC partner network.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="fbox-8 bg--yellow-100 fb-2 r-16 h-100">
                            <div class="fbox-ico ico-25">
                                <div class="shape-ico color--theme bg--green-100 p-10 pb-0 r-12 lh-1">
                                    <span class="flaticon-file"></span>
                                </div>
                            </div>

                            <div class="fbox-txt">
                                <h4 class="s-18 w-700">Digital Application Support</h4>
                                <p class="color--grey">
                                    Complete application steps online where available.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="fbox-8 bg--yellow-100 fb-2 r-16 h-100">
                            <div class="fbox-ico ico-25">
                                <div class="shape-ico color--theme bg--green-100 p-10 pb-0 r-12 lh-1">
                                    <span class="flaticon-download"></span>
                                </div>
                            </div>

                            <div class="fbox-txt">
                                <h4 class="s-18 w-700">Application Guidance </h4>
                                <p class="color--grey">
                                    Get clear guidance on documents, application steps and general lender requirements.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="fbox-8 bg--yellow-100 fb-3 r-16 h-100">
                            <div class="fbox-ico ico-25">
                                <div class="shape-ico color--theme bg--green-100 p-10 pb-0 r-12 lh-1">
                                    <span class="flaticon-user"></span>
                                </div>
                            </div>

                            <div class="fbox-txt">
                                <h4 class="s-18 w-700">Choose Your Support Option</h4>
                                <p class="color--grey">
                                    Apply independently or request application support based on your preference.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- why Financercorp section ends -->

    <!-- Trust Badges Section starts -->
    <div id="statistic-1" class=" bg--green-400 ct-03 py-50 statistic-section division">
        <div class="container">
            <div class="statistic-5-wrapper">
                <div class="row row-cols-2 row-cols-md-4">
                    <div class="col sec-1">
                        <div id="sb-5-1" class="text-center">
                            <div class="statistic-block">
                                <div class="statistic-digit">
                                    <h2 class="s-30 w-700 mb-10">
                                        <span class="count-element">10000</span>+
                                    </h2>
                                </div>
                                <div class="statistic-txt">
                                    <h5 class="s-16 w-500">Happy Customer</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col sec-2 staticts-1">
                        <div id="sb-5-3" class="text-center">
                            <div class="statistic-block">
                                <div class="statistic-digit">
                                    <h2 class="s-30 w-700 mb-10">
                                        <span class="count-element">45</span>Cr+
                                    </h2>
                                </div>
                                <div class="statistic-txt">
                                    <h5 class="s-16 w-500">Application Value Assisted</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col sec-3 staticts-1">
                        <div id="sb-5-2" class="text-center">
                            <div class="statistic-block">
                                <div class="statistic-digit">
                                    <h2 class="s-30 w-700 mb-10">
                                        <span class="count-element">8</span>+
                                    </h2>
                                </div>
                                <div class="statistic-txt">
                                    <h5 class="s-16 w-500">NBFC Partners</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col sec-4 staticts-1">
                        <div id="sb-5-4" class="text-center">
                            <div class="statistic-block">
                                <div class="statistic-digit">
                                    <h2 class="s-30 w-700 mb-10">
                                        <span class="count-element">100</span>%
                                    </h2>
                                </div>
                                <div class="statistic-txt">
                                    <h5 class="s-16 w-500">Digital Process</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Trust Badges Section ends -->

    <section id="products" class="py-80 features-section division bg--yellow-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-9">
                    <div class="section-title text-center mb-50">
                        <span class="section-subtitle color--green-500"> APPLICATION SUPPORT OPTIONS </span>
                        <h2 class="s-28">Choose the Support That Suits <span class="color--green-500">Your Application</span></h2>
                        <p class="s-16 color--grey">Explore guidance for documents, application steps and lender requirements. </p>
                    </div>
                </div>
            </div>

            <div class="fbox-wrapper">
                <div class="row align-items-center justify-content-center m-auto">
                    <div class="col-sm-12 col-md-10 col-lg-6 ">
                        <div class="fbox-8 bg--green-100 fb-2 h-100 r-22 card-main-blog">
                            <div class="fbox-ico">
                         <img src="{{ asset('front/images/hire-agent-img.png') }}" alt="wisemudra" class="img-fluid">
                            </div>

                            <div class="fbox-txt">
                                <h4 class="color--white w-700 s-24">Hire a Loan Agent</h4>
                                <p class="color--grey pb-3">
                                   Get guidance on required documents and application steps. Final eligibility, terms and approval are determined by the respective NBFC.
                                </p>
                                <a href="{{ route('loan.agent.main') }}"
                                    class="btn r-04 btn--theme hover--tra-white r-100">Apply Now</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="py-80 ct-04 content-section division bg--green-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="section-title text-start mb-50">
                    <span class="section-subtitle color--green-500 text-uppercase"> — Six Simple steps</span>
                    <h2 class="s-28 color--white mb-2">How it <span class="color--green-500">works</span></h2>
                    <p class="s-16 color--grey mt-0">A clear process for application guidance and support. </p>
                </div>
            </div>
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 col-md-6 col-12 order-first order-md-2">
                    <div class="txt-block left-column">
                        <div class="cbox-2 process-step">
                            <div class="ico-wrap">
                                <div class="cbox-2-ico bg--tra-black color--green-500 d-flex align-items-center justify-content-center">01</div>
                                <span class="cbox-2-line"></span>
                            </div>
                            <div class="cbox-2-txt">
                                <h4 class="s-18 w-700 color--white">Share Basic Details</h4>
                                <p class="mb-0 color--grey">Begin by sharing your contact details and loan application requirements.</p>
                            </div>
                        </div>
                        <div class="cbox-2 process-step">
                            <div class="ico-wrap">
                                <div class="cbox-2-ico bg--tra-black color--green-500 d-flex align-items-center justify-content-center">02</div>
                                <span class="cbox-2-line"></span>
                            </div>
                            <div class="cbox-2-txt">
                                <h4 class="s-18 w-700 color--white">Review Application Details</h4>
                                <p class="mb-0 color--grey">We review the information provided to guide you on relevant documents and next steps. This does not determine or guarantee eligibility.</p>
                            </div>
                        </div>
                        <div class="cbox-2 process-step">
                            <div class="ico-wrap">
                                <div class="cbox-2-ico bg--tra-black color--green-500 d-flex align-items-center justify-content-center">03</div>
                                <span class="cbox-2-line"></span>
                            </div>
                            <div class="cbox-2-txt">
                                <h4 class="s-18 w-700 color--white">Choose Application Support</h4>
                                <p class="mb-0 color--grey">Review the available support option and any applicable service fee before proceeding.</p>
                            </div>
                        </div>
                        <div class="cbox-2 process-step">
                            <div class="ico-wrap">
                                <div class="cbox-2-ico bg--tra-black color--green-500 d-flex align-items-center justify-content-center">04</div>
                                <span class="cbox-2-line"></span>
                            </div>
                            <div class="cbox-2-txt">
                                <h4 class="s-18 w-700 color--white">Submit Required Documents</h4>
                                <p class="mb-0 color--grey">Get guidance on the documents required for the application process.</p>
                            </div>
                        </div>
                        <div class="cbox-2 process-step">
                            <div class="ico-wrap">
                                <div class="cbox-2-ico bg--tra-black color--green-500 d-flex align-items-center justify-content-center">05</div>
                                <span class="cbox-2-line"></span>
                            </div>
                            <div class="cbox-2-txt">
                                <h4 class="s-18 w-700 color--white">NBFC Review</h4>
                                <p class="mb-0 color--grey">The respective NBFC reviews the application and documents according to its own policies and criteria.</p>
                            </div>
                        </div>
                        <div class="cbox-2 process-step">
                            <div class="ico-wrap">
                                <div class="cbox-2-ico bg--tra-black color--green-500 d-flex align-items-center justify-content-center">06</div>
                            </div>
                            <div class="cbox-2-txt">
                                <h4 class="s-18 w-700 color--white">Receive NBFC Decision</h4>
                                <p class="mb-0 color--grey">The respective NBFC communicates the final decision, including eligibility, terms and next steps.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- eligibility calculator starts -->
    <section id="Calculate" class="py-80 features-section division bg--yellow-300">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-10">
                    <div class="section-title mb-40">
                        <h2 class="s-28">Estimate <span class="color--green-500">Your EMI Easily</span></h2>
                        <p class="s-16 color--grey">Estimate your monthly EMI based on the amount, interest rate and tenure you select.</p>
                    </div>
                </div>
            </div>
            <div class="p-30 bg--white-100 shadow border-grey-1 r-20">
            <div class="row">
                <div class="col-md-7 order-first order-md-2">
                    <div id="emicalculatorinnerformwrapper">
                        <form id="emicalculatorform" class="comment-form">
                            <div class="form-horizontal" id="emicalculatorinnerform">
                                <div class="row">
                                    <!-- Loan Amount slider section starts -->
                                    <div class="col-md-12">
                                        <div class="row form-group lamount flex-display align-items-center">
                                            <label class="col-6 control-label s-18 w-500" for="loanamount">Loan
                                                amount</label>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text color--purple-500">₹</span>
                                                        </div>
                                                        <input class="form-control custm-box w-400" id="loanamount"
                                                            name="loanamount" value="10,00,000" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="loanamountslider"></div>
                                        <div id="loanamountsteps" class="steps">
                                            <span class="tick" style="left: 0%;">| <br>
                                                <span class="marker">50K</span>
                                            </span>
                                            <span class="tick d-none d-sm-block" style="left: 12.5%;">| <br>
                                                <span class="marker">10L</span>
                                            </span>
                                            <span class=tick style="left: 25%;">| <br>
                                                <span class=marker>20L</span>
                                            </span>
                                            <span class="tick d-none d-sm-block" style="left: 37.5%;">| <br>
                                                <span class="marker">30L</span>
                                            </span>
                                            <span class="tick" style="left: 50%;">| <br>
                                                <span class="marker">40L</span>
                                            </span>
                                            <span class="tick d-none d-sm-block" style="left: 62.5%;">| <br>
                                                <span class="marker">50L</span>
                                            </span>
                                            <span class="tick" style="left: 75%;">| <br>
                                                <span class="marker">60L</span>
                                            </span>
                                            <span class="tick d-none d-sm-block" style="left: 87.5%;">| <br>
                                                <span class="marker">70L</span>
                                            </span>
                                            <span class="tick" style="left: 100%;">| <br>
                                                <span class="marker">80L</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Loan Amount slider section ends -->
                                    <!-- Interest Rate slider section starts -->
                                    <div class="col-md-12 mt-100">
                                        <div class="row form-group lint flex-display align-items-center">
                                            <label class="col-6 s-18 w-500 control-label" for="loaninterest">Interest
                                                rate</label>
                                            <div class="col-6">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">%</span>
                                                    </div>
                                                    <input class="form-control custm-box w-400" id="loaninterest"
                                                        name="loaninterest" value="10.5" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div id="loaninterestslider"></div>
                                        <div id="loanintereststeps" class="steps">
                                            <span class="tick" style="left: 0%;">| <br>
                                                <span class="marker">5</span>
                                            </span>
                                            <span class="tick" style="left: 16.67%;">| <br>
                                                <span class="marker">7.5</span>
                                            </span>
                                            <span class="tick" style="left: 33.34%;">| <br>
                                                <span class="marker">10</span>
                                            </span>
                                            <span class="tick" style="left: 50%;">| <br>
                                                <span class="marker">12.5</span>
                                            </span>
                                            <span class="tick" style="left: 66.67%;">| <br>
                                                <span class="marker">15</span>
                                            </span>
                                            <span class="tick" style="left: 83.34%;">| <br>
                                                <span class="marker">17.5</span>
                                            </span>
                                            <span class="tick" style="left: 100%;">| <br>
                                                <span class="marker">20</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Interest Rate slider section ends -->
                                    <!-- Loan Tenure slider section starts -->
                                    <div class="col-md-12 mt-100">
                                        <div class="row form-group lterm flex-display align-items-center">
                                            <label class="col-6 s-18 w-500 control-label" for="loanterm">Select EMI
                                                option</label>
                                            <div class="col-6">
                                                <div class="loantermwrapper">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend d-none">
                                                            <label class="s-14 input-group-text">
                                                                <input type="radio" class="mr-5" name="loantenure"
                                                                    id="loanyears" value="loanyears" tabindex="4"
                                                                    autocomplete="off"><span class="s-14">Yr</span>
                                                            </label>
                                                        </div>
                                                        <input class="form-control custm-box-2 w-400" id="loanterm"
                                                            name="loanterm" value="20" type="text">
                                                        <div class="input-group-prepend">
                                                            <label class="s-14 input-group-text months-input">
                                                                <input type="radio" class="mr-5 d-none"
                                                                    name="loantenure" id="loanmonths" value="loanmonths"
                                                                    tabindex="5" autocomplete="off" checked="checked">
                                                                <span class="s-14">Months</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="loantermslider"></div>
                                        <div id="loantermsteps" class="steps">
                                            <span class="tick" style="left: 0%;">| <br>
                                                <span class="marker">0</span>
                                            </span>
                                            <span class="tick" style="left: 16.67%;">| <br>
                                                <span class="marker">5</span>
                                            </span>
                                            <span class="tick" style="left: 33.33%;">| <br>
                                                <span class="marker">10</span>
                                            </span>
                                            <span class="tick" style="left: 50%;">| <br>
                                                <span class="marker">15</span>
                                            </span>
                                            <span class="tick" style="left: 66.67%;">| <br>
                                                <span class="marker">20</span>
                                            </span>
                                            <span class="tick" style="left: 83.33%;">| <br>
                                                <span class="marker">25</span>
                                            </span>
                                            <span class="tick" style="left: 100%;">| <br>
                                                <span class="marker">30</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Loan Tenure slider section ends -->
                                </div>
                            </div>
                            <input id="loanproduct" name="loanproduct" value type="hidden">
                            <input id="loanstartdate" name="loanstartdate" value type="hidden">
                            <input id="loanyearformat" name="loanyearformat" value type="hidden">
                            <input id="loandata" name="loandata" value type="hidden">
                            <input id="calcversion" name="calcversion" value=4.0 type="hidden">
                        </form>
                        <div class="row gutter-left gutter-right d-none">
                            <div id="emipaymentsummary" class="col-sm-5 col-md-6 no-gutter-left no-gutter-right">
                                <div id="emiamount">
                                    <h4>Loan EMI</h4>
                                    <p>₹ <span>24,959</span>
                                    </p>
                                </div>
                                <div id="emitotalinterest">
                                    <h4>Total Interest Payable</h4>
                                    <p>₹ <span>34,90,279</span>
                                    </p>
                                </div>
                                <div id="emitotalamount" class="column-last">
                                    <h4>Total Payment <br>(Principal + Interest) </h4>
                                    <p>₹ <span>59,90,279</span>
                                    </p>
                                </div>
                            </div>
                            <div id="emipiechart"
                                class="d-none no-gutter-left no-gutter-right col-sm-7 col-md-6 highcharts-container"></div>
                        </div>
                    </div>
                </div>
                {{-- display none graph and list of emi's start --}}
                <div id="emipaymentdetails" class="d-none">
                    <form class="gutter-left gutter-right form-horizontal">
                        <div class="row form-group" id="emipaymentscheduleheader">
                            <label class="col-md-4 col-lg-5 control-label" for="startmonthyear">Schedule showing EMI
                                payments starting from</label>
                            <div class="col-md-4 col-lg-3">
                                <div class="input-group">
                                    <input class="form-control" id="startmonthyear" name="startmonthyear" value
                                        type="text">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="far fa-calendar-alt"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-3 form-group lyearformat">
                                <select class="form-control" tabindex="15" name="yearformat" id="yearformat">
                                    <option value="calendaryear" selected="selected">Calendar Year wise</option>
                                    <option value="financialyear">Financial Year wise</option>
                                </select>
                            </div>
                        </div>
                    </form>
                    <div id="emibarchart" class="hidden-ts highcharts-container"></div>
                    <div id="emipaymenttable"></div>
                </div>
                {{-- display none graph and list of emi's end --}}
                <div class="col-md-5 order-last order-md-2 emi-details">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="p-4 text-center border-bottom">
                                <h6 class="card-title mb-3">Your monthly instalment:</h6>
                                <h2 class="mb-0 text-center s-40 color--purple-500" id="emiamount">₹<span>888</span></h2>
                            </div>
                            <div class="p-4">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="text-muted s-15">Total interest</span>
                                    <span id="emitotalinterest">₹<span>656</span></span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="text-muted s-15">Principal amount</span>
                                    <span id="principalamount">₹<span>10,000</span></span>
                                </div>
                                <hr style="border:1px dashed grey">
                                <div class="d-flex justify-content-between mb-4">
                                    <span class="s-16">Total amount</span>
                                    <span id="emitotalamount">₹<span>10,000</span></span>
                                </div>
                                <a href="{{ route('loan.agent.main') }}"
                                    class="btn btn--green-400 hover--tra-black w-100">Apply for loan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
         
        </div>
    </section>
    <!-- eligibility calculator ends -->
    {{-- <hr class="divider"> --}}

    <!-- Our Partners section start  -->
    <section id="integrations-2" class="py-80 bg--yellow-100 integrations-section ">
        <div class="container">
            <div class="r-12 text-center">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-9">
                        <div class="section-title text-center mb-50">
                            <span class="section-subtitle color--green-500"> — Our network</span>
                            <h2 class="s-28">Our <span class="color--green-500">partnered NBFC</span></h2>
                            <p class="s-16 color--grey">Collaborating With The Finest In The Industry</p>
                        </div>
                    </div>
                </div>
                @php
                    $lists = nbfcsList();
                @endphp

                <div class="bank-crousel">
                    <div class="row">
                        <div class="col text-center">
                            <div class="owl-carousel brands-carousel-6 emi-carousel">
                                {!! $lists['carousel'] !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Partners section end  -->

    <!-- Testimonioals section starts -->
    <section id="reviews-1" class="py-80 reviews-section bg--yellow-300">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-9">
                    <div class="section-title text-center mb-50">
                        <span class="section-subtitle color--green-500"> — Real stories</span>
                        <h2 class="s-28">Words That Keeps<span class="color--green-500"> Us Going</span></h2>
                        <p class="s-16 color--grey">Hear It Directly From Our Customers</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Testimonials carousel start  -->
                    @include('partials.front.testimonials')
                    <!-- Testimonials carousel end  -->
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonioals section ends -->

    <!-- Contact Start -->

    <section id="contact" class=" bg--white-400">
        <div class="row g-0 align-items-stretch">

            <div class="col-lg-6 bg--green-100 p-60">
                <div class="sec-title2 mb-40">
                    <p class="s-13 color--green-500 mb-20"> — GET IN TOUCH</p>
                    <h2 class="s-28 color--white">We're here to<br>help you decide.</h2>
                    <p class="description color--grey">
                        Drop us a message with a few basic details and
                        our team will get back to you shortly.
                    </p>
                </div>

                <div class="address-item mb-20">
                    <div class="address-text">
                        <h6 class="s-13 color--green-500"> CUSTOMER SUPPORT </h6>
                        <p class="address-txt color--grey">
                            <a class="color--grey"
                                href="tel:{{ preg_replace('/\s+/', '', config('constant.COMPANY_MOBILE')) }}">
                                {{ config('constant.COMPANY_MOBILE') }}
                            </a>
                        </p>
                    </div>
                </div>

                <div class="address-item mb-20">
                    <div class="address-text">
                        <h6 class="s-13 color--green-500">
                            EMAIL US
                        </h6>

                        <p class="address-txt color--grey">
                            <a class="color--grey" href="mailto:{{ config('constant.COMPANY_SUPPORT_MAIL') }}">
                                {{ config('constant.COMPANY_SUPPORT_MAIL') }}
                            </a>
                        </p>
                    </div>
                </div>

                <div class="address-item mb-20">
                    <div class="address-text">
                        <h6 class="s-13 color--green-500">
                            ADDRESS
                        </h6>

                        <p class="address-txt color--grey">
                            {{ config('constant.COMPANY_ADDRESS') }}
                        </p>
                    </div>
                </div>

                <div class="address-item">
                    <div class="address-text">
                        <h6 class="s-13 color--green-500">
                            WORKING HOURS
                        </h6>

                        <p class="address-txt color--grey">
                            Mon-Sat: 10:00 AM - 5:00 PM<br>
                            Sunday: Closed
                        </p>
                    </div>
                </div>
            </div>

            {{-- Right Side: Contact Form --}}

            <div class="col-lg-6 bg--yellow-100 p-60">
                <div class="h-100">
                    <form method="post" action="{{ route('front.contact.us.store') }}" class="contact-form career-form"
                        enctype="multipart/form-data">

                        @csrf

                        <div class="row gx-3 gy-3">

                            <div class="col-md-6 col-12">
                                <label for="form_name" class="contact-label d-block mb-2 w-500 color--grey text-uppercase">Full Name</label>
                                <input id="form_name" name="fullname" type="text"
                                    class="form-control border-bottom bg--tra-black name mb-0 pb-2 ps-0" placeholder="Your Name">
                                @component('components.ajax-error', ['field' => 'fullname'])
                                @endcomponent
                            </div>

                            <div class="col-md-6 col-12">
                                <label for="form_mobile" class="contact-label d-block mb-2 w-500 color--grey text-uppercase">Mobile</label>
                                <input id="form_mobile" type="tel" name="mobile"
                                    class="form-control border-bottom bg--tra-black numeric-input mobile mb-0 pb-2 ps-0"
                                    placeholder="+91" minlength="10" maxlength="10" inputmode="numeric">
                                @component('components.ajax-error', ['field' => 'mobile'])
                                @endcomponent
                            </div>

                            <div class="col-md-6 col-12">
                                <label for="form_email" class="contact-label d-block mb-2 w-500 color--grey text-uppercase">Email</label>
                                <input id="form_email" type="email" name="email"
                                    class="form-control border-bottom bg--tra-black email mb-0 pb-2 ps-0"
                                    placeholder="you@example.com">
                                @component('components.ajax-error', ['field' => 'email'])
                                @endcomponent
                            </div>

                            <div class="col-md-6 col-12">
                                <label for="form_subject" class="contact-label d-block mb-2 w-500 color--grey text-uppercase">Subject</label>
                                <input id="form_subject" type="text" name="subject"
                                    class="form-control border-bottom bg--tra-black subject mb-0 pb-2 ps-0"
                                    placeholder="Loan enquiry">
                                @component('components.ajax-error', ['field' => 'subject'])
                                @endcomponent
                            </div>

                            <div class="col-12">
                                <label for="form_message" class="contact-label d-block mb-2 w-500 color--grey text-uppercase">Message</label>
                                <textarea id="form_message" name="desc" class="form-control border-bottom bg--tra-black message mb-0 pb-2 ps-0"
                                    placeholder="Tell us what you need..."></textarea>
                                @component('components.ajax-error', ['field' => 'desc'])
                                @endcomponent
                            </div>

                            <div class="col-12 pt-3">
                                <button type="submit" class="btn btn--green-400 hover--tra-black submit r-100"
                                    id="submit-btn">
                                    Submit Request
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>


        </div>
    </section>

    <!-- Contact End -->

    {{-- Wlecome message modal show here --}}
    @if ($msg->status == 1)
        <div class="modal fade myModal" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row p-3">
                            <p>{!! $msg->content ?? 'N/A' !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection

@push('script-src')
    <script type="text/javascript" src="{{ asset('front/calc/calccore.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front/calc/mouse.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front/calc/slider.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front/calc/commoncalculator.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front/calc/emicalculator.js') }}"></script>
@endpush

@push('scripts')
    <script src="{{ asset('front/js/home.js') }}" type="text/javascript"></script>
    @if ($msg->status == 1)
        <script>
            $(document).ready(function() {
                setTimeout(function() {
                    $(".myModal:not(.auto-off)").modal("show");
                }, 3600);
            })
        </script>
    @endif

    <script>
        const routes = {
            'selfapply': "{{ route('loan.agent.send.otp') }}",
        };

        document.addEventListener('DOMContentLoaded', () => {
            const faqs = document.querySelectorAll('#faq-container li');
            const loadMoreButton = document.getElementById('load-more-faq');
            const viewLessButton = document.getElementById('view-less-faq');
            let visibleCount = 5; // Number of FAQs initially shown
            const batchSize = 5; // Number of FAQs to show on each click

            // Initial setup: Show the first 7 FAQs
            faqs.forEach((faq, index) => {
                if (index >= visibleCount) {
                    faq.style.display = 'none';
                }
            });

            // Event listener for Load More button
            loadMoreButton.addEventListener('click', () => {
                const hiddenFaqs = Array.from(faqs).filter(faq => faq.style.display === 'none');
                for (let i = 0; i < batchSize && i < hiddenFaqs.length; i++) {
                    hiddenFaqs[i].style.display = 'list-item';
                }

                // Show the "View Less" button once more items are displayed
                if (hiddenFaqs.length > 0) {
                    viewLessButton.style.display = 'inline-block';
                }

                // Hide the "Load More" button if no more FAQs to show
                if (hiddenFaqs.length <= batchSize) {
                    loadMoreButton.style.display = 'none';
                }
            });

            // Event listener for View Less button
            viewLessButton.addEventListener('click', () => {
                faqs.forEach((faq, index) => {
                    if (index >= visibleCount) {
                        faq.style.display = 'none';
                    }
                });

                // Reset button visibility
                loadMoreButton.style.display = 'inline-block';
                viewLessButton.style.display = 'none';
            });
        });

        $(document).ready(function() {
            $(".contact-form").submit(function(e) {
                let status = document.activeElement.innerHTML;
                e.preventDefault();
                if (status) {
                    $('.ajax-error').html('');
                    let data = new FormData(this);
                    $.ajax({
                        url: $(this).attr("action"),
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: 'POST',
                        data: data,
                        processData: false,
                        contentType: false,
                        beforeSend: function() {
                            $("#submit-btn").html(
                                '<span class="spinner-border spinner-border-sm"></span> Submit Request '
                            )
                            $("#submit-btn").attr('disabled', true);
                        },
                        success: function(result) {
                            $(this).attr("disabled", false);
                            if (result.type === 'SUCCESS') {
                                toastr.success(result.message);
                                setTimeout(function() {
                                    location.reload();
                                }, 3000);
                            } else {
                                toastr.error(result.message);
                                $('#submit-btn').html('Submit Request');
                                $('#submit-btn').attr('disabled', false);
                            }
                        },
                        error: function(error) {
                            $(this).attr("disabled", false);
                            let errors = error.responseJSON.errors,
                                errorsHtml = '';
                            $.each(errors, function(key, value) {
                                errorsHtml = '<strong>' + value[0] + '</strong>';
                                $('.' + key).html(errorsHtml);
                            });
                            $('#submit-btn').html('Submit Request');
                            $('#submit-btn').attr('disabled', false);
                        }
                    });
                }
            });
        });
    </script>
@endpush
