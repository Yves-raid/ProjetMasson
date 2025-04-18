<?php define('BASE', '/phpprojet/'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php if (isset($title)) {
            echo $title;
        } else {
            echo 'Gallerie Manga';
        } ?>
    </title>
    <link rel="stylesheet" href="<?= BASE ?>css/style.css">
</head>
<body>
    <header>
        <img src="<?= BASE ?>images/logo.webp" alt="logo" height="60">
        <nav>
            <a href="<?= BASE ?>index.php">Accueil</a>
            <a href="<?= BASE ?>pages/gallerie.php">Galerie</a>
            <a href="<?= BASE ?>pages/admin.php">Admin</a>
        </nav>
    </header>
    <main>
