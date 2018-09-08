<?php
    class User {
        private $userName;
        private $emailAddress;
        private $userPassword;

        // constructor
        function __construct($userName, $emailAddress, $userPassword){
            $this->setUserName($userName);
            $this->setEmailAddress($emailAddress);
            $this->setUserPassword($userPassword);
        }

        // getters
        public function getUserName(){
            return $this->userName;
        }
        public function getEmailAddress(){
            return $this->emailAddress;
        }
        public function getUserPassword(){
            return $this->userPassword;
        }

        // setters
        public function setUserName($userName){
            $this->userName = $userName;
        }
        public function setEmailAddress($emailAddress){
            $this->emailAddress = $emailAddress;
        }
        public function setUserPassword($userPassword){
            $this->userPassword = $userPassword;
        }
    }


?>