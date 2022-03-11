<?php

session_start();

$valid = true;

if(empty($_POST['name']) || empty($_POST['password'])){
    $_SESSION['flash_message'] = "Attention certain champs sont vides !";
    header('Location: /login.php');
}


require 'database.php';


try {
    $dbase = new database('localhost','root','', '', 'blog_lisio');

    $dbh = $dbase->connection();
    $sth = $dbh->prepare("SELECT password FROM UTILISATEURS WHERE name = :username");
    $sth->execute(array('username' => $_POST['name']));

    $result = $sth->fetch();

    if(password_verify($_POST['password'], $result[0])) {

        
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['connected'] = true;
        header('Location: /administration.php');
    }else {
        session_destroy();
        $_SESSION['flash_message'] = "Le mot de passe est invalide.";
        header('Location: /login.php');
        
    }

} catch (PDO_Exeception $e) {
    $_SESSION['flash_message'] = "Erreur : ". $e->getMessage();
    die();
}
