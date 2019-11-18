<?php

namespace Ipssi\Evaluation;


class Adherent
{
	private $nom;
	private $oeuvre_empreinte = array();


	function __construct(string $nom,array $oeuvre_empreinte)
	{
		$this->nom = $nom;
		$this->oeuvre_empreinte = $oeuvre_empreinte;
	}

	public function get_nom():string{
		return $this->nom;
	}

	public function get_oeuvre_empreinte(){
		return $this->oeuvre_empreinte;
	}

	public function set_nom(string $nom){
		$this->nom=$nom;
	}

	public function set_oeuvre_empreinte(Oeuvre $oeuvre){
		$this->oeuvre_empreinter= $oeuvre;
	}
	/*public function set_peut_empreinter(string $peut_empreinter){
		$this->peut_empreinter = $peut_empreinter;
		throw new OeuvreIndispon("Error Processing Request", 1);
		
	}*/
}