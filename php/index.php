<?php
require_once __DIR__ . '/../class/Customer.php';
require_once __DIR__ . '/../class/Product.php';


$my_card = new CreditCard('6523762323', '764', 2028, 20);
$customer = new Customer('Francesco', 'Totti', 22, $my_card,);
$products = new Products(20, 'Croccantini', 'Animali Felici');
$product = new Product(100, 'Acquario', 'Animali Felici', 'Pesce');

var_dump($my_card);
var_dump($customer);
var_dump($products);
var_dump($product);
