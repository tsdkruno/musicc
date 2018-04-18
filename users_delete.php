<?php require('connect.php');?>
<?php require('auth.php');?>

<?php

$query = "DELETE FROM users WHERE id=" . $_GET['id'];

$mysqli->query($query);
header('Location: users.php');

?>