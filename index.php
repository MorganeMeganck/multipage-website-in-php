        <?php include("partials/header.php"); ?>
<section id="whatido" class="whatido">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="head_title text-center wow fadeInLeft"  data-wow-duration="3s">
                    <h2>Bienvenue </h2>
                </div>
            </div>
            <div class="col-md-8 col-sm-6 col-xs-12">
                <div class="head_title_rigth wow fadeInRight"  data-wow-duration="3s">
                    <p>Depuis 2008, le Portail www.intergenerations.be est une véritable porte d’entrée sur l’intergénération.</p>
                </div>
            </div><!-- End of col-sm-5 -->
        </div>
        <hr />
        <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
                <h3>Ses objectifs</h3>
                <p>
                centraliser l’information intergénérationnelle
                proposer un lieu d’échange interactif sur l’intergénération
                mettre à disposition des outils méthodologiques et de références
                rendre accessible des expériences intergénérationnelles qui naissent un peu partout en Belgique francophone souvent de manière locale et peu visible.
                </p>
                <div class ="slide">
                    <h3>infos</h3>
                    <div id="demo" class="carousel slide" data-ride="carousel">

                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                        </ul>

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="carousel-cont">
                                    <h4>Info 1</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="carousel-cont">
                                     <h4>Info 2</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                 <div class="carousel-cont">
                                     <h4>Info 3</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                 </div>
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <div class="carousel-arrow">
                            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#demo" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>
                        </div>
                    </div>
                 </div>
            </div>
            <div id="sidebar" class="col-md-4 col-sm-6 col-xs-12">
                <section>
                    <div class="agenda">
                        <h3>Agenda</h3>
                        <h4>Du 14 / 02 / 2018 Au 31 / 12 / 2018</h4>
                        <p>
                        Mélangeons les générations !</br>
                        Participez à des ateliers mensuels entre seniors et jeunes et (re)découvrez la richesse des échanges entre générations.
                        </br>Activités créatives, ateliers beauté, sorties diverses,...
                        </p>
                        <button id="myButton">Voir plus</button>
                    </div>
                </section>
                <section>
                    <div class="inscriptions">
                        <h3>Inscriptions</h3>
                        <p>
                        Devenez membre d'intergénérations.be en quelques clics !
                        </p>
                    </div>
                </section>
                <section>
                    <div class="recherche">
                        <h3>recherche</h3>
                        <input />
                    </div>
                </section>
            </div>
        </section>
        <!-- End of Features Section -->
        <div id="newsletter-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 clearfix">
                        <h3>Abonnez-vous pour recevoir notre Newsletter</h3>
                        <form id="register-newsletter">
                            <input type="text" name="newsletter" required="" placeholder="Entrer votre addresse email">
                            <input type="submit" class="btn btn-custom-3" value="S'abonner">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <section id="contact" class="contact">
            <div class="container" >
                <hr class="hrblack"/>
                <div class="row" id="contactbox">
                    <div class="main_contact">
                        <div class="contact_content">
                            <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft"  data-wow-duration="2s">
                                <div class="contact_message">
                                    <div class="head_title text-center">
                                        <h3>Nous contacter</h3>
                                        <div class="separator"></div>
                                    </div>
                                    <form action="#" id="formid">
                                        <fieldset>
                                            <legend>Séléctionner votre genre :</legend>
                                            <div>
                                                <input type="radio" id="Mr" name="genre" checked />
                                                <label for="Mr">Mr</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="Mme" name="genre" />
                                                <label for="Mme">Mme</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="Mlle" name="genre" />
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
                                                <option value="choix1">Demande d'informations</option>
                                                <option value="choix2">Remarques</option>
                                                <option value="choix3">Autres</option>
                                            </select>
                                        </div>
                                        <label for="">Message</label>
                                            <div class="form-group">
                                                <textarea class="form-control" name="message" rows="8" placeholder="Message"></textarea>
                                            </div>
                                        <div>
                                            <label for="image">Image :</label>
                                            <input type="file"
                                            id="image" name="image"
                                            accept="image/png, image/jpeg" />
                                        </div>
                                        </br>
                                        <fieldset>
                                            <legend>Séléctionner un format de réponse:</legend>
                                            <div>
                                                <input type="radio" id="texte" name="format" checked />
                                                <label for="texte">Texte</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="html" name="format" />
                                                <label for="html">Html</label>
                                            </div>
                                        </fieldset>
                                        <div class="message_btn text-center">
                                            <div class="btn_bg">
                                                <a href="" class="btn">Envoyer</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight"  data-wow-duration="2s">
                                <div class="contact_socail_bookmark">
                                    <a href=""><img src="assets/images/fb.png" alt="" /></a>
                                    <a href=""><img src="assets/images/fb.png" alt="" /></a>
                                    <a href=""><img src="assets/images/fb.png" alt="" /></a>
                                </div>

                                <div class="contact_adress">
                                    <h3>Adresse:</h3>
                                    <span>Bruxelles</span>
                                    <span>Belgique</span>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="single_contact_phone">
                                            <h3>Telephone:</h3>
                                            <span>+48 202 - 555 - 0114</span>
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
        </section>
            <?php include("partials/footer.php"); ?>		