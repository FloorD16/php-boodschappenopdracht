<?php

require "Validator.php";

$config = require "config.php";

$db = new Database($config);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];

    if (! Validator::string($_POST['name'], 1, 50)) {
        $errors['name'] = 'Vul een naam van het product in van minstens 1 en maximaal 50 karakters';
    }

    if (! Validator::integer($_POST['quantity'], 1, 20)) {
        $errors['quantity'] = 'Vul een aantal van minstens 1 en maximaal 20 in';
    }

    if (! Validator::decimal($_POST['price'], 0, 2)) {
        $errors['price'] = 'Vul een prijs in met 0 tot 2 decimalen';
    }

    if (empty($errors)) {
        $db->query("INSERT INTO `floor_groceries`.`groceries` (`name`, `quantity`, `price`) VALUES (:name, :quantity, :price)", [
            'name' => $_POST['name'],
            'quantity' => $_POST['quantity'],
            'price' => $_POST['price'],
        ]);

        header("Location: /");
        exit();
    }
    
    
} 

require "views/create.view.php";

