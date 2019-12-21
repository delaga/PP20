<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once 'predlozak/head.php'; ?>
    
    
  </head>
  <body>
    <div class="grid-container">
      <?php require_once'predlozak/izbornik.php'; ?>
      <!--Početak tijela-->
      <div ckass="grid-x">
        <div class="large-12 small-12 columns">
          <div class="callout" style="min-height:400px;">
            <?php
                $grad='Osijek';
                switch ($grad) {
                  case 'Zagreb':
                    echo 'Glavni grad';
                    break;
                  case 'Split':
                  case 'Osijek':
                     echo 'Nije Glavni grad';
                    break;
                 
                  default:
                    echo 'jok grad';
                    break;
                }
                

            ?>


          </div>
        </div>
      </div>
      <!--Kraj tijela-->
      <?php require_once'predlozak/podnozje.php';?>
    </div>

    <?php require_once'predlozak/skripte.php';?>
  </body>
</html>
