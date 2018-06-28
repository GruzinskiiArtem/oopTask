<?php

namespace App\Service\Order;

use App\Service\Characters\Character\Character;

class Order
{
    private $orderName;
    private $orderHp;
    private $orderAttack;
    private $orderChanceOfCriticalDamage;
    private $orderChanceOfDamageBias;
    private $orderRestoring;
    public $character;

    public function __construct(string $orderName) {

        $this->character = array();
    }

    public function setCharacter (Character $character) {
        $this->character[] = $character;
    }


    public function getOrderName () : string {
        return $this->orderName;
    }

    public function getNumberOfCharacters () : int {
        return count($this->character);
    }

    public function getCharacter (int $id) : Character {
        return $this->character[$id];
    }

    public function getOrderHp () : int {
        return $this->orderHp;
    }

}