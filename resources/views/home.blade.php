@extends('layouts.app')
@push('seo')
 
        <meta name="keyword" content="html,css,XML,java script,meta tags">
        <meta name="keywords" content="ITEC, most trusted education agent, university, coaching, abroad study solution, IELTS">
        <meta name="keywords" content="meta tags, meta description, meta keywords, SEO, search engine optimization">
        <meta name="description"content="ITEC is here for your abroad study solution in highly ranked universities providing scholarships.">
        <meta name="google-site-verification" content="Q9wlt-zReBoAh89mLPpUNj0Qloh9PK69M2_MhK9G0Xs"/>
        <meta tag="keywords" content="university,coaching,education agent,study solution,ielts,most trusted education agent,abroad study solution,open university,uni,uts,um,national university,uhs,harvard referencing,cmu,my uw,baylor university,ielts exam,pepperdine university,spu,loyola college,uw canvas,deakinsync,griffith university,tufts university,carnegie mellon,udc,ucl moodle,my monash,undergraduate,western university,hbcu,um learn,queen's university,student central,unsw moodle,uaa,dalhousie university,uta blackboard,carnegie mellon university,xavier university,uc blackboard,middlesex university,uq blackboard,vuws,ntu now,university of notre dame"/>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-SBEGPQEPVB"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'G-SBEGPQEPVB');
        </script>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-TD88S3F');</script>
        <!-- End Google Tag Manager -->
        
        <script data-ad-client="ca-pub-6706699637920296" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        
