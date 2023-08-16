<?php

// $host = '';
// $database = '';
// $username = '';
// $password = '';

// try{
//     $conn = new PDO("mysql:host=$host;dbname=$database;", $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// }catch(PDOException $e){
//     die("Connection error: " . $e->getMessage());
// }
// require_once '/GitHub/phpCustom/Base/Db.php';
// $db = new DB();


require_once '/GitHub/phpCustom/Controller/EmployeeController.php';

$controller = new EmployeeController();
$controller->index();
