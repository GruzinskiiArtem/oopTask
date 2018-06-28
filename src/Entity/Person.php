<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PersonRepository")
 */
class Person
{
    /**
     * @Assert\NotNull()
     * @ORM\Id()
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @Assert\NotNull()
     *
     * @ORM\Column(type="integer")
     */
    private $hp;

    /**
     * @Assert\NotNull()
     * @ORM\Column(type="integer")
     */
    private $attack;

    /**
     * @Assert\NotNull()
     * @ORM\Column(type="integer")
     */
    private $chanceOfCriticalDamage;

    /**
     * @Assert\NotNull()
     * @ORM\Column(type="integer")
     */
    private $chanceOfDamageBias;

    /**
     * @Assert\NotNull()
     * @ORM\Column(type="integer")
     */
    private $restoring;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getHp(): ?int
    {
        return $this->hp;
    }

    public function setHp(int $hp): self
    {
        $this->hp = $hp;

        return $this;
    }

    public function getAttack(): ?int
    {
        return $this->attack;
    }

    public function setAttack(int $attack): self
    {
        $this->attack = $attack;

        return $this;
    }

    public function getChanceOfCriticalDamage(): ?int
    {
        return $this->chanceOfCriticalDamage;
    }

    public function setChanceOfCriticalDamage(int $chanceOfCriticalDamage): self
    {
        $this->chanceOfCriticalDamage = $chanceOfCriticalDamage;

        return $this;
    }

    public function getChanceOfDamageBias(): ?int
    {
        return $this->chanceOfDamageBias;
    }

    public function setChanceOfDamageBias(int $chanceOfDamageBias): self
    {
        $this->chanceOfDamageBias = $chanceOfDamageBias;

        return $this;
    }

    public function getRestoring(): ?int
    {
        return $this->restoring;
    }

    public function setRestoring(int $restoring): self
    {
        $this->restoring = $restoring;

        return $this;
    }
}
