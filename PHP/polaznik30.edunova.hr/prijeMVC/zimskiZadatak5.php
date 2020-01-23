<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
  <?php include_once 'predlozak/head.php'; ?>
  <?php //include_once 'predlozak/head1.php'; 
  ?>
  <?php //include 'predlozak/head.php'; 
  ?>
</head>

<body>
  <div class="grid-container">
    <?php require_once 'predlozak/izbornik.php' ?>
    <!-- Početak tijela -->
    <div class="grid-x">
      <div class="large-12 small-12 columns">
        
          <h3>Zadatak 05.</h3>
          <hr>
          <p>Kreirati program koji ispisuje cikličnu matricu (predložak u prilogu)</p>
          <br>

          <form action="" method="post">
            <div class="grid-container">
              <div class="grid-x grid-padding-x">
                <div class="medium-6 cell">
                  <h4>Unesi broj stupaca</h4>
                  <input type="number" name='stupci' id='stupci'>
                </div>
                <div class="medium-6 cell">
                  <h4>Unesi broj redova</h4>
                  <input type="number" name='redovi' id='redovi'>
                </div>
                <div class="large-12 cell">
                  <input type="submit" value="KRENI" class='button expanded'>
                </div>
              </div>
            </div>
          </form>
          <?php
          error_reporting(E_ERROR | E_WARNING | E_PARSE);
          //dohvati
          $stupac = $_POST['stupci'];
          $red = $_POST['redovi'];
          //init 
          //echo $stupac . ' ' . $red;
          
          // varijabilamo
          $minRed=0;
          $maxRed=$red-1;
          $minStupac=0;
          $maxStupac=$stupac-1;
          $brojUpisuje=1;
          $zadnjiBroj=$red * $stupac;
          $matrica=[];

          // a sad engine
          echo $minRed;
          echo $maxRed;
          echo $minStupac;
          echo $maxStupac;
          echo $brojUpisuje;
          echo $zadnjiBroj;
          echo $matrica;

          while ($zadnjiBroj>=$brojUpisuje) {
            //desno->lijevo
            for ($i=$maxStupac; $i >=$minStupac ; $i--) { 
              $matrica[$maxStupac][$i]=$brojUpisuje;
              $brojUpisuje++;
            }
            //dole->gore
            for ($i=$maxRed-1; $i>=$minRed  ; $i--) { 
              $matrica[$i][$minStupac]=$brojUpisuje;
              $brojUpisuje++;
            }
            //lijevo->desno
            for ($i=$minStupac+1; $i <=$maxStupac ; $i++) { 
              $matrica[$minRed][$i]=$brojUpisuje;
              $brojUpisuje++;
            }
            //gore -> dole
            for ($i=$minRed+1; $i <=$maxRed-1 ; $i++) { 
              $matrica[$i][$maxStupac]=$brojUpisuje;
              $brojUpisuje++;
            }
            $minStupac++;
            $maxStupac--;
            $minRed++;
            $maxRed--;
          }


          //prikaži barem nešto JEBOTE!!!!
          //print_r($matrica);

          echo '<hr>';

          echo '<table>';
            for ($i=0; $i < $red; $i++) { 
              echo '<tr>';
              for ($j=0; $j < $stupac; $j++) { 
                echo '<td>' . $matrica[$i][$j] . '</td>';
              }
              echo '</tr>';
            }
          echo '</table>';



          ?>
          <table class="tab">
          <?php 
                  for($i=0;$i<$rows;)
                  {
                    echo '<tr>';
                      for ($j=0; $j < $stupac;) 
                      { 
                        echo '<td>'. $matrica[$i][$j] .'</td>';
                        $j++;
                      }
                      echo '</tr>';
                      $i++;
                  } 
          ?>
          </table>

        </div>
      </div>
    </div>
    <!-- Kraj tijela -->
    <?php require_once 'predlozak/podnozje.php' ?>
  </div>
  <?php require_once 'predlozak/skripte.php' ?>
</body>

</html>