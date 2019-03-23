<?php include "../php/insert_news.php" ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link href="../css/font.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery-3.3.1.min.js"></script>
    <title>News ed Eventi</title>
    <h1>NEWS ED EVENTI DI FONDAZIONE EDULIFE</h1>
  </head>
  <body>
    <?= getAllNews() ?> 
    <footer id = "footer">  
      <div class = "footer-top">
        <div class = "container">
          <div class="row">
            <div class="col-lg-3 col-md-6 footer-info">
              <div id = "imgFooter"><img src="../media/img/effe.png" alt="" class = "img-responsive"></div>
                <div id = "testoFooter"> 
                  Fondazione Edulife Onlus nasce nell’ambito di una rete mondiale dedicata alla educazione dei giovani.
                </div>
              </div>
                  <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Contatti</h4>
                    <p>Fondazione Edulife
                    <br>
                      Lungadige Galtarossa, 21
                    <br>
                      37133 Verona
                    <br>
                      Tel. +39 045 9696300
                    <br>
                      Fax +39 045 9696301
                    <br>
                      info@edulife.it</p>
                  </div>
                <div class="col-lg-3 col-md-6 footer-contact">
                  <h4>I nostri social</h4>
                  <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                  <a href="https://www.facebook.com/FondazioneEdulife" class="facebook"><i class="fab fa-facebook-square"></i></a>
                  <a href="https://twitter.com/EdulifeOnlus" class="twitter"><i class="fab fa-twitter"></i></a>
                </div>
                <div class="col-lg-3 col-md-6 footer-newsletter">
                <h4>Dove siamo</h4>
                <div class="mappa">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d2799.943064754773!2d10.99683911507071!3d45.43064904370334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x477f5f3fd94d631f%3A0xb9a1156ee2f8c5e!2s311+Verona%2C+Lungadige+Galtarossa%2C+21%2C+37133+Verona+VR!3m2!1d45.430374099999995!2d10.9985254!5e0!3m2!1sit!2sit!4v1553077721735" width="240" height="160" frameborder="0" style="border:0" allowfullscreen>
                </iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
          <p class="copyright text-muted">Copyright &copy;Edulife 2019</p>
    </footer>
  </body>
</html>