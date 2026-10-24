@extends('layouts.selfapply')
@push('css')
    {{-- write or link your css file and styles tag here --}}
    <link href="{{ asset('front/css/custom.css') }}" rel="stylesheet" type="text/css" />
    <style>
        .accordion-button {
            background-color: #f8f8fb !important;
        }

        .accordion-button:focus {
            box-shadow: none !important;
        }

        .contact-form .form-select {
            margin-bottom: 0px !important;
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
    </style>
@endpush
@section('content')
    <!-- main section starts -->
    <section id="hero-201" class="bg--green-100 hero-section">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center m-auto">
                <div class="col-md-8 col-lg-6 self-apply-form m-auto">
                    <div id="hero-8-form" class="r-24 bg--yellow-100">
                        <span class="color--blue-500 text-uppercase mb-2 d-block">RBI-aligned NBFC marketplace</span>
                        <h4 class="fw-bolder mb-5">Enter Following Details</h4>
                        <p class="mb-30 color--grey mt-0">Kindly enter your details for personalized offers.</p>

                        <form method="post" action="{{ route('loan.agent.loan.details.store') }}"
                            class="request-form request-form-01 save-form-3 needs-validation" novalidate>
                            <div class="row">
                                <div class="col-md-12 range">
                                    <div class="range__value form-group-range bg--yellow-300 r-10 w-100">
                                        <div class="form-group-range w-100 r-10 border">
                                            <span class="w-100 text-center color--green-500 py-1"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="range mt-2">
                                    <div class="d-flex justify-content-between required-amount mt-4 w-100">
                                        <span class="text-uppercase s-12 mb-0 fw-normal color--grey">enter required
                                            amount</span>
                                        <span class="text-uppercase s-14 mb-0 fw-normal color--grey">₹50K – ₹10L</span>
                                    </div>
                                    <div class="form-group range__slider">
                                        <input type="range" step="10000">
                                        <input type="hidden" id="loanAmount" value="" name="loan_amount">
                                    </div>
                                    
                                    <div class="d-flex justify-content-between required-price w-100">
                                        <span class="text-uppercase s-12 mb-0 mt-2 fw-normal color--grey">₹50,000</span>
                                        <span class="text-uppercase s-14 mb-0 mt-2 fw-normal color--grey">₹10,00,000</span>
                                    </div>

                                </div>
                                <div class="col-md-12 mt-4 mb-2">
                                    <label for="form_mobile"
                                        class="position-static p-0 text-uppercase s-14 mb-2 color--grey text-start d-block">enter
                                        monthly income</label>
                                    <div class="input-group mobile-input">
                                        <span class="input-group-text">&#8377;</span>
                                        <input type="text" name="monthly_income" id="monthly_income"
                                            class="numeric-input form-control name bg-white"
                                            placeholder="Enter Monthly Income (&#8377;)" autocomplete="off" required
                                            inputmode="numeric">
                                    </div>
                                    @component('components.ajax-error', ['field' => 'monthly_income'])
                                    @endcomponent
                                </div>

                                <div class="col-md-12 mb-2">
                                    <label for="form_mobile"
                                        class="position-static p-0 text-uppercase s-14 mb-2 color--grey text-start d-block">enter
                                        current emi (if any)</label>
                                    <div class="input-group mobile-input">
                                        <span class="input-group-text">&#8377;</span>
                                        <input type="text" name="current_emi" id="current_emi"
                                            class="numeric-input form-control name bg-white"
                                            placeholder="Enter Current EMI (&#8377;) (If Any)" autocomplete="off" required
                                            inputmode="numeric">
                                    </div>
                                </div>

                                <div class="col-md-12 form-btn mt-3">
                                    <button type="submit"
                                        class="btn btn--theme hover--tra-black submit processNowBtn w-100 rounded-pill"
                                        id="processNowBtn"
                                        onclick="_tfa.push({notify: 'event', name: 'hire_lead', id: 1776413})">Process Now
                                        <span class="fbox-ico ico-10"> <span
                                                class="flaticon-right-arrow  ico-20 ms-1"></span></span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-0 pb-20 bg--green-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <div class="form-holder">
                        <div class="contact-form-notice">
                            <p class="s-14 color--grey">
                                Range of Loan tenure is up to 72 months with Annual Interest Rates ranging between 11% - 36%
                                and the processing fee up to 2%. For Example: Taking in consideration a personal loan of
                                Rs.1,00,000 availed at 11%* interest rate for a tenure of 6* years with 2%* processing fee,
                                the APR will be 11.75%*. *T&C Apply. All these numbers are tentative/indicative, the final
                                loan specifics may vary depending upon the customer profile and NBFCs’ criteria, rules &
                                regulations, and terms &amp; conditions.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $('.save-form-3').submit(function(event) {
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
                            $('#processNowBtn').html(
                                '<span class="spinner-border spinner-border-sm"></span> Process Now'
                            );
                            $('#processNowBtn').attr('disabled', true);
                        },
                        success: function(result) {
                            $(this).attr("disabled", false);
                            if (result.type === 'SUCCESS') {
                                window.location.href =
                                    `{{ route('loan.agent.personal.details') }}`;
                            } else {
                                toastr.error(result.message);
                                $('#processNowBtn').html('Process Now');
                                $('#processNowBtn').attr('disabled', false);
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
                            $('#processNowBtn').html('Process Now');
                            $('#processNowBtn').attr('disabled', false);
                        }
                    });
                }
            });
        })
    </script>
@endpush
