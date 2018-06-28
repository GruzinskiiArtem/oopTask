<?php

namespace App\Service\CharacterFactory;

use App\Service\Characters\Character\Character;
use Doctrine\Common\Persistence\ObjectRepository;
use App\Entity\Person;

class CharacterFactory
{
    public function buildCharacter(string $_type, ObjectRepository $entity) : Character
    {
        try {
            if ($entity->find($_type)) {
                $entityManager = $entity->find($_type);
                return new Character($entityManager);
            } else {
                throw new \Exception('An error has occurred!');
            }
        }
        catch (\Exception $error) {
            echo $error->getMessage();
            exit();
        }
    }
}