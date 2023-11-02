<?php
include('./layout/header.php')
?>

<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="w-100" src="img/carousel-1.jpg" alt="Image">
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
            <img class="w-100" src="img/carousel-2.jpg" alt="Image">
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
    <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
</div>
<!-- Navbar & Carousel End -->
<?php
include('./layout/index_content.php')
?>

<?php
include('./layout/footer.php')
?>