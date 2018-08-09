<?php
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

require 'gmail-id-password.php';

if(!defined("GMAIL_ID") || !defined("GMAIL_PW")) {
echo "<p> missing . (GMAIL_ID ou GMAIL_PW)</p>";
exit;
}


$email = $_POST['email'];
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$message = $_POST['message'];
$objet = $_POST['choix'];
$genre = $_POST['genre'];
$format = $_POST['format'];
$date = date("l jS \of F Y h:i:s A");

// documentenvoyé
include('vendor/verot/class.upload.php/src/class.upload.php');
$handle = new upload($_FILES['imagesend']);
if ($handle->uploaded) {
  $handle->file_new_name_body   = 'image_resized';
  // $handle->image_resize         = true;
  // $handle->image_x              = 100;
  // $handle->image_ratio_y        = true;
  $handle->process('downloadimg/');
  if ($handle->processed) {
    echo 'image_resized';
    $handle->clean();
  } else {
    echo 'error : ' . $handle->error;
  }
}
// genre
$genre = $_POST['genre'];
if(filter_has_var(INPUT_GET, $genre)) {
    echo '$_GET[\'genre\'] existe';
}
// sanitaze
$email = $_POST['email'];
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$message = $_POST['message'];

// $options = array(
//     $prenom => FILTER_SANITIZE_STRING, //Enlever les balises.
//     $nom => FILTER_SANITIZE_STRING,
//     $message => FILTER_SANITIZE_STRING,
//     $email => FILTER_SANITIZE_EMAIL, //Valider l'adresse de messagerie.
//     );
//     if (true === filter_var($email, FILTER_VALIDATE_EMAIL)) {
//     echo "Cette adresse email nettoyée est considérée comme valide.";
// } else {
// 	echo "Cette adresse email nettoyée n'est pas valide. Désolé. xoxo";
// }
//  $resultat = filter_input_array(INPUT_POST, $options);
// print_r($resultat);

// mailer

date_default_timezone_set('Etc/UTC');
require 'PHPMailerAutoload.php';
//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//username to use for SMTP authentication
$mail->Username = GMAIL_ID;
//Password to use for SMTP authentication
$mail->Password = GMAIL_PW;
//Set who the message is to be sent from
$mail->setFrom($email);
//Set an alternative reply-to address
$mail->addReplyTo('morgane.meganck@gmail.com', 'Morgane Meganck');
//Set who the message is to be sent to
$mail->addAddress('morgane.meganck@gmail.com', 'Morgane Meganck');
//Set the subject line
$mail->AddCC($email);
$mail->Subject = $objet;
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML("Reçu de " . $genre ." " . $nom ." " . $prenom . "</br>" . " Date: ". $date . "</br>" . " Email: " . $email . "</br>" . " Format de réponse desiré: " . $format . "</br> Message: " . $message );
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
// $mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors
if (!$mail->send()) {
    echo "Problème d'envoi " . $mail->ErrorInfo;
} else {
    echo "<script>alert('Message envoyé !');</script>";
    echo "<script>document.location.href='formulaire.php'</script>";
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}
//Section 2: IMAP
//IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
//Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
//You can use imap_getmailboxes($imapStream, '/imap/ssl') to get a list of available folders or labels, this can
//be useful if you are trying to get this working on a non-Gmail IMAP server.
function save_mail($mail) {
    //You can change 'Sent Mail' to any other folder or tag
    $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";
    //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    $imapStream = imap_open($path, $mail->Username, $mail->Password);
    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);
    return $result;

}

if (!empty($msg)) {
   echo "<h2>$msg</h2>";
 }
 echo $mail->ErrorInfo;

 ?>
