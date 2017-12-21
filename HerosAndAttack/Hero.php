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

    /**
     * @return mixed
     */
    public function getAttaque()
    {
        return $this->attaque;
    }

    /**
     * @param mixed $attaque
     */
    public function setAttaque($attaque)
    {
        $this->attaque = $attaque;
    }

    /**
     * @return mixed
     */
    public function getDefence()
    {
        return $this->defence;
    }

    /**
     * @param mixed $defence
     */
    public function setDefence($defence)
    {
        $this->defence = $defence;
    }

    public function attaque($pa) {
        var_dump($this->getName());
        $this->setPv($this->getPv() - ($pa - $this->getDefence()));
        var_dump($this->getPv());
        var_dump($this->getDefence());
    }
}