
@extends('layout.app')

@section('content')

<!-- Breadcrumb -->
<div class="pq-breadcrumb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <div class="pq-breadcrumb-title">
                            <h1>Team Single</h1>
                        </div>
                        <div class="pq-breadcrumb-container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index-2.html"><i class="fas fa-home mr-2"></i>Home</a>
                                </li>
                                <li class="breadcrumb-item active">Team Single</li>
                            </ol>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- BreadCrumb -->

    <!-- Team Single -->
    <section class="team-single">
        <div class="container">
            <div class="row pq-mb-45">
                <div class="col-xl-4 p-xl-0">
                    <img src="{{asset('assets/images/team-single/1.png')}}" class="img-fluid w-100" alt="">
                </div>
                <div class="col-xl-8 mt-4 mt-xl-0 ps-xl-5">
                    <div class="pq-section-title pq-style-1 pq-mb-20">
                        <div class="pq-section-sub-title">
                            <span class="left-sep"></span>
                            FAMILY LAYER
                            <span class="right-sep"></span>
                        </div>
                        <h5 class="pq-section-main-title">Joseph Thomas</h5>
                        <p class="pq-section-description">Law is a system of rules and guidelines established by a governing authority to
                            regulate the behavior of individuals and groups within a society. It plays a In addition to domestic laws
                            fundamental role in maintaining order, resolving disputes, protecting individual rights, and ensuring justice.
                        </p>
                    </div>
                    <p>Legislation Laws are often enacted through the legislative process by elected representatives or designated bodies. These laws are written and codified to provide.</p>
                    <ul class="pq-contact-list pq-mb-30">
                        <li>
                            <i class="ion ion-ios-telephone"></i>
                            <span>+1-234-2346</span>
                        </li>
                        <li>
                            <i class="ion ion-ios-email"></i>
                            <span>Info@Peacefulthemes.Com</span>
                        </li>
                        <li>
                            <i class="ion ion-link"></i>
                            <span>Peacefulqode.Com</span>
                        </li>
                    </ul>
                    <h5>Follow Me:</h5>
                    <div class="pq-team-sinlge-social mt-3">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="#">
                            <i class="ion ion-social-instagram"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="mb-2">Personal Experience</h2>
                    <p>It is essential for individuals to be aware of the laws that apply to them and to respect the legal system to ensure a just and orderly society. Ignorance of the law is generally not considered a valid defense if one is accused of violating it. Legal systems aim to strike a balance between maintaining public order and safeguarding individual rights and freedoms.Over time, laws may be amended or revised to address changing societal needs or to correct any shortcomings.</p>
                    <p class="pq-mb-60">Categories of Law Law can be categorized into various fields, such as criminal law, civil law, contract law, family law, constitutional law, property law, administrative law, and more. Each field addresses specific issues and types of disputes.Enforcement Laws are enforced by the government through law enforcement agencies, courts, and other judicial bodies. Violations of the law can lead to penalties, fines, imprisonment, or other forms of punishment.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 pe-xl-5">
                    <h2>Expertise & Skills</h2>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <div class="pq-progressbar-box pq-progressbar-style-1">
                        <div class="pq-progressbar-content">
                            <span class="progress-title">PROJCET COMPLETED</span>
                            <span class="progress-value">60%</span>
                            <div class="pq-progress-bar">
                                <span data-width="60" class="show-progress"></span>
                            </div>
                        </div>
                        <div class="pq-progressbar-content">
                            <span class="progress-title">YEARS IN BUSINESS</span>
                            <span class="progress-value">80%</span>
                            <div class="pq-progress-bar">
                                <span data-width="80" class="show-progress"></span>
                            </div>
                        </div>
                        <div class="pq-progressbar-content">
                            <span class="progress-title">Happy clients</span>
                            <span class="progress-value">90%</span>
                            <div class="pq-progress-bar">
                                <span data-width="90" class="show-progress"></span>
                            </div>
                        </div>
                    </div>
                    <h2 class="mb-2">Education</h2>
                    <p class="mb-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
                <div class="col-xl-6 mt-4 mt-xl-0">
                    <div class="pq-section-title pq-style-1 pq-mb-30">
                        <div class="pq-section-sub-title">
                            <span class="left-sep"></span>
                            GET IN TOUCH
                            <span class="right-sep"></span>
                        </div>
                        <h5 class="pq-section-main-title">Contact me</h5>
                    </div>
                    <form class="pq-form">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <input type="text" placeholder="Name">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input type="email" placeholder="Email">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input type="text" placeholder="Phone Number">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input type="text" placeholder="Your Subject">
                            </div>
                            <div class="col-lg-12">
                                <textarea id="message" cols="40" rows="10" placeholder="Message.."></textarea>
                            </div>
                            <div class="col-lg-12">
                                <a href="#" class="pq-button pq-button-flat">submit message</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Single -->

@endsection
