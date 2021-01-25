@extends('layouts.app')

@section('content')
    <!-- Page title -->
    <div class="page-title parallax parallax1">
      <div class="overlay"></div>
      <div class="container">
          <div class="row">
              <div class="col-md-12">                    
                  <div class="page-title-heading">
                      <h1 class="title">Blogs</h1>
                      <div class="breadcrumbs">
                          <ul>
                              <li><a href="{{route('home')}}">Home</a></li>
                              <li>Blogs</li>
                          </ul>                   
                      </div>
                  </div>
              </div>
          </div>
      </div>                 
  </div>

  <!-- Blog fullwidth -->
  <section class="main-content blog-fullwidth">
      <div class="wrap-blog-fullwidth">
          <div class="flat-grid margin20px clearfix">
              <div class="row">
                @isset($blogs)
                    @each('pages.blogList', $blogs, 'blog', 'components.empty')
                @endisset
              </div>
          </div>                   
      </div>
      {{-- <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="blog-pagination">
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
                  </div>
              </div>
          </div>
      </div> --}}

      @isset($blogs)
        {{ $blogs->links() }}
      @endisset
  </section>
@endsection