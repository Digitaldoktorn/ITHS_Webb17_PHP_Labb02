<!DOCTYPE html>
<html lang="en">  
<head>
    <meta charset="UTF-8">
    <title>PHP - Labb 2 - Anders Eriksson</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
</body>
</html>

<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

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

        public function setter($postData) {
            foreach ($postData as $key => $value) {
              $this->$key = $value;
            }
          }

        // Registering user - saving username and password into csv file
        public function saveUserName() {
            $thisUserName = $this->userName;
            $thisUserPassword = $this->userPassword;

            // hashing password
            $hashedPassword = password_hash($thisUserPassword, PASSWORD_DEFAULT);

            $fileHandle = fopen($thisUserName . ".csv", "w+");
            $writeString = ($thisUserName) . ',' . ($hashedPassword) . PHP_EOL;
            fwrite($fileHandle, $writeString);
            fclose($fileHandle);
        }

        // Creating form
        public function getForm($page) {
            
            $formString = "<form action=$page method='POST'>";
        
            foreach ($this as $key => $value) {
                if($key == "userPassword"){
                    $formString .= "<label for='$key'>$key</label>";
                    $formString .= "<input class='text-input' type ='password' name='$key'><br />";
                }
                else {
                    $formString .= "<label for='$key'>$key</label>";
                    $formString .= "<input class='text-input' type ='text' name='$key'><br />";
                }
        
            }
            $formString .= "<input class='btn' type='submit' name='submit' value='LOGIN'>";
            $formString .= "</form>";
            return $formString;
          }

        // Logging in user - comparing user input with user csv file
        public function loginUser($postData){
            
            $csvUserData = array_map('str_getcsv', file($postData['userName'] . ".csv"));
            $csvUserName = $csvUserData[0][0];
            $csvHashedPassword = $csvUserData[0][1];
            $userInputPassword = $postData['userPassword'];
            $verifiedPassword = password_verify($userInputPassword, $csvHashedPassword);

            // print_r($csvUserData);
            // print_r($csvUserName);
            // print_r($csvHashedPassword);
            // print_r($verifiedPassword);

            
            if($postData['userName'] == $csvUserName && $verifiedPassword == 1){
                session_start();
                $_SESSION['userName'] = $csvUserName;
                header("Location: profile_page.php");
                exit();
            }

            elseif($postData['userName'] != $csvUserName || $verifiedPassword != 1){
                echo "<div><section><p id='alert'>Your username and/or password was not entered correctly. <br>Please try again...</p></div></section>";?>
                <script>
                setTimeout(function(){
                    window.location = "index.php";
                    }, 4000);
                </script><?php
            }

            else {
                echo "<div><section><p id='alert'>No values inserted. Please fill in the forms.</p></div></section>";?>
                <script>
                setTimeout(function(){
                    window.location = "index.php";
                    }, 3000);
                </script><?php
            }
        }
    }
?>