<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
    <link rel="icon" href="./image/io.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--Bootstrap Icons-->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css">


    <!--Custom CSS-->
    <link rel="stylesheet" href="./css/style.css">
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <div class="overlay"></div>
    <!-- <span class="loader"></span> -->
    <?php require_once("./!isp/header2.php") ?>
    <?php require_once("./!isp/contain.php") ?>
    <!--    
   <form method="post" action="saisis.php">
       <input name="Prenom" placeholder="Prenom">
       <button type="submit">Envoyer</button>
    </form>
     -->


    <?php require_once("./!isp/footer2.php") ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
        <!-- <script>
    window.addEventListener('load', function() {
      var loader = document.querySelector('.loader');
      loader.style.display = 'none';
    });
  </script> -->
    <script>
        
        let overlay = document.querySelector('.overlay');
        let navbarToggler = document.querySelector('.burger');

        burger.addEventListener('click', function () {
            overlay.style.display = (overlay.style.display === 'block') ? 'none' : 'block';
        });

    </script>

</body>