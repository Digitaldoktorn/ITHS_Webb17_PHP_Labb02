<?php
    class User {
        private $userName;
        private $userPassword;

        // getters
        public function getUserName(){
            return $this->userName;
        }
        public function getUserPassword(){
            return $this->userPassword;
        }

        // tog bort constructor och setters - överflödiga

        // -----------------------------------------------------

        public function setter($postData) {
            foreach ($postData as $key => $value) {
              $this->$key = $value;
            }
          }

        // saving username and password into csv file
        public function saveUserName() {
            $fileHandle = fopen($this->userName . ".csv", "w+"); // lagt in $this->userName
            $writeString = serialize($this->userName) . serialize($this->userPassword) . PHP_EOL;
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

        // gör registeringsfunktion - KLART

    }


?>