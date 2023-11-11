<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Startup - Startup Website Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Free HTML Templates" name="keywords">
  <meta content="Free HTML Templates" name="description">

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/contract-button.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/custome.css">
  <link rel="stylesheet" href="../css/background.css">
</head>

<body>
  <!-- Spinner Start -->

  <div id="background">
    <!-- <div class="gradient"></div> -->
  </div>

  <div id="spinner" class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner"></div>
  </div>
  <!-- Spinner End -->

  <!-- Navbar & Carousel Start -->
  <div class="container-fluid position-fix p-0">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0" id="top-menu">
      <a href="index.html" class="navbar-brand p-0">
        <img style="width: auto;height: 45px;" id="logo_menu">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
          <a href="index.html" class="nav-item nav-link active">Về chúng tôi</a>
          <a href="about.html" class="nav-item nav-link">Dự án</a>
          <a href="service.html" class="nav-item nav-link">Cơ hội nghề nghiệp</a>
          <a href="service.html" class="nav-item nav-link">Tin tức</a>
          <a href="service.html" class="nav-item nav-link">Liên hệ</a>
          <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tin tức</a>
                        <div class="dropdown-menu m-0">
                            <a href="blog.html" class="dropdown-item">Blog Grid</a>
                            <a href="detail.html" class="dropdown-item">Blog Detail</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Liên hệ</a>
                        <div class="dropdown-menu m-0">
                            <a href="price.html" class="dropdown-item">Pricing Plan</a>
                            <a href="feature.html" class="dropdown-item">Our features</a>
                            <a href="team.html" class="dropdown-item">Team Members</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="quote.html" class="dropdown-item">Free Quote</a>
                        </div>
                    </div> -->
        </div>
        <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
      </div>
    </nav>


    <div id="carouselExampleIndicators" class="carousel" data-bs-ride="carousel" data-bs-interval="15000">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <video autoplay loop muted playsinline controls="controls" controls preload="auto" disablePictureInPicture="true">
            <source type="video/mp4" src="../videos/slide/slide_video_1.mp4">
            <p>This is fallback content to display for user agents that do not support the video tag.</p>
          </video>
          <div class="carousel-caption d-flex flex-column justify-content-center">
            <div class="p-5" style="max-width: 900px;">
              <h5 class="text-white text-uppercase mb-3 animated slideInDown"></h5>
              <!-- <h1 class="display-1 text-white mb-md-4 animated zoomIn">TECHNAM <br >GROUP</h1> -->
              <!-- <a href="quote.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Xem chi tiết</a> -->
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <video autoplay loop muted playsinline controls="controls" controls preload="auto" disablePictureInPicture="true">
            <source type="video/mp4" src="../videos/slide/slide_video_2.mp4">
            <p>This is fallback content to display for user agents that do not support the video tag.</p>
          </video>
          <div class="carousel-caption d-flex flex-column justify-content-center">
            <div class="p-5" style="max-width: 900px;">
              <h5 class="text-white text-uppercase mb-3 animated slideInDown">TIÊN PHONG - ĐỐI MỚI - SÁNG TẠO</h5>
              <h1 class="display-1 text-white mb-md-4 animated zoomIn">TECHNAM <br > MARKETING</h1>
              <a href="quote.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Xem chi tiết</a>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <video autoplay loop muted playsinline controls="controls" controls preload="auto" disablePictureInPicture="true">
            <source type="video/mp4" src="../videos/slide/slide_video_3.mp4">
            <p>This is fallback content to display for user agents that do not support the video tag.</p>
          </video>
          <div class="carousel-caption d-flex flex-column justify-content-center">
            <div class="p-5" style="max-width: 900px;">
              <h5 class="text-white text-uppercase mb-3 animated slideInDown">NĂNG ĐỘNG - TRẺ TRUNG - SÁNG TẠO</h5>
              <h1 class="display-1 text-white mb-md-4 animated zoomIn">TECHNAM <br >MEDIA</h1>
              <a href="quote.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Xem chi tiết</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  </div>
  <!-- Navbar & Carousel End -->
  <?php
  include('./layout/index_content.php')
  ?>

  <?php
  include('./layout/footer.php')
  ?>