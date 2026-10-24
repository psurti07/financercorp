@extends('layouts.selfapply')
@push('css')
{{-- write or link your css file and styles tag here --}}
<link href="{{ asset('front/css/custom.css') }}" rel="stylesheet" type="text/css" />
<style>
.resend-otp-div a.disabled {
    pointer-events: none;
    cursor: not-allowed;
}

.bank-crousel {
    display: block !important;
}

.radio:checked {
    background: #48a111;
    border-color: #48a111;
}

.owl-carousel .owl-item img {
    width: 100% !important;
}

.testimonials-carousel .owl-item img {
    width: 100% !important;
}

@media screen and (max-width: 767px) {
    .hero-section {
        padding-top: 10px !important;
    }
}

.input-group-text {
    color: #666;
    border: none;
    background-color: #f5f6f8;
    line-height: 1.3;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
    border-top-right-radius: 0px;
    border-bottom-right-radius: 0px;
}

.request-form .form-control:focus {
    background-color: #f5f6f8;
    border-color: #f5f6f8;
    border: none;
}

@media screen and (max-width:991px) {
    .input-group-text {
        padding: 1.06rem 1.06rem;
    }
}

@media screen and (min-width:992px) and (max-width:1199px) {
    .input-group-text {
        padding: 1rem 1rem;
        margin-top: 1px;
    }
}
</style>
@endpush
@section('content')
<section id="hero-7" class="hero-section bg--green-100">
    <div class="container">
        <div class="row d-flex align-items-center">

            <div class="col-md-12 col-lg-6 col-12 order-lg-1  order-2">
                <div class="hero-7-txt mb-4">
                    <span class="color--blue-500 text-uppercase mb-2 d-block">RBI-aligned NBFC marketplace</span>
                    <h1 class="w-700 color--white mb-3">Experience the Best Financial Consultation and Services<span
                            class="color--blue-500"> At Your Fingertips</span></h1>
                    <p class=" color--white mb-4">Achieve your financial goals in a smarter way with premier financial
                        services from industry experts.</p>
                </div>

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
            <div class="col-md-12 col-lg-5 col-12 m-auto mt-lg-0 mt-4 order-lg-2 order-1 mb-md-0 mb-20">
                <div class=" col-12 m-auto">
                    <div class="position-relative">
                        <div class="bg--yellow-100 r-16 p-30 block-shadow">
                            <span class="text-uppercase color--green-500 d-block text-center w-500 s-10">Start Your Loan
                            </span>
                            <h3 class="s-28 w-700 mb-20 text-center">Explore Loan Options up to <span
                                    class="color--green-500">₹10 Lakhs</span></h3>
                            <form method="post" action="{{ route('loan.agent.send.otp') }}"
                                class="request-form save-form-1 needs-validation p-0" novalidate>
                                <div class="row g-2">
                                    <div class="row g-2">

                                        <!-- LOAN TYPE -->
                                        <div class="col-12">
                                            <div class="row gx-2 loan-type-options">

                                                <div class="col-md-6 col-lg-6 col-sm-6 mb-2">
                                                    <fieldset class="loan-picker">
                                                        <input type="radio" name="loan_type" id="personalloan" value="1"
                                                            checked>
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

                                        <!-- Keep this value according to your backend requirements -->
                                        <input type="hidden" name="acc_type" value="2" id="acc_type">

                                        <!-- EMPLOYMENT TYPE -->
                                        <div class="col-12">
                                            <div class="form-check ps-0 text-start">

                                                <label
                                                    class="position-static p-0 w-500 text-uppercase color--grey fa-sm mb-5">
                                                    Employment type
                                                </label>

                                                <!-- PERSONAL LOAN EMPLOYMENT OPTIONS -->
                                                <div class="row gx-2 employment-options personal-employment">

                                                    <!-- SALARIED -->
                                                    <div class="col-md-6 col-lg-6 col-sm-6 mb-2">
                                                        <fieldset class="employment-picker">
                                                            <input type="radio" name="user_type" id="salaried" value="1"
                                                                checked>
                                                            <label class="employment-card" for="salaried">
                                                                <span class="employment-icon bg--blue-500">
                                                                    <img src="{{ asset('front/images/salaried.png') }}"
                                                                        alt="">
                                                                </span>
                                                                <span class="employment-details">
                                                                    <span class="plan-type">Salaried</span>
                                                                    <span class="plan-subtitle">
                                                                        Earn a monthly salary
                                                                    </span>
                                                                </span>
                                                            </label>
                                                        </fieldset>
                                                    </div>

                                                    <!-- SELF EMPLOYED -->
                                                    <div class="col-md-6 col-lg-6 col-sm-6 mb-2">
                                                        <fieldset class="employment-picker">
                                                            <input type="radio" name="user_type" id="selfemployed"
                                                                value="2">

                                                            <label class="employment-card" for="selfemployed">
                                                                <span class="employment-icon bg--black-500">
                                                                    <img src="{{ asset('front/images/self-employed.png') }}"
                                                                        alt="">
                                                                </span>

                                                                <span class="employment-details">
                                                                    <span class="plan-type">Self-Employed</span>
                                                                    <span class="plan-subtitle">
                                                                        Run your own business
                                                                    </span>
                                                                </span>
                                                            </label>
                                                        </fieldset>
                                                    </div>
                                                </div>

                                                <div class="row gx-2 employment-options business-employment d-none">

                                                    <div class="col-6 mb-2">
                                                        <fieldset class="employment-picker">
                                                            <input type="radio" name="user_type" id="smallbusiness"
                                                                value="3">
                                                            <label class="employment-card" for="smallbusiness">
                                                                <span class="employment-icon">
                                                                    <img src="{{ asset('front/images/salaried.png') }}"
                                                                        alt="">
                                                                </span>
                                                                <span class="employment-details">
                                                                    <span class="plan-type">Small Business</span>
                                                                    <span class="plan-subtitle">
                                                                        For small business owners
                                                                    </span>
                                                                </span>
                                                            </label>
                                                        </fieldset>
                                                    </div>

                                                    <div class="col-6 mb-2">
                                                        <fieldset class="employment-picker">
                                                            <input type="radio" name="user_type" id="auditedreport"
                                                                value="4">
                                                            <label class="employment-card" for="auditedreport">
                                                                <span class="employment-icon">
                                                                    <img src="{{ asset('front/images/self-employed.png') }}"
                                                                        alt="">
                                                                </span>

                                                                <span class="employment-details">
                                                                    <span class="plan-type">Audited Report</span>
                                                                    <span class="plan-subtitle">
                                                                        Business with audited accounts
                                                                    </span>
                                                                </span>
                                                            </label>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 text-start">
                                        <label for="form_mobile"
                                            class="position-static p-0 w-500 text-uppercase color--grey s-25 mb-5">Mobile
                                            Number</label>
                                        <div class="input-group mobile-input">
                                            <span class="input-group-text">+91</span>
                                            <input type="text" name="mobile" id="mobile"
                                                class="numeric-input form-control name bg-white"
                                                placeholder="Enter 10 digit number" autocomplete="off" required
                                                maxlength="10" minlength="10" inputmode="numeric">
                                        </div>
                                        @component('components.ajax-error', ['field' => 'mobile'])
                                        @endcomponent
                                    </div>

                                    <div class="col-md-12 form-btn mt-3">
                                        <button type="submit" id="checkmodal"
                                            class="btn btn--theme hover--tra-black last-link submit w-100 text-center r-100 text-uppercase">Start
                                            Process <span class="fbox-ico ico-10"><span class="fbox-ico ico-10"> <span
                                                        class="flaticon-right-arrow  ico-20 ms-1"></span></span></button>
                                    </div>
                                    <div class="col-md-12"><span class="text-danger" id="usererrormsg"></span></div>

                                    <div class="col-md-12">
                                        <div class="custom-control custom-checkbox d-flex align-items-start">
                                            <label class="mb-0 s-10 text-start text-dark"><small class="ms-2 d-block">By
                                                    submitting this form & proceeding, you agree to the <a
                                                        href="{{ route('front.terms.conditions') }}" target="_blank"
                                                        class="text-dark text-decoration-none">Terms of Use</a>
                                                    and <a href="{{ route('front.privacy.policy') }}"
                                                        class="text-dark text-decoration-none" target="_blank">Privacy
                                                        Policy</a> of financercorp.</small></label>
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
            <div class="row g-3 row-cols-1 row-cols-md-2 row-cols-lg-4">

                <div class="col">
                    <div class="fbox-8 bg--yellow-100 fb-2 r-12 h-100 ">
                        <div class="fbox-ico ico-25">
                            <div class="shape-ico color--theme bg--green-100 p-10 pb-0 rounded-3 lh-1">
                                <span class="flaticon-home"></span>
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
                            <div class="shape-ico color--theme bg--green-100 p-10 pb-0 rounded-3 lh-1">
                                <span class="flaticon-file"></span>
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
                            <div class="shape-ico color--theme bg--green-100 p-10 pb-0 rounded-3 lh-1">
                                <span class="flaticon-download"></span>
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
                            <div class="shape-ico color--theme bg--green-100 p-10 pb-0 rounded-3 lh-1">
                                <span class="flaticon-user"></span>
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

