<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'simulateur_db';

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    if(!$conn){
        die('Erreur : ' .mysqli_connect_error());
    }
    echo 'Connexion réussie';
?>