<?php

    class SkillOfPerson extends LivingPerson {
        private $type;
        private $arms;

        public function getType():String {
            return $this->type;
        }

        public function setType(String $type) {
            $this->type = $type;
        }

        public function getArms():String {
            return $this->arms;
        }

        public function setArms(String $arms) {
            $this->arms = $arms;
        }

        public function displayFullPerson() {
            $fullPersons = parent::display();
            $fullPersons['skill'] = [
                "type" => $this->type,
                "arms" => $this->arms
            ];
            $message = $this->getName() . ', ' . $this->getType() . ' has ' . $this->getArms() . '.' .PHP_EOL;
            echo $message;
            return $fullPersons;
        }

    }

?>