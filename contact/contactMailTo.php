<?php // FIXME: le reply to ne marche pas avec la bonne adresse mail ?>
<?php
$mail = 'guillaumemaurin.gm@gmail.com'; // Déclaration de l'adresse de destination.
if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
{
	$passage_ligne = "\r\n";
}
else
{
	$passage_ligne = "\n";
}
//=====Déclaration des messages au format texte.
$message_txt = $_POST["inputEmail"].$passage_ligne.$_POST["inputMessage"];
//==========

//=====Création de la boundary
$boundary = "-----=".md5(rand());
//==========

//=====Définition du sujet.
$sujet = $_POST["inputSujet"];
//=========

//=====Création du header de l'e-mail.
$header = "From: \"".$_POST["inputNom"]." ".$_POST["inputPrenom"]."\"<".$_POST["inputEmail"].">".$passage_ligne;
$header.= "Reply-to: \"".$_POST["inputNom"]." ".$_POST["inputPrenom"]."\" <".$_POST["inputEmail"].">".$passage_ligne;
$header.= "MIME-Version: 1.0".$passage_ligne;
$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
//==========

//=====Création du message.
$message = $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format texte.
$message.= "Content-Type: text/plain; charset=\"utf-8\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_txt.$passage_ligne;
//==========
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
//==========

//=====Envoi de l'e-mail.
mail($mail,$sujet,$message,$header);
//==========
//retour a la page contact
$delay = 0;
$url='\espace-natal\contact';
header("Refresh: $delay;url=$url");
?>