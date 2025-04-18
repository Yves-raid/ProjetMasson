<?php include '../inc/header.php'; ?>
    <main>
        <h2>Vérification de contact</h2>
        <table border=1>
            <caption></caption>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                <?php include '../inc/connexion.php';
                $sql = "SELECT*FROM contacts";
                $infos = $connexion -> query($sql);
                foreach($infos as $i):
                ?>
                <tr>
                    <td><?=$i['prenom']?></td>
                    <td><?=$i['nom']?></td>
                    <td><?=$i['email']?></td>
                    <td><?=$i['telephone']?></td>
                    <td><?=$i['message']?></td>
                    <td>
                        <form action="update.php" method="post">
                            <input type="hidden" name="id" value="<?=$i['id']?>">
                            <input type="image" src="../images/update.svg" alt="SEO et aveugle" classe="svg" width=15px>
                        </form>
                    </td>
                    <td>
                        <form action="delete.php" method="post">
                            <input type="hidden" name="id" value="<?=$i['id']?>">
                            <input type="image" src="../images/close.svg" alt="SEO et aveugle" classe="svg" width=15px>
                        </form>
                    </td>

                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
<?php include '../inc/footer.php';