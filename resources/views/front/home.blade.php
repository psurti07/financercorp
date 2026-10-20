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
                        <span class="color--blue-500 text-uppercase mb-2 d-block">RBI-aligned NBFC marketplace</span>
                        <h1 class="w-700 color--white mb-3">Experience the Best Financial Consultation and Services<span
                                class="color--blue-500"> At Your Fingertips</span></h1>
                        <p class=" color--white mb-4">Achieve your financial goals in a smarter way with premier financial
                            services from industry experts.</p>
                        {{-- <a href="{{ route('self.apply.main') }}"
                         class="btn r-04 btn--theme hover--tra-black last-link me-2 mb-md-0 mb-0">Self
                         Apply</a> --}}
                        <a href="{{ route('loan.agent.main') }}"
                            class="btn r-04 btn--theme hover--tra-black rounded-pill last-link">Hire
                            an Agent</a>
                    </div>
                    <hr class="divider">
                    <div class="statistic-5-wrapper mt-4">
                        <div class="row row-cols-2 row-cols-md-4">
                            <div class="col sec-1 staticts-1">
                                <div id="sb-5-1" class="text-center mb-4">
                                    <div class="statistic-block">
                                        <div class="statistic-digit">
                                            <h4 class="s-26 w-700 mb-2 color--green-500">
                                                <span class="count-element">4500</span>+
                                            </h4>
                                        </div>
                                        <div class="statistic-txt">
                                            <h5 class="s-15 w-500 color--grey">Happy Customer</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col sec-2 staticts-1 staticts-border">
                                <div id="sb-5-3" class="text-center mb-4">
                                    <div class="statistic-block">
                                        <div class="statistic-digit">
                                            <h4 class="s-26 w-700 mb-2 color--green-500">
                                                <span class="count-element">4</span>5Cr+
                                            </h4>
                                        </div>
                                        <div class="statistic-txt">
                                            <h5 class="s-15 w-500 color--grey">Successful Disbursals </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col sec-3 staticts-1 staticts-border-top">
                                <div id="sb-5-2" class="text-center mb-4">
                                    <div class="statistic-block">
                                        <div class="statistic-digit">
                                            <h4 class="s-26 w-700 mb-2 color--green-500">
                                                <span class="count-element">8</span>+
                                            </h4>
                                        </div>
                                        <div class="statistic-txt">
                                            <h5 class="s-15 w-500 color--grey">NBFC Partners</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col sec-4 staticts-1">
                                <div id="sb-5-4" class="text-center mb-4">
                                    <div class="statistic-block">
                                        <div class="statistic-digit">
                                            <h4 class="s-26 w-700 mb-2 color--green-500">
                                                <span class="count-element">100</span>%
                                            </h4>
                                        </div>
                                        <div class="statistic-txt">
                                            <h5 class="s-15 w-500 color--grey">Digital Process</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 col-12 m-auto mt-lg-0 mt-4">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-12 m-auto">
                        <div class="position-relative">
                            <div class="bg--yellow-100 r-16 p-30 block-shadow">
                                <div class="d-flex align-items-center justify-content-between flex-wrap mb-20">
                                    <span class="badge bg--green-100 color--green-500 r-100 py-10 px-15">
                                        Sanction Preview
                                    </span>
                                </div>

                                <!-- Loan Amount -->
                                <h2 class="s-32 w-700 mb-5">
                                    ₹29,40,000
                                </h2>

                                <p class="s-14 mb-20">
                                    Estimated eligible loan amount
                                </p>

                                <!-- Loan Details -->
                                <div class="d-flex justify-content-between align-items-center mb-10">
                                    <span>Monthly instalment</span>
                                    <span class="w-600">₹64,658</span>
                                </div>

                                <div class="d-flex justify-content-between align-items-center mb-10">
                                    <span>Interest rate</span>
                                    <span class="w-600">11.5% p.a.</span>
                                </div>

                                <div class="d-flex justify-content-between align-items-center mb-20">
                                    <span>Tenure</span>
                                    <span class="w-600">60 months</span>
                                </div>

                                <!-- Button -->
                                <a href="#Calculate" class="btn btn--green-500 btn-sm r-100 w-100 text-center">
                                    Run Your Numbers
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-80 content-section division bg--yellow-100" id="company">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 pe-lg-40 border-end">
                    <h6 class="s-14 txt-upcase mb-20">About Financer Corp</h6>
                    <div class="border-start border-3 border-success ps-3 mb-20">
                        <p class="s-18 mb-0">
                            At Financer Corp, we are committed to making financial solutions more accessible, reliable, and
                            convenient for individuals across India. Backed by enriching partnerships with multiple
                            industry-leading NBFCs, we offer premier financial consultation and services designed to match
                            different financial needs.
                        </p>
                    </div>

                    <p class="s-14 color--grey mb-15">
                        Our focus is on understanding what works best for each individual and guiding them with personalized
                        support at every step. With a team of seasoned experts and our streamlined digital portal, we help
                        people make sound financial decisions and move forward with more confidence and clarity.
                    </p>

                    <p class="s-14 color--grey mb-0">
                        Customer satisfaction remains at the heart of everything we do. Through this customer-first
                        approach, we ensure every individual receives the experience and services they look for while
                        fulfilling their financial goals with ease.
                    </p>

                </div>

                <!-- Why It Matters -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 ps-lg-40 mt-4 mt-md-0">

                    <h6 class="s-14 txt-upcase mb-20">Why It Matters</h6>

                    <ul class="list-unstyled mb-0">
                        <li class="d-flex align-items-start mb-15">
                            <span class="color--green-500 me-3">●</span>
                            <span class="s-14 color--grey mb-0">
                                <strong class="color--black">No cookie-cutter solutions.</strong>
                                We take time to understand each person's situation
                                before recommending a lender.
                            </span>
                        </li>

                        <li class="d-flex align-items-start mb-15">
                            <span class="color--green-500 me-3">●</span>
                            <span class="s-14 color--grey mb-0">
                                <strong class="color--black">Radical transparency.</strong>
                                Every rate, fee and term is laid out before you
                                sign anything.
                            </span>
                        </li>

                        <li class="d-flex align-items-start mb-15">
                            <span class="color--green-500 me-3">●</span>
                            <span class="s-14 color--grey mb-0">
                                <strong class="color--black">People, not paperwork.</strong>
                                A dedicated team stays with you from application
                                to disbursal.
                            </span>
                        </li>

                        <li class="d-flex align-items-start mb-0">
                            <span class="color--green-500 me-3">●</span>
                            <span class="s-14 color--grey mb-0">
                                <strong class="color--black">Built on trust.</strong>
                                Twelve-plus NBFC partners vetted for fair lending
                                practices.
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
                <div class="row gx-3 gy-2 row-cols-1 row-cols-md-2 row-cols-lg-4">

                    <div class="col">
                        <div class="fbox-8 bg--yellow-100 fb-2 r-12 h-100 ">
                            <div class="fbox-ico ico-25">
                                <div class="shape-ico color--theme bg--green-100 p-10 pb-0 rounded-3">
                                    <span class="flaticon-layers-1"></span>
                                </div>
                            </div>

                            <div class="fbox-txt">
                                <h4 class="s-18 w-700">Easy Access to Top NBFCs</h4>
                                <p class="color--grey">
                                    Gain access to several industry-leading NBFCs, all from the comfort of your home.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="fbox-8 bg--yellow-100 fb-2 r-12 h-100">
                            <div class="fbox-ico ico-25">
                                <div class="shape-ico color--theme bg--green-100 p-10 pb-0 rounded-3">
                                    <span class="flaticon-computer-1"></span>
                                </div>
                            </div>

                            <div class="fbox-txt">
                                <h4 class="s-18 w-700">100% Online Process</h4>
                                <p class="color--grey">
                                    Relax and enjoy premier financial services in a very simple and convenient way.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="fbox-8 bg--yellow-100 fb-2 r-12 h-100">
                            <div class="fbox-ico ico-25">
                                <div class="shape-ico color--theme bg--green-100 p-10 pb-0 rounded-3">
                                    <span class="flaticon-click-1"></span>
                                </div>
                            </div>

                            <div class="fbox-txt">
                                <h4 class="s-18 w-700">Expert Financial Consultation </h4>
                                <p class="color--grey">
                                    Make your financial journey easier with the help of our experienced professionals.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="fbox-8 bg--yellow-100 fb-3 r-12 h-100">
                            <div class="fbox-ico ico-25">
                                <div class="shape-ico color--theme bg--green-100 p-10 pb-0 rounded-3">
                                    <span class="flaticon-tech-support"></span>
                                </div>
                            </div>

                            <div class="fbox-txt">
                                <h4 class="s-18 w-700">Your Way, Your Choice</h4>
                                <p class="color--grey">
                                    Apply yourself or hire a loan agent – Proceed in a way that is most convenient for you.
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
                                        <span class="count-element">4500</span>+
                                    </h2>
                                </div>
                                <div class="statistic-txt">
                                    <h5 class="s-16 w-500">Happy Customer</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col sec-2">
                        <div id="sb-5-3" class="text-center">
                            <div class="statistic-block">
                                <div class="statistic-digit">
                                    <h2 class="s-30 w-700 mb-10">
                                        <span class="count-element">4</span>.<span class="count-element">5</span>Cr+
                                    </h2>
                                </div>
                                <div class="statistic-txt">
                                    <h5 class="s-16 w-500">Successful Disbursals</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col sec-3">
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
                    <div class="col sec-4">
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

    <section id="products" class="py-80 features-section division bg--yellow-300">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-9">
                    <div class="section-title text-center mb-50">
                        <span class="section-subtitle color--green-500"> — Choose your path</span>
                        <h2 class="s-28">Achieve Financial Success in a More <span class="color--green-500">Strategic Manner</span></h2>
                        <p class="s-16 color--grey">Select The Plan That Best Fits Your Preferences </p>
                    </div>
                </div>
            </div>

            <div class="fbox-wrapper">
                <div class="row align-items-center justify-content-center m-auto">
                    <div class="col-sm-12 col-md-10 col-lg-6 ">
                        <div class="fbox-8 bg--yellow-100 fb-2 h-100 ">
                            <div class="fbox-ico ico-45">
                                <div class="shape-ico color--theme">
                                    <span class="flaticon-layers-1"></span>
                                </div>
                            </div>

                            <div class="fbox-txt">
                                <h4 class="s-18 w-700">Hire a Loan Agent</h4>
                                <p class="color--grey pb-3">
                                    Let our experienced professionals handle the process for you so you can move forward with ease and without stress.
                                </p>
                                <a href="{{ route('loan.agent.main') }}"
                                    class="btn r-04 btn--theme hover--tra-black r-100">Apply Now</a>
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
                    <span class="section-subtitle color--green-500"> — Six easy steps</span>
                    <h2 class="s-28 color--white">How it <span class="color--green-500">works</span></h2>
                    <p class="s-16 color--grey">6 Easy Steps To Get Started </p>
                </div>
            </div>
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 col-md-6 col-12 order-first order-md-2">
                    <div class="txt-block left-column">
                        <div class="cbox-2 process-step">
                            <div class="ico-wrap">
                                <div class="cbox-2-ico bg--tra-black color--white">1</div>
                                <span class="cbox-2-line"></span>
                            </div>
                            <div class="cbox-2-txt">
                                <h4 class="s-18 w-700 color--white">Share Your Requirements</h4>
                                <p class="mb-0 color--grey">Begin the process by entering your full name, registered number, email address, and other required information. </p>
                            </div>
                        </div>
                        <div class="cbox-2 process-step">
                            <div class="ico-wrap">
                                <div class="cbox-2-ico bg--tra-black color--white">2</div>
                                <span class="cbox-2-line"></span>
                            </div>
                            <div class="cbox-2-txt">
                                <h4 class="s-18 w-700 color--white">Complete Your Profile</h4>
                                <p class="mb-0 color--grey">Our system will determine your eligibility based on the information you provided. Please note that this is not a final offer. </p>
                            </div>
                        </div>
                        <div class="cbox-2 process-step">
                            <div class="ico-wrap">
                                <div class="cbox-2-ico bg--tra-black color--white">3</div>
                                <span class="cbox-2-line"></span>
                            </div>
                            <div class="cbox-2-txt">
                                <h4 class="s-18 w-700 color--white">Discover Tailored Offers</h4>
                                <p class="mb-0 color--grey">Gain access to the displayed offer by purchasing the plan that best meets your needs and preferences. </p>
                            </div>
                        </div>
                        <div class="cbox-2 process-step">
                            <div class="ico-wrap">
                                <div class="cbox-2-ico bg--tra-black color--white">4</div>
                                <span class="cbox-2-line"></span>
                            </div>
                            <div class="cbox-2-txt">
                                <h4 class="s-18 w-700 color--white">Choose the Best Option</h4>
                                <p class="mb-0 color--grey">Our team will contact you within 24-48 hours for verification and guide you through the next steps to ensure a smooth process.</p>
                            </div>
                        </div>
                        <div class="cbox-2 process-step">
                            <div class="ico-wrap">
                                <div class="cbox-2-ico bg--tra-black color--white">5</div>
                                <span class="cbox-2-line"></span>
                            </div>
                            <div class="cbox-2-txt">
                                <h4 class="s-18 w-700 color--white">Get Approved & Disbursed</h4>
                                <p class="mb-0 color--grey">The NBFC will review your profile and documents in accordance with their policies and procedures.</p>
                            </div>
                        </div>
                        <div class="cbox-2 process-step">
                            <div class="ico-wrap">
                                <div class="cbox-2-ico bg--tra-black color--white">6</div>
                            </div>
                            <div class="cbox-2-txt">
                                <h4 class="s-18 w-700 color--white">Get Approved & Disbursed</h4>
                                <p class="mb-0 color--grey">The NBFC will make the final decision on loan approval, sanction, and disbursement based on their terms.</p>
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
                        <h2 class="s-28">Calculate <span class="color--green-500">Your EMI Instantly</span></h2>
                        <p class="s-16 color--grey">Make More Confident Financial Decisions</p>
                    </div>
                </div>
            </div>
            <div class="row p-30 bg--white-100 shadow border-grey-1 r-20">
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
                            <h2 class="s-28">Our <span class="color--green-500">NBFC Partners</span></h2>
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
                                <label for="form_name" class="contact-label d-block mb-2 w-500">Full Name</label>
                                <input id="form_name" name="fullname" type="text"
                                    class="form-control border-bottom bg--tra-black name mb-0" placeholder="Your Name">
                                @component('components.ajax-error', ['field' => 'fullname'])
                                @endcomponent
                            </div>

                            <div class="col-md-6 col-12">
                                <label for="form_mobile" class="contact-label d-block mb-2 w-500">Mobile</label>
                                <input id="form_mobile" type="tel" name="mobile"
                                    class="form-control border-bottom bg--tra-black numeric-input mobile mb-0"
                                    placeholder="+91" minlength="10" maxlength="10" inputmode="numeric">
                                @component('components.ajax-error', ['field' => 'mobile'])
                                @endcomponent
                            </div>

                            <div class="col-md-6 col-12">
                                <label for="form_email" class="contact-label d-block mb-2 w-500">Email</label>
                                <input id="form_email" type="email" name="email"
                                    class="form-control border-bottom bg--tra-black email mb-0"
                                    placeholder="you@example.com">
                                @component('components.ajax-error', ['field' => 'email'])
                                @endcomponent
                            </div>

                            <div class="col-md-6 col-12">
                                <label for="form_subject" class="contact-label d-block mb-2 w-500">Subject</label>
                                <input id="form_subject" type="text" name="subject"
                                    class="form-control border-bottom bg--tra-black subject mb-0"
                                    placeholder="Loan enquiry">
                                @component('components.ajax-error', ['field' => 'subject'])
                                @endcomponent
                            </div>

                            <div class="col-12">
                                <label for="form_message" class="contact-label d-block mb-2 w-500">Message</label>
                                <textarea id="form_message" name="desc" class="form-control border-bottom bg--tra-black message mb-0"
                                    placeholder="Tell us what you need..."></textarea>
                                @component('components.ajax-error', ['field' => 'desc'])
                                @endcomponent
                            </div>

                            <div class="col-12 pt-3">
                                <button type="submit" class="btn btn--green-400 hover--tra-black submit"
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
