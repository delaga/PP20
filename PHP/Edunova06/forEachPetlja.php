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
            <h3>FOR EACH petlja</h3>
            <br>
            <?php

                $iniz=[1,2,3,4];

                foreach ($iniz as $value) {
                  echo $value . '<br/>';
                }
                echo '<hr>';

                $aniz=[
                    'ime'=>'Tomisalv',
                    'prezime'=>'Jakopec'
                ];

                foreach ($aniz as $kljuc => $vrijednost){
                    echo $kljuc . ':'.$vrijednost.'<br/>';
                }
                echo '<hr>';

                foreach ($_SERVER as $key => $value) {
                    echo $value . '<br/>';
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
