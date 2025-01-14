@extends('web.layouts.app') 
@section('title') Zahidaz Web & App Development @endsection

@section('content')
<section id="home" class="intro-section mb-5 pb-5">
  <div class="container mb-5">
    <div class="row align-items-center text-white">
      <div class="row align-items-center text-white">
        <!-- START THE CONTENT FOR THE INTRO  -->
        <div class="col-md-6 intros text-start">
          <h1 class="display-2">
            <span class="display-2--intro">Web Services</span>
            <span class="display-2--description lh-base">
              Zahidaz.com is web & app development company provide you hosting services as well
            </span>
          </h1>
          <button type="button" class="rounded-pill btn-rounded">Get in Touch
            <span><i class="fas fa-arrow-right"></i></span>
          </button>
        </div>
        <!-- START THE CONTENT FOR THE VIDEO -->
        <div class="col-md-6 intros text-end">
          <div class="video-box">
            <img src="index/images/arts/intro-section-illustration.png" alt="video illutration" class="img-fluid">
            <a href="#" class="glightbox position-absolute top-50 start-50 translate-middle">
              <span>
                <i class="fas fa-play-circle"></i>
              </span>
              <span class="border-animation border-animation--border-1"></span>
              <span class="border-animation border-animation--border-2"></span>
            </a>
          </div>
        </div>
    </div>
  </div>
</section>

{{-- <section id="campanies" class="campanies">
  <div class="container">
    <div class="row text-center">
      <h4 class="fw-bold lead mb-3">Trusted by campanies like</h4>
      <div class="heading-line mb-5"></div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-lg-2">
        <div class="campanies__logo-box shadow-sm">
          <img src="index/images/campanies/campany-1.png" alt="Campany 1 logo" title="Campany 1 Logo" class="img-fluid">
        </div>
      </div>
      <div class="col-md-4 col-lg-2">
        <div class="campanies__logo-box shadow-sm">
          <img src="index/images/campanies/campany-2.png" alt="Campany 2 logo" title="Campany 2 Logo" class="img-fluid">
        </div>
      </div>
      <div class="col-md-4 col-lg-2">
        <div class="campanies__logo-box shadow-sm">
          <img src="index/images/campanies/campany-3.png" alt="Campany 3 logo" title="Campany 3 Logo" class="img-fluid">
        </div>
      </div>
      <div class="col-md-4 col-lg-2">
        <div class="campanies__logo-box shadow-sm">
          <img src="index/images/campanies/campany-4.png" alt="Campany 4 logo" title="Campany 4 Logo" class="img-fluid">
        </div>
      </div>
      <div class="col-md-4 col-lg-2">
        <div class="campanies__logo-box shadow-sm">
          <img src="index/images/campanies/campany-5.png" alt="Campany 5 logo" title="Campany 5 Logo" class="img-fluid">
        </div>
      </div>
      <div class="col-md-4 col-lg-2">
        <div class="campanies__logo-box shadow-sm">
          <img src="index/images/campanies/campany-6.png" alt="Campany 6 logo" title="Campany 6 Logo" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
</section> --}}

