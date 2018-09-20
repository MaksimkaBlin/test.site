<?php
/**
 * Created by PhpStorm.
 * User: oem
 * Date: 19.09.18
 * Time: 14:44
 */

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response("OMG my first page");
    }


    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        $comments =[
            'sfsdfsdfsdfsdf',
        'sfsdfsdfsdfsdfsdfsdfsdfsdfsdfs',
        'werwerwerwerwerwerwerwr',
    ];
        return $this->render('article/show.html.twig', [
            'title' => ucwords(str_replace('-', ' ', $slug)),
            'comments' => $comments
        ]);
    }

}