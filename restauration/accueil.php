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
      
   <form action="ajouter.php" method="post">
        <div class="form-group">
            <label for="pr">prenom</label>
            <input type="text" name="prenom" id="pr" class="form-control">
        </div>
        <div class="form-group">
            <label for="nom">nom</label>
            <input type="text" name="nom" id="nom"class="form-control">
        </div>
        <div class="form-group">
            <label for="addresse">addresse</label>
            <input type="text" name="addresse" id="addresse" class="form-control">
        </div>
        <div class="form-group">
            <label for="mail">mail</label>
            <input type="text" name="mail" id="mail" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary " onclick="document.location.href='service.php'">valider</button>
    </form>
     
   </div>
  
</body>
</html>