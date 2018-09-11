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
        // -----------------------------------------------------

        public function setter($postData) {
            foreach ($postData as $key => $value) {
              $this->$key = $value;
            }
          }

        // saving username and password into csv file
        public function saveUserName() {
            $fileHandle = fopen("user5.csv", "w+");
            $writeString = serialize($this) . PHP_EOL;
            fwrite($fileHandle, $writeString);
            fclose($fileHandle);
        }

        // gör formulärskaparfunktion
        public function getForm($page) {
            $formString = "<form action='$page' method='POST'>";
        
            foreach ($this as $key => $value) {
        
              $formString .= "<label for='$key'>$key</label>";
              $formString .= "<input class='text-input' type ='text' name='$key'><br />";
        
            }
            $formString .= "<input class='btn' type='submit' name='submit' value='LOGIN'>";
            $formString .= "</form>";
            return $formString;
          }

        // gör inloggningsfunktion

        // gör registeringsfunktion - nästan KLART-behöver variabel i fildöpningen

    }


?>