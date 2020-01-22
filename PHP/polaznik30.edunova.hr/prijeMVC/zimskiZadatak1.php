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
            <h3>Zadatak 01.</h3>
            <hr>
            <p>Kreirati program koji unosi 24 broja, ispisuje njihov zbroj, najmanji i  najveći uneseni broj.</p>
            <br>
            <?php 
              $niz=[];
              for ($i=0; $i < 24; $i++) { 
                $niz[$i]=rand(1,1000);
                
                echo $niz[$i].'+';
                $s+=$niz[$i];
              }
              echo ' = <h4>'.$s.'</h4>';
              echo '<br>';
              $min=min($niz);
              $max=max($niz);
              echo '<h4>Najmanji je '.$min.'</h4>';
              echo '<h4>Najveći je '.$max.'</h4>';
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