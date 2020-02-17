
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
        <link rel="stylesheet" type="text/css" href="style.css">
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
	</head>
	<body>
        <marquee behavior="" direction="">
            BIENVENUE DANS LA PAGE DE MODIFICATION
        </marquee>
<?php
if(!empty($_GET['id_personnel'])){
	$id_personnel=$_GET['id_personnel'];
	$host= "localhost";
	$user= "root";
	$pass= "";
	$base="restaurant";
	$bdd=mysqli_connect($host,$user,$pass,$base)
	or die("erreur de connection".mysqli_connect_errno($bdd));
	$result="select *from personnel where id_personnel=$id_personnel";
	if($resultat=mysqli_query($bdd,$result)){
		echo "<h1>Membre</h1>\n";
		$res=mysqli_fetch_array($resultat);
		echo "<form action='service.php?id=".$_GET['id_personnel']."' method='POST'>";
		echo "<table  class='table table-dark'>";

		echo"<tr><td><strong>Identifiant</strong></td>\n";
		echo "<td><input type=number name='id_personnel' value='".$res['id_personnel']."'/></td></tr>\n";
		echo "<tr><td><strong>Nom</strong></td>\n";
		echo "<td><input type='texte' name='nom' value='".$res['nom']."'/></td></tr>\n";
		echo "<tr><td><strong>prenom</strong></td>\n";
		echo "<td><input type='texte' name='prenom' value='".$res['prenom']."'/></td></tr>\n";
		echo "<tr><td><strong>password</strong></td>\n";
		echo "<td><input type='texte' name='mail' value='".$res['mail']."'/></td></tr>\n";
		echo "<tr><td><strong>Domaine</strong></td>\n";
		echo "<td><input type='texte' name='addresse' value='".$res['addresse']."'/></td></tr>\n";
		echo "<tr><td><input type='hidden' name='action' value='".$_GET['id_personnel']."'</td></tr>\n";
		echo "</table>";
		echo "</br>";
		echo " <input type='submit' class='btn btn-success' name='modifier' value='modifier'/>";
		echo "</form>";
	}

}			
?>																																																								q
 
	

	</body>
	</html>