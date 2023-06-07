<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>A propos</title>
  <link rel="icon" href="../image/io.png">
  <!-- Font awesome icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!--Bootstrap Icons-->
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css">


  <!--Custom CSS-->
  <link rel="stylesheet" href="./about.css">

</head>

<body>
  <!-- nav bar -->
  <div class="overlay"></div>
  <?php require_once("../!isp/header.php") ?>



  <section class="about">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 ">

          <div class="main">
            <h1>A ISPACTEC nous sommes: <div class="roller">
                <span id="rolltext">Professionelle<br />
                  Ponctuelle<br />
                  Pationné<br />
              </div>
            </h1>
            <img style="width: 100%;" src="p2.jpg" alt="">

          </div>


        </div>
        <div class="col-md-8">
          <div class="about-content">


            <h2>Qui sommes nous</h2>
            <p>L'Université ISPATEC a commencé il y a quelque année avec une idée simple mais révolutionnaire :
              l'université devrait être accessible à tous. Cet esprit guide toujours nos actions aujourd'hui.</p>
            <br>
            <p>Notre politique de 20% de théorie et 80% de pratique nous différencie clairement de nos concurrents.
              Cette approche pratique nous permet de former des leaders de demain qui sont préparés à relever les défis
              du monde professionnel. Nous sommes convaincus que la pratique est la clé de la réussite, car elle permet
              aux apprenants de développer des compétences concrètes qui peuvent être appliquées dans des situations
              réelles.
              <br>
            <p> Nous sommes fiers de notre équipe de personnel compétent qui accompagne nos apprenants tout au long de
              leur parcours de formation. Notre équipe est composée d'experts dans leur domaine qui apportent une
              expérience pratique et des connaissances approfondies à chaque session de formation.</p>
            <br>
            <p>
              Notre objectif est de développer des leaders de demain capables de faire face aux défis les plus complexes
              du monde des affaires. En leur fournissant une formation pratique et une expérience réelle, nous sommes
              convaincus qu'ils seront mieux préparés à relever ces défis et à réussir dans leur carrière.
            </p>
            <br>
            En fin de compte, notre approche pratique est notre force, car elle nous permet de fournir une formation de
            haute qualité qui prépare les apprenants à réussir dans leur carrière. Nous sommes fiers de former les
            leaders de demain et nous continuerons à travailler dur pour améliorer notre approche et notre équipe de
            personnel compétent.</p>
          </div>
        </div>
      </div>

    </div>
    </div>
  </section>
  <section class="about">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <br>
          <br>
          <h2> A </h2>
          <h3 class="teot">Kalaban Coura 30 mètres </h3>
          <p class="teot1">VOIE PRINCIPALE,
            Bamako</p>

        </div>
        <div class="col-md-6">
          <div class="about-content">


            <h2>Où sommes nous ?</h2>
            <a href="https://goo.gl/maps/ifLKdNNVyammdFXWA" class="map-link">
              <img class="imga" src="carte.jpg" alt="">
            </a>

          </div>
        </div>
      </div>

    </div>
  </section>

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
    
    const counter = document.getElementById('counter');

    
    function count() {
      let currentValue = parseInt(counter.innerText);
      if (currentValue < 20) {
        counter.innerText = ++currentValue;
      }
    }


    function isElementInViewport(el) {
      const rect = el.getBoundingClientRect();
      return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
      );
    }

    
    function startCounting() {
      const intervalId = setInterval(function () {
        if (isElementInViewport(counter)) {
          clearInterval(intervalId);
          setInterval(count, 50); 
        }
      }, 100); 
    }

    // Ajout d'un écouteur d'événement pour déclencher l'animation lorsque la page est chargée
    window.addEventListener('load', startCounting);

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