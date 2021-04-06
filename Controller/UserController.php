<?php
class UserController{

    public function displayLogin(){
        require 'Vue/login.php';
    }

    public function logUser(){
        // Vérifier que les champs sont bien remplis !
        $errorsForms = [];

        if(empty($_POST['username'])){
            $errorsForms[] = 'Veuillez saisir un username !';
        }
        if(empty($_POST['password'])){
            $errorsForms[] = 'Veuillez saisir un password !';
        }

        if(count($errorsForms) == 0){

            if($_POST['username'] != "toto" && $_POST['password'] != "titi"){
                $errorsForms[] = "L'username et/ou le pseudo est/sont faux !";
                require 'Vue/login.php';
            }
            else{

                $_SESSION['username'] = $_POST['username'];
                header('Location: index.php?controller=dashboard&action=home');

            }
        }
        else {
            require 'Vue/login.php';
        }
    }
}
