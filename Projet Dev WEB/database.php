<?php
    
try
{
    $bdh = new PDO('mysql:host=localhost;dbname=mathieuraynaud', 'root', 'root');
}
catch (Execption $e)
{
    die('Erreur : '.$e->getMessage());
}

    $age = $bdh->prepare("SELECT age FROM moi");
    $age->execute();

    $ville = $bdh->prepare("SELECT ville FROM moi");
    $ville->execute();

    $nom = $bdh->prepare("SELECT nom FROM moi");
    $nom->execute();

    $prenom = $bdh->prepare("SELECT prenom FROM moi");
    $prenom->execute();

    $email = $bdh->prepare("SELECT email FROM moi");
    $email->execute();

    $tel = $bdh->prepare("SELECT tel FROM moi");
    $tel->execute();
?>