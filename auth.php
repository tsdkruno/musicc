<?php

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){

}
else{
    header('Location: login.php');
    die();
}

?> 