<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Espace Natal</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!--link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"-->
  <link rel="stylesheet" href="/espace-natal/style.css">
</head>

<body>

  <!-- NAVBAR & STICKY CONTACT -->
  <?php include("../views/sticky_contact.html");
  include("../views/navbar.html");?>

  <!-- IMAGE+TXTBOX -->
  <div class="mb-5 shadow-sm" style="position:relative;">
    <div style="">
      <img src="\espace-natal\src\Photo-49.jpg" alt="" style="width:100%;">
    </div>
    <div class="imgContainerContact">
      <h1>CONTACT</h1>
      <p class="mt-3"><small>Le secrétariat de l’Espace Natal se tient à votre disposition du lundi au vendredi de 9h à 19h</small></p>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <!-- FORM SEND MESSAGE -->
      <div class="col-lg-6 my-5 border-right">
        <form action="contactMailTo.php" method="post">
          <!-- TITRE ENVOI MESSAGE -->
          <h3 class="primaryColor mb-5 border-bottom">ENVOYER UN MESSAGE</h3>
          <!-- INPUT NOM/PRENOM -->
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Nom</span>
              </div>
              <input type="text" class="form-control" name="inputNom" aria-describedby="nomHelp" placeholder="Nom" required>
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Prenom</span>
              </div>
              <input type="text" class="form-control" name="inputPrenom" aria-describedby="prenomHelp" placeholder="Prenom" required>
            </div>
          </div>
          <!-- INPUT EMAIL -->
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
              </div>
              <input type="email" class="form-control" name="inputEmail" aria-describedby="emailHelp" placeholder="E-mail" required>
            </div>
          </div>
          <!-- INPUT SUJET -->
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Sujet</span>
              </div>
              <input type="text" class="form-control" name="inputSujet" aria-describedby="nomHelp" placeholder="Sujet" required>
            </div>
          </div>
          <!-- INPUT MESSAGE -->
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">Message</span>
              </div>
              <textarea class="form-control" name="inputMessage" aria-label="Message" placeholder="Message" required></textarea>
            </div>
          </div>
          <!-- CHECKBOX AGREEMENT -->
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
            <label class="form-check-label" for="exampleCheck1"><small>J'accepte que le site utilise ces informations pour répondre à ma demande</small></label>
          </div>
          <!-- SUBMIT BTN -->
          <button type="submit" class="btn btn-primary shadow rounded-pill px-4 float-right">Envoyer</button>

        </form>
        <?php //ALERT APRES ENVOI DU MAIL
          if (isset($_GET['send'])) {
            if ($_GET['send'] == "true"){
              echo "<div class=\"alert alert-success w-75 mx-auto m-3 text-center float-left\" role=\"alert\">
                    Votre message c'est bien envoyé.
                    </div>";
            }/*else if($_GET['send'] == "true"){
            // FIXME:    add les get
               $url='\espace-natal\contact\contactMailAccuse.php';
               $delay = 0;
               header("Refresh: $delay;url=$url");
            }*/else{
               echo "<div class=\"alert alert-danger w-75 mx-auto m-3 text-center float-left\" role=\"alert\">
                    Une erreur s'est produite lors de l'envoi du message, veuillez réessayer ultérieurement.
                    </div>";
            }
          } ?>
      </div>

      <!-- CONTACT LIST -->
      <div class="col-lg-6 my-5">
        <h3 class="primaryColor mb-5 border-bottom">CONTACTEZ-NOUS</h3>
        <h6 class="mb-5">VOUS POUVEZ NOUS CONTACTER DU LUNDI AU VENDREDI :</h6>
        <!-- ADRESSE -->
        <div class="row mb-3">
          <div class="col-2">
            <i class="material-icons primaryColor md-36 float-right">room</i>
          </div>
          <div class="col-10">
            <h6>ADRESSE :</h6>
            <small>5 rue Faustin Hélie, 75116 Paris</small>
          </div>
        </div>
        <!-- TELEPHONE -->
        <div class="row mb-3">
          <div class="col-2">
            <i class="material-icons primaryColor md-36 float-right">call</i>
          </div>
          <div class="col-10">
            <h6>TÉLÉPHONE :</h6>
            <small>Contactez le secrétariat</small>
            <br>
            <small>Du lundi au vendredi de 9h à 19h</small>
            <br>
            <strong><a href="tel:+33145035363" class="primaryColor">01.45.03.53.63</a></strong>
            <!--strong class="primaryColor">01.45.03.53.63</strong-->
          </div>
        </div>
        <!-- EMAIL -->
        <div class="row mb-3">
          <div class="col-2">
            <i class="material-icons primaryColor md-36 float-right">mail_outline</i>
          </div>
          <div class="col-10">
            <h6>E-MAIL :</h6>
            <small>Envoyez un mail 7j/7 et 24h/24</small>
            <br>
            <!--strong class="primaryColor">contact@espace-natal.com</strong-->
            <strong><a href="mailto:contact@espace-natal.com?Subject=Contact" target="_top" class="primaryColor">contact@espace-natal.com</a></strong>
          </div>
        </div>
        <!-- DOCTOLIB -->
        <div class="row mb-3">
          <div class="col-12">
            <p class="ml-4">Vous pouvez également prendre directement rendez-vous sur Doctolib :</p>
            <a class="btn btn-default shadow rounded-pill ml-4 w-25" href="https://www.doctolib.fr/maison-perinatale/paris/espace-natal" target="_blank" style="background-color: #fff;">
              <div class="d-inline w-25">
                <img src="\espace-natal\src\logo-doctolib.jpg" class="img-fluid w-100">
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
     <!--img src="../src/map-jean-richepin.png" alt="map-jean-richepin" class="mb-3 mt-5" style="width:100%;"-->
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2444.899550638365!2d2.2725614839495853!3d48.86167135173002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66554337ec511%3A0xdd6cc1c700d125bd!2s8+Rue+Jean+Richepin%2C+75116+Paris!5e0!3m2!1sfr!2sfr!4v1550514232968" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>

  <!-- FOOTER & SCRIPT FOOTER/NAVBAR -->
  <?php include("../views/footer.html"); ?>
  <script type="text/javascript">
    $(document).ready(function() {
      $(".nav-link").find(".active").removeClass("active");
      $("#idContact").addClass("active");
      $("#idContactFooter").removeClass("inactiveFooter");
      $("#idContactFooter").addClass("activeFooter");
    });
  </script>

  <!-- Bootstrap js/jquery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>
