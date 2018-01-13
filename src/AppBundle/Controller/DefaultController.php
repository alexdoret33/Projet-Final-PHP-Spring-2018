<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/propos_moi", name="moi")
     */
    public function moi(Request $request)
    {
        return $this->render('default/moi.html.twig');

    }

    /**
     * @Route("/cv", name="cv")
     */
    public function cv(Request $request)
    {
        return $this->render('default/mon_cv.html.twig');

    }

    /**
     * @Route("/competences", name="competences")
     */
    public function competences(Request $request)
    {
        return $this->render('default/competences.html.twig');

    }

    /**
     * Partie réservée au Blog
     */

    /**
     * @Route("/blog", name="blog")
     */
    public function blog(Request $request)
    {
        return $this->render('default/blog.html.twig');

    }

    /**
     * @Route("/blog/analytics", name="analytics")
     */
    public function analytics(Request $request)
    {
        return $this->render('default/analytics.html.twig');

    }

    /**
     * @Route("/blog/stage1", name="stage1")
     */
    public function stage1(Request $request)
    {
        return $this->render('default/stage1.html.twig');

    }

}
