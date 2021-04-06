<?php
require_once ('parts/header.php');
?>

<h1 class="m-4">Login</h1>

<form action="./index.php?controller=user&action=loginForm" method="post">
    <div class="form-group">
        <label for="exampleInputUsername">Username</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required minlength="1">
        <small id="emailHelp" class="form-text text-muted">toto</small>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required minlength="1">
        <small id="emailHelp" class="form-text text-muted">titi</small>
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
