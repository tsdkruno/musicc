<!DOCTYPE html>
<html>
    <head> 
        <title>Naša aplikacija</title> 
        <link rel="stylesheet" type="text/css" href="bootstrap.min.css"> 
        <link rel="stylesheet" type="text/css" href="style.css"> 
    </head> 

    <body>
    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">About</h4>
              <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contact</h4>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Follow on Twitter</a></li>
                <li><a href="#" class="text-white">Like on Facebook</a></li>
                <li><a href="#" class="text-white">Email me</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <img src="music.png" class="mr-2">
            <strong>musicc</strong>
          </a>
          <span class="navbar-toggler">
            <?php 
            if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
              echo($_SESSION['user_name']);
              echo('<a href="logout.php">Odjava</a>');  
            } else {
              echo('Niste prijavljeni!');
            }
            ?>
          </span>
        </div>
      </div>
    </header>

    <main role="main">


      <?php 
        if (!isset($jumbotron)) {
          echo('<div class="mt-2"></div>');
        }
        else {
          ?>
          <section class="jumbotron text-center">
          <div class="container">
            <p class="lead text-muted"><?php echo($jumbotron); ?></p>
          </div>
          </section>
          <?php 
        }
      ?>

