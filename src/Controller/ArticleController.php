<?php
/**
 * Created by PhpStorm.
 * User: oem
 * Date: 19.09.18
 * Time: 14:44
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
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
        return new Response(sprintf("Future page show the article : %s", $slug));
    }

}