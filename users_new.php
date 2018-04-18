<?php require('connect.php');?>

<?php require('auth.php');?>

<?php require('header.php');?>

<form action="users_create.php" method="post"> 
    IME: <br> 
    <input type="text" name="name"><br> 
    <br> 

    PREZIME: <br> 
    <input type="text" name="surname"><br> 
    <br> 

    KOR. IME: <br> 
    <input type="text" name="username"><br> 
    <br> 

    LOZINKA: <br> 
    <input type="text" name="password"><br> 
    <br> 

    KREDITNA KARTICA: <br> 
    <input type="text" name="credit_card"><br> 
    <br> 

    <input type="submit" value="UNESI">
</form> 

<?php

echo('<a href="users.php">Popis korisnika</a>');

?>

<?php require('footer.php');?>