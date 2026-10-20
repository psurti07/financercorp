@extends('layouts.selfapply')
@push('css')
    <link href="{{ asset('front/css/custom.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('front/css/offer.css') }}" rel="stylesheet" type="text/css" />
    <style>
        .invalid-feedback {
            display: block !important;
        }
    </style>
@endpush
@section('content')
    {{-- <section id="hero-201" class="bg--fixed hero-section">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-6 col-lg-6 order-2 order-md-1 order-lg-1">
                    <div class="d-flex justify-content-center align-items-start">
                        <div class="img-block">
                            <img src="{{ asset('front/images/selfapply-nbfc-list.webp') }}" alt="selfapply nbfc list" class="img-fluid">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 self-apply-form order-1 order-md-2 order-lg-2">
                    <div id="hero-8-form" class="r-06">
                        <h4 class="s-22 text-dark mb-1"> Get Loan up to <span class="color--green-500">&#8377;10 LAKHS</span> from Affiliate NBFCs!</h4>
                        <p class="s-14">Unlock Your Personalized Pre-Approved Loan Offers</p>

                        <form method="post" class="request-form save-form-1" action="{{ route('loan.agent.elite-offer.submit') }}">
                            <div class="row g-2">
                                <div class="col-md-12">
                                    <div class="form-check ps-0">
                                        <div class="row gy-2">
                                            <div class="col-md-6 col-lg-6 col-sm-6">
                                                <fieldset class="picker1">
                                                    <label class="card" for="plan-1">
                                                        <input type="radio" name="user_type" id="plan-1" value="1" class="radio" checked="">
                                                        <span class="plan-details">
                                                            <span class="plan-type color--purple-500">Salaried</span>
                                                        </span>
                                                    </label>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-6">
                                                <fieldset class="picker1">
                                                    <label class="card" for="plan-2">
                                                        <input type="radio" name="user_type" id="plan-2" value="2" class="radio">
                                                        <span class="plan-details">
                                                            <span class="plan-type color--purple-500">Self Employed</span>
                                                        </span>
                                                    </label>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name*" autocomplete="off"  value="{{ old('first_name') }}">
                                    </div>
                                    @component('components.ajax-error', ['field' => 'first_name'])@endcomponent
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name*" autocomplete="off"  value="{{ old('last_name') }}">
                                    </div>
                                    @component('components.ajax-error', ['field' => 'last_name'])@endcomponent
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">+91</span>
                                        </div>
                                        <input type="text" name="mobile" id="mobile" class="numeric-input form-control name" placeholder="Mobile*" autocomplete="off"  maxlength="10" minlength="10" inputmode="numeric" value="{{ old('mobile') }}">
                                    </div>
                                    @component('components.ajax-error', ['field' => 'mobile'])@endcomponent
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Email*" autocomplete="off"  value="{{ old('email') }}">
                                    </div>
                                    @component('components.ajax-error', ['field' => 'email'])@endcomponent
                                </div>
                                <input type="hidden" value="2" name="acc_type" id="acc_type">
                                <input type="hidden" value="1" name="user_type" id="user_type">

                                <input class="form-check-input" value="1" type="hidden" id="flexCheckDefault1" checked name="allow_sms"/>
                                <input class="form-check-input" value="1" type="hidden" id="flexCheckDefault" checked name="accept_tnc"/>
                                <div class="col-md-12 form-btn">
                                    <button type="submit" id="submit-btn" class="btn btn--theme hover--theme submit-btn">Apply Now</button>
                                </div>
                            </div>
                        </form>
                        <p class="p-sm mt-3 mb-0">By submitting the form & proceeding, you agree to the <a href="{{ route('front.terms.conditions') }}" target="_blank" class="text-dark text-decoration-none">Terms</a>  and <a href="{{ route('front.privacy.policy') }}" target="_blank" class="text-dark text-decoration-none"> Privacy Policy</a> of Financercorp.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

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
                <div class="col-md-12 col-lg-5 col-12 m-auto mt-lg-0 mt-4">
                    <div class=" col-12 m-auto">
                        <div class="position-relative">
                            <div class="bg--yellow-100 r-16 p-30 block-shadow">
                                <span class="text-uppercase color--green-500 d-block text-center fw-bold">Start Your Loan
                                </span>
                                <h3 class="s-28 w-700 mb-20 text-center">Explore Loan Options up to <span
                                        class="color--green-500">₹10 Lakhs</span></h3>
                                <form method="post" action="{{ route('loan.agent.elite-offer.submit') }}"
                                    class="request-form save-form-1 needs-validation p-0" novalidate>
                                    <div class="row g-2">
                                        <div class="row g-2">
                                            <div class="col-12">
                                                <div class="row gx-2 loan-type-options">
                                                    <div class="col-md-6 col-lg-6 col-sm-6 mb-2">
                                                        <fieldset class="loan-picker">
                                                            <input type="radio" name="loan_type" id="personalloan"
                                                                value="1" checked>
                                                            <label class="loan-card" for="personalloan">
                                                                <span class="plan-type">Personal Loan</span>
                                                            </label>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-md-6 col-lg-6 col-sm-6 mb-2">
                                                        <fieldset class="loan-picker">
                                                            <input type="radio" name="loan_type" id="businessloan"
                                                                value="2">
                                                            <label class="loan-card" for="businessloan">
                                                                <span class="plan-type">Business Loan</span>
                                                            </label>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 text-start">
                                            <label for="form_firstname"
                                                class="position-static p-0 w-500 text-uppercase color--grey fa-sm mb-5">First
                                                Name</label>
                                            <div class="form-group mobile-input">
                                                <input type="text" name="first_name" id="first_name" class="form-control"
                                                    placeholder="First Name*" autocomplete="off"
                                                    value="{{ old('first_name') }}">
                                            </div>
                                            @component('components.ajax-error', ['field' => 'first_name'])
                                            @endcomponent
                                        </div>
                                        <div class="col-md-6 text-start">
                                            <label for="form_lastname"
                                                class="position-static p-0 w-500 text-uppercase color--grey fa-sm mb-5">Last
                                                Name</label>
                                            <div class="form-group mobile-input">
                                                <input type="text" name="last_name" id="last_name"
                                                    class="form-control" placeholder="Last Name*" autocomplete="off"
                                                    value="{{ old('last_name') }}">
                                            </div>
                                            @component('components.ajax-error', ['field' => 'last_name'])
                                            @endcomponent
                                        </div>

                                        <div class="col-md-12 text-start">
                                            <label for="form_mobile"
                                                class="position-static p-0 w-500 text-uppercase color--grey fa-sm mb-5">Mobile
                                                Number</label>
                                            <div class="input-group mobile-input">
                                                <span class="input-group-text">+91</span>
                                                <input type="text" name="mobile" id="mobile"
                                                    class="numeric-input form-control name"
                                                    placeholder="Enter 10 digit number" autocomplete="off" required
                                                    maxlength="10" minlength="10" inputmode="numeric">
                                            </div>
                                            @component('components.ajax-error', ['field' => 'mobile'])
                                            @endcomponent
                                        </div>

                                        <div class="col-md-12 text-start">
                                            <label for="form_mobile"
                                                class="position-static p-0 w-500 text-uppercase color--grey fa-sm mb-5">Email</label>
                                            <div class="input-group mobile-input">
                                                <span class="input-group-text">
                                                    <div class="input-group-prepend">
                                                        <i class="fa fa-envelope"></i>
                                                    </div>
                                                </span>
                                                <input type="email" name="email" id="email"
                                                    class="numeric-input form-control name" placeholder="Email*"
                                                    autocomplete="off" required>
                                            </div>
                                            @component('components.ajax-error', ['field' => 'email'])
                                            @endcomponent
                                        </div>

                                        <input type="hidden" value="2" name="acc_type" id="acc_type">
                                        <input type="hidden" value="1" name="user_type" id="user_type">

                                        <input class="form-check-input" value="1" type="hidden"
                                            id="flexCheckDefault1" checked name="allow_sms" />
                                        <input class="form-check-input" value="1" type="hidden"
                                            id="flexCheckDefault" checked name="accept_tnc" />

                                        <div class="col-md-12 form-btn mt-3">
                                            <button type="submit" id="checkmodal"
                                                class="btn btn--theme hover--tra-black last-link submit w-100 text-center r-100">Start
                                                Process <span class="fbox-ico ico-10"><span class="fbox-ico ico-10"> <span
                                                            class="flaticon-right-arrow  ico-20 ms-1"></span></span></button>
                                        </div>
                                        <div class="col-md-12"><span class="text-danger" id="usererrormsg"></span></div>

                                        <div class="col-md-12">
                                            <div class="custom-control custom-checkbox d-flex align-items-start">
                                                <p class="p-sm mt-3 mb-0">By submitting the form & proceeding, you agree to
                                                    the <a href="{{ route('front.terms.conditions') }}" target="_blank"
                                                        class="text-dark text-decoration-none">Terms</a> and <a
                                                        href="{{ route('front.privacy.policy') }}" target="_blank"
                                                        class="text-dark text-decoration-none"> Privacy Policy</a> of
                                                    Financercorp.</p>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

    <section class="py-2 bg--green-100 reviews-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="form-holder border-bottom">
                        <div class="contact-form-notice color--grey">
                            <p class="s-14">
                                <strong class="color--white">APR Calculation:</strong> Range of Loan tenure is up to 72 months with Annual
                                Interest Rates ranging between 11% - 36% and the processing fee up to 2%. For Example:
                                Taking in consideration a personal loan of Rs.1,00,000 availed at 11%* interest rate for a
                                tenure of 6* years with 2%* processing fee, the APR will be 11.75%*. *T&C Apply. All these
                                numbers are tentative/indicative, the final loan specifics may vary depending upon the
                                customer profile and NBFCs' criteria, rules & regulations, and terms &amp; conditions.
                            </p>

                            <p class="s-14">
                                <strong class="color--white">Important Note:</strong> BE AWARE! We ask our customers to make payments ONLY on our
                                website https://financercorp.com and NOT through any other source, directly or indirectly.
                                Thanks!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <!-- write or link your script file and script tag here -->
    <script>
        $(document).ready(function() {
            $('.save-form-1').submit(function(event) {
                var status = document.activeElement.innerHTML;
                event.preventDefault();
                if (status) {
                    $('.ajax-error').html('');
                    var data = new FormData(this);
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
                            $('#submit-btn').html(
                                '<span class="spinner-border spinner-border-sm"></span> Apply Now'
                            );
                            $('#submit-btn').attr('disabled', true);
                        },
                        success: function(result) {
                            $(this).attr("disabled", false);
                            if (result.type === 'SUCCESS') {
                                toastr.success(result.message);
                                setTimeout(function() {
                                    window.location.href = result.url;
                                }, 5000);
                            } else {
                                toastr.error(result.message);
                                $('#submit-btn').html('Apply Now');
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
                            $('#submit-btn').html('Apply Now');
                            $('#submit-btn').attr('disabled', false);
                        }
                    });
                }
            });

            $(".banks-carousel").owlCarousel({
                loop: true,
                autoplay: true,
                nav: false,
                dots: false,
                autoplayTimeout: 4500,
                autoplayHoverPause: true,
                smartSpeed: 1500,
                margin: 10,
                responsive: {
                    0: {
                        items: 1
                    },
                    576: {
                        items: 2
                    },
                    768: {
                        items: 3
                    },
                    992: {
                        items: 4
                    },
                    1200: {
                        items: 5
                    }
                }
            });

            $(".testimonials-carousel").owlCarousel({
                items: 2, // Number of items
                loop: true,
                autoplay: true,
                navBy: 1,
                dots: false,
                autoplayTimeout: 4500,
                autoplayHoverPause: true,
                smartSpeed: 1500,
                responsive: {
                    0: {
                        items: 1
                    },
                    767: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    991: {
                        items: 3
                    },
                    1000: {
                        items: 3
                    }
                }
            });
        })
    </script>
@endpush
