<?php
session_start();
?>



<!DOCTYPE html>
<html>
<head>
<title>Početna </title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#7f8c8d">

    <div id="main-wrapper">
    <center>
    <h2>Prijavljeni ste</h2>
    <h3>Dobro došli </h3>
    
    <img src="images/login.jpg" class="slika"/>
    </center>


    <form class="myform"action="prijava.php" method="post">
       
        <input name="logout" type="submit" id="log-out" value="odjava"/><br>
        
    </form>
    <?php
    if(isset($_POST['logout']))
    {
        session_destroy();
        header('location: index.php');
    }
    ?>

    </div>

</body>
</html>