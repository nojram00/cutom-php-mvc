<?php
class EmployeeController{
    public function index(){
        require_once '/GitHub/phpCustom/Model/Employee.php';
        $data = Employee::start()->select()->go();
        // $data = "Hello";

        require_once '/GitHub/phpCustom/View/Employee.php';
    }
}
