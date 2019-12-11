<!doctype html>
<html class='no-js' lang='en' dir='ltr'>
  <head>
    <?php include_once 'predlozak/head.php'; ?>
    
    
  </head>
  <body>
    <div class='grid-container'>
      <?php require_once'predlozak/izbornik.php'; ?>
      <!--Početak tijela-->
      <div ckass='grid-x'>
        <div class='large-12 small-12 columns'>
          <div class='callout' style='min-height:400px;'>
            <?php
                // IF jejednostrukogrananje
                // radi sa boolean tipompodatka
                $x=true;

                if($x){
                  echo 'istina je';
                }
                
                if($x) {echo 'Istinaje';
                } else 
                      {echo 'laž';
                }

                //uspoređivanje
                //<>== === !=

                $x=2;
                $y=3;

                if($x>5 & $y>0) {
                  echo '1';
                }

                // &&
                //u slučaju neprolaskaprvoguvijeta drugi se ne provjerava
                if($x>5 && $y>0) {
                  echo '1';
                }
                // ||
                if($x>0 || $y>0) {
                  echo '2';
                }
                //razlika

                $t='2';

                if($t=='2'){
                  echo'jednak je po vr';
                }
                if($t==='2'){
                  echo ' jednak je po vr I TIPU';
                } 

                $r=2;

                if($r!='3'){
                  echo 'razlpo vrij';
                }

                if($r!=='3') {
                  echo 'zrazpo vri tip';
                }

                if(isset($_GET['ime'])) {
                  echo $_GET['ime'];
                }

                if ($x>2) {
                  # code...
                } elseif($x>1){

                }

                echo isset($_GET['ime']) ? $_GET['ime']: "";

            ?>
            2.Zadatak


          </div>
        </div>
      </div>
      <!--Kraj tijela-->
      <?php require_once'predlozak/podnozje.php';?>
    </div>

    <?php require_once'predlozak/skripte.php';?>
  </body>
</html>
