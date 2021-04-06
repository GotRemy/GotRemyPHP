<?php
class DashboardController{

    private $dashboardManager;

    public function __construct()
    {
        $this->dashboardManager = new DashboardManager();
    }

    function displayHome(){
        $result = $this->dashboardManager->classement();
        require 'Vue/dashboard.php';
    }
}
