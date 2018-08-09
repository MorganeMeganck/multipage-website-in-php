<?php include("header.php"); ?>
        <section id="contenuprincipal" class="contenuprincipal">
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
                                <h4>Création théâtrale : mémoire et patrimoine de Péruwelz</h4>
                                <p>
                                Riche des expériences et échanges des Passeurs de mémoire, Arrêt 59 et Ag'ySont souhaitent à présent monter une création théâtrale associant des amateurs de 15 à 84 ans,
                                habitants du péruwelzis, des Passeurs de mémoire et des artistes professionnels.
                                </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="carousel-cont">
                                <h4>Générations solidaires : votez pour les projets intergénérationnels !</h4>
                                <p>
                                Deux générations se regardent et partagent leur histoire commune autour de 7 films tirés de la série documentaire de Jonas Parienté « Grandma’s Project ». Accompagnés des 7 différents réalisateurs et de leurs grand-mères respectives, la Tricoterie mettra en relation les grand-mères belges et leurs petits-enfants à l’honneur lors de deux événements
                                : un goûter façon auberge espagnole, et un bal intergénérationnel.
                                </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="carousel-cont">
                                <h4>Le jardin des délices : potager intergénérationnel au sein d'une maison de repos</h4>
                                <p>
                                Initié par GoodPlanet et la Maison de repos Anne Sylvie Mouzon, le jardin des délices est un potager situé au sein même de la maison de repos. Le projet a réuni tout au long de l'année des jeunes du voisinage et les aînés de la maison de repos autour du jardin. La maison de repos a pour ambition de devenir un lieu de rencontre où les seniors et les plus jeunes du quartier se retrouvent, toutes cultures confondues.Tous les mois, des activités intergénérationnelles sont organisées et les voisins sont investis dans l'entretien du potager.
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
        <?php include("partials/footer.php"); ?>	