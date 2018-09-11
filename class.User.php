<?php
    class User {
        private $userName;
        private $userPassword;

        // constructor
        function __construct($userName, $userPassword){
            $this->setUserName($userName);
            $this->setUserPassword($userPassword);
        }

        // getters
        public function getUserName(){
            return $this->userName;
        }
        public function getUserPassword(){
            return $this->userPassword;
        }

        // setters
        public function setUserName($userName){
            $this->userName = $userName;
        }
        public function setUserPassword($userPassword){
            $this->userPassword = $userPassword;
        }

        // save username into csv file (se "mini-library-master")
        public function saveUserName() {
            $fileHandle = fopen("user.csv", "a+");
            $writeString = serialize($this) . PHP_EOL;
            fwrite($fileHandle, $writeString);
            fclose($fileHandle);
        }

        // gör formulärskaparfunktion
        // gör inloggningsfunktion
        // gör registeringsfunktion
    }


?>