<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Challenge PHP</title>
</head>
<body>

<h1> Exercice 1 niveau 2</h1>
<p>Les tableaux formateurs sont :<br>

$cuissons = ["à point", "bleu", "saignant","bien cuit"];<br>
$viandes = ["Poulet","Boeuf","Mouton"];
</p>

<p>Le resultat est :</p>
<?php 

$cuissons = ["à point", "saignant", "bleu", "bien cuit"];
$viandes = ["poulet", "boeuf", "mouton"];

include "exo1.php";
print_r (exo1($cuissons, $viandes));
?>

<h1>Exercice 2 niveau 2</h1>

<p>La chaine de valeur est :<br>
$genres = "horreur fantastique action western thriller comédie drame romance historique";<br>
</p>

<?php

$genres = "horreur fantastique action western thriller comédie drame romance historique";

include "exo2.php";
print_r (exo2($genres));
?>

<h1>Exercice 3 niveau 2</h1>

<p>Le tableau formateur est :<br>

$fruits = ["orange", "banane", "pomme", "fraise", "tomate", "framboise", "noix de coco", "ananas"];<br>
</p>
<p>Le resultat est :</p>
<?php

$fruits = ["orange", "banane", "pomme", "fraise", "tomate", "framboise", "noix de coco", "ananas"];

include "exo3.php";
print_r (exo3($fruits));
?>

<h1>Exercice 4 niveau 2</h1>

<p>Le tableau formateur est :<br>

$prenoms = ["Harry", "Hilary", "Harrington", "Hagrid", "Holmes"];
</p>
<p>Le resultat est :</p>
<?php 

$prenoms = ["Harry", "Hilary", "Harrington", "Hagrid", "Holmes"];
include "exo4.php";
print_r(exo4($prenoms));
?>

</body>
</html>