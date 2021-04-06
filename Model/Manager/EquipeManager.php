<?php
class EquipeManager extends DbManager{

    function __construct()
    {
        parent::__construct();
    }

    public function insert(Equipe $equipe){
        $nom = $equipe->getNom();
        $logo = $equipe->getLogo();

        try{
            $requete = $this->bdd->prepare("INSERT INTO equipe (nom, logo) VALUES (?, ?)");
            $requete->bindParam(1, $nom);
            $requete->bindParam(2, $logo);

            $erreur = null;

            $requete->execute();
        }catch(PDOException $e){

            if($e->getCode() == '23000'){
                $erreur = 'Cet equipe existe déjà veuillez vous connecter';
            }
            else{
                $erreur = 'Ouups ! Erreur inconnu !';
            }
        }

        return ['erreur'=> $erreur, 'equipe'=>$equipe];
    }

    public function delete($id){
        try{
            $requete = $this->bdd->prepare("Delete from equipe where id = ?");
            $requete->bindParam(1, $id);

            $erreur = null;

            $requete->execute();
        }catch(PDOException $e){
            $erreur = 'Ouups ! Erreur inconnu !';
        }

        return ['erreur'=> $erreur];
    }

    public function selectById($id){
        try{
            $requete = $this->bdd->query("Select * from equipe where id = ".$id);

            $erreur = null;

            $res = $requete->fetch();
            $equipe = new Equipe($res['id'], $res['nom'], $res['logo'], $res['nbPoint'], $res['nbButPris'], $res['nbButInscrits']);

        }catch(PDOException $e){
            $erreur = 'Ouups ! Erreur inconnu !';
        }

        return ['erreur'=> $erreur, 'equipe'=>$equipe];
    }

    public function update(Equipe $equipe){
        $nom = $equipe->getNom();
        $logo = $equipe->getLogo();
        $id = $equipe->getId();
        $nbPoints = $equipe->getNbPoint();
        $nbButPris = $equipe->getNbButPris();
        $nbButInscrits = $equipe->getNbButInscrits();
        try{
            $requete = $this->bdd->prepare("Update equipe set nom = '".$nom."', logo = '".$logo."', nbPoint = ".$nbPoints.", nbButPris = ".$nbButPris.", nbButInscrits = ".$nbButInscrits." where id = ".$id);
            $erreur = null;

            $requete->execute();
        }catch(PDOException $e){
            $erreur = 'Ouups ! Erreur inconnu !';
        }

        return ['erreur'=> $erreur];
    }
}