@endpush()
@section('content')
        {{-- slider --}}
        @include('components.slider')
        <!-- About us -->
        <section class="flat-row">
            <div class="container">
                <div class="row">
                    <div class="flat-about-us clearfix">
                        <div class="col-md-7">
                            <div class="about-us-img clearfix">
                                <div class="v1">
                                    <div class="overly-img"></div>  
                                    <img src="{{asset('assets/images/about/about2.jpg')}}" alt="image">
                                </div>
                                <div class="v2">
                                    <div class="overly-img"></div>
                                    <img src="{{asset('assets/images/about/about6.png')}}" alt="image">
                                </div>
                                <div class="v3">
                                    <div class="overly-img"> </div>  
                                    <img src="{{asset('assets/images/about/about1.jpg')}}" alt="image">
                                </div>                            
                            </div><!-- /.about-us-img -->
                        </div><!-- /.col-md-7 -->
                        
                        <div class="col-md-5">
                            <div class="about-us style1">
                                <h1 class="title-about-us">Why Us</h1>
                                <div class="desc" style="text-align: justify;">
                                    <p>ITEC – International Training & Education Counsel is your most trusted education agent who is here to help you getting your higher education dream come true by applying to the most highly ranked universities across the world even with a scholarship! Also get yourself sorted with your university change, TR and PR application, visa extension, NAATI, PTE coaching through us in our head office at Australia!</p>
                                </div>
                                <div style="display: flex; justify-content: center;">
                                    <a href="{{route('eligibility')}}" class="btn-a" target="blank">Eligibility</a>
                                </div>
                            </div><!-- /.about-us -->
                        </div><!-- /.col-md-5 -->
                    </div><!-- /.flat-about-us -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.flat-row -->
        
        <div class="flat-divider d88px"></div>

        <!-- Itec Info -->
        <section class="flat-row main-content blog pad-bottom60px" style="padding-top: 70px;">
            <section class="flat-row pad-bottom85px">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="single-image style1">
                                <img src="{{asset('assets/images/about/4026066rt.png')}}" alt="image">
                            </div>
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-7">
                            <div class="flat-divider d30px"></div>
        
                            <div class="row">
                                <div class="col-md-6 col-ms-6 col-xs-6">
                                    <div class="flat-iconbox style1">
                                        <div class="icon-image">
                                            <span class="icon-Board"></span>
                                        </div>
                                        <div class="content">
                                            <h2 class="title"><a href="#">Why Choose ITEC?</a></h2>            
                                            <p>ITEC is here for your abroad study solution in highly ranked universities providing scholarships.</p>
                                        </div>
                                    </div><!-- /.flat-iconbox -->
                                </div><!-- /.col-md-6 -->
        
                                <div class="col-md-6 col-ms-6 col-xs-6">
                                    <div class="flat-iconbox style1">
                                        <div class="icon-image">
                                            <span class="icon-Notepad"></span>
                                        </div>
                                        <div class="content">
                                            <h3 class="title"><a href="#">What makes me compatible for visa?</a></h3>            
                                            <p>Our highly trained and professional consultants would help you to make you compatible by guiding you step by step for your visa. </p>
                                        </div>
                                    </div><!-- /.flat-iconbox -->
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
        
                            <div class="flat-divider d45px"></div>
        
                            <div class="row">
                                <div class="col-md-6 col-ms-6 col-xs-6">
                                    <div class="flat-iconbox style1">
                                        <div class="icon-image">
                                            <span class="icon-Brain"></span>
                                        </div>
                                        <div class="content">
                                            <h4 class="title"><a href="#">How long does it take to process visa?</a></h4>            
                                            <p>It takes 15 days or longer for countries such as Australia, Canada and Europe once you step on the loop through this platform. In case of <a href="https://www.itecounsel.com/services/tourist-visa">tourist visa</a> for Malaysia, the process will take only 24</p>
                                        </div>
                                    </div><!-- /.flat-iconbox -->
                                </div><!-- /.col-md-6 -->
        
                                <div class="col-md-6 col-ms-6 col-xs-6">
                                    <div class="flat-iconbox style1">
                                        <div class="icon-image">
                                            <span class="icon-Affiliate"></span>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="#">Why does ITEC charge a fee?</a></h5>            
                                            <p>Partly because we will work to save a considerable period of time for you that you may have had lost while carrying out everything single-handedly.</p> 
                                        </div>
                                    </div><!-- /.flat-iconbox -->
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section>
        </section>
        
        <!-- Flat courses -->
        <section class="flat-row pad-bottom90px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 flat-animation" data-animation="fadeInLeft" data-animation-delay="0" data-animation-offset="75%">
                        <div class="title-section style1">
                            <h1 class="title">Our RPL Courses</h1>
                            <div class="desc">
                                <p>Recognition of Prior Learning (RPL) is an assessment process used by <a href="https://training.gov.au/Home/Tga">RTOs</a> to evaluate a person’s skills, 
                                    knowledge and experience gained through working and learning, in Australia or overseas, 
                                    be it through life experience, work or other activities such as volunteering. 
                                    RTOs can also provide a credit against units of competency, often shortening the time needed to undertake a qualification.
                                </p>
                            </div>
                            {{-- <div class="icon">
                                <img src="{{asset('assets/images/icon/line.png')}}" alt="image">
                            </div> --}}
                        </div><!-- /.title-section -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
    
                <div class="row">
                    <div class="flat-divider d55px"></div>
                </div>
    
                <div class="row">
                    <div class="col-md-6 flat-animation" data-animation="fadeInLeft" data-animation-delay="1" data-animation-offset="75%" style="padding: 15px 0px !important;">
                        <div class="flat-courses-front">
                            <div class="courses-thumbnail">
                                <a href=""><img src="{{asset('assets/images/course/itec-Early-Childhood-Education-and-Care.jpg')}}" alt="image"></a>
                                <a class="courses-viewmore" href="{{route('diploma')}}">Diploma Courses</a>
                            </div>
                        </div><!-- /.flat-courses -->
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-6 flat-animation" data-animation="fadeInLeft" data-animation-delay="2" data-animation-offset="75%" style="padding: 15px 0px !important;">
                        <div class="flat-courses-front">
                            <div class="courses-thumbnail">
                                <a href=""><img src="{{asset('assets/images/course/itec-Certificate-III-in-Education-Support.jpg')}}" alt="image"></a>
                                <a class="courses-viewmore" href="{{route('advanceDiploma')}}">Advanced Diploma Courses</a>
                            </div>
                        </div><!-- /.flat-courses -->
                    </div><!-- /.col-md-3 -->
                </div><!-- /.row -->
    
                <div class="row">
                    <div class="flat-divider d40px"></div>
                </div>
    
                <div class="row">
                    <div class="col-md-6 flat-animation" data-animation="fadeInRight" data-animation-delay="0" data-animation-offset="75%" style="padding: 15px 0px !important;">
                        <div class="flat-courses-front">
                            <div class="courses-thumbnail">
                                <a href=""><img src="{{asset('assets/images/course/CUA30715-Certificate-III-in-Design-Fundamentals.jpg')}}" alt="image"></a>
                                <a class="courses-viewmore" href="{{route('certificate3')}}">Certificate III Courses</a>
                            </div>
                        </div><!-- /.flat-courses -->
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-6 flat-animation" data-animation="fadeInRight" data-animation-delay="0" data-animation-offset="75%" style="padding: 15px 0px !important;">
                        <div class="flat-courses-front">
                            <div class="courses-thumbnail">
                                <a href=""><img src="{{asset('assets/images/course/CUA3115-Certificate-III-in-Visual-Arts.jpg')}}" alt="image"></a>
                                <a class="courses-viewmore" href="{{route('certificate4')}}">Certificate IV Courses</a>
                            </div>
                        </div><!-- /.flat-courses -->
                    </div><!-- /.col-md-3 -->
                </div><!-- /.row -->
                
                <div style="display: flex; justify-content: Center;">
                    <a href="{{route('apply_now')}}" class="btn-a" target="blank">Apply Now</a>
                </div>
            </div><!-- /.container -->
        </section><!-- /.flat-row -->
    
        <!-- Testimonial -->
        <section class="flat-row parallax parallax4 row-bg-whiteblack pad-top240px pad-bottom0px">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="flat-testimonials-images">
                            <div class="flat-testimonials-slider">
                                <div id="flat-testimonials-flexslider">
                                    <ul class="slides">
                                        <li>
                                            <p class="say">ITEC is one of best student counselling agency  i have visited , After visiting so many agency , i choose it and my decision was absolutely right . They will do everything they have promised.</p>
                                            <p class="name">Alamin Shuvo</p>
                                        </li>
                                        <li>
                                            <p class="say">ITEC is one of the finest consulting firm in Bangladesh . The way they provide services , i can ensure that they will be a leading firm in recent future.</p>
                                            <p class="name">Piyash Khan</p>
                                        </li>
                                        <li>
                                            <p class="say">They provide air tickets in low price , comparing to others . Good job , keep up the good work .</p>
                                            <p class="name">Dew Anthony Gomes</p>
                                        </li>                                   
                                    </ul>
                                </div>
                            </div><!-- /.flat-testimonials-slider -->
                        </div><!-- /.flat-testimonials -->
                    </div><!-- /.col-md-8 -->
                </div><!-- /.row -->
            </div>
        </section>

    
        <div class="flat-divider d85px"></div>
    
        <!-- Flat contact -->
        <section class="flat-row bg-contact pad-top375px pad-bottom360px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 flat-animation" data-animation="fadeInLeft" data-animation-delay="0" data-animation-offset="75%">
                        <div class="wrap-contactform-home1">
                            <form class="flat-contact-form border-radius field-large text-large"  method="post" action="">
                                @csrf
                                <div class="field clearfix">      
                                    <div class="wrap-type-input">                    
                                        <div class="input-wrap name">
                                            <input type="text" value="" tabindex="1" placeholder="Your name" name="name" id="name" required>
                                        </div>
                                        <div class="input-wrap email">
                                            <input type="email" value="" tabindex="2" placeholder="Your email" name="email" id="email" required>
                                        </div>
                                        <div class="input-wrap last Subject">
                                            <input type="text" value="" placeholder="Subject" name="subject" id="subject" >
                                        </div>  
                                    </div>
                                    <div class="textarea-wrap">
                                        <textarea class="type-input" tabindex="3" placeholder="Your Message" name="message" id="message-contact" required></textarea>
                                    </div>
                                </div>
                                <div class="submit-wrap">
                                    <button type="submit">Contact Us</button>
                                </div>
                            </form><!-- /.comment-form -->   
                        </div><!-- /.wrap-contactform-home1 -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
@endsection