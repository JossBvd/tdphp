<?php
/*************************************Exercice 1 : ( interdiction d'utiliser internet  )

***************Donner la definition d'une variable ? d'une constante ? d'un tableau ? d'une boucle ? et d'une fonction ?*/




echo "Une variable est un conteneur dans lesquel on va stocker une valeur, dans le but de d'utiliser cette valeur autant de fois que l'on souhaite dans nos lignes de codes. Comme son nom l'indique, on peut changer la valeur de la variable indéfiniment.";

echo "\n";
echo "\n";

echo "Une constante est un conteneur dans lesquel on va stocker une valeur, dans le but de d'utiliser cette valeur autant de fois que l'on souhaite dans nos lignes de codes. Contrairement à la variable, une fois que l'on affecte une valeur à une constante, cette valeur ne pourra plus être changé.";

echo "\n";
echo "\n";


echo "Un tableau permet de regrouper plusieurs valeurs ensemble, de tout type, afin de créér une liste de valeurs.";

echo "\n";
echo "\n";

echo "Une boucle est une ligne de code qui va s'executer à répétition (en boucle), tant que la condition donnée pour sortir de celle ci n'est pas atteinte.";

echo "\n";
echo "\n";

echo "Une fonction est un morceau de code qu'on pourra réutilisé dans notre programmation, en appelant cette fonction. Cela nous evite de réécrire ce morceau de code plusieurs fois. On peut considérer une fonction comme un sous-programme."; // automatisation d'un programme avec des arguments

echo "\n";
echo "\n";

/******************************Exercice 2 : Donner les types de données présentes en programmation php.*/



echo "En programmation php, on utilise différents types de données:\n

    -Les chaines de caractères (string): définit en utilisant ''.\n
    -Les nombres: tout les nombres.\n
    -Les boolean: qui répondent par True ou False.\n";
    // On peut ajouter les array;

echo "\n";
echo "\n";


/***************************Exercice 3 : Donner moi la différence entre un site statique et un site dynamique.*/


echo "- Un site statique est un site qui va permettre d'afficher des informations (texte, image, video...), sans que l'utilisateur puisse interagir avec (ex: site vitrine).\n

   - Un site dynamique est un site qui permet à l'utilisateur d'interagir avec celui ci. L'utilisateur pourra, par exemple utiliser une barre de recherche (ex: recherche d'un produit, d'un article...).\n";

echo "\n";
echo "\n";



/**************************Exercice 4 : A quoi servent les bases de donnnées ? à l'aide de quoi nous pouvons définir les éléments à ****************************************insérer en base de donnée ? */


echo "Les bases de données servent à stocker des informations, qui pourront être récuperer par les sites faisant appel à elles. On utilisera des schemas de base de donées afin de stocker les éléments à insérer en base de donnée.";

echo "\n";
echo "\n";


/**************************Exercice 5 : En utilisant certaines méthodes de programmation réussir à afficher ce message :
							
                            "Bienvenue dans votre laboratoire Mr starck"
                          Hier en me laissant vous aviez 39 ans et aujourd'hui
											vous avez 40ans"*/


$name = "Starck";
$yesterdayAge = 39;
$todayAge = 40;

echo "Bienvenue dans votre laboratoire Mr $name.\n"."Hier en me laissant vous aviez $yesterdayAge ans et aujourd'hui vous avez $todayAge ans.\n";

echo "\n";
echo "\n";

                                            
/*Exercice 6 : 
Créer un tableau regroupant ces pays : Portugal,Hongrie,Pologne.
Recupérer le 1er index de chaque pays pour afficher un langage de programmation.
Ajouter ensuite le pays de votre choix dans ce tableau ( afficher le résultat) puis supprimer le portugal du tableau et afficher le résultat final.*/


$countries = array("Portugal", "Hongrie", "Pologne");

$langage = $countries[0][0]. $countries[1][0]. $countries[2][0];

echo $langage."\n\n";

array_push($countries, "France");

print_r($countries)."\n";

unset($countries[0]);

print_r($countries)."\n";

echo "\n";
echo "\n";


/*********************************Exercice 7 : Créer un tableau permettant de savoir combien de places sont disponibles au Parc des princes / Au velodromme et a la Bombonera.
Afficher de manière dynamique l'ensemble de ces données.*/

