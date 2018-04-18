<?php require('connect.php');?>
<?php require('auth.php');?>
<?php require('header.php');?>

<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

            <form action="albums_create.php" method="post"> 
                Naziv albuma: <br> 
                <input type="text" name="name"><br> 
                <br> 

                Godina izdanja: <br> 
                <input type="text" name="year"><br> 
                <br> 

                <input type="submit" value="Anal sex">
            </form>

            </div>
        </div>
     </div>
</div>

<?php

echo('<a href="albums.php">Popis albuma</a>');

?>

<?php require('footer.php');?>