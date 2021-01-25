<!-- Javascript -->
<script type="text/javascript" src="{{asset('assets/javascript/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/javascript/toastr.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/javascript/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/javascript/jquery.easing.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/javascript/imagesloaded.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/javascript/jquery.isotope.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/javascript/owl.carousel.js')}}"></script> 
<script type="text/javascript" src="{{asset('assets/javascript/jquery.mb.YTPlayer.js')}}"></script>    
<script type="text/javascript" src="{{asset('assets/javascript/jquery-waypoints.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/javascript/jquery.flexslider-min.js')}}"></script> 
<script type="text/javascript" src="{{asset('assets/javascript/jquery.cookie.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/javascript/jquery.fitvids.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/javascript/jquery-validate.js')}}"></script> 
<script type="text/javascript" src="{{asset('assets/javascript/jquery.magnific-popup.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('assets/javascript/parallax.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/javascript/jquery.countdown.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/javascript/jquery.sticky.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/javascript/smoothscroll.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/javascript/main.js')}}"></script>

<!-- Revolution Slider -->
<script type="text/javascript" src="{{asset('assets/javascript/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/javascript/jquery.themepunch.revolution.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/javascript/slider.js')}}"></script>

{{-- additional scripts --}}
@stack('scripts')

<script>
        toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-top-center",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    @if(Session::has('message'))
          var type="{{Session::get('alert-type','info')}}"
          switch(type){
              case 'info':
                   toastr.info("{{ Session::get('message') }}");
                   break;
              case 'success':
                  toastr.success("{{ Session::get('message') }}");
                  break;
              case 'warning':
                 toastr.warning("{{ Session::get('message') }}");
                  break;
              case 'error':
                  toastr.error("{{ Session::get('message') }}");
                  break;
          }
    @endif
</script>