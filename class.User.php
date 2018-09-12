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

        // Register user - saving username and password into csv file
        public function saveUserName() {
            $fileHandle = fopen($this->userName . ".csv", "w+"); // lagt in $this->userName
            $writeString = serialize($this->userName) . serialize($this->userPassword) . PHP_EOL;
            fwrite($fileHandle, $writeString);
            fclose($fileHandle);
        }

        // create form function
        public function getForm($page) {
            $formString = "<form action=$page method='POST'>";
        
            foreach ($this as $key => $value) {
        
              $formString .= "<label for='$key'>$key</label>";
              $formString .= "<input class='text-input' type ='text' name='$key'><br />";
        
            }
            $formString .= "<input class='btn' type='submit' name='submit' value='LOGIN'>";
            $formString .= "</form>";
            return $formString;
          }

        // Logging in user - comparing user input with user csv file
        public function loginUser($postData){
            
            $csvUserData = array_map('str_getcsv', file($postData['userName'] . ".csv"));
            $csvUserName = $csvUserData[0];
            $csvUserPassword = $csvUserData[1];
            //print_r($csvUserName);
            //print_r($userPassword);

            if($postData["userName"] != $csvUserName || $postData["userPassword"] != $csvUserPassword){
                $error = "Your username and/or password was not entered correctly. Please try again.";
            }

            else {
                // sending user to logged in page
                header("Location: profile_page.php");
            }



        }

    }


?>