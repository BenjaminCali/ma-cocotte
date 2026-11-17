<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ma Cocotte</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css?v=6">

    <style>
header {
    background-color: #f4efe6;
    padding: 5px 1px;
    border-bottom: 1px solid #e0dbd0;
}

header nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
}

header nav > a {
    display: flex;
    align-items: center;
    gap: 15px;
    color: #2c2c2c;
    font-weight: bold;
    font-family: 'Montserrat', sans-serif;
}

header nav > a img {
    width: 70px;
}

header nav ul {
    list-style: none;
    display: flex;
    gap: 30px;
    margin: 0;
    padding: 0;
    align-items: center;
}

header nav ul li a {
    text-decoration: none;
    color: #333;
    font-weight: 600;
    font-size: 0.85rem;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: color 0.2s ease;
}

header nav ul li a:hover {
    color: #c93b2b;
}
</style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
</head>
<body>
    <header>
        <nav>
            <a href="index.php">
                <img src="logo.png" alt="Logo Cocotte" width="100">
            </a>

                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="recettes.php">Les recettes</a></li>
                    <li><a href="apropos.php">À propos</a></li>
                </ul>
        </nav>
    </header>

    <main>
