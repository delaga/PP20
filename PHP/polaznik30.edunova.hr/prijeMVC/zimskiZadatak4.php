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
            <h3>Zadatak 04.</h3>
            <hr>
            <p>Kreirati program koji unosi dvije matrice 4x4 te ispisuje njihov zbroj</p>
            <?php
              $nizPrvi=[
                [1,2,3,4],
                [5,6,7,8],
                [9,10,11,12],
                [13,14,15,16]
              ];
              $nizDrugi=[
                [17,18,19,20],
                [21,22,23,14],
                [25,26,27,28],
                [29,30,31,32]
              ];
              echo '<h4>Prvi niz</h4>';
              echo '<table>';
              for ($i=0; $i < 4; $i++) { 
                echo '<tr>';
                for($j=0;$j<4;$j++){
                    echo '<td>'.$nizPrvi[$i][$j].'</td>';
                    $sum1+=$nizPrvi[$i][$j];
                }
                echo '</tr>';
              }
              echo '</table>';

              echo '<h4>Drugi niz</h4>';
              echo '<table>';
              for ($i=0; $i < 4; $i++) { 
                echo '<tr>';
                for($j=0;$j<4;$j++){
                    echo '<td>'.$nizDrugi[$i][$j].'</td>';
                    $sum2+=$nizDrugi[$i][$j];
                }
                echo '</tr>';
              }
              echo '</table>';
              $gotovo=$sum1+$sum2;
              echo '<h4>Nihov zbroj je '.$gotovo.'</h4>';
              
              
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