@extends('layouts.main')
@section('content')
    <main>

        <!-- breadcrumb-area-start -->
        <div class="breadcrumb__area breadcrumb-ptb-5 p-relative blue-bg-2">
            <div class="breadcrumb__shape-1">
                <img src="assets/img/breadcrumb/breadcrumb-shape-1.png" alt="">
            </div>
            <div class="breadcrumb__shape-2">
                <img src="assets/img/breadcrumb/breadcrumb-shape-2.png" alt="">
            </div>
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xl-9 col-lg-7 col-md-7">
                        <div class="price-banner z-index-3">
                            <div class="price-banner-title-box">
                                <h3 class="price-banner-title tp-char-animation">Pricing plans</h3>
                                <p>Clear, affordable plans for every team and requirement.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-5 col-md-5">
                        <div class="tp-price__btn-box tp-price__btn-inner">
                            <div class="tp-price__btn-line d-none d-md-block">
                                <svg width="56" height="58" viewBox="0 0 56 58" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.164835 56.549C40.9814 63.3663 32.9699 -14.7417 50.2037 30.0803C67.4374 74.9024 -21.1494 2.27453 55.6761 0.848635"
                                        stroke="white" stroke-dasharray="3 3" />
                                </svg>
                            </div>
                            <div class="tp-price__btn-offer-tag d-none d-md-block">
                                <span>SAVE <br> 35%</span>
                            </div>
                            <nav>
                                <div class="nav nav-tab tp-price__btn-bg" id="nav-tab" role="tablist">
                                    <button class="nav-link active monthly" id="nav-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                        aria-selected="true">Monthly</button>
                                    <button class="nav-link yearly" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-profile" type="button" role="tab"
                                        aria-controls="nav-profile" aria-selected="false">Yearly</button>
                                    <span class="test"></span>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-end -->

        <!-- tp-price-area-start -->
        <div class="tp-price-area mb-120">
            <div class="container">
                <div class="price-tab-content">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                            tabindex="0">
                            <div class="tp-price-table price-inner-white-bg z-index-3">
                                <div class="tp-price-table-wrapper">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-4">
                                            <div class="tp-price-header">
                                                <div class="tp-price-header-img">
                                                    <img src="assets/img/price/price-4.1.png" alt="">
                                                </div>                                               
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="tp-price-top-wrapper">
                                                <div class="tp-price-top-item text-center">
                                                    <div class="tp-price-top-tag-wrapper">
                                                        <span>STARTER</span>
                                                        <p>Collect more submissions, <br> access most of the features</p>
                                                    </div>
                                                    <div class="tp-price-top-title-wrapper">
                                                        <h4>$18 <span>/mo</span></h4>
                                                        <p>Billed monthly</p>
                                                        <a class="tp-btn-service" href="#">Get Started</a>
                                                    </div>
                                                </div>
                                                <div class="tp-price-top-item text-center active">
                                                    <div class="tp-price-top-tag-wrapper">
                                                        <span>Advance</span>
                                                        <p>Collect more submissions, <br> access most of the features</p>
                                                    </div>
                                                    <div class="tp-price-top-title-wrapper">
                                                        <h4>$19 <span>/mo</span></h4>
                                                        <p>Billed monthly</p>
                                                        <a class="tp-btn-service" href="#">Get Started</a>
                                                    </div>
                                                </div>
                                                <div class="tp-price-top-item text-center">
                                                    <div class="tp-price-top-tag-wrapper">
                                                        <span>Team Plan</span>
                                                        <p>Collect more submissions, <br> access most of the features</p>
                                                    </div>
                                                    <div class="tp-price-top-title-wrapper">
                                                        <h4>$14 <span>/mo</span></h4>
                                                        <p>Billed monthly</p>
                                                        <a class="tp-btn-service" href="#">Get Started</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-price-feature-wrapper">
                                        <div class="row g-0">
                                            <div class="col-4">
                                                <div class="tp-price-feature-box">
                                                    <div class="tp-price-feature-item p-relative">
                                                        <div class="d-flex align-items-center">
                                                            <span>Conversions</span>
                                                            <div class="tp-price-feature-tooltip-box p-relative">
                                                                <svg width="16" height="16" viewBox="0 0 16 16"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <circle opacity="0.5" cx="8" cy="8"
                                                                        r="7" stroke="#5F6168" stroke-width="1.5" />
                                                                    <path d="M8 11.5V7.3" stroke="#5F6168"
                                                                        stroke-width="1.5" stroke-linecap="round" />
                                                                    <circle r="0.7"
                                                                        transform="matrix(1 0 0 -1 7.99883 5.19941)"
                                                                        fill="#5F6168" />
                                                                </svg>
                                                                <div class="tp-price-feature-tooltip">
                                                                    <p>Add gradient heading, button, pricing table
                                                                        testimonial etc.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tp-price-feature-item p-relative">
                                                        <div class="d-flex align-items-center">
                                                            <span>Maximum file size</span>
                                                            <div class="tp-price-feature-tooltip-box p-relative">
                                                                <svg width="16" height="16" viewBox="0 0 16 16"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <circle opacity="0.5" cx="8" cy="8"
                                                                        r="7" stroke="#5F6168" stroke-width="1.5" />
                                                                    <path d="M8 11.5V7.3" stroke="#5F6168"
                                                                        stroke-width="1.5" stroke-linecap="round" />
                                                                    <circle r="0.7"
                                                                        transform="matrix(1 0 0 -1 7.99883 5.19941)"
                                                                        fill="#5F6168" />
                                                                </svg>
                                                                <div class="tp-price-feature-tooltip">
                                                                    <p>Add gradient heading, button, pricing table
                                                                        testimonial etc.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tp-price-feature-item p-relative">
                                                        <div class="d-flex align-items-center">
                                                            <span>Concurrent conversion</span>
                                                            <div class="tp-price-feature-tooltip-box p-relative">
                                                                <svg width="16" height="16" viewBox="0 0 16 16"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <circle opacity="0.5" cx="8" cy="8"
                                                                        r="7" stroke="#5F6168" stroke-width="1.5" />
                                                                    <path d="M8 11.5V7.3" stroke="#5F6168"
                                                                        stroke-width="1.5" stroke-linecap="round" />
                                                                    <circle r="0.7"
                                                                        transform="matrix(1 0 0 -1 7.99883 5.19941)"
                                                                        fill="#5F6168" />
                                                                </svg>
                                                                <div class="tp-price-feature-tooltip">
                                                                    <p>Add gradient heading, button, pricing table
                                                                        testimonial etc.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tp-price-feature-item p-relative">
                                                        <div class="d-flex align-items-center">
                                                            <span>Support</span>
                                                            <div class="tp-price-feature-tooltip-box p-relative">
                                                                <svg width="16" height="16" viewBox="0 0 16 16"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <circle opacity="0.5" cx="8" cy="8"
                                                                        r="7" stroke="#5F6168" stroke-width="1.5" />
                                                                    <path d="M8 11.5V7.3" stroke="#5F6168"
                                                                        stroke-width="1.5" stroke-linecap="round" />
                                                                    <circle r="0.7"
                                                                        transform="matrix(1 0 0 -1 7.99883 5.19941)"
                                                                        fill="#5F6168" />
                                                                </svg>
                                                                <div class="tp-price-feature-tooltip">
                                                                    <p>Add gradient heading, button, pricing table
                                                                        testimonial etc.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tp-price-feature-item p-relative">
                                                        <div class="d-flex align-items-center">
                                                            <span>Unlimited bandwidth</span>
                                                            <div class="tp-price-feature-tooltip-box p-relative">
                                                                <svg width="16" height="16" viewBox="0 0 16 16"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <circle opacity="0.5" cx="8" cy="8"
                                                                        r="7" stroke="#5F6168" stroke-width="1.5" />
                                                                    <path d="M8 11.5V7.3" stroke="#5F6168"
                                                                        stroke-width="1.5" stroke-linecap="round" />
                                                                    <circle r="0.7"
                                                                        transform="matrix(1 0 0 -1 7.99883 5.19941)"
                                                                        fill="#5F6168" />
                                                                </svg>
                                                                <div class="tp-price-feature-tooltip">
                                                                    <p>Add gradient heading, button, pricing table
                                                                        testimonial etc.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="tp-price-feature-info-item">
                                                    <div class="tp-price-feature-info text-center">
                                                        <span>1000</span>
                                                    </div>
                                                    <div class="tp-price-feature-info text-center">
                                                        <span>200 Mb</span>
                                                    </div>
                                                    <div class="tp-price-feature-info text-center">
                                                        <span>1</span>
                                                    </div>
                                                    <div class="tp-price-feature-info text-center">
                                                        <span>Self Supported</span>
                                                    </div>
                                                    <div class="tp-price-feature-info text-center">
                                                        <span>Limited</span>
                                                    </div>
                                                </div>
                                                <div class="tp-price-feature-info-item active">
                                                    <div class="tp-price-feature-info text-center">
                                                        <span>2000</span>
                                                    </div>
                                                    <div class="tp-price-feature-info text-center">
                                                        <span>500 Mb</span>
                                                    </div>
                                                    <div class="tp-price-feature-info text-center">
                                                        <span>2</span>
                                                    </div>
                                                    <div class="tp-price-feature-info text-center">
                                                        <span>Email Supported</span>
                                                    </div>
                                                    <div class="tp-price-feature-info text-center">
                                                        <span>Unlimited</span>
                                                    </div>
                                                </div>
                                                <div class="tp-price-feature-info-item">
                                                    <div class="tp-price-feature-info text-center">
                                                        <span>5000</span>
                                                    </div>
                                                    <div class="tp-price-feature-info text-center">
                                                        <span>1 Gb</span>
                                                    </div>
                                                    <div class="tp-price-feature-info text-center">
                                                        <span>5</span>
                                                    </div>
                                                    <div class="tp-price-feature-info text-center">
                                                        <span>Email Supported</span>
                                                    </div>
                                                    <div class="tp-price-feature-info text-center">
                                                        <span>Unlimited</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"
                            tabindex="0">
                            <div class="tp-price-table price-inner-white-bg z-index-5">
                                <div class="tp-price-table-wrapper">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-4">
                                            <div class="tp-price-header">
                                                <div class="tp-price-header-img">
                                                    <img src="assets/img/price/price-4.1.png" alt="">
                                                </div>
                                                <div class="tp-price-header-content">
                                                    <p>You pay <span>$59.00/mo</span> today Renews <br>
                                                        April 2024 For <span>$69.00/mo</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="tp-price-top-wrapper">
                                                <div class="tp-price-top-item text-center">
                                                    <div class="tp-price-top-tag-wrapper">
                                                        <span>STARTER</span>
                                                        <p>Collect more submissions, <br> access most of the features</p>
                                                    </div>
                                                    <div class="tp-price-top-title-wrapper">
                                                        <h4>$36 <span>/mo</span></h4>
                                                        <p>Billed monthly</p>
                                                        <a class="tp-btn-service" href="#">Get Started</a>
                                                    </div>
                                                </div>
                                                <div class="tp-price-top-item text-center active">
                                                    <div class="tp-price-top-tag-wrapper">
                                                        <span>Advance</span>
                                                        <p>Collect more submissions, <br> access most of the features</p>
                                                    </div>
                                                    <div class="tp-price-top-title-wrapper">
                                                        <h4>$59 <span>/mo</span></h4>
                                                        <p>Billed monthly</p>
                                                        <a class="tp-btn-service" href="#">Get Started</a>
                                                    </div>
                                                </div>
                                                <div class="tp-price-top-item text-center">
                                                    <div class="tp-price-top-tag-wrapper">
                                                        <span>Team Plan</span>
                                                        <p>Collect more submissions, <br> access most of the features</p>
                                                    </div>
                                                    <div class="tp-price-top-title-wrapper">
                                                        <h4>$99 <span>/mo</span></h4>
                                                        <p>Billed monthly</p>
                                                        <a class="tp-btn-service" href="#">Get Started</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-price-feature-wrapper">
                                        <div class="row g-0">
                                            <div class="col-4">
                                                <div class="tp-price-feature-box">
                                                    <div class="tp-price-feature-item p-relative">
                                                        <div>
                                                            <span>Team</span>
                                                            <svg width="16" height="16" viewBox="0 0 16 16"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <circle opacity="0.5" cx="8" cy="8"
                                                                    r="7" stroke="#5F6168" stroke-width="1.5" />
                                                                <path d="M8 11.5V7.3" stroke="#5F6168" stroke-width="1.5"
                                                                    stroke-linecap="round" />
                                                                <circle r="0.7"
                                                                    transform="matrix(1 0 0 -1 7.99883 5.19941)"
                                                                    fill="#5F6168" />
                                                            </svg>
                                                        </div>
                                                        <div class="tp-price-feature-tooltip">
                                                            <p>Add gradient heading, button, pricing table testimonial etc.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="tp-price-feature-item p-relative">
                                                        <span>Installed Agent</span>
                                                        <svg width="16" height="16" viewBox="0 0 16 16"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle opacity="0.5" cx="8" cy="8" r="7"
                                                                stroke="#5F6168" stroke-width="1.5" />
                                                            <path d="M8 11.5V7.3" stroke="#5F6168" stroke-width="1.5"
                                                                stroke-linecap="round" />
                                                            <circle r="0.7" transform="matrix(1 0 0 -1 7.99883 5.19941)"
                                                                fill="#5F6168" />
                                                        </svg>
                                                        <div class="tp-price-feature-tooltip">
                                                            <p>Add gradient heading, button, pricing table testimonial etc.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="tp-price-feature-item p-relative">
                                                        <span>Real-Time Feedback</span>
                                                        <svg width="16" height="16" viewBox="0 0 16 16"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle opacity="0.5" cx="8" cy="8" r="7"
                                                                stroke="#5F6168" stroke-width="1.5" />
                                                            <path d="M8 11.5V7.3" stroke="#5F6168" stroke-width="1.5"
                                                                stroke-linecap="round" />
                                                            <circle r="0.7" transform="matrix(1 0 0 -1 7.99883 5.19941)"
                                                                fill="#5F6168" />
                                                        </svg>
                                                        <div class="tp-price-feature-tooltip">
                                                            <p>Add gradient heading, button, pricing table testimonial etc.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="tp-price-feature-item p-relative">
                                                        <span>Adding Time Manually</span>
                                                        <svg width="16" height="16" viewBox="0 0 16 16"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle opacity="0.5" cx="8" cy="8" r="7"
                                                                stroke="#5F6168" stroke-width="1.5" />
                                                            <path d="M8 11.5V7.3" stroke="#5F6168" stroke-width="1.5"
                                                                stroke-linecap="round" />
                                                            <circle r="0.7" transform="matrix(1 0 0 -1 7.99883 5.19941)"
                                                                fill="#5F6168" />
                                                        </svg>
                                                        <div class="tp-price-feature-tooltip">
                                                            <p>Add gradient heading, button, pricing table testimonial etc.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="tp-price-feature-item p-relative">
                                                        <span>Video Dedicated Support</span>
                                                        <svg width="16" height="16" viewBox="0 0 16 16"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle opacity="0.5" cx="8" cy="8" r="7"
                                                                stroke="#5F6168" stroke-width="1.5" />
                                                            <path d="M8 11.5V7.3" stroke="#5F6168" stroke-width="1.5"
                                                                stroke-linecap="round" />
                                                            <circle r="0.7" transform="matrix(1 0 0 -1 7.99883 5.19941)"
                                                                fill="#5F6168" />
                                                        </svg>
                                                        <div class="tp-price-feature-tooltip">
                                                            <p>Add gradient heading, button, pricing table testimonial etc.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="tp-price-feature-info-item">
                                                    <div class="tp-price-feature-info text-center">
                                                        <span>1000</span>
                                                    </div>
                                                    <div class="tp-price-feature-info text-center">
                                                        <span>200 Mb</span>
                                                    </div>
                                                    <div class="tp-price-feature-info text-center">
                                                        <span>1</span>
                                                    </div>
                                                    <div class="tp-price-feature-info text-center">
                                                        <span>Self Supported</span>
                                                    </div>
                                                    <div class="tp-price-feature-info text-center">
                                                        <span>Limited</span>
                                                    </div>
                                                </div>
                                                <div class="tp-price-feature-info-item active">
                                                    <div class="tp-price-feature-info text-center">
                                                        <span>2000</span>
                                                    </div>
                                                    <div class="tp-price-feature-info text-center">
                                                        <span>500 Mb</span>
                                                    </div>
                                                    <div class="tp-price-feature-info text-center">
                                                        <span>2</span>
                                                    </div>
                                                    <div class="tp-price-feature-info text-center">
                                                        <span>Email Supported</span>
                                                    </div>
                                                    <div class="tp-price-feature-info text-center">
                                                        <span>Unlimited</span>
                                                    </div>
                                                </div>
                                                <div class="tp-price-feature-info-item">
                                                    <div class="tp-price-feature-info text-center">
                                                        <span>5000</span>
                                                    </div>
                                                    <div class="tp-price-feature-info text-center">
                                                        <span>1 Gb</span>
                                                    </div>
                                                    <div class="tp-price-feature-info text-center">
                                                        <span>5</span>
                                                    </div>
                                                    <div class="tp-price-feature-info text-center">
                                                        <span>Email Supported</span>
                                                    </div>
                                                    <div class="tp-price-feature-info text-center">
                                                        <span>Unlimited</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tp-price-area-end -->

    </main>
@endsection
