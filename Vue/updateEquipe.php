<?php
require_once ('parts/header.php');
?>

<h1 class="m-4">Ajouter une equipe</h1>

<form action="./index.php?controller=equipe&action=updateForm" method="post">
    <?php
        foreach($update as $element){
            $equipe = $element;
        }
    ?>

    <div class="form-group">
        <label for="exampleInputUsername">Id de l'équipe</label>
        <?php echo ('<input type="text" class="form-control" id="id" name="id" value="'.$equipe->getId().'" disabled>'); ?>
    </div>
    <div class="form-group">
        <label for="exampleInputUsername">Nom de l'équipe</label>
        <?php echo ('<input type="text" class="form-control" id="nom" name="nom" value="'.$equipe->getNom().'" placeholder="Enter nom" required minlength="1">');?>
    </div>
    <div class="form-group">
        <label for="exampleInputUsername">Logo de l'équipe</label>
        <?php echo ('<input type="text" class="form-control" id="logo" name="logo" value="'.$equipe->getLogo().'" placeholder="Enter logo" required minlength="1">'); ?>
    </div>
    <div class="form-group">
        <label for="exampleInputUsername">Nombre de points</label>
        <?php echo ('<input type="text" class="form-control" id="nbPoint" name="nbPoint" value="'.$equipe->getNbPoint().'" placeholder="Enter nombre de points" required minlength="1">'); ?>
    </div>
    <div class="form-group">
        <label for="exampleInputUsername">Nombre de but pris</label>
        <?php echo ('<input type="text" class="form-control" id="nbButPris" name="nbButPris" value="'.$equipe->getNbButPris().'" placeholder="Enter but pris" required minlength="1">'); ?>
    </div>
    <div class="form-group">
        <label for="exampleInputUsername">Nombre de but inscrit</label>
        <?php echo ('<input type="text" class="form-control" id="nbButInscrits" name="nbButInscrits" value="'.$equipe->getNbButInscrits().'" placeholder="Enter but inscrits" required minlength="1">'); ?>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
if(isset($errorsForms)){
    foreach ((array)$errorsForms as $error){
        echo $error.'<br/>';
    }
}

require_once ('parts/footer.php');
?>
