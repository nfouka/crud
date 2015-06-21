<?php

namespace MyApp\FilmothequeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MyApp\FilmothequeBundle\Entity\Categorie;

class DefaultController extends Controller
{
	
	

	public function indexAction($name=NULL) {
		
		
		$em = $this->container->get('doctrine')->getEntityManager();
		$categories = $em->getRepository('MyAppFilmothequeBundle:Categorie')->findAll();
		
		return $this->container->get('templating')->renderResponse('MyAppFilmothequeBundle:Default:index.html.twig',array(
				'categories' => $categories)
		);
	}
	
	
	/*
    public function indexAction($name)
    {
        return $this->render('MyAppFilmothequeBundle:Default:index.html.twig', array('name' => $name));
    }
    */
}
