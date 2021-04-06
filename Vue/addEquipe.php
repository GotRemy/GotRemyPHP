<?php
require_once ('parts/header.php');
?>

<h1 class="m-4">Ajouter une equipe</h1>

<form action="./index.php?controller=equipe&action=addForm" method="post">
    <div class="form-group">
        <label for="exampleInputUsername">Nom de l'équipe</label>
        <input type="text" class="form-control" id="nom" name="nom" placeholder="Enter nom" required minlength="1">
    </div>
    <div class="form-group">
        <label for="exampleInputUsername">Logo de l'équipe</label>
        <input type="text" class="form-control" id="logo" name="logo" placeholder="Enter logo" required minlength="1">
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