$stadiums = array(
  "Parc des princes" => 47929,
  "Velodrome" => 67394,
  "Bombonera" => 54000
);

foreach ($stadiums as $stadium => $capacity) {

  echo "$stadium : $capacity places disponibles\n";

};

echo "\n";
echo "\n";

/********************Exercice 8 : Ecrire le programme qui vous permet d'afficher ce message : "Bonjour Monsieur" ou " Bonjour Madame" ou "Bonjour non binaire" selon l'identité de la personne.*/


$gender = "homme";

if ($gender === "homme") {

  echo "Bonjour Monsieur";

} elseif ($gender === "femme") {

  echo "Bonjour Madame";

} else {

  echo "Bonjour non binaire";

};

echo "\n";
echo "\n";


/************************Exercice 9 : Déclarer une variable $heure qui contient la valeur de type integer de votre choix comprise entre 0 et 24. Créer une condition qui affiche un message si l'heure est le matin, l'après-midi ou la nuit.*/

$heure = 16;

if ($heure >= 12 &&  $heure < 24) {

  echo "Nous sommes l'après-midi.\n";

} elseif ($heure >= 6 && $heure < 12) {

  echo "Nous sommes le matin.\n";

} else {

  echo "Nous sommes la nuit.\n";

};

echo "\n";
echo "\n";


/***************Exercice 10 : Vous êtes gestionnaires de stock en jeux vidéo et vous avez dans votre magasin des playstation, des xbox et des switch, vous avez besoin de savoir si votre stock est optimal et pour cela vous avez défini un nombre de console minimum à avoir. En tant que developpeur vous êtes chargé d'écrire le code qui permettra de savoir quels sont les produits avec un stock optimal ou non.
PS : Interdit d'utiliser internet et vos exercices  
PSS :	Vous êtes garant de votre formation la triche ne sert à rien :)*/

$consoles = array(
  "playstation" => 20,
  "xbox" => 30,
  "switch" => 50,
);

$minStock = 30;

foreach ($consoles as $console => $stock) {

  if ($stock >= $minStock) {

    echo "Le stock de $console est optimal\n";

  } else {

    echo "Le stock de $console n'est pas optimal\n";

  }
};

echo "\n";
echo "\n";


/****************************************Exercice 11 : En utilisant la fonction rand(), remplir un tableau avec 10 nombres aléatoires. Puis, trier les valeurs dans deux tableaux distincts. 
Le premier contiendra les valeurs inférieures à 50 et le second contiendra les valeurs supérieures ou égales à 50. Enfin, afficher le contenu des deux tableaux.
( Vous avez le droit de vous aidez de l'exercice à peu près similaire à celui-ci vu en cour)*/

$randArray = array();

for ($i = 1; $i <= 10; $i++) {

  $randArray[$i] = rand(0, 100);

};

$minArray = array();
$maxArray = array();

foreach ($randArray as $rand) {

  if ($rand < 50) {

    array_push($minArray, $rand); // ou $minArray[] = $rand => j'affecte une valeur $rand au tableau

  } else {

    array_push($maxArray, $rand);
  }
}

echo "Tableau de nombres infèrieur à 50: \n\n";

print_r($minArray)."\n";

echo "Tableau de nombres supèrieur ou égal à 50: \n\n";

print_r($maxArray)."\n";

echo "\n";
echo "\n";


/**********************************Exercice 12 : Créer une fonction qui renvoi le nom et le prénom d'une personne dans une phrase comme cet exemple : " Bonjour Mercredi Adams "*/

function presentation($firstName, $name) {

  echo "Bonjour, je m'appelle $firstName $name.";

}

presentation("Jocelyn", "Bonvard");

echo "\n";
echo "\n";


/**************************Exercice 13 : Créer une fonction pour qu'elle trouve la moyenne des trois notes qui lui sont transmises et renvoie la valeur alphabétique associée à cette note.
La note égal à 20 = 'A'
La note supérieur ou égal à 15 = 'B'
La note supérieur ou égal à 10 = 'C'
La note supérieur ou égal à 5 = 'D'
Le reste F*/

function moyenne($note1, $note2, $note3) {

  $moyenne = ($note1 + $note2 + $note3)/3;

  if ($moyenne === 20) {

    return "A";

  } elseif ($moyenne >= 15) {

    return "B";

  } elseif ($moyenne >= 10) {

    return "C";

  } elseif ($moyenne >= 5) {

    return "D";

  } else {

    return "F";
  }
}

