<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once 'predlozak/head.php'; ?>
    <?php //include_once 'predlozak/head1.php'; ?>
    <?php //include 'predlozak/head.php'; ?>
    <style type="text/css">
    table td {
    text-align: right;
    }
</style>
  </head>
  <body>
    <div class="grid-container">
      <?php require_once 'predlozak/izbornik.php' ?>
      <!-- Početak tijela -->
      <div class="grid-x">
        <div class="large-12 small-12 columns">
          <div class="callout" style="min-height: 400px;"> 
            <h3>FOR petlja</h3> 
            <br>
            <?php


            /* for($i=0;$i<10;$i=$i+1){
                echo $i+1 .'. Edunova <br>';
            }
            $poc=12;
            $kraj=27;
            for ($i=$poc;$i<$kraj;$i++){
              echo $i.'<br>';
            }

            for($i=10;$i>0;$i--){
              echo $i.'<br>';
            }

            for($i=0;$i<10;$i+=2){
              echo $i.'<br>';
            }

            for($i=0;$i<10;$i++){
              if($i==3){
                continue;
              }
              if($i==5){
              break;
              }
              echo $i.'<br>';
            } */
            
            echo '<hr>';

            echo '<table>';
            for($i=0;$i<10;$i++){
              echo '<tr>';
              for($j=0;$j<10;$j++){
                echo '<td>' . ($i+1) * ($j+1) . '</td>';
              }
              echo '</tr>';
            }
            echo '</table>';

            echo '<hr>';
            $niz=[
              1,"1",4,true,"Edunova"
            ];
            for($i=0; $i<count($niz);$i++){
              echo $niz[$i].'<br>';
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
