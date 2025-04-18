<?php 
$title = "Accueil";
include 'inc/header.php'; 
?>

<div class="container-home">
    
    <div class="bloc-home navigation">
        <a href="<?= BASE ?>index.php">Accueil</a>
    </div>
    
    <div class="bloc-home galerie">
        <a href="<?= BASE ?>pages/gallerie.php">Galerie</a>
    </div>
    
    <div class="bloc-home admin">
        <a href="<?= BASE ?>pages/admin.php">Admin</a>
    </div>

</div>

<?php include 'inc/footer.php'; ?>
