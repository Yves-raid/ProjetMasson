<?php
if(isset($_POST['id']) && !empty($_POST['id'])){

    include '../inc/connexion.php';
    $id = htmlspecialchars($_POST['id']);
    $delete = "DELETE FROM contacts WHERE id=$id";
    if($connexion -> query($delete)){
        header('location:contact.php');
    }
}else{
    header('location:contact.php');
};