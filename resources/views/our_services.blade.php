
@extends('layout.app')

@section('content')

    <!-- Breadcrumb -->
    <div class="pq-breadcrumb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <div class="pq-breadcrumb-title">
                            <h1>Our Services</h1>
                        </div>
                        <div class="pq-breadcrumb-container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index-2.html"><i class="fas fa-home mr-2"></i>Home</a>
                                </li>
                                <li class="breadcrumb-item active">Our Services</li>
                            </ol>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- BreadCrumb -->

    <!-- Services -->
    <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pq-section-title pq-style-1 text-center">
                        <div class="pq-section-sub-title">
                            <span class="left-sep"></span>
                            our services
                            <span class="right-sep"></span>
                        </div>
                        <h5 class="pq-section-main-title">finding effective solutions outside courtroom</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 pq-pe-60">
                    <div class="pq-service-box pq-style-3">
                        <div class="pq-service-box-media">
                            <div class="pq-service-icon">
                                <i class="flaticon-007-lawyer"></i>
                            </div>
                        </div>
                        <div class="pq-service-box-info">
                            <h5 class="pq-service-box-title">best <br>legal defence</h5>
                            <p class="pq-service-box-description">Creating a law portfolio is an essential step for legal profess</p>
                            <div class="pq-btn-container">
                                <a class="pq-button pq-button-link" href="stop-forcloasure-law.html">
                                    <div class="pq-button-block">
                                        <span class="pq-button-text">read more</span>
                                        <i class="pt-flaticon-right-arrow"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mt-4 mt-md-0 pq-pe-60">
                    <div class="pq-service-box pq-style-3">
                        <div class="pq-service-box-media">
                            <div class="pq-service-icon">
                                <i class="flaticon-003-courthouse" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="pq-service-box-info">
                            <h5 class="pq-service-box-title">strive <br>for excellence</h5>
                            <p class="pq-service-box-description">Creating a law portfolio is an essential step for legal profess</p>
                            <div class="pq-btn-container">
                                <a class="pq-button pq-button-link" href="real-estate-home.html">
                                    <div class="pq-button-block">
                                        <span class="pq-button-text">read more</span>
                                        <i class="pt-flaticon-right-arrow"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mt-4 mt-xl-0 pq-pe-60">
                    <div class="pq-service-box pq-style-3">
                        <div class="pq-service-box-media">
                            <div class="pq-service-icon">
                                <i class="flaticon-022-law-book" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="pq-service-box-info">
                            <h5 class="pq-service-box-title">family<br> law services</h5>
                            <p class="pq-service-box-description">Creating a law portfolio is an essential step for legal profess</p>
                            <div class="pq-btn-container">
                                <a class="pq-button pq-button-link" href="family-law-consult.html">
                                    <div class="pq-button-block">
                                        <span class="pq-button-text">read more</span>
                                        <i class="pt-flaticon-right-arrow"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mt-4 mt-xl-0">
                    <div class="pq-service-box pq-style-3 border-end-0">
                        <div class="pq-service-box-media">
                            <div class="pq-service-icon">
                                <i class="flaticon-030-advice" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="pq-service-box-info">
                            <h5 class="pq-service-box-title">only<br> skilled attorney</h5>
                            <p class="pq-service-box-description">Creating a law portfolio is an essential step for legal profess</p>
                            <div class="pq-btn-container">
                                <a class="pq-button pq-button-link" href="business-financial.html">
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
    </section>
    <!-- Services -->

    <!-- About Us -->
    <section class="about-us pq-bg-grey">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 pq-pe-30">
                    <img src="{{asset('assets/images/about-us/3.jpg')}}" class="img-fluid w-100" alt="">
                </div>
                <div class="col-xl-6 mt-4 mt-xl-0">
                    <div class="pq-section-title pq-style-1 pq-mb-30">
                        <div class="pq-section-sub-title">
                            <span class="left-sep"></span>
                            about us
                            <span class="right-sep"></span>
                        </div>
                        <h5 class="pq-section-main-title">professional lawyer at your complex legal service.</h5>
                        <p class="pq-section-description">We take pride in providing high-quality legal representation and guidance to our clients. Our team consists of experienced and skilled lawyers</p>
                    </div>
                    <div class="pq-icon-box pq-style-2 pq-mb-40">
                        <div class="pq-icon">
                            <i class="flaticon-022-law-book"></i>
                        </div>
                        <div class="pq-icon-box-content">
                            <h5 class="pq-icon-box-title">Free Consultations</h5>
                            <p class="pq-icon-box-description">many lawyers to offer free consultations way to attract potential clients and provide an opportunity</p>
                        </div>
                    </div>
                    <div class="pq-icon-box pq-style-2 pq-mb-45">
                        <div class="pq-icon">
                            <i class="flaticon-007-lawyer"></i>
                        </div>
                        <div class="pq-icon-box-content">
                            <h5 class="pq-icon-box-title">Legal Advice And Counsel</h5>
                            <p class="pq-icon-box-description">The layer conduct extensive reserch on relevant laws regulations and precedents to build</p>
                        </div>
                    </div>
                    <a class="pq-button pq-button-flat" href="about-us.html">
                        <div class="pq-button-block">
                            <span class="pq-button-text">read more</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us -->

    <!-- Service -->
    <section class="service pq-bg-img-4">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="pq-sticky-top">
                        <div class="pq-section-title pq-style-1 pq-mb-30">
                            <div class="pq-section-sub-title">
                                <span class="left-sep"></span>
                                our services
                                <span class="right-sep"></span>
                            </div>
                            <h5 class="pq-section-main-title">my legal Practice Area</h5>
                        </div>
                        <a class="pq-button pq-button-flat" href="our-services.html">
                            <div class="pq-button-block">
                                <span class="pq-button-text">read more</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-8 mt-5 mt-xl-0 pq-service-bg">
                    <div class="row pq-mb-30">
                        <div class="col-lg-6 col-md-6">
                            <div class="pq-service-box pq-style-3">
                                <div class="pq-service-box-media">
                                    <div class="pq-service-icon">
                                        <i class="flaticon-003-courthouse" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="pq-service-box-info">
                                    <h5 class="pq-service-box-title">Trusted Lawyer</h5>
                                    <p class="pq-service-box-description">These are just a few examples of the many categories within the field of law. Each category may have further specializations</p>
                                    <div class="pq-btn-container">
                                        <a class="pq-button pq-button-link" href="insurance-law.html">
                                            <div class="pq-button-block">
                                                <span class="pq-button-text">read more</span>
                                                <i class="pt-flaticon-right-arrow"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mt-4 mt-md-0">
                            <div class="pq-service-box pq-style-3">
                                <div class="pq-service-box-media">
                                    <div class="pq-service-icon">
                                        <i class="flaticon-009-jury" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="pq-service-box-info">
                                    <h5 class="pq-service-box-title">buisness consulting</h5>
                                    <p class="pq-service-box-description">These are just a few examples of the many categories within the field of law. Each category may have further specializations</p>
                                    <div class="pq-btn-container">
                                        <a class="pq-button pq-button-link" href="business-financial.html">
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
                    <div class="row pq-mb-30">
                        <div class="col-lg-6 col-md-6">
                            <div class="pq-service-box pq-style-3">
                                <div class="pq-service-box-media">
                                    <div class="pq-service-icon">
                                        <i class="flaticon-012-judge" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="pq-service-box-info">
                                    <h5 class="pq-service-box-title">Legal Champion</h5>
                                    <p class="pq-service-box-description">These are just a few examples of the many categories within the field of law. Each category may have further specializations</p>
                                    <div class="pq-btn-container">
                                        <a class="pq-button pq-button-link" href="business-financial.html">
                                            <div class="pq-button-block">
                                                <span class="pq-button-text">read more</span>
                                                <i class="pt-flaticon-right-arrow"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mt-4 mt-md-0">
                            <div class="pq-service-box pq-style-3">
                                <div class="pq-service-box-media">
                                    <div class="pq-service-icon">
                                        <i class="flaticon-016-agreement" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="pq-service-box-info">
                                    <h5 class="pq-service-box-title">Dedicated Legalist</h5>
                                    <p class="pq-service-box-description">These are just a few examples of the many categories within the field of law. Each category may have further specializations</p>
                                    <div class="pq-btn-container">
                                        <a class="pq-button pq-button-link" href="power-energy-law.html">
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
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="pq-service-box pq-style-3">
                                <div class="pq-service-box-media">
                                    <div class="pq-service-icon">
                                        <i class="flaticon-028-newspaper" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="pq-service-box-info">
                                    <h5 class="pq-service-box-title">Case Analysis</h5>
                                    <p class="pq-service-box-description">These are just a few examples of the many categories within the field of law. Each category may have further specializations</p>
                                    <div class="pq-btn-container">
                                        <a class="pq-button pq-button-link" href="stop-forcloasure-law.html">
                                            <div class="pq-button-block">
                                                <span class="pq-button-text">read more</span>
                                                <i class="pt-flaticon-right-arrow"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mt-4 mt-md-0">
                            <div class="pq-service-box pq-style-3">
                                <div class="pq-service-box-media">
                                    <div class="pq-service-icon">
                                        <i class="flaticon-030-advice" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="pq-service-box-info">
                                    <h5 class="pq-service-box-title">Discovery Caller</h5>
                                    <p class="pq-service-box-description">These are just a few examples of the many categories within the field of law. Each category may have further specializations</p>
                                    <div class="pq-btn-container">
                                        <a class="pq-button pq-button-link" href="family-law-consult.html">
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
        </div>
    </section>
    <!-- Service -->

    <!-- Testimonial -->
    <section class="testimonial pq-bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="pq-section-title pq-style-1 pq-mb-45">
                        <div class="pq-section-sub-title">
                            <span class="left-sep"></span>
                            our testimonials
                            <span class="right-sep"></span>
                        </div>
                        <h5 class="pq-section-main-title">our streamlined legal process of success</h5>
                    </div>
                    <a class="pq-button pq-button-flat" href="our-team.html">
                        <div class="pq-button-block">
                            <span class="pq-button-text">read more</span>
                        </div>
                    </a>
                </div>
                <div class="col-xl-7 mt-5 mt-xl-0 pq-border-left pq-ps-60">
                    <div class="pq-testimonial-box-slider pq-style-2">
                        <div class="owl-carousel owl-loaded owl-drag" data-dots="false" data-nav="true" data-desk_num="1" data-lap_num="1" data-tab_num="1" data-mob_num="1" data-mob_sm="1" data-autoplay="false" data-loop="true" data-margin="30">
                            <div class="item">
                                <div class="pq-testimonial-box pq-style-2">
                                    <div class="pq-testimonial-info">
                                        <div class="pq-testimonial-quote">
                                            <i class="pt-flaticon-quote"></i>
                                        </div>
                                        <div class="pq-testimonial-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <p class="pq-testimonial-description">Law is a system of rules and guidelines created
                                            and enforced by governmen tal or social institutions to regulate behavior within a
                                            society. Its primaryed purpose is to maintain order, resolve disputes, and protect
                                            individuals and their rights. Laws can be enacted at various levels.</p>
                                        <div class="pq-testimonial-meta">
                                            <h5 class="pq-testmonial-title">John m.alexon</h5>
                                            <span>Civil Lawyer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pq-testimonial-box pq-style-2">
                                    <div class="pq-testimonial-info">
                                        <div class="pq-testimonial-quote">
                                            <i class="pt-flaticon-quote"></i>
                                        </div>
                                        <div class="pq-testimonial-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <p class="pq-testimonial-description">Law is a system of rules and guidelines created
                                            and enforced by governmen tal or social institutions to regulate behavior within a
                                            society. Its primaryed purpose is to maintain order, resolve disputes, and protect
                                            individuals and their rights. Laws can be enacted at various levels.</p>
                                        <div class="pq-testimonial-meta">
                                            <h5 class="pq-testmonial-title"> Micheal Baker</h5>
                                            <span>Co-Founder</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pq-testimonial-box pq-style-2">
                                    <div class="pq-testimonial-info">
                                        <div class="pq-testimonial-quote">
                                            <i class="pt-flaticon-quote"></i>
                                        </div>
                                        <div class="pq-testimonial-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <p class="pq-testimonial-description">Law is a system of rules and guidelines created
                                            and enforced by governmen tal or social institutions to regulate behavior within a
                                            society. Its primaryed purpose is to maintain order, resolve disputes, and protect
                                            individuals and their rights. Laws can be enacted at various levels.</p>
                                        <div class="pq-testimonial-meta">
                                            <h5 class="pq-testmonial-title">Joseph Thomas </h5>
                                            <span>Criminal lawyer</span>
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

    <!-- Faq -->
    <section class="faq pq-bg-dark pq-bg-img-3 py-xl-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="pq-faq-img-overflow">
                        <img src="{{asset('assets/images/faq/1.jpg')}}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-xl-6 mt-4 mt-xl-0 pq-ps-60">
                    <div class="pq-section-title pq-style-1 pq-mb-30">
                        <div class="pq-section-sub-title">
                            <span class="left-sep"></span>
                            faq
                            <span class="right-sep"></span>
                        </div>
                        <h5 class="pq-section-main-title">frequently asked question for clients?</h5>
                    </div>
                    <div class="pq-accordion-block ">
                        <div class="pq-accordion-box pq-active 1">
                            <div class="pq-ad-title">
                                <h4 class="ad-title-text">
                                    What is the role of a lawyer legal case?
                                    <i aria-hidden="true" class="ion ion-plus active"></i>
                                    <i aria-hidden="true" class="ion ion-minus-round inactive"></i>
                                </h4>
                            </div>
                            <div class="pq-accordion-details">
                                <p class="pq-detail-text"> Once you have agreed upon a suitable date and time, confirm the consu ltation appointment. Make sure to note down any instructions or down preparations provided by the lawyer</p>
                            </div>
                        </div>
                        <div class="pq-accordion-box   2">
                            <div class="pq-ad-title">
                                <h4 class="ad-title-text">
                                    how do i schedule consultation ?
                                    <i aria-hidden="true" class="ion ion-plus active"></i>
                                    <i aria-hidden="true" class="ion ion-minus-round inactive"></i>
                                </h4>
                            </div>
                            <div class="pq-accordion-details">
                                <p class="pq-detail-text"> Once you have agreed upon a suitable date and time, confirm the consu ltation appointment. Make sure to note down any instructions or down preparations provided by the lawyer</p>
                            </div>
                        </div>
                        <div class="pq-accordion-box   3">
                            <div class="pq-ad-title">
                                <h4 class="ad-title-text">
                                    What is the purpose of a contract?
                                    <i aria-hidden="true" class="ion ion-plus active"></i>
                                    <i aria-hidden="true" class="ion ion-minus-round inactive"></i>
                                </h4>
                            </div>
                            <div class="pq-accordion-details">
                                <p class="pq-detail-text"> Once you have agreed upon a suitable date and time, confirm the consu ltation appointment. Make sure to note down any instructions or down preparations provided by the lawyer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faq -->

    <!-- Pricing Plan -->
    <section class="pricing-plan">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <div class="pq-section-title pq-style-1 text-center">
                        <div class="pq-section-sub-title">
                            <span class="left-sep"></span>
                            pricing plans
                            <span class="right-sep"></span>
                        </div>
                        <h5 class="pq-section-main-title">a passion for justice the experience for win</h5>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="pq-pricing-plan pq-style-2">
                        <span class="pq-pricing-plan-lable">Most Popular</span>
                        <h5 class="pq-pricing-title">basic</h5>
                        <div class="pq-price">
                            <span class="pq-amount">$16</span>
                            <span class="price-month">/ per month</span>
                        </div>
                        <ul class="pq-list-info">
                            <li class="">
                                <span>Free Consultation</span>
                            </li>
                            <li class="">
                                <span>Legal Advice And Guidence</span>
                            </li>
                            <li class="">
                                <span>Negotiation And Setlment</span>
                            </li>
                            <li class="">
                                <span>Negotiation And Setlment</span>
                            </li>
                            <li class="">
                                <span>Implementation Services</span>
                            </li>
                            <li class="">
                                <span>Case Evolution</span>
                            </li>
                        </ul>
                        <div class="pq-btn-container">
                            <a class="pq-button pq-button-flat" href="contact-us.html">
                                <div class="pq-button-block">
                                    <span class="pq-button-text">buy now</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mt-4 mt-md-0">
                    <div class="pq-pricing-plan pq-style-2  active">
                        <span class="pq-pricing-plan-lable">Most Popular</span>
                        <h5 class="pq-pricing-title">standard</h5>
                        <div class="pq-price">
                            <span class="pq-amount">$20</span>
                            <span class="price-month">/ per month</span>
                        </div>
                        <ul class="pq-list-info">
                            <li class="">
                                <span>Free Consultation</span>
                            </li>
                            <li class="">
                                <span>Legal Advice And Guidence</span>
                            </li>
                            <li class="">
                                <span>Legal Advice And Guidence</span>
                            </li>
                            <li class="">
                                <span>Legal Advice And Guidence</span>
                            </li>
                            <li class="">
                                <span>Negotiation And Setlment</span>
                            </li>
                            <li class="">
                                <span>Implementation Services</span>
                            </li>
                            <li class="">
                                <span>Case Evolution</span>
                            </li>
                        </ul>
                        <div class="pq-btn-container">
                            <a class="pq-button pq-button-flat" href="our-process.html">
                                <div class="pq-button-block">
                                    <span class="pq-button-text">buy now</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mt-4 mt-xl-0">
                    <div class="pq-pricing-plan pq-style-2">
                        <span class="pq-pricing-plan-lable">most popular</span>
                        <h5 class="pq-pricing-title">Advance</h5>
                        <div class="pq-price">
                            <span class="pq-amount">$30</span>
                            <span class="price-month">/ per month</span>
                        </div>
                        <ul class="pq-list-info">
                            <li class="">
                                <span>Free Consultation</span>
                            </li>
                            <li class="">
                                <span>Legal Advice And Guidence</span>
                            </li>
                            <li class="">
                                <span>Legal Advice And Guidence</span>
                            </li>
                            <li class="">
                                <span>Negotiation And Setlment</span>
                            </li>
                            <li class="">
                                <span>Implementation Services</span>
                            </li>
                            <li class="">
                                <span>Case Evolution</span>
                            </li>
                        </ul>
                        <div class="pq-btn-container">
                            <a class="pq-button pq-button-flat" href="contact-us.html">
                                <div class="pq-button-block">
                                    <span class="pq-button-text">buy now</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Plan -->

@endsection
