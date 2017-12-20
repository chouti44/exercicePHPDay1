<?php
    class Combat {
        protected $players = array();

        public function getPlayers() {
            return $this->players;
        }

        public function addPlayers($players) {
            $this->players[] = $players;
        }

        public function begin() {
            // chevalier var_dump($this->players[0]);
            // viking var_dump($this->players[1]);
            $chevalier = $this->players[0];
            $viking = $this->players[1];

            while($chevalier->getPv() > 0 ||  $viking->getPv() > 0) {
                $viking->attack($chevalier);
                $chevalier->attack($viking);
                var_dump($viking->attack());
            }
        }
    }
?>