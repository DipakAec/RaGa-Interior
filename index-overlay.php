<style>
/* Slideshow container */
.slideshow-container {
  width: 100%;
  height:100vh;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
  
}

.mySlides img{
    opacity: 0.4;
}


.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 3%;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.hero-text {
  color: #f2f2f2;
  bottom: 30%;
  left:40%;
  right:25%;
  position:absolute;
  width:50%;
  text-align: left;
  background-color:rgba(0, 0, 0, 0.5);
  
}
.hero-text h3{
    margin-left: 25px;
    padding-bottom:1%;
    line-height: 1.6;
    
}
.hero-text p{
    margin-left: 25px;
    font-size:20px;
    padding-right:2%;
   
}



.slide {
  animation-name:slide;
  animation-duration: 6s;
}

@keyframes slide {
  from {left:0%}
  to {right:100%}
}


@media only screen and (max-width: 600px) {
  .slideshow-container {
  width: 100%;
 
}

.mySlides img{
    height: 100vh;
}
.hero-text {
  width:90%;
  bottom: 15%;
  left: 20%;
  padding-right: 5%;
  align-items: center;
  text-align: left;
  background-color:rgba(0, 0, 0, 0.5);
}

.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 85%;
  width: auto;
  margin-top: -22px;
  padding: 3%;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 3px 3px 3px 3px;
  user-select: none;
}

/* Position the "next button" to the right */
.prev{
  left:40%;
}
.next {
  right: 40%;
  border-radius: 3px 3px 3px 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}


}
</style>


<?php $page='home'; include 'header.php'; ?>

<div class="layout">

<main class="main">
<div id="slide">
  <div class="slideshow-container">
    <div class="mySlides slide"> <img src="img/slider1.jpg" style= "width:100%">
        <div class="hero-text" class="slide-subtitle tp-caption tp-resizeme">
            <h3 class="" >EUROPEAN-STYLE <br>INTERIORS </h3>
            <p class="">We offer world-class interior solutions<br> that transform your living space into a world of comfort and luxury.<br> Bring the European standards of living to your kitchen.
            </p>
        </div>
    </div>
    <div class="mySlides slide"> <img src="img/slider2.jpg" style="width:100%"> 
        <div class="hero-text">
            <h3 class="">STATE-OF-THE- ART</br> FINISHING</h3>
            <p>We manufacture every single piece of hardware in our own facilities,<br> ensuring a high-end finish and stunning looks. Pair that with mechanised <br> fittings .we leave your space in a condition more pristine than we found it.</p>
          </div>
    </div>
    <div class="mySlides slide"> <img src="img/slider3.jpg" style="width:100%">
        <div class="hero-text">
            <h3 class="" >EUROPEAN-STYLE <br> INTERIORS </h3>
            <p class="">We offer world-class interior solutions<br> that transform your living space into a world of comfort and luxury.<br> Bring the European standards of living to your kitchen.
            </p>
        </div>
    </div>
    <div class="mySlides slide"> <img src="img/slider4.jpg" style="width:100%"> 
        <div class="hero-text">
            <h3 class="">STATE-OF-THE-ART</br> FINISHING</h3>
            <p>We manufacture every single piece of hardware in our own facilities,<br> ensuring a high-end finish and stunning looks. Pair that with mechanised <br> fittings  .we leave your space in a condition more pristine than we found it.</p>
          </div>
    </div>
    <div class="mySlides slide"> <img src="img/slider5.jpg" style="width:100%"> 
        <div class="hero-text">
            <h3 class="" >EUROPEAN-STYLE <br>INTERIORS </h3>
            <p class="">We offer world-class interior solutions<br> that transform your living space into a world of comfort and luxury.<br> Bring the European standards of living to your kitchen.
            </p>
        </div>
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a> <a class="next" onclick="plusSlides(1)">&#10095;</a> </div>
  <br>
  <div style="text-align:center"> 
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
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
<h2 class="section-title">WE BUILD YOUR DREAM KITCHEN. </h2>
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
<a href="img/gallery/Full/1.jpg" title=" ">
<figure>
<img alt="" src="img/gallery/30.jpg">
<figcaption>
<div class="project-zoom"></div>
</figcaption>
</figure>
</a>
</div>
<div class="project project-light">
<a href="img/gallery/Full/20.jpg" title=" ">
<figure>
<img alt="" src="img/gallery/16.jpg">
<figcaption>
<div class="project-zoom"></div>
</figcaption>
</figure>
</a>
</div>
<div class="project">
<a href="img/gallery/18.jpg" title=" " >
<figure>
<img alt="" src="img/gallery/18.jpg">
<figcaption>
<div class="project-zoom"></div>
</figcaption>
</figure>
</a>
</div>
<div class="project">
<a href="img/gallery/Full/11.jpg" title=" ">
<figure>
<img alt="" src="img/gallery/20.jpg">
<figcaption>
<div class="project-zoom"></div>
</figcaption>
</figure>
</a>
</div>
<div class="project">
<a href="img/gallery/Full/12.jpg" title=" ">
<figure>
<img alt="" src="img/gallery/21.jpg">
<figcaption>
<div class="project-zoom"></div>
</figcaption>
</figure>
</a>
</div>
<div class="project">
<a href="img/gallery/Full/8.jpg" title=" ">
<figure>
<img alt="" src="img/gallery/26.jpg">
<figcaption>
<div class="project-zoom"></div>
</figcaption>
</figure>
</a>
</div>
<div class="project">
<a href="img/gallery/Full/2.jpg" title=" ">
<figure>
<img alt="" src="img/gallery/28.jpg">
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
var slideIndex = 0;
showSlides();
var slides,dots;

function showSlides() {
    var i;
    slides = document.getElementsByClassName("mySlides");
    dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 3000); // Change image every 3 seconds
}

function plusSlides(position) {
    slideIndex +=position;
    if (slideIndex> slides.length) {slideIndex = 1}
    else if(slideIndex<1){slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
}

function currentSlide(index) {
    if (index> slides.length) {index = 1}
    else if(index<1){index = slides.length}
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[index-1].style.display = "block";  
    dots[index-1].className += " active";
}
</script>



