<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;
use App\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use DateTime;

class AppFixtures extends Fixture
{
    Private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder; 
    }

    public function load(ObjectManager $manager)
    {
        /*$user = new User();

        $encodedPassword = $this->encoder->encodePassword($user,'123456');

        $user->setFirstName('Rasmus');
        $user->setLastName('Lerdorf');
        $user->setBirthday(new DateTime('2000/02/24'));
        $user->setEmail('rasmusphp@creator.com');
        $user->setPassword($encodedPassword);
        $user->setPhoneNumber('0123456789');
        $user->setAddress('4, rue de la Bonne Brasserie, Montreal');
        $user->setAvatar('Rasmus.png');
        $manager->persist($user);
        $manager->flush();

        $faker = Faker\Factory::create('fr_FR');

        for ($i = 0; $i < 10; $i++) {
            $user = new User();
            $user->setFirstName($faker->firstName());
            $user->setLastName($faker->lastName());
            $user->setBirthday(new DateTime($faker->date()));
            $user->setEmail($faker->freeEmail());
            $user->setPassword($encodedPassword);
            $user->setPhoneNumber($faker->phoneNumber());
            $user->setAddress($faker->address());
            $user->setAvatar('Rasmus.png');
            $manager->persist($user);
            $manager->flush();
        }*/
    }
}
