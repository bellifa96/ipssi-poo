<?php
namespace Ipssi\Evaluation;

/**
 * 
 */
class Oeuvre
{
	private $titre;
	private $nb_exemplaire;
	private $ref;
	function __construct(string $titre, int $nb_exemplaire , string $ref )
	{
		$this->titre= $titre;
		$this->nb_exemplaire=$nb_exemplaire;
		$this->ref=$ref;
	}

	//************GETTER***************************

	public function get_titre():string{
		return $this->titre;
	}
	public function get_nb_exemplaire():int{
		return $this->nb_exemplaire;
	}
	public function get_ref():string{
		return $this->ref;
	}

	//***************SETTER**************************

	public function set_titre(string $titre){
		$this->titre = $titre;
	}

	public function set_nb_exemplaire($nb){
		$this->nb_exemplaire = $nb;
	}
	public function set_ref(string $ref){
		$this->ref = $ref;
	}
	public function disponible(string $nom ,int $nb_exemplaire):boolen{
		if($nb_exemplaire > 0){
			return true;
		}else{
			//throw new OeuvreIndisponible($nom);
			echo "erreur";
			
		}
	}
}

?>