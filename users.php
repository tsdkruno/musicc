<?php require('connect.php');?>
<?php require('auth.php');?>
<?php require('header.php');?>

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

<?php

$result = $mysqli->query("SELECT * FROM users;");
if($result) {
    echo('<table class="table">');
    echo('<tr><th scope="col">Ime</th><th scope="col">Prezime</th><th scope="col">Kor. ime</th><th scope="col">Lozinka</th><th></th><th></th></tr>');
    while ($user = $result->fetch_array()){
        //echo($user['name'] . '<br>');
        echo('<tr>');
        echo('<td>' . $user['name'] . '</td>');
        echo('<td>' . $user['surname'] . '</td>');
        echo('<td>' . $user['username'] . '</td>');
        echo('<td>' . $user['password'] . '</td>');
        echo('<td><a href="users_edit.php? id=' . $user['id'] . '"><img src="edit.png" width="16" height="16"></a></td>');
        echo('<td><a href="users_delete.php? id=' . $user['id'] . '"><img src="delete.png" width="16" height="16"></a></td>');
        echo('</tr>');
    }
    echo('</table>');
    $result->close();
}

echo('<a href="users_new.php">Novi korisnik</a>');

?>


                </div>
            </div>
        </div>
     </div>


<?php require('footer.php');?>