<?php 


	class marisson extends pokemon{

		public function __construct(){

			$this -> pv = 60;
			$this -> type = 'herbe';
			$this -> nom = 'Marisson';
			$this -> attaque1 = 'fouet liane';
			$this -> degat1 = 10;
			$this -> attaque2 = 'canon graine';
			$this -> degat2 = 20;
			$this -> faiblesse = 'feu';
			$this -> carte = 'mar.jpeg';

		}

		public function att1($vie){
			if ($vie -> type == 'eau') {
				$vie -> pv = $vie -> pv - $this -> degat1*2;
			}else{
				$vie -> pv = $vie -> pv - $this -> degat1;
			}
			return $vie -> pv;
		}

		public function att2($vie){
			if ($vie -> type == 'eau') {
				$vie -> pv = $vie -> pv - $this -> degat2*2;
			}else{
				$vie -> pv = $vie -> pv - $this -> degat2;
			}
			return $vie -> pv;
		}

	}

?>