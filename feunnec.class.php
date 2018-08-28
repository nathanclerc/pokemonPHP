<?php 


	class Feunnec extends Pokemon{
		public function __construct(){

			try {
				$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
				$bdd = new PDO('mysql:host=localhost;dbname=pokemon;charset=utf8', 'simoccauch19','azerty', $pdo_options);
			}
			catch (PDOException $e) {
				print "Erreur !: " . $e->getMessage() . "<br/>";
				die();
			}

			$reponse = $bdd->query("SELECT * FROM pokemon WHERE pokemon_nom = 'feunnec' ");
			$donnees=$reponse->fetch();

			$this -> pv = $donnees['pokemon_pv'];
			$this -> type = 'feu';
			$this -> nom = 'Feunnec';
			$this -> attaque1 = 'griffe';
			$this -> attaque2 = 'charbon mutant';
			$this -> faiblesse = 'eau';
			$this -> carte = 'feunnec.jpeg';

		}
	}

?>