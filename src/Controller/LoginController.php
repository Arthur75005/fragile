<?php

namespace App\Controller;

use App\Entity\Users;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{

    public function login()
    {  
        return new Response("Coucou");
    }

    public function postRegister(Request $request)
    {
        $er = $this->getDoctrine()->getRepository(Users::class);

        $userOne = $er->findOneBy(["email" => "a.nicolas28210@gmail.com"]);

        if(!$userOne)
        {
            $em = $this->getDoctrine()->getManager();

            $user = new Users();
            $user->setName("Arthur Nicolas");
            $user->setEmail("a.nicolas28210@gmail.com");
            $user->setPassword( $this->encryptPassword("lolilol"));
            $user->setPhone("0652580165");
            $user->setUpdated();

            try
            {
                $em->persist($user);
                $em->flush();
            }
            catch(Exception $e){}
            

            $data = $request;
            $statusCode = 401;
            if(true)
            {
                $statusCode = 201;
                $data = array("path" => "/home", "good", $user);   
            }
            else
            {
                $statusCode = 401;
                $data = array("path" => "/register", "bad");      
            }
        }
        else
        {
            $statusCode = 401;
            $data = array("path" => "/register", "bad");      
        }




        return new Response (json_encode($data), $statusCode, array("Content-Type" => "application/json") );
    }

    private function encryptPassword(string $password):string
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }

}