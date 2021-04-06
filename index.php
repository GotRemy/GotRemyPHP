<?php
require 'include.php';
$dashboardController = new DashboardController();
$userController = new UserController();
$equipeController = new EquipeController();

if($_GET['controller'] == 'equipe' || $_GET['controller'] == 'equipe' || $_GET['controller'] == 'equipe'){
    if(empty($_SESSION)){
        header('Location: index.php?controller=user&action=login');
    }
}

if(empty($_GET)){
    header('Location: index.php?controller=dashboard&action=home');
    die();
}

if($_GET['controller'] == 'user' && $_GET['action'] == 'login'){

    $userController -> displayLogin();
}
elseif($_GET['controller'] == 'user' && $_GET['action'] == 'loginForm'){

    $userController -> logUser();
}
elseif($_GET['controller'] == 'user' && $_GET['action'] == 'logout'){

    $userController -> logout();
}
elseif ($_GET['controller'] == 'dashboard' && $_GET['action'] == 'home'){
    $dashboardController -> displayHome();
}
elseif ($_GET['controller'] == 'equipe' && $_GET['action'] == 'add'){
    $equipeController -> displayAddEquipe();
}
elseif ($_GET['controller'] == 'equipe' && $_GET['action'] == 'addForm'){
    $equipeController -> registerEquipe();
}
elseif ($_GET['controller'] == 'equipe' && $_GET['action'] == 'delete'){
    $equipeController -> deleteEquipe($_GET['id']);
}
elseif ($_GET['controller'] == 'equipe' && $_GET['action'] == 'update'){
    $equipeController -> updateEquipe($_GET['id']);
}
elseif ($_GET['controller'] == 'equipe' && $_GET['action'] == 'updateForm'){
    $equipeController -> updateEquipeForm();
}
else {
    throw new Exception('Page introuvable', 404);
}
