<!-------------------------------------------- HTML ------------------------------------------>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/lux/bootstrap.min.css" integrity="sha384-9+PGKSqjRdkeAU7Eu4nkJU8RFaH8ace8HGXnkiKMP9I9Te0GJ4/km3L1Z8tXigpG" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<!----------------------- Titre Page ---------------------->

<h1>POO Football</h1>

<?php

/******************************************* PHP *****************************************/

/************************** Récupère les fichiers PHP du dossier ************************/

include("Country.php");
include("Player.php");
include("Team.php");
include("Contract.php");


/********************************* Instencie les objets ********************************/

$french = new Country ("France");
$spain = new Country ("Espagne");
$england = new Country ("Angleterre");
$italy = new Country ("Italie");

$psg = new Team ("PSG", $french, "01/01/1970");
$rcstrasbourg = new Team ("Racing Club Stras", $french, "02/04/1906");
$fcbarcelone = new Team ("FC Barcelone", $spain, "05/07/1899");
$juventus = new Team ("Juventus", $italy, "03/01/1897");
$manchester = new Team ("Manchester United", $england, "03/02/1878");
$real = new Team ("Real Madrid", $spain, "01/03/1902");

$mbappe = new Player ("Kylian", "Mbappé", "20-12-1998", $french);
$messi = new Player ("Lionel", "Messi", "24-06-1987", $french);
$ronaldo = new Player ("Cristiano", "Ronaldo", "05-02-1985", $spain);
$neymar = new Player ("Junior", "Neymar", "05-02-1992", $french);

$contractMessi = new Contract ($messi, $fcbarcelone, "01-01-2004", "31/12/2023");
$contractMessi2 = new Contract ($messi, $psg, "01-01-2021");
$contractNeymar = new Contract ($neymar, $fcbarcelone, "01-01-2013", "31/12/2016");
$contractNeymar2 = new Contract ($neymar, $psg, "01-01-2017");
$contractRonaldo = new Contract ($ronaldo, $real, "01-01-2009");
$contractRonaldo2 = new Contract ($ronaldo, $juventus, "01-01-2018");
$contractRonaldo3 = new Contract ($ronaldo, $manchester, "01-01-2021");
$contractMbappe = new Contract ($mbappe, $psg, "01-01-2023");
?>

<!----------------------- Sous Titre ---------------------->

<h2>Equipe d'un pays</h2>

<!----------------------- Création Cards --------------------->

<div class="card_container">
<?php 
/************** Affiche section équipe d'un pays ***************/
echo $french -> listTeam();
echo $spain -> listTeam();
echo $england -> listTeam();
echo $italy -> listTeam();
?>
</div>

<h2>Joueur de chaque Equipe</h2>

<div class="team_container">
<?php
/************** Affiche section joueur de chaque équipe ***************/
echo $psg -> listPlayer();
echo $rcstrasbourg -> listPlayer();
echo $fcbarcelone -> listPlayer();
echo $juventus -> listPlayer();
echo $manchester -> listPlayer();
echo $real -> listPlayer();
?>
</div>

<h2>Carrière d'un Joueur</h2>

<div class="card_container">
<?php
/************** Affiche section carrière joueur ***************/
echo $mbappe -> listContracts();
echo $ronaldo -> listContracts();
echo $messi -> listContracts();
echo $neymar -> listContracts();
?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>







