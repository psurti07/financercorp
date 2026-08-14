@extends('layouts.front')
@push('css')
    <link href="{{ asset('front/css/custom.css') }}" rel="stylesheet" type="text/css" />
@endpush
@push('style-css')
@endpush
@section('content')
    <section class="page-hero-section">
        <div class="page-hero-section-overlay bg--green-100 bg--scroll">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-md-12 text-center">
                        <div class="txt-block left-column">
                            <span class="section-id"></span>
                            <h2 class="w-700">Frequently Asked <span class="color--green-500">Questions</span></h2>
                            <p class="p-md w-400">
                                Find answers to all your personal loan questions, from eligibility and documentation to approvals and more.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="faqs-3" class="py-80 faqs-section">
        <div class="container">
            <div class="faqs-3-questions">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-xl-12">
                        <div class="accordion-wrapper">
                            <ul class="accordion">
                                <li class="accordion-item mb-10">
                                    <div class="accordion-thumb">
                                        <h6 class="w-600">1. What types of expenses can a personal loan be used for?</h6>
                                    </div>
                                    <div class="accordion-panel">
                                        <div class="accordion-panel-item">
                                            <div class="faqs-2-answer">
                                                <p>
                                                    Personal loans can be used for almost any personal financial need, including medical bills, education, home improvements, and debt consolidation.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="accordion-item mb-10">
                                    <div class="accordion-thumb">
                                        <h6 class="w-600">2. What are the eligibility criteria for a personal loan?</h6>
                                    </div>
                                    <div class="accordion-panel">
                                        <div class="accordion-panel-item">
                                            <div class="faqs-2-answer">
                                                <p>The eligibility requirements for a personal loan are as follows:</p>
                                                <p><strong>For Salaried Professionals: </strong></p>
                                                <ul class="ml-30">
                                                    <li> - Minimum Age: 21 Years</li>
                                                    <li> - Minimum Salary: Rs.15,000 Per Month (Should reflect in bank statement)</li>
                                                    <li> - Minimum Job Duration: 1 Year</li>
                                                </ul>
                                                <p><strong>For Self-Employed Individuals:</strong></p>
                                                <ul class="ml-30">
                                                    <li> - Minimum Age: 21 Years</li>
                                                    <li> - Income Tax Return Of Minimum 1 Year</li>
                                                    <li> - Minimum Business Duration: 1 Year</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion-item mb-10">
                                    <div class="accordion-thumb">
                                        <h6 class="w-600">3. What documents are required to apply for a personal loan?</h6>
                                    </div>
                                    <div class="accordion-panel">
                                        <div class="accordion-panel-item">
                                            <div class="faqs-2-answer">
                                                <p>Here are some of the common documents needed to apply for a personal loan: </p>
                                                <p><strong>For Salaried:</strong></p>
                                                <ul class="ml-30">
                                                    <li> - Aadhaar Card</li>
                                                    <li> - PAN Card</li>
                                                    <li> - Residence Proof: Rent agreement or Utility bills</li>
                                                    <li> - Bank Statement</li>
                                                    <li> - Income Proof: Salary Slips or Form 16</li>
                                                </ul>
                                                <p><strong>For Self-Employed:</strong></p>
                                                <ul class="ml-30">
                                                    <li> - Aadhaar Card</li>
                                                    <li> - PAN Card</li>
                                                    <li> - Residence Proof: Rent agreement or Utility bills</li>
                                                    <li> - Bank Statement</li>
                                                    <li> - Balance Sheet</li>
                                                    <li> - Income Computation</li>
                                                    <li> - Service Tax Registration, License, Registration Certificate</li>
                                                    <li> - Income Tax Returns</li>
                                                </ul>
                                                <p>Based on your profile and the guidelines, the lender may request additional documents.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="accordion-item mb-10">
                                    <div class="accordion-thumb">
                                        <h6 class="w-600">4. Does a person's credit score influence their approval for a personal loan?</h6>
                                    </div>
                                    <div class="accordion-panel">
                                        <div class="accordion-panel-item">
                                            <div class="faqs-2-answer">
                                                <p>Yes, your credit score is an important consideration during the loan application process. It is one of the most important factors lenders use to determine your creditworthiness.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion-item mb-10">
                                    <div class="accordion-thumb">
                                        <h6 class="w-600">5. What can I do to improve my chances of getting a personal loan?</h6>
                                    </div>
                                    <div class="accordion-panel">
                                        <div class="accordion-panel-item">
                                            <div class="faqs-2-answer">
                                                <p>
                                                    To improve your chances, maintain a good credit score, have consistent income, and provide accurate documentation during the application process.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion-item mb-10">
                                    <div class="accordion-thumb">
                                        <h6 class="w-600">6. Do personal loans offer any direct tax advantages?</h6>
                                    </div>
                                    <div class="accordion-panel">
                                        <div class="accordion-panel-item">
                                            <div class="faqs-2-answer">
                                                <p>
                                                    Personal loans do not provide any direct tax benefits; however, if you use a personal loan to invest in your business, renovate your home, or pay for your education, you may be able to deduct the interest you pay. For more information, please contact your CA or tax advisor.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion-item mb-10">
                                    <div class="accordion-thumb">
                                        <h6 class="w-600">7. What other factors, besides credit scores, do lenders consider when approving personal loans?</h6>
                                    </div>
                                    <div class="accordion-panel">
                                        <div class="accordion-panel-item">
                                            <div class="faqs-2-answer">
                                                <p>
                                                    Lenders take the applicant's age, income, and job stability into account in addition to their credit score.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="divider">
@endsection
@push('script-src')
@endpush
@push('scripts')
@endpush
