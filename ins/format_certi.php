<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formation certifiante</title>
    <link rel="icon" href="../image/io.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!--Bootstrap Icons-->

<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="format_certi.css">
</head>
<body>
<div class="overlay"></div>
  <?php require_once("../!isp/header.php") ?>


  <h2 class="elementor-heading-title elementor-size-default">Formation certifiante</h2>
  <section class="pop">
  <div class="cookie-card">
    <span class="title"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
</svg> Annonce !</span>
    <p class="description">Nous proposons également des formations qualifiantes et des certifications d'une durée allant de 6 mois à 1 ans d'année académique. </p>
    
</div>
<img src="undraw_working_re_ddwy.svg" alt="">
</section>
<br>
<br>
<h3 class="gdlr-core-title-item-title gdlr-core-skin-title mb-2 ju ">Formation certifiante</h3>

<br>
<div class="row row-cols-1 row-cols-md-3 g-0 ">
    <div class="col ko">
      <div class="card">
        <img src="wor.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Office Word</h5>
          <div class="d-flex justify-content-center">
         <a href="https://docs.google.com/forms/d/e/1FAIpQLSdGncZsp-GPfAfE-ME6i3w0NyiwbsCdzzV9wkO8dIufEuD0jg/viewform?usp=send_form"><button type="button" class="btn">Inscription</button></a>
     
      
        </div>
        </div>
      </div>
    </div>
   
    <div class="col ko">
      <div class="card">
        <img src="exc.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Office Excel</h5>
          <div class="d-flex justify-content-center">
         <a href="https://docs.google.com/forms/d/e/1FAIpQLSdGncZsp-GPfAfE-ME6i3w0NyiwbsCdzzV9wkO8dIufEuD0jg/viewform?usp=send_form"><button type="button" class="btn">Inscription</button></a>
     
      
        </div>
        </div>
      </div>
    </div>
    <div class="col ko">
      <div class="card">
        <img src="po.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Office Power-point</h5>
          <div class="d-flex justify-content-center">
         <a href="https://docs.google.com/forms/d/e/1FAIpQLSdGncZsp-GPfAfE-ME6i3w0NyiwbsCdzzV9wkO8dIufEuD0jg/viewform?usp=send_form"><button type="button" class="btn">Inscription</button></a>
     
      
        </div>
        </div>
      </div>
    </div>
    </div>
  <br>
    <button id="scroll-to-top"><i class="bi bi-arrow-up-circle-fill"></i></button>

<?php require_once("../!isp/footer.php") ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"crossorigin="anonymous"></script>
<script>
  let overlay = document.querySelector('.overlay');
  let navbarToggler = document.querySelector('.navbar-toggler');

  burger.addEventListener('click', function () {
    overlay.style.display = (overlay.style.display === 'block') ? 'none' : 'block';
  });

</script>
<script>
const scrollToTopBtn = document.getElementById("scroll-to-top");

window.onscroll = function () {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    scrollToTopBtn.style.display = "block";
  } else {
    scrollToTopBtn.style.display = "none";
  }
};

scrollToTopBtn.addEventListener("click", function () {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
});


</script>
</body>
</html>