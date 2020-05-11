<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Psr\Log\LoggerInterface;

class CommentController extends AbstractController
{
    // add requirements on route parameters
    /**
     * @Route("/comments/{id}/vote/{direction<up|down>}", methods="POST")
     */
    public function commentVote($id, $direction, LoggerInterface $loger) 
    {
        if($direction === 'up'){
            $loger->info("Voting-up");
            $currentVoteCount = rand(7,100);
        }else{
            $loger->info("Voting-down");
            $currentVoteCount = rand(0,5);
        }
        
//        JsonResponse extends Response it'Json encode the data
//        and make sure that the content type header is application/json
//        return new JsonResponse(['votes' => $currentVoteCount ]);
        
//        You can use the Shortcut methode
        return $this->json(['votes' => $currentVoteCount ]);
           
    }
}

