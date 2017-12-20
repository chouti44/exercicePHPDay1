<?php
    class Person {
        private $firstName;
        private $lastName;

        public function getFirstName():String {
            return $this->firstName;
        }

        public function setFirstName($firstName) {
            $this->firstName = $firstName;
        }

        public function getLastName():String  {
            return $this->lastName;
        }

        public function setLastName($lastName) {
            $this->lastName = $lastName;
        }

        public function display():String  {
            return 'Hello ' . $this->firstName . ' ' . $this->lastName;
        }
    }

    $person = new Person();
    $person->setFirstName('Cecile');
    $person->setLastName('Livet');
    var_dump($person->display());
?>