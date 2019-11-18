<?php
namespace Ipssi\Evaluation;

require_once('vendor/autoload.php');


$livre1 = new Oeuvre('demain sera beau',5,'2545ff');
$livre2 = new Oeuvre('hier',10,'255545ff');
$adherent = new Adherent ('OUssama',array($livre1));
$adherent = new Adherent ('melou',array($livre2));

$bibliotheque = new Bibliotheque (array($livre1,$livre2),$adherent);

echo "----OEUVRE----".PHP_EOL.PHP_EOL;
echo "Titre : ".$livre1->get_titre().PHP_EOL.PHP_EOL."Nombre D'exemplaire : ".$livre1->get_nb_exemplaire().PHP_EOL.PHP_EOL;

echo "----Adherent----".PHP_EOL.PHP_EOL;
echo "Nom : ".$adherent->get_nom().PHP_EOL.PHP_EOL."Livres empreintés : ";
foreach ($adherent->get_oeuvre_empreinte() as $key => $value) {
	//var_dump($value);
			//var_dump($adherent->get_oeuvre_empreinte());
		var_dump($value);
		foreach ($value as $k => $val) {
			var_dump($val);
			var_dump($value);
		}
 } 

/*echo "----Bibliotheque----".PHP_EOL.PHP_EOL;

echo "Les ouvres : ";print_r($bibliotheque->get_oeuvres());
echo PHP_EOL."les membres : ";print_r($bibliotheque->get_adherents());

 // Ceci ne sert à rien*/
