@extends('layouts.app')
@push('seo')
    <meta name="keyword" content="html,css,XML,java script,meta tags">
        <meta name="keywords" content="Certificate IV">
        <meta name="keywords" content="meta tags, meta description, meta keywords, SEO, search engine optimization">
        <meta name="description" 
       content="Certificate IV in Ageing Support-CHC43015
                Certificate IV in Business-BSB40215
                Certificate IV in Design-CUA40715">
       <meta tag="keywords" content="certificate iv,
certificate iv in training and assessment,
tae40116,
cert iv training and assessment,
cert 4 training and assessment,
cert iv training and assessment online,
certificate iv in training and assessment online,
certificate 4 in training and assessment,
tae40110,
taelln411,
cert 4 training and assessment online,
cert iv,
certificate iv in training and assessment weekend course,
cert 4,
certificate iv in building and construction,
cert 4 building and construction,
cert 4 community services,
cert 4 fitness,
certificate 4,
certificate iv in community services,
certificate iv in business administration,
certificate 4 in aged care,
cert iv community services,
cert 4 aged care,
cert iv whs,
fns40217,
certificate iv in business,
cert 3 and 4 in fitness,
tae40116 online,
certificate iv in fitness,
certificate iv in cyber security,
cert iv building and construction,
tae40116 certificate iv in training and assessment,
best cert iv training and assessment online,
bsb42015,
bsb41415,
certificate iv in commercial cookery,
aqf certificate iv,
certificate iv in tesol,
certificate 4 in fitness,
cert iv business administration,
certificate 4 in community services,
certificate iv in aged care,
cert iv training and assessment online $500,
cert 4 whs,
cert 4 business admin,
bsb40215
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
                            <h1 class="title">Certificate-IV Courses</h1>
                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="{{URL::to('/')}}">Home</a></li>
                                    <li>Certificate-IV Courses</li>
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
                            <h2 class="title-about-us">Certificate-IV Courses</h2>
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
                            <img src="{{asset('assets/images/about/undraw_Analysis_re_w2vd.svg')}}" alt="image">
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
                                <a href=""><img src="{{asset('assets/images/course/CHC43015-Certificate-IV-in-Ageing-Support.jpg')}}" alt="image"></a>
                                {{-- <div class="courses-description">
                                    <p class="desc">Vestibulum rhoncus tincidunt tellus, sit amet congue dui congue vel. Curabitur facilisis, est eu dictum imperdiet,</p>
                                    <p class="courses-duration">Course Duration: 3 Years</p>
                                    <p class="degree-level">Degree level: Master</p>
                                </div> 
                                <a class="courses-viewmore" href="">Read more</a> --}}
                            </div>
                            <div class="courses-price">
                                <p>Certificate IV in Ageing Support -CHC43015</p>
                            </div>
                        </div><!-- /.flat-courses -->
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="flat-courses style1">
                            <div class="courses-thumbnail">
                                <a href=""><img src="{{asset('assets/images/course/BSB40215-Certificate-IV-in-Business.jpg')}}" alt="image"></a>
                                {{-- <div class="courses-description">
                                    <p class="desc">Vestibulum rhoncus tincidunt tellus, sit amet congue dui congue vel. Curabitur facilisis, est eu dictum imperdiet,</p>
                                    <p class="courses-duration">Course Duration: 3 Years</p>
                                    <p class="degree-level">Degree level: Master</p>
                                </div> 
                                <a class="courses-viewmore" href="">Read more</a> --}}
                            </div>
                            <div class="courses-price">
                                <p>Certificate IV in Business -BSB40215</p>
                            </div>
                        </div><!-- /.flat-courses -->
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="flat-courses style1">
                            <div class="courses-thumbnail">
                                <a href=""><img src="{{asset('assets/images/course/BSB42415-Certificate-IV-in-Marketing-and-Communication.jpg')}}" alt="image"></a>
                                {{-- <div class="courses-description">
                                    <p class="desc">Vestibulum rhoncus tincidunt tellus, sit amet congue dui congue vel. Curabitur facilisis, est eu dictum imperdiet,</p>
                                    <p class="courses-duration">Course Duration: 3 Years</p>
                                    <p class="degree-level">Degree level: Master</p>
                                </div> 
                                <a class="courses-viewmore" href="">Read more</a> --}}
                            </div>
                            <div class="courses-price">
                                <p>Certificate IV in Marketing and Communication -BSB42415</p>
                            </div>
                        </div><!-- /.flat-courses -->
                    </div>>
                </div>

                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="flat-courses style1">
                            <div class="courses-thumbnail">
                                <a href=""><img src="{{asset('assets/images/course/BSB40407-Certificate-IV-in-Small-Business.jpg')}}" alt="image"></a>
                                {{-- <div class="courses-description">
                                    <p class="desc">Vestibulum rhoncus tincidunt tellus, sit amet congue dui congue vel. Curabitur facilisis, est eu dictum imperdiet,</p>
                                    <p class="courses-duration">Course Duration: 3 Years</p>
                                    <p class="degree-level">Degree level: Master</p>
                                </div> 
                                <a class="courses-viewmore" href="">Read more</a> --}}
                            </div>
                            <div class="courses-price">
                                <p>Certificate IV in Small Business -BSB40407</p>
                            </div>
                        </div><!-- /.flat-courses -->
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="flat-courses style1">
                            <div class="courses-thumbnail">
                                <a href=""><img src="{{asset('assets/images/course/SIT40116-Certificate-IV-in-Travel-and-Tourism.jpg')}}" alt="image"></a>
                                {{-- <div class="courses-description">
                                    <p class="desc">Vestibulum rhoncus tincidunt tellus, sit amet congue dui congue vel. Curabitur facilisis, est eu dictum imperdiet,</p>
                                    <p class="courses-duration">Course Duration: 3 Years</p>
                                    <p class="degree-level">Degree level: Master</p>
                                </div> 
                                <a class="courses-viewmore" href="">Read more</a> --}}
                            </div>
                            <div class="courses-price">
                                <p>Certificate IV in Travel and Tourism -SIT40116</p>
                            </div>
                        </div><!-- /.flat-courses -->
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="flat-courses style1">
                            <div class="courses-thumbnail">
                                <a href=""><img src="{{asset('assets/images/course/CHC43315-Certificate-IV-in-Mental-Health.jpg')}}" alt="image"></a>
                                {{-- <div class="courses-description">
                                    <p class="desc">Vestibulum rhoncus tincidunt tellus, sit amet congue dui congue vel. Curabitur facilisis, est eu dictum imperdiet,</p>
                                    <p class="courses-duration">Course Duration: 3 Years</p>
                                    <p class="degree-level">Degree level: Master</p>
                                </div> 
                                <a class="courses-viewmore" href="">Read more</a> --}}
                            </div>
                            <div class="courses-price">
                                <p>Certificate IV in Mental Health -CHC43315</p>
                            </div>
                        </div><!-- /.flat-courses -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="flat-courses style1">
                            <div class="courses-thumbnail">
                                <a href=""><img src="{{asset('assets/images/course/CUA40715-Certificate-IV-in-Design.jpg')}}" alt="image"></a>
                                {{-- <div class="courses-description">
                                    <p class="desc">Vestibulum rhoncus tincidunt tellus, sit amet congue dui congue vel. Curabitur facilisis, est eu dictum imperdiet,</p>
                                    <p class="courses-duration">Course Duration: 3 Years</p>
                                    <p class="degree-level">Degree level: Master</p>
                                </div> 
                                <a class="courses-viewmore" href="">Read more</a> --}}
                            </div>
                            <div class="courses-price">
                                <p>Certificate IV in Design -CUA40715</p>
                            </div>
                        </div><!-- /.flat-courses -->
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="flat-courses style1">
                            <div class="courses-thumbnail">
                                <a href=""><img src="{{asset('assets/images/course/ICT40815-Certificate-IV-in-Digital-Media-Technologies.jpg')}}" alt="image"></a>
                                {{-- <div class="courses-description">
                                    <p class="desc">Vestibulum rhoncus tincidunt tellus, sit amet congue dui congue vel. Curabitur facilisis, est eu dictum imperdiet,</p>
                                    <p class="courses-duration">Course Duration: 3 Years</p>
                                    <p class="degree-level">Degree level: Master</p>
                                </div> 
                                <a class="courses-viewmore" href="">Read more</a> --}}
                            </div>
                            <div class="courses-price">
                                <p>Certificate IV in Digital Media Technologies -ICT40815</p>
                            </div>
                        </div><!-- /.flat-courses -->
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="flat-courses style1">
                            <div class="courses-thumbnail">
                                <a href=""><img src="{{asset('assets/images/course/CHC40313-Certificate-IV-in-Child-Youth-and-Family-Intervention.jpg')}}" alt="image"></a>
                                {{-- <div class="courses-description">
                                    <p class="desc">Vestibulum rhoncus tincidunt tellus, sit amet congue dui congue vel. Curabitur facilisis, est eu dictum imperdiet,</p>
                                    <p class="courses-duration">Course Duration: 3 Years</p>
                                    <p class="degree-level">Degree level: Master</p>
                                </div> 
                                <a class="courses-viewmore" href="">Read more</a> --}}
                            </div>
                            <div class="courses-price">
                                <p>Certificate IV in Child, Youth and Family Intervention-CHC40313</p>
                            </div>
                        </div><!-- /.flat-courses -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="flat-courses style1">
                            <div class="courses-thumbnail">
                                <a href=""><img src="{{asset('assets/images/course/TAE40116-Certificate-IV-in-Training-and-Assessment.jpg')}}" alt="image"></a>
                                {{-- <div class="courses-description">
                                    <p class="desc">Vestibulum rhoncus tincidunt tellus, sit amet congue dui congue vel. Curabitur facilisis, est eu dictum imperdiet,</p>
                                    <p class="courses-duration">Course Duration: 3 Years</p>
                                    <p class="degree-level">Degree level: Master</p>
                                </div> 
                                <a class="courses-viewmore" href="">Read more</a> --}}
                            </div>
                            <div class="courses-price">
                                <p>Certificate IV in Training and Assessment -TAE40116</p>
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
                                <p>Certificate IV in Human Resources -BSB41015</p>
                            </div>
                        </div><!-- /.flat-courses -->
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="flat-courses style1">
                            <div class="courses-thumbnail">
                                <a href=""><img src="{{asset('assets/images/course/CPC40110-Certificate-IV-in-Building-and-Construction-Building.jpg')}}" alt="image"></a>
                                {{-- <div class="courses-description">
                                    <p class="desc">Vestibulum rhoncus tincidunt tellus, sit amet congue dui congue vel. Curabitur facilisis, est eu dictum imperdiet,</p>
                                    <p class="courses-duration">Course Duration: 3 Years</p>
                                    <p class="degree-level">Degree level: Master</p>
                                </div> 
                                <a class="courses-viewmore" href="">Read more</a> --}}
                            </div>
                            <div class="courses-price">
                                <p>Certificate IV in Building and Construction (Building) -CPC40110</p>
                            </div>
                        </div><!-- /.flat-courses -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="flat-courses style1">
                            <div class="courses-thumbnail">
                                <a href=""><img src="{{asset('assets/images/course/CHC43115-Certificate-IV-in-Disability.jpg')}}" alt="image"></a>
                                {{-- <div class="courses-description">
                                    <p class="desc">Vestibulum rhoncus tincidunt tellus, sit amet congue dui congue vel. Curabitur facilisis, est eu dictum imperdiet,</p>
                                    <p class="courses-duration">Course Duration: 3 Years</p>
                                    <p class="degree-level">Degree level: Master</p>
                                </div> 
                                <a class="courses-viewmore" href="">Read more</a> --}}
                            </div>
                            <div class="courses-price">
                                <p>Certificate IV in Disability -CHC43115</p>
                            </div>
                        </div><!-- /.flat-courses -->
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="flat-courses style1">
                            <div class="courses-thumbnail">
                                <a href=""><img src="{{asset('assets/images/course/SIT40516-Certificate-IV-in-Commercial-Cookery.jpg')}}" alt="image"></a>
                                {{-- <div class="courses-description">
                                    <p class="desc">Vestibulum rhoncus tincidunt tellus, sit amet congue dui congue vel. Curabitur facilisis, est eu dictum imperdiet,</p>
                                    <p class="courses-duration">Course Duration: 3 Years</p>
                                    <p class="degree-level">Degree level: Master</p>
                                </div> 
                                <a class="courses-viewmore" href="">Read more</a> --}}
                            </div>
                            <div class="courses-price">
                                <p>Certificate IV in Commercial Cookery -SIT40516</p>
                            </div>
                        </div><!-- /.flat-courses -->
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="flat-courses style1">
                            <div class="courses-thumbnail">
                                <a href=""><img src="{{asset('assets/images/course/SHB40115-Certificate-IV-in-Beauty-Therapy.jpg')}}" alt="image"></a>
                                {{-- <div class="courses-description">
                                    <p class="desc">Vestibulum rhoncus tincidunt tellus, sit amet congue dui congue vel. Curabitur facilisis, est eu dictum imperdiet,</p>
                                    <p class="courses-duration">Course Duration: 3 Years</p>
                                    <p class="degree-level">Degree level: Master</p>
                                </div> 
                                <a class="courses-viewmore" href="">Read more</a> --}}
                            </div>
                            <div class="courses-price">
                                <p>Certificate IV in Beauty Therapy -SHB40115</p>
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