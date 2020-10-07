<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Articles;
use App\Entity\Chaine;
use App\Entity\TypeDeChaine;
use App\Entity\Emission;

class ArticlesFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {


        $TypeDeChaine = new TypeDeChaine();
        $TypeDeChaine->setNom("Television");
        $TypeDeChaine2 = new TypeDeChaine();
        $TypeDeChaine2->setNom("Radio");

		$manager->persist($TypeDeChaine);
		$manager->persist($TypeDeChaine2);

        for($i = 1; $i <= 3; $i++){
        	$chaine = new Chaine();
        	$chaine->setNom("France $i")
        			->setLogo("http://placehold.it/350x150")
        			->setBaseline("<p>Contenu de le chaine France n°$i</p>")
        			->setDescription("<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc auctor sodales tortor a sagittis. Cras quis aliquet sapien. Aenean risus ipsum, sodales et viverra non, posuere eget mauris. Curabitur pretium purus enim, ut vulputate risus tristique non. Vivamus cursus suscipit ultricies. </p>")
        			->setType($TypeDeChaine);

        	$manager->persist($chaine);


			for($j = 1; $j <= 2; $j++){
        		$article = new Articles();
        		$article->setTitle("Titre de l'article n°$j")
        			->setContent("<p>Contenu</p>")
        			->setImage("http://placehold.it/350x150")
        			->setCreatedAt(new \DateTime())
        			->setChaine($chaine);

        		$manager->persist($article);
			}

			for($j = 1; $j <= 2; $j++){
        		$emission = new Emission();
        		$emission->setTitre("Titre de l'emission n°$j")
        			->setContenu("<p>Contenu</p>")
        			->setImage("http://placehold.it/350x150")
        			->setChaine($chaine);

        		$manager->persist($emission);
			}	

        	
        }

        for($i = 1; $i <= 3; $i++){
        	$chaine = new Chaine();
        	$chaine->setNom("Radio $i")
        			->setLogo("http://placehold.it/350x150")
        			->setBaseline("<p>Contenu de la Radio n°$i</p>")
        			->setDescription("<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc auctor sodales tortor a sagittis. Cras quis aliquet sapien. Aenean risus ipsum, sodales et viverra non, posuere eget mauris. Curabitur pretium purus enim, ut vulputate risus tristique non. Vivamus cursus suscipit ultricies. Vivamus molestie massa a nibh iaculis, sed feugiat augue fringilla. Nunc efficitur mi non diam elementum porttitor. Suspendisse ac pretium risus, in sollicitudin augue. Curabitur risus augue, elementum et mattis placerat, commodo at lacus. Sed tempus arcu libero, rhoncus eleifend nunc vestibulum cursus. Aenean nulla ante, ultrices vel justo sed, aliquet pulvinar ipsum. Nam ipsum eros, fermentum in tincidunt non, lacinia vitae dolor. Praesent ac sapien ac lectus aliquet aliquet. Integer et massa placerat, porttitor nulla et, volutpat turpis. Mauris ut ultricies massa. Nulla semper dignissim justo et ornare. </p>")
        			->setType($TypeDeChaine2);

        	$manager->persist($chaine);

        }



        $manager->flush();
    }
}
