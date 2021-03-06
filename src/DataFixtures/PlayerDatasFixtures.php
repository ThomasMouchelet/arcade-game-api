<?php

namespace App\DataFixtures;

use App\Entity\PlayerData;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class PlayerDatasFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
       
        $faker = Factory::create('fr_FR');

        for($i=0;$i < 10; $i++){
            $playerData = new PlayerData();
            $playerData->setUsername($faker->username())
                       ->setScore(rand(1, 100));

            $manager->persist($playerData);
        }


        $manager->flush();
    }
}
