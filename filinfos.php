<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
          <title>Intergenerations</title>
          <meta name="description" content="">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="apple-touch-icon" href="apple-touch-icon.png">
           <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
          <!--<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,600,700' rel='stylesheet' type='text/css'>-->
          <link rel="stylesheet" href="assets/css/fonticons.css">
          <link rel="stylesheet" href="assets/fonts/stylesheet.css">
          <link rel="stylesheet" href="assets/css/font-awesome.min.css">
          <link rel="stylesheet" href="assets/css/bootstrap.min.css">
          <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


          <!--For Plugins external css-->
          <link rel="stylesheet" href="assets/css/plugins.css" />

          <!--Theme custom css -->
          <link rel="stylesheet" href="assets/css/style.css">

          <!--Theme Responsive css-->
          <link rel="stylesheet" href="assets/css/responsive.css" />

          <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
      </head>
      <body>
          <!--[if lt IE 8]>
              <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
          <![endif]-->
  		<!-- <div class='preloader'><div class='loaded'>&nbsp;</div></div> -->
          <!--Home page style-->
          <header id="main_menu" class="header">
              <div class="main_menu_bg navbar-fixed-top">
                  <div class="container">
                      <div class="row">
                          <div class="nave_menu">
                              <nav class="navbar navbar-default">
                                  <div class="container-fluid">
                                      <!-- Brand and toggle get grouped for better mobile display -->
                                      <div class="navbar-header">
                                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                              <span class="sr-only">Toggle navigation</span>
                                              <span class="icon-bar"></span>
                                              <span class="icon-bar"></span>
                                              <span class="icon-bar"></span>
                                          </button>

                                      </div>

                                      <!-- Collect the nav links, forms, and other content for toggling -->
                                      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                          <ul class="nav navbar-nav">
                                              <li><a href="index.html">Accueil</a></li>
                                              <li><a href="agenda.html">Agenda</a></li>
                                              <li><a href="filinfos.php">Contact</a></li>

                                          </ul>
                                      </div>
                                  </div>
                              </nav>
                          </div>
                      </div>

                  </div>

              </div>
          </header> <!--End of header -->
  <section id="home" class="home">
              <div class="home_overlay">
                  <div class="container" >
                      <div class="row" id="headtitles">
                          <h1 class="title col-md-12 col-sm-12 col-xs-12"><span class="titlehighlight">Inter</span>generations</h1>
                          <h4 class="courants">Geré par</h2>
                      </div>
                  </div>
              </div>
          </section><!-- End of Banner Section -->
