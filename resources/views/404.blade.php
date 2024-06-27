
@extends('layout.app')

@section('content')

<!-- Breadcrumb -->
<div class="pq-breadcrumb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <div class="pq-breadcrumb-title">
                            <h1>Page Not Found</h1>
                        </div>
                        <div class="pq-breadcrumb-container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index-2.html"><i class="fas fa-home mr-2"></i>Home</a>
                                </li>
                                <li class="breadcrumb-item active">Error 404</li>
                            </ol>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- BreadCrumb -->

    <!-- Page Not Found -->
    <section class="page-not-found">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="pq-error-block">
                        <div class="pq-error-text">404</div>
                        <h2>Oops! This Page is Not Found.</h2>
                        <p>Please go back to home and try to find out once again.</p>
                        <div class="pq-btn-block">
                            <div class="pq-btn-container">
                                <a href="index-2.html" class="pq-button">
                                    <div class="pq-button-block">
                                        <span class="pq-button-text">Back to Home</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Not Found -->
@endsection
