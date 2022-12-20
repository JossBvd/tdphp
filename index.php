<?php

//exercice 1
$firstName = "Jocelyn";
$name = "Bonvard";
$age = 29;

echo $firstName . "\n";
echo $name . "\n";
echo $age . "\n";

//exercice 2
$km = 1;
echo $km . "\n";
$km = 3;
echo $km . "\n";
$km = 125;
echo $km . "\n";

//exercice 3
$string = "";
$int = 0;
$float = 0.0;
$boolean = true;

echo $string . "\n";
echo $int . "\n";
echo $float . "\n";
echo $boolean . "\n";

//exercice 4
$note1 = 10;
$note2 = 17;
$note3 = 8.6;

$moyenne = ($note1 + $note2 + $note3) / 3;
echo round($moyenne);

define("CAPITALE", "Paris"); //Permet de définir une constante en php
echo CAPITALE . "\n";

//8dec2022

//exercice 1

define("GENDER", "Monsieur");
define("FIRST_NAME", "Jocelyn");
define("NAME", "Bonvard");
$age = 29;

echo "Bonjour je m'appel " . GENDER . " " . FIRST_NAME . " " . NAME . " et j'ai " . $age . " ans" . "\n";

//exercice 2

define("BROMURE", "Br-");

echo "La formule chimique de l'ion bromure est " . BROMURE . "\n";

//exercice 3

$number1 = 5;
$number2 = 18;

$number3 = $number1 + $number2;
echo $number3 . "\n";

$number3 = $number1 - $number2;
echo $number3 . "\n";

//Utiliser la valeur de cette variable pour definir votre age dans une phrase qui correspondra à votre description ( nom, prenom, age) afficher le résultat et ensuite incrémenter votre age de 1.
$age = $number3 - $number3 + $age;

echo "Bonjour je m'appel " . GENDER . " " . FIRST_NAME . " " . NAME . " et j'ai " . $age . " ans" . "\n";

$age++;
echo "Bonjour je m'appel " . GENDER . " " . FIRST_NAME . " " . NAME . " et j'ai " . $age . " ans" . "\n";

//exercice 4

/*L'éducation national mène une enquête pour savoir si les français ont une bonne mémoire, pour cela vous êtes chargé de définir dans des variables ou des constantes en essayant d'être le plus cohérent possible les valeurs du : 
Théorème de pythagore
Théorème de Thalès
la valeur de pi
Si vous avez déjà sauté une classe
si vous vez déjà redoublé une classe
Afficher le résultat.*/

define("PYTHAGORE", "AB^2 = AC^2 + BC^2");
define("THALES", "AB/AM = AC/AN = BC/MN");
define("PI", pi());
$skypeGrade = false; //Renvoi 0 donc "non"
$repeatGrade = true; //Renvoi 1 donc "oui"

echo "Théorème de Pythagore: " . PYTHAGORE . "\n" . "Théorème de Thalès: " . THALES . "\n" . "La valeur de pi: " . PI . "\n" . "Avez-vous sauté une classe ? : " . $skypeGrade . "\n" . "Avez-vous redoublé une classe ? : " . $repeatGrade . "\n";

//Bonus:
if (PYTHAGORE === "AB^2 = AC^2 + BC^2") {
    echo "Bonne réponse !" . "\n";
} else {
    echo "Mauvaise réponse" . "\n";
};

if (THALES === "AB/AM = AC/AN = BC/MN") {
    echo "Bonne réponse !" . "\n";
} else {
    echo "Mauvaise réponse" . "\n";
};

if (PI === pi()) {
    echo "Bonne réponse !" . "\n";
} else {
    echo "Mauvaise réponse" . "\n";
};

if ($skypeGrade === true) {
    echo "J'ai sauter une classe" . "\n";
} else {
    echo "Je n'ai pas sauter de classe" . "\n";
};

if ($repeatGrade === true) {
    echo "J'ai redoubler une classe" . "\n";
} else {
    echo "Je n'ai pas redoubler de classe" . "\n";
};

// Création d'exercice

/*Un client veut obtenir un pret à la banque avec un taux fixe de 1.65% par an pour un projet immobilier.
A l'aide de variable et de constante, afficher le montant des interet, le remboursement total, que le client devra rembourser.
Le client peut rembourser sur 20 ou 30 ans
Afficher le montant qu'il devra rembourser par an, pour la premièe eventualité, affichez le; puis la deuxième eventualité, affichez le.

*/

$pret = 120000;
define("TEAG_FIXE", 1.65);
$montantInteret = ($pret * TEAG_FIXE / 100);
echo $montantInteret . "\n";
$sum = $pret + $montantInteret;
echo $sum . "\n";

