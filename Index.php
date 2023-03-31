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
$client3 = new Client ("Django", "REINHARDT");
//Instanciation Hôtel
$hotel1 = new Hotel ("Hilton **** Strasbourg", "10 route de la Gare 67000 STRASBOURG");
$hotel2 = new Hotel ("Regent **** Paris", "61 rue Dauphine 75006, PARIS");
$hotel3 = new Hotel ("Le Gouverneur *** Obernai", "13 Rue de Sélestat, 67210 Obernai");
//Instanciation Chambre (int $numChambre, int $nbLit, float $prix, bool $wifi, bool $statut)
$chambre1 = new Chambre (1, 2, 120, false ,  $hotel2);
$chambre2 = new Chambre (2, 2, 120, false,  $hotel2);
$chambre3 = new Chambre (3, 2, 120, false,  $hotel1);
$chambre4 = new Chambre (4, 4, 300, false, $hotel1);
$chambre5 = new Chambre (5, 4, 300, false, $hotel1);
$chambre6 = new Chambre (6, 4, 300, false, $hotel1);
$chambre7 = new Chambre (7, 4, 300, false, $hotel1);
$chambre8 = new Chambre (8, 6, 500, false, $hotel2);
$chambre9 = new Chambre (9, 4, 300, false, $hotel1);
$chambre10 = new Chambre (10, 5, 300, false, $hotel1);
$chambre11 = new Chambre (11, 4, 300, false, $hotel1);
$chambre12 = new Chambre (12, 2, 300, false, $hotel1);
$chambre13 = new Chambre (13, 4, 300, false, $hotel1);
$chambre14 = new Chambre (14, 4, 300, false, $hotel1);
$chambre15 = new Chambre (15, 4, 300, false, $hotel1);
$chambre16 = new Chambre (16, 2, 300, false,  $hotel3);
$chambre17 = new Chambre (17, 2, 300, true,  $hotel1);
$chambre18 = new Chambre (18, 2, 300, true,  $hotel3);
$chambre19 = new Chambre (19, 2, 300, true,  $hotel2);
$chambre20 = new Chambre (20, 1, 117, false, $hotel3);
//Instanciation Réservations (Client $client, Chambre $chambre, DateTime $dateArrivee, DateTime $dateDepart)
$reservation1 = new Reservation ($client1, $chambre17, '01-01-2021', '01-01-2021');
$reservation2 = new Reservation ($client2, $chambre3, '11-03-2021', '11-03-2021');
$reservation3 = new Reservation ($client2,$chambre4, '01-04-2021', '01-04-2021');
$reservation4 = new Reservation ($client1, $chambre19, '29-03-2023', '31-03-2023');
$reservation5 = new Reservation ($client1, $chambre20, '26-03-2024', '01-04-2024');

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

echo $hotel3->afficherHotel();
echo $hotel3->afficherNbChambres();
echo $hotel3->afficherNbChambresReservees();
echo $hotel3->afficherNbChambresDispos();

echo $hotel1->afficherReservations();
echo $hotel2->afficherReservations();
echo $hotel3->afficherReservations();

echo $client1->reservationsClient();
echo $client2->reservationsClient();

echo $client1->afficherPrixTotal();
echo $client2->afficherPrixTotal();
echo $client3->afficherPrixTotal();

echo $hotel1->afficherStatut();
echo $hotel2->afficherStatut();
echo $hotel3->afficherStatut();

echo $hotel1->etatChambres();
echo $hotel2->etatChambres();
echo $hotel3->etatChambres();

?>
