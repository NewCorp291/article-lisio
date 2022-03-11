<?php

session_start();

$valid = true;

if(empty($_POST['name']) || empty($_POST['password'])){   
    $_SESSION['flash_message'] = "Attention certain champs sont vides !";
    header('Location: /administration.php');
}


require 'database.php';


try {
    $dbase = new database('localhost','root','', '', 'blog_lisio');


    if(strlen($_POST['password']) < 8) {
        $_SESSION['flash_message'] = "Le mot de passe doit faire plus de 8 caratères.";
        header('Location: /administration.php');
    }
    

    $dbh = $dbase->connection();
    $sth = $dbh->prepare("INSERT INTO UTILISATEURS  (name,password) VALUES (:username,:passwordh)");
    $sth->execute(array('username' => $_POST['name'], 'passwordh' => password_hash($_POST['password'], PASSWORD_DEFAULT)));

    $result = $sth->fetch();
    
    $_SESSION['flash_message'] = "Le compte à bien été ajouté !";
    header('Location: /administration.php');

} catch (PDO_Exeception $e) {
    $_SESSION['flash_message'] = "Erreur : ". $e->getMessage();
    die();
}
