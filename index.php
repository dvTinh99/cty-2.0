<?php
include('./layout/header.php')
?>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="14000">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <video autoplay loop muted playsinline controls="controls" controls preload="auto" disablePictureInPicture="true">
                <source type="video/mp4" src="../videos/3.mp4">
                <p>This is fallback content to display for user agents that do not support the video tag.</p>
            </video>
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">Tiên phong và đổi mới</h5>
                    <h1 class="display-1 text-white mb-md-4 animated zoomIn">Giải pháp Digital Marketing toàn diện</h1>
                    <a href="quote.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Dự án</a>
                    <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Liên hệ</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <video autoplay loop muted playsinline controls="controls" controls preload="auto" disablePictureInPicture="true">
                <source type="video/mp4" src="../videos/4.mp4">
                <p>This is fallback content to display for user agents that do not support the video tag.</p>
            </video>
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">Tiên phong và đổi mới</h5>
                    <h1 class="display-1 text-white mb-md-4 animated zoomIn">Giải pháp Digital Marketing toàn diện</h1>
                    <a href="quote.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Dự án</a>
                    <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Liên hệ</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <video autoplay loop muted playsinline controls="controls" controls preload="auto" disablePictureInPicture="true">
                <source type="video/mp4" src="../videos/4.mp4">
                <p>This is fallback content to display for user agents that do not support the video tag.</p>
            </video>
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">Tiên phong và đổi mới</h5>
                    <h1 class="display-1 text-white mb-md-4 animated zoomIn">Giải pháp Digital Marketing toàn diện</h1>
                    <a href="quote.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Dự án</a>
                    <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Liên hệ</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./img/about.jpg" class="d-block w-100" alt="./img/about.jpg">
    </div>
    <div class="carousel-item">
      <img src="./img/about.jpg" class="d-block w-100" alt="./img/about.jpg">
    </div>
    <div class="carousel-item">
      <img src="./img/about.jpg" class="d-block w-100" alt="./img/about.jpg">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> -->
</div>
</div>
<!-- Navbar & Carousel End -->
<?php
include('./layout/index_content.php')
?>

<?php
include('./layout/footer.php')
?>