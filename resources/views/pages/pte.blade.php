@extends('layouts.app')
@push('seo')
    <meta name="keyword" content="html,css,XML,java script,meta tags">
        <meta name="keywords" content="PTE, English language, language , english">
        <meta name="keywords" content="meta tags, meta description, meta keywords, SEO, search engine optimization">
        <meta name="description"
       content="PTE Exam is one of the widely taken English language tests across the globe. For countries like Australia, the PTE is also used for">
@endpush()
@section('content')
        <!-- Page title -->
        <div class="page-title parallax parallax1">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-title-heading">
                            <h1 class="title">PTE</h1>
                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="{{URL::to('/')}}">Home</a></li>
                                    <li>PTE</li>
                                </ul>
                            </div>
                        </div><!-- /.page-title-captions -->

                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.page-title -->

        <section class="flat-row pad-bottom60px pad-top85px">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-us pad-top55px">
                            <h2 class="title-about-us">PTE</h2>
                            <div class="desc">
                                <p>
                                    PTE Exam is one of the widely taken English language tests across the globe. For countries like Australia, the PTE is also used for immigration. The test focuses on the day to day usage of the language to prepare and evaluate students to live and study in the English speaking countries
                                </p>
                            </div>
                        </div><!-- /.about-us -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6">
                        <div class="single-image">
                            <img src="{{asset('assets/images/about/about4.png')}}" alt="image">
                        </div><!-- /.about-us-img -->
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>

        <section class="flat-row pad-bottom60px pad-top85px" style="background-color: #eef1f6;">
            <div class="container" style="padding: 200px 25px">
                <div class="row">
                    <div class="col-md-6">
                        <div class="single-image" style="margin: 0">
                            <img src="{{asset('assets/images/about/undraw_adventure_4hum.svg')}}" alt="image">
                        </div><!-- /.about-us-img -->
                    </div><!-- /.col-md-6 -->

                    <div class="col-md-6">
                        <div class="about-us pad-top55px">
                            <h2 class="title-about-us">Let PTE Academic Take You To Australia !</h2>
                            <div style="padding-bottom: 25px;"></div>
                            <div style="padding-bottom: 25px;"></div>
                            <div class="desc" style="text-align: justify;">
                                <p>
                                    PTE (Pearson Test of English) is an English language proficiency test, which is used as an eligibility criterion for admission process in universities all around the world. There are two formats of the PTE:
                                    PTE Academic Test and PTE General Test. Many applicants take PTE test for Australian Immigration process, too.
                                    What differs PTE from other English language proficiency tests, is the scoring methods and the results. PTE declares the results in much smaller time duration than its close competitors that are IELTS and TOEFL. As the scoring done for the PTE tests are computerised, the results are much more accurate and quicker than other tests. This makes PTE test favourite among the students who are in a hurry.
                                    Another advantage of PTE is that the computer-based examination focuses more on everyday English usage rather than high-level, complex English. It has a multi-level grading system, which provides a more accurate assessment of student’s proficiency in the English Language.
                                </p>
                            </div>
                        </div><!-- /.about-us -->
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>

        <section class="flat-row pad-bottom75px">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="flat-accordion">
                            <div class="flat-toggle">
                                <div class="toggle-title active">FEES?</div>
                                <div class="toggle-content">
                                    <p>AUD $399.00</p>
                                </div>
                            </div><!-- /toggle -->
                            <div class="flat-toggle">
                                <div class="toggle-title">DURATION?</div>
                                <div class="toggle-content">
                                    <div class="info">
                                        <p class="desc-info">3 Months</p>
                                    </div>
                                </div>
                            </div><!-- /.toggle -->
                            <div class="flat-toggle">
                                <div class="toggle-title">LOCATION?</div>
                                <div class="toggle-content">
                                    <div class="info">
                                        <p class="desc-info">Australia Office</p>
                                    </div>
                                </div>
                            </div><!-- /.toggle -->

                        </div><!-- /.accordion -->
                    </div><!-- /.col-md-6 -->

                    <div class="col-md-6">
                        <div class="single-image" style="margin: 0">
                            <img src="{{asset('assets/images/about/about4.png')}}" alt="image">
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>

        <section class="flat-row parallax parallax4 bg-black bg-p81">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wrap-contactform-home3">
                            @include('components.contactUs')
                        </div><!-- /.wrap-contactform-home3 -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
@endsection