<section id="services" class="services">
  <div class="container">
    <div class="row text-center">
      <h1 class="display-3 fw-bold">Our Services</h1>
      <div class="heading-line mb-1"></div>
    </div>
    <div class="row pt-2 pb-2 mt-0 mb-3">
      <div class="col-md-6 border-right">
        <div class="bg-white p-3">
          <h2 class="fw-bold text-capitalize text-center">
            Our Services Range From Initial Design To Deployment Anywhere Anytime
          </h2>
        </div>
      </div>
      <div class="col-md-6">
        <div class="bg-white p-4 text-start">
          <p class="fw-light">
            Lorem ipsum dolor sit amet consectetur architecto magni, 
            dicta maxime laborum temporibus dolorem esse doloremque illo quas nisi enim molestias. 
            Tempore ducimus molestiae in dolore enim.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
        <div class="services__content">
          <div class="icon d-block fas fa-code"></div>
          <h3 class="display-3--title mt-1">App Developement</h3>
          <p class="lh-lg">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, impedit rem,
             doloremque autem quibusdam blanditiis harum alias hic accusantium 
             maxime atque ratione magni repellat?
          </p>
          <button type="button" class="rounded-pill btn-rounded border-primary">Learn more
            <span><i class="fas fa-arrow-right"></i></span>
          </button>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end">
        <div class="services__pic">
          <img src="index/images/services/service-1.png" alt="marketing illustration" class="img-fluid">
        </div>
      </div>
    </div>
    <!-- START THE WEB DEVELOPMENT CONTENT  -->
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-start">
        <div class="services__pic">
          <img src="index/images/services/service-2.png" alt="web development illustration" class="img-fluid">
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
        <div class="services__content">
          <div class="icon d-block fas fa-code"></div>
          <h3 class="display-3--title mt-1">web development</h3>
          <p class="lh-lg">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, impedit rem,
             doloremque autem quibusdam blanditiis harum alias hic accusantium 
             maxime atque ratione magni repellat?
          </p>
          <button type="button" class="rounded-pill btn-rounded border-primary">Learn more
            <span><i class="fas fa-arrow-right"></i></span>
          </button>
        </div>
      </div>
    </div>
    <!-- START THE CLOUD HOSTING CONTENT  -->
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
        <div class="services__content">
          <div class="icon d-block fas fa-cloud-upload-alt"></div>
          <h3 class="display-3--title mt-1">cloud hosting</h3>
          <p class="lh-lg">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, impedit rem,
             doloremque autem quibusdam blanditiis harum alias hic accusantium 
             maxime atque ratione magni repellat?
          </p>
          <button type="button" class="rounded-pill btn-rounded border-primary">Learn more
            <span><i class="fas fa-arrow-right"></i></span>
          </button>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end">
        <div class="services__pic">
          <img src="index/images/services/service-3.png" alt="cloud hosting illustration" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
</section>

<section id="testimonials" class="testimonials">
<div class="container">
  <div class="row text-center text-white">
    <h1 class="display-3 fw-bold">Testimonials</h1>
    <hr style="width: 100px; height: 3px; " class="mx-auto">
    <p class="lead pt-1">what our clients are saying</p>
  </div>

  <div class="row align-items-center">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <!-- CAROUSEL ITEM 1 -->
        <div class="carousel-item active">
          <!-- testimonials card  -->
          <div class="testimonials__card">
            <p class="lh-lg">
              <i class="fas fa-quote-left"></i>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              Placeat aut consequatur illo animi optio exercitationem doloribus eligendi iusto atque repudiandae. Distinctio.
              <i class="fas fa-quote-right"></i>
              <div class="ratings p-1">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </p>
          </div>
          <!-- client picture  -->
          <div class="testimonials__picture">
            <img src="index/images/testimonials/client-1.jpg" alt="client-1 picture" class="rounded-circle img-fluid">
          </div>
          <!-- client name & role  -->
          <div class="testimonials__name">
            <h3>Patrick Muriungi</h3>
            <p class="fw-light">CEO & founder</p>
          </div>
        </div>     
        <!-- CAROUSEL ITEM 2 -->
        <div class="carousel-item">
          <!-- testimonials card  -->
          <div class="testimonials__card">
            <p class="lh-lg">
              <i class="fas fa-quote-left"></i>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              Placeat aut consequatur illo animi optio exercitationem doloribus eligendi iusto atque repudiandae. Distinctio.
              <i class="fas fa-quote-right"></i>
              <div class="ratings p-1">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </p>
          </div>
          <!-- client picture  -->
          <div class="testimonials__picture">
            <img src="index/images/testimonials/client-2.jpg" alt="client-2 picture" class="rounded-circle img-fluid">
          </div>
          <!-- client name & role  -->
          <div class="testimonials__name">
            <h3>Joy Marete</h3>
            <p class="fw-light">Finance Manager</p>
          </div>
        </div>     
        <!-- CAROUSEL ITEM 3 -->
        <div class="carousel-item">
          <!-- testimonials card  -->
          <div class="testimonials__card">
            <p class="lh-lg">
              <i class="fas fa-quote-left"></i>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              Placeat aut consequatur illo animi optio exercitationem doloribus eligendi iusto atque repudiandae. Distinctio.
              <i class="fas fa-quote-right"></i>
              <div class="ratings p-1">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </p>
          </div>
          <!-- client picture  -->
          <div class="testimonials__picture">
            <img src="index/images/testimonials/client-3.jpg" alt="client-3 picture" class="rounded-circle img-fluid">
          </div>
          <!-- client name & role  -->
          <div class="testimonials__name">
            <h3>ClaireBelle Zawadi</h3>
            <p class="fw-light">Global brand manager</p>
          </div>
        </div>     
        <!-- CAROUSEL ITEM 4 -->
        <div class="carousel-item">
          <!-- testimonials card  -->
          <div class="testimonials__card">
            <p class="lh-lg">
              <i class="fas fa-quote-left"></i>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              Placeat aut consequatur illo animi optio exercitationem doloribus eligendi iusto atque repudiandae. Distinctio.
              <i class="fas fa-quote-right"></i>
              <div class="ratings p-1">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </p>
          </div>
          <!-- client picture  -->
          <div class="testimonials__picture">
            <img src="index/images/testimonials/client-4.jpg" alt="client-4 picture" class="rounded-circle img-fluid">
          </div>
          <!-- client name & role  -->
          <div class="testimonials__name">
            <h3>Uhuru Kenyatta</h3>
            <p class="fw-light">C.E.O & Founder</p>
          </div>
        </div>     
      </div>
      <div class="text-center">
        <button class="btn btn-outline-light fas fa-long-arrow-alt-left" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      </button>
      <button class="btn btn-outline-light fas fa-long-arrow-alt-right" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      </button>
      </div>
    </div>
  </div>
