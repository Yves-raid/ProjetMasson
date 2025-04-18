<?php 
$title = "Galerie";
include '../inc/header.php'; 
?>

<h2>Galerie animés</h2>

<article class="gallery">
  
<div class="bloc-anime">
    <img src="<?= BASE ?>images/naruto-couverture.jpg" class="img-principale" alt="Naruto">
    <h1 class="titreanime">Naruto</h1>
    
    <div class="miniatures">
        <img src="<?= BASE ?>images/naruto1.jpg" class="miniature" alt="Naruto 1">
        <h3> Naruto </h3>
        <img src="<?= BASE ?>images/naruto2.jpg" class="miniature" alt="Naruto 2">
        <h3> Sakura </h3>
        <img src="<?= BASE ?>images/naruto3.jpg" class="miniature" alt="Naruto 3">
        <h3> Sasuke </h3>
    </div>
</div>

<div class="bloc-anime">
    <img src="<?= BASE ?>images/couverture-one-piece.jpg" class="img-principale" alt="onepiece">
    <h1 class="titreanime">One Piece</h1>

    
    <div class="miniatures">
        <img src="<?= BASE ?>images/onepiece1.jpg" class="miniature" alt="luffy 1">
        <h3> Luffy </h3>
        <img src="<?= BASE ?>images/onepiece2.jpg" class="miniature" alt="zoro 2">
        <h3> Zoro </h3>
        <img src="<?= BASE ?>images/onepiece3.jpg" class="miniature" alt="sanji 3">
        <h3> Sanji </h3>
    </div>
</div>

<div class="bloc-anime">
    <img src="<?= BASE ?>images/snk-couverture.jpeg" class="img-principale" alt="snk">
    <h1 class="titreanime">L'attaque des Titans</h1>

    
    <div class="miniatures">
        <img src="<?= BASE ?>images/snk1.jpg" class="miniature" alt="Naruto 1">
        <h3> Eren </h3>
        <img src="<?= BASE ?>images/snk2.jpg" class="miniature" alt="Naruto 2">
        <h3> Armin </h3>
        <img src="<?= BASE ?>images/snk3.jpg" class="miniature" alt="Naruto 3">
        <h3> Mikasa </h3>
    </div>
</div>
</article>

<?php include '../inc/footer.php'; ?>