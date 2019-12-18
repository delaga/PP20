<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once 'predlozak/head.php'; ?>
  </head>
  <body>
    <div class="grid-container">
      <?php require_once 'predlozak/izbornik.php' ?>
      <!-- Početak tijela -->
      <div class="grid-x">
        <div class="large-12 small-12 columns">
          <div class="callout" style="min-height: 400px;"> 
          
          1. zadatak
          Program učitava dva broja i ispisuje njihov zbroj
          <hr />
          <?php 
            // echo 'u zadatku sam';

            $x= isset($_GET['x']) ? $_GET['x'] : 0;
            $y= isset($_GET['y']) ? $_GET['y'] : 0;
        
            echo $x + $y;

            //problem kada je $x ili $y ne broj

           ?>
            <hr />
            <hr />
           2. za uneseni broj ocjene 1-5 ispiši njezinu opisnu ocjenu.
           U slučaju da ocjena nije od 1-5 ispiši nije ocjena
           <hr />

          </div>
        </div>
      </div>
      <!-- Kraj tijela -->
      <?php require_once 'predlozak/podnozje.php' ?>
    </div>
    <?php require_once 'predlozak/skripte.php' ?>
  </body>
</html>
