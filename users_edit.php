<?php require('connect.php');?>
<?php require('auth.php');?>
<?php require('header.php');?>

<?php

$query = "SELECT * FROM users WHERE id=" . $_GET["id"];
$result = $mysqli->query($query);
$user = $result->fetch_array();

?>

<form action="users_update.php" method="post"> 
    <input type="hidden" name="id" value="<?php echo($user["id"]); ?>">
    IME: <br> 
    <input type="text" name="name" value="<?php echo($user["name"]); ?>"><br> 
    <br> 

    PREZIME: <br> 
    <input type="text" name="surname" value="<?php echo($user["surname"]); ?>"><br> 
    <br> 

    KOR. IME: <br> 
    <input type="text" name="username" value="<?php echo($user["username"]); ?>"><br> 
    <br> 

    LOZINKA: <br> 
    <input type="text" name="password" value="<?php echo($user["password"]); ?>"><br> 
    <br> 

    KREDITNA KARTICA: <br> 
    <input type="text" name="credit_card" value="<?php echo($user["credit_card"]); ?>"><br> 
    <br> 

    <input type="submit" value="UNESI">
</form> 

<?php

echo('<a href="users.php">Popis korisnika</a>');

?>

<?php require('footer.php');?>