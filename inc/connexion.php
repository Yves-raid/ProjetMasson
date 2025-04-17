<?php 

define('SERVER','mysql:server=localhost;dbname=projetmasson');
define('LOGIN','root');
define('PASSWORD','');

try{
    $connexion = new PDO(SERVER,LOGIN,PASSWORD);
}catch(Exeption $e){
    $e -> getMessage();
};