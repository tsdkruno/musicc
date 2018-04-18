<?php require('connect.php');?>
<?php require('auth.php');?>

<?php

$stmt = $mysqli->prepare("INSERT INTO users
                          (name, surname, username, password, credit_card) 
                          VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", 
                  $_POST['name'],
                  $_POST['surname'],
                  $_POST['username'],
                  $_POST['password'],
                  $_POST['credit_card']);
$stmt->execute();

header('Location: users.php');

?>