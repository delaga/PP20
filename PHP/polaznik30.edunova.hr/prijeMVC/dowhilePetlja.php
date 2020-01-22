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
            do while petlja<hr />
            <?php 

            while(false){
              echo 'Edunova';
            }


              // osigurava barem jedno izvođenje koda u petlji
              do{
                echo 'Edunova<br />';
              }while(false);


              //prekid petlje u petlji

              $i=0;
              while(true){
                while(true){
                  $i++;
                  if($i===10){
                    break 2;
                  }
                  echo $i . '<br />';
                }
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
