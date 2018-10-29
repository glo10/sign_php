<?php
    session_start();
    if(isset($_SESSION['email'])){
        header('location:accueil.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
    <title>Connexion</title>
</head>
<body>
    <main class="container">
        <?php
        if(isset($_GET['error']) && $_GET['error'] == '-1'){
        ?>
            <p class="text-warning">La combinaison de l'email et du mot de passe n'hésiste pas</p>
        <?php
        }
        ?>
        <form action="bdd/sign_in.php" class="form-horizontal" method="POST">

                <div class="form-group">
                    <input type="email" name="email" class="form-control col-4" placeholder="Saisir votre email">
                </div>

                <div class="form-group">
                    <input type="password" name="mdp" class="form-control col-4" placeholder="Saisir votre emmot de passe">
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-success col-2" value="connexion" >
                    <a class="btn btn-primary col-2" href="inscription.php">Inscription</a>
                </div>
        </form>
    </main>
</body>
</html>