<?php
require 'dbconfig/config.php';
?>



<!DOCTYPE html>
<html>
<head>
<title>Prijava </title>
<link rel="stylesheet" href="css/style.css">
<meta charset="ISO-8859-1">

</head>
<body style="background-color:#7f8c8d">

    <div id="main-wrapper">
    <center><h2>Login form</h2>
    <img src="images/login.jpg" class="slika"/>
    </center>


    <form class="myform"action="index.php" method="post">
        <label><b>Korisnicko ime:</b></label>
        <input name="username" type="text" class="inputvalues" placeholder="Unesite svoje korisničko ime" required/><br>
        <label><b>Lozinka:</b></label>
        <input name="password" type="password" class="inputvalues" placeholder="Unesite svoju lozinku" required/><br>
        <input name="login" type="submit" id="login" value="prijava"/><br>
        <input type="button" id="register" value="registracija"/>
    </form>
    <?php
    if(isset($_POST['login']))
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $query="select * from user where username=$username and password=$password";
        $query_run = mysqli_query($con,$query);
        if(mysqli_num_rows($query_run)==0)
        {
            $_SESSION['username']= $username;
            header('location: prijava.php');
        }
        else{
            echo' neuspjelo logiranje';
        }
    }
    ?>

    </div>

</body>
</html>
