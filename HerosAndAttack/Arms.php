<?php
    class Arms {
        private $pointAttack;
        private $arms;

        //__construct for var

        public function getPointAttack() {
            return $this->pointAttack;
        }

        public function setPointAttack($pointAttack) {
            $this->pointAttack = $pointAttack;
        }

        public function getArms() {
            return $this->arms;
        }

        public function addArms($arms) {
            if($arms == 'Hache') {
                $this->pointAttack = 10;
            } elseif ($arms == 'epee') {
                $this->pointAttack = 5;
            }
            $pointAttack = $this->pointAttack;
            return $pointAttack;
        }

        public function armsPoint() {
            $pointAttack = $this->pointAttack;
            return $pointAttack;
        }

    }
?>