<section class="py-20 bg--green-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="form-holder mb-4">
                    <div class="contact-form-notice color--white">
                        <p class="s-14">
                            <strong>Important Note :</strong><span class="color--grey"> We ask our customers to make
                                payments ONLY on our website
                                Financercorp.com and NOT through any other source, directly or indirectly.</span>
                        </p>
                        <p class="s-14">
                            <strong>Disclaimer : </strong><span class="color--grey">Financercorp Private Limited is not
                                a lender or financial
                                institution. We do not provide loans or make credit decisions. All loan approvals,
                                interest
                                rates, fees, and disbursal are handled by third-party lenders/NBFCs. We do not guarantee
                                loan approval, disbursal, or specific loan terms. The amount paid is only for the
                                service
                                charge. We are not lenders and do not guarantee any loan approval. Loan approval,
                                disbursement/sanction is entirely dependent on NBFC criteria.</span>
                        </p>
                        <p class="s-14">
                            <strong>Pre-Application Note:</strong><span class="color--grey"> Users are advised to read
                                our terms and conditions
                                and policies before proceeding/applying/registration.</span>
                        </p>
                        <p class="s-14">
                            <strong>Registered Office Address:</strong> <span
                                class="color--grey">{{ config('constant.COMPANY_ADDRESS') }} </span>
                        
                        </p>
                        <p class="s-14">
                                <strong> Mobile:</strong> <span class="color--grey">{{ config('constant.COMPANY_MOBILE') }}
                            </span> | <strong>Email:</strong>
                            <span class="color--grey">{{ config('constant.INFO_EMAIL') }}</span>
                        </p>
                    </div>
                </div>
                <hr class="divider">
            </div>
        </div>
    </div>
