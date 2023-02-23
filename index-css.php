
<style>
     * {
 	padding: 0;
 	margin: 0;
 	box-sizing: border-box;
 }
 .box {
 	display: flex;
 	align-items: flex-start;
 	background: #fff;
 	height: 100vh;
 	overflow: hidden;
 	position: relative;
 }
 .box .single-box img {
 	position: absolute;
 	width: 100%;
 	height: auto;
 	background-color: rgba(0, 0, 0, 0.3);
 	-webkit-backface-visibility: hidden;
 	backface-visibility: hidden;
    transform: translate(0px,0px)
 	-webkit-animation: animate 10s infinite;
 	animation: animate 15s infinite;
 }
 .box .single-box:nth-child(5) img {
    width:100%;
 	-webkit-animation-delay: 0s;
 	animation-delay: 0s;
 }
 .box .single-box:nth-child(4) img {
    width:100%;
 	-webkit-animation-delay: 3s;
 	animation-delay: 3s;
 }
 .box .single-box:nth-child(3) img {
    width:100%;
 	-webkit-animation-delay: 6s;
 	animation-delay: 6s;
 }
 .box .single-box:nth-child(2) img {
    width:100%;
 	-webkit-animation-delay: 9s;
 	animation-delay: 9s;
 }
 .box .single-box:nth-child(1) img {
    width:100%;
 	-webkit-animation-delay: 12s;
 	animation-delay: 12s;
 }
 @keyframes animate {
 	25% {
 		opacity: 1;
 		transform: scale(1) rotate(0);
 	}
 	40% {
 		opacity: 0;
 	}
 }
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
    padding-top:5%;
}
</style>

<?php $page='home'; include 'header.php'; ?>

<div class="layout">

<main class="main">
<!--<div class="arrow-left"></div>
<div class="arrow-right"></div>-->


<div class="wrapper box">
		<div class="single-box">
			<img alt="" src="img/slider1.jpg">
			<div class="hero-text">
				<h3>EUROPEAN-STYLE INTERIORS</h3>
				<p>We offer world-class interior solutions<br> that transform your living space into a world of comfort and luxury.<br> Bring the European standards of living to your kitchen.
				</p>
    		</div>
		</div>

		<div class="single-box">
			<img alt="" src="img/slider2.jpg">
			<div class="hero-text">
        		<h3>STATE-OF-THE-ART FINISHING</h3>
        		<p>We manufacture every single piece of hardware in our own facilities,<br> ensuring a high-end finish and stunning looks. Pair that with mechanised fittings <br>- we leave your space in a condition more pristine than we found it.</p>
    		</div>
		</div>
		<div class="single-box">
			<img alt="" src="img/slider3.jpg">
			<div class="hero-text">
				<h3>EUROPEAN-STYLE INTERIORS</h3>
				<p>We offer world-class interior solutions<br> that transform your living space into a world of comfort and luxury.<br> Bring the European standards of living to your kitchen.
				</p>
    		</div>
		</div>
		<div class="single-box">
			<img alt="" src="img/slider4.jpg">
			<div class="hero-text">
        		<h3>STATE-OF-THE-ART FINISHING</h3>
        		<p>We manufacture every single piece of hardware in our own facilities,<br> ensuring a high-end finish and stunning looks. Pair that with mechanised fittings <br>- we leave your space in a condition more pristine than we found it.</p>
    		</div>
		</div>
        <div class="single-box">
			<img alt="" src="img/slider5.jpg">
			<div class="hero-text">
				<h3>EUROPEAN-STYLE INTERIORS</h3>
				<p>We offer world-class interior solutions<br> that transform your living space into a world of comfort and luxury.<br> Bring the European standards of living to your kitchen.
				</p>
    		</div>
		</div>
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
<a href="img/gallery/28.jpg" title="Work station">
<figure>
<img alt="" src="img/gallery/Full/2.jpg">
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

