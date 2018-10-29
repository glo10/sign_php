<?php
    require_once 'bdd_connect.php';

    if(
        isset($_POST['email'])      && 
        !empty($_POST['email'])     && 
        isset($_POST['mdp'])        && 
        !empty($_POST['mdp'])       &&
        isset($_POST['mdpConfirm']) && 
        !empty($_POST['mdpConfirm'])
    ){
        array_map('htmlspecialchars', $_POST);
        $email = $_POST['email'];
        $mdp = password_hash($_POST['mdp'],PASSWORD_BCRYPT);

        $request = 'INSERT INTO membre(email,mdp)
                    VALUES(:email,:mdp)';

        $insert = $pdo->prepare($request);
        $insert->bindParam(':email',$email);
        $insert->bindParam(':mdp',$mdp);
        $insert->execute()
        header('location:../index.php');
    }
    else
    {
        echo 'données en post incorrectes';
    }