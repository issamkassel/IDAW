<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$a = "Hello ";
$b = $a . "World !";
echo "$b";
?>
<br>
La date d'aujourd'hui est le :
<?php
// Affichage de la date
echo date("d/m/Y");
?>
<br>
<?php
function afficher( $texte, $saut = 1 ) {
    echo $texte;
    for( $i = 0 ; $i < $saut ; $i++)
    echo "\n";
    }
afficher("Mon Site",0);
afficher("Professionnel",2);
?>
<br>
<?php
afficher("Portfolio, Hobbies");
?>
<br>
<?php
$tab = array(1,2,3,4,5,6);
$i = 0;
echo "3 premieres valeurs dans tab : ";
while( $i<count($tab) and ($i<3) ){
echo $tab[$i]."\n";
$i++;
}
?>
<br>
<?php
$personne = array(
    'prenom' => 'Issam',
    'nom' => 'Kassel',
    'age' => 20
    );
echo "M. ".$personne['prenom']."\n";
?>
</body>
</html>