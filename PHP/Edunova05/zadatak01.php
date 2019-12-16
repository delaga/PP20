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
            <h1>Zadatak 1</h1>
            <?php
            $inNiz=[
                'Mirza','Mirza','Mirza','Mirza','Mirza','Mirza','Mirza','Mirza','Mirza','Mirza'
            ];

            $asNiz=[
                'ime'=>'Mirza',
                'prezime'=>'Delagić',
                'stas'=>'Debeo',
                'opis'=>'Upadljivo glup',
                'oci'=>'Čorav'
            ];
            echo '<pre>';
                print_r ($inNiz);
            echo '</pre>';
            echo '<br>';
            echo '<pre>';
                print_r ($asNiz);
            echo '</pre>';
            echo '<hr>';

            $smjer=[
                'sifra'=>'1',
                'naziv'=>'PHP programiranje',
                'trajanje'=>130,
                'cijena'=>599.99,
                'grupa'=>[
                    [
                        'sifra'=>1,
                        'naziv'=>'PP20'
                    ],
                    [
                        'sifra'=>1,
                        'naziv'=>'PP21'
                    ]
                ]
                                
            ];
            echo '<pre>';
                print_r ($smjer);
            echo '</pre>';
            echo'<br>';
            echo $smjer['trajanje'];
            echo'<br>';
            echo $smjer['grupa'][1]['naziv'];

            $smjer['grupe'][]=[
                'sifra'=>3,
                'naziv'=>'PP22'
            ];
            echo'<br>';
            echo '<pre>';
                print_r ($smjer);
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
