<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response; 
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class QuestionController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage() 
    {
        return $this->render('question/homepage.html.twig');
    }
    
    /**
     * 
     * @Route("/questions/{slug}")
     */
    public function show($slug) 
    {
//        Render return a Response Object with html inside
//        Because a Controller always return a Response
//        It's like that and that the way to is.
        dump($slug, $this);
        $answers = [
            "I am bad woman",
            "I am super woman",
            "I am cat woman"
        ];
        
        return $this->render('question/show.html.twig', [
            'question' => ucwords(str_replace('-',' ', $slug)),
            'answers' => $answers
        ]);
    }
}