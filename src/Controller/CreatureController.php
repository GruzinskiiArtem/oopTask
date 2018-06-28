<?php

namespace App\Controller;

use App\Entity\Person;
use App\Form\CharacterCreation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CreatureController extends Controller
{
    /**
     * @Route("/admin/creature/person", name="admin_person_creature")
     */
    public function creature (Request $request)
    {
       $person = new Person();
       $form = $this->createForm(CharacterCreation::class, $person, array(
           'method' => 'POST'
       ));
       $form->handleRequest($request);

       if ($form->isSubmitted() && $form->isValid()) {

           $person = $form->getData();
           $entityManager = $this->getDoctrine()->getManager();
           $entityManager->persist($person);
           $entityManager->flush();
       }

       return $this->render('person/creature.html.twig', array(
           'form' => $form->createView(),
       ));

    }
}