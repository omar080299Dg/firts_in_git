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
<div class="container">
      
      <form action="" method="post">
           <div class="form-group">
               <label for="pr">identifiant</label>
               <input type="number" name="id" id="pr" class="form-control" style="width: 500px">
               <button type="submit" class="btn btn-primary " >rechercher</button>
           </div>
           
           
       </form>
        
      </div>
<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=restaurant;charset=utf8', 'root', '');
    
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}?>
<div class="container">
< <table class="table table table-dark">>
    <thead>
    <tr>
         <th style="font-size: 20px">identifiant</th>
         <th style="font-size: 20px">prenom</th>
         <th style="font-size: 20px">nom</th>
         <th style="font-size: 20px">addresse</th>
         <th style="font-size: 20px">mail</th>
     </tr>
    </thead>
    <tbody>
    <?php
    
$rep=$bdd->prepare('SELECT * FROM personnel WHERE id_personnel= :id_personnel');
$rep->execute(array('id_personnel' => $_POST['id']));
while ($donnees = $rep->fetch()) {
    ?>
  
     <tr>
         <td><?php echo $donnees['id_personnel'];?></td>
         <td><?php echo $donnees['prenom'];?></td>
          <td><?php echo $donnees['nom'];?></td>
          <td><?php echo $donnees['addresse'];?></td>
          <td><?php echo $donnees['mail'];?></td>
     </tr>
<?php }
 
 ?>
  
  </div>
  
</body>
</html>