<?php
require '../vendor/autoload.php';

$products = ['products' => ['product1', 'product2', 'product3', 'product4', 'product5']];


$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../View');

$twig = new Twig\Environment($loader);


echo $twig->render('index.html.twig', $products);

