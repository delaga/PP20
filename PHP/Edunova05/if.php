<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once 'predlozak/head.php'; ?>
  </head>
  <body>
    <div class="grid-container">
      <?php require_once 'predlozak/izbornik.php' ?>
      <!-- Početak tijela -->
      <div class="grid-x">
        <div class="large-12 small-12 columns">
          <div class="callout" style="min-height: 400px;"> 
          
          <?php 
             
             // if je jednostruko grananje
             // if rad s boolean tipom podatka

             $x=true;

             //obavezni dio
             if($x){
               echo 'istina je';
             }


             //else - opcionalni dio if
             if($x){
               echo 'ponovo istina';
             }else{
               echo 'laž';
             }


             //operatori uspoređivanja
             // < > == === !=

             $x=2;
             $y=3;
             // & je logičko AND
             if($x>5 & $y>0){
               echo '1';
             }

             // && U slučaju ne prolaska prvog uvjeta drugi se ne provjerava
             if($x>5 && $y>0){
              echo '1';
            }

            // || U slučaju prolaska prvog uvjeta drugi se ne provjerava
            if($x>0 || $y>0){
              echo '2';
            }


            // razlika između == ===

            // == provjera po vrijednosti
            $t=2;
            if($t=='2'){
              echo 'jednak je po vrijednosti';
            }

            // === provjera po tipu i vrijednosti
            $t='2';
            if($t==='2'){
              echo 'Jednak je i po tipu i po vrijednosti';
            }

            $r=2;
            if($r!='3'){
              echo 'različito po vrijednosti';
            }

            if($r!=='3'){
              echo 'različito i po tipu i po vrijednosti';
            }

            if(isset($_GET['ime'])){
              echo $_GET['ime'];
            }else{
              echo "";
            }

            // bolje je ovo realizirati s switch naredbom
            if($x>2){
              //
            }else if($x<0){
              //
            }

            // inline if - tercijarnog operatora ? :

              echo isset($_GET['ime']) ? $_GET['ime'] : "";



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
