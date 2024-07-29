<div class="slideshow-container" style="margin-top:200px">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="<?php echo get_theme_file_uri('/assets/css/software.jpg') ?>" style="width:100%" alt="img1">
    <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/css/apps.webp" style="width:100%" alt="img2">
    <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/css/ios.png" style="width:100%" alt="img3">
    <div class="text">Caption Three</div>
</div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div>