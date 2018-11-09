<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('@App/default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/feedback", name="feedback")
     */
    public function feedbackAction(Request $request){
        return $this->render("@App/default/feedback.html.twig", [
            "asd" => "this is first variable",
            "myarr" => [
                "el1" => "first arr",
                "el2" => 127,
                "el3" => "element 3"
            ]
        ]);
    }
}
