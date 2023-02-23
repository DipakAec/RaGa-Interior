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
    opacity: 0.5;
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
    padding-top:4%;
}


.fade {
  animation-name: fade;
  animation-duration: 2s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>


<?php $page='home'; include 'header.php'; ?>

<div class="layout">

<main class="main">


<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    
    <img src="img/slider1.jpg" style="width:100%">
    <div class="hero-text">
        <h3>EUROPEAN-STYLE INTERIORS</h3>
        <p>We offer world-class interior solutions<br> that transform your living space into a world of comfort and luxury.<br> Bring the European standards of living to your kitchen.
        </p>
    </div>
  </div>

  <div class="mySlides fade">
   
    <img src="img/slider2.jpg" style="width:100%">
    <div class="hero-text">
        <h3>STATE-OF-THE-ART FINISHING</h3>
        <p>We manufacture every single piece of hardware in our own facilities,<br> ensuring a high-end finish and stunning looks. Pair that with mechanised fittings <br>- we leave your space in a condition more pristine than we found it.</p>
    </div>
  </div>

  <div class="mySlides fade">
   
    <img src="img/slider3.jpg" style="width:100%">
    <div class="hero-text">
    <h3>EUROPEAN-STYLE INTERIORS</h3>
        <p>We offer world-class interior solutions<br> that transform your living space into a world of comfort and luxury.<br> Bring the European standards of living to your kitchen.
        </p>
    </div>
  </div>

  <div class="mySlides fade">
   
    <img src="img/slider4.jpg" style="width:100%">
    <div class="hero-text">
    <h3>STATE-OF-THE-ART FINISHING</h3>
        <p>We manufacture every single piece of hardware in our own facilities,<br> ensuring a high-end finish and stunning looks. Pair that with mechanised fittings <br>- we leave your space in a condition more pristine than we found it.</p>
    
    </div>
  </div>

  <div class="mySlides fade">
   
    <img src="img/slider5.jpg" style="width:100%">
    <div class="hero-text"><h3>EUROPEAN-STYLE INTERIORS</h3>
        <p>We offer world-class interior solutions<br> that transform your living space into a world of comfort and luxury.<br> Bring the European standards of living to your kitchen.
        </p></div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
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
  setTimeout(showSlides, 3000); // Change image every 3 seconds
}
</script>