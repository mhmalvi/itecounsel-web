@extends('layouts.app')

@section('content')
    <!-- Page title -->
    <div class="page-title parallax parallax1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">                    
                    <div class="page-title-heading">
                        <h1 class="title">Contact Us</h1>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="{{URL::to('/')}}">Home</a></li>
                                <li>Contact Us</li>
                            </ul>                   
                        </div>
                    </div><!-- /.page-title-captions --> 
                    
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /.page-title -->

    <!-- Flat contact -->
    <section class="flat-row pad-bottom0px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrap-contactform-home1">
                        <form id="contactform" class="flat-contact-form border-radius field-large text-large" method="post" action="">
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
                                <button>send</button>
                            </div>
                        </form><!-- /.comment-form -->   
                    </div><!-- /.wrap-contactform-home1 -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    <section class="flat-row" style="background-color: #eef1f6;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section cl-8490a7">
                        <h1 class="title">Head Office</h1>
                        <div class="desc">
                            <p>Vut sagittis a, magna ridiculus! Scelerisque parturient!</p>
                        </div>
                    </div><!-- /.title-section -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

            <div class="flat-divider d65px"></div>

            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="flat-iconbox center style3">
                        <div class="icon-image">
                            <span class="icon">
                                <i class="icon-Smartphone-4"></i>
                            </span>
                        </div>
                        <div class="content">
                            <h6 class="title"><a href="javascript:void(0)">1300 535 922</a></h6>
                        </div>
                    </div><!-- /.flat-iconbox center style3 -->
                </div><!-- /.col-md-3 -->

                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="flat-iconbox center style3">
                        <div class="icon-image">
                            <span class="icon">
                                <i class="icon-Email"></i>
                            </span>
                        </div>
                        <div class="content">
                            <h6 class="title"><a href="javascript:void(0)">info@itecounsel.com</a></h6>
                        </div>
                    </div><!-- /.flat-iconbox center style3 -->
                </div><!-- /.col-md-3 -->

                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="flat-iconbox center style3">
                        <div class="icon-image">
                            <span class="icon">
                                <i class="icon-Edit-Map"></i>
                            </span>
                        </div>
                        <div class="content">
                            <span class="address"><a href="javascript:void(0)">Suite 101, 124-128 Beamish St Campsie,<br>NSW 2194 Australia</a></span>
                        </div>
                    </div><!-- /.flat-iconbox center style3 -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    
    <section class="flat-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section cl-8490a7">
                        <h1 class="title">Offshore Branch</h1>
                        <div class="desc">
                            <p>Vut sagittis a, magna ridiculus! Scelerisque parturient!</p>
                        </div>
                    </div><!-- /.title-section -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

            <div class="flat-divider d65px"></div>

            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="flat-iconbox center style3">
                        <div class="icon-image">
                            <span class="icon">
                                <i class="icon-Smartphone-4"></i>
                            </span>
                        </div>
                        <div class="content">
                            <h6 class="title"><a href="javascript:void(0)">+88 01309 001 813</a></h6>
                        </div>
                    </div><!-- /.flat-iconbox center style3 -->
                </div><!-- /.col-md-3 -->

                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="flat-iconbox center style3">
                        <div class="icon-image">
                            <span class="icon">
                                <i class="icon-Email"></i>
                            </span>
                        </div>
                        <div class="content">
                            <h6 class="title"><a href="javascript:void(0)">info@itecounsel.com</a></h6>
                        </div>
                    </div><!-- /.flat-iconbox center style3 -->
                </div><!-- /.col-md-3 -->

                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="flat-iconbox center style3">
                        <div class="icon-image">
                            <span class="icon">
                                <i class="icon-Edit-Map"></i>
                            </span>
                        </div>
                        <div class="content">
                            <span class="address"><a href="javascript:void(0)">Floor E3 Dhanmondi,House # 66/a,<br>Road #8/A, Dhaka, Bangladesh</a></span>
                        </div>
                    </div><!-- /.flat-iconbox center style3 -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
@endsection