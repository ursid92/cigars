<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends Controller
{
    /**
     * @Route("accueil", name="index")
     */
    public function index()
    {
        return $this->render('pages/index.html.twig');
    }
}