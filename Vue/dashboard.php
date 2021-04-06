<?php
    require_once ('parts/header.php');
?>

<h1 class="m-4">Classement de la ligue 1</h1>
<table class="table table-striped border">
    <thead>
    <tr>
        <th scope="col" class="d-none">#</th>
        <th scope="col">Nom</th>
        <th scope="col">Logo</th>
        <th scope="col">nb Points</th>
        <th scope="col">nb But Pris</th>
        <th scope="col">nb But Inscrits</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>

    <?php
        if(isset($result)){
            foreach ($result as $element){

                echo ("<tr>");
                    echo ("<th scope='row' class='d-none'>".$element['id']."</th>");
                    echo ("<th>".$element['nom']."</th>");
                    echo ("<th><img src='".$element['logo']."' style='max-width:100px;'></th>");
                    echo ("<th>".$element['nbPoint']."</th>");
                    echo ("<th>".$element['nbButPris']."</th>");
                    echo ("<th>".$element['nbButInscrits']."</th>");
                    echo ("<th><a type='button' class='btn btn-warning m-1' href='index.php?controller=equipe&action=update&id=".$element['id']."'>Modifier</a>");
                    echo ("<a type='button' class='btn btn-danger m-1' href='index.php?controller=equipe&action=delete&id=".$element['id']."'>Supprimer</a></th>");

                echo ("</tr>");

            }
        }
        else{
            echo ("Il n'y a pas d'équipe inscrit !");
        }
    ?>

    </tbody>
</table>

<?php
require_once ('parts/footer.php');
?>
