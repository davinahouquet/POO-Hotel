<h1>POO Hotel</h1>
<p>A partir de ces captures d’écran, réaliser l’application en POO permettant la gestion de réservations
    de chambres par des clients dans différents hôtels :</p>
<h2>Résultat</h2>
<?php

function chargerClasse($classe)
{
    require $classe . '.php';
}
spl_autoload_register('chargerClasse');

//Instanciation Clients
$client1 = new Client ("Virgile", "GIBELLO");
$client2 = new Client ("Micka", "MURMANN");

//Instanciation Hôtel
$hotel1 = new Hotel ("Hilton **** Strasbourg", "10 route de la Gare 67000 STRASBOURG");
$hotel2 = new Hotel ("Regent **** Paris", "61 rue Dauphine 75006, PARIS");

//Instanciation Chambre (int $numChambre, int $nbLit, float $prix, bool $wifi, bool $statut)
$chambre1 = new Chambre (1, 2, 120, false ,  $hotel2);
$chambre2 = new Chambre (2, 2, 120, false,  $hotel2);
$chambre3 = new Chambre (3, 2, 120, false,  $hotel1);
$chambre4 = new Chambre (4, 4, 300, false, $hotel1);
$chambre16 = new Chambre (16, 2, 300, false,  $hotel1);
$chambre17 = new Chambre (17, 2, 300, true,  $hotel1);
$chambre18 = new Chambre (18, 2, 300, true,  $hotel1);
$chambre19 = new Chambre (19, 2, 300, true,  $hotel1);

//Instanciation Réservations (Client $client, Chambre $chambre, DateTime $dateArrivee, DateTime $dateDepart)
$reservation1 = new Reservation ($client1, $chambre17, '01-01-2021', '01-01-2021');
$reservation2 = new Reservation ($client2, $chambre3, '11-03-2021', '11-03-2021');
$reservation3 = new Reservation ($client2,$chambre4, '01-04-2021', '01-04-2021');

//Tests des méthodes

 //afficherprixTotal(), afficherChambre(numéro + nbLits + prix + wifi), afficherStatut()
echo $hotel1->afficherHotel();
echo $hotel1->afficherNbChambres();
echo $hotel1->afficherNbChambresReservees();
echo $hotel1->afficherNbChambresDispos();

echo $hotel2->afficherHotel();
echo $hotel2->afficherNbChambres();
echo $hotel2->afficherNbChambresReservees();
echo $hotel2->afficherNbChambresDispos();

echo $reservation1->afficherReservationHotel();
echo $reservation2->afficherReservationHotel();
echo $reservation3->afficherReservationHotel();

// echo $reservation1->afficherReservation();
// echo $reservation2->afficherReservation();

?>
