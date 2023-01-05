@extends('layouts.app')
@section('content')
<!-- Hero Start -->
<section class="bg-half-170 d-table w-100">
    <div class="container">
        <div class="row mt-5 align-items-center">
            <div class="col-lg-7 col-md-7">
                <div class="title-heading me-lg-4">
                    <h1 class="heading mb-3">
                        Is the news you are reading <span class="text-warning">authentic</span> ?
                    </h1>
                    Welcome to The Run Am Mobile App. You can verify and fact-check any news or information before you share such with other people via Word-Of-Mouth or Social Media.
                    </p>
                    <div class="mt-4">
{{--                        <a href="{{ route('login') }}" class="btn btn-secondary mt-3 me-3"><i class="uil uil-envelope"></i> Get Started</a>--}}
                        <a href="javascript:void(0)" class="btn btn-outline-warning mt-3"><i class="uil uil-google-play"></i> Play Store</a>
                        <a href="javascript:void(0)" class="btn btn-warning mt-3 me-3"><i class="uil uil-apple"></i> App Store</a>

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
                    <h4 class="title mb-4">Verified News/Information Only!</h4>
                    <p class="text-muted para-desc mb-0 mx-auto">Fact-check images you find before <span class="text-warning fw-bold">sharing</span>  them with your friends, contacts, and the public. Please share only verified news or info!
                        With Run Am, you will never go wrong.
                    </p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6 mt-4 pt-2">
                <img src="{{ asset('assets/images/svg/share.svg') }}" alt="">
            </div><!--end col-->

            <div class="col-lg-7 col-md-6 mt-4 pt-2">
                <div class="section-title ms-lg-5">
                    <h4 class="title mb-4">Why Run Am?
                    </h4>
                    <p class="text-muted">Run Am Mobile App was built to achieve the following:</p>
                    <ul class="list-unstyled text-muted">
                        <li class="mb-1"><span class="text-warning h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Dissemination and propagation of fact-based and authentic news in the mainstream media and all social media platforms and enshrine investigative and responsible journalism. </li>
                        <li class="mb-1"><span class="text-warning h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Activation of citizen agencies for change to act towards accountability and punish corruption through the electoral process.</li>
                        <li class="mb-1"><span class="text-warning h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Generation of a critical mass of citizens active engagement with issues of accountability and anti-corruption in the context of the elections.
                        </li>
                    </ul>
{{--                    <a href="javascript:void(0)" class="mt-3 h6 text-warning">Find Out More <i class="uil uil-angle-right-b align-middle"></i></a>--}}
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-6 order-2 order-md-1 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="section-title">
                    <h4 class="title mb-4"><span class="text-warning">Run Am </span> Mobile App has a number of distinct features that you should  <span class="text-warning">explore</span>:</h4>
                    <p class="text-muted">Let us guide your conversations with verifiable points.</p>
                    <ul class="list-unstyled text-muted">
                        <li class="mb-1"><span class="text-warning h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>News and News Source Verification</li>
                        <li class="mb-1"><span class="text-warning h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Photo/Image Verification</li>
                        <li class="mb-1"><span class="text-warning h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Voters Education</li>
                        <li class="mb-1"><span class="text-warning h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>News Source Credibility Ranking and Ratings</li>
                    </ul>

                </div>

            </div><!--end col-->

            <div class="col-lg-5 col-md-6 order-1 order-md-2">
                <div class="card rounded border-0 shadow ms-lg-5">
                    <div class="card-body">
                        <img src="assets/images/svg/guide.svg" alt="">

                        <div class="content mt-4 pt-2">
{{--                            <form>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-lg-12">--}}
{{--                                        <div class="mb-3">--}}
{{--                                            <label class="form-label">Name : <span class="text-danger">*</span></label>--}}
{{--                                            <div class="form-icon position-relative">--}}
{{--                                                <i data-feather="user" class="fea icon-sm icons"></i>--}}
{{--                                                <input type="text" class="form-control ps-5" placeholder="Name" name="name" required="">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div><!--end col-->--}}

{{--                                    <div class="col-lg-12">--}}
{{--                                        <div class="mb-3">--}}
{{--                                            <label class="form-label">Email : <span class="text-danger">*</span></label>--}}
{{--                                            <div class="form-icon position-relative">--}}
{{--                                                <i data-feather="mail" class="fea icon-sm icons"></i>--}}
{{--                                                <input type="email" class="form-control ps-5" placeholder="Email" name="email" required="">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div><!--end col-->--}}

{{--                                    <div class="col-lg-12">--}}
{{--                                        <div class="mb-3">--}}
{{--                                            <label class="form-label">Password : <span class="text-danger">*</span></label>--}}
{{--                                            <div class="form-icon position-relative">--}}
{{--                                                <i data-feather="key" class="fea icon-sm icons"></i>--}}
{{--                                                <input type="password" class="form-control ps-5" placeholder="Password" required="">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div><!--end col-->--}}

{{--                                    <div class="col-lg-12 mt-2 mb-0">--}}
{{--                                        <div class="d-grid">--}}
{{--                                            <button class="btn btn-warning">Download</button>--}}
{{--                                        </div>--}}
{{--                                    </div><!--end col-->--}}
{{--                                </div>--}}
{{--                            </form>--}}
                            <div class="mt-4">
                                {{--                        <a href="{{ route('login') }}" class="btn btn-secondary mt-3 me-3"><i class="uil uil-envelope"></i> Get Started</a>--}}
                                <a href="javascript:void(0)" class="btn btn-outline-warning mt-3"><i class="uil uil-google-play"></i> Play Store</a>
                                <a href="javascript:void(0)" class="btn btn-warning mt-3 me-3"><i class="uil uil-apple"></i> App Store</a>

                            </div>
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

        <div class="row my-md-5 pt-md-3 my-4 pt-2 pb-lg-4 justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title">
                    <h4 class="title mb-4">FAQs about <span class="text-warning">Run Am</span></h4>
{{--                    <p class="text-muted para-desc mx-auto">Start working with <span class="text-warning fw-bold">RunAm</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>--}}
                </div>
            </div><!--end col-->
        </div><!--end row-->
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="d-flex">
                    <i data-feather="help-circle" class="fea icon-ex-md text-warning me-2 mt-1"></i>
                    <div class="flex-1">
                        <h5 class="mt-0">How does the NLP news source verification feature work?</h5>
                        <p class="answer text-muted mb-0">The Natural language processing (NLP) news source verification feature analyzes the content of a news headline input by users and determines whether it comes from a verified or unverified source. The NLP also considers other factors such as the credibility of the platform where the news is coming from to make its prediction.</p>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="d-flex">
                    <i data-feather="help-circle" class="fea icon-ex-md text-warning me-2 mt-1"></i>
                    <div class="flex-1">
                        <h5 class="mt-0"> Can I trust the results of the Image Verification Feature of the <span class="text-warning">Run Am</span>?</h5>
                        <p class="answer text-muted mb-0">The image verification feature uses the Reverse Google Image Search API to check if a particular image has been used in other contexts or for different purposes. While it is not a foolproof method, it can provide assurance that the image is not out of context or misused </p>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-md-6 col-12 mt-4 pt-2">
                <div class="d-flex">
                    <i data-feather="help-circle" class="fea icon-ex-md text-warning me-2 mt-1"></i>
                    <div class="flex-1">
                        <h5 class="mt-0"> Is the voter education information provided on the <span class="text-warning">Run Am</span> reliable and accurate?</h5>
                        <p class="answer text-muted mb-0">The voter education information provided on the Run Am is based on the laws and regulations governing election processes in Nigeria as provided by INEC and aims to educate voters about their civic rights and responsibilities.</p>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-md-6 col-12 mt-4 pt-2">
                <div class="d-flex">
                    <i data-feather="help-circle" class="fea icon-ex-md text-warning me-2 mt-1"></i>
                    <div class="flex-1">
                        <h5 class="mt-0"> Can I report fraudulent activities through the <span class="text-warning">Run Am</span> during the election?</h5>
                        <p class="answer text-muted mb-0">Run Am has provided a mechanism for users to report fraudulent activities relating to elections in Nigeria directly to INEC through its Voter Education feature. You can contact INEC Citizens Contact Center (ICCC) Hotlines - GLO – 09050858629, 09050858675, 09050858649 or Etisalat – 08180958715, 08180958717, 08180958709 or Airtel – 09025038466, 07086945927, 08120183063 or MTN – 07062896047, 08105119010, 08146697603. Following the appropriate channels, you could report election fraud like voting irregularities, intimidation, or other forms of misconduct to INEC authorities.
                        </p>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-md-6 col-12 mt-4 pt-2">
                <div class="d-flex">
                    <i data-feather="help-circle" class="fea icon-ex-md text-warning me-2 mt-1"></i>
                    <div class="flex-1">
                        <h5 class="mt-0"> Will the Run Am App notify me of important updates or changes in the election process?</h5>
                        <p class="answer text-muted mb-0">Yes, Run Am offers notification features or updates on important changes or developments in the election process. This includes reminders about key dates or other important information.
                        </p>
                    </div>
                </div>
            </div><!--end col-->


            <div class="col-md-6 col-12 mt-4 pt-2">
                <div class="d-flex">
                    <i data-feather="help-circle" class="fea icon-ex-md text-warning me-2 mt-1"></i>
                    <div class="flex-1">
                        <h5 class="mt-0"> How can I access the different features of <span class="text-warning">Run Am</span>?</h5>
                        <p class="answer text-muted mb-0">To access the different features of Run Am, you need to navigate the main menu or home screen of the App. You will find options to allow you access to various features, such as the news source verification tool, the image verification tool, or the voter education resources. Alternatively, you may be able to access these features through a search function or by using a tabbed interface.

                        </p>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-md-6 col-12 mt-4 pt-2">
                <div class="d-flex">
                    <i data-feather="help-circle" class="fea icon-ex-md text-warning me-2 mt-1"></i>
                    <div class="flex-1">
                        <h5 class="mt-0">Does the Run Am also verify international political news?</h5>
                        <p class="answer text-muted mb-0">The Run Am App only verifies Nigerian political news based on the 2023 general elections and governance. Depending on several factors, we may decide to scale the features, offerings and coverage nationalities of the App as time unfolds.</p>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-md-6 col-12 mt-4 pt-2">
                <div class="d-flex">
                    <i data-feather="help-circle" class="fea icon-ex-md text-warning me-2 mt-1"></i>
                    <div class="flex-1">
                        <h5 class="mt-0">Can I share information from Run Am with others Apps or platforms?</h5>
                        <p class="answer text-muted mb-0">Run Am offers a variety of tools and resources to help you share information with others. It includes social media integration and the ability to generate a link that you can send to others. You’re also able to copy and paste text from the App to share them through other channels.</p>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-md-6 col-12 mt-4 pt-2">
                <div class="d-flex">
                    <i data-feather="help-circle" class="fea icon-ex-md text-warning me-2 mt-1"></i>
                    <div class="flex-1">
                        <h5 class="mt-0">Is there a tutorial or guide available to help me use the Run Am effectively?</h5>
                        <p class="answer text-muted mb-0">Yes Please, while the Mobile App interface is very easy to use, you can download the “How to use the Run-Am Mobile App” Guide from the Menu Bar.</p>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-md-6 col-12 mt-4 pt-2">
                <div class="d-flex">
                    <i data-feather="help-circle" class="fea icon-ex-md text-warning me-2 mt-1"></i>
                    <div class="flex-1">
                        <h5 class="mt-0">Will the Run Am Mobile App still exist beyond the 2023 Elections?</h5>
                        <p class="answer text-muted mb-0">While the current version of the Run Am has been designed for prototyping and use for the 2023 General elections, the App will still be in use afterward and will be updated and upgraded for future elections with its current features in addition to relevant news on governance, accountability of public office holders, civic rights education etc. in Nigeria.
                        </p>
                    </div>
                </div>
            </div><!--end col-->

        </div><!--end row-->

        <div class="row my-md-5 pt-md-3 my-4 pt-2 pb-lg-4 justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title">
                    <h4 class="title mb-4">Have Question ? Get in touch!</h4>
{{--                    <p class="text-muted para-desc mx-auto">Start working with <span class="text-warning fw-bold">RunAm</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>--}}
                    <a href="https://risenetworks.org/contact-us/" class="btn btn-warning mt-4"><i class="uil uil-phone"></i> Contact us</a>
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

