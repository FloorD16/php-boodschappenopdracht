<?php

$products = [
    "product1" => [
        "name" => "Rijst",
        "price" => 1.00,
        "quantity" => 1
    ],
    "product2" => [
        "name" => "Broccoli",
        "price" => 0.99,
        "quantity" => 2
    ],
    "product3" => [
        "name" => "Koekjes",
        "price" => 1.20,
        "quantity" => 4
    ],
    "product4" => [
        "name" => "Noten",
        "price" => 2.99,
        "quantity" => 0
    ]
];

foreach ($products as $key => $product) {
    $products[$key]["subtotal"] = $product["price"] * $product["quantity"];
}

$subtotals = [];

foreach ($products as $product) {
    $subtotals[] = $product['subtotal'];
}

function sum($carry, $item) {
    $carry += $item;
    return $carry;
}

$total = array_reduce($subtotals, "sum");

require "index.view.php";