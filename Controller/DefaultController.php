<?php
namespace Mash\SoapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class DefaultController
 * @package Mash\SoapBundle\Controller
 */
class DefaultController extends Controller
{
    /**
     * Index Action
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->render('SoapBundle:Default:index.html.twig');
    }
}
