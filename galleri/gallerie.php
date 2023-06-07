<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Galerie</title>
	<link rel="icon" href="../image/io.png">
	<!-- Font awesome icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!--Bootstrap Icons-->
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css">

	<link rel="stylesheet" href="Billingue.css">
</head>
<body>
 <!-- nav bar -->
 <div class="overlay"></div>
  <?php require_once("../!isp/header.php") ?>
  <br>
  <br>
  <br>
  <br>

	<div class="lookbook-gallery">
		<div class="lookbook-grid" role="region">
		  <figure class="model mode">
			<video  preload="auto" autoplay="" loop="" muted="" playsinline="" class="img" src="./img/groupe/vid1.mp4" style="visibility: visible; "></video>
			<figcaption class="model--caption">
			  <h3 class="Gallery Billingue">Voyage </h3>
			  <p>Tourristique SIBY.<p>
			</figcaption>
		  </figure>
		  <figure class="model">
			<img class="ima" src="img/groupe/ph1.jpg" />
			<figcaption class="model--caption">
			  <h3 class="model-hed">Student</h3>
			  <p>ISPATEC/Billingue<p>
			</figcaption>
		  </figure>
		  <figure class="model">
			<img class="ima" src="img/groupe/1.jpg" />
			 <figcaption class="model--caption">
			  <h3 class="model-hed">Etudiant/PROF</h3>
			  <p>Moment  Pause.<p>
			</figcaption>
		  </figure>
		  
		  <figure class="model">
			<img class="ima" src="img/groupe/WhatsApp10.jpg" />
			<figcaption class="model--caption">
			  <h3 class="model-hed">Joie</h3>
			  <p>Vivre chez nous Groupe Moment<p>
			</figcaption>
		  </figure>
		  
		  <figure class="model">
			<img class="ima" src="img/groupe/ph8.jpg" />
			 <figcaption class="model--caption">
			  <h3 class="model-hed">Boys</h3>
			  <p>Tourristique SIBY<p>
			</figcaption>
		  </figure>
	  
		  <figure class="model">
			<img class=ima src="img/groupe/direc.jpg" />
			<figcaption class="model--caption">
			  <h3 class="model-hed">Directeur</h3>
			  <p>Shotting Photo SIBY<p>
			</figcaption>
		  </figure>
		  
		  <figure class="model kl">
			<img class=imh src="img/groupe/WhatsApp47.jpg" />
			<figcaption class="model--caption">
			  <h3 class="model-hed">Avant </h3>
			  <p>Depart Tourristique SIBY<p>
			</figcaption>
		  </figure>
		  
		  <figure class="model">
			<img class=ima src="img/groupe/ph4.jpg" />
			 <figcaption class="model--caption">
			  <h3 class="model-hed">Moment</h3>
			  <p>Tourristique SIBY Shotting Photo<p>
			</figcaption>
		  </figure>
		  
		  <figure class="model">
			<img class=ima src="img/groupe/classe.jpg" />
			<figcaption class="model--caption">
			  <h3 class="model-hed">Student</h3>
			  <p>GLBillingue School<p>
			</figcaption>
		  </figure>
		  
		  <figure class="model">
			<img class=ima src="img/groupe/siby.jpg" />
			 <figcaption class="model--caption">
			  <h3 class="model-hed">Tourristique</h3>
			  <p>MomentGroupe SIBY<p>
			</figcaption>
		  </figure>
		  <figure class="model mdl">
			<img class=ima src="img/groupe/ph6.jpg" />
			 <figcaption class="model--caption">
			  <h3 class="model-hed">Student</h3>
			  <p>Moment Groupe SIBY<p>
			</figcaption>
		  </figure>
		  <figure class="model">
			<img class=ima src="img/groupe/ph7.jpg" />
			 <figcaption class="model--caption">
			  <h3 class="model-hed">Student</h3>
			  <p>Moment Groupe SIBY<p>
			</figcaption>
		  </figure>
		  <figure class="model km">
			<img class=ima src="img/groupe/e4.jpg" />
			 <figcaption class="model--caption">
			  <h3 class="model-hed">Student</h3>
			  <p>Photo d'élèves<p>
			</figcaption>
		  </figure>
	
		   
		</div>
	  </div>
	  <button id="scroll-to-top"><i class="bi bi-arrow-up-circle-fill"></i></button>


	  <?php require_once("../!isp/footer.php") ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
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