<?php
include 'connect_sql.php';
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty($_POST['name']) || empty($_POST['email']) || strlen($_POST['name'])<5) {
        $error = "Bad entry douchebag";
        if(strlen($_POST['name'])>=1){
            $error = "Name to short";
        }
    }
    else {
        $success = "Added Successfully";
            if(isset($_POST['submit'])){
                $sql = "INSERT INTO users (name,surname,tel,email,address) VALUES ('".$_POST['name']."','".$_POST['surname']."','".$_POST['tel']."','".$_POST['email']."','".$_POST['address']."')";
                $result = mysqli_query($conn,$sql);
            }
    }
}