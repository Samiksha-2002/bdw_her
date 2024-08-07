@php
  use App\Helper\DbCache;
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png' ) }}">
  <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
  <!-- Include Dropzone.js -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
  <title>@yield('title') | {{ env('APP_NAME') }}</title>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!--text editer-->
  {{-- <script src="https://cdn.tiny.cloud/1/8ytmvzyas1i0vuwt5fjmokt2ej5zkmiby3e7n2or6srw44tr/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> --}}
  {{-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> --}}
  <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
  <!-- Nucleo Icons -->
  
  <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" integrity="sha512-rqQltXRuHxtPWhktpAZxLHUVJ3Eombn3hvk9PHjV/N5DMUYnzKPC1i3ub0mEXgFzsaZNeJcoE0YHq0j/GFsdGg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('assets/css/soft-ui-dashboard.css?v=1.0.3') }}" rel="stylesheet" />
  
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css"href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  
<style>
/* select 2 height modificaiton */
.select2-selection__rendered {
  line-height: 40px !important;
}
.select2-container .select2-selection--single {
  height: 40px !important;
}
.select2-selection__arrow {
  height: 40px !important;
}
.select2-container--default .select2-selection--single{border-radius: 0.5rem !important}
.select2-container--default .select2-selection--single, .select2-dropdown{
  border-color: #d2d6da !important;
}

.adjust-inline-button{
  padding-top: 11px; padding-bottom: 11px; margin-top:26px;
}

.tox-notifications-container {display: none;}

