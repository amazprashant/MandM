@extends('layout.app')

@section('content')

 <!-- Breadcrumb -->
 <div class="pq-breadcrumb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <div class="pq-breadcrumb-title">
                            <h1>About Us</h1>
                        </div>
                        <div class="pq-breadcrumb-container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index-2.html"><i class="fas fa-home mr-2"></i>Home</a>
                                </li>
                                <li class="breadcrumb-item active">About Us</li>
                            </ol>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- BreadCrumb -->

    <!-- About Us -->
    <section class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <img src="{{asset('assets/images/about-us/1.jpg')}}" class="img-fluid w-100" alt="">
                </div>
                <div class="col-xl-6 mt-4 mt-xl-0 ps-xl-5">
                    <div class="pq-section-title pq-style-1 pq-mb-30">
                        <div class="pq-section-sub-title">
                            <span class="left-sep"></span>
                            about us
                            <span class="right-sep"></span>
                        </div>
                        <h5 class="pq-section-main-title">we are the leading law firm industry</h5>
                        <p class="pq-section-description">It encompasses a wide range of principles and guidelines established by a government or other authoritative body. The primary purpose of law is to fairness, and equality in needs of the society they serve.</p>
                    </div>
                    <div class="row pq-mb-30">
                        <div class="col-lg-6 col-md-6 pe-xl-0">
                            <div class="pq-icon-box pq-style-1">
                                <div class="pq-icon">
                                    <i class="flaticon-019-law"></i>
                                </div>
                                <div class="pq-icon-box-content">
                                    <h5 class="pq-icon-box-title">free initial consultations</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mt-4 mt-md-0 ps-xl-0">
                            <div class="pq-icon-box pq-style-1">
                                <div class="pq-icon">
                                    <i class="flaticon-016-agreement"></i>
                                </div>
                                <div class="pq-icon-box-content">
                                    <h5 class="pq-icon-box-title">Innovative Approach</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="pq-list-check pq-mb-45">
                        <li>
                            <i class="pt-flaticon-right-arrow"></i>
                            <span>Leading the Way in Legal Solutions and Client Satisfaction</span>
                        </li>
                        <li>
                            <i class="pt-flaticon-right-arrow"></i>
                            <span>Your Go-To Law Firm for Industry-Specific Legal Needs</span>
                        </li>
                        <li>
                            <i class="pt-flaticon-right-arrow"></i>
                            <span>Trusted Advisors: Leading the Legal Landscape</span>
                        </li>
                    </ul>
                    <a class="pq-button pq-button-flat" href="about-us.html">
                        <div class="pq-button-block">
                            <span class="pq-button-text">Read more</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us -->

    <!-- Experience -->
    <section class="experience pq-bg-grey">
        <div class="container">
            <div class="row justify-content-center pq-mb-60">
                <div class="col-lg-12">
                    <div class="pq-section-title pq-style-1 text-center">
                        <div class="pq-section-sub-title">
                            <span class="left-sep"></span>
                            our experience
                            <span class="right-sep"></span>
                        </div>
                        <h5 class="pq-section-main-title">proven results</h5>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="pq-icon-box pq-style-4">
                        <div class="pq-icon">
                            <i class="flaticon-004-legal-system"></i>
                        </div>
                        <div class="pq-icon-box-content">
                            <h4 class="pq-icon-box-title">$ 9,600,000</h4>
                            <p class="pq-icon-box-description">Wrongful Death Vehicle Accident</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mt-4 mt-md-0">
                    <div class="pq-icon-box pq-style-4">
                        <div class="pq-icon">
                            <i class="flaticon-009-jury"></i>
                        </div>
                        <div class="pq-icon-box-content">
                            <h4 class="pq-icon-box-title">$ 14,000,000</h4>
                            <p class="pq-icon-box-description">Reversing A Denied Claim To Get You Paid</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mt-4 mt-xl-0">
                    <div class="pq-icon-box pq-style-4">
                        <div class="pq-icon">
                            <i class="flaticon-021-gavel"></i>
                        </div>
                        <div class="pq-icon-box-content">
                            <h4 class="pq-icon-box-title">$ 14,000,000</h4>
                            <p class="pq-icon-box-description">Commercial Vehicle Equity Accidents</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-lg-12">
                    <a class="pq-button pq-button-flat" href="our-services.html">
                        <div class="pq-button-block">
                            <span class="pq-button-text">see all of our result</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Experience -->

    <!-- Service -->
    <section class="service pq-bg-dark">
        <div class="container">
            <div class="row align-items-center pq-mb-60">
                <div class="col-xl-7">
                    <div class="pq-section-title pq-style-1">
                        <div class="pq-section-sub-title">
                            <span class="left-sep"></span>
                            our services
                            <span class="right-sep"></span>
                        </div>
                        <h5 class="pq-section-main-title">Finding Effective Solutions Outside Courtroom</h5>
                    </div>
                </div>
                <div class="col-xl-5 mt-4 mt-xl-0">
                    <div class="button-align">
                        <a class="pq-button pq-button-flat" href="our-services.html">
                            <div class="pq-button-block">
                                <span class="pq-button-text">see all of our result</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="pq-service-box-5-list">
                        <div class="item">
                            <div class="pq-service-box pq-style-5">
                                <div class="pq-service-img">
                                    <img decoding="async" src="{{asset('assets/images/service/box-list/1.jpg')}}" alt="service-image">
                                </div>
                                <div class="pq-service-left">
                                    <span class="pq-service-number">02</span>
                                    <h5 class="pq-service-box-title">Real Estate Home</h5>
                                </div>
                                <div class="pq-btn-container">
                                    <a class="pq-button pq-button-icon" href="real-estate-home.html">
                                        <div class="pq-button-block">
                                            <span class="pq-button-text">read more</span>
                                            <i class="pt-flaticon-right-arrow"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pq-service-box pq-style-5">
                                <div class="pq-service-img">
                                    <img decoding="async" src="{{asset('assets/images/service/box-list/2.jpg')}}" alt="service-image">
                                </div>
                                <div class="pq-service-left">
                                    <span class="pq-service-number">03</span>
                                    <h5 class="pq-service-box-title">Family Law Consult</h5>
                                </div>
                                <div class="pq-btn-container">
                                    <a class="pq-button pq-button-icon" href="family-law-consult.html">
                                        <div class="pq-button-block">
                                            <span class="pq-button-text">read more</span>
                                            <i class="pt-flaticon-right-arrow"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pq-service-box pq-style-5">
                                <div class="pq-service-img">
                                    <img decoding="async" src="{{asset('assets/images/service/box-list/3.jpg')}}" alt="service-image">
                                </div>
                                <div class="pq-service-left">
                                    <span class="pq-service-number">04</span>
                                    <h5 class="pq-service-box-title">Business Financial</h5>
                                </div>
                                <div class="pq-btn-container">
                                    <a class="pq-button pq-button-icon" href="business-financial.html">
                                        <div class="pq-button-block">
                                            <span class="pq-button-text">read more</span>
                                            <i class="pt-flaticon-right-arrow"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pq-service-box pq-style-5">
                                <div class="pq-service-img">
                                    <img decoding="async" src="{{asset('assets/images/service/box-list/4.jpg')}}" alt="service-image">
                                </div>
                                <div class="pq-service-left">
                                    <span class="pq-service-number">01</span>
                                    <h5 class="pq-service-box-title">Insurance Law</h5>
                                </div>
                                <div class="pq-btn-container">
                                    <a class="pq-button pq-button-icon" href="insurance-law.html">
                                        <div class="pq-button-block">
                                            <span class="pq-button-text">read more</span>
                                            <i class="pt-flaticon-right-arrow"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service -->

    <!-- Testimonial -->
    <section class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pq-section-title pq-style-1 text-center">
                        <div class="pq-section-sub-title">
                            <span class="left-sep"></span>
                            testimonial
                            <span class="right-sep"></span>
                        </div>
                        <h5 class="pq-section-main-title">our happy client's review</h5>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="pq-testimonial-box-slider pq-style-1">
                        <div class="owl-carousel owl-loaded owl-drag" data-dots="false" data-nav="true" data-desk_num="1" data-lap_num="1" data-tab_num="1" data-mob_num="1" data-mob_sm="1" data-autoplay="false" data-loop="true" data-margin="30">
                            <div class="item">
                                <div class="pq-testimonial-box pq-style-1">
                                    <div class="pq-testimonial-media">
                                        <div class="pq-testimonial-quote">
                                            <i class="pt-flaticon-quote-1"></i>
                                        </div>
                                        <div class="pq-testimonial-img">
                                            <img decoding="async" src="{{asset('assets/images/testimonial/testimonial-style-1/1.jpg')}}" alt="testimonial-img">
                                        </div>
                                    </div>
                                    <div class="pq-testimonial-info">
                                        <div class="pq-testimonial-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <p class="pq-testimonial-description">Law is a system of rules and guidelines
                                            established by a society or governing authority to regulate behavior, maintain
                                            order, and provide justice. It sets standards of conduct that individuals and
                                            organizations consequences for non-compliance.
                                        </p>
                                        <div class="pq-testimonial-meta">
                                            <h5 class="pq-testmonial-title">jonh smith</h5>
                                            <span>Family Lawyer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pq-testimonial-box pq-style-1">
                                    <div class="pq-testimonial-media">
                                        <div class="pq-testimonial-quote">
                                            <i class="pt-flaticon-quote-1"></i>
                                        </div>
                                        <div class="pq-testimonial-img">
                                            <img decoding="async" src="{{asset('assets/images/testimonial/testimonial-style-1/2.png')}}" alt="testimonial-img">
                                        </div>
                                    </div>
                                    <div class="pq-testimonial-info">
                                        <div class="pq-testimonial-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <p class="pq-testimonial-description">Law is a system of rules and guidelines
                                            established by a society or governing authority to regulate behavior, maintain
                                            order, and provide justice. It sets standards of conduct that individuals and
                                            organizations consequences for non-compliance.
                                        </p>
                                        <div class="pq-testimonial-meta">
                                            <h5 class="pq-testmonial-title">Danial Frankie</h5>
                                            <span>Financial lawyer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pq-testimonial-box pq-style-1">
                                    <div class="pq-testimonial-media">
                                        <div class="pq-testimonial-quote">
                                            <i class="pt-flaticon-quote-1"></i>
                                        </div>
                                        <div class="pq-testimonial-img">
                                            <img decoding="async" src="{{asset('assets/images/testimonial/testimonial-style-1/3.jpg')}}" alt="testimonial-img">
                                        </div>
                                    </div>
                                    <div class="pq-testimonial-info">
                                        <div class="pq-testimonial-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <p class="pq-testimonial-description">Law is a system of rules and guidelines
                                            established by a society or governing authority to regulate behavior, maintain
                                            order, and provide justice. It sets standards of conduct that individuals and
                                            organizations consequences for non-compliance.
                                        </p>
                                        <div class="pq-testimonial-meta">
                                            <h5 class="pq-testmonial-title">Iliena Brown </h5>
                                            <span>Co-Founder</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial -->

    <!-- Video Popup -->
    <div class="video-popup pq-pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 p-0 pq-fill-bg">
                    <div class="video-popup-img pq-bg-dark pq-video-popup-img-4">
                        <div class="pq-popup-video-block pq-popup-style-1">
                            <div class="pq-video-icon">
                                <a href="https://www.youtube.com/watch?v=XHOmBV4js_E" class="pq-video default popup-youtube">
                                    <i aria-hidden="true" class="fas fa-play"></i>
                                </a>	            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Popup -->

    <!-- Why Us -->
    <section class="why-us pq-bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pq-section-title pq-style-1 text-center">
                        <div class="pq-section-sub-title">
                            <span class="left-sep"></span>
                            Why choose us
                            <span class="right-sep"></span>
                        </div>
                        <h5 class="pq-section-main-title">empowering clients thourgh expert guidence</h5>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="pq-counter pq-counter-style-5">
                        <div class="pq-counter-box-media">
                            <i class="flaticon-003-courthouse"></i>
                        </div>
                        <div class="pq-counter-num-prefix">
                            <h5 class="timer" data-to="456" data-speed="2000"></h5>
                            <span class="pq-counter-prefix">+</span>
                        </div>
                        <h6 class="pq-counter-title">Project Completed</h6>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mt-4 mt-md-0">
                    <div class="pq-counter pq-counter-style-5">
                        <div class="pq-counter-box-media">
                            <i class="flaticon-005-injustice"></i>
                        </div>
                        <div class="pq-counter-num-prefix">
                            <h5 class="timer" data-to="356" data-speed="2000"></h5>
                            <span class="pq-counter-prefix">+</span>
                        </div>
                        <h6 class="pq-counter-title">Happy Clients</h6>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mt-4 mt-xl-0">
                    <div class="pq-counter pq-counter-style-5">
                        <div class="pq-counter-box-media">
                            <i class="flaticon-008-signature"></i>
                        </div>
                        <div class="pq-counter-num-prefix">
                            <h5 class="timer" data-to="25" data-speed="2000"></h5>
                            <span class="pq-counter-prefix">+</span>
                        </div>
                        <h6 class="pq-counter-title">Years In Business</h6>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mt-4 mt-xl-0">
                    <div class="pq-counter pq-counter-style-5">
                        <div class="pq-counter-box-media">
                            <i class="flaticon-012-judge"></i>
                        </div>
                        <div class="pq-counter-num-prefix">
                            <h5 class="timer" data-to="254" data-speed="2000"></h5>
                            <span class="pq-counter-prefix">+</span>
                        </div>
                        <h6 class="pq-counter-title">winning awards</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why US -->

    <!-- Process -->
    <section class="process pq-bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 pq-sec-padding">
                    <div class="pq-section-title pq-style-1 text-center">
                        <div class="pq-section-sub-title">
                            <span class="left-sep"></span>
                            our process
                            <span class="right-sep"></span>
                        </div>
                        <h5 class="pq-section-main-title">we help to solve your legal problem</h5>
                    </div>
                    <div class="pq-icon-box pq-style-11">
                        <div class="pq-icon">
                            <i class="pt-flaticon-call"></i>
                        </div>
                        <div class="pq-icon-box-content">
                            <h6 class="pq-icon-box-title">
                                <a href="#">00-600-600-4525</a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Process -->

    <!-- Team -->
    <section class="team pq-bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pq-section-title pq-style-1 text-center">
                        <div class="pq-section-sub-title">
                            <span class="left-sep"></span>
                            our team
                            <span class="right-sep"></span>
                        </div>
                        <h5 class="pq-section-main-title">Exceptional Legal Team Dedicated to Your Success</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid pq-px-30">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pq-team-box-slider pq-style-1">
                        <div class="owl-carousel owl-loaded owl-drag" data-dots="false" data-nav="false" data-desk_num="5" data-lap_num="3" data-tab_num="2" data-mob_num="1" data-mob_sm="1" data-autoplay="false" data-loop="true" data-margin="30">
                            <div class="item">
                                <div class="pq-team-box pq-style-1">
                                    <div class="pq-team-box">
                                        <div class="pq-team-img">
                                            <img decoding="async" src="{{asset('assets/images/team/slider/1.jpg')}}" alt="team-image">
                                            <div class="pq-team-social">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fab fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fab fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fab fa-linkedin"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pq-team-info">
                                            <h5 class="pq-member-name">
                                                <a href="team-single.html">jonh smith</a>
                                            </h5>
                                            <span class="pq-team-designation">Family Lawyer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pq-team-box pq-style-1">
                                    <div class="pq-team-box">
                                        <div class="pq-team-img">
                                            <img decoding="async" src="{{asset('assets/images/team/slider/2.jpg')}}" alt="team-image">
                                            <div class="pq-team-social">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fab fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fab fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fab fa-linkedin"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pq-team-info">
                                            <h5 class="pq-member-name">
                                                <a href="team-single.html">Danial Frankie</a>
                                            </h5>
                                            <span class="pq-team-designation">Financial lawyer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pq-team-box pq-style-1">
                                    <div class="pq-team-box">
                                        <div class="pq-team-img">
                                            <img decoding="async" src="{{asset('assets/images/team/slider/3.jpg')}}" alt="team-image">
                                            <div class="pq-team-social">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fab fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fab fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fab fa-linkedin"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pq-team-info">
                                            <h5 class="pq-member-name">
                                                <a href="team-single.html"> Micheal Baker</a>
                                            </h5>
                                            <span class="pq-team-designation">Civil Lawyer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pq-team-box pq-style-1">
                                    <div class="pq-team-box">
                                        <div class="pq-team-img">
                                            <img decoding="async" src="{{asset('assets/images/team/slider/4.jpg')}}" alt="team-image">
                                            <div class="pq-team-social">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fab fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fab fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fab fa-linkedin"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pq-team-info">
                                            <h5 class="pq-member-name">
                                                <a href="team-single.html"> Iliena Brown </a>
                                            </h5>
                                            <span class="pq-team-designation">Co-Founder</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pq-team-box pq-style-1">
                                    <div class="pq-team-box">
                                        <div class="pq-team-img">
                                            <img decoding="async" src="{{asset('assets/images/team/slider/5.jpg')}}" alt="team-image">
                                            <div class="pq-team-social">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fab fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fab fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fab fa-linkedin"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pq-team-info">
                                            <h5 class="pq-member-name">
                                                <a href="team-single.html">Joseph Thomas </a>
                                            </h5>
                                            <span class="pq-team-designation">Criminal lawyer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pq-team-box pq-style-1">
                                    <div class="pq-team-box">
                                        <div class="pq-team-img">
                                            <img decoding="async" src="{{asset('assets/images/team/slider/6.jpg')}}" alt="team-image">
                                            <div class="pq-team-social">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fab fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fab fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fab fa-linkedin"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pq-team-info">
                                            <h5 class="pq-member-name">
                                                <a href="team-single.html"> Iliena Brown </a>
                                            </h5>
                                            <span class="pq-team-designation">Practice Attorney</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team -->

    <!-- Client -->
    <section class="client">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pq-section-title pq-style-1 text-center">
                        <div class="pq-section-sub-title">
                            <span class="left-sep"></span>
                            our clients
                            <span class="right-sep"></span>
                        </div>
                        <h5 class="pq-section-main-title">we have had the pleasure of working some clients</h5>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-xl-3 col-lg-6 col-md-6 p-0">
                    <div class="pq-client-box-grid border-top-0">
                        <div class="pq-client-box pq-style-2">
                            <div class="pq-client-img">
                                <img decoding="async" src="{{asset('assets/images/client/grid/1.png')}}" alt="pq-client-img" class="pq-client-img">
                            </div>
                            <div class="pq-client-hover">
                                <h5 class="pq-client-title"><a href="contact-us.html"> Visit website</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 p-0">
                    <div class="pq-client-box-grid border-top-0">
                        <div class="pq-client-box pq-style-2">
                            <div class="pq-client-img">
                                <img decoding="async" src="{{asset('assets/images/client/grid/2.png')}}" alt="pq-client-img" class="pq-client-img">
                            </div>
                            <div class="pq-client-hover">
                                <h5 class="pq-client-title"><a href="contact-us.html"> Visit website</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 p-0">
                    <div class="pq-client-box-grid border-top-0">
                        <div class="pq-client-box pq-style-2">
                            <div class="pq-client-img">
                                <img decoding="async" src="{{asset('assets/images/client/grid/3.png')}}" alt="pq-client-img" class="pq-client-img">
                            </div>
                            <div class="pq-client-hover">
                                <h5 class="pq-client-title"><a href="contact-us.html"> Visit website</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 p-0">
                    <div class="pq-client-box-grid border-top-0">
                        <div class="pq-client-box pq-style-2 border-end-0">
                            <div class="pq-client-img">
                                <img decoding="async" src="{{asset('assets/images/client/grid/4.png')}}" alt="pq-client-img" class="pq-client-img">
                            </div>
                            <div class="pq-client-hover">
                                <h5 class="pq-client-title"><a href="contact-us.html"> Visit website</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 p-0">
                    <div class="pq-client-box-grid border-top-0">
                        <div class="pq-client-box pq-style-2 border-bottom-0">
                            <div class="pq-client-img">
                                <img decoding="async" src="{{asset('assets/images/client/grid/5.png')}}" alt="pq-client-img" class="pq-client-img">
                            </div>
                            <div class="pq-client-hover">
                                <h5 class="pq-client-title"><a href="contact-us.html"> Visit website</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 p-0">
                    <div class="pq-client-box-grid border-top-0">
                        <div class="pq-client-box pq-style-2 border-bottom-0">
                            <div class="pq-client-img">
                                <img decoding="async" src="{{asset('assets/images/client/grid/6.png')}}" alt="pq-client-img" class="pq-client-img">
                            </div>
                            <div class="pq-client-hover">
                                <h5 class="pq-client-title"><a href="contact-us.html"> Visit website</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 p-0">
                    <div class="pq-client-box-grid">
                        <div class="pq-client-box pq-style-2 border-bottom-0">
                            <div class="pq-client-img">
                                <img decoding="async" src="{{asset('assets/images/client/grid/7.png')}}" alt="pq-client-img" class="pq-client-img">
                            </div>
                            <div class="pq-client-hover">
                                <h5 class="pq-client-title"><a href="contact-us.html"> Visit website</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 p-0">
                    <div class="pq-client-box-grid">
                        <div class="pq-client-box pq-style-2 border-end-0 border-bottom-0">
                            <div class="pq-client-img">
                                <img decoding="async" src="{{asset('assets/images/client/grid/8.png')}}" alt="pq-client-img" class="pq-client-img">
                            </div>
                            <div class="pq-client-hover">
                                <h5 class="pq-client-title"><a href="contact-us.html"> Visit website</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Client --> 

@endsection
