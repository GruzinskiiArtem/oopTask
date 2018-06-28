<?php

namespace App\Service\Characters\Character;

use App\Entity\Person;

class Character
{

    private $entityManager;

    public function __construct(Person $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function __call( $name, $arguments)
    {
        try {
            $option = substr($name, 0, 3);
            switch ($option) {
                case ("get") :
                    return $this->entityManager->{$name}();
                    break;
                default :
                    throw new \Exception('An error has occurred!');
            }
        }
        catch (\Exception $error) {
            echo $error->getMessage();
            exit();
        }
    }
}
