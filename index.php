<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <link rel="stylesheet" href="style.css">
    <title>Index Exercices PHP</title>
</head>
<body>
<h1>DESCODEUSES - EXERCICES PHP</h1>

<h2 id="#1" class="animate__animated animate__pulse">Exercice 1</h2>
<p>Créez une variable et lui affecter <strong>une chaîne de caractères</strong>. Afficher cette variable.</p>

<?php
$name = "Anne";

echo " $name <br />"
?>
<h2 id="#1" class="animate__animated animate__pulse">Exercice 2</h2>
<p><b>Créez trois variables : nom, prénom, âge. Afficher ces variables dans une phrase. (ex: Je m'appelle "nom prénom" et j'ai "age" ans.)</b></p>

<?php
$fname = "Anne";
$lname = "Dupin";
echo "\n
Je m'appelle " . $fname . " et mon nom de famille est " . $lname . " . ";

$i = 29;
echo "J'ai " . $i . " ans.\n";

?>

<?php 
$lastname = "Dupin";
$firstname = "Anne";
$age = 29;
var_dump($lastname, $firstname, $age);
?>

<h2 class="animate__animated animate__pulse">Exercice 3</h2>
<p><b>Créez une variable âge. Afficher vous êtes majeur ou vous êtes mineur en fonction de l'âge.</b></p>
<?php 

$age = 17;

echo "J'ai " . $age . " ans et je suis mineur.e ";
?>

<?php
$age = 20; 
if ($age <= 18) {
    var_dump('Tu es mineur.e');
} else {
    var_dump('Tu es majeur.e');
}

$age = 20;
$sentence = "Tu est majeur.e";
if ($age <= 18) {
    $sentence = "Tu est mineur.e";
}
var_dump($sentence);
?>

<h2 class="animate__animated animate__pulse">Exercice 4</h2>
<p><b>Créez une variable age aléatoire. Afficher vous êtes majeur ou vous êtes mineur en fonction de l'âge obtenu.</b></p>

<?php 
//echo rand 
$minor = rand(1,18);
$major = rand(18,52);

echo "J'ai " . $major . " ans, donc je suis majeur.e. ";
echo "\n J'ai " . $minor . " ans, donc je suis mineur.e. ";

?>

<h2 class="animate__animated animate__pulse">Exercice 5</h2>
<p><b>Créez une variable âge et une variable genre. Afficher aléatoirement vous êtes une femme et vous avez xans ou vous êtes un homme et vous avez xans ou vous êtes de genre neutre et vous avez xans.</b></p>

<?php

$age = rand(18, 55);

function randomGender() {
    $gender = array(
        'femme',
        'homme',
        'neutre'
    );
    return $gender[rand ( 0 , count($gender) -1)];
}

echo "J'ai " . $age . " ans et je suis du genre " . randomGender() . ".";

?>


<h2 class="animate__animated animate__pulse">Exercice 6</h2>
<p><b>Créez une variable magnitude allant de 0 à 9. Gérez l'affichage selon la magnitude.</b></p>
<p><ul>
    <li>1. Micro-séisme impossible à ressentir</li>
    <li>2. Micro-séisme impossible à ressentir mais enregistrable par les sismomètres</li>
    <li>3. Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti</li>
    <li>4. Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats</li>
    <li>5. Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de 		construction. Peu de dégats sur des bâtiments modernes</li>
    <li>6. Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre</li>
    <li>7. Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance</li>
    <li>8. Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres</li>
    <li>9. Séisme capable de tout détruire sur une très vaste zone.</li>

    </ul>
</p>



<?php
$richter = 5;
switch ($richter) {
    case 1:
        var_dump("Micro-séisme impossible à ressentir.");
        foreach($a as $b) {
            echo "ok";
        }
        break;
    case 2:
        var_dump("Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.");
        break;
    case 3:
        var_dump("Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.");
        break;
    case 4:
        var_dump("Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.");
        break;
    case 5:
        var_dump("Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.");
        break;
    case 6:
        var_dump("Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.");
        break;
    case 7:
        var_dump("Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.");
        break;
    case 8:
        var_dump("Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.");
        break;
    case 9:
        var_dump("Séisme capable de tout détruire sur une très vaste zone.");
        break;
    default:
        var_dump("Valeur inconnue");
}
?>

</body>
</html>
