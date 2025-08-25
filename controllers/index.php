<?php

$config = require("config.php");

$db = new Database($config);

$groceries = $db->query("select * from groceries")->fetchAll();

foreach ($groceries as $key => $product) {
    $groceries[$key]["subtotal"] = $product["price"] * $product["quantity"];
}

$subtotals = [];

foreach ($groceries as $product) {
    $subtotals[] = $product['subtotal'];
}

function sum($carry, $item) {
    $carry += $item;
    return $carry;
}

$total = array_reduce($subtotals, "sum");

require "views/index.view.php";