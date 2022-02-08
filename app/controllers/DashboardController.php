<?php
/**
 * DashboardController Controller 
 * 
 * @author Noah Wilderom
 * @see Controller class
 */
Class DashboardController extends Controller { 

    public function __construct() {
        $this->userModel = $this->model('User');
        $this->helper = $this->helpers('Helpers');
    }

    public function index() {
        $this->userModel->getUsers();
        $this->view('dashboard/home');
    }


    
 
    /* Voorbeeld

     public function about() {
        $this->view('pages/about');
    }
    Url: MVCphp/shop/about 
    Als de url er zo uitziet dan word de functie about() ingeladen
    In de functie word de view functie aangeroepen die in de Controller 
    staat deze functie laad het bestand in genaamd about.php in de map pages
    */
    

    

}