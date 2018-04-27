<html>
	<head>
		<link rel="stylesheet" type="text/css" href="index1.css">
	</head>
	<body>
<h1>Amazune</h1>
<?php

$livre1 = array(
	'titre' => 'La nuit du renard',
	'prix' => 10,
	'note' => 4,
	'p' => 'pas prim',
);

$livre2 = array(
	'titre' => 'Pug l\'apprentie',
	'prix' => 15.99,
	'note' => 5,
	'p' => 'prim',
);

$livre3 = array(
	'titre' => 'The Jobs',
	'prix' => 6.99,
	'note' => 3,
	'p' => 'prim',
);

$livre4 = array(
	'titre' => 'Alice au pays des reves',
	'prix' => 25.99,
	'note' => 1,
	'p' => 'pas prim',
);


$livre5 = array(
	'titre' => 'Comment cuir des tomates',
	'prix' =>  20,
	'note' => 2,
	'p' => 'pas prim',
);

$livre6 = array(
	'titre' => 'Les fleur du mal',
	'prix' => 5.99,
	'note' => 3,
	'p' => 'prim',
);

$livre = array($livre1, $livre2, $livre3, $livre4, $livre5, $livre6);

foreach ($livre as $titre) {

	echo '<div class=border>';



	echo $titre['titre'].'<br />';
	echo $titre['prix'].'<br />';
	echo $titre['note'].'<br />';
	echo $titre['p'].'<br />';
	echo '</div>';
	echo '<br />';

}

?>



	</body>
</html>