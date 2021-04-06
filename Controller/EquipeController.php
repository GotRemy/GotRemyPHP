<?php
class EquipeController{

    private $equipeManager;

    public function __construct()
    {
        $this->equipeManager = new EquipeManager();
    }

    public function displayAddEquipe(){
        require 'Vue/addEquipe.php';
    }

    public function registerEquipe(){
        $errorsForms = [];

        if(empty($_POST['nom'])){
            $errorsForms[] = 'Veuillez saisir un nom !';
        }
        if(empty($_POST['logo'])){
            $errorsForms[] = 'Veuillez saisir un logo !';
        }

        if(count($errorsForms) != 0){
            require 'Vue/addEquipe.php';
        }
        else{
            $equipe = new Equipe(null, $_POST['nom'], $_POST['logo'], null, null, null);

            $ajout = $this->equipeManager->insert($equipe);

            if(!is_null($ajout['erreur'])){
                $errorsForms[] = $ajout['erreur'];
                require 'Vue/register.php';
            }
            else{
                header('Location: index.php?controller=dashboard&action=home');
            }
        }
    }

    public function deleteEquipe($id){

        if(empty($_SESSION)){
            header('Location: index.php?controller=user&action=login');
        }
        else{

            $delete = $this->equipeManager->delete($id);

            if(!is_null($delete['erreur'])){
                require 'Vue/dashboard.php';
            }
            else{
                header('Location: index.php?controller=dashboard&action=home');
            }
        }
    }

    public function updateEquipe($id){

        if(empty($_SESSION)){
            header('Location: index.php?controller=user&action=login');
        }
        else{
            $update = $this->equipeManager->selectById($id);
            if(!is_null($update['erreur'])){
                require 'Vue/dashboard.php';
            }
            else{
                require 'Vue/updateEquipe.php';
            }
        }
    }

    public function updateEquipeForm(){

            $equipe = new Equipe($_POST['id'], $_POST['nom'], $_POST['logo'], $_POST['nbPoint'], $_POST['nbButPris'], $_POST['nbButInscrits']);

            $this->equipeManager->update($equipe);


            header('Location: index.php?controller=dashboard&action=home');

    }
}
