service-----------------
    <?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=restaurant;charset=utf8', 'root', '');
    
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
$req = $bdd->prepare('UPDATE personnel SET id_personnel = :id_personnel, nom = :nom , prenom=:prenom, mail=:mail,addresse=:addresse');
$req->execute(array(
    'id_personnel' => $id_personnel,
    'nom' => $nom,
    'prenom' => $prenom,
    'mail' => $mail,
    'addresse' => $addresse
    ))?>
< <table class="table table table-dark">>
    <thead>
    <tr>
         <th>identifiant</th>
         <th>prenom</th>
         <th>nom</th>
         <th>addresse</th>
         <th>mail</th>
     </tr>
    </thead>
    <tbody>
    
     <?php





$reponse=$bdd->query('SELECT * FROM personnel  ');
while ($donnees = $reponse->fetch()) {
    ?>
 
 
 

     <tr>
         <td><?php echo $donnees['id_personnel'];?></td>
         <td><?php echo $donnees['prenom'];?></td>
          <td><?php echo $donnees['nom'];?></td>
          <td><?php echo $donnees['addresse'];?></td>
          <td><?php echo $donnees['mail'];?></td>
         <?php $sup= $donnees['id_personnel'];?>
          <td><a class="btn btn-danger" name="sup" href='supprimer.php?sup=$sup'>supprimer</a></td>
     </tr>

<?php }?>




------------------supprimer
if (isset($_GET['sup'])) {
     $sup=$_GET['sup'];
     
     $req="delete from personnel where id_personnel=$sup";
     $host="localhost";
     $user="root";
     $pass="";
     $base="restaurant";
     $bdd=mysqli_connect($host,$user,$pass,$base)
     or die("erreur connection".mysqli_connect_errno($bdd));
     if (mysqli_query($bdd,$req)) {
      include('service.php');

     }   
     else
     {
         echo "errr";
     }
     }
     else
     {
         echo "suppression nfbgkrzg";
     }




     ---------------------
     <?php
if (isset($_GET["id_personnel"])) {
	
	$id_personnel=$_GET["id_personnel"];

	$req="delete from personnel where id_personnel=$id_personnel";
	$host= "localhost";
	$user= "root";
	$pass= "";
	$base="restaurant";
	$bdd=mysqli_connect($host,$user,$pass,$base)
	or die("erreur de connection".mysqli_connect_errno($bdd));
	echo "connection reuissie";
	if(mysqli_query($bdd,$req)){
	include('service.php');
}
}
else{
	echo "Suppression non effectue";

}
?>  