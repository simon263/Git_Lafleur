<?php
/** 
 * Script de contr�le et d'affichage du cas d'utilisation "Ajouter"
 * @package default
 * @todo  RAS
 */
 
$repInclude = './include/';
$repVues = './vues/';

require($repInclude . "_init.inc.php");

// DEBUT du contr�leur ajouter.php

if (count($_POST)==0)
{
  $etape = 1;
}
else
{
  $etape = 2;
  $uneRef=$_POST["ref"];
  $uneDes=$_POST["des"];
  $unPrix=$_POST["prx"];
  $uneImage=$_POST["image"];
  $uneCat=$_POST["cat"];
  
  // Contr�les de saisie
  $erreur=0;
  if ($unPrix <0)
  {
    $erreur=1;
    $message = "Attention, le prix doit �tre positif !!!";
    ajouterErreur($tabErreurs, $message);
    $etape= 1;
  }
  if ($uneRef=="")
  {
    $erreur=1;
    $message = "Attention, la r�f�rence ne peut �tre vide !!!";
    ajouterErreur($tabErreurs, $message);
    $etape= 1;
  } 
  if($erreur==0)
  {
    ajouter($uneRef, $uneDes, $unPrix, $uneImage, $uneCat,$tabErreurs);
    if (nbErreurs($tabErreurs)==0)
    {
      $reussite = 1;
      $messageActionOk = "La fleur a �t� ajout�e";
    }
  }
}

// Construction de la page Ajouter
// pour l'affichage (appel des vues)
include($repVues."entete.php") ;
include($repVues."menu.php") ;
include($repVues ."erreur.php");
include($repVues."vAjouterForm.php") ;
include($repVues."pied.php") ;
?>
  
