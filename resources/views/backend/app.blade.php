<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Vendors Min CSS -->
        <link rel="stylesheet" href="{{asset('backend/assets/css/vendors.min.css')}}">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{asset('backend/assets/css/style.css')}}">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{asset('backend/assets/css/responsive.css')}}">

        <title>@yield('title','Dashboard')</title>

        <link rel="icon" type="image/png" href="{{asset('backend/assets/img/favicon.png')}}">
        <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
        @stack('css')
    </head>

    <body>

        <!-- Start Sidemenu Area -->
        @include('backend.helper.sidebar')
        <!-- End Sidemenu Area -->

        <!-- Start Main Content Wrapper Area -->
        <div class="main-content d-flex flex-column">

            <!-- Top Navbar Area -->
            @include('backend.helper.navbar')
            <!-- End Top Navbar Area -->

         @yield('content')
			
			<div class="flex-grow-1"></div>

            <!-- Start Footer End -->
            <footer class="footer-area">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <p>Copyright <i class='bx bx-copyright'></i> 2020 <a href="#">Fiva</a>. All rights reserved</p>
                    </div>

                    <div class="col-lg-6 col-sm-6 col-md-6 text-right">
                        <p>Designed by ❤️ <a href="https://envytheme.com/" target="_blank">EnvyTheme</a></p>
                    </div>
                </div>
            </footer>
            <!-- End Footer End -->

        </div>
        <!-- End Main Content Wrapper Area -->
        
        
        <!-- Vendors Min JS -->
        <script src="{{asset('backend/assets/js/vendors.min.js')}}"></script>



        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
       
       <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>      
      
       {!! Toastr::message() !!}
      
      
      
      <script>
       @if($errors->any())
              @foreach($errors->all() as $error)
                    toastr.error('{{ $error }}','Error',{
                        closeButton:true,
                        progressBar:true,
                     });
              @endforeach
          @endif
      </script>
      

        @stack('js')
      
        <!-- Custom JS -->
        <script src="{{asset('backend/assets/js/custom.js')}}"></script>
    </body>
</html>