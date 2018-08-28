<?php 

	class Grenousse extends Pokemon{

		public function __construct(){

			try {
				$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
				$bdd = new PDO('mysql:host=localhost;dbname=pokemon;charset=utf8', 'simoccauch19','azerty', $pdo_options);
			}
			catch (PDOException $e) {
				print "Erreur !: " . $e->getMessage() . "<br/>";
				die();
			}

			$reponse = $bdd->query("SELECT * FROM pokemon WHERE pokemon_nom = 'grenousse' ");
			$donnees=$reponse->fetch();

			$this -> pv = $donnees['pokemon_pv'];
			$this -> type = 'eau';
			$this -> nom = 'Grenousse';
			$this -> attaque1 = 'écras face';
			$this -> degat1 = 10;
			$this -> attaque2 = 'goutte à goutte';
			$this -> degat2 = 20;
			$this -> faiblesse = 'herbe';
			$this -> carte = 'grenou.jpeg';

		}

		public function att1( Pokemon $poke){
			if ($poke -> type == 'feu') {
				$poke -> pv = $poke -> pv - $this -> degat1*2;
			}else{
				$poke -> pv = $poke -> pv - $this -> degat1;
			}
			return $poke -> pv;
		}

		public function att2( Pokemon $poke){
			if ($poke -> type == 'feu') {
				$poke -> pv = $poke -> pv - $this -> degat2*2;
			}else{
				$poke -> pv = $poke -> pv - $this -> degat2;
			}
			return $poke -> pv;
		}
	}

?>