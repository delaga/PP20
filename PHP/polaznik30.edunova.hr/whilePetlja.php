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
            while petlja <hr />
            <?php 
              //while radi s boolean tipom podatka
              $uvjet=true;
              $i=0;
              //u while petlju se i ne mora ući ukoliko je uvjet false
              while($uvjet){
                echo $i . '<br />';
                $uvjet= ++$i < 10;
              }


              $i=0;
              while($i<10){
                if($i===3){
                  $i++;
                  continue;
                }
                if($i===5){
                break;
                }
                echo $i . '<br />';
                $i++;
              }

          

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
