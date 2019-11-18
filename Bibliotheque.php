<?php

namespace Ipssi\Evaluation;


/**
 * 

 */
class Bibliotheque
{

	private $adherents = array();
	private $oeuvres = array();

	function __construct( $oeuvre, $adherent)
	{
		$this->adherents = $adherent;
		$this->oeuvres = $oeuvre;
	}

	public function get_adherents(){
		return $this->adherents;
	}
	public function get_oeuvres(){
		return $this->oeuvres;
	}
	public function set_adherents(Adherent $adherent){
		$this->adherents = $adherent;
	}
	public function set_oeuvres(Oeuvre $oeuvre){
		$this->oeuvres = $oeuvre;
	}
}

?>