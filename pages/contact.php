<?php include '../inc/header.php';
?>
    <main>
        <fieldset>
            <form action="traitement.php" method="post">
                <input type="text" name="firstname" id="firstname" placeholder="Prénom" maxlength=200>
                <input type="text" name="lastname" id="lastname" placeholder="Nom" maxlength=200>
                <input type="email" name="email" id="email" placeholder="Email" maxlength=200>
                <input type="tel" name="phone" id="phone" maxlength=10 placeholder="Numéro de téléphone">
                <textarea name="message" id="message" placeholder="Message" maxlength=1000></textarea>
                <input type="submit" value="Valider mon contact">
            </form>
        </fieldset>
        
    </main>
<?php include '../inc/footer.php';