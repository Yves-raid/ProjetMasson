<?php 
if(isset($_POST['id']) && !empty($_POST['id'])){
    include '../inc/connexion.php';
    $id = htmlspecialchars($_POST['id']);
    $req = $connexion -> query("SELECT*FROM contacts WHERE id=$id");
    foreach ($req as $r):
        ?>
        <form action="maj.php" method="post">
            <fieldset>
                <input type="text" name="firstname" maxlength=200 value="<?=$r['prenom']?>">
                <input type="text" name="lastname" maxlength=200 value="<?=$r['nom']?>"> 
                <input type="email" name="email" maxlength=200 value="<?=$r['email']?>">
                <input type="tel" name="phone" maxlength=10 value="<?=$r['telephone']?>">
                <textarea name="message" maxlength=1000></textarea value="<?=$r['message']?>">
                <input type="hidden" name="id" value="<?=$r['id']?>">
                <input type="submit" value="Valider mon contact">

            </fieldset>
            
        </form>
    <?php endforeach;
};