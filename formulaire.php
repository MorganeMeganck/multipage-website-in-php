<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <<?php include 'partials/header.php' ?>
          <section id="contenuprincipal" class="contenuprincipal">
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
                            <label for="nom">Nom</label>
                            <div class="form-group">
                              <input id="nom" type="text" class="form-control" name="nom" placeholder="Nom" required="">
                            </div>
                            <label for="prenom">Prénom</label>
                            <div class="form-group">
                              <input id="prenom"type="text" class="form-control" name="prenom" placeholder="Prénom" required="">
                            </div>
                            <label for="email">Email</label>
                            <div class="form-group">
                              <input id="email" type="email" class="form-control" name="email" placeholder="Email" required="">
                            </div>
                            <div>
                              <label for="objet">Objet :</label>
                              <select id="objet" name="choix">
                                <option value="Demande d'informations">Demande d'informations</option>
                                <option value="Remarques">Remarques</option>
                                <option value="Autres">Autres</option>
                              </select>
                            </div>
                            <label for="message">Message</label>
                            <div class="form-group">
                              <textarea id="message" class="form-control" name="message" rows="8" placeholder="Message" required></textarea>
                            </div>
                            <div>
                              <label for="imagesend">Image :</label>
                              <input type="file" value="" id="imagesend" name="imagesend" accept="image/png, image/jpeg" />
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
                              <label for="accord">
                                l'utilisateur est d'accord que le site utilise ses données et documents envoyés</br> uniquement
                                afin de répondre à sa requête directe et non à des fins de marketing ou autre.
                              </label>
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
                          <a href="facebook.com" name="fb"><img src="assets/images/fb.png" alt="fb" /></a>
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
<?php include 'partials/footer.php' ?>
  </body>
</html>
