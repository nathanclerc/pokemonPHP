<?php 

	class Marisson extends Pokemon{

		public function __construct(){

			try {
				$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
				$bdd = new PDO('mysql:host=localhost;dbname=pokemon;charset=utf8', 'simoccauch19','azerty', $pdo_options);
			}
			catch (PDOException $e) {
				print "Erreur !: " . $e->getMessage() . "<br/>";
				die();
			}

			$reponse = $bdd->query("SELECT * FROM pokemon WHERE pokemon_nom = 'marisson' ");
			$donnees=$reponse->fetch();

			$this -> pv = $donnees['pokemon_pv'];
			$this -> type = 'herbe';
			$this -> nom = 'Marisson';
			$this -> attaque1 = 'fouet liane';
			$this -> degat1 = 10;
			$this -> attaque2 = 'canon graine';
			$this -> degat2 = 20;
			$this -> faiblesse = 'feu';
			$this -> carte = 'mar.jpeg';

		}

		public function att1( Pokemon $poke){
			if ($poke -> type == 'eau') {
				$poke -> pv = $poke -> pv - $this -> degat1*2;
			}else{
				$poke -> pv = $poke -> pv - $this -> degat1;
			}
			return $poke -> pv;
		}

		public function att2( Pokemon $poke){
			if ($poke -> type == 'eau') {
				$poke -> pv = $poke -> pv - $this -> degat2*2;
			}else{
				$poke -> pv = $poke -> pv - $this -> degat2;
			}
			return $poke -> pv;
		}

	}

?>