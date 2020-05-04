<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response; 
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
{
    /**
     * @Route("/")
     */
    public function homepage() 
    {
        return new Response("Hello my first controller");
    }
    
    /**
     * 
     * @Route("/questions/{slug}")
     */
    public function show($slug) 
    {
//        dump($slug);
        return new Response(sprintf(
            'future page to the question "%s" !',
            ucwords(str_replace('-',' ', $slug))
        ));
    }
}