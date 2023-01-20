<?php

 class article {
    public $id;
    public $title;
    public $content;
    public $author;

    public static function create($title, $content, $author){
        global $conn;
        $query = "INSERT INTO `article`(`name`, `content`, `author`) VALUES ('$title','$content','$author')";
        $stmt = $conn->prepare($query);
        if($stmt->execute()){
            $_SESSION["articleMessage-success"] = "Article has been created successfully!";
            header("location: ../dashboard.php");
        }else{
            $_SESSION["articleMessage-field"] = "Sorry something went wrong.";
            header("location: ../dashboard.php");
        }
    }
    public static function update($id, $title, $content, $author){
        global $conn;
        $query = "UPDATE `article` SET `name`='$title',`content`='$content',`author`='$author' WHERE `id` = $id";
        $stmt = $conn->prepare($query);
        if($stmt->execute()){ 
            $_SESSION["articleMessage-success"] = "Article has been updated successfully!";
            header("location: ../dashboard.php");
        }else{
            $_SESSION["articleMessage-field"] = "Sorry something went wrong.";
            header("location: ../dashboard.php");
        }
    }
    public static function delete($id){
        global $conn;
        $query = "DELETE FROM `article` WHERE `id` = $id";
        $stmt = $conn->prepare($query);
        if($stmt->execute()){
            $_SESSION["articleMessage-success"] = "Article has been deleted successfully!";
            header("location: ../dashboard.php");
        }else{
            $_SESSION["articleMessage-field"] = "Sorry something went wrong.";
            header("location: ../dashboard.php");
        }
    }
    public static function getAll(){
        global $conn;
        $query = "SELECT * FROM `article`";
        $stmt = $conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }

    public static function getById($id){
        global $conn;
        $query = "SELECT * FROM `article` WHERE `id` = $id";
        $stmt = $conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
 }

















?>

