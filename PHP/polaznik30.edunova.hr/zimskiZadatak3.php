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
            <h3>Zadatak 03.</h3>
            <hr>
            <p>Kreirati program koji za dva unesena broja ispisuje sve prim brojeve između njih.</p>
            <br>

            <form action="" method="post">
            <div class="grid-container">
              <div class="grid-x grid-padding-x">
                <div class="medium-6 cell">
                    <h4>Unesi prvi broj</h4>
                    <input type="number" name='prviBroj' id='prviBroj'>
                </div>
                <div class="medium-6 cell">
                  <h4>Unesi drugi broj</h4>
                  <input type="number" name='drugiBroj' id='drugiBroj'>
                </div>
                <div class="large-12 cell">
                  <input type="submit" value="SUBMIT" class='button expanded'>
                </div>
            </div>
            </div>
            </form>
            
            <?php
              //dohvati
              $a=$_POST['prviBroj'];
              $b=$_POST['drugiBroj'];
              //oderedi manjeg i veceg
              $manji=$a>$b ? $b : $a;
              $veci=$a<$b ? $b : $a;
              //a sada ono bitno....
              echo '<h4>Manji je '.$manji.'</h4>';
              echo '<h4>Veći je '.$veci.'</h4>';
              echo '<h4>Primarni brojevi između su ...</h4>';
              for($i=$manji;$i<$veci;$i++){
                for($j=2;$j<$veci;$j++){
                  if($i%$j==0){
                  break;
                  }
                }
                if($i==$j){
                  echo $i.' • ';
                  $s+=$i;
                }
               }
              echo '<br/>';
              echo '<h4>Njihova suma je '.$s.'</h4>';
              

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