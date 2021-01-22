<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Post;
use App\Entity\User;
use App\Entity\Image;
use App\Entity\Contact;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder){
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {   
        $faker = Factory::create('FR-fr');

            $post = new Post;
            $user = new User;

            $login = $faker->userName();
            $email = $faker->email();
            $hash = $this->encoder->encodePassword($user, '');
            $user->setHash($hash)
                ->setLogin('yirzaraji')
                ->setEmail('not.iremy@gmail.com');

            $manager->persist($user);
            $manager->flush();


        for($i = 1; $i<= 6; $i++){   

            $post = new Post;
            $randomImage = 'https://picsum.photos/290/240?random='.$i;

            //random category array_rand
            $input = array("Dev", "Print", "Design",'e');
            $rand_category = array_rand($input, 2);

            $post->setTitle($faker->word())
                    ->setTechnos($faker->word($nb = 3))
                    ->setLien('http://remidelarue.ovh/simlon/sw_battle/')
                    ->setCategorie($input[$rand_category[0]])
                    ->setProjectImage($randomImage)
                    ->setGit('https://github.com/Yirzaraji');

            for($j = 1; $j <= mt_rand(2, 5); $j++){

                $image = new Image();
                $image->setUrl($randomImage)
                        ->setCaption($faker->sentence())
                        ->setPost($post);

                $manager->persist($image);
            }

            $manager->persist($post);
            
        }
        
        $manager->flush();
    }
}


/*  for($i = 1; $i<= 10; $i++){      
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
        } */