$remboursement = $sum / 20;
echo "Le client remboursera " . $remboursement . " par an sur 20 ans" . "\n";

$remboursement = $sum / 30;
echo "Le client remboursera " . $remboursement . " par an sur 30 ans";

/* -------------------------------------------------------------- */

//09dec22: les tableaux = regrouper des valeurs pour pouvoir les réutiliser de facon dynamique

//exercice 1: Créer un tableau avec vos langages de programmation favoris et l'afficher.

$program = array("php", "javascript", "react");

print_r($program);

//exercice 2: Créer un tableau associatifs dans lequel sera présent votre nom / prenom / age et si vous avez une voiture.

$identite = array(
    "name" => "Bonvard",
    "firstName" => "Jocelyn",
    "myAge" => 29,
    "car" => true
);


print_r($identite);

//exercice 3: Dans votre tableau de langues récupérer votre langage favoris et afficher le. Ensuite afficher moi la phrase : " Mon langage préféré est le : "

//$program = array("php", "javascript", "react");

print_r($program[1]);

echo "\n";

echo "Mon langage préféré est le : " . $program[1] . "\n";

//exercice 4 : récupérer le nombre d'éléments dans votre tableau et afficher le dans une phrase de ce type : " Voici le nombre de langues dans ce tableau : "astuce : Faites appel à une méthode.

echo "Voici le nombre de langues dans ce tableau : " . count($program) . "\n";

//Dans le tableau: Afficher le "t" de Javascript

print_r($program[1][9]);

echo "\n";

//exercice 5 : Dans votre tableau associatif crée précédemment réussir à extraire des informations et les afficher pour avoir comme exemple : " Prénom : Chris " " Nom : Chevalier"  "age : 28 "

/*$identite = array(
    "name" => "Bonvard",
    "firstName" => "Jocelyn",
    "myAge" => 29,
    "car" => true
);*/

echo "Prénom : " . ($identite["firstName"]) . "\n" . "Nom : " . ($identite["name"]) . "\n" . "Age : " . ($identite["myAge"]) . "\n";

//Même consigne, en affichant des {} dans la réponse:

echo "Prénom : {$identite["firstName"]} Nom : {$identite["name"]} Age : {$identite["myAge"]}";
echo "\n";

//Utilisation de foreach : boucle pour tableau

$program = array("php", "javascript", "react");

foreach ($program as $prog) { //as $prog permet de déclarer une nouvelle variable qui permet de recupérer une valeur
    echo "{$prog}";
    echo "\n";
};

//exercice 1 : création de tableau avec 5 prénoms dedans et les affichés de manières dynamiques grâce à une boucle sans que ces valeurs ne soit collé les unes aux autres.

$names = ["Jean", "Yves", "Momo", "Eva", "Julie"];

foreach ($names as $nam) {
    echo "{$nam}";
    echo "\n";
};

//Exercice 2 : Dans votre tableau associatif crée précédemment réussir à extraire des informations et les afficher pour avoir comme exemple : " Prénom : Chris " " Nom : Chevalier" "age : 28 " AVEC FOREACH !!!!

/*$identite = array(
    "name" => "Bonvard",
    "firstName" => "Jocelyn",
    "myAge" => 29,
    "car" => true
);*/

foreach ($identite as $key => $identity) {
    echo "{$key} : {$identity} \n";
};

//Exercice 3 : A l'aide d'un tableau multidimentionnelle réussir à faire ça :
//("X","O","O");
//("X","O","X");
//("X","X","O");

/*$morpion = array(
    array("X","O","O"), 
    array("X","O","X"), 
    array("X","X","O")
);*/

$morpion = [
    ["X", "O", "O"],
    ["X", "O", "X"],
    ["X", "X", "O"]
];

foreach ($morpion as $case) {
    echo "$case[0]";
    echo "$case[1]";
    echo "$case[2]\n";
};

// Créer un tableau associatif en associant 4 valeurs " Wordpress, Bootstrap, symphony et react" a des langages de programmation (HTML,CSS,JAVASCRIPT,PHP). Le framework HTML est écrit en : Wordpress.

$langages = array(
    "HTML" => "Wordpress",
    "CSS" => "Bootstrap",
    "PHP" => "Symphony",
    "Javascript" => "React"
);

foreach ($langages as $framework => $program) {
    echo "Le framework {$framework} est écrit en : {$program} \n";
};

//Créer un tableau d'aliments dans lequel vous devrez ajouter une valeur ("Avocat").

$aliments = array("salade", "tomate", "oignon");