</div>
</section>
<section id="faq" class="faq">
<div class="container">
  <div class="row text-center">
    <h1 class="display-3 fw-bold text-uppercase">faq</h1>
    <div class="heading-line"></div>
    <p class="lead">frequently asked questions, get knowledge befere hand</p>
  </div>
  <div class="row mt-5">
    <div class="col-md-12">
      <div class="accordion" id="accordionExample">
        <!-- ACCORDION ITEM 1 -->
        <div class="accordion-item shadow mb-3">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              What are the main features?
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
          </div>
        </div>
           <!-- ACCORDION ITEM 2 -->
        <div class="accordion-item shadow mb-3">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              do i have to pay again after trial
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
          </div>
        </div>
           <!-- ACCORDION ITEM 3 -->
        <div class="accordion-item shadow mb-3">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          How can I get started after trial?
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
          </div>
        </div>
           <!-- ACCORDION ITEM 4 -->
        <div class="accordion-item shadow mb-3">
          <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              Can I be refunded if am not satisfied?
            </button>
          </h2>
          <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<section id="portfolio" class="portfolio">
<div class="container">
  <div class="row text-center mt-5">
    <h1 class="display-3 fw-bold text-capitalize">Latest work</h1>
    <div class="heading-line"></div>
    <p class="lead">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint porro temporibus distinctio.
    </p>
  </div>
  <!-- FILTER BUTTONS  -->
  <div class="row mt-5 mb-4 g-3 text-center">
    <div class="col-md-12">
      <button class="btn btn-outline-primary" type="button">All</button>
      <button class="btn btn-outline-primary" type="button">websites</button>
      <button class="btn btn-outline-primary" type="button">design</button>
      <button class="btn btn-outline-primary" type="button">mockup</button>
    </div>
  </div>

  <!-- START THE PORTFOLIO ITEMS  -->
  <div class="row">
    <div class="col-lg-4 col-md-6">
      <div class="portfolio-box shadow">
        <img src="index/images/portfolio/portfolio-1.jpg" alt="portfolio 1 image" title="portfolio 1 picture" class="img-fluid">
        <div class="portfolio-info">
          <div class="caption">
            <h4>project name goes here 1</h4>
            <p>category project</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="portfolio-box shadow">
        <img src="index/images/portfolio/portfolio-2.jpg" alt="portfolio 2 image" title="portfolio 2 picture" class="img-fluid">
        <div class="portfolio-info">
          <div class="caption">
            <h4>project name goes here 2</h4>
            <p>category project</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="portfolio-box shadow">
        <img src="index/images/portfolio/portfolio-3.jpg" alt="portfolio 3 image" title="portfolio 3 picture" class="img-fluid">
        <div class="portfolio-info">
          <div class="caption">
            <h4>project name goes here 3</h4>
            <p>category project</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="portfolio-box shadow">
        <img src="index/images/portfolio/portfolio-4.jpg" alt="portfolio 4 image" title="portfolio 4 picture" class="img-fluid">
        <div class="portfolio-info">
          <div class="caption">
            <h4>project name goes here 4</h4>
            <p>category project</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="portfolio-box shadow">
        <img src="index/images/portfolio/portfolio-5.jpg" alt="portfolio 5 image" title="portfolio 5 picture" class="img-fluid">
        <div class="portfolio-info">
          <div class="caption">
            <h4>project name goes here 5</h4>
            <p>category project</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="portfolio-box shadow">
        <img src="index/images/portfolio/portfolio-6.jpg" alt="portfolio 6 image" title="portfolio 6 picture" class="img-fluid">
        <div class="portfolio-info">
          <div class="caption">
            <h4>project name goes here 6</h4>
            <p>category project</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="portfolio-box shadow">
        <img src="index/images/portfolio/portfolio-7.jpg" alt="portfolio 7 image" title="portfolio 7 picture" class="img-fluid">
        <div class="portfolio-info">
          <div class="caption">
            <h4>project name goes here 7</h4>
            <p>category project</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="portfolio-box shadow">
        <img src="index/images/portfolio/portfolio-8.jpg" alt="portfolio 8 image" title="portfolio 8 picture" class="img-fluid">
        <div class="portfolio-info">
          <div class="caption">
            <h4>project name goes here 8</h4>
            <p>category project</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="portfolio-box shadow">
        <img src="index/images/portfolio/portfolio-9.jpg" alt="portfolio 9 image" title="portfolio 9 picture" class="img-fluid">
        <div class="portfolio-info">
          <div class="caption">
            <h4>project name goes here 9</h4>
            <p>category project</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<section id="contact" class="get-started">
