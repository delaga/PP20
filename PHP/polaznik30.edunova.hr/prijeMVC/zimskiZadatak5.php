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
        $minRed = 0;
        $maxRed = $red - 1;
        $minStupac = 0;
        $maxStupac = $stupac - 1;
        $brojUpisuje = 1;
        $zadnjiBroj = $red * $stupac;
        $matrica = [];

        $minRed2 = 0;
        $maxRed2 = $red - 1;
        $minStupac2 = 0;
        $maxStupac2 = $stupac - 1;
        $brojUpisuje2 = 1;
        $zadnjiBroj2 = $red * $stupac;
        $matrica2 = [];

        $minRed3 = 0;
        $maxRed3 = $red - 1;
        $minStupac3 = 0;
        $maxStupac3 = $stupac - 1;
        $brojUpisuje3 = 1;
        $zadnjiBroj3 = $red * $stupac;
        $matrica3 = [];

        $minRed4 = 0;
        $maxRed4 = $red - 1;
        $minStupac4 = 0;
        $maxStupac4 = $stupac - 1;
        $brojUpisuje4 = 1;
        $zadnjiBroj4 = $red * $stupac;
        $matrica4 = [];

        // a sad engine
        /* echo 'SmnR='.$minRed.'<br/>';
          echo 'SmxR='.$maxRed.'<br/>';
          echo 'SmnS='.$minStupac.'<br/>';
          echo 'SmxS='.$maxStupac.'<br/>';
          echo 'SBU='.$brojUpisuje.'<br/>';
          echo'SZB='. $zadnjiBroj.'<br/>'; */


        while ($brojUpisuje <= $zadnjiBroj) {
          //desno->lijevo
          for ($i = $maxStupac; $i >= $minStupac; $i--) {
            $matrica[$maxRed][$i] = $brojUpisuje;
            $brojUpisuje++;
          }
          if ($brojUpisuje > $zadnjiBroj) break;
          //dole->gore
          for ($i = $maxRed - 1; $i >= $minRed; $i--) {
            $matrica[$i][$minStupac] = $brojUpisuje;
            $brojUpisuje++;
          }
          if ($brojUpisuje > $zadnjiBroj) break;
          //lijevo->desno
          for ($i = $minStupac + 1; $i <= $maxStupac; $i++) {
            $matrica[$minRed][$i] = $brojUpisuje;
            $brojUpisuje++;
          }
          if ($brojUpisuje > $zadnjiBroj) break;
          //gore -> dole
          for ($i = $minRed + 1; $i <= $maxRed - 1; $i++) {
            $matrica[$i][$maxStupac] = $brojUpisuje;
            $brojUpisuje++;
          }
          if ($brojUpisuje > $zadnjiBroj) break;

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


        while ($brojUpisuje2 <= $zadnjiBroj2) {
          //lijevo->desno
          for ($i = $minStupac2; $i <= $maxStupac2; $i++) {
            $matrica2[$minRed2][$i] = $brojUpisuje2;
            $brojUpisuje2++;
          }
          if ($brojUpisuje2 > $zadnjiBroj2) break;

          //gore -> dole
          for ($i = $minRed2 + 1; $i <= $maxRed2 - 1; $i++) {
            $matrica2[$i][$maxStupac2] = $brojUpisuje2;
            $brojUpisuje2++;
          }
          if ($brojUpisuje2 > $zadnjiBroj2) break;

          //desno->lijevo
          for ($i = $maxStupac2; $i >= $minStupac2; $i--) {
            $matrica2[$maxRed2][$i] = $brojUpisuje2;
            $brojUpisuje2++;
          }
          if ($brojUpisuje2 > $zadnjiBroj2) break;
          //dole->gore
          for ($i = $maxRed2 - 1; $i >= $minRed2 + 1; $i--) {
            $matrica2[$i][$minStupac2] = $brojUpisuje2;
            $brojUpisuje2++;
          }
          if ($brojUpisuje2 > $zadnjiBroj2) break;



          $minStupac2++;
          $maxStupac2--;
          $minRed2++;
          $maxRed2--;
        }

        //matrica Treca

        while ($brojUpisuje3<=$zadnjiBroj3) {
          //gore -> dole
          for ($i = $minRed3; $i <= $maxRed3; $i++) {
            $matrica3[$i][$minStupac3] = $brojUpisuje3;
            $brojUpisuje3++;
          }
          if ($brojUpisuje3 > $zadnjiBroj3) break;

          //lijevo->desno
          for ($i = $minStupac3+1; $i <= $maxStupac3; $i++) {
            $matrica3[$maxRed3][$i] = $brojUpisuje3;
            $brojUpisuje3++;
          }
          if ($brojUpisuje3 > $zadnjiBroj3) break;

          //dole->gore
          for ($i = $maxRed3 - 1; $i >= $minRed3; $i--) {
            $matrica3[$i][$minStupac3] = $brojUpisuje3;
            $brojUpisuje3++;
          }
          if ($brojUpisuje3 > $zadnjiBroj3) break;

          //desno->lijevo
          for ($i = $maxStupac3-1; $i >= $minStupac3; $i--) {
            $matrica3[$maxRed3][$i] = $brojUpisuje3;
            $brojUpisuje3++;
          }
          if ($brojUpisuje3 > $zadnjiBroj3) break;

          $minStupac3++;
          $maxStupac3--;
          $minRed3++;
          $maxRed3--;
        }

        //matrica Cetvrta

        echo '<hr>';
        $od = $red - 1;
        $do = $stupac - 1;
        echo '<h3>Od ' . $od  . ',' . $do  . ' pa Clockwise</h3>';
        echo '<table>';
        for ($i = 0; $i < $red; $i++) {
          echo '<tr>';
          for ($j = 0; $j < $stupac; $j++) {
            echo '<td>' . $matrica[$i][$j] . '</td>';
          }
          echo '</tr>';
        }
        echo '</table>';
        echo '<hr>';
        echo '<h3>Od 0,0 pa Clockwise</h3>';
        echo '<table>';
        for ($i = 0; $i < $red; $i++) {
          echo '<tr>';
          for ($j = 0; $j < $stupac; $j++) {
            echo '<td>' . $matrica2[$i][$j] . '</td>';
          }
          echo '</tr>';
        }
        echo '</table>';
        echo '<hr>';
        echo '<h3>Od 0,0 pa !Clockwise</h3>';
        echo '<table>';
        for ($i = 0; $i < $red; $i++) {
          echo '<tr>';
          for ($j = 0; $j < $stupac; $j++) {
            echo '<td>' . $matrica3[$i][$j] . '</td>';
          }
          echo '</tr>';
        }
        echo '</table>';
        echo '<hr>';
        echo '<h3>Od ' . $od  . ',' . $do  . ' pa !Clockwise</h3>';
        echo '<table>';
        for ($i = 0; $i < $red; $i++) {
          echo '<tr>';
          for ($j = 0; $j < $stupac; $j++) {
            echo '<td>' . $matrica4[$i][$j] . '</td>';
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