array_push($aliments, "avocat"); // ajoute une valeur à la fin d'un tableau

print_r($aliments);

unset($aliments[0]); // supprime une valeur d'un tableau

print_r($aliments);

//ex : Créer un  tableau de number et l'afficher de plus petit au plus grand ( l'afficher ) et ensuite du plus grand au plus petit.

$numbers = array(12, 9, 55, 43);

sort($numbers); //tri le tableau par ordre croissant

print_r($numbers);

rsort($numbers); // tri le tableau par ordre décroissant

print_r($numbers);

//Ex: Extraire d'un tableau qui va contenir 6 valeurs de types string, 2 valeurs aléatoires.

$tshirt = array("rouge", "jaune", "bleu", "violet", "vert", "gris");

$randTshirt = array_rand($tshirt, 2);

echo $tshirt[$randTshirt[0]] . "\n";
echo $tshirt[$randTshirt[1]] . "\n";

/*Ex: Créer un tableau avec pour valeur : "html","css",Javascript,"Php". Respecter bien cette ordre. En utilisant ce tableau créer une variable ayant pour valeur tap que vous nommerez mot.
ensuite ajouter cette variable dans votre tableau aliments créé hier.
et pour finir utiliser ce meme tableau pour récupérer la premièere valeur et la stocké dans une constante et faire une phrase avec.*/

$progs = array("html", "css", "javascript", "php");

$mot = $progs[0][1] . $progs[2][1] . $progs[3][0];
echo $mot; //check variable

//$aliments = array("salade","tomate","oignon");

array_push($aliments, $mot);

print_r($aliments); // check du tableau

define("TOMATE", $aliments[1]);

echo "Je mets toujours de la " . TOMATE . " dans mon grec" . "\n";

echo "\n";
//ex: Avec une boucle for classique réussir à sortir les éléments d'un tableau langue précédement.

$langages = array("php", "html", "css", "javascript");

$size = count($langages); //Methode count() permet de compter automatiquement les valeurs, pour éviter de se tromper

for ($i = 0; $i < $size; $i++) {
    echo $langages[$i] . "\n";
};

//ex: recupérer P M S V avec une boucle for

for ($i = 0; $i < $size; $i++) {
    echo $langages[$i][2] . "\n"; // Chaque lettre voulu est en 3eme position
};

//ex: Afficher la table de multiplication de 5 avec la boucle for. 1) 5 X 1 = 5

for ($i = 1; $i < 11; $i++) {
    echo "{$i}) 5 X {$i} = ";
    echo 5 * $i . "\n";
};

/*Exo 1 

- Dans une variable de type array assigné lui cpmme valeur le nom de vos villes favorites
- Rajouté une ville dedans
- Récupérer la longueur de votre tableau
- Afficher vos villes grâce à une boucle
- Dans ce même tableau récupérer les premières lettres de chaque mot pour les stockés dans une variable de votre choix.
-Utiliser ce mot dans une phrase dans laquel votre nom et votre prénom séront présent ( il est interdit d'écrire votre nom et prénom en dur !!!!!).
*/

$cities = array("Paris", "Amsterdam", "Barcelone");

array_push($cities, "Abidjan");

print_r($cities);

$count = count($cities);

echo ($count) . "\n";

for ($i = 0; $i < $count; $i++) {
    echo $cities[$i] . "\n";
};

$firstLetter = $cities[0][0] . $cities[1][0] . $cities[2][0] . $cities[3][0];

echo $firstLetter . "\n";

echo "Je m'appel {$firstName} {$name}, le mot: '{$firstLetter}' contient une des lettres de mes initiales.\n";

/*Exo 2 

Déclarer une variable de votre choix dans lequel vous stockerez 3 noms de pays et leurs 3 capitales correspondantes.
Afficher l'intégralité des informations grâce à la boucle de votre choix.*/

$countries = array("France" => "Paris", "Espagne" => "Madrid", "Italie" => "Rome");

print_r($countries);

foreach ($countries as $country => $city) {
    echo $country . " : " . $city . "\n";
};

//ex: A l'aide d'une boucle while afficher l'intégralité des code postal possible du 77.

$departement = 77000;
while ($departement < 78000) {
    echo $departement++ . "\n";
};

//ex: Déclarer une variable $identite qui contient une chaine de caractères. Créer une condition qui affiche un message différent en fonction de la valeur de la variable.

$identite = "";

if ($identite === "") {
    echo "La variable est vide";
} else {
    echo "La variable est défini";
};

echo "\n";

//ex
$identite = "homme";

if ($identite === 'femme') {
    echo "Bonjour Madame";
}

