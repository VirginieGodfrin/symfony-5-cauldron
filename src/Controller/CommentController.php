<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use \Symfony\Component\HttpFoundation\JsonResponse;

class CommentController extends AbstractController
{
    /**
     * @Route("/comments/{id}/vote/{direction}")
     */
    public function commentVote($id, $direction) 
    {
        if($direction === 'up'){
            $currentVoteCount = rand(7,100);
        }else{
            $currentVoteCount = rand(0,5);
        }
        
//        JsonResponse extends Response it'Json encode the data
//        and make sure that the content type header is application/json
//        return new JsonResponse(['votes' => $currentVoteCount ]);
        
//        You can use the Shortcut methode
        return $this->json(['votes' => $currentVoteCount ]);
           
    }
}

