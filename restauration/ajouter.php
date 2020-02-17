<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=restaurant;charset=utf8', 'root', '');
    echo" connection reussie";
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
$req = $bdd->prepare('INSERT INTO personnel(nom, prenom, mail, addresse ) VALUES(:nom, :prenom, :mail, :addresse )');
$req->execute(array(
    'nom' => $_POST['nom'],
    'prenom' => $_POST['prenom'],
    'mail' => $_POST['mail'],
    'addresse' => $_POST['addresse'],
     
    ));

include('service.php');
?>
