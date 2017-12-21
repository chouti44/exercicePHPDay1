<?php
    class User {
        private $firstName;
        private $lastName;
        private $email;
        private $password;

        /**
         * @return string
         */
        public function getFirstName():String {
            return $this->firstName;
        }

        /**
         * @param string $firstName
         */
        public function setFirstName(String $firstName) {
            $this->firstName = $firstName;
        }

        /**
         * @return string
         */
        public function getLastName():String {
            return $this->lastName;
        }

        /**
         * @param string $lastName
         */
        public function setLastName(String $lastName) {
            $this->lastName = $lastName;
        }

        /**
         * @return string
         */
        public function getEmail():String {
            return $this->email;
        }

        /**
         * @param string $email
         */
        public function setEmail(String $email) {
            $this->email = $email;
        }

        /**
         * @return string
         */
        public function getPassword():String {
            return $this->password;
        }

        /**
         * @param string $password
         */
        public function setPassword(String $password) {
            $this->password = $password;
        }
    }
?>

