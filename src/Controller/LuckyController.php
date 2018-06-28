<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Service\CharacterFactory\CharacterFactory;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Person;


class LuckyController extends Controller
{
    /**
     * @Route("/lucky/number")
     */
    public function number()
    {
        $f = new CharacterFactory();
        $obj = $f->buildCharacter('Warrior', $this->getDoctrine()->getRepository(Person::class));
        $number = $obj->getName();
        return $this->render('lucky/number.html.twig', array(
            'number' => $number,
        ));
    }
}