@extends('layouts.app')

@section('content')
    <section class="bg-half-170 bg-soft-warning d-table w-100 " style="background-image: url('{{ asset('assets/images/job/bg.png') }}');">
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="pages-heading">
                        <h4 class="title text-white title-dark mb-0"> About</h4>
                    </div>
                </div>  <!--end col-->
            </div><!--end row-->

            <div class="position-breadcrumb">
                <nav aria-label="breadcrumb" class="d-inline-block">
                    <ul class="breadcrumb rounded shadow mb-0 px-4 py-2">
                        <li class="breadcrumb-item" aria-current="page">About Run Am</li>

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
                            <p class="text-muted"><span class="text-warning fw-bold">Run Am </span> is the Nigerian Pidgin word that captures the intention to verify or fact-check news source to be sure it is valid and authentic. Not news intended to disrupt society or cause panic or mayhem.
                                <span class="text-warning fw-bold">Run Am </span> is an AI-enabled real-time news authentication and verification application for data-driven and investigative journalism to mobilize and catalyze citizens' action to tackle corruption and other related practices. For accountable elections and governance in Nigeria.
                                <span class="text-warning fw-bold"> The Run Am App </span> has an inbuilt algorithm to verify information in circulation about the electoral processes, politics, and governance to promote Electoral accountability and Checkmating fraud or corrupt practices.
                                </p>
                            <a href="https://risenetworks.org/contact-us/" class="btn btn-warning mt-3" target="_blank">Contact us</a>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section>
    <div class="row my-md-5 pt-md-3 my-4 pt-2 pb-lg-4 justify-content-center">
    </div>

{{--        <div class="position-relative">--}}
{{--            <div class="shape overflow-hidden text-footer">--}}
{{--                <svg viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                    <path d="M720 125L2160 0H2880V250H0V125H720Z" fill="currentColor"></path>--}}
{{--                </svg>--}}
{{--            </div>--}}
{{--        </div>--}}
@endsection
