
 <style>

#slider {
  position: relative;
  width:100%;
  overflow: hidden;
  box-shadow: 0 0 30px rgba(0, 0, 0, 0.3);
}
#slider ul {
  position: relative;
  list-style: none;
  padding: 0;
  margin: 0;
  transition: all 750ms ease;
  left: 0;
}
#slider ul li {
  position: relative;
  width:100%;
  height: 100%;
 
  float: left;
}
#slider ul li img{
  width: 100%;
}
 
#slider #prev, #slider #next {
  width: 50px;
  line-height: 50px;
  border-radius: 50%;
  font-size: 2rem;
  text-shadow: 0 0 20px rgba(0, 0, 0, 0.6);
  text-align: center;
  color: white;
  text-decoration: none;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  transition: all 150ms ease;
}
#slider #prev:hover, #slider #next:hover {
  background-color: rgba(0, 0, 0, 0.5);
  text-shadow: 0;
}
#slider #prev {
  left: 10px;
}
#slider #next {
  right: 10px;
}
  </style>


<?php $page='home'; include 'header.php'; ?>

<div class="layout">

<main class="main">
<!--<div class="arrow-left"></div>
<div class="arrow-right"></div>-->


<div id="slider">
      <ul id="slideWrap"> 
        <li><img src="img/slider1.jpg" alt=""></li>
        <li><img src="img/slider2.jpg" alt=""></li>
        <li><img src="img/slider3.jpg" alt=""></li>
        <li><img src="img/slider4.jpg" alt=""></li>
        <li><img src="img/slider5.jpg" alt=""></li>
      </ul>
    <a id="prev" href="#">&#8810;</a>
    <a id="next" href="#">&#8811;</a>
  </div>

</main>
<div class="content">

<section id="about" class="about section">
<div class="container">
<header class="section-header">
<h2 class="section-title">About <span class="text-primary">Raga Interiors</span></h2>
<strong class="fade-title-left">About</strong>
</header>
<div class="section-content">
<div class="row-base row">
<div class="entry">
<h2 class="section-title">WE BUILD YOUR DREAM KITCHEN<span class="text-primary">.</span></h2>
<div class="col-about-info">
<p style="padding:10px; margin:10px;  text-align: center;font-size:20px;">We have been designing interiors for the past decade with special attention to the latest global design trends. 
    We provide customised design and modern accessories & appliances at a pocket-friendly price. 
    Our designs are at par with the global standards in terms of comfort, functional ability, and style statement.</p>

</div>

<div class="col-base col-service col-sm-6 col-md-4 wow fadeInUp">
<div class="service-item">
<img alt="" src="img/img-icon/icon-architecture.png">
<h4>DESIGN</h4>
</div>
</div>

<div class="col-base col-service col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.3s">
<div class="service-item">
<img alt="" src="img/img-icon/icon-interiors.png">
<h4>Manufacturing</h4>
</div>
</div>

<div class="clearfix visible-sm"></div>
<div class="clearfix visible-sm"></div>
<div class="col-base col-service col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.5s">
<div class="service-item">
<img alt="" src="img/img-icon/icon-planing.png">
<h4>Fitting</h4>
</div>
</div>

</div>
</div>
</div>
</section>



<section class="projects section">
<div class="container">
<h2 class="section-title">Our <span class="text-primary">projects</span></h2>
</div>
<div class="section-content">
<div class="projects-carousel js-projects-carousel js-projects-gallery">
<div class="project project-light">
<a href="img/gallery/17.jpg" title="Exclusive Counter">
<figure>
<img alt="" src="img/gallery/17.jpg">
<figcaption>
<div class="project-zoom"></div>
</figcaption>
</figure>
</a>
</div>
<div class="project project-light">
<a href="img/gallery/16.jpg" title="Upper Cabinet Area">
<figure>
<img alt="" src="img/gallery/16.jpg">
<figcaption>
<div class="project-zoom"></div>
</figcaption>
</figure>
</a>
</div>
<div class="project">
<a href="img/gallery/18.jpg" title="Director Room">
<figure>
<img alt="" src="img/gallery/18.jpg">
<figcaption>
<div class="project-zoom"></div>
</figcaption>
</figure>
</a>
</div>
<div class="project">
<a href="img/gallery/20.jpg" title="Executive Room">
<figure>
<img alt="" src="img/gallery/20.jpg">
<figcaption>
<div class="project-zoom"></div>
</figcaption>
</figure>
</a>
</div>
<div class="project">
<a href="img/gallery/19.jpg" title="Conference Table">
<figure>
<img alt="" src="img/gallery/19.jpg">
<figcaption>
<div class="project-zoom"></div>
</figcaption>
</figure>
</a>
</div>
<div class="project">
<a href="img/gallery/15.jpg" title="Partitions Waiting area">
<figure>
<img alt="" src="img/gallery/15.jpg">
<figcaption>
<div class="project-zoom"></div>
</figcaption>
</figure>
</a>
</div>
<div class="project">
<a href="img/gallery/21.jpg" title="Work station">
<figure>
<img alt="" src="img/gallery/21.jpg">
<figcaption>
<div class="project-zoom"></div>
</figcaption>
</figure>
</a>
</div>

</div>
</div>
</section>

<section class="experience section">
<div class="container">
<div class="text-parallax" data-stellar-background-ratio="0.85" style="background-image: url('img/bg/text-1.jpg');">
<div class="text-parallax-content">7</div>
</div>
<h4 class="experience-info wow fadeInRight"><span class="text-primary">Years of successful work</span><br> in the market</h4>
</div>
</section>
<?php include 'footer.php'; ?>

<script>
    var responsiveSlider = function() {

var slider = document.getElementById("slider");
var sliderWidth = slider.offsetWidth;
var slideList = document.getElementById("slideWrap");
var count = 1;
var items = slideList.querySelectorAll("li").length;
var prev = document.getElementById("prev");
var next = document.getElementById("next");

window.addEventListener('resize', function() {
  sliderWidth = slider.offsetWidth;
});

var prevSlide = function() {
  if(count > 1) {
    count = count - 2;
    slideList.style.left = "-" + count * sliderWidth + "px";
    count++;
  }
  else if(count = 1) {
    count = items - 1;
    slideList.style.left = "-" + count * sliderWidth + "px";
    count++;
  }
};

var nextSlide = function() {
  if(count < items) {
    slideList.style.left = "-" + count * sliderWidth + "px";
    count++;
  }
  else if(count = items) {
    slideList.style.left = "0px";
    count = 1;
  }
};

next.addEventListener("click", function() {
  nextSlide();
});

prev.addEventListener("click", function() {
  prevSlide();
});

setInterval(function() {
  nextSlide()
}, 5000);

};

window.onload = function() {
responsiveSlider();  
}
  </script>