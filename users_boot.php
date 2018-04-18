<?php require('connect.php');?>
<?php require('auth.php');?>
<?php require('header_boot.php');?>

<?php

$result = $mysqli->query("SELECT * FROM users;");
if($result) {
    echo('<table>');
    echo('<tr><th>Ime</th><th>Prezime</th><th>Kor. ime</th><th>Lozinka</th></tr>');
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

<?php require('footer.php');?>