<h1>POO Hotel</h1>
<p>A partir de ces captures d’écran, réaliser l’application en POO permettant la gestion de réservations
    de chambres par des clients dans différents hôtels :</p>
<h2>Résultat</h2>
<?php

//Instanciation Clients
$client1 = new Client("Virgile", "GIBELLO");
$client2 = new Client ("Micka", "MURMANN");

//Instanciation Hôtel
$hotel1 = new Hotel ("Hilton **** Strasbourg", "10 route de la Gare 67000 STRASBOURG", 30);
$hotel2 = new Hotel ("Regent **** Paris", "Paris", 10);

echo $hotel1->afficherNbChambre();
//Instanciation Chambre (int $numChambre, int $nbLit, float $prix, bool $wifi, bool $statut)
$chambre1 = new Chambre (1, 2, 120, $wifi, $statut);
$chambre2 = new Chambre (2, 2, 120, $wifi, $statut);
$chambre3 = new Chambre (3, 2, 120, $wifi, $statut);

$chambre16 = new Chambre (16, 2, 300, $wifi, $statut);
$chambre17 = new Chambre (17, 2, 300, $wifi, $statut);
$chambre18 = new Chambre (18, 2, 300, $wifi, $statut);
$chambre19 = new Chambre (19, 2, 300, $wifi, $statut);

//Instanciation Réservations
// $reservation1 = new Reservation = ($client1, $chambre17, $dateArrivee, $dateDepart);
// $reservation2 = new Reservation = ($client2, $chambre3, $dateArrivee, $dateDepart);
// $reservation3 = new Reservation = ($client2,$chambre4, $dateArrivee, $dateDepart);
?>
