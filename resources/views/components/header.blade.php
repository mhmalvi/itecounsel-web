    <!-- Header -->            
    <header id="header" class="header clearfix"> 
        <div class="header-wrap clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <div id="logo" class="logo">
                            <a href="{{URL::to('/')}}" rel="home">
                                <img src="{{asset('assets/images/ITEC_logo_Final.png')}}" alt="image" style="width: 150px;">
                            </a>
                        </div><!-- /.logo -->
                        <div class="btn-menu">
                            <span></span>
                        </div><!-- //mobile menu button -->
                    </div><!-- /.col-md-2 -->
                    <div class="col-md-10">
                        <div class="nav-wrap">
                            
                            <nav id="mainnav" class="mainnav">
                                <ul class="menu"> 
                                    <li class="home">
                                        <a href="{{URL::to('/')}}">Home</a>
                                    </li>
                                    {{-- <li>
                                        <a href="javascript:void(0)">About Us</a>
                                    </li> --}}
                                    <li><a href="javascript:void(0)">Other Services</a>
                                        <ul class="submenu">
                                            <li><a href="{{route('tourist')}}">Tourist Visa</a></li>
                                            <li><a href="{{route('pte')}}">PTE</a></li>
                                            <li><a href="{{route('ielts')}}">IELTS</a></li>
                                        </ul><!-- /.submenu -->
                                    </li>
                                    <li><a href="javascript:void(0)">Admission</a>
                                        <ul class="submenu">
                                            <li><a href="{{route('australia')}}">Study in Australia</a></li>
                                            <li><a href="{{route('canada')}}">Study in Canada</a></li>
                                            <li><a href="{{route('europe')}}">Study in Europe</a></li>
                                            <li><a href="{{route('malaysia')}}">Study in Malaysia</a></li>
                                        </ul><!-- /.submenu -->
                                    </li>
                                    <li><a href="{{route('migration')}}">Migrations</a></li>                                             
                                    <li>
                                        <a href="{{route('rpl')}}">RPL</a>
                                        <ul class="submenu">
                                            <li><a href="{{route('diploma')}}">Diploma</a></li>
                                            <li><a href="{{route('advanceDiploma')}}">Advanced Diploma</a></li>
                                            <li><a href="{{route('certificate3')}}">Certificate III</a></li>
                                            <li><a href="{{route('certificate4')}}">Certificate IV</a></li>
                                        </ul><!-- /.submenu -->
                                    </li>
                                    <li><a href="{{route('blogs')}}">Blogs</a></li>
                                    <li><a href="{{route('contact_us')}}">Contact Us</a></li>
                                </ul><!-- /.menu -->
                            </nav><!-- /.mainnav -->  
                        </div><!-- /.nav-wrap -->
                    </div><!-- /.col-md-10 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div> 
    </header>