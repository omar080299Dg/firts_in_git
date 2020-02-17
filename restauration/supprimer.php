
<?php 
try{
$bdd = new PDO('mysql:host=localhost;dbname=restaurant','root','');
}catch(Exception $e){
	die('Erreur :'.$e->getMessage());
}
$id_personnel=$_GET['id_personnel'];
$bdd->exec("DELETE FROM personnel WHERE id_personnel=$id_personnel");
echo "Suppression réussie !!!";
header("location:service.php");
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>supprimer</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
</body>
</html>