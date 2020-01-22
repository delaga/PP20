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
            Ugrađeni nizovi<hr />
            <form action="" method="post" enctype="multipart/form-data">
              <input type="text" name="ime" id="imerrr">
              <input type="file" name="datoteka" id="dat">
              <input type="submit" value="Postavi" >
            </form>
            
            <?php 
              // Oni su nam uvijek dostupni


              echo '<pre>';
              print_r($_GET);
              echo '</pre>';

              echo '<pre>';
              print_r($_POST);
              echo '</pre>';


              echo '<pre>';
              print_r($_REQUEST);
              echo '</pre>';

              echo '<pre>';
              print_r($_SERVER);
              echo '</pre>';

              echo '<pre>';
              print_r($_COOKIE);
              echo '</pre>';


              echo '<pre>';
              print_r($_FILES);
              echo '</pre>';

              $_SESSION['host']=$_SERVER['REMOTE_ADDR'];
            
              echo '<pre>';
              print_r($_SESSION);
              echo '</pre>';

              $t=2;

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
