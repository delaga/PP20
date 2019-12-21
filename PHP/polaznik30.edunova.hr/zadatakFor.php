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
            For petlja<hr />
            Zbrojite i ispišite zbroj prvih 100 brojeva<hr />
            <?php 

            $s=0;
            for($i=0;$i<100;$i++){
              $s+=$i+1; //  $b = $i+1; $s=$s+$b;
            }
            echo $s . '<br />';















              

              $s=0; for($i=1;$i<=100;$i++) $s+=$i;
              echo $s . '<br />';
              for($i=1, $s=0;$i<=100; $s+=$i, $i++);
              echo $s . '<br />';
              $i=1; $s=0; for( ; $i<=100; $i++){ $s+=$i; }
              echo $s . '<br />';
              $s=0; for($i=1; ; $i++){ if($i<=100) $s+=$i; else break;}
              echo $s . '<br />';
              $s=0; for($i=1;$i<=100;){ $s+=$i; $i++;}
              echo $s . '<br />';
              $s=0; for($i=1; ; ){ if($i<=100) {$s+=$i; $i++;} else break;}
              echo $s . '<br />';
              $i=1; $s=0; for( ; $i<=100 ; ){ $s+=$i; $i++;}
              echo $s . '<br />';
              $i=1; $s=0; for( ; ; $i++){if($i<=100) $s+=$i; else break;}
              echo $s . '<br />';
              $i=1; $s=0; for( ; ; ){if($i<=100) {$s+=$i; $i++;} else break;}
              echo $s . '<br />';


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
