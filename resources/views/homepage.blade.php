<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - ShipX</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('img/favicon.png') }}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- AOS (Animate on Scroll) -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

<!-- GLightbox -->
<link href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" rel="stylesheet">

<!-- Swiper -->
<link href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-around">

      <a href="index.html" class="logo d-flex align-items-center ">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{asset('img/logo.png')}}" alt="">
        <!-- <h1 class="sitename">ShipX</h1> -->
      </a>
      

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#solutions">Solutions</a></li>
          <li><a href="#blog">Blog</a></li>
          
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      
      
      <a class="cta-btn" href="index.html#about">
    Get Started <i class="bi bi-arrow-up-right"></i>

</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="{{ asset('img/hero-bg.png') }}" alt="" >

      <div class="container d-flex flex-column justifiy-content-center align-items-center">
        <h2 >STAY AHEAD</h2>
        <h2 style="
    text-align: center;
">IN SHIPPING AND LOGISTICS</h2>
        <p style="font-size:14px" class="text-center">Discover key insights and trends to enhance your shipping <br> strategies and stay competitive</p>
        <div class="d-flex mt-4" >
          <a href="#about" class="btn-get-started">Contact us <i class="bi bi-arrow-right"></i></a>
           <a href="#about" class="btn-get-play " >Play video<i class="bi bi-play"></i></a>
        </div>
      </div>
      <div class="floating-company hero-companies">

    <div class="company-badge company-1">
        <img src="{{ asset('img/hero.png') }}" alt="">
        <span>Hero</span>
    </div>

    <div class="company-badge company-2">
        <img src="{{ asset('img/myntra.png') }}" alt="">
        <span>Myntra</span>
    </div>

    <div class="company-badge company-3">
        <img src="{{ asset('img/hm.png') }}" alt="">
        <span>H&M</span>
    </div>

    <div class="company-badge company-4">
        <img src="{{ asset('img/tata.png') }}" alt="">
        <span>Tata</span>
    </div>

    <div class="company-badge company-5">
        <img src="{{ asset('img/lego.png') }}" alt="">
        <span>Lego</span>
    </div>

    <div class="company-badge company-6">
        <img src="{{ asset('img/adidas.png') }}" alt="">
        <span>Adidas</span>
    </div>

</div>


    </section>
    <!-- /Hero Section -->
<div class=" alternate w-100">
   <section class="hero-section container alternate text-white ">
    <div class="row align-items-center   ">
        
        <!-- Left Content -->
        <div class="col-lg-6  col-md-12 hero-text">
            <span class="tag">Testimonal</span>
            <h1>What Do Our Clients Say</h1>
            <p>We make shipping simple with fast booking, real-time tracking, and secure, on-time delivery for every cargo across the globe
            </p>

            <div class="hero-buttons">
                <a href="#about" class="btn btn-get-started mb-3 mb-md-0 ">Contact us <i class="bi bi-arrow-right"></i></a>
           <a href="#about" class=" btn btn-get-play " >
Get Started<i class="bi bi-play"></i></a>
            </div>
        </div>


           
            <div class="col-lg-6 col-md-12 mt-4 mt-md-0 position-relative">

              
                <div class="testimonial-card-big d-flex flex-wrap  justify-content-between shadow">
                    <div class="d-flex flex-row flex-md-column justify-content-between align-item-start ">
                      <div class="d-flex flex-row flex-md-column align-item-start ">
                        <img src="{{ asset('img/face8.jpg') }}" class="rounded-circle " width="30">
                        <div class="px-2 px-md-0">
                            <p class="mb-0 mt-2 text-white testimonial-name">Olivia Jonathan</p>
                            <small class=" testimonial-below-name">CEO at Shipzo</small>
                        </div>
                      </div>
                      <div>
                         <img src="{{ asset('img/testi.png') }}" class=" d-none d-md-flex" width="100%">
                      </div>
                      <div class="d-flex  align-item-center  ">
                        <img src="{{ asset('img/circle.png') }}" class="rounded-circle verified-icon" width="30">
                        <div>
                            
                            <small class=" testimonial-below-name px-2">Verfied</small>
                        </div>
                      </div>

                    </div>

                    
                    <div class="d-flex flex-column  mt-3 mt-md-0 testimonial-inner-card">
                    <div class="stars mb-2">
                        <i class="bi bi-star-fill "></i>
                        <i class="bi bi-star-fill "></i>
                        <i class="bi bi-star-fill "></i>
                        <i class="bi bi-star-fill not"></i>
                        <i class="bi bi-star-fill not"></i>
                    </div>
                    <p class="mt-2">
                        “Ship X has completely changed the way we manage logistics. 
                        The platform is easy to use, and their tracking system keeps us updated at every step.”
                    </p>

                    <div class="d-flex gap-3 mt-3 locations">
                        <span><i class="bi bi-geo-alt"></i> Mumbai</span>
                        <span><i class="bi bi-arrow-right"></i></span>
                        <span><i class="bi bi-geo-alt"></i> Delhi</span>
                    </div>
                    </div>
                </div>
              </div>

                

            

    </div>
