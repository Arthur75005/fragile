<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    
    public function home()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            "user" => [
                "Nom" => "Razowski",
                "Prenom" => "Bob",
                "Avatar" => "https://www.journaldemickey.com/sites/default/files/dico/Bob%20Razowski%20-%20Monstres%20Academy.jpg",
                
            ]
        ]);
    }
}
