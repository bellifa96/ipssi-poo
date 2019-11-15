<?php

require_once('vendor/autoload.php');

$climate = new League\CLImate\CLImate;

class Diviseur {

    public function division( $index, $diviseur)
    {
        $valeurs = [17, 12, 15, 38, 29, 157, 89, -22, 0, 5];
        /*
        	on considere que empty est une chaine donc on verifie seulement
        
        if (!empty($index)) {
       		throw new Exception("la valeur de l'indice est nulle"); 
        }
       	if(empty($diviseur)){
       		throw new Exception("la valeur du diviseur est nulle");
       		
       	}*/
       	if(!is_numeric($index) ||  !is_integer($index / 1) ){
       		throw new Exception("l'index doit etre un chiffre et non une valeur vide ou lettre");
       	
       	}
       	if(!is_numeric($diviseur) ){
       		throw new Exception("le diviseur doit etre un chiffre et non une valeur vide ou lettre");
       		
       	}
       	if ($index > sizeof($valeurs) || $index < 0){
        	throw new Exception("l'indice de la valeur n'existe pas veuillez saisir un indice entre 0 et 9");

       	}
        if ($diviseur == '0') {
        	throw new Exception("la division par zéro est interdite");

        }
       else{
       		return $valeurs[$index] / $diviseur;

       	}

    }
}

$relancer = true;
while($relancer){
	$input = $climate->input("Entrez l’indice de l’entier à diviser : ");
	$index = $input->prompt();
	$input = $climate->input("Entrez le diviseur : ");
	$diviseur = $input->prompt();

	try {
		$climate->output("Le résultat de la division est : " . (new Diviseur())->division( $index, $diviseur));
		$relancer = false;

	} catch (Exception $e) {
		$climate->blue('ERROR : '.$e->getMessage());

		
	}

}


