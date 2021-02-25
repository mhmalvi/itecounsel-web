@extends('layouts.app')
@push('seo')
    <meta name="keyword" content="html,css,XML,java script,meta tags">
        <meta name="keywords" content="RPL,  skills">
        <meta name="keywords" content="meta tags, meta description, meta keywords, SEO, search engine optimization">
        <meta name="description"
       content="Recognition of Prior Learning (RPL) is an assessment process used by RTOs to evaluate a person’s skills,knowledge and experience">
       <meta tag="keywords" content="recognition of prior learning,rpl,skills,soft skills,interpersonal skills,time management,communication skills,skills for resume,leadership skills,effective communication,life skills,technical skills,skills to put on resume,analytical skills,business acumen,hard skills,customer service skills,problem solving skills,time management skills,21st century skills,average typing speed,transferable skills,management skills,computer skills,job skills,attention to detail,personal skills,organizational skills,key skills,employability skills,soft skills list,professional skills,pbssd,list of skills,analytical thinking,skills for cv,effective communication skills,people skills,interview skills,good communication skills,teamwork skills,soft skills training,soft skills examples,skills examples,work skills,types of skills,writing a cv,special skills,intrapersonal skills,conflict resolution skills,types of communication skills,ksas,high income skills,hard skills for resume,skills to list on resume,7cs of communication,sales skills,skills network,decision making skills,basic computer skills,time management techniques,interpersonal skills examples,job skills list,research skills,executive presence,time management strategies,people management skills,good skills to put on a resume,skills and abilities,learning skills,administrative skills,skill matrix,key competencies,nursing skills,technical skills examples,analytical ability,commercial awareness,good communication,resume skills examples,entrepreneurial skills,good typing speed,good skills for resume,technical skills for resume,practical skills,hard skills list,communication in the workplace,technical knowledge,social work skills,key skills for cv,my skills,types of skills list,average wpm typing,communication skills training,interpersonal communication skills,skill training,hard skills examples,piaac">
@endpush()
@section('content')
        <!-- Page title -->
        <div class="page-title parallax parallax1">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-title-heading">
                            <h1 class="title">Recognition of Prior Learning</h1>
                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="{{URL::to('/')}}">Home</a></li>
                                    <li>RPL</li>
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
                    <div class="col-md-6" style="padding: 15px 25px;">
                        <div class="about-us pad-top55px">
                            <h2 class="title-about-us">WHAT IS RPL?</h2>
                            <div class="desc" style="text-align: justify;">
                                <p>
                                    Recognition of Prior Learning (RPL) is an assessment process used by RTOs to evaluate a person’s skills, knowledge and experience gained through working and learning, in Australia or overseas, be it through life experience, work or other activities such as volunteering. RTOs can also provide a credit against units of competency, often shortening the time needed to undertake a qualification.
                                </p>
                            </div>

                            <div style="display: flex; justify-content: center;">
                                                            <button type="button" style="padding: 20px 50px;" data-toggle="modal" data-target="#eligibility">Elegibility</button>
                            </div>
                        </div><!-- /.about-us -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6" style="padding: 15px 0px;">
                        <div class="single-image">
                            <img src="{{asset('assets/images/about/undraw_analyze_17kw.svg')}}" alt="image">
                        </div><!-- /.about-us-img -->
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>

        <section class="flat-row pad-bottom60px pad-top85px" style="background-color: #eef1f6;">
            <div class="container">
                <div style="padding: 15px 0 100px 0;">
                    <h2 class="title-about-us" style="text-align: center;">Four easy steps to get qualified!</h2>
                </div>
                <div class="row pad-bottom60px">
                    <div class="col-md-6">
                        <div class="flat-accordion">
                            <div class="flat-toggle">
                                <div class="toggle-title active"> <i class="fa fa-certificate" aria-hidden="true"></i> &nbsp; FREE SKILLS ASSESSMENT</div>
                                <div class="toggle-content">
                                    <span>A free, no obligation, RPL skills check provided by an experienced ITEC representative</span>
                                </div>
                            </div><!-- /toggle -->
                            <div class="flat-toggle">
                                <div class="toggle-title"> <i class="fa fa-certificate" aria-hidden="true"></i> &nbsp; EVIDENCE PORTFOLIO</div>
                                <div class="toggle-content">
                                    <div class="info">
                                        <span>Compiling and submitting your 'Experience Portfolio' to provide relevant documentation such as photos and videos of you on the job, references, previous qualifications, current resume etc.</span>
                                    </div>
                                </div>
                            </div><!-- /.toggle -->
                            <div class="flat-toggle">
                                <div class="toggle-title"> <i class="fa fa-certificate" aria-hidden="true"></i> &nbsp; SKILLS CHECK</div>
                                <div class="toggle-content">
                                    <div class="info">
                                        <span>A qualified assessor, from one of our partnering RTOs, will review the evidence and determine if you are competent in the units for that qualification via an RPL assessment</span>
                                    </div>
                                </div>
                            </div><!-- /.toggle -->
                            <div class="flat-toggle">
                                <div class="toggle-title"> <i class="fa fa-certificate" aria-hidden="true"></i> &nbsp; QUALIFIED!</div>
                                <div class="toggle-content">
                                    <div class="info">
                                        <span>If the RTO assesses you as competent in all required units of competency, then a qualification will be awarded by the registered training organisation</span>
                                    </div>
                                </div>
                            </div><!-- /.toggle -->

                        </div><!-- /.accordion -->
                    </div><!-- /.col-md-6 -->

                    <div class="col-md-6">
                        <div class="single-image" style="margin: 0">
                            <img src="{{asset('assets/images/about/undraw_stepping_up_g6oo.svg')}}" alt="image">
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
