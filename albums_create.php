<?php require('connect.php');?>
<?php require('auth.php');?>

<?php

$stmt = $mysqli->prepare("INSERT INTO albums
                          (user_id, name, year) 
                          VALUES (?, ?, ?)");
$stmt->bind_param("sss", 
                  $_SESSION['user_id'],
                  $_POST['name'],
                  $_POST['year']);
$stmt->execute();

header('Location: albums.php');

?>