@extends('layouts.app')

@section('content')
        <!-- Page title -->
        <div class="page-title parallax parallax1">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">                    
                        <div class="page-title-heading">
                            <h1 class="title">Advanced Diploma Courses</h1>
                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="{{URL::to('/')}}">Home</a></li>
                                    <li>Advanced Diploma Courses</li>
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
                            <h2 class="title-about-us">Advanced Diploma Courses</h2>
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
                                <a href=""><img src="{{asset('assets/images/course/SIT60316-Advanced-Diploma-of-Hospitality-Management.jpg')}}" alt="image"></a>
                                {{-- <div class="courses-description">
                                    <p class="desc">Vestibulum rhoncus tincidunt tellus, sit amet congue dui congue vel. Curabitur facilisis, est eu dictum imperdiet,</p>
                                    <p class="courses-duration">Course Duration: 3 Years</p>
                                    <p class="degree-level">Degree level: Master</p>
                                </div> 
                                <a class="courses-viewmore" href="">Read more</a> --}}
                            </div>
                            <div class="courses-price">
                                <p>SIT60316 – Advanced Diploma of Hospitality Management</p>
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