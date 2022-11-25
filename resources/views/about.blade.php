@extends('layouts.app')

@section('content')
    <section class="bg-half-170 bg-soft-warning d-table w-100 " style="background-image: url('{{ asset('assets/images/job/bg.png') }}');">
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="pages-heading">
                        <h4 class="title text-white title-dark mb-0"> About us</h4>
                    </div>
                </div>  <!--end col-->
            </div><!--end row-->

            <div class="position-breadcrumb">
                <nav aria-label="breadcrumb" class="d-inline-block">
                    <ul class="breadcrumb rounded shadow mb-0 px-4 py-2">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Run-Am</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About us</li>
                    </ul>
                </nav>
            </div>
        </div> <!--end container-->
    </section><!--end section-->
    <!-- Hero End -->

    <!-- Shape Start -->
    <div class="position-relative">
        <div class="shape overflow-hidden text-color-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!--Shape End-->
    <!-- Start -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center" id="counter">
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/job/resume-folder.svg') }}" class="img-fluid" alt="">
                </div><!--end col-->

                <div class="col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="ms-lg-4">
{{--                        <div class="d-flex mb-4">--}}
{{--                            <span class="text-primary h1 mb-0"><span class="counter-value display-1 fw-bold" data-target="15">0</span>+</span>--}}
{{--                            <span class="h6 align-self-end ms-2">Years <br> Experience</span>--}}
{{--                        </div>--}}
                        <div class="section-title">
                            <h4 class="title mb-4">
                                Why we built Run-Am
                            </h4>
                            <p class="text-muted">Start working with <span class="text-warning fw-bold">Fake news</span> is a widespread problem in Nigeria, and it is vital that we make sure that we are informed in our society. According to a study from Pierce College, there were over 8.7 million users engaging with fake news on Facebook alone. In the backdrop of the coming general election in 2023 in the country, it is important to ensure that readers know what information is true or not. The application, News Source Verification feature of Run-Am, helps to filter whether the news headline is from verified and unverified sources and informs the users on what news items are verified or not. The Run-Am application is built with the Artificial Intelligence methodology of Natural Language Processing!</p>
                            <a href="https://risenetworks.org" class="btn btn-warning mt-3" target="_blank">Contact us</a>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
@endsection
