@extends('layouts.app')
@push('seo')
    <meta name="keyword" content="html,css,XML,java script,meta tags">
        <meta name="keywords" content="IELTS, Language Testing System, speaking, writing, reading, and listening, exam">
        <meta name="keywords" content="meta tags, meta description, meta keywords, SEO, search engine optimization">
        <meta name="description" 
       content="IELTS full form stands for the International English Language Testing System.It is an English language ability exam,which evaluates">
       <meta tag="keywords" content="ielts, language testing system,speaking,writing,reading
and listening,exam,fce,toefl,ssc result 2019,gre,essay,cursive letters,psc result 2018,hsc result 2019,gmat,ssc result,thesis statement,ielts exa,cursive writing,jlpt,formal letter,spoken english,letter writing,ssc online,psc result,english speaking,report writingcopywriter,argumentative essay,essay writing,essay typer,gre test,writing prompts,toefl ibtpersonal statement,informal letter,examination,hsc result,ielts result,ssc board result 2019,ntse,english conversation,creative writing,ets gre,dele,usmle,ielts test,gre exam,english speaking course,edexcel past papers,research proposal,bihar school examination board,ssc result 2019 online,storywriting,sat practice test,business letter,toefl test,ghostwriter,exam result,sat exam,sat registration,ssc result 2018,sat test,pte study,ielts speaking,paragraph writing,ielts writing task 2,mock test,expository,cfa level 1,ielts online test,madhyamik result,article writing,narrative essay,ielts writing task 1,past papers,diary entry,gmat exam,question paper,ssc exam,jnu admission,ets toefl,deled result,content writing,ielts listening,12 hsc result 2019,business proposal,ielts preparation,ssc exam 2019,persuasive essay,academic writing,email writing,toeic test,toefl exam,ielts registration,12th board exam 2019">
@endpush()
@section('content')
        <!-- Page title -->
        <div class="page-title parallax parallax1">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">                    
                        <div class="page-title-heading">
                            <h1 class="title">IELTS</h1>
                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="{{URL::to('/')}}">Home</a></li>
                                    <li>IELTS</li>
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
                            <h2 class="title-about-us">What is IELTS ?</h2>
                            <div class="desc">
                                <p>
                                    IELTS full form stands for the International English Language Testing System. It is an English language ability exam, which evaluates a candidate’s ability to converse in the English language across all four essential modules: speaking, writing, reading, and listening.
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
                            <img src="{{asset('assets/images/about/undraw_travel_plans_li01.svg')}}" alt="image">
                        </div><!-- /.about-us-img -->                        
                    </div><!-- /.col-md-6 -->

                    <div class="col-md-6">
                        <div class="about-us pad-top55px">
                            <h2 class="title-about-us">Let IELTS Take You To The Another Lavel!</h2>
                            <div style="padding-bottom: 25px;"></div>
                            <div style="padding-bottom: 25px;"></div>
                            <div class="desc" style="text-align: justify;">
                                <p>Numerous students who have prepared for or appeared for the TOEFL are surprised when they confront difficulties understanding accents and expressions used by British speakers in the IELTS. This is why a thorough IELTS Exam preparation, via self-study or a language school that covers the IELTS course, is required to succeed in the IELTS test.</p>
                                <p>Test-takers must know beforehand, which module is required for their purposes, as the scores are not interchangeable. Each test has a duration of two hours and forty-five minutes. Test-takers are required to pay IELTS fees for administration of the exam.</p>
                                <p>Broadly speaking, IELTS is taken by individuals who wish to study, live, or work in a country where English is the primary language of communication. In particular, the test is taken by three fundamental classifications of individuals</p>
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
                                    <p>Regular Course Fees BDT 16,000.00</p>                              
                                    <p>Crash Course Fees BDT 13,000</p>                              
                                </div>
                            </div><!-- /toggle -->
                            <div class="flat-toggle">
                                <div class="toggle-title">DURATION?</div>
                                <div class="toggle-content">
                                    <div class="info">                                    
                                        <p class="desc-info">Regular Course - 3 Months</p>
                                        <p class="desc-info">Crash Course - 1 Month</p>
                                    </div>
                                </div>
                            </div><!-- /.toggle -->
                            <div class="flat-toggle">
                                <div class="toggle-title">LOCATION?</div>
                                <div class="toggle-content">
                                    <div class="info">                                    
                                        <p class="desc-info">Bangladesh Office</p>
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
                            <form class="flat-contact-form style2 border-white border-large" id="contactform6" method="post" action="./contact/contact-process.php">
                                <div class="field">      
                                    <div class="wrap-type-input">                    
                                        <div class="input-wrap name">
                                            <input type="text" value="" tabindex="1" placeholder="Name" name="name" id="name" required="">
                                        </div>
                                        <div class="input-wrap email">
                                            <input type="email" value="" tabindex="2" placeholder="Email" name="email" id="email-contact" required="">
                                        </div>
                                        <div class="input-wrap last Subject">
                                            <input type="text" value="" placeholder="Subject" name="subject" id="subject-3">
                                        </div>  
                                    </div>
                                    <div class="textarea-wrap">
                                        <textarea class="type-input" tabindex="3" placeholder="Message" name="message" id="message-contact" required=""></textarea>
                                    </div>
                                </div>
                                <div class="submit-wrap">
                                    <button>Contact Us</button>
                                </div>
                            </form>
                        </div><!-- /.wrap-contactform-home3 -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section> 
@endsection