<?php
// 1 : on ouvre le fichier
$monfichier = fopen('fichier.txt', 'r+');

// 2 : on fera ici nos opérations sur le fichier...

// 3 : quand on a fini de l'utiliser, on ferme le fichier
fclose($monfichier);
?>

<?php
// 1 : on ouvre le fichier
$monfichier = fopen('fichier.txt', 'r+');
 
// 2 : on lit la première ligne du fichier
$ligne = fgets($monfichier);
 
// 3 : quand on a fini de l'utiliser, on ferme le fichier
fclose($monfichier);
?>

<?php fputs($monfichier, 'Texte à écrire'); 
fseek($monfichier, 0);

?>