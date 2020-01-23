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

          $minRedDva=0;
          $maxRedDva=$red-1;
          $minStupacDva=0;
          $maxStupacDva=$stupac-1;
          $brojUpisujeDva=1;
          $zadnjiBrojDva=$red * $stupac;
          $matricaDruga=[]; 

          // a sad engine
          /* echo 'SmnR='.$minRed.'<br/>';
          echo 'SmxR='.$maxRed.'<br/>';
          echo 'SmnS='.$minStupac.'<br/>';
          echo 'SmxS='.$maxStupac.'<br/>';
          echo 'SBU='.$brojUpisuje.'<br/>';
          echo'SZB='. $zadnjiBroj.'<br/>'; */
          

          while ($brojUpisuje<=$zadnjiBroj) {
            //desno->lijevo
            for ($i=$maxStupac; $i >=$minStupac ; $i--) { 
              $matrica[$maxRed][$i]=$brojUpisuje;
              $brojUpisuje++;
              
            }
            if ($brojUpisuje>$zadnjiBroj) break;
            //dole->gore
            for ($i=$maxRed-1; $i>=$minRed  ; $i--) { 
              $matrica[$i][$minStupac]=$brojUpisuje;
              $brojUpisuje++;
              
            }
            if ($brojUpisuje>$zadnjiBroj) break;
            //lijevo->desno
            for ($i=$minStupac+1; $i <=$maxStupac ; $i++) { 
              $matrica[$minRed][$i]=$brojUpisuje;
              $brojUpisuje++;
              
            }
            if ($brojUpisuje>$zadnjiBroj) break;
            //gore -> dole
            for ($i=$minRed+1; $i <=$maxRed-1 ; $i++) { 
              $matrica[$i][$maxStupac]=$brojUpisuje;
              $brojUpisuje++;
              
            }
            if ($brojUpisuje>$zadnjiBroj) break;
            
            $minStupac++;
            $maxStupac--;
            $minRed++;
            $maxRed--;
          }
          /* echo 'EmnR='.$minRed.'<br/>';
          echo 'EmxR='.$maxRed.'<br/>';
          echo 'EmnS='.$minStupac.'<br/>';
          echo 'EmxS='.$maxStupac.'<br/>';
          echo 'EBU='.$brojUpisuje.'<br/>';
          echo'EZB='. $zadnjiBroj.'<br/>'; */

          //prikaži barem nešto JEBOTE!!!!
          //print_r($matrica);

          // matricaDruga
          

          while ($brojUpisujeDva<=$zadnjiBrojDva) {
            //lijevo->desno
            for ($i=$minStupacDva; $i <=$maxStupacDva ; $i++) { 
              $matricaDruga[$minRedDva][$i]=$brojUpisujeDva;
              $brojUpisujeDva++;
              
            }
            if ($brojUpisujeDva>$zadnjiBrojDva) break;

            //gore -> dole
            for ($i=$minRedDva+1; $i <=$maxRedDva-1 ; $i++) { 
              $matricaDruga[$i][$maxStupacDva]=$brojUpisujeDva;
              $brojUpisujeDva++;
              
            }
            if ($brojUpisujeDva>$zadnjiBrojDva) break;

             //desno->lijevo
             for ($i=$maxStupacDva; $i >=$minStupacDva ; $i--) { 
              $matricaDruga[$maxRedDva][$i]=$brojUpisujeDva;
              $brojUpisujeDva++;
              
            }
            if ($brojUpisujeDva>$zadnjiBrojDva) break;
            //dole->gore
            for ($i=$maxRedDva-1; $i>=$minRedDva+1  ; $i--) { 
              $matricaDruga[$i][$minStupacDva]=$brojUpisujeDva;
              $brojUpisujeDva++;
              
            }
            if ($brojUpisujeDva>$zadnjiBrojDva) break;
            
            
            
            $minStupacDva++;
            $maxStupacDva--;
            $minRedDva++;
            $maxRedDva--;
          }


          echo '<hr>';
          echo '<h2>Zlo</h2>';
          echo '<table>';
            for ($i=0; $i < $red; $i++) { 
              echo '<tr>';
              for ($j=0; $j < $stupac; $j++) { 
                echo '<td>' . $matrica[$i][$j] . '</td>';
              }
              echo '</tr>';
            }
          echo '</table>';
          echo '<hr>';
          echo '<h2>i naopako</h2>';
          echo '<table>';
            for ($i=0; $i < $red; $i++) { 
              echo '<tr>';
              for ($j=0; $j < $stupac; $j++) { 
                echo '<td>' . $matricaDruga[$i][$j] . '</td>';
              }
              echo '</tr>';
            }
          echo '</table>';


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