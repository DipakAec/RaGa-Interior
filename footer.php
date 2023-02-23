
<section class="contacts section">
<div class="container">
<header class="section-header">
<!-- <a href="#top" class="brand js-target-scroll raga-logo">
<img src="img/Raga-logo.png" class="logo">
</a> -->
<strong class="fade-title-right">contacts</strong>
</header>
<div class="section-content">
<div class="row-base row">
<div class="col-address col-base col-md-4">
<a href="tel:98305 01091">+91 98305 01091</a><br>
<a href="mailto:info@ragakitchen.com" class="__cf_email__" data-cfemail="">sayhelloraga@gmail.com</a><br>
Haute Street Corporate Park, 
Wing - B, Suite No.- 1004, 
10th Floor, Above Ojas Banquet,
86A, Topsia Road South, 
Kolkata - 700046
</div>
<div class="col-base  col-md-8">
<form class="js-ajax-form" onsubmit="mail(); reset(); return false;">
<div class="row-field row">
<div class="col-field col-sm-6 col-md-6">
<div class="form-group">
<input type="text" class="form-control" name="name" id="name" required placeholder="Name">
</div>
<div class="form-group">
<input type="email" class="form-control" name="email" id="email" required placeholder="Email *">
</div>
</div>
<div class="col-field col-sm-6 col-md-6">
<div class="form-group">
<input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone">
</div>
<div class="form-group">
<input type="text" class="form-control" name="company" id="company" placeholder="Company">
</div>
</div>
<div class="col-field col-sm-12 col-md-6">
<div class="form-group">
<textarea class="form-control" name="address" id="address" placeholder="Address"></textarea>
</div>
</div>
<div class="col-field col-sm-12 col-md-6">
<div class="form-group">
<textarea class="form-control" name="message" id="message" placeholder="Message"></textarea>
</div>
</div>
</div>
<div class="form-submit text-right"><button type="submit" class="btn btn-shadow-2 wow swing">Send</button></div>
</form>
</div>
</div>
</div>
</div>
</section>
<footer id="footer" class="footer">
<div class="container">
<div class="row-base row">
<div class="col-base text-left-md col-md-4">
<a href="index.php" class="brand js-target-scroll raga-logo">
<img src="img/Raga-logo.png" class="logo">
</a>
</div>

<div class="text-center-md footer_copyright col-md-4">
© Raga Interiors 2022. All Rights Reserved. <br>Powered By: <a href="https://mindbrewstudio.com/" target="_blank">Mind Brew Studio</a> 
</div>

<div class="text-center-md footer_copyright col-md-4">
<!--<a href="" class="author-link">-->
<!--Powered By: <a href="https://mindbrewstudio.com/" target="_blank">Mindbrew Studio</a>-->
<!--</a>-->
</div>
</div>
</div>
</footer>

<div class="page-lines">
<div class="container">
<div class="col-line col-xs-4">
<div class="line"></div>
</div>
<div class="col-line col-xs-4">
<div class="line"></div>
</div>
<div class="col-line col-xs-4">
<div class="line"></div>
<div class="line"></div>
</div>
</div>
</div>
</div>
</div>

<script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/owl.carousel.min.js"></script>

<script src="js/rev-slider/jquery.themepunch.tools.min.js"></script>
<script src="js/rev-slider/jquery.themepunch.revolution.min.js"></script>

<script src="js/rev-slider/revolution.extension.actions.min.js"></script>
<script src="js/rev-slider/revolution.extension.carousel.min.js"></script>
<script src="js/rev-slider/revolution.extension.kenburn.min.js"></script>
<script src="js/rev-slider/revolution.extension.layeranimation.min.js"></script>
<script src="js/rev-slider/revolution.extension.migration.min.js"></script>
<script src="js/rev-slider/revolution.extension.navigation.min.js"></script>
<script src="js/rev-slider/revolution.extension.parallax.min.js"></script>
<script src="js/rev-slider/revolution.extension.slideanims.min.js"></script>
<script src="js/rev-slider/revolution.extension.video.min.js"></script>
<script src="js/interface.js"></script>
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script>
    function mail(){
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let phone = document.getElementById("phone").value;
    let company = document.getElementById("company").value;
    let address = document.getElementById("address").value;
    let message = document.getElementById("message").value;
    
    Email.send({
    Host : "smtp.elasticemail.com",
    Username : "ragawebserver@gmail.com",
    Password : "477B09DE0B358D3370C681A48FB19F9D74A8",
    To : 'sayhelloraga@gmail.com',
    From : "ragawebserver@gmail.com",
    Subject : "Mail from contact from",
    Body : "Name" + name + "<br>"+ "Email" + email + "<br>"+ "Phone" + phone + "<br>"+ "company" + company + "<br>"+ "Address" + address + "<br>"+ "Message" + message
}).then(
  message => alert(message)
);
    }
</script>

</body>
</html>