<?php

    class DashboardManager extends DbManager {

        function __construct()
        {
            parent::__construct();
        }

        public function classement(){
            $requete = $this->bdd->query("SELECT * FROM equipe ORDER BY nbPoint DESC, nbButPris DESC, nbButInscrits DESC");
            $resultat = $requete->fetchAll();

            return $resultat;
        }
    }
