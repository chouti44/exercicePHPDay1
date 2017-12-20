<?php
/**
 * Created by PhpStorm.
 * User: nickleus
 * Date: 20/12/17
 * Time: 14:03
 */

class Hero
{
    private $arme;
    private $name;
    private $pv = 100;
    protected $attaque;
    protected $defence;

    /**
     * @return mixed
     */
    public function getArme()
    {
        return $this->arme;
    }

    /**
     * @param mixed $arme
     */
    public function setArme($arme)
    {
        $this->arme = $arme;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getPv(): int
    {
        return $this->pv;
    }

    /**
     * @param int $pv
     */
    public function setPv(int $pv)
    {
        $this->pv = $pv;
    }

    public function getAttaque(): int
    {
        return $this->attaque;
    }

    public function setAttaque(int $attaque)
    {
        $this->attaque = $attaque;
    }

    public function getDefence(): int
    {
        return $this->defence;
    }

    public function setDefence(int $defence)
    {
        $this->defence = $defence;
    }

    public function attack(Hero $player) {
        $player->pv -= $this->getAttaque();
        var_dump($player->pv);

        return $player->pv;
    }

}