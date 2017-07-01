<?php 

require_once "pdo.php";

$date = $_POST['date'];
$emir = $_POST['emir'];
$participant = $_POST['participant'];
$nomAdeb = $_POST['nomAdeb'];
$adeb = $_POST['adeb'];




$req = $bdd->prepare('INSERT INTO infos(date,emir,participant,nomAdeb,adeb) VALUE(NOW(),:e,:p,:n,:a)');
$req->execute(array(
	'e' => $emir,
	'p' => $participant,
	'n' => $nomAdeb,
	'a' => $adeb

	));

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

 ?>