<?php
require 'Employe.class.php';
//objets Employe:
$employe= new Employe();
$employe ->setNom("insaf");
$employe ->setPrenom("boulahia");
$employe ->setdatEmbauche("14/04/2000");
$employe ->setSalaire("3000");
$employe ->setservice("commercial");
$employe->getanciennete();
$employe->getprime();

//objets Employe1:
$employe1= new Employe();
$employe1 ->setNom("malik");
$employe1 ->setPrenom("dabou");
$employe1 ->setdatEmbauche("14/01/2021");
$employe1 ->setSalaire("1750");
$employe1 ->setservice("commercial");
$employe1->getanciennete();
$employe1->getprime();
//objets Employe2:
$employe2= new Employe();
$employe2 ->setNom("clémon");
$employe2 ->setPrenom("clou");
$employe2 ->setdatEmbauche("14/04/2015");
$employe2 ->setSalaire("5000");
$employe2 ->setservice("commercial");
$employe2->getanciennete();
$employe2->getprime();
var_dump($employe2);
//objets Employe3:
$employe3= new Employe();
$employe3 ->setNom("marie");
$employe3 ->setPrenom("martin");
$employe3 ->setdatEmbauche("14/04/2007");
$employe3 ->setSalaire("2450");
$employe3 ->setservice("commercial");
$employe3->getanciennete();
$employe3->getDatEmbauche("14/04/2007") ;
$employe3->getprime();
//objets Employe4:
$employe4= new Employe();
$employe4 ->setNom("mehdi");
$employe4 ->setPrenom("labassi");
$employe4 ->setdatEmbauche("14/04/2011");
$employe4 ->setSalaire("5745");
$employe4 ->setservice("commercial");
$employe4->getanciennete();
$employe4->getprime();
$tab=[$employe,$employe1,$employe2,$employe3,$employe4];
function tri1($tab){
    for($i=0; $i<count($tab) - 1; $i = $i + 1){
        $position = $i;
        for($j=$i+1; $j<count($tab); $j = $j + 1){
            if($tab[$j]->getNom() < $tab[$position]->getNom() ){
                $position = $j;
            }
            if($tab[$j]->getNom() == $tab[$position]->getNom() ){
                if ($tab[$j]->getPrenom() < $tab[$position]->getPrenom()){
                    $position = $j;
                }
            }
        }
        $tanpon=$tab[$position];
        $tab[$position]=$tab[$i];
        $tab[$i]=$tanpon;
    }
    return $tab;
}

//var_dump($employe);
//echo"<p>".$employe->getanciennete()."</p>";
//echo"<p>".$employe->getprime()."</p>";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
</head>
<body>
<div>
    <?php
    echo "<h3>"."Le nombre d’employés de l’entreprise est  : ".count($tab)." </h3>"
    ?>
</div>
<div class="table-responsive"> <!--tableau responsive-->
    <table class="table table-hover table-bordered w-100 w-sm-50"> <!--tableau avec separation des ligne et contour-->
        <thead>
        <tr class="table-active">
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date d'embauche</th>
            <th>Salaire</th>
            <th>Service</th>
            <th>Anciénneté</th>
            <th>Prime</th>
        </tr>
        </thead>
        <?php

        foreach(tri1($tab) as $empl){
            echo "<tr>";

            echo "<td>".$empl->getNom()."</td>";
            echo "<td>".$empl->getPrenom()."</td>";
            echo "<td>"."</td>";
            echo "<td>".$empl->getSalaire()." Euros"."</td>";
            echo "<td>".$empl->getService()."</td>";
            echo "<td>".$empl->getanciennete()." Ans"."</td>";
            echo "<td>".$empl->getPrime()." Euros"."</td>";

            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