</section><!-- /About Section -->
</div>
<section class="hero-section container">
    <div class="row align-items-center  ">
        
        <!-- Left Content -->
        <div class="col-lg-6 col-md-12 hero-text">
            <span class="tag">Tracking</span>
            <h1>Unlock The Full Power of ShipX Logistics</h1>
            <p>Track shipments, monitor vehicles, and analyze data—all from one smart dashboard. 
                Ship X simplifies your logistics with full control and visibility.
            </p>

            <div class="hero-buttons">
                <a href="#about" class="btn btn-get-started mb-2 mb-md-0">Contact us <i class="bi bi-arrow-right"></i></a>
           <a href="#about" class=" btn btn-get-play " >
Get Started<i class="bi bi-play"></i></a>
            </div>
        </div>

        <!-- Right Image -->
        <div class="col-lg-6  col-md-12 hero-r-img position-relative " style="
    padding-left: 60px;">
            <div class="hero-img">
                <img src="{{  asset('img/user-img.png') }}" alt="Hero">
                
                <!-- Overlay card -->
<div class="stats-card">
    <div class="stats-card-content">

        <div class="title-row d-flex align-items-center gap-2">
            <span class="circle-dot"></span>
            <small class="improved-text">Improved Supply Chain</small>
        </div>

        <div class="value-row d-flex align-items-center gap-2">
            <h2 class="value">25K</h2>
            <span class="percent">+50%</span>
            <img src="{{  asset('img/Vector-7758.png') }}" alt="Hero">
        </div>

    </div>
</div>

            </div>
        </div>

    </div>
</section>
<!-- Contact Section -->
<section class="contact-section py-5" style="background-color: #0f1133; color: #fff;">
  <div class="container">
    <div class="row align-items-start">
      
      <!-- Map Column -->
      <div class="col-md-5 mb-4 mb-md-0">
  <div class="map-container">
    <img src="{{ asset('img/map.png') }}" 
         alt="Map" 
         width="100%" 
         style="border-radius:8px;">
  </div>
</div>

      <!-- Contact Form Column -->
      <div class="col-md-7">
        <h4 class="mb-4 send-us-message">Send Us A Message</h4>
       <div id="successMsg" class="alert alert-success mt-3 d-none"></div>

