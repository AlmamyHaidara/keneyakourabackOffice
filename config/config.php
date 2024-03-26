<?php
global $con;
try {
    $con = new PDO('mysql:host=localhost;dbname=basemedecin1', 'root', '');
    $con->exec('SET NAMES utf8');
} catch (Exception $e) {
    die('Erreur: ' . $e->getMessage());
}
