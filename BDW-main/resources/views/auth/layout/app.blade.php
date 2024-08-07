<!DOCTYPE html>
<html lang="en">

<head> 
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
  <title>@yield('title') | {{ env('APP_NAME') }}</title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js') }}" crossorigin="anonymous"></script>
  <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" crossorigin="anonymous" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('assets/css/soft-ui-dashboard.css?v=1.0.3') }}" rel="stylesheet" />
  <style>
    .rounded-15px{border-radius: 15px !important}
    .shadow-c{box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.1);}
    .form-control{border: 1px solid rgba(0, 0, 0, 0.06);}

/* start toast css bugs fix */
#toast-container > div {
  opacity: 1;
}
.toast {
  font-size: initial !important;
  border: initial !important;
  backdrop-filter: blur(0) !important;
}
.toast-success {
  background-color: #51A351 !important;
}
.toast-error {
  background-color: #BD362F !important;
}
.toast-info {
  background-color: #2F96B4 !important;
}
.toast-warning {
  background-color: #F89406 !important;
}
/* end toast css bugs fix */

  </style>
</head>


<body class="">
  
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        @yield('content')
      </div>
    </section>
  </main>

  <!--Dashborad-->
  <!---end--->
  <!--navbar-->
   
  <!--end-->
  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
   
  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <!--   Core JS Files   -->
  <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    {{-- <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script> --}}
  <script>
    // var win = navigator.platform.indexOf('Win') > -1;
    // if (win && document.querySelector('#sidenav-scrollbar')) {
    //   var options = {
    //     damping: '0.5'
    //   }
    //   Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    // }
  </script>
  <!-- Github buttons -->
  {{-- <script async defer src="https://buttons.github.io/buttons.js"></script> --}}
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  {{-- <script src="{{ asset('assets/js/soft-ui-dashboard.min.js?v=1.0.3') }}"></script> --}}

  <script>
    @if(Session::has('message'))
      toastr.options =
      {
        "closeButton" : true,
        "progressBar" : true
      }
      toastr.success("{{ session('message') }}");
    @endif

    @if(Session::has('error'))
      toastr.options =
      {
        "closeButton" : true,
        "progressBar" : true,
      }
      toastr.error("{{ session('error') }}");
    @endif

    @if(Session::has('info'))
      toastr.options =
      {
        "closeButton" : true,
        "progressBar" : true
      }
      toastr.info("{{ session('info') }}");
    @endif

    @if(Session::has('warning'))
      toastr.options =
      {
        "closeButton" : true,
        "progressBar" : true
      }
      toastr.warning("{{ session('warning') }}");
    @endif
  </script>
</body>

</html>