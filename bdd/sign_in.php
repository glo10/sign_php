<?php
    require_once 'bdd_connect.php';

    if(
        isset($_POST['email']) && 
        !empty($_POST['email']) && 
        isset($_POST['mdp']) && 
        !empty($_POST['mdp'])
    ){
        array_map('htmlspecialchars', $_POST);
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];

        $request = 'SELECT * 
                    FROM membre 
                    WHERE email=:email';

        $select = $pdo->prepare($request);
        $select->bindParam(':email',$email);

        if($select->execute()){
            $result = $select->fetch(PDO::FETCH_ASSOC);
            
            if(password_verify($mdp,$result['mdp']))
            {
                if(session_id() == '' || !isset($_SESSION)) {
                    session_start();
                    $_SESSION['id'] = $result['id'];
                    $_SESSION['email'] = $result['email'];
                    header('location:../accueil.php');
                }
            }
            else
            {
                header('location:../index.php?error=-1');
            }
        }
    }
    else
    {
        echo 'données en post incorrectes';
    }