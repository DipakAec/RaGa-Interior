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

/* Next & previous buttons
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}
 */
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
  position: absolute;
  width: 100%;
  text-align: left;
}
.hero-text p{
    font-size:20px;
    padding-top:3%;
    padding-right:2%;
}
.ml12{
  font-weight: 300;
  font-size: 2em;
  text-transform: uppercase;
  letter-spacing: 0.1em;
}

.ml12.letter {
  display: inline-block;
  line-height: 1em;
}

.ml13 {
  font-weight: 300;
  font-size: 2em;
  text-transform: uppercase;
  letter-spacing: 0.1em;
}

.ml13.letter {
  display: inline-block;
  line-height: 1em;
}

.ml14 {
  font-weight: 300;
  font-size: 2em;
  text-transform: uppercase;
  letter-spacing: 0.1em;
}

.ml14.letter {
  display: inline-block;
  line-height: 1em;
}

.ml15 {
  font-weight: 300;
  font-size: 2em;
  text-transform: uppercase;
  letter-spacing: 0.1em;
}

.ml15.letter {
  display: inline-block;
  line-height: 1em;
}

.ml16 {
  font-weight: 300;
  font-size: 2em;
  text-transform: uppercase;
  letter-spacing: 0.1em;
}

.ml16.letter {
  display: inline-block;
  line-height: 1em;
}

.ml17 {
  padding-right: 6%;
  font-size: 1.9em;
  text-transform: uppercase;
  letter-spacing: 0.3em;
  font-weight: 400;
}

.ml17 .letter {
  display: inline-block;
  line-height: 0.8em;
}
.slide {
  animation-name:slide;
  animation-duration: 6s;
}

@keyframes slide {
  from {left:0%}
  to {right:100%}
}
</style>


<?php $page='home'; include 'header.php'; ?>

<div class="layout">

<main class="main">


<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides slide">
    
    <img src="img/slider1.jpg" style="width:100%">
    <div class="hero-text">
        <h3 class="ml12" >EUROPEAN-STYLE <div>INTERIORS</div> </h3>
        <p class="">We offer world-class interior solutions<br> that transform your living space into a world of comfort and luxury.<br> Bring the European standards of living to your kitchen.
        </p>
    </div>
  </div>

  <div class="mySlides slide">
    <img src="img/slider2.jpg" style="width:100%">
    <div class="hero-text">
        <h3 class="ml13">STATE-OF-THE-ART</br> FINISHING</h3>
        <p class='ml17'>We manufacture every single piece of hardware in our own facilities,<br> ensuring a high-end finish and stunning looks. Pair that with mechanised fittings <br>- we leave your space in a condition more pristine than we found it.</p>
      </div>
  </div>

  <div class="mySlides slide">
   
    <img src="img/slider3.jpg" style="width:100%">
    <div class="hero-text">
    <h3 class="ml14" >EUROPEAN-STYLE </br> INTERIORS</h3>
        <p>We offer world-class interior solutions<br> that transform your living space into a world of comfort and luxury.<br> Bring the European standards of living to your kitchen.
        </p>
    </div>
  </div>

  <div class="mySlides slide">
   
    <img src="img/slider4.jpg" style="width:100%">
    <div class="hero-text">
    <h3 class="ml15" >STATE-OF-THE-ART </br> FINISHING</h3>
        <p>We manufacture every single piece of hardware in our own facilities,<br> ensuring a high-end finish and stunning looks. Pair that with mechanised fittings <br>- we leave your space in a condition more pristine than we found it.</p>
    
    </div>
  </div>

  <div class="mySlides slide">
   
    <img src="img/slider5.jpg" style="width:100%">
    <div class="hero-text">
      <h3 class="ml16" >EUROPEAN-STYLE <br> INTERIORS</h3>
        <p>We offer world-class interior solutions <br> that transform your living space into a world of comfort and luxury.<br> Bring the European standards of living to your kitchen.
        </p>
      </div>
  </div>

</div>
<br>


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
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 6000); // Change image every 4 seconds
}

var textWrapper = document.querySelector('.ml12');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml12 .letter', 
    translateX: [40,0],
    translateZ: 0,
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 1200,
    delay: (el, i) => 50 + 30 * i
  }).add({
    targets: '.ml12 .letter',
    translateX: [0,-30],
    opacity: [1,0],
    easing: "easeInExpo",
    duration: 1100,
    delay: (el, i) => 10 + 30 * i
  });

  

  var textWrapper = document.querySelector('.ml13');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml13 .letter',
    translateX: [40,0],
    translateZ: 0,
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 1200,
    delay: (el, i) => 500 + 30 * i
  }).add({
    targets: '.ml13 .letter',
    translateX: [0,-30],
    opacity: [1,0],
    easing: "easeInExpo",
    duration: 1100,
    delay: (el, i) => 100 + 30 * i
  });

  var textWrapper = document.querySelector('.ml14');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml14 .letter',
    translateX: [40,0],
    translateZ: 0,
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 1200,
    delay: (el, i) => 500 + 30 * i
  }).add({
    targets: '.ml14 .letter',
    translateX: [0,-30],
    opacity: [1,0],
    easing: "easeInExpo",
    duration: 1100,
    delay: (el, i) => 100 + 30 * i
  });

  var textWrapper = document.querySelector('.ml15');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml15 .letter',
    translateX: [40,0],
    translateZ: 0,
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 1200,
    delay: (el, i) => 500 + 30 * i
  }).add({
    targets: '.ml15 .letter',
    translateX: [0,-30],
    opacity: [1,0],
    easing: "easeInExpo",
    duration: 1100,
    delay: (el, i) => 100 + 30 * i
  });

  var textWrapper = document.querySelector('.ml16');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml16 .letter',
    translateX: [40,0],
    translateZ: 0,
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 1200,
    delay: (el, i) => 500 + 30 * i
  }).add({
    targets: '.ml16 .letter',
    translateX: [0,-30],
    opacity: [1,0],
    easing: "easeInExpo",
    duration: 1100,
    delay: (el, i) => 100 + 30 * i
  });

  // Animation for paragraph

  // Wrap every letter in a span
var textWrapper = document.querySelector('.ml17');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml17 .letter',
    translateY: [100,0],
    translateZ: 0,
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 1400,
    delay: (el, i) => 300 + 30 * i
  }).add({
    targets: '.ml17 .letter',
    translateY: [0,-100],
    opacity: [1,0],
    easing: "easeInExpo",
    duration: 1200,
    delay: (el, i) => 100 + 30 * i
  });
 
</script>