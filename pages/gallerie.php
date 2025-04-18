<?php 
$title = "Galerie";
include '../inc/header.php'; 
?>

<h2>Galerie animés</h2>

<article class="gallery">
  
    <img src="<?= BASE ?>images/couverture-naruto.jpg" class="img-principale" alt="Naruto">
    <div class="miniatures">
        <img src="<?= BASE ?>images/naruto1.jpg" class="miniature" alt="Naruto 1">
        <img src="<?= BASE ?>images/naruto2.jpg" class="miniature" alt="Naruto 2">
        <img src="<?= BASE ?>images/naruto3.jpg" class="miniature" alt="Naruto 3">
    </div>

   
    <img src="<?= BASE ?>images/couverture-one-piece.jpg" class="img-principale" alt="onepiece">
    <div class="miniatures">
        <img src="<?= BASE ?>images/onepiece1.jpg" class="miniature" alt="luffy 1">
        <img src="<?= BASE ?>images/onepiece2.jpg" class="miniature" alt="zoro 2">
        <img src="<?= BASE ?>images/onepiece3.jpg" class="miniature" alt="sanji 3">
    </div>

    <img src="<?= BASE ?>images/snk-couverture.jpeg" class="img-principale" alt="snk">
    <div class="miniatures">
        <img src="<?= BASE ?>images/snk1.jpg" class="miniature" alt="Naruto 1">
        <img src="<?= BASE ?>images/snk2.jpg" class="miniature" alt="Naruto 2">
        <img src="<?= BASE ?>images/snk3.jpg" class="miniature" alt="Naruto 3">
    </div>
</article>

<?php include '../inc/footer.php'; ?>
