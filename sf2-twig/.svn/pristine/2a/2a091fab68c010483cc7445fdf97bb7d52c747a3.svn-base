<?php

namespace MyApp\FilmothequeBundle\Controller;

use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use MyApp\FilmothequeBundle\Entity\Acteur;
use MyApp\FilmothequeBundle\Form\ActeurType;
use Symfony\Component\Validator\Constraints as Assert;


class ActeurController extends ContainerAware
{
	public function listerAction()
	{
	
		$em = $this->container->get('doctrine')->getEntityManager();
		
		$acteurs= $em->getRepository('MyAppFilmothequeBundle:Acteur')->findAll();
		
		return $this->container->get('templating')->renderResponse('MyAppFilmothequeBundle:Default:lister.html.twig',
				array(
						'acteurs' => $acteurs
				));
	}

	public function ajouterAction()
	{
		$message='';
		$acteur = new Acteur();
		$form = $this->container->get('form.factory')->create(new ActeurType(), $acteur);
		
		$request = $this->container->get('request');
		
		if ($request->getMethod() == 'POST')
		{
			$form->handleRequest($request);
			
			if ($form->isValid())
			{
				$em = $this->container->get('doctrine')->getEntityManager();
				$em->persist($acteur);
				$em->flush();
				$message='Acteur ajouté avec succès !';
			}
		}
		
		return $this->container->get('templating')->renderResponse(
				'MyAppFilmothequeBundle:Default:ajouter.html.twig',
				array(
						'form' => $form->createView(),
						'message' => $message,
				));
	}

	public function modifierAction($id)
	{
		$message='';
		$em = $this->container->get('doctrine')->getEntityManager();
		
		if (isset($id))
		{
			// modification d'un acteur existant : on recherche ses données
			$acteur = $em->find('MyAppFilmothequeBundle:Acteur', $id);
		
			if (!$acteur)
			{
				$message='Aucun acteur trouvé';
			}
		}
		else
		{
			// ajout d'un nouvel acteur
			$acteur = new Acteur();
		}
		
		
		$form = $this->container->get('form.factory')->create(new ActeurType(), $acteur);
		$request = $this->container->get('request');
		
		
		if ($request->getMethod() == 'POST') {
		
			$form->handleRequest($request);
			
		if ($form->isValid())
		{
			$em->persist($acteur);
			$em->flush();
			if (isset($id))
			{
				$message='Acteur modifié avec succès !';
			}
			else
			{
				$message='Acteur ajouté avec succès !';
			}
		}
		}
		return $this->container->get('templating')->renderResponse(
				'MyAppFilmothequeBundle:Default:editer.html.twig',
				array(
						'form' => $form->createView(),
						'message' => $message,
				));
		

	}

	public function supprimerAction($id)
	{
		$em = $this->container->get('doctrine')->getEntityManager();
		$acteur = $em->find('MyAppFilmothequeBundle:Acteur', $id);
		
		if (!$acteur)
		{
			throw new NotFoundHttpException("Acteur non trouvé");
		}
		
		$em->remove($acteur);
		$em->flush();
		
		
		return new RedirectResponse($this->container->get('router')->generate('myapp_acteur_lister'));
	}
}

