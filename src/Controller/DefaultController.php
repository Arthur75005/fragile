<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class DefaultController
{

    public function index()
    {
        $tab = array("toto" => 22, "tata" => 11);
        return new Response(
            json_encode($tab)
        );
    }

}