<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Font awesome icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!--Bootstrap Icons-->
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css">

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="ISPATEC/css/bootstrap.min.css">
  <title>Page contact</title>
  <link rel="icon" href="../image/io.png">
</head>

<body>
  <div class="overlay"></div>
  <?php require_once("../!isp/header.php") ?>

  <section>
    <div class="picture">
      <h1 style="text-align:center; color: #fff; ">Contact</h1>
    </div>

    <div class="inner-conetent single-node background">
      <div class="fix-width">

        <div>
          <div data-drupal-messages-fallback class="hidden"></div>

          <div id="block-uic-bootstrap-content">

            <div class="inner-conetent nous-contacter">
              <div class="fix-width">
                <div id="block-uic-bootstrap-page-title">
                  <h1><span>
                      Contact
                    </span>
                  </h1>
                </div>

                <form class="contact-form" data-drupal-selector="frm-contact" action="/contact-us" method="post"
                  id="frm-contact" accept-charset="UTF-8">

                  <div class="row">
                    <div class="col-md-4 col-xs-12">
                      <div class="content-block">
                        <span>Nom :<label>*</label></span>

                        <div
                          class="js-form-item form-item js-form-type-textfield form-item-nom js-form-item-nom form-no-label">

                          <input
                            class="text-input form-control required validate[required,custom[onlyLetterSp]] form-text"
                            id="nom" data-drupal-selector="edit-nom" type="text" name="nom" value="" size="60"
                            maxlength="128" />
                        </div>
                      </div>
                      <div class="content-block">
                        <span>Prénom :<label>*</label></span>

                        <div
                          class="js-form-item form-item js-form-type-textfield form-item-prenom js-form-item-prenom form-no-label">
                          <input class="text-input form-control validate[required,custom[onlyLetterSp]] form-text"
                            id="prenom" data-drupal-selector="edit-prenom" type="text" name="prenom" value="" size="60"
                            maxlength="128" />

                        </div>

                      </div>
                      <div class="content-block">
                        <span>Email :<label>*</label></span>

                        <div
                          class="js-form-item form-item js-form-type-textfield form-item-email js-form-item-email form-no-label">
                          <input class="text-input form-control validate[required,custom[email]] form-text" id="email"
                            data-drupal-selector="edit-email" type="text" name="email" value="" size="60"
                            maxlength="128" />
                        </div>

                      </div>
                      <div class="content-block">
                        <span>Téléphone :<label>*</label></span>

                        <div
                          class="js-form-item form-item js-form-type-textfield form-item-telephone js-form-item-telephone form-no-label">

                          <input
                            class="form-control validate[required,custom[onlyNumberSp],minSize[10],maxSize[10] form-text"
                            id="telephone" data-drupal-selector="edit-telephone" type="text" name="telephone" value=""
                            size="60" maxlength="128" />

                        </div>


                      </div>
                    </div>

                    <div class="col-md-4 col-xs-12">
                      <div class="content-block">
                        <span>Objet :<label>*</label></span>

                        <div
                          class="js-form-item form-item js-form-type-select form-item-objet js-form-item-objet form-no-label">
                          <select class="input-select form-control required validate[required] form-select" id="objet"
                            data-drupal-selector="edit-objet" name="objet">
                            <option value="" selected="selected">--- Aucun ---</option>
                            <option value="Admission">Admission</option>
                            <option value="Formation executive">Formation executive</option>
                            <option value="Formation initiale">Formation initiale</option>
                          </select>
                        </div>
                      </div>

                      <div class="content-block">
                        <span>Commentaire :<label>*</label></span>

                        <div
                          class="js-form-item form-item js-form-type-textarea form-item-commentaire js-form-item-commentaire form-no-label">

                          <div>
                            <textarea class="form-textarea required validate[required] form-textarea" id="commentaire"
                              data-drupal-selector="edit-commentaire" name="commentaire" rows="5" cols="60"></textarea>
                          </div>

                        </div>

                      </div>
                    </div>

                    <div class="col-md-4 col-xs-12">
                      <div class="block-information">
                        <h6>Campus de l&#039; Institut Supérieur Privé des Affaires et des Technologies. Kalaban Coura
                          30 mètres VOIE PRINCIPALE,
                          Bamako</h6>
                        <p>TÉL : +223 91549461 / +223 67878244<br>Email :
                          <span style="color: #006eab;">isatec.ml@gmail.com</span>
                        </p>
                        <br>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-12 condition">
                      <label>
                        <div
                          class="js-form-item form-item js-form-type-checkbox form-item-etre-contacter js-form-item-etre-contacter">
                          <input data-drupal-selector="edit-etre-contacter" type="checkbox" id="edit-etre-contacter"
                            name="etre_contacter" value="1" class="form-checkbox" />
                          <label for="edit-etre-contacter" class="option"><label
                              for="edit-etre-contacter"></label>J'accepte
                            d'être contacté ultérieurement par l'Institut Supérieur Privé des Affaires et des
                            Technologies et
                            d'en recevoir des informations commerciales
                          </label>
                        </div>

                      </label>
                    </div>
                  </div>

                  <div class="row ">
                    <div class="col-md-12 col-xs-12 submit-btn ">

                      <button class="button">
                        Envoyer
                      </button>

                    </div>
                  </div>

                </form>

              </div>

            </div>


          </div>
        </div>
      </div>
    </div>
  </section>

  <button id="scroll-to-top"><i class="bi bi-arrow-up-circle-fill"></i></button>

  <!-- FOoter -->
  <?php require_once("../!isp/footer.php") ?>

  <!-- FOoter -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <button id="scroll-to-top"><i class="bi bi-arrow-up-circle-fill"></i></button>
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

  <script>
    let overlay = document.querySelector('.overlay');
    let navbarToggler = document.querySelector('.burger');

    burger.addEventListener('click', function () {
      overlay.style.display = (overlay.style.display === 'block') ? 'none' : 'block';
    });

  </script>

</body>

</html>