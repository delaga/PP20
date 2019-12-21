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
            1. Kreirajte indeksni niz s 10 elemenata
            s vrijednostima svog imena
            <?php 
              $imena=['Tomislav','Tomislav','Tomislav','Tomislav','Tomislav','Tomislav','Tomislav','Tomislav','Tomislav','Tomislav'];

             ?>
             <pre>
             <?php 
               print_r($imena);
              ?>
             </pre>
            <hr />
            2. Kreirajte asocijativni niz s 5 elemenata
            opisujući sebe
            <?php 
              $ja=[
                'ime'=>'Tomislav',
                'prezime'=>'Jakopec',
                'oib'=>'45896585478',
                'visina'=>'179',
                'tezina'=>'79'
              ];
             ?>
             <hr />
             3. Sjetite se edunova baze
             pomoću kombinacije indeksnih i asocijativnih nizova
             opišite jedan smjer koji ima dvije grupe<br />
              <?php
              $s=[ //s je asocijativni niz
                'sifra'=>1,
                'naziv'=>'PHP programiranje',
                'trajanje'=>130,
                'cijena'=>5999.99,
                'grupe'=>[ //grupe je indeksni niz
                  [
                    'sifra'=>1,
                    'naziv'=>'PP20'
                  ],
                  [
                    'sifra'=>2,
                    'naziv'=>'PP21'
                  ]
                ] 
              ];

               //ispišite 130
               echo $s['trajanje'];

               // ispišite PP21
              echo $s['grupe'][1]['naziv'];


              //dodaj novu grupu
              $s['grupe'][]=[
                'sifra'=>3,
                'naziv'=>'PP22'
              ];

              echo '<pre>';
              print_r($s);
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
