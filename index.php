<?php
/* Premiere partie*/
  $monURL = "http://" .$_SERVER['HTTP_HOST'].
  $_SERVER['REQUEST_URI'];
  $add = $_SERVER['REMOTE_ADDR'];
  $date = date("d-m-Y");
  $heure = date("H:i");

  /*Deuxieme Partie*/
  $file = 'admin/logs.php';
  //on ouvre le fichier
  $current = file_get_contents($file);
  //ajouter une personne
  $current .= "
    <td>$pseudo</td>
    <td>$date</td>
    <td>$heure</td>
    <td>$add</td>
    <td>$monURL</td> ";
//on ecrit le resultat
  file_put_contents($file, $current);
 ?>
