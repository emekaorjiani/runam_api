@extends('layouts.app')
@section('content')
<!-- Hero Start -->
<section class="bg-half-170 d-table w-100">
    <div class="container">
        <div class="row mt-5 align-items-center">
            <div class="col-lg-7 col-md-7">
                <div class="title-heading me-lg-4">
                    <h1 class="heading mb-3">
                        Is the news you are reading coming from a <span class="text-warning">verified</span> source?
                    </h1>
                    Hey Bubby! How far? Welcome to Run-Am
                    Mobile App. Here, you can verify and fact
                    check any news or information you are
                    not sure before you share them with others.
                    </p>
                    <div class="mt-4">
                        <a href="{{ route('login') }}" class="btn btn-secondary mt-3 me-3"><i class="uil uil-envelope"></i> Get Started</a>
                        <a href="javascript:void(0)" class="btn btn-warning mt-3 me-3"><i class="uil uil-apple"></i> App Store</a>
                        <a href="javascript:void(0)" class="btn btn-outline-warning mt-3"><i class="uil uil-google-play"></i> Play Store</a>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-5 col-md-5 mt-4 pt-2 mt-sm-0 pt-sm-0">
                <img src="{{ asset('assets/images/svg/search.svg') }}" alt="">
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- Hero End -->

<!-- Partners start -->
{{--<section class="py-4 border-bottom border-top">--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-lg-2 col-md-2 col-6 text-center py-4">--}}
{{--                <img src="assets/images/client/amazon.svg" class="avatar avatar-ex-sm" alt="">--}}
{{--            </div><!--end col-->--}}

{{--            <div class="col-lg-2 col-md-2 col-6 text-center py-4">--}}
{{--                <img src="assets/images/client/google.svg" class="avatar avatar-ex-sm" alt="">--}}
{{--            </div><!--end col-->--}}

{{--            <div class="col-lg-2 col-md-2 col-6 text-center py-4">--}}
{{--                <img src="assets/images/client/lenovo.svg" class="avatar avatar-ex-sm" alt="">--}}
{{--            </div><!--end col-->--}}

{{--            <div class="col-lg-2 col-md-2 col-6 text-center py-4">--}}
{{--                <img src="assets/images/client/paypal.svg" class="avatar avatar-ex-sm" alt="">--}}
{{--            </div><!--end col-->--}}

{{--            <div class="col-lg-2 col-md-2 col-6 text-center py-4">--}}
{{--                <img src="assets/images/client/shopify.svg" class="avatar avatar-ex-sm" alt="">--}}
{{--            </div><!--end col-->--}}

{{--            <div class="col-lg-2 col-md-2 col-6 text-center py-4">--}}
{{--                <img src="assets/images/client/spotify.svg" class="avatar avatar-ex-sm" alt="">--}}
{{--            </div><!--end col-->--}}
{{--        </div><!--end row-->--}}
{{--    </div><!--end container-->--}}
{{--</section><!--end section-->--}}
<!-- Partners End -->

<!-- How It Work Start -->
<section class="section bg-light border-bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4">Verified Only!</h4>
                    <p class="text-muted para-desc mb-0 mx-auto">Please <span class="text-warning fw-bold">share</span>  only verified news or info!
                        Your friends, families and the public will
                        love you for it. </p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6 mt-4 pt-2">
                <img src="{{ asset('assets/images/svg/share.svg') }}" alt="">
            </div><!--end col-->

            <div class="col-lg-7 col-md-6 mt-4 pt-2">
                <div class="section-title ms-lg-5">
                    <h4 class="title mb-4">Lorem ipsum dorem lorem</h4>
                    <p class="text-muted">Lorem ipsum dorem loremLorem ipsum dorem loremLorem ipsum dorem loremLorem ipsum dorem loremLorem ipsum dorem lorem.</p>
                    <ul class="list-unstyled text-muted">
                        <li class="mb-1"><span class="text-warning h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Lorem Ipsum dorem lirum monem kilom</li>
                        <li class="mb-1"><span class="text-warning h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Lorem Ipsum dorem lirum monem kilom</li>
                        <li class="mb-1"><span class="text-warning h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Lorem Ipsum dorem lirum monem kilom</li>
                    </ul>
                    <a href="javascript:void(0)" class="mt-3 h6 text-warning">Find Out More <i class="uil uil-angle-right-b align-middle"></i></a>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-6 order-2 order-md-1 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="section-title">
                    <h4 class="title mb-4">Lorem Ipsum dorem lirum monem kilom<br> Lorem Ipsum <span class="text-warning">RunAm.</span></h4>
                    <p class="text-muted">Let us guide your conversations with verifiable points.</p>
                    <ul class="list-unstyled text-muted">
                        <li class="mb-1"><span class="text-warning h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Lorem Ipsum dorem lirum monem kilom/li>
                        <li class="mb-1"><span class="text-warning h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>OLorem Ipsum dorem lirum monem kilom</li>
                        <li class="mb-1"><span class="text-warning h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Create Lorem Ipsum dorem lirum monem kilom</li>
                    </ul>
                    <a href="javascript:void(0)" class="mt-3 h6 text-warning">Find Out More <i class="uil uil-angle-right-b align-middle"></i></a>
                </div>
            </div><!--end col-->

            <div class="col-lg-5 col-md-6 order-1 order-md-2">
                <div class="card rounded border-0 shadow ms-lg-5">
                    <div class="card-body">
                        <img src="assets/images/svg/guide.svg" alt="">

                        <div class="content mt-4 pt-2">
                            <form>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label">Name : <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                <input type="text" class="form-control ps-5" placeholder="Name" name="name" required="">
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label">Email : <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                <input type="email" class="form-control ps-5" placeholder="Email" name="email" required="">
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label">Password : <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="key" class="fea icon-sm icons"></i>
                                                <input type="password" class="form-control ps-5" placeholder="Password" required="">
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-lg-12 mt-2 mb-0">
                                        <div class="d-grid">
                                            <button class="btn btn-warning">Download</button>
                                        </div>
                                    </div><!--end col-->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- How It Work End -->

<!-- Testimony Start -->
{{--<section class="section pb-0">--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-12 text-center">--}}
{{--                <div class="section-title mb-4 pb-2">--}}
{{--                    <h6>We believe in building each other and hence</h6>--}}
{{--                    <h4 class="title mb-4">Work with some amazing partners</h4>--}}
{{--                    <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary fw-bold">RunAm</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>--}}
{{--                </div>--}}
{{--            </div><!--end col-->--}}
{{--        </div><!--end row-->--}}

{{--        <div class="row">--}}
{{--            <div class="col-12 mt-4">--}}
{{--                <div class="tiny-three-item">--}}
{{--                    <div class="tiny-slide text-center">--}}
{{--                        <div class="client-testi rounded shadow m-2 p-4">--}}
{{--                            <img src="assets/images/client/amazon.svg" class="img-fluid avatar avatar-ex-sm mx-auto" alt="">--}}
{{--                            <p class="text-muted mt-4">" It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. "</p>--}}
{{--                            <h6 class="text-primary">- Thomas Israel</h6>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="tiny-slide text-center">--}}
{{--                        <div class="client-testi rounded shadow m-2 p-4">--}}
{{--                            <img src="assets/images/client/google.svg" class="img-fluid avatar avatar-ex-sm mx-auto" alt="">--}}
{{--                            <p class="text-muted mt-4">" The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. "</p>--}}
{{--                            <h6 class="text-primary">- Carl Oliver</h6>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="tiny-slide text-center">--}}
{{--                        <div class="client-testi rounded shadow m-2 p-4">--}}
{{--                            <img src="assets/images/client/lenovo.svg" class="img-fluid avatar avatar-ex-sm mx-auto" alt="">--}}
{{--                            <p class="text-muted mt-4">" One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others. "</p>--}}
{{--                            <h6 class="text-primary">- Barbara McIntosh</h6>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="tiny-slide text-center">--}}
{{--                        <div class="client-testi rounded shadow m-2 p-4">--}}
{{--                            <img src="assets/images/client/paypal.svg" class="img-fluid avatar avatar-ex-sm mx-auto" alt="">--}}
{{--                            <p class="text-muted mt-4">" Thus, Lorem Ipsum has only limited suitability as a visual filler for German texts. "</p>--}}
{{--                            <h6 class="text-primary">- Jill Webb</h6>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="tiny-slide text-center">--}}
{{--                        <div class="client-testi rounded shadow m-2 p-4">--}}
{{--                            <img src="assets/images/client/shopify.svg" class="img-fluid avatar avatar-ex-sm mx-auto" alt="">--}}
{{--                            <p class="text-muted mt-4">" There is now an abundance of readable dummy texts. These are usually used when a text is required. "</p>--}}
{{--                            <h6 class="text-primary">- Dean Tolle</h6>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="tiny-slide text-center">--}}
{{--                        <div class="client-testi rounded shadow m-2 p-4">--}}
{{--                            <img src="assets/images/client/spotify.svg" class="img-fluid avatar avatar-ex-sm mx-auto" alt="">--}}
{{--                            <p class="text-muted mt-4">" According to most sources, Lorum Ipsum can be traced back to a text composed by Cicero. "</p>--}}
{{--                            <h6 class="text-primary">- Christa Smith</h6>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div><!--end col-->--}}
{{--        </div><!--end row-->--}}
{{--    </div><!--end container-->--}}
{{--</section><!--end section-->--}}
<!-- Testi End -->


<!-- FAQ n Contact Start -->
<section class="section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="d-flex">
                    <i data-feather="help-circle" class="fea icon-ex-md text-warning me-2 mt-1"></i>
                    <div class="flex-1">
                        <h5 class="mt-0">How our <span class="text-warning">RunAm</span> work ?</h5>
                        <p class="answer text-muted mb-0">Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception is tuned to recognize certain patterns and repetitions in texts.</p>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="d-flex">
                    <i data-feather="help-circle" class="fea icon-ex-md text-warning me-2 mt-1"></i>
                    <div class="flex-1">
                        <h5 class="mt-0"> What is the main process open account ?</h5>
                        <p class="answer text-muted mb-0">If the distribution of letters and 'words' is random, the reader will not be distracted from making a neutral judgement on the visual impact</p>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-md-6 col-12 mt-4 pt-2">
                <div class="d-flex">
                    <i data-feather="help-circle" class="fea icon-ex-md text-warning me-2 mt-1"></i>
                    <div class="flex-1">
                        <h5 class="mt-0"> How to make unlimited data entry ?</h5>
                        <p class="answer text-muted mb-0">Furthermore, it is advantageous when the dummy text is relatively realistic so that the layout impression of the final publication is not compromised.</p>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-md-6 col-12 mt-4 pt-2">
                <div class="d-flex">
                    <i data-feather="help-circle" class="fea icon-ex-md text-warning me-2 mt-1"></i>
                    <div class="flex-1">
                        <h5 class="mt-0"> Is <span class="text-warning">RunAm</span> safer to use with my account ?</h5>
                        <p class="answer text-muted mb-0">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. Lorem Ipsum is composed in a pseudo-Latin language which more or less corresponds to 'proper' Latin.</p>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row my-md-5 pt-md-3 my-4 pt-2 pb-lg-4 justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title">
                    <h4 class="title mb-4">Have Question ? Get in touch!</h4>
                    <p class="text-muted para-desc mx-auto">Start working with <span class="text-warning fw-bold">RunAm</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    <a href="page-contact-two.html" class="btn btn-warning mt-4"><i class="uil uil-phone"></i> Contact us</a>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<div class="position-relative">
    <div class="shape overflow-hidden text-footer">
        <svg viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M720 125L2160 0H2880V250H0V125H720Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- FAQ n Contact End -->

@endsection

