<?php
session_start();
require 'db.class.php';
$DB = new DB();
require 'panier.class.php';
$panier = new panier();

?>