<section id="whatido" class="whatido">
  <section id="contact" class="contact">
          <div class="container" >
              <div class="row" id="contactbox">
                  <div class="main_contact">

                      <div class="contact_content">

                          <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft"  data-wow-duration="2s">
              <div class="contact_message">

                                  <div class="head_title text-center">
                                      <h3>Nous contacter</h2>
                                      <div class="separator"></div>
                                  </div>
                <form id="formid" action="cible.php" method="post" enctype="multipart/form-data">
                                      <fieldset>
                                      <legend>Séléctionner votre genre :</legend>
                                      <div>
                                          <input type="radio" id="Mr" name="genre" value="Mr" checked />
                                          <label for="Mr">Mr</label>
                                      </div>
                                      <div>
                                          <input type="radio" id="Mme" name="genre" value="Mme" />
                                          <label for="Mme">Mme</label>
                                      </div>
                                      <div>
                                          <input type="radio" id="Mlle" name="genre" value="Mlle" />
                                          <label for="Mlle">Mlle</label>
                                      </div>
                                      </fieldset>
                                  </br>
                  <label for="">Nom</label>
                  <div class="form-group">
                    <input type="text" class="form-control" name="nom" placeholder="nom" required="">
                  </div>
                                      <label for="">Prénom</label>
                  <div class="form-group">
                    <input type="text" class="form-control" name="prenom" placeholder="prenom" required="">
                  </div>

                  <label for="">Email</label>
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email" required="">
                  </div>
                                      <div>
                                      <label>Objet :</label>
                                      <select name="choix">
                                          <option value="Demande d'informations">Demande d'informations</option>
                                          <option value="Remarques">Remarques</option>
                                          <option value="Autres">Autres</option>
                                      </select>
                                      </div>
                  <label for="">Message</label>
                  <div class="form-group">
                    <textarea class="form-control" name="message" rows="8" placeholder="Message" required></textarea>
                  </div>
                                      <div>
                                       <label for="image">Image :</label>
                                       <input type="file" value="" id="imagesend" name="imagesend" accept="image/png, image/jpeg" />
                                       <input type="submit" name="Submit" value="upload">
                                     </div>
                                  </br>
                                      <fieldset>
                                          <legend>Séléctionner un format de réponse:</legend>
                                          <div>
                                              <input type="radio" id="texte" name="format" value="Texte" checked />
                                              <label for="texte">Texte</label>
                                          </div>
                                          <div>
                                              <input type="radio" id="html" name="format" value ="Html"/>
                                              <label for="html">Html</label>
                                          </div>
                                      </fieldset>
                                      <hr />
                                      <div>
                                        <label for="accord">l'utilisateur est d'accord que le site utilise ses données et documents envoyés</br> uniquement
                                          afin de répondre à sa requête directe et non à des fins de marketing ou autre.</label>
                                          <input type="radio" id="accord" name="accord" required>

                                      </div>


                                    <div class="message_btn text-center">
                    <div class="btn_bg">
                      <button type="submit" class="btn" id="buttonsend">Envoyer</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>

                          <div class=" datacontact col-md-6 col-sm-6 col-xs-12 wow fadeInRight"  data-wow-duration="2s">
                <div class="contact_socail_bookmark">
                  <a href=""><img src="assets/images/fb.png" alt="" /></a>
                  <a href=""><img src="assets/images/fb.png" alt="" /></a>
                  <a href=""><img src="assets/images/fb.png" alt="" /></a>
                </div>

                <div class="contact_adress">
                  <h3>Adresse:</h3>
                                  </br>
                  <span>Bruxelles</span>
                  <span>Belgique</span>
                </div>

                <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="">
                      <h3>Telephone:</h3>
                                          </br>
                      <p>+48 202 - 555 - 0114<p>
                    </div>
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="single_contact_phone">
                      <h3>Email:</h3>
                      <span>XS@yoursite.com</span>
                    </div>
                  </div>
                </div>

              </div>
            </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
    </section>
      </div>
  </section><!-- End of contact With Map Section -->
  <div class="row">
    <div class="footer_copyright">

      <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInDown"  data-wow-duration="3s">
        <div class="single_copyirgth text-left">
          <p>Copyright 2016 &copy; by XS@mail.com, Morgane Meganck and Ajay</p>
        </div>
      </div>

      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="single_copyirgth wow fadeInUp"  data-wow-duration="2s">
          <ul class="navbar-right">
            <li class="active"><a href="#home">Accueil</a></li>
            <li><a href="#whatido">Fil d'infos</a></li>
            <li><a href="#myworks">Agenda</a></li>
            <li><a href="#about">Age</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
      </div>

    </div>
  </div>
  <!-- STRAT SCROLL TO TOP -->

  <div class="scrollup">
      <a href="#"><i class="fa fa-chevron-up"></i></a>
  </div>
  <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
      <script src="assets/js/vendor/bootstrap.min.js"></script>
      <script src="assets/js/vendor/isotope.min.js"></script>
      <script src="assets/js/jquery.easypiechart.min.js"></script>
      <script src="assets/js/jquery.mixitup.min.js"></script>
      <script src="assets/js/plugins.js"></script>
      <script src="assets/js/main.js"></script>
  </body>
</html>
