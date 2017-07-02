<?php 


require_once "pdo.php";

$date = $_POST['date'];
$emir = $_POST['emir'];
$participant = $_POST['participant'];
$nomAdeb = $_POST['nomAdeb'];
$adeb = $_POST['adeb'];



$req = $bdd->exec("DELETE FROM infos");


$req = $bdd->prepare('INSERT INTO infos(date,emir,participant,nomAdeb,adeb) VALUE(NOW(),:e,:p,:n,:a)');
$req->execute(array(
	'e' => $emir,
	'p' => $participant,
	'n' => $nomAdeb,
	'a' => $adeb

	)) ;

$reponse = $bdd->query('SELECT * FROM infos');
while($donnees = $reponse->fetch())
{
	echo "Date : ".$donnees['date']."<br>";
	echo "Emir de la semaine : ".$donnees['emir']."<br>";
	echo "Personnes présentes : ".$donnees['participant']."<br>";
	echo "Celui qui fait l'adeb : ".$donnees['nomAdeb']."<br>";
	echo "L'adeb :".$donnees['adeb']."<br>";
}

echo 'Le jeu a bien été ajouté';

$mail = 'amadoulyon@gmail.com';// Déclaration de l'adresse de destination
if(!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail))//On filtre les serveurs qui rencontrent des bugs.
{
	$passage_ligne = "\r\n";
}
else
{
	$passage_ligne = "\n";
}
//==========Déclaration des messages au format texte et au format HTML
$message_txt = "Salut à tous, voici un e-mail envoyé par un script PHP.";
$message_html = "<html><head></head><body><b>Salut à tous</b>, voici un e-mail envoyé par <i>script PHP</i>.</body></html>";
//=========================

//==========Création de la boundary
$boundary = "-----=".md5(rand());
//==========

//==========Définition du sujet.
$sujet = "Hey mon ami";
//==========

//==========Création du header de l'e-mail.
$header = "From: \"BARRY\"<amadoulyon@gmail.com>".$passage_ligne;
$header.= "Reply-to: \"BARRY\"<amadoulyon@gmail.com>".$passage_ligne;
$header.= "MINE-Version: 1.0".$passage_ligne;
$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
//==========

//==========Création du message.
$message = $passage_ligne."--".$boundary.$passage_ligne;
//==========Ajout du message au format texte.
$message .= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
$message .= "Content-Transfert-Encoding: 8Bit".$passage_ligne;
$message .= $passage_ligne.$message_txt.$passage_ligne;
//==========
$message.= $passage_ligne."--".$boundary.$passage_ligne;
//Ajout du message au format HTML
$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_html.$passage_ligne;
//==========
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
//==========

//==========Envoie de l'e-mail.
mail($mail,$sujet,$message,$header);
//==========


 ?>