<form id="contactForm" class="needs-validation" novalidate  enctype="multipart/form-data">
    @csrf

    <div class="row mb-3">
        <div class="col-md-6 mb-3 mb-md-0">
            <input type="text" name="full_name" class="form-control @error('full_name') is-invalid @enderror"
                   placeholder="Full Name" value="{{ old('full_name') }}">
            @error('full_name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <input type="text" name="business_name" class="form-control @error('business_name') is-invalid @enderror"
                   placeholder="Business Name" value="{{ old('business_name') }}">
            @error('business_name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    
    <div class="row mb-3">
        <div class="col-md-6 mb-3 mb-md-0">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                   placeholder="Email Id" value="{{ old('email') }}">
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror"
                   placeholder="Phone Number" value="{{ old('phone') }}">
            @error('phone')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>


    <div class="mb-3">
        <input type="file" name="upload_file" class="form-control @error('upload_file') is-invalid @enderror">
        @error('upload_file')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>


    <div class="mb-3">
        <textarea name="message" class="form-control @error('message') is-invalid @enderror" rows="5"
                  placeholder="Your Message">{{ old('message') }}</textarea>
        @error('message')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-success ">Submit</button>

</form>


      </div>

    </div>
  </div>
</section>


    
  </main>

  <footer class="footer-section">
    <div class="container py-5">

        <!-- Top Row -->
        <div class="d-flex justify-content-between align-items-center flex-wrap footer-brand-row">
            <div  class="d-flex justify-content-between align-items-center flex-wrap ">
                <div class="footer-logo d-flex align-items-center gap-2">
                <img src="{{ asset('img/footer-logo.png') }}" width="100%" alt="">
                
            </div>

            <div class="social-links d-flex gap-3 px-1">
                <a href="#"><i class="bi bi-twitter-x"></i></a>
                
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
</div>

            <p class="copyright mb-0 mt-md-0 mt-2">©2025 ShipX. All Rights Reserved.</p>
        </div>

        <hr>

        <!-- Subscribe Input -->
        

        <!-- Links Row -->
        <div class="row mt-5 footer-links-row">
  
  <!-- Subscribe Section -->
  <div class="col-md-6">
    <div class="subscribe-box d-flex flex-column">
      <label class="sub-title">Subscribe to Chainex</label>
      
      <div class="subscribe-form d-flex mt-4">
        <input type="email" placeholder="Enter your Email">
        <button type="button">Sign up</button>
      </div>
    </div>
  </div>

  <!-- Links Section -->
  <div class="col-md-6  mt-md-0 mt-4 d-flex justify-content-between">
    
    <div>
      <h5>Explore</h5>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Solutions</a></li>
        <li><a href="#">Blog</a></li>
      </ul>
    </div>

    <div>
      <h5>Solutions</h5>
      <ul>
        <li><a href="#">Freight Management</a></li>
        <li><a href="#">Order Tracking</a></li>
        <li><a href="#">Carrier Integration</a></li>
        <li><a href="#">Analytics Dashboard</a></li>
      </ul>
    </div>

    <div>
      <h5>Resources</h5>
      <ul>
        <li><a href="#">Help Center</a></li>
        <li><a href="#">FAQs</a></li>
        <li><a href="#">Terms of Service</a></li>
        <li><a href="#">Privacy Policy</a></li>
      </ul>
    </div>

  </div>
</div>

    </div>
</footer>

  
  <!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>



<!-- AOS (Animate on Scroll) -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

<!-- GLightbox -->
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>

<!-- PureCounter -->
<script src="https://cdn.jsdelivr.net/npm/purecounterjs@1.5.0/dist/purecounter_vanilla.js"></script>

<!-- Swiper -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<!-- ImagesLoaded -->
<script src="https://cdn.jsdelivr.net/npm/imagesloaded@5.0.0/imagesloaded.pkgd.min.js"></script>

<!-- Isotope -->
<script src="https://cdn.jsdelivr.net/npm/isotope-layout@3.0.6/dist/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function () {

    $("#contactForm").on('submit', function (e) {
        e.preventDefault();

        let formData = new FormData(this);

        $.ajax({
            url: "{{ route('contact.store') }}", 
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,

            success: function (response) {
                $("#successMsg").removeClass('d-none').text(response.message);

                // Clear form
                $("#contactForm")[0].reset();

                // Remove error messages
                $(".is-invalid").removeClass("is-invalid");
                $(".invalid-feedback").remove();
                 setTimeout(function() {
                    $("#successMsg").addClass('d-none').text('');
                }, 3000);
            },

            error: function (xhr) {
                $(".is-invalid").removeClass("is-invalid");
                $(".invalid-feedback").remove();

                if (xhr.status === 422) {
                    let errors = xhr.responseJSON.errors;

                    $.each(errors, function (key, value) {
                        let input = $(`[name="${key}"]`);
                        input.addClass('is-invalid');
                        input.after(`<div class="invalid-feedback">${value[0]}</div>`);
                    });
                }
            }
        });
    });

});
</script>


    <script>
(function () {
    'use strict'
    const forms = document.querySelectorAll('.needs-validation')

    Array.from(forms).forEach(function (form) {
        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }
            form.classList.add('was-validated')
        }, false)
    })
})();
</script>


</body>

</html>