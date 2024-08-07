<?php
use App\Helper\DbCache;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('title') | {{ env('APP_NAME') }} </title>
    <link rel="stylesheet" href="index/assets/css/style.css">
    <link rel="stylesheet" href="index/assets/css/fontawesome.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
      .fs-4rem{font-size:4rem !important}
      .icon-top{
        display: none;
      }
    </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark menu shadow fixed-top">
    <div class="container">
      <a class="navbar-brand" href="">
        <img src="{{ DbCache::setting('header_logo') }}" height="35px" alt="zahidaz logo">
        <span class="fw-bold">{{ DbCache::setting('website_title') }}</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonials</a></li>
          <li class="nav-item"><a class="nav-link" href="https://graphics.zahidaz.com" target="_blank">Graphics</a></li>
          <li class="nav-item"><a class="nav-link text-dark rounded-pill btn-rounded" href="{{ route('auth.login') }}">Login</a></li>
          <!--<li class="nav-item"><a class="nav-link text-dark rounded-pill btn-rounded" href="{{-- route('auth.signup') --}}">Signup</a></li>-->
          {{-- <li class="nav-item"><a class="nav-link" href="#faq">Faq</a></li>
          <li class="nav-item"><a class="nav-link" href="#portfolio">portfolio</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">contact</a> --}}
          </li>
        </ul>
        {{-- <button type="button" class="rounded-pill btn-rounded">
          {{ DbCache::setting('contact_no') }}
          <span>
            <i class="fas fa-phone-alt"></i>
          </span>
        </button> --}}
      </div>
    </div>
  </nav>
  
  @yield('content')

  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
          <div class="contact-box__icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone-call" viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
              <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
              <path d="M15 7a2 2 0 0 1 2 2" />
              <path d="M15 3a6 6 0 0 1 6 6" />
            </svg>
          </div>
          <div class="contact-box__info">
            <a href="#" class="contact-box__info--title">{{ DbCache::setting('contact_no') }}</a>
            <p class="contact-box__info--subtitle"> {{ DbCache::setting('working_hours') }}</p>
          </div>
        </div>  
        <!-- CONTENT FOR EMAIL  -->
        <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
          <div class="contact-box__icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-opened" viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
              <polyline points="3 9 12 15 21 9 12 3 3 9" />
              <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
              <line x1="3" y1="19" x2="9" y2="13" />
              <line x1="15" y1="13" x2="21" y2="19" />
            </svg>
          </div>
          <div class="contact-box__info">
            <a href="#" class="contact-box__info--title">{{ DbCache::setting('contact_email') }}</a>
            <p class="contact-box__info--subtitle">Online support</p>
          </div>
        </div>
        <!-- CONTENT FOR LOCATION  -->
        <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
          <div class="contact-box__icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-2" viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
              <line x1="18" y1="6" x2="18" y2="6.01" />
              <path d="M18 13l-3.5 -5a4 4 0 1 1 7 0l-3.5 5" />
              <polyline points="10.5 4.75 9 4 3 7 3 20 9 17 15 20 21 17 21 15" />
              <line x1="9" y1="4" x2="9" y2="17" />
              <line x1="15" y1="15" x2="15" y2="20" />
            </svg>
          </div>
          <div class="contact-box__info">
            <a href="#" class="contact-box__info--title">{{ DbCache::setting('address_line_1') }}</a>
            <p class="contact-box__info--subtitle">{{ DbCache::setting('address_line_1') }}</p>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-sm" style="background-color: #212121;">
      <div class="container">
        <div class="row py-4 text-center text-white">
          <div class="col-lg-5 col-md-6 mb-4 mb-md-0 text-start">
            Connect with us on social media
          </div>
          <div class="col-lg-7 col-md-6 text-md-end">
            <a href="{{ DbCache::setting('facebook_link') }}"><i class="fab fa-facebook"></i></a>
            <a href="{{ DbCache::setting('twitter_link') }}"><i class="fab fa-twitter"></i></a>
            <a href="{{ DbCache::setting('github_link') }}"><i class="fab fa-github"></i></a>
            <a href="{{ DbCache::setting('linkedin_link') }}"><i class="fab fa-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="container mt-5">
      <div class="row text-white justify-content-center mt-3 pb-3">
        <div class="col-12 col-sm-6- col-lg-6- mx-auto">
          <h5 class="text-capitalize fw-bold">{{ DbCache::setting('website_title') }}</h5>
          <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
          <p class="lh-lg">
            {{ DbCache::setting('footer_desc') }}
          </p>
        </div>
        {{-- <div class="col-12 col-sm-6 col-lg-2 mb-4 mx-auto">
          <h5 class="text-capitalize fw-bold">Products</h5>
          <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
          <ul class="list-inline campany-list">
            <li><a href="#">Lorem ipsum</a></li>
            <li><a href="#">Lorem ipsum</a></li>
            <li><a href="#">Lorem ipsum</a></li>
            <li><a href="#">Lorem ipsum</a></li>
          </ul>
        </div>
        <div class="col-12 col-sm-6 col-lg-2 mb-4 mx-auto">
          <h5 class="text-capitalize fw-bold">useful links</h5>
          <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
          <ul class="list-inline campany-list">
            <li><a href="#"> Your Account</a></li>
            <li><a href="#">Become an Affiliate</a></li>
            <li><a href="#">create an account</a></li>
            <li><a href="#">Help</a></li>
          </ul>
        </div>
        <div class="col-12 col-sm-6 col-lg-2 mb-4 mx-auto">
          <h5 class="text-capitalize fw-bold">contact</h5>
          <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
          <ul class="list-inline campany-list">
            <li><a href="#">Lorem ipsum</a></li>
            <li><a href="#">Lorem ipsum</a></li>
            <li><a href="#">Lorem ipsum</a></li>
            <li><a href="#">Lorem ipsum</a></li>
          </ul>
        </div> --}}
      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">
        <div class="row text-center text-white">
          <div class="col-12">
            <div class="footer-bottom__copyright pt-4">
              &COPY; Copyright 2023 <a href="{{ url('/') }}">zahidaz.com</a><br><br>
            </div>
            <div class="footer-bottom__copyright pb-2">
              <a href="{{ url('/') }}" class="me-3">Home</a>
              <a href="#" class="me-3">Privacy Policy</a>
              <a href="#">Terms n Conditions</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- BACK TO TOP BUTTON  -->
  <a href="#" class="icon-top shadow btn-primary rounded-circle back-to-top">
    <i class="fas fa-chevron-up"></i>
  </a>

  @yield('scripts')
  <script src="index/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>