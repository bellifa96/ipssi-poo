<?php
namespace Ipssi\Evaluation;
/**
 * 
 */
class Empreint
{
	private $adherent;
	private $ouvre;
	private $date;
	function __construct(Adherent $adherent, Oeuvre $oeuvre,int $date){
		$this->Adherent = $adherent;
		$this->Oeuvre = $oeuvre;
		$this->date = $date;
	}
	
	public function get_ad(){
		return $this->adherent->get_adherent();
	}
	public function get_o(){
		return $this->oeuvre->get_oeuvre();
	}
}


?>