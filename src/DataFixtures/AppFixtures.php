<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Uzytkownicy;
use App\Entity\GrupyUzytkownikow;
use App\Entity\Produkty;
use App\Entity\Opinie;
use App\Entity\Zamowienia;
use App\Entity\CenaProduktu;
use App\Entity\Waluta;
use App\Enum\UserType;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {   //GRUPY UŻYTKOWNIKÓW
        $grupa1 = new GrupyUzytkownikow();
        $grupa1 -> setGroupName("kupujący");
        $grupa2 = new GrupyUzytkownikow();
        $grupa2 -> setGroupName("sprzedający");
        $manager->persist($grupa1);
        $manager->persist($grupa2);
        //UŻYTKOWNICY
        for ($i = 1; $i <= 15; $i++) {
            $user = new Uzytkownicy();
            $user->setName('User ' . $i);
            $user->setEmail('user' . $i . '@example.com');
            $user->setPassword('password' . $i); 
            $user->setTypeofuser($i % 2 === 0); 
            $user->setUsertype(UserType::USER);

            $manager->persist($user);
        }
        //PRODUKTY
        $produktyData = [
    ['nazwa' => 'Mleko 1L', 'opis' => 'Świeże mleko od lokalnego dostawcy', 'zdjecie' => 'mleko.jpg', 'cena' => 4.50],
    ['nazwa' => 'Chleb razowy', 'opis' => 'Chleb pełnoziarnisty wypiekany codziennie', 'zdjecie' => 'chleb.jpg', 'cena' => 7.20],
    ['nazwa' => 'Jabłka', 'opis' => 'Czerwone jabłka ekologiczne', 'zdjecie' => 'jablka.jpg', 'cena' => 5.99],
    ['nazwa' => 'Masło 200g', 'opis' => 'Masło klarowane', 'zdjecie' => 'maslo.jpg', 'cena' => 12.30],
    ['nazwa' => 'Ser żółty 250g', 'opis' => 'Ser gouda', 'zdjecie' => 'ser.jpg', 'cena' => 15.50],
];

foreach ($produktyData as $p) {
    $produkt = new Produkty();
    $produkt->setNazwa($p['nazwa']);
    $produkt->setOpis($p['opis']);
    $produkt->setZdjecie($p['zdjecie']);
    $produkt->setCena($p['cena']);

    $manager->persist($produkt);
}
        //Opinie
$opinieText = [
    "Super produkt, polecam!",
    "Nie jestem zadowolony z zakupu.",
    "Jakość na najwyższym poziomie.",
    "Nie spełnia oczekiwań.",
    "Bardzo szybka wysyłka, produkt zgodny z opisem.",
    "Nie warto, cena za wysoka.",
    "Świetny kontakt ze sprzedającym.",
    "Produkt dotarł uszkodzony.",
];


for ($i = 1; $i <= 10; $i++) {
    $opinia = new Opinie();

   
    $opinia->setUserId(rand(1, 10));   
    $opinia->setProduktId(rand(1, 5)); 

    
    $opinia->setPozytywna((bool)rand(0,1));

    
    $opinia->setTresc($opinieText[array_rand($opinieText)]);

    $manager->persist($opinia);
}
        //Zamówienia
        for ($i = 1; $i <= 10; $i++) {
    $zamowienie = new Zamowienia();

   
    $zamowienie->setDeliveryId(rand(1, 5));    
    $zamowienie->setUzytkownikId(rand(1, 10)); 

    
    $zamowienie->setDostarczono((bool)rand(0,1));

    $manager->persist($zamowienie);
}
        //CenaProduktu
for ($i = 1; $i <= 10; $i++) {
    $cena = new CenaProduktu();

    $cena->setProduktId(rand(1, 5));  
    $cena->setWalutaId(rand(1, 3));  
    $cena->setKwota(rand(10, 500));

    // Ustawienie wymaganej kolumny NOT NULL
    $cena->setCenaProduktuId('SKU' . $i);  

    $manager->persist($cena);
}

        //Waluta
        $walutyData = [
    ['kod_iso' => 'PLN', 'name' => 'Polski złoty'],
    ['kod_iso' => 'EUR', 'name' => 'Euro'],
    ['kod_iso' => 'USD', 'name' => 'Dolar amerykański'],
];

foreach ($walutyData as $w) {
    $waluta = new Waluta();
    $waluta->setKodIso($w['kod_iso']);
    $waluta->setName($w['name']);

    $manager->persist($waluta);
}



        $manager->flush();
    }

}

