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
              
              $niz=array(); // stara sintaksa

              $niz=[]; //nova sintaksa koju ćemo koristiti


              //var_dump($niz);
              $niz[]=1;

              //print_r($niz);

              // postoje dvije vrste nizove
              //1. indeksni nizovi
              $niz=[1,'Pero',true,3.7,[7]];
              echo '<pre>';
              print_r($niz);
              echo '</pre>';

              //ispiši Pero
              echo $niz[1];

              //ispiši 7
              echo $niz[4][0];

              //mjenjanje sadržaja
              $niz[1]='Maja';
              echo $niz[1];

              //2. asocijativni nizovi
              // sastoje se od parova ključ-vrijednost
              $niz=[
                'ime'=>'Marija',
                'prezime'=>'Zimska'
              ];

              echo '<pre>';
              print_r($niz);
              echo '</pre>';

              echo $niz['prezime'];


              // kombinacija

              $niz=[
                'Edunova',
                'grad'=>'Osijek',
                3
              ];

              echo '<pre>';
              print_r($niz);
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
