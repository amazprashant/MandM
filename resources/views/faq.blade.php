
@extends('layout.app')

@section('content')

 <!-- Breadcrumb -->
 <div class="pq-breadcrumb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <div class="pq-breadcrumb-title">
                            <h1>Faqs</h1>
                        </div>
                        <div class="pq-breadcrumb-container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index-2.html"><i class="fas fa-home mr-2"></i>Home</a>
                                </li>
                                <li class="breadcrumb-item active">Faqs</li>
                            </ol>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- BreadCrumb -->

    <!-- Faq -->
    <section class="faq">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <img src="{{asset('assets/images/faq/2.jpg')}}" class="img-fluid w-100" alt="">
                </div>
                <div class="col-xl-6 mt-4 mt-xl-0 pq-grey-bg">
                    <div class="pq-accordion-block">
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
                                    Protecting rights Laws protect individual?
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
                                    Enforcing contracts test Law ensures?
                                    <i aria-hidden="true" class="ion ion-plus active"></i>
                                    <i aria-hidden="true" class="ion ion-minus-round inactive"></i>
                                </h4>
                            </div>
                            <div class="pq-accordion-details">
                                <p class="pq-detail-text"> Once you have agreed upon a suitable date and time, confirm the consu ltation appointment. Make sure to note down any instructions or down preparations provided by the lawyer</p>
                            </div>
                        </div>
                        <div class="pq-accordion-box   4">
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
                        <div class="pq-accordion-box   5">
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faq -->

@endsection