if ($identite === strtolower('HOMME')) //strtoupper = transforme un srting en majuscule -- strtolowercase = minuscule
{
    echo "Bonjour Monsieur";
} else {
    echo "Bonjour inconnue";
}
echo "\n";

//ex: Avec vos connaissances définir si une personne est majeure ou non.

$age = 29;

if ($age >= 18) {
    echo "La personne est majeur";
} else {
    echo "La personne est mineur";
};
echo "\n";

//ex: Vous allez faire vos courses de noel avec un budget de départ. Vous avez déjà calculé au préalable combien vont vous couter vos achats. Grâce à vos connaissances écrire un programme permettant de savoir si grâce à votre budget vous pourrez payer vos courses.

$budget = 150;
$price = 250;

if ($price <= $budget) {
    echo "Vous pourrez payer vos courses.";
} else {
    echo "Attention: Vous ne pourrez pas payer vos courses !";
};
echo "\n";

//ex: Vous êtes gestionnaire de stock et vous avez dans votre magasin : des chaussures, des jeans et des casquettes. Vous avez besoin de savoir si le stock est optimal et pour cela vous avez déjà défini un nombres d'articles minimum à avoir. En tant que developpeur vous êtes chargé d'écrire le code qui permettre de savoir quels sont les produits avec un stock optimal.

$stock = array(
    "shoes" => 10,
    "jeans" => 30,
    "cap" => 50
);

$minStock = 30;

foreach ($stock as $key => $value) {
    if ($value >= $minStock) {
        echo "Le stock de {$key} est optimal\n";
    } else {
        echo "Le stock de {$key} n'est pas optimal\n";
    }
};

//Récupérer le nombres d'habitants de la : France, Suede, Suisse, Malte, Mexique et l'allemagne. En tant que developpeur afficher cette phrase : " Les pays suivants ont une population supérieure à 20 millions :"( afficher les pays)echo "\n";

$population = array( //valeur en millions
    "France" => 67.5,
    "Suede" => 10.42,
    "Suisse" => 8.7,
    "Malte" => 0.5,
    "Mexique" => 130.3,
    "Allemagne" => 83.13,
);

$million = 20;

echo "Les pays suivants ont une population supérieure à 20 millions : ";

foreach ($population as $key => $value) {
    if ($value > $million) {
        echo $key . " ";
    }
};

echo "\n";

//ex: Avec une conditions switch definir vous êtes de quelle nationalité.

$origin = "francais";

switch ($origin) {
    case 'francais':
        echo "Vous êtes francais";
        break;
    case "espagnol":
        echo "Vous êtes espagnol";
        break;
    case "italien":
        echo "Vous êtes italien";
        break;
    case "portugais":
        echo "Vous êtes portugais";
        break;
    case "belge":
        echo "Vous êtes belge";
        break;
    default:
        echo "Vous êtes inconnus";
        break;
};

echo "\n";

//ex: Créer une fonction qui permet de retourner si une personne est éligible au vote.

function vote($firstName, $age)
{
    if ($age >= 18) {
        echo "{$firstName}, vous êtes éligible au droit de vote.";
    } else {
        echo "{$firstName}, vous n'êtes pas éligible au droit de vote.";
    }
}

vote("Jocelyn", 29);

echo "\n";
//ex: ecrire une fonction a 2 arguments qui affiche une phrase de présentation avec le nom et le prénom.

function presentation($firstName, $name)
{
    echo "Bonjour, je m'appelle {$firstName} {$name}.";
}

presentation("Jocelyn", "Bonvard");

echo "\n";
//ex: ecrire une fonction à 2 arguments qui affiche la saison et la temperature de votre choix.

function meteo($saison, $degre)
{
    echo "Saison: {$saison}\n";
    echo "Température: {$degre}°";
}

meteo("hiver", 2);

echo "\n";

//ex: ecrire une fonction qui permet de retourner le calcul de TVA.


function calcul_tva($price, $taux)
{
    $total = ($taux / 100) + 1;
    return ($price * $total) - $price;
}

echo calcul_tva(80, 20); //la fonction nous donne le montant de la tva pour un prix et un type de tva donnée

echo "\n";
//ex: ecrire une fonction qui retourne l'air d'un rectangle

function air_rectangle($length, $width)
{
    return $length * $width;
}

echo air_rectangle(50, 20);

echo "\n";
echo "\n";
echo "\n";
echo "\n";

//ex: En utilisant la méthode rand(), remplir un tableau avec 10 nombres aléatoires. Puis tester si le chiffre 42 est dans le tableau et afficher un message en conséquence. Afficher votre tableau pour voir la valeur obtenue.

