<?php
class HomeController{
    public function index(){
        // $data = Employee::All()->go();
        $data = "Hello";

        require_once '/GitHub/phpCustom/View/Home.php';
    }
}
