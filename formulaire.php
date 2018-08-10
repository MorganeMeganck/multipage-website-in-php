<?php 
require 'traitement.php';
?>
<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="assets/css/formulaire.css" style:"text">
  </head>
  <body>
    <div class="container">
      <form id="contact" action="formulaire.php" method="post">
        <h3>Espace Contact</h3>
        <h4>Veuillez remplir les champs suivants!</h4>
        <fieldset>
          <input placeholder="Votre nom" type="text" name="name" tabindex="1" required autofocus>
        </fieldset>
        <fieldset>
          <input placeholder="Votre adresse mail" type="email" name="mail"tabindex="2" required>
        </fieldset>
        <fieldset>
          <input placeholder="Votre numéro de contact" type="tel"name="tel" tabindex="3" required>
        </fieldset>
        <fieldset>
          <textarea placeholder="Entrez votre message..." tabindex="5" name="message" required></textarea>
        </fieldset>
        <fieldset>
          <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
        </fieldset>
      </form>


    </div>
  </body>
</html>
