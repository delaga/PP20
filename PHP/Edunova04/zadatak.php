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
                $a= isset($_GET['a']) ? $_GET['a'] : 0;
                $b= isset($_GET['b']) ? $_GET['b'] : 0;

                $a =gettype($a)==='integer' ? $a : 0;
                $b =gettype($b)==='integer' ? $b : 0;
                echo $a+$b;
            ?>
            <hr>
            2 Zadatak
            <?php
              $ocjena= isset($_GET['ocjena']) ? $_GET['ocjena'] : "0";

              switch ($ocjena) {
                case '1':
                  echo 'nedovoljan';
                  break;
                case '2':
                    echo 'dovoljan';
                    break;
                case '3':
                    echo 'dobar';
                    break;
                case '4':
                  echo 'vrlo dobar';  
                    break;  
                case '5':
                   echo 'odlican';   
                  break;               
                
                default:
                  echo 'nema ocjene';
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
