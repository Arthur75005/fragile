<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{

    public function login():Response
    {  
        return new Response("Coucou");
    }
    public function register():Response
    {
    }
    public function postRegister():Response
    {
    }

}