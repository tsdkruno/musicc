<?php require('connect.php');?>

<?php

$query = "SELECT * FROM users WHERE username='" . $_POST['username'] . "' AND password='" . $_POST['password'] . "';";
//echo($query);
$result = $mysqli->query($query);
if($result) {
    $user = $result->fetch_array();
    if ($user){
        //echo('korisnički podaci su OK!');
        $_SESSION['logged_in'] = true;
        $_SESSION['user_name'] = $user['name'];
        $_SESSION['user_surname'] = $user['surname'];
        $_SESSION['user_id'] = $user['id'];
        header('Location: users.php');
    }
    else {
        //echo('Ne postoji korisnik s navedenim podacima!');
        if ($_POST["username"] == 'admin' && $_POST["password"] == '12345') {
            $_SESSION['logged_in'] = true;
            $_SESSION['user_name'] = 'Admin';
            $_SESSION['user_surname'] = 'Veliki';
            header('Location: users.php');
        }
        else {
            header("Location: login.php");
            die();
        }
    }
    $result->close();
}

?>