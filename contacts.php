<?php $page='contacts'; include 'header.php'; ?>

<div class="layout">

<main class="main main-inner main-contacts bg-contacts" style="background-image:url('img/bg/RAGA-Kitchen17.jpg');" data-stellar-background-ratio="0.6">
<div class="container">
<header class="main-header">
<h1>Contacts</h1>
</header>
</div>

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
</main>
<div class="content">
<section class="contact-details container mb-5">
    <header class="section-header">
<h2 class="section-title Franchise-title">Franchise <span class="text-primary">Enquiry</span></h2>
</header>
    <div class="row-base row">
<div class="col-address col-base col-md-4">
<p>We invite businessmen and businesswomen to join hands in our mission and grow together. Please submit this form and we will get in touch with you.
</p>
</div>
<div class="col-base  col-md-8">
<form class="js-ajax-form" onsubmit="fmail(); reset(); return false;">
<div class="row-field row">
<div class="col-field col-sm-6 col-md-4">
<div class="form-group">
<input type="text" class="form-control" id="name" name="name" placeholder="Name">
</div>
<div class="form-group">
<input type="email" class="form-control" id="email" name="email" required placeholder="Email *">
</div>
</div>
<div class="col-field col-sm-6 col-md-4">
<div class="form-group">
<input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone">
</div>
<div class="form-group">
<input type="text" class="form-control" id="city" name="city" placeholder="City">
</div>
</div>
<div class="col-field col-sm-12 col-md-4">
<div class="form-group">
<textarea class="form-control" id="message" name="message" placeholder="Message"></textarea>
</div>
</div>
</div>
<div class="form-submit text-right Franchise"><button class="btn btn-shadow-2 wow swing" type="submit">Send <i class="icon-next"></i></button></div>
</form>
</div>
</div>

</section>

<section class="contact-details container mb-5">
    <header class="section-header">
<h2 class="section-title Franchise-title">Join <span class="text-primary">Our Team</span></h2>
</header>
    <div class="row-base row">
<div class="col-address col-base col-md-4">
<p>
If you share our vision and be a part of our team, we'd love to have you on board. Write to us, upload your CV, and we will get in touch with you.
</p>
</div>
<div class="col-base  col-md-8">
<form class="js-ajax-form" onsubmit="amail(); reset(); return false;">
<div class="row-field row">
<div class="col-field col-sm-6 col-md-4">
<div class="form-group">
<input type="text" class="form-control" id="aname" name="name" placeholder="Name">
</div>
<div class="form-group">
<input type="email" class="form-control" id="aemail" name="email" required placeholder="Email *">
</div>
</div>
<div class="col-field col-sm-6 col-md-4">
<div class="form-group">
<input type="tel" class="form-control" id="aphone" name="phone" placeholder="Phone">
</div>
<div class="form-group">
<input type="text" class="form-control" id="aprofile" name="Desired_Profile" placeholder="Desired Profile">
</div>
</div>
<div class="col-field col-sm-12 col-md-4">
<div class="form-group">
    <label>Upload CV</label>
<input type="file" class="form-control" id="cv" name="Desired_Profile" placeholder="Upload CV">
</div>
</div>
</div>
<div class="form-submit text-right Franchise"><button class="btn btn-shadow-2 wow swing" type="submit">Apply <i class="icon-next"></i></button></div>
</form>
</div>
</div>

</section>

<section class="contact-details">
    
<div class="col-map col-md-7">
<div class="gmap col-md-7">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58964.04461919187!2d88.3799018422297!3d22.532201398414866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a02763655555525%3A0x45a4742794f3b5d0!2sRaga%20Interiors%20-%20Modular%20kitchen%20Appliances!5e0!3m2!1sen!2sin!4v1659381151274!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</div>
<div class="contact-info col-md-5 col-md-offset-7">
<div class="contact-info-content">
<div class="contact-info-title">Contacts</div>
<div class="phone contact-row">
<i class="fa fa-phone"></i>
<div class="contact-body">
<h4>Phone</h4>
<div class="phone-row">+91 98305 01091</div>
</div>
</div>
<div class="contact-row">
<i class="fa fa-envelope"></i>
<div class="contact-body">
<h4>Email</h4>
<!--<div class="contact-content">info@ragakitchen.com</div> -->
<div class="contact-content">sayhelloraga@gmail.com</div>
</div>
</div>
<div class="contact-row">
<i class="fa fa-map-marker"></i>
<div class="contact-body">
<h4>Address</h4>
<div class="contact-content">Haute Street Corporate Park, 
Wing - B, Suite No.- 1004, 
10th Floor, Above Ojas Banquet,
86A, Topsia Road South, 
Kolkata - 700046</div>
</div>
</div>
</div>
</div>
</section>

<?php include 'footer.php'; ?>

<script src="https://smtpjs.com/v3/smtp.js"></script>
<script>
    function fmail(){
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let phone = document.getElementById("phone").value;
    let city = document.getElementById("city").value;
    
    let message = document.getElementById("message").value;
    
    Email.send({
    Host : "smtp.elasticemail.com",
    Username : "ragawebserver@gmail.com",
    Password : "477B09DE0B358D3370C681A48FB19F9D74A8",
    To : 'sayhelloraga@gmail.com',
    From : "ragawebserver@gmail.com",
    Subject : "Mail from FRANCHISE ENQUIRY",
    Body : "Name: " + name + "<br>"+ "Email: " + email + "<br>"+ "Phone: " + phone + "<br>"+ "City: " + city + "<br>"+ "Message: " + message
}).then(
  message => alert(message)
);
    }

    function amail(){
    let aname = document.getElementById("aname").value;
    let aemail = document.getElementById("aemail").value;
    let aphone = document.getElementById("aphone").value;
    let aprofile = document.getElementById("aprofile").value;
    let cv = document.getElementById("cv").value;

    
    
    Email.send({
    Host : "smtp.elasticemail.com",
    Username : "ragawebserver@gmail.com",
    Password : "477B09DE0B358D3370C681A48FB19F9D74A8",
    To : 'sayhelloraga@gmail.com',
    From : "ragawebserver@gmail.com",
    Subject : "Mail from Apply Form",
    Body : "Name: " + aname + "<br>"+ "Email: " + aemail + "<br>"+ "Phone: " + aphone + "<br>"+ "Profile: " + aprofile + "<br>" + "CV: "+ cv
}).then(
  message => alert(message)
);
    }
</script>
