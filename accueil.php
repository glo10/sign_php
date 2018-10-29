<?php
    session_start();

    if(empty($_SESSION['email'])){
        header('location:index.php');
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
    <title>Accueil</title>
</head>
<body>
    <main class="container">
        <p class="text-success">Bonjour, <?= $_SESSION['email']?></p>
        <a class="btn btn-primary" href="deconnexion.php">Déconnexion</a>
    </main>
</body>
</html>