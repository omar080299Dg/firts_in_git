<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
    <title>Document</title>
</head>
<body>

<?php 
 $bdd = new PDO('mysql:host=localhost;dbname=restaurant','root','');
// $bdd = new PDO('mysql:host=localhost;dbname=restaurant','root','');
 
 if(!empty($_GET['id'])){
	$id=$_GET['id'];
 	$bdd=new PDO('mysql:host=localhost;dbname=restaurant',"root","");
 	$req=$bdd->prepare("update personnel set id_personnel=:id_personnel,nom=:nom,prenom=:prenom,mail=:mail,addresse=:addresse where id_personnel='$id'" );
 $req->execute(array(
'id_personnel'=>$_POST['id_personnel'],
	'nom'=>$_POST['nom'],
 	'prenom'=>$_POST['prenom'],
 	'mail'=>$_POST['mail'],
 	'addresse'=>$_POST['addresse']));
}





$query=$bdd->query("SELECT * FROM personnel");
 ?>
 
 
 
<body>
 <table class="table table-dark">
 	<tr>
 		<th>identifiant</th>
 		<th>Nom</th>
 		<th>Prénom</th>
 		<th>Email</th>
		 <th>Adresse</th>
		 <th>action</th>
 		 
 	</tr>
 	 	<?php while($ET=$query->fetch()){?>
<tr>
	<td><?php echo($ET['id_personnel'])?></td>
	<td><?php echo($ET['nom'])?></td>
	<td><?php echo($ET['prenom'])?></td>
	<td><?php echo($ET['mail'])?></td>
	<td><?php echo($ET['addresse'])?></td>
 
	<td id="sup"><a  type="button" class="btn btn-danger" href="supprimer.php?id_personnel= <?php echo($ET['id_personnel']) ?>"><span class="gliphy"></span>supprimer</a>
	 <a type="button" class="btn btn-warning" href="modifier.php?id_personnel= <?php echo($ET['id_personnel']) ?>">modifier</a></td>
</tr>

   <?php }?>
 </table>
  
</body>
 
</tbody>
</table>
<a href="accueil.php" type="button" class="btn btn-success " >ajouter</a>
 
<a href="rechercher.php" type="button" class="btn btn-primary "><span class="glyphicon glyphicon-search"></span> rechercher</a>
 
</body>
</html>