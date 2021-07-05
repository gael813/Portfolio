<?php
if ($visit === 'home') {
    $home = 'text-light';
} elseif ($visit === 'project') {
    $project = 'text-light';
} elseif ($visit === 'about') {
    $about = 'text-light';
}

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title ?></title>
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="/index.php">Portfolio</a>

                <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarsExample07">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item ms-5">
                            <a class="nav-link <?= $home ?>" href="index.php">Accueil</a>
                        </li>
                        <li class="nav-item ms-5">
                            <a class="nav-link <?= $project ?>" href="project.php">Projets</a>
                        </li>
                        <li class="nav-item ms-5">
                            <a class="nav-link <?= $about ?>" href="about.php">À propos de moi</a>
                        </li>                        
                    </ul>                
                </div>
            </div>
        </nav>
    

