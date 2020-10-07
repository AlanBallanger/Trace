<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ArticleType;
use App\Entity\Articles;
use App\Entity\Chaine;


class ArticleController extends AbstractController
{
    /**
     * @Route("/article", name="article")
     */
    public function index()
    {
        return $this->render('article/index.html.twig', [
            'controller_name' => 'ArticleController',
        ]);
    }

    /**
     * @Route("/article/add", name="article_add")
     */

    public function add()
    {
    	$article = new Articles();
    	$form = $this->createForm(ArticleType::class, $article);
    	/*$form->add('chaine', ChoiceType::class, [
            'choices' => [
            $this->getDoctrine()
        ->getRepository(Articles::class)->findAll()
    	]]);*/

    	$allChaines = $this->getDoctrine()
        ->getRepository(Chaine::class)->findAll();

        return $this->render('article/add.html.twig', [
            'form' => $form->createView(), 'chaines' => $allChaines

        ]);
    }
}
