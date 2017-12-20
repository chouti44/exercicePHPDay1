<?php
    class LivingPerson {
        private $pv = 100;
        private $name;

        public function getName():string {
            return $this->name;
        }

        public function setName(String $name) {
            $this->name = $name;
        }

        private function getPv():int {
            return $this->pv;
        }

        private function setPv(int $pv) {
            $this->pv = $pv;
        }

        public function display() {
            $livingPersons['life'] = [
                "name" => $this->name,
                "pv" => $this->pv
            ];
            $messagePv = 'Pv: ' . $this->getPv().PHP_EOL;
            echo $messagePv;

            return $livingPersons;
        }
    }
?>