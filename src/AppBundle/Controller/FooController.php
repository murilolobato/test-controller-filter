<?php

namespace AppBundle\Controller;

use AppBundle\Controller\TokenAuthenticatedController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class FooController extends Controller implements TokenAuthenticatedController
{
    // An action that needs authentication
    /**
     * @Route("/foo/bar", name="foo_bar")
     */
    public function barAction()
    {
        return new Response(json_encode(["name" => "Minion", "age" => null]));
    }
}
