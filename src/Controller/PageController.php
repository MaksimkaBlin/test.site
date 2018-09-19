<?php
// src/Controller/LuckyController.php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PageController extends AbstractController
{

    public function home()
    {
        return $this->render('home.html.twig');
    }

    public function articles()
    {
        return $this->render('articles.html.twig');
    }

    public function singleArticle()
    {
        return $this->render('singleArticle.html.twig');
    }
}