html, body{height: 100%;}
/* helper */
.rounded-lg{border-radius:20px !important}
.rounded-10px{border-radius: 10px}
.rounded-15px{border-radius: 15px}
.rounded-b-15px{border-bottom-left-radius: 15px; border-bottom-right-radius: 15px}
.fn-10px{font-size: 10px}
.bg-block{background-color: #FAA0A0;}
.text-block{background-color: #FAA0A0;}

/* start toast css bugs fix */
#toast-container > div {opacity: 1;}
.toast {font-size: initial !important;border: initial !important;backdrop-filter: blur(0) !important;}
.toast-success {background-color: #51A351 !important;}
.toast-error {background-color: #BD362F !important;}
.toast-info {background-color: #2F96B4 !important;}
.toast-warning {background-color: #F89406 !important;}
/* end toast css bugs fix */


.nav-task .nav-link{color:white !important}
.nav-task .nav-link.active{color:black !important}

/* overwritten */
.nav-link .fa{color: #000000;}
.nav-link.active .fa{color: #E0CDAB;}
.nav-link.active .nav-link-text{color: #9A7A41;}

.nav-item .fa {font-size: 16px !important; padding: 8px}
.btn{margin-bottom: unset !important;}

</style>
</head>

<body class="g-sidenav-show bg-gray-100">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-bbb border-radius-xl my-3 fixed-start ms-3 bg-white" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="{{url('/')}}" target="_blank">
        {{-- <img src="{{ asset('assets/img/logo-ct.png' ) }}" class="navbar-brand-img h-100" alt="main_logo"> --}}
        <img src="{{ Setting::get('logo') }}" height="35px">
        <span class="ms-1 font-weight-bold">{{ Setting::get('website_name') }}</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto max-height-vh-100 h-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link @if(request()->route()->getName() == 'admin.dashboard') active @endif" href="{{ route('admin.dashboard')}}">
            <div class="icon icon-shape icon-sm p-0 shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-box"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(in_array(request()->route()->getName(), ['admin.users', 'admin.user.create', 'admin.user.edit', 'admin.user.show'])) active @endif" href="{{ route('admin.users')}}">
            <div class="icon icon-shape icon-sm p-0 shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-users"></i>
            </div>
            <span class="nav-link-text ms-1">Users</span>
          </a>
        </li>
        <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle @if(in_array(request()->route()->getName(), ['admin.video', 'admin.video.create', 'admin.video.edit'])) active @endif" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <div class="icon icon-shape icon-sm p-0 shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa fa-video-camera"></i>
          </div>
          <span class="nav-link-text ms-1">Sparks</span>
        </a>
        <ul class="dropdown-menu"> 
          <li><a class="dropdown-item" href="#">Feed</a></li>
          <li><a class="dropdown-item" href="#">Shop</a></li>
          <li><a class="dropdown-item" href="#">Action Center</a>
            <ul class="action-center-dropdown">
              <li><a class="dropdown-item" href="{{ route('admin.category') }}">Tags</a></li>
              <li><a class="dropdown-item" href="{{ route('admin.video') }}">Media Video</a></li>
            </ul>
          </li>
          <li><a class="dropdown-item" href="#">Courses</a></li>
          <li><a class="dropdown-item" href="#">BDW Approval</a>
            <ul class="action-center-dropdown">
              <li><a class="dropdown-item" href="#">Categories</a></li>
              <li><a class="dropdown-item" href="#">Products</a></li>
            </ul>
          </li>
          </ul>
        </li> 
        <li class="nav-item">
          <a class="nav-link @if(in_array(request()->route()->getName(), ['admin.question.option', 'admin.question.create', 'admin.question.edit'])) active @endif" href="{{ route('admin.question.option')}}">
            <div class="icon icon-shape icon-sm p-0 shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-question"></i>
            </div>
            <span class="nav-link-text ms-1">Mindset Questions</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(request()->route()->getName() == 'admin.settings') active @endif" href="{{ route('admin.settings')}}">
            <div class="icon icon-shape icon-sm p-0 shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-cog"></i>
            </div>
            <span class="nav-link-text ms-1">Settings</span>
          </a>
        </li>
        
      </ul>
    </div>
  </aside> 
  <main class="main-content position-relative max-height-vh-100 h-100 pt-1 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl mt-12px bg-white border-bbb sticky-top-" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <div class="float-start me-2">
            @yield('title-align-button')
          </div>
          <h6 class="font-weight-bolder mb-0 mt-1 float-start">@yield('title')</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            {{-- <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div> --}}
          </div>
          <ul class="navbar-nav justify-content-end">
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center p-3">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <!--li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="{{-- route('auth.login')--}}" class="nav-link text-body p-0" >
                <i class="fa fa-user cursor-pointer"></i>
              </a>
            </li-->
            <li class="nav-item dropdown pe-2 m-2 d-flex align-items-center">
              <a href="{{ route('auth.logout')}}" class="nav-link text-danger p-0">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid pt-3">
      {{-- <div class="font-weight-bolder h6 mb-0">@yield('title')</div> --}}
      @yield('content')
    </div>

    {{-- @if(session('success'))
        <div class="alert alert-success notification">
            {{ session('success') }}
        </div>
    @endif --}}
    {{--<footer class="footer pb-3 position-absolute bottom-0">
      zahidaz.com
    </footer>--}}
  </main>
   
  <!-- Load Popper.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
  <!-- Load Bootstrap -->
  <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>

  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('assets/js/soft-ui-dashboard.min.js?v=1.0.3') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>
  {{-- <link href="vendor/select2/dist/css/select2.min.css" rel="stylesheet" />
  <script src="vendor/select2/dist/js/select2.min.js"></script> --}}
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    
    $(document).ready(function() {
      $('select').select2({width: '100%'});
      $('#assignEmployees').select2({width: '100%'});


      // delete confirmation
      $(document).on('click', '.delete', function() {
        _this = $(this);
        Swal.fire({
          title: "Are you sure?",
          text: "You won't be able to revert this!",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Yes, delete it!"
        }).then((result) => {
          if (result.isConfirmed) {
            // submit form
            _this.closest('form').submit();
          }
        });
      });
    }); 

    // tinymce.init({
    //   selector: 'textarea',
    //   plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
    //   toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    // });
    $(document).ready(function () {
      $('.editor').each(function () {
        CKEDITOR.replace($(this).attr('id'));
      });
    });
    $(document).on('click', '.dropdown-menu a', function(e) {
      e.stopPropagation();
    });
  </script>

  <script>
    @if(Session::has('message'))
      toastr.options =
      {
        "closeButton" : true,
        "progressBar" : true
      }
      toastr.success("{{ session('message') }}");
    @elseif(Session::has('success'))
      toastr.options =
      {
        "closeButton" : true,
        "progressBar" : true
      }
      toastr.success("{{ session('success') }}");
    @elseif(Session::has('error'))
      toastr.options =
      {
        "closeButton" : true,
        "progressBar" : true,
      }
      toastr.error("{{ session('error') }}");
    @elseif($errors->any())
      toastr.options =
      {
        "closeButton" : true,
        "progressBar" : true,
      }
      toastr.error("{!! implode('', $errors->all('<div>:message</div>')) !!}");
      
    @elseif(Session::has('info'))
      toastr.options =
      {
        "closeButton" : true,
        "progressBar" : true
      }
      toastr.info("{{ session('info') }}");
    @elseif(Session::has('warning'))
      toastr.options =
      {
        "closeButton" : true,
        "progressBar" : true
      }
      toastr.warning("{{ session('warning') }}");
    @endif
  </script>
   
  @yield('scripts')
</body>

</html>