<?php require('connect.php');?>

<?php $jumbotron = "Pero peric ide u skolu i lijepo mu je tamo"; ?>
<?php require('header.php');?>

<div class="container">
    <div class="row">
        <div class="col-md-12" style="text-align:center;">
            <div id="login-panel" class="p-3">
                <form action = "login_check.php" method = "post">
                    Korisnicko ime: <br> 
                    <input type="text" name="username"><br>
                    <br> 
                    Lozinka:<br> 
                    <input type="password" name="password"><br> 
                    <br> 
                    <input type="submit" value="Prijavi me">
                </form>
            </div>
        </div>
    </div>
</div>

<?php require('footer.php');?>