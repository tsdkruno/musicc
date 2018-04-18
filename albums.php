<?php require('connect.php');?>
<?php require('auth.php');?>
<?php require('header.php');?>

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

<?php

$result = $mysqli->query("SELECT * FROM albums WHERE user_id = " . $_SESSION['user_id']);
if($result) {
    echo('<table class="table">');
    echo('<tr><th scope="col">Naziv</th><th scope="col">Godište</th><th></th><th></th></tr>');
    while ($album = $result->fetch_array()){
        echo('<tr>');
        echo('<td>' . $album['name'] . '</td>');
        echo('<td>' . $album['year'] . '</td>');
        echo('<td><a href="albums_edit.php? id=' . $album['id'] . '"><img src="edit.png" width="16" height="16"></a></td>');
        echo('<td><a href="albums_delete.php? id=' . $album['id'] . '"><img src="delete.png" width="16" height="16"></a></td>');
        echo('</tr>');
    }
    echo('</table>');
    $result->close();
}

echo('<a href="albums_new.php">Novi album</a>');

?>


                </div>
            </div>
        </div>
     </div>


<?php require('footer.php');?>