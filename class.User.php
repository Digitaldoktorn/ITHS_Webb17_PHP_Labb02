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

        // Register user - saving username and password into csv file
        public function saveUserName() {
            $fileHandle = fopen($this->userName . ".csv", "w+"); // lagt in $this->userName
            // $writeString = serialize($this->userName) . serialize($this->userPassword) . PHP_EOL;
            $writeString = ($this->userName) . ',' . ($this->userPassword) . PHP_EOL;
            fwrite($fileHandle, $writeString);
            fclose($fileHandle);
        }

        // create form function
        public function getForm($page) {
            $formString = "<form action=$page method='POST'>";
        
            foreach ($this as $key => $value) {
        
              $formString .= "<label for='$key'>$key</label>";
              $formString .= "<input class='text-input' type ='password' name='$key'><br />";
        
            }
            $formString .= "<input class='btn' type='submit' name='submit' value='LOGIN'>";
            $formString .= "</form>";
            return $formString;
          }

        // Logging in user - comparing user input with user csv file
        public function loginUser($postData){
            
            $csvUserData = array_map('str_getcsv', file($postData['userName'] . ".csv"));
            $csvUserName = $csvUserData[0][0];
            $csvUserPassword = $csvUserData[0][1];

            // print_r($csvUserData);
            // print_r($csvUserName);
            // print_r($csvUserPassword);

            if($postData['userName'] != $csvUserName || $postData['userPassword'] != $csvUserPassword){
                echo "<p id='alert'>Your username and/or password was not entered correctly. Please try again.</p>";?>
                <script>
                setTimeout(function(){
                    window.location = "index.php";
                    }, 3000);
                </script><?php
            }

            elseif($postData['userName'] = $csvUserName || $postData['userPassword'] = $csvUserPassword){
                header("Location: profile_page.php");
            }

            else {
                echo "<p id='alert'>No values inserted. Please fill in the forms.</p>";?>
                <script>
                setTimeout(function(){
                    window.location = "index.php";
                    }, 3000);
                </script><?php
            }
        }
    }
?>