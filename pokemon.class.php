<?php 

	class pokemon{

		public $pv;
		public $type;
		public $nom;
		public $attaque1;
		public $attaque2;
		public $faiblesse;
		public $carte;

		public function __construct($pv, $type, $nom, $attaque1, $attaque2, $faiblesse, $carte){

			$this -> pv = $pv;
			$this -> type = $type;
			$this -> nom = $nom;
			$this -> attaque1 = $attaque2;
			$this -> attaque2 = $attaque2;
			$this -> faiblesse = $faiblesse;
			$this -> carte = $carte;

		}

		public function afficher(){
			if($this -> pv != 0){
				print '<div><img class="carte" src="assets/' . $this-> carte . '"></div>';
			}else {
				print '<div><h2>' . $this-> nom . ' est mort</h2></div>';
			}
		}

	}



?>