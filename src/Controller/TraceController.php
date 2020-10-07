<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Articles;

class TraceController extends AbstractController
{
    /**
     * @Route("/articles", name="articles")
     */
    public function index()
    {

        return $this->render('trace/index.html.twig', [
            'controller_name' => 'TraceController', 
        ]);
    }

    /**
     * @Route("/", name="home")
     */
    public function home() {
    	$results = $this->getDoctrine()
        ->getRepository(Articles::class)->findBy(array(),array('id'=>'DESC'),5,0);
    	return $this->render('trace/home.html.twig', ['articles' => $results
    	]);

    }

    /**
     * @Route("/articles/12", name="articles_show")
     */

    public function show(){
    	return $this->render('trace/show.html.twig');
    }

}
