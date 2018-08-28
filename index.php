<?php ini_set('display_errors', 1); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pokegame</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
	require_once 'pokemon.class.php';
	require_once 'feunnec.class.php';
	require_once 'marisson.class.php';
	require_once 'grenousse.class.php';

	$marisson = new marisson;
	$grenousse = new grenousse;
	$feunnec = new feunnec;

	if (isset($_GET['a1'])) {

		$marisson -> att1($grenousse);

	}
	if (isset($_GET['a2'])) {

		$marisson -> att2($grenousse);

	}
	if (isset($_GET['ga1'])) {

		$grenousse -> att1($marisson);

	}
	if (isset($_GET['ga2'])) {

		$grenousse -> att2($marisson);

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
			<form method="get">
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
			<form method="get">
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
</body>
</html>