echo moyenne(8, 13, 15);

echo "\n";
echo "\n";


/**********************Exercice 14 :Créer une fonction qui renvoie le nombres de voyelles dans une chaîne de caractère. Nous considérerons a, e, i, o, u comme voyelles sans le y .*/

function vowelNumber($string) {

  $string = strtolower($string); // strtolower() => transforme tout en minuscule

  $vowels = array("a","e","i","o","u");

  $stringArray = str_split($string); //str_split => transforme string en array, un caractere = un index

  $numberVowels = 0;

  foreach ($stringArray as $caractere) {

    for ($i = 0; $i <= 4; $i++) {

      if ($caractere === $vowels[$i]) {

        $numberVowels++;

      }
    }
  }
  echo "Cette chaine de caractère contient $numberVowels voyelle(s)";
}

vowelNumber("AzErtiOp");

echo "\n";
echo "\n";


/********************************Exercice 15 ( NIVEAU FINAL WORLD BOSS !!!)
 * Saviez-vous que les girafes dorment 4,6 heures par jour ? Nous, les humains, avons besoin de plus que cela. Si nous ne dormons pas assez, nous accumulons une dette de sommeil. Dans ce projet, nous calculerons si vous dormez suffisamment chaque semaine à l'aide d'un calculateur de dette de sommeil.
Le programme déterminera les heures de sommeil réelles et idéales pour chaque nuit de la dernière semaine.
Enfin, il calculera, en heures, à quelle distance vous vous trouvez de votre objectif de sommeil hebdomadaire.

( Un peu d'aide : 4 fonctions à créer ( mais vous n'êtes pas obligé)
La 1er vous définisez vos jours et le nombres d'heures de sommeil que la personne dort et les 3 autres bon courage à vous.)*/



function sleepLastWeek($monday, $tuesday, $wednesday, $thursday, $friday, $saturday, $sunday) {

  $sleepByWeek = $monday + $tuesday + $wednesday + $thursday + $friday + $saturday + $sunday; // On additionne les heures de sommeil par jour

  $sleepHoursOptimalByDay = 8; // Sommeil optimal par jour

  $sleepHoursOptimalByWeek = $sleepHoursOptimalByDay*7; // Sommeil optimal par week
  
  $sleepSoustractionByWeek = $sleepByWeek - $sleepHoursOptimalByWeek; //Difference de sommeil optimal et sommeil reel par semaine

  $sleepDifferenceByWeek = abs($sleepSoustractionByWeek); // abs() => transforme en entier positif

    if ($sleepByWeek >= $sleepHoursOptimalByWeek) {

      echo "Vous avez dormi $sleepByWeek heure(s) la semaine dernière.\n\n";
      
      echo "Votre sommeil hebdomadaire est optimal.\n\n";

    } else {

      echo "Vous avez dormi $sleepByWeek heure(s) la semaine dernière.\n\n";

      echo "Il vous manque $sleepDifferenceByWeek heure(s) de sommeil hebdomadaire pour être optimal.\n\n";

    }
  

  $sleepLastWeek = array(
    "Lundi" => $monday,
    "Mardi" => $tuesday,
    "Mercredi" => $wednesday,
    "Jeudi" => $thursday,
    "Vendredi" => $friday, 
    "Samedi" => $saturday,
    "Dimanche" => $sunday);

  

  foreach ($sleepLastWeek as $day => $hoursByDay) {

    $sleepSoustraction = $hoursByDay - $sleepHoursOptimalByDay; // Difference de sommeil par jour optimal et reel

    $sleepDifference = abs($sleepSoustraction); // abs() => transforme en entier positif

    if ($hoursByDay >= $sleepHoursOptimalByDay) {

      echo "$day : $hoursByDay heure(s) de sommeil. Vous n'avez pas de dette de sommeil.\n\n";

    } else {

      echo "$day : $hoursByDay heure(s) de sommeil. Pour un sommeil optimal, il vous manque $sleepDifference heure(s) de sommeil.\n\n";

    }
    
  }

}

sleepLastWeek(7,8,5,9,5,6,8)."\n\n"; // heures par jour de la semaine en arguments

echo "\n";
echo "\n";

?>