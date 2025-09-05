<?php
session_start();

// Configuration de la base de données
$host = 'localhost';
$dbname = 'gestionnaire_odsm';
$username = 'root'; // À adapter selon votre configuration
$password = '';     // À adapter selon votre configuration

// Connexion à la base de données
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données: " . $e->getMessage());
}