</section>

<!-- otp modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content p-30 border-radius-10 bg--yellow-100">
            <form action="{{ route('loan.agent.verify.otp') }}" method="post"
                class="request-form save-form-2 needs-validation" novalidate>
                <div class="modal-body">
                    <div class="row">
                        <h6 class="s-26 w-600 mb-5">Verify your mobile</h6>
                        <p class="s-16 mb-3 color--grey">We've sent a 4 digit OTP to
                            <span class="text-success w-600">+91 <span class="text-success w-600"
                                    id="mobileNumber"></span>
                                <a href="javascript:;" class="edit-phoneNumber" title="Edit Phone number">
                                    <svg width="40px" height="18px" viewBox="0 0 24.00 24.00" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" stroke="#949494">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0" />
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"
                                            stroke="#CCCCCC" stroke-width="0.43200000000000005" />
                                        <g id="SVGRepo_iconCarrier">
                                            <path
                                                d="M15.4998 5.50067L18.3282 8.3291M13 21H21M3 21.0004L3.04745 20.6683C3.21536 19.4929 3.29932 18.9052 3.49029 18.3565C3.65975 17.8697 3.89124 17.4067 4.17906 16.979C4.50341 16.497 4.92319 16.0772 5.76274 15.2377L17.4107 3.58969C18.1918 2.80865 19.4581 2.80864 20.2392 3.58969C21.0202 4.37074 21.0202 5.63707 20.2392 6.41812L8.37744 18.2798C7.61579 19.0415 7.23497 19.4223 6.8012 19.7252C6.41618 19.994 6.00093 20.2167 5.56398 20.3887C5.07171 20.5824 4.54375 20.6889 3.48793 20.902L3 21.0004Z"
                                                stroke="#949494" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </g>
                                    </svg>
                                </a>
                            </span>
                        </p>
                        <div class="otp-form text-start">
                            <label for="firstname" class="position-static p-0 w-500 text-uppercase color--grey s-25 mb-5">Enter
                                OTP</label>
                            <div class="otp-container justify-content-center">
                                <input type="text" class="otp-input" pattern="\d" maxlength="1">
                                <input type="text" class="otp-input" pattern="\d" maxlength="1">
                                <input type="text" class="otp-input" pattern="\d" maxlength="1">
                                <input type="text" class="otp-input" pattern="\d" maxlength="1">
                            </div>
                        </div>
                        <span class="mt-2 s-12 text-success" id="msg">
                            <input type="hidden" id="verificationCode" name="otp" readonly>
                            <input class="form-check-input" value="1" type="hidden" id="flexCheckDefault1" checked
                                name="allow_sms" />
                            <input class="form-check-input" value="1" type="hidden" id="flexCheckDefault" checked
                                name="accept_tnc" />
                            <span class="text-danger f-w-400" id="invalidOtp" style="font-size:14px"></span>
                            @component('components.ajax-error', ['field' => 'otp'])
                            @endcomponent
                    </div>
                    <div class="row color--black resend-otp-div">
                        <div class="col-lg-6">
                            
                            <p class="s-12 mt-0">Didn’t receive the code? <a href="javascript:;" id="resendOtp"
                                    class="text-success">Resend OTP</a>&nbsp;<span id="timer"
                                    class="text-success">(00:15)</span></p>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group form-floating">
                                <div class="d-flex align-items-center justify-content-end">
                                    <div class="color--theme">
                                        <i class="fas fa-lock"></i>
                                    </div>
                                    <div class="title-text color--theme">
                                        <p class="fw-bold mb-0 ms-1 mt-0 color--theme s-14">Encrypted</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <button type="submit" id="otpBtn" class="btn btn--theme hover--tra-black submit mt-3 w-100 r-100">Verify
                    OTP <span class="fbox-ico ico-10"> <span
                            class="flaticon-right-arrow  ico-20 ms-1"></span></span></button>
            </form>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", function() {

    const personalLoan = document.getElementById("personalloan");
    const businessLoan = document.getElementById("businessloan");

    const personalEmployment =
        document.querySelector(".personal-employment");

    const businessEmployment =
        document.querySelector(".business-employment");

    const accType = document.getElementById("acc_type");

    if (!personalLoan || !businessLoan) return;

    const personalRadios = personalEmployment ?
        personalEmployment.querySelectorAll('input[name="user_type"]') : [];

    const businessRadios = businessEmployment ?
        businessEmployment.querySelectorAll('input[name="user_type"]') : [];

    function selectDefault(radios) {
        if (!radios.length) return;
        const selected = Array.from(radios)
            .some(function(radio) {
                return radio.checked;
            });
        if (!selected) {
            radios[0].checked = true;
        }
    }

    function updateLoanType() {
        const isBusiness = businessLoan.checked;
        if (personalEmployment) {
            personalEmployment.classList.toggle(
                "d-none",
                isBusiness
            );
        }

        if (businessEmployment) {
            businessEmployment.classList.toggle(
                "d-none",
                !isBusiness
            );
        }

        if (isBusiness) {
            selectDefault(businessRadios);
        } else {
            selectDefault(personalRadios);
        }
    }
    personalLoan.addEventListener("change", updateLoanType);
    businessLoan.addEventListener("change", updateLoanType);

    updateLoanType();

});
</script>

<script>
const sendOtpUrl = @json(route('loan.agent.send.otp'));
</script>
<!-- write or link your script file and script tag here -->
<script src="{{ asset('front/js/loanAgent.js') }}"></script>
<script>
window.onscroll = function() {
    const btn = document.getElementById("goTopBtn");
    btn.style.display = (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) ? "block" :
        "none";
};

// Scroll to top smoothly
function goToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}
</script>
@endpush