$randomNumbers = array();

for ($i = 0; $i < 10; $i++) {
    $randomNumbers[$i] = rand(0, 50); //rand() => nombre aleatoire, 2 parametre pour les interval
}

/*OU
$i = 0;
while($i < 10) {
    $randomNumbers[] = rand(0, 50);
    $i++;
}*/

if (in_array(42, $randomNumbers)) { //in_array() => recherche dans un tableau, 1er argument = valeur recherché / 2eme argument = array
    echo "Le chiffre 42 est dans le tableau" . "\n";
} else {
    echo "Le chiffre 42 n'est pas dans le tableau" . "\n";
}

print_r($randomNumbers);

echo "\n";
echo "\n";

//ex: Automatisé un programme permettant de multiplier un nombre donné par huit si c'est un nombre pair et par neuf sinon.

function multiplication($number) {
    if ($number%2 === 0) {
        return $number*8;
    } else {
        return $number*9;
    }
}

echo multiplication(10);
echo "\n";
echo multiplication(9);

//ex: Bob a besoin d'un moyen rapide pour calculer le volume d'un cuboide avec trois valeurs : le length, width et le height du cuboide. Ecrivez une fonction pour aider Bob dans ce calcul.

function vol_cuboide($length, $width, $heigh) {
    return $length*$width*$heigh;
}

echo vol_cuboide(3,3,3);

/* Exo 3 :

Les logiciels de reconnaissance de caractères sont largement utilisés pour numériser des textes imprimés. Ainsi, les textes peuvent 
être édités, recherchés et stockés sur un ordinateur.
les logiciels de reconnaissance de caractères font souvent des erreurs.

 Votre tâche consiste à corriger les erreurs dans le texte numérisé. 
 Vous n'avez qu'à gérer les erreurs suivantes :

 S est mal interprété comme 5
 O est mal interprété comme 0
 I est mal interprété comme 1 

Definir une function permettant de corriger ce problème.*/

//transformer les 5 en S, les 0 en O, les 1 en I
echo "\n";

function corriger($texte) {
    return str_replace(["5","0","1"],["s","o","i"],$texte);
} // str_replace = remplace un caractère par un autre: (1er arg = ce qu'on remplace), (2eme arg = par quoi on remplace), (3eme arg = dans quoi on remplace)

echo corriger("mehd1");

echo "\n";
echo "\n";

//ex: Dans une situation à 2 joueurs créer une version du jeux "PIERRE, FEUILLE, CISEAUX". N'oublié pas de penser à toutes les éventualités.
/*
Pierre > ciseaux
Pierre < feuille
Pierre = Pierre
feuille < ciseau
feuille = feuille
feuille > pierre
ciseaux = ciseaux
ciseaux > feuille
ciseaux < pierre

*/
function shifumi($player1, $player2) {
    switch ([$player1, $player2]) {
        case ["pierre", "ciseaux"]:
            echo "Le joueur 1 gagne !"; // J1 win
        break;
        case ["pierre", "feuille"]:
            echo "Le joueur 2 gagne !"; // J2 Win
        break;
        case ["pierre", "pierre"]:
            echo "Egalité !";
        break;
        case ["feuille", "ciseaux"]:
            echo "Le joueur 2 gagne !"; // J2 win
        break;
        case ["feuille", "feuille"]:
            echo "Egalité !";
        break;
        case ["feuille", "pierre"]:
            echo "Le joueur 1 gagne !"; // J1 win
        break;
        case ["ciseaux", "ciseaux"]:
            echo "Egalité !";
        break;
        case ["ciseaux", "feuille"]:
            echo "Le joueur 1 gagne !"; // J1 win
        break;
        case ["ciseaux", "pierre"]:
            echo "Le joueur 2 gagne !"; // J2 WIN
        break;
        
    }
}

shifumi("pierre", "ciseaux");

echo "\n";
echo "\n";

// Meme exo avec 2 if 1 else

function shifumi2($player1, $player2) {
    if (($player1 === "pierre" && $player2 === "ciseaux") 
    || ($player1 === "feuille" && $player2 === "pierre")
    || ($player1 === "ciseaux" && $player2 === "feuille")) {
        echo "Le joueur 1 gagne !";
    } elseif (($player1 === "pierre" && $player2 === "feuille") 
    || ($player1 === "feuille" && $player2 === "ciseaux")
    || ($player1 === "ciseaux" && $player2 === "pierre")) {
        echo "Le joueur 2 gagne !";
    } else {
        echo "Egalité";
    }
}

shifumi2("pierre","ciseaux");

echo "\n";
echo "\n";



