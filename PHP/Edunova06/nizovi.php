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
            Nizovi
            <?php 
                $niz=array();
                $niz=[];

                //var_dump($niz);
                $niz=1;
                //print_r($niz);
                $niz=[1,'Pero',true,3.7,[7]];

                echo '<pre>';
                print_r ($niz);
                echo '</pre>';

                echo $niz[1];
                echo '<br>';

                echo $niz[4][0];
                echo '<br>';
                $niz[1]='Maja';
                echo $niz[1];
                
                $niz=[
                    'ime'=>'Marija',
                    'prezime'=>'Zimska'
                ];
                echo '<pre>';
                print_r ($niz);
                echo '</pre>';

                echo $niz['prezime'];

                $niz=[
                    'Edunova',
                    'grad'=>'Osijek',
                    '3'
                ];
                echo '<pre>';
                print_r ($niz);
                echo '</pre>';

                
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
