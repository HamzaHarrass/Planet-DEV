<?php
    require_once "../config/connection.php";
    require_once "../config/UserService.php";

    class user {
        
        public $id;
        public $name;
        public $email;
        public $password;


        public static function signUp($name, $email, $password){
            global $conn;
            $query = "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";
            $stmt = $conn->prepare($query);
            
            if($stmt->execute()){
                $_SESSION["signUpMessage-success"] = "Account has been created successfully!";
                header("location: ../dashboard.php");
            }else{
                $_SESSION["signUpMessage-field"] = "Sorry email or name already taken.";
                header("location: ../index.php");
            }
            
        }
        public function login(){
            $_SESSION["id"] = $this->id;
            $_SESSION["name"] = $this->name;
            $_SESSION["email"] = $this->email;
            $_SESSION["password"] = $this->password;
            $_SESSION["loginMessage-success"] = "welcome back ". $this->name;
            header("location: ../dashboard.php");
        }
    }
?>