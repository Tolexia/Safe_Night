<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Event;

class EventFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $hpParty = new Event();
        $hpParty->setName('Soirée Harry Potter');
        $hpParty->setDescription('Amenez vos baguettes et vos balais');
        $hpParty->setDatetimeStart(new \DateTime('11-02-2021 20:00'));
        $hpParty->setDatetimeEnd(new \DateTime('12-04-2021 02:00'));
        $hpParty->setPlace('192 rue de Vesles, 51100 Reims');
        $hpParty->setImage('soiree-harry-potter-sance-600dc4894f2ab.jpeg');
        $hpParty->setOrganizer($this->getReference('cedric'));
        $hpParty->setMaxParticipant(6);
        $manager->persist($hpParty);

        $racletteParty = new Event();
        $racletteParty->setName('Soirée Raclette');
        $racletteParty->setDescription("N'oubliez pas vos poêlons !");
        $racletteParty->setDatetimeStart(new \DateTime('06-03-2021 20:00'));
        $racletteParty->setDatetimeEnd(new \DateTime('07-03-2021 00:00'));
        $racletteParty->setPlace('15 Avenue de Paris, 51100 Reims');
        $racletteParty->setImage('bb-chch090801-0135a-x-600700f02fe98.jpeg');
        $racletteParty->setOrganizer($this->getReference('cedric'));
        $racletteParty->setMaxParticipant(6);
        $manager->persist($racletteParty);

        $codeParty = new Event();
        $codeParty->setName('Soirée Code');
        $codeParty->setDescription("C'est l'heure de pianoter");
        $codeParty->setDatetimeStart(new \DateTime('13-02-2021 18:00'));
        $codeParty->setDatetimeEnd(new \DateTime('14-02-2021 5:00'));
        $codeParty->setPlace('2 rue Alfred Nobel, 51350 Cormontreuil');
        $codeParty->setImage('code-informatique-60-1920x1080-600ad30ad6ddf.jpeg');
        $codeParty->setOrganizer($this->getReference('cedric'));
        $codeParty->setMaxParticipant(6);
        $manager->persist($codeParty);

        $beachParty = new Event();
        $beachParty->setName('Soirée Plage');
        $beachParty->setDescription("Indice 50 obligatoire !");
        $beachParty->setDatetimeStart(new \DateTime('12-06-2021 18:00'));
        $beachParty->setDatetimeEnd(new \DateTime('13-06-2021 8:00'));
        $beachParty->setPlace('Avenue de la page, 40600 Biscarrosse');
        $beachParty->setImage('7dff86ca-f55c-438d-9918-6ab94b84fcf7-6006fe108fcce.jpeg');
        $beachParty->setOrganizer($this->getReference('cedric'));
        $manager->persist($beachParty);

        $smileParty = new Event();
        $smileParty->setName('Soirée Smile');
        $smileParty->setDescription("Bonne humeur au rendez-vous !!");
        $smileParty->setDatetimeStart(new \DateTime('19-02-2021 18:00'));
        $smileParty->setDatetimeEnd(new \DateTime('20-02-2021 0:00'));
        $smileParty->setPlace('22 rue du général Accart, 51100 Reims');
        $smileParty->setImage('smile-600c0547495cf.webp');
        $smileParty->setOrganizer($this->getReference('cedric'));
        $smileParty->setMaxParticipant(6);
        $manager->persist($smileParty);

        $mappleSirupParty = new Event();
        $mappleSirupParty->setName("Soirée Sirop d'Érable");
        $mappleSirupParty->setDescription("Tabarnak");
        $mappleSirupParty->setDatetimeStart(new \DateTime('22-02-2021 18:00'));
        $mappleSirupParty->setDatetimeEnd(new \DateTime('23-02-2021 0:00'));
        $mappleSirupParty->setPlace('6 rue de Saint-Brice, 51100 Reims');
        $mappleSirupParty->setImage('sirop-erable-duo.jpg');
        $mappleSirupParty->setOrganizer($this->getReference('cedric'));
        $mappleSirupParty->setMaxParticipant(6);
        $manager->persist($mappleSirupParty);

        $manager->flush();
    }
}
