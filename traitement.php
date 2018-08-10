<?php
if(isset($_POST["submit"])) {


  $names = $_POST['name'];
  $san_names = filter_var($names, FILTER_SANITIZE_STRING);
  $val_names = $san_names;
  if ($val_names != false) {
    echo $val_names;
  }
  else {
    echo 'nom non valide<br>';
  }

  $mail = $_POST['mail'];
  $san_mail = filter_var($mail, FILTER_SANITIZE_EMAIL);
  $val_mail = filter_var($san_mail, FILTER_VALIDATE_EMAIL);
  if ($val_mail != false) {
    echo $val_mail;
  }
  else {
    echo 'adresse email non valide<br>';
  }



  $tel = $_POST['tel'];
  $san_tel = filter_var($tel, FILTER_SANITIZE_NUMBER_INT);
  $val_tel = filter_var($san_tel, FILTER_VALIDATE_INT);
  if ($val_tel == false) {
    echo 'tel non valide<br>';
  }

  $mes = $_POST['message'];
  $san_mes = filter_var($mes, FILTER_SANITIZE_STRING);
  $val_mes = $san_mes;
  if ($val_mes != false) {
    echo $val_mes;
  }
  else {
    echo 'message non valide<br>';
  }
}
 ?>
