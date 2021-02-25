@extends('layouts.app')
<head>
    <meta name="keyword" content="html,css,XML,java script,meta tags">
        <meta name="keywords" content="Migration Agency, migration,  immigration">
        <meta name="keywords" content="meta tags, meta description, meta keywords, SEO, search engine optimization">
        <meta name="description"
       content="ITEC is affiliated with numerous attorneys currently practicing in states of Australia,Canada and Europe ready to make">
       <meta tag="keywords" content="migration agency,migration,immigration,green card,daca,asylum,immiaccount,migrants,immigration lawyer,immigration australia,express entry,us immigration,deportation,ds 260,canadian immigration,immigration office,ukvi,permanent resident card,illegal immigration,immitracker,permanent resident,immigrate,us citizenship and immigration services,uscis visa bulletin,uscis customer service,myuscis,eb 5 visa,diversity visa,us green card,immigration consultant,imigresen malaysia,department of immigration,e2 visa,189 visa,uk border agency,mpnp,uscis my account,political asylum,immigration attorne,immigration services,immigration and naturalization service,nonimmigrant visa,spouse visa,singapore immigration,190 visa,international organization for migration,ainp">

    </head>
@section('content')
        <!-- Page title -->
        <div class="page-title parallax parallax1">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-title-heading">
                            <h1 class="title">Migrations</h1>
                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="{{URL::to('/')}}">Home</a></li>
                                    <li>Migrations</li>
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
                            <h2 class="title-about-us">Migration</h2>
                            <div class="desc">
                                <p>ITEC is affiliated with numerous attorneys currently practicing in states of Australia, Canada and Europe ready to make the migrational arrangements for you abroad.</p>
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
                        <div class="single-image">
                            <img src="{{asset('assets/images/about/undraw_traveling_t8y2.svg')}}" alt="image">
                        </div><!-- /.about-us-img -->
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>


        <section class="flat-row pad-bottom60px pad-top85px" style="background-color: #eef1f6;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="single-image">
                            <img src="{{asset('assets/images/about/undraw_aircraft_fbvl.svg')}}" alt="image">
                        </div><!-- /.about-us-img -->
                    </div><!-- /.col-md-6 -->

                    <div class="col-md-6" style="padding: 0px 25px;">
                        <div class="about-us pad-top55px">
                            <h2 class="title-about-us">Having Our Own Headquarter Currently Operating Out Of Sydney, We Are Already A Certified Migration Agency In Bangladesh.</h2>
                            <div class="desc" style="text-align: justify;">
                                <p>ITEC is affiliated with numerous attorneys currently practicing in states of Australia, Canada and Europe ready to make the migrational arrangements for you abroad.</p>

                                <div style="display: flex; justify-content: Center;">
                                    <a href="{{route('apply_now')}}" class="btn-a" target="blank">Apply Now</a>
                                </div>

                                <div style="padding-bottom: 25px;"></div>

                                <p>Beginning this year, we extended our operation beyond Europe and Canada.</p>
                                <p>The immigration attorneys currently practising in Canada as well as Europe are going to explain everything about their immigration process and costs to you in person. As an internationally recognized agency, we have always maintained complete transparency throughout our whole process. So, go ahead and take the eligibility test on our website by filling up the necessary details. Find out whether or not your skills can come to use in any of these foreign lands.</p>
                            </div>
                        </div><!-- /.about-us -->
                    </div><!-- /.col-md-6 -->
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