<div class="container">
  <div class="row text-center">
    <h1 class="display-3 fw-bold text-capitalize">Get started</h1>
    <div class="heading-line"></div>
    <p class="lh-lg">
      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero illum architecto modi.
    </p>
  </div>

  <div class="row text-white">
    <div class="col-12 col-lg-6 gradient shadow p-3">
      <div class="cta-info w-100">
        <h4 class="display-4 fw-bold">100% Satisfaction Guaranteed</h4>
        <p class="lh-lg">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam alias optio minima, tempore architecto sint ipsam dolore tempora facere laboriosam corrupti!
        </p>
        <h3 class="display-3--brief">What will be the next step?</h3>
        <ul class="cta-info__list">
          <li>We'll prepare the proposal.</li>
          <li>we'll discuss it together.</li>
          <li>let's start the discussion.</li>
        </ul>
      </div>
    </div>
    <div class="col-12 col-lg-6 bg-white shadow p-3">
      <div class="form w-100 pb-2">
        <h4 class="display-3--title mb-5">start your project</h4>
        <form action="#" class="row">
          <div class="col-lg-6 col-md mb-3">
            <input type="text" placeholder="First Name" id="inputFirstName" class="shadow form-control form-control-lg">
          </div>
          <div class="col-lg-6 col-md mb-3">
            <input type="text" placeholder="Last Name" id="inputLastName" class="shadow form-control form-control-lg">
          </div>
          <div class="col-lg-12 mb-3">
            <input type="email" placeholder="email address" id="inputEmail" class="shadow form-control form-control-lg">
          </div>
          <div class="col-lg-12 mb-3">
            <textarea name="message" placeholder="message" id="message" rows="8" class="shadow form-control form-control-lg"></textarea>
          </div>
          <div class="text-center d-grid mt-1">
            <button type="button" class="btn btn-primary rounded-pill pt-3 pb-3">
              submit
              <i class="fas fa-paper-plane"></i>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</section>
@endsection
