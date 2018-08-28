<?php ini_set('display_errors', 1);?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pokegame</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
	try {
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		$bdd = new PDO('mysql:host=localhost;dbname=pokemon;charset=utf8', 'simoccauch19','azerty', $pdo_options);
	}
	catch (PDOException $e) {
		print "Erreur !: " . $e->getMessage() . "<br/>";
		die();
	}
	require_once 'pokemon.class.php';
	require_once 'feunnec.class.php';
	require_once 'marisson.class.php';
	require_once 'grenousse.class.php';

	$marisson = new Marisson;
	$grenousse = new Grenousse;
	$feunnec = new Feunnec;

	if (isset($_GET['a1'])) {

		$marisson -> att1($grenousse);

		$req = $bdd->prepare('UPDATE
			pokemon
			SET
			pokemon_pv = :pokemon_pv
			WHERE
			pokemon_nom = "grenousse";');

		$req->execute(array(
			':pokemon_pv' => $grenousse -> pv
		));
		header('Location: index.php');
	}
	if (isset($_GET['a2'])) {

		$marisson -> att2($grenousse);

		$req = $bdd->prepare('UPDATE
			pokemon
			SET
			pokemon_pv = :pokemon_pv
			WHERE
			pokemon_nom = "grenousse";');

		$req->execute(array(
			':pokemon_pv' => $grenousse -> pv
		));
		header('Location: index.php');
	}
	if (isset($_GET['ga1'])) {

		$grenousse -> att1($marisson);

		$req = $bdd->prepare('UPDATE
			pokemon
			SET
			pokemon_pv = :pokemon_pv
			WHERE
			pokemon_nom = "marisson";');

		$req->execute(array(
			':pokemon_pv' => $marisson -> pv
		));
		header('Location: index.php');
	}
	if (isset($_GET['ga2'])) {

		$grenousse -> att2($marisson);

		$req = $bdd->prepare('UPDATE
			pokemon
			SET
			pokemon_pv = :pokemon_pv
			WHERE
			pokemon_nom = "marisson";');
		
		$req->execute(array(
			':pokemon_pv' => $marisson -> pv
		));
		header('Location: index.php');
	}

	if (isset($_POST['rejouer'])) {

		$req = $bdd->prepare('UPDATE
			pokemon
			SET
			pokemon_pv = :pokemon_pv;');
		
		$req->execute(array(
			':pokemon_pv' => 60
		));
		header('Location: index.php');
	}
	?>
	<div>
		<?php
		echo $marisson -> afficher() . 
		'<div>'
		. $marisson -> pv . 
		'</div>';
		?>
		<div>
			<form method="get" action="index.php">
				<button type="submit" name="a1">Attaque 1</button>
				<button type="submit" name="a2">Attaque 2</button>
			</form>
		</div>
	</div>
	<div>
		<?php
		echo $grenousse -> afficher() .
		'<div>'
		. $grenousse -> pv . 
		'</div>';
		?>
		<div>
			<form method="get" action="index.php">
				<button type="submit" name="ga1">Attaque 1</button>
				<button type="submit" name="ga2">Attaque 2</button>
			</form>
		</div>
	</div>
	<div>
		<?php
		echo $feunnec -> afficher() . 
		'<div>'
		. $feunnec -> pv . 
		'</div>';
		?>
	</div>
	<form method="post" action="index.php">
		<button type="submit" name="rejouer">Rejouer</button>
	</form>
</body>
</html>