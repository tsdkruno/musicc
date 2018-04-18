<?php require('connect.php');?>
<?php require('auth.php');?>

<?php

$stmt = $mysqli->prepare("UPDATE users SET
            name=?, surname=?, username=?, password=?, credit_card=? 
            WHERE id=?");
$stmt->bind_param("sssssi", 
                  $_POST['name'],
                  $_POST['surname'],
                  $_POST['username'],
                  $_POST['password'],
                  $_POST['credit_card'],
                  $_POST['id']
                );
$stmt->execute();

header('Location: users.php');

?>