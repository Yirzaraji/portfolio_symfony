<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Contact;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {   
        $faker = Factory::create('FR-fr');

        for($i = 1; $i<= 10; $i++){      
            $contact = new Contact;

            $name = $faker->userName();
            $email = $faker->email();
            $subject = $faker->sentence(5,true);
            $message = $faker->paragraph(2);
            

            $contact->setName($name)
                    ->setEmail($email)
                    ->setSubject($subject)
                    ->setMessage($message);

            $manager->persist($contact);
            $manager->flush();
        }
    }
}
