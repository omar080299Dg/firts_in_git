<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="loginbox">
        <img src="téléchargement.PNG" alt="" class="omar"> 
         
            <h1>login here</h1>
            <div class="form-group">
                <form action="" method="POST">
                    <p>Username</p>
                    <input type="text" name="username" id="" placeholder="enter your name">
                    <p>Password</p>
                    <input type="password" name="password" id="" placeholder="enter your password">
                    <input type="submit"  name="log" value="Login">
                    <a href="#" >lost your password</a><br>
                    <a href="#" >don't have an acount </a>
             
                 </form>
    
            </div>
    </div>
    <?php
    if ($_POST) {
        if ($_POST['username']=="admin" AND $_POST['password']=="admin") {
            header("Location: service.php");
         }
    }
    ?>
</body>
</html>