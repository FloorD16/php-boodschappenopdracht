<?php

$config = require("config.php");

$db = new Database($config);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $db->query("INSERT INTO `floor_groceries`.`groceries` (`name`, `quantity`, `price`) VALUES (:name, :quantity, :price)", [
        'name' => $_POST['name'],
        'quantity' => $_POST['quantity'],
        'price' => $_POST['price'],
    ]);

    header("Location: /");
    exit();
} 

require "views/create.view.php";

