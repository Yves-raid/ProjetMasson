<?php 
if(isset($_POST['lastname']) && !empty($_POST['lastname']) && isset($_POST['firstname']) && !empty($_POST['firstname']) && ($_POST['email']) && !empty($_POST['email']) && ($_POST['phone']) && !empty($_POST['phone'])):

    $prenom = htmlspecialchars($_POST['firstname']);
    $nom = htmlspecialchars($_POST['lastname']);
    $email = htmlspecialchars($_POST['email']);
    $telephone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    $sql = "INSERT INTO contacts (nom, prenom, email, telephone, message) VALUES ('$nom', '$prenom', '$email', '$telephone', '$message')";

    include '../inc/connexion.php';
    if($connexion -> query($sql)){
        header('location:liste.php');
    };
else:
    header('location:contact.php');
endif;