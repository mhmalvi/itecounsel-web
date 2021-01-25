@extends('layouts.app')
@push('seo')
    <meta name="keyword" content="html,css,XML,java script,meta tags">
        <meta name="keywords" content="Diploma, diploma of, diploma courses">
        <meta name="keywords" content="meta tags, meta description, meta keywords, SEO, search engine optimization">
        <meta name="description" 
       content="Diploma of Business
                Diploma of Leadership and Management
                Diploma of Work Health and Safety
                ">
       <meta tag="keywords" content="diploma courses
diploma
post graduate diploma
diploma of nursing
advanced diploma
diploma certificate
diploma in education
diploma in mechanical engineering
diploma in engineering
diploma in computer science
diploma in nursing
diploma in hotel management
diploma in civil engineering
diploma of community services
diploma in business management
diploma in information technology
diploma in law
diploma in architecture
diploma in psychology
graduate diploma in law
diploma of higher education
diploma in computer engineering
online diploma
diploma in fashion designing
pg diploma courses
diploma in counselling
post graduate diploma in education
online diploma courses
dmrt
part time diploma
graduate diploma in psychology
diploma in digital marketing
post graduate diploma in management
diploma in early childhood education
diploma of leadership and management
diploma in it
level 5 qualification
kaplan diploma
diploma in automobile engineering
diploma in management
cmi level 5
diploma in marketing
graduate diploma in education
diploma in teaching
diploma in software engineering
diploma in financial accounting
guj diploma
">
@endpush()
@section('content')
        <!-- Page title -->
        <div class="page-title parallax parallax1">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">                    
                        <div class="page-title-heading">
                            <h1 class="title">Diploma Courses</h1>
                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="{{URL::to('/')}}">Home</a></li>
                                    <li>Diploma Courses</li>
                                </ul>                   
                            </div>
                        </div><!-- /.page-title-captions --> 
                        
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- /.page-title -->
    
        <!-- Fillter courses -->
        {{-- <section class="flat-row pad-top50px pad-bottom0px">
            <div class="container">
                <div class="row">
                    <div class="search-course">
                        <div class="col-md-10">
                            <!-- Fillter courses -->
                            <form class="flat-contact-form fillter-courses border-radius border-white text-center style1" id="contactform5" method="post" action="./contact/contact-process.php">
                                <div class="field clearfix">      
                                    <div class="wrap-type-input">
                                        <div class="wrap categories-courses">
                                            <select class="select-field categories-courses" name="appointment_services">
                                                <option value="" selected="selected">All courses </option>
                                                <option value="Categories 1">Courses 1</option>
                                                <option value="Categories 2">Courses 2</option>
                                                <option value="Categories 3">Courses 3</option>
                                            </select> 
                                        </div><!-- /.wrap-select -->
                                        
                                        <div class="wrap courses-keyword">
                                            <input type="text" value="" placeholder="Course keyword" name="subject" id="subject" >
                                        </div>
    
                                        <div class="wrap all-categories">
                                            <button>All categories</button>
                                        </div>  
                                    </div><!-- /.wrap-type-input -->                            
                                </div><!-- /.field -->                        
                            </form><!-- /.comment-form -->  
                        </div><!-- /.col-md-10 -->
    
                        <div class="col-md-2">
                            <div class="list-course">
                                <a href="course.html"><i class="fa fa-th" aria-hidden="true"></i></a>
                                <a href="course_list.html"><i class="fa fa-list" aria-hidden="true"></i></a>                        
                            </div>
                        </div><!-- /.colo-md-2 -->
                    </div>
                </div>
            </div>
        </section> --}}

        <section class="flat-row pad-bottom60px pad-top85px">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-us pad-top55px">
                            <h2 class="title-about-us">Diploma Courses</h2>
                            <div class="desc">
                                <p>Vut sagittis a, magna ridiculus! Scelerisque parturient! Cum duis nunc in, dignissim, porta porta enim, proin turpis egestas! Mauris dapibus sed integer placerat, scelerisque! Ac enim nascetur rhoncus facilisis phasellus eu sit turpis purus magna auctor nunc facilisis parturient ac tempor, montes etiam tortor rhoncus! In, aliquam. Elementum urna, tincidunt? Nisi ut urna? Arcu, odio facilisis urna magna vel, elementum integer quis nisi nisi scelerisque etiam.</p>
                                <ul>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Nam ultrices elit augue, at euismod ipsum bibendum at.</li>
                                    <li>Nulla semper consectetur ex,</li>
                                    <li>Integer nisl nisi, scelerisque in metus nec</li>
                                    <li>Aenean suscipit ullamcorper aliquam.</li>
                                </ul>
                            </div>
                        </div><!-- /.about-us -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6">
                        <div class="single-image pad-top55px">
                            <img src="{{asset('assets/images/about/undraw_environmental_study_skau.svg')}}" alt="image">
                        </div><!-- /.about-us-img -->                        
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
    
        <!-- Flat courses -->
        <section class="flat-row pad-top50px">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="flat-courses style1">
                            <div class="courses-thumbnail">
                                <a href=""><img src="{{asset('assets/images/course/BSB50215-Diploma-of-Business.jpg')}}" alt="image"></a>
                                {{-- <div class="courses-description">
                                    <p class="desc">Vestibulum rhoncus tincidunt tellus, sit amet congue dui congue vel. Curabitur facilisis, est eu dictum imperdiet,</p>
                                    <p class="courses-duration">Course Duration: 3 Years</p>
                                    <p class="degree-level">Degree level: Master</p>
                                </div> 
                                <a class="courses-viewmore" href="">Read more</a> --}}
                            </div>
                            <div class="courses-price">
                                <p>Diploma of Business -BSB50215</p>
                            </div>
                        </div><!-- /.flat-courses -->
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="flat-courses style1">
                            <div class="courses-thumbnail">
                                <a href=""><img src="{{asset('assets/images/course/BSB51918-Diploma-of-Leadership-and-Management.jpg')}}" alt="image"></a>
                                {{-- <div class="courses-description">
                                    <p class="desc">Vestibulum rhoncus tincidunt tellus, sit amet congue dui congue vel. Curabitur facilisis, est eu dictum imperdiet,</p>
                                    <p class="courses-duration">Course Duration: 3 Years</p>
                                    <p class="degree-level">Degree level: Master</p>
                                </div> 
                                <a class="courses-viewmore" href="">Read more</a> --}}
                            </div>
                            <div class="courses-price">
                                <p>Diploma of Leadership and Management -BSB51918</p>
                            </div>
                        </div><!-- /.flat-courses -->
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="flat-courses style1">
                            <div class="courses-thumbnail">
                                <a href=""><img src="{{asset('assets/images/course/BSB50415-Diploma-of-Business-Administration.jpg')}}" alt="image"></a>
                                {{-- <div class="courses-description">
                                    <p class="desc">Vestibulum rhoncus tincidunt tellus, sit amet congue dui congue vel. Curabitur facilisis, est eu dictum imperdiet,</p>
                                    <p class="courses-duration">Course Duration: 3 Years</p>
                                    <p class="degree-level">Degree level: Master</p>
                                </div> 
                                <a class="courses-viewmore" href="">Read more</a> --}}
                            </div>
                            <div class="courses-price">
                                <p>Diploma of Business Administration -BSB50415</p>
                            </div>
                        </div><!-- /.flat-courses -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="flat-courses style1">
                            <div class="courses-thumbnail">
                                <a href=""><img src="{{asset('assets/images/course/BSB50815-Diploma-of-International-Business.jpg')}}" alt="image"></a>
                                {{-- <div class="courses-description">
                                    <p class="desc">Vestibulum rhoncus tincidunt tellus, sit amet congue dui congue vel. Curabitur facilisis, est eu dictum imperdiet,</p>
                                    <p class="courses-duration">Course Duration: 3 Years</p>
                                    <p class="degree-level">Degree level: Master</p>
                                </div> 
                                <a class="courses-viewmore" href="">Read more</a> --}}
                            </div>
                            <div class="courses-price">
                                <p>Diploma of International Business -BSB50815</p>
                            </div>
                        </div><!-- /.flat-courses -->
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="flat-courses style1">
                            <div class="courses-thumbnail">
                                <a href=""><img src="{{asset('assets/images/course/BSB51319-Diploma-of-Work-Health-and-Safety.jpg')}}" alt="image"></a>
                                {{-- <div class="courses-description">
                                    <p class="desc">Vestibulum rhoncus tincidunt tellus, sit amet congue dui congue vel. Curabitur facilisis, est eu dictum imperdiet,</p>
                                    <p class="courses-duration">Course Duration: 3 Years</p>
                                    <p class="degree-level">Degree level: Master</p>
                                </div> 
                                <a class="courses-viewmore" href="">Read more</a> --}}
                            </div>
                            <div class="courses-price">
                                <p>Diploma of Work Health and Safety -BSB5131</p>
                            </div>
                        </div><!-- /.flat-courses -->
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="flat-courses style1">
                            <div class="courses-thumbnail">
                                <a href=""><img src="{{asset('assets/images/course/CHC50113-Diploma-of-Early-Childhood-Education-and-Care.jpg')}}" alt="image"></a>
                                {{-- <div class="courses-description">
                                    <p class="desc">Vestibulum rhoncus tincidunt tellus, sit amet congue dui congue vel. Curabitur facilisis, est eu dictum imperdiet,</p>
                                    <p class="courses-duration">Course Duration: 3 Years</p>
                                    <p class="degree-level">Degree level: Master</p>
                                </div> 
                                <a class="courses-viewmore" href="">Read more</a> --}}
                            </div>
                            <div class="courses-price">
                                <p>Diploma of Early Childhood Education and Care -CHC50113</p>
                            </div>
                        </div><!-- /.flat-courses -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="flat-courses style1">
                            <div class="courses-thumbnail">
                                <a href=""><img src="{{asset('assets/images/course/course1.jpg')}}" alt="image"></a>
                                {{-- <div class="courses-description">
                                    <p class="desc">Vestibulum rhoncus tincidunt tellus, sit amet congue dui congue vel. Curabitur facilisis, est eu dictum imperdiet,</p>
                                    <p class="courses-duration">Course Duration: 3 Years</p>
                                    <p class="degree-level">Degree level: Master</p>
                                </div> 
                                <a class="courses-viewmore" href="">Read more</a> --}}
                            </div>
                            <div class="courses-price">
                                <p>Diploma of Digital Media Technologies -ICT50915</p>
                            </div>
                        </div><!-- /.flat-courses -->
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="flat-courses style1">
                            <div class="courses-thumbnail">
                                <a href=""><img src="{{asset('assets/images/course/BSB50615-Diploma-of-Human-Resources-Management.jpg')}}" alt="image"></a>
                                {{-- <div class="courses-description">
                                    <p class="desc">Vestibulum rhoncus tincidunt tellus, sit amet congue dui congue vel. Curabitur facilisis, est eu dictum imperdiet,</p>
                                    <p class="courses-duration">Course Duration: 3 Years</p>
                                    <p class="degree-level">Degree level: Master</p>
                                </div> 
                                <a class="courses-viewmore" href="">Read more</a> --}}
                            </div>
                            <div class="courses-price">
                                <p>Diploma of Human Resources Management -BSB50615</p>
                            </div>
                        </div><!-- /.flat-courses -->
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="flat-courses style1">
                            <div class="courses-thumbnail">
                                <a href=""><img src="{{asset('assets/images/course/BSB42415-Certificate-IV-in-Marketing-and-Communication (1).jpg')}}" alt="image"></a>
                                {{-- <div class="courses-description">
                                    <p class="desc">Vestibulum rhoncus tincidunt tellus, sit amet congue dui congue vel. Curabitur facilisis, est eu dictum imperdiet,</p>
                                    <p class="courses-duration">Course Duration: 3 Years</p>
                                    <p class="degree-level">Degree level: Master</p>
                                </div> 
                                <a class="courses-viewmore" href="">Read more</a> --}}
                            </div>
                            <div class="courses-price">
                                <p>Diploma of Marketing and Communication-BSB52415</p>
                            </div>
                        </div><!-- /.flat-courses -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="flat-courses style1">
                            <div class="courses-thumbnail">
                                <a href=""><img src="{{asset('assets/images/course/BSB40407-Certificate-IV-in-Small-Business (1).jpg')}}" alt="image"></a>
                                {{-- <div class="courses-description">
                                    <p class="desc">Vestibulum rhoncus tincidunt tellus, sit amet congue dui congue vel. Curabitur facilisis, est eu dictum imperdiet,</p>
                                    <p class="courses-duration">Course Duration: 3 Years</p>
                                    <p class="degree-level">Degree level: Master</p>
                                </div> 
                                <a class="courses-viewmore" href="">Read more</a> --}}
                            </div>
                            <div class="courses-price">
                                <p>Advanced Diploma of Marketing and Communication -BSB61315</p>
                            </div>
                        </div><!-- /.flat-courses -->
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="flat-courses style1">
                            <div class="courses-thumbnail">
                                <a href=""><img src="{{asset('assets/images/course/CHC52015-Diploma-of-Community-Services.jpg')}}" alt="image"></a>
                                {{-- <div class="courses-description">
                                    <p class="desc">Vestibulum rhoncus tincidunt tellus, sit amet congue dui congue vel. Curabitur facilisis, est eu dictum imperdiet,</p>
                                    <p class="courses-duration">Course Duration: 3 Years</p>
                                    <p class="degree-level">Degree level: Master</p>
                                </div> 
                                <a class="courses-viewmore" href="">Read more</a> --}}
                            </div>
                            <div class="courses-price">
                                <p>Diploma of Community Services -CHC52015</p>
                            </div>
                        </div><!-- /.flat-courses -->
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="flat-courses style1">
                            <div class="courses-thumbnail">
                                <a href=""><img src="{{asset('assets/images/course/ICT50115-Diploma-of-Information-Technology.jpg')}}" alt="image"></a>
                                {{-- <div class="courses-description">
                                    <p class="desc">Vestibulum rhoncus tincidunt tellus, sit amet congue dui congue vel. Curabitur facilisis, est eu dictum imperdiet,</p>
                                    <p class="courses-duration">Course Duration: 3 Years</p>
                                    <p class="degree-level">Degree level: Master</p>
                                </div> 
                                <a class="courses-viewmore" href="">Read more</a> --}}
                            </div>
                            <div class="courses-price">
                                <p>Diploma of Information Technology -ICT50115</p>
                            </div>
                        </div><!-- /.flat-courses -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="flat-courses style1">
                            <div class="courses-thumbnail">
                                <a href=""><img src="{{asset('assets/images/course/SHB50115-Diploma-of-Beauty-Therapy.jpg')}}" alt="image"></a>
                                {{-- <div class="courses-description">
                                    <p class="desc">Vestibulum rhoncus tincidunt tellus, sit amet congue dui congue vel. Curabitur facilisis, est eu dictum imperdiet,</p>
                                    <p class="courses-duration">Course Duration: 3 Years</p>
                                    <p class="degree-level">Degree level: Master</p>
                                </div> 
                                <a class="courses-viewmore" href="">Read more</a> --}}
                            </div>
                            <div class="courses-price">
                                <p>Diploma of Beauty Therapy-SHB50115</p>
                            </div>
                        </div><!-- /.flat-courses -->
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="flat-courses style1">
                            <div class="courses-thumbnail">
                                <a href=""><img src="{{asset('assets/images/course/SIT50416-Diploma-of-Hospitality-Management.jpg')}}" alt="image"></a>
                                {{-- <div class="courses-description">
                                    <p class="desc">Vestibulum rhoncus tincidunt tellus, sit amet congue dui congue vel. Curabitur facilisis, est eu dictum imperdiet,</p>
                                    <p class="courses-duration">Course Duration: 3 Years</p>
                                    <p class="degree-level">Degree level: Master</p>
                                </div> 
                                <a class="courses-viewmore" href="">Read more</a> --}}
                            </div>
                            <div class="courses-price">
                                <p>Diploma of Hospitality Management -SIT50416</p>
                            </div>
                        </div><!-- /.flat-courses -->
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="flat-courses style1">
                            <div class="courses-thumbnail">
                                <a href=""><img src="{{asset('assets/images/course/course1.jpg')}}" alt="image"></a>
                                {{-- <div class="courses-description">
                                    <p class="desc">Vestibulum rhoncus tincidunt tellus, sit amet congue dui congue vel. Curabitur facilisis, est eu dictum imperdiet,</p>
                                    <p class="courses-duration">Course Duration: 3 Years</p>
                                    <p class="degree-level">Degree level: Master</p>
                                </div>
                                <a class="courses-viewmore" href="">Read more</a> --}}
                            </div>
                            <div class="courses-price">
                                <p>Diploma of Remedial Massage -HLT52015</p>
                            </div>
                        </div><!-- /.flat-courses -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="flat-courses style1">
                            <div class="courses-thumbnail">
                                <a href=""><img src="{{asset('assets/images/course/BSB51415-Diploma-of-Project-Management.jpg')}}" alt="image"></a>
                                {{-- <div class="courses-description">
                                    <p class="desc">Vestibulum rhoncus tincidunt tellus, sit amet congue dui congue vel. Curabitur facilisis, est eu dictum imperdiet,</p>
                                    <p class="courses-duration">Course Duration: 3 Years</p>
                                    <p class="degree-level">Degree level: Master</p>
                                </div> 
                                <a class="courses-viewmore" href="">Read more</a> --}}
                            </div>
                            <div class="courses-price">
                                <p>Diploma of Project Management -BSB51415</p>
                            </div>
                        </div><!-- /.flat-courses -->
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="flat-courses style1">
                            <div class="courses-thumbnail">
                                <a href=""><img src="{{asset('assets/images/course/course1.jpg')}}" alt="image"></a>
                                {{-- <div class="courses-description">
                                    <p class="desc">Vestibulum rhoncus tincidunt tellus, sit amet congue dui congue vel. Curabitur facilisis, est eu dictum imperdiet,</p>
                                    <p class="courses-duration">Course Duration: 3 Years</p>
                                    <p class="degree-level">Degree level: Master</p>
                                </div> 
                                <a class="courses-viewmore" href="">Read more</a> --}}
                            </div>
                            <div class="courses-price">
                                <p>Advanced Diploma of Leadership and Management-BSB61015</p>
                            </div>
                        </div><!-- /.flat-courses -->
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="flat-courses style1">
                            <div class="courses-thumbnail">
                                <a href=""><img src="{{asset('assets/images/course/CHC62015-Advanced-Diploma-of-Community-Sector-Management.jpg')}}" alt="image"></a>
                                {{-- <div class="courses-description">
                                    <p class="desc">Vestibulum rhoncus tincidunt tellus, sit amet congue dui congue vel. Curabitur facilisis, est eu dictum imperdiet,</p>
                                    <p class="courses-duration">Course Duration: 3 Years</p>
                                    <p class="degree-level">Degree level: Master</p>
                                </div> 
                                <a class="courses-viewmore" href="">Read more</a> --}}
                            </div>
                            <div class="courses-price">
                                <p>Advanced Diploma of Community Sector Management -CHC62015</p>
                            </div>
                        </div><!-- /.flat-courses -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="flat-courses style1">
                            <div class="courses-thumbnail">
                                <a href=""><img src="{{asset('assets/images/course/SIT60316-Advanced-Diploma-of-Hospitality-Management.jpg')}}" alt="image"></a>
                                {{-- <div class="courses-description">
                                    <p class="desc">Vestibulum rhoncus tincidunt tellus, sit amet congue dui congue vel. Curabitur facilisis, est eu dictum imperdiet,</p>
                                    <p class="courses-duration">Course Duration: 3 Years</p>
                                    <p class="degree-level">Degree level: Master</p>
                                </div> 
                                <a class="courses-viewmore" href="">Read more</a> --}}
                            </div>
                            <div class="courses-price">
                                <p>Advanced Diploma of Hospitality Management -SIT60316 A</p>
                            </div>
                        </div><!-- /.flat-courses -->
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="flat-courses style1">
                            <div class="courses-thumbnail">
                                <a href=""><img src="{{asset('assets/images/course/HLTAID003-First-Aid.jpg')}}" alt="image"></a>
                                {{-- <div class="courses-description">
                                    <p class="desc">Vestibulum rhoncus tincidunt tellus, sit amet congue dui congue vel. Curabitur facilisis, est eu dictum imperdiet,</p>
                                    <p class="courses-duration">Course Duration: 3 Years</p>
                                    <p class="degree-level">Degree level: Master</p>
                                </div> 
                                <a class="courses-viewmore" href="">Read more</a> --}}
                            </div>
                            <div class="courses-price">
                                <p>Provide Advanced First Aid- HLTAID006</p>
                            </div>
                        </div><!-- /.flat-courses -->
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="flat-courses style1">
                            <div class="courses-thumbnail">
                                <a href=""><img src="{{asset('assets/images/course/course1.jpg')}}" alt="image"></a>
                                {{-- <div class="courses-description">
                                    <p class="desc">Vestibulum rhoncus tincidunt tellus, sit amet congue dui congue vel. Curabitur facilisis, est eu dictum imperdiet,</p>
                                    <p class="courses-duration">Course Duration: 3 Years</p>
                                    <p class="degree-level">Degree level: Master</p>
                                </div> 
                                <a class="courses-viewmore" href="">Read more</a> --}}
                            </div>
                            <div class="courses-price">
                                <p>First Aid -HLTAID003</p>
                            </div>
                        </div><!-- /.flat-courses -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="flat-courses style1">
                            <div class="courses-thumbnail">
                                <a href=""><img src="{{asset('assets/images/course/HLTAID006-Provide-advanced-first-aid.jpg')}}" alt="image"></a>
                                {{-- <div class="courses-description">
                                    <p class="desc">Vestibulum rhoncus tincidunt tellus, sit amet congue dui congue vel. Curabitur facilisis, est eu dictum imperdiet,</p>
                                    <p class="courses-duration">Course Duration: 3 Years</p>
                                    <p class="degree-level">Degree level: Master</p>
                                </div> 
                                <a class="courses-viewmore" href="">Read more</a> --}}
                            </div>
                            <div class="courses-price">
                                <p>First Aid -HLTAID004</p>
                            </div>
                        </div><!-- /.flat-courses -->
                    </div>
                </div>
            </div><!-- /.container -->
    
            <div class="flat-divider d40px"></div>
    
            {{-- <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="blog-pagination style1">
                            <ul class="flat-pagination clearfix">
                                <li class="prev">
                                    <a href="#"><i class="fa fa-angle-left"></i></a>
                                </li>
                                <li class="active">1</li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>                                  
                                <li class="next">
                                    <a href="#"><i class="fa fa-angle-right"></i></a>
                                </li>                               
                            </ul>
                        </div><!-- /.blog-pagination -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div> --}}
        </section><!-- /.flat-row -->
@endsection