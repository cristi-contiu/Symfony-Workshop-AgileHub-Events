<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     * @Route("/ce-link-frumos", name="default_index")
     *
     * @return Response
     */
    public function index(Request $request)
    {
        return $this->redirect('/hello');
    }

    /**
     * @Route("/hello/{name}", name="default_hello",
     *     requirements={"name"="iulian|ramona|camelia"})
     *
     * @return Response
     */
    public function hello($name)
    {
        $response = new Response("Hello, $name!");

        return $response;
    }

}