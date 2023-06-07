<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission</title>
    <link rel="icon" href="../image/io.png">
    <!-- Font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--Bootstrap Icons-->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="Admission.css">
</head>

<body>
<span class="loader"></span>
    <div class="overlay"></div>
    <?php require_once("../!isp/header.php") ?>

<section class="tex">


    <h2 class="elementor-heading-title elementor-size-default">Inscription</h2>

    <h1>UNIVERSITE BILINGUE</h1>
    <h2>Institut Supérieur Privé des Affaires et des technologies</h2>
    <div class="i">FORMATION CYCLE LMD</div>
    <section class="mar">
    <label class="con"><h4> CONDITIONS D'ADMISSION LICENCE (L1&L2)</h4></label>
        <p>
            Etre titulaire du baccalauréat ou équivalent ou le niveau terminale</p>
        <p>Admission après analyse du dossier de préinscription.</p>
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdGncZsp-GPfAfE-ME6i3w0NyiwbsCdzzV9wkO8dIufEuD0jg/viewform?usp=send_form"><button type="button" class="btn">Inscription</button></a>
    <br>
    <label class="con"><h4>CONDITIONS  D'ADMISSION EN LICENCE 3</h4> </label>
    <p>Etre titulaire d'un DUT,BTS,DEUG, ou d'un diplome équivalent.</p>
    <p>Admission après analyse du dossier de préinscription.</p>
    <br>
    <label class="con"><h4> CONDITIONS D'ADMISSION MASTER 1</h4> </label>
    <p>Etre titulaire d'une licence 3 ou d'un diplome équivalent.
        Admission après analyse du dossier de préinscription.
    </p>
    <br>
    <label class="con" ><h4> CONDITIONS D'ADMISSION MASTER 2</h4>  </label>
    <p>Etre titulaire d'un master 1,d'une maitraise ou d'un diplome équivalent.
        Admission après analyse du dossier de préinscription.
    </p>
    <br>
    <label class="con"><h4>Documents à fournir</h4></label> 
    
        <p>Ces documents sont valabres pour toute nouvelle inscription dans l'un des niveaux ci-dessus énumérés :</p>
        <ul>
        <li>Une demande manusrite timbréé indiquant le niveau, cycle et la filière adressée au Directeur Général.</li>
        <li>Copie d'extrait date de naissance ou d'acte tenant lieu.</li>
        <li>Copie conforme des diplomes (ou attestation) obtenus.</li>
        <li>Deux photos d'identité.</li>
    </ul>
    </section>
    <label>
    <a href="tel:+22377761112"> Besoin de conseil pour mieux s'orienter?</a><br>
        Nos coaches et experts sont à votre disposition pour vous permettre de savoir quel cursus répond le mieux à vos
        aspirations professionelles et à vos projets de vie.
    </label>
    <button id="scroll-to-top"><i class="bi bi-arrow-up-circle-fill"></i></button>
    </section>
    <?php require_once("../!isp/footer.php") ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous">
    </script>
    <script>

        let overlay = document.querySelector('.overlay');
        let navbarToggler = document.querySelector('.burger');

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