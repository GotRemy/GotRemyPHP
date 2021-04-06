<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ligue 1 Football</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php?controller=dashboard&action=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php?controller=equipe&action=add">Ajouter équipe</a>
                    </li>
                </ul>
                <?php
                if(isset($_SESSION['username'])){
                    echo ('<a class="nav-link" href="./index.php?controller=user&action=logout" style="color:rgba(255,255,255,.5);">Logout</a>');
                }
                else{
                    echo ('<a class="nav-link" href="./index.php?controller=user&action=login" style="color:rgba(255,255,255,.5);">Login</a>');

                }
                ?>
            </div>
        </nav>
        <div class="container">
