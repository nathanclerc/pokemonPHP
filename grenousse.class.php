<?php 


	class grenousse extends pokemon{

		public function __construct(){

			$this -> pv = 60;
			$this -> type = 'eau';
			$this -> nom = 'Grenousse';
			$this -> attaque1 = 'écras face';
			$this -> degat1 = 10;
			$this -> attaque2 = 'goutte à goutte';
			$this -> degat2 = 20;
			$this -> faiblesse = 'herbe';
			$this -> carte = 'grenou.jpeg';

		}

		public function att1($poke){
			if ($poke -> type == 'feu') {
				$poke -> pv = $poke -> pv - $this -> degat1*2;
			}else{
				$poke -> pv = $poke -> pv - $this -> degat1;
			}
			return $poke -> pv;
		}

		public function att2($poke){
			if ($poke -> type == 'feu') {
				$poke -> pv = $poke -> pv - $this -> degat2*2;
			}else{
				$poke -> pv = $poke -> pv - $this -> degat2;
			}
			return $poke -> pv;
		}
	}

?>