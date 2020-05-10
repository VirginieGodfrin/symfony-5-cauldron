<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response; 
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class QuestionController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage() 
    {
        return $this->render('question/homepage.html.twig');
    }
    
    /**
     * 
     * @Route("/questions/{slug}", name="app_question_show")
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