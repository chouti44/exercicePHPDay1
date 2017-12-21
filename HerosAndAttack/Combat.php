<?php
/**
 * Created by PhpStorm.
 * User: nickleus
 * Date: 20/12/17
 * Time: 16:05
 */

class Combat {
    private $joueurs = array();

    /**
     * @return mixed
     */
    public function getJoueurs()
    {
        return $this->joueurs;
    }

    /**
     * @param mixed $joueurs
     */
    public function addJoueurs($joueurs)
    {
        $this->joueurs[] = $joueurs;
    }

    public function debut() {
        //var_dump($this->joueurs[0]->getName());
        //var_dump($this->joueurs[0]->getAttaque());

        $viking = $this->joueurs[0];
        $chevalier = $this->joueurs[1];

        while ($viking->getPv() > 0 || $chevalier->getPv() > 0) {
            //var_dump($chevalier->getName() . " attaque " . $viking->getName());
            $chevalier->attaque($viking->armsPoint());

            // var_dump($viking->getName() . " attaque " . $chevalier->getName());
            $viking->attaque($chevalier->armsPoint());
        }
    }
}