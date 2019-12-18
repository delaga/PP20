<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once 'predlozak/head.php'; ?>
    <?php //include_once 'predlozak/head1.php'; ?>
    <?php //include 'predlozak/head.php'; ?>
  </head>
  <body>
    <div class="grid-container">
      <?php require_once 'predlozak/izbornik.php' ?>
      <!-- Početak tijela -->
      <div class="grid-x">
        <div class="large-12 small-12 columns">
          <div class="callout" style="min-height: 400px;"> 
            <h2>Ugrađeni nizovi</h2>
            <hr>
            <form action="" method="post" enctype="multipart/form-data">
                <input type="text" name='ime' id='ime'>
                <input type="file" name='datoteka' id='dat'>
                <input type="submit" value='Postavi'>
            </form>
            <?php
                echo '<pre>';
                print_r($_GET);
                echo '</pre>';
                // http://localhost/Edunova05/ugradeniNizovi.php?ime=Pero&t=2&j=0
                echo '<br>';
                echo '<pre>';
                print_r($_POST);
                echo '</pre>';
                echo '<br>';
                echo '<pre>';
                print_r($_REQUEST);
                echo '</pre>';
                echo '<br>';
                echo '<pre>';
                print_r($_SERVER);
                echo '</pre>';
                echo '<br>';
                echo '<pre>';
                print_r($_COOKIE);
                echo '</pre>';
                echo '<br>';
                echo '<pre>';
                print_r($_FILES);
                echo '</pre>';

                echo '<br>';
                echo '<pre>';
                print_r($GLOBALS);
                echo '</pre>';
                
                
                
            ?>

          </div>
        </div>
      </div>
      <!-- Kraj tijela -->
      <?php require_once 'predlozak/podnozje.php' ?>
    </div>
    <?php require_once 'predlozak/skripte.php' ?>
  </body>
</html>
