<?php
require_once "../config/connection.php";
    require_once "../class/user.php";

    if(isset($_POST["signup_btn"]))       signUpChecker();
    if(isset($_POST["login_btn"]))        loginChecker();

    function signUpChecker(){
        global $conn;
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $query = "SELECT * FROM users WHERE `email` = '$email' OR `name` = '$name'";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($stmt->rowCount() != 0) {
            $_SESSION["signUpMessage-field"] = "Sorry email or name already taken.";
        } else {
            user::signUp($name, $email, $password);
            $_SESSION["signUpMessage-success"] = "Account has been created successfully!";
        }
    }
    function loginChecker(){
        global $conn;
        $email = $_POST["email"];
        $password = $_POST["password"];

        $query = "SELECT * FROM users WHERE `email` = '$email' AND `password` = '$password'";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($stmt->rowCount() == 1) {
            $newUser = new user($result[0]["id"], $result[0]["name"], $result[0]["email"], $result[0]["password"]);
            $newUser -> login();
        } else {
            $_SESSION["loginMessage-field"] = "Sorry email or password is incorrect";
        }
    }
?>