<?php
require_once "connection.php";
    require_once "../class/article.php";

    if(isset($_POST["create_btn"]))       createArticle();
    if(isset($_POST["update_btn"]))       updateArticle();
    if(isset($_POST["delete_btn"]))       deleteArticle();

    function createArticle(){
        // die("here");
        if(!isset($_POST["title"]) || !isset($_POST["content"]) || !isset($_POST["author"])){
            $_SESSION["articleMessage-field"] = "Sorry something went wrong.";
            header("location: ../dashboard.php");
        }
        $title = $_POST["title"];
        $content = $_POST["content"];
        $author = $_POST["author"];
        article::create($title, $content, $author);
    }
    function updateArticle(){
        // echo $_POST["id"];
        // echo "here " ;
        // die() ;
        if(!isset($_POST["id"]) || !isset($_POST["title"]) || !isset($_POST["content"]) || !isset($_POST["author"])){
            $_SESSION["articleMessage-field"] = "Sorry something went wrong.";
            // header("location: ../dashboard.php");
        }
        $id = $_POST["id"];
        $title = $_POST["title"];
        $content = $_POST["content"];
        $author = $_POST["author"];
        article::update($id, $title, $content, $author);
    }
    
    function deleteArticle(){
        if(!isset($_POST["id"])){
            $_SESSION["articleMessage-field"] = "Sorry something went wrong.";
            header("location: ../dashboard.php");
        }
        $id = $_POST["id"];
        article::delete($